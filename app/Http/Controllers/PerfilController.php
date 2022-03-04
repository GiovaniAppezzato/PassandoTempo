<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdatePerfil;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Perfil;

class PerfilController extends Controller
{
    public function index()
    {
        $usuarioLogado = auth()->user();

        if($usuarioLogado !== null) {
            return redirect()->route('perfil.show', $usuarioLogado->name);
        } else {
            return redirect()->route('index');
        }
    }

    public function show($nome)
    {
        try {
            $usuarioLogado = auth()->user();
            $usuario = User::where('name', $nome)->first();
            $usuarioLogado != null && $usuarioLogado->name == $nome ? $edit = true : $edit = false;

            return view('usuario.show', [
                'usuario' => $usuario,
                'postagens' => $usuario->postagens,
                'edit' => $edit,
                'parametro' => $nome
            ]);
        } catch (\Exception $e) {

            $this->notify_error();
            return redirect()->back();
        }
    }

    public function update(UpdatePerfil $request, $nome)
    {
        try {
            $usuarioLogado  = auth()->user();
            $donoPerfil     = User::where('name', $nome)->first();

            if($usuarioLogado == $donoPerfil) {
                /**
                 * Tratamento de dados
                 */
                $perfil = $donoPerfil->perfil;
                $dados  = $request->only(['descricao']);

                $links = [];
                $imagemPerfil = $request->imagem_perfil;

                if(isset($request->privado) && $request->privado == 1):
                    $dados['privado'] = true;
                else:
                    $dados['privado'] = false;
                endif;

                foreach (Perfil::LINKSVALIDOS as $i => $item) {
                    if(array_key_exists($item, $request->all()) && $request->$item !== null){
                        $links[$item] = $request->$item;
                    } else {
                        $links[$item] = null;
                    }
                }

                 $dados['urls'] = $links;

                if($request->hasFile('imagem_perfil') && $imagemPerfil->isValid()):
                    if($perfil->imagem_perfil && Storage::exists("perfil/{$perfil->imagem_perfil}")):
                         Storage::delete("perfil/{$perfil->imagem_perfil}");
                    endif;

                    $nomeImagem = md5($imagemPerfil->getClientOriginalName() . strtotime('now')) . ".{$imagemPerfil->extension()}";

                    $imagemPerfil->storeAs('perfil', $nomeImagem);
                    $dados['imagem_perfil'] = $nomeImagem;
                endif;

                /**
                 * Realizando update
                 */
                $resultado = $perfil->update($dados);
                $resultado ? $this->notify('success', 'Perfil atualizado com sucesso!') : $this->notify('danger', 'Não foi possível atualizar');

                return redirect()->route('perfil.show', $donoPerfil->name);
            } else {
                $this->notify('danger', 'Permissão negada ao atualizar.');
                return redirect()->route('index');
            }
        } catch (\Exception $e) {

            $this->notify_error();
            return redirect()->back();
        }
    }
}
