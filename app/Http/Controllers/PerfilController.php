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

        if($usuarioLogado !== null):
            return redirect()->route('perfil.show', $usuarioLogado->name);
        else:
            return redirect()->route('index');
        endif;
    }

    public function show($nome)
    {
        $usuarioLogado = auth()->user();
        $usuario = User::where('name', $nome)->first();
        $usuarioLogado != null && $usuarioLogado->name == $nome ? $edit = true : $edit = false;

        return view('usuario.show', ['usuario' => $usuario, 'edit' => $edit, 'parametro' => $nome]);
    }

    public function update(UpdatePerfil $request, $nome)
    {
        $usuarioLogado = auth()->user();
        $donoPerfil = User::where('name', $nome)->first();

        if($usuarioLogado == $donoPerfil):
            $perfil = $donoPerfil->perfil;
            $dados = $request->only(['descricao']);

            $links = [];
            $imagemPerfil = $request->imagem_perfil;

            if(isset($request->privado) && $request->privado == 1):
                $dados['privado'] = true;
            else:
                $dados['privado'] = false;
            endif;

            /* ===== Empacotando os links ===== */
            foreach (Perfil::LINKSVALIDOS as $item) {
                if(array_key_exists($item, $request->all()) && $request->$item !== null):
                    $links[$item] = $request->$item;
                else:
                    $links[$item] = null;
                endif;
            }

            $dados['urls'] = $links;

            if($request->hasFile('imagem_perfil') && $imagemPerfil->isValid()):
                /* ===== Atualizando Imagem ===== */
                if($perfil->imagem_perfil && Storage::exists("perfil/{$perfil->imagem_perfil}")):
                     Storage::delete("perfil/{$perfil->imagem_perfil}");
                endif;

                $nomeImagem = md5($imagemPerfil->getClientOriginalName() . strtotime('now')) . ".{$imagemPerfil->extension()}";

                $imagemPerfil->storeAs('perfil', $nomeImagem);
                $dados['imagem_perfil'] = $nomeImagem;
            endif;

            $resultado = $perfil->update($dados);
            return redirect()
                        ->route('perfil.show', $donoPerfil->name)
                        ->with('success', 'Perfil atualizado com sucesso!');

        else:
            return redirect()->route('index');
        endif;
    }
}
