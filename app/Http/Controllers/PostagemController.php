<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Postagem;

class PostagemController extends Controller
{
    public function index()
    {
        $usuario = auth()->user();
        $postagens = Postagem::all();

        // dd($postagens);

        return view('index', ['usuario' => $usuario, 'postagens' => $postagens]);
    }

    public function show()
    {
        return view('postagem.show');
    }

    public function create()
    {
        return view('postagem.create');
    }

    public function store(Request $request)
    {
        $usuario = auth()->user();
        $dados = $request->except(['_token']);

        try {
            DB::beginTransaction();
            /**
             * Validando dados:
             */
            $messages = [
                'titulo.required' => 'Informar um <b>título</b> é obrigatório',
                'titulo.min' => 'O <b>título</b> deve ter pelo menos 10 caracteres',
                'titulo.max' => 'O <b>título</b> atingiu o limite de caracteres',

                'descricao.required' => 'Informar a <b>descrição</b> é obrigatório',
                'descricao.min' => 'O <b>descrição</b> deve ter pelo menos 25 caracteres',
                'descricao.max' => 'O <b>descrição</b> atingiu o limite de caracteres',

                'imagem.required' => 'Selecionar uma <b>imagem</b> é obrigatório',
                'imagem.file' => 'A imagem de perfil deve ser um arquivo',
                'imagem.max' => 'A imagem deve ter no máximo <b>5mb</b>',
                'imagem.mimes' => 'Formato da imagem não é válida',

                'tema.required' => 'Selecionar <b>tema</b> é obrigatório',
                'tema.string' => 'Formato do tema inválido'
            ];

            $validate = Validator::make($request->all(), [
                'titulo' => 'required|min:10|max:180',
                'descricao' => 'required|min:10|max:560',
                // 'imagem' =>'required|mimes:jpg,png,jpeg|max:5000',
                'tema' => 'required|string'
            ], $messages);

            /**
             * Publicando postagem
             */
            if (!$validate->errors()->any()) {
                $arquivo            = $dados['imagem'];
                $dados['titulo']    = $this->clear($request->titulo);
                $dados['descricao'] = $this->clear($request->descricao);
                $dados['hash']      = md5($usuario->name . strtotime('now'));

                if($request->hasFile('imagem') && $arquivo->isValid()):
                    $nome = md5($usuario->name . strtotime('now')) . ".{$arquivo->extension()}";

                    $arquivo->storeAs('postagem', $nome);
                    $dados['imagem'] = $nome;
                endif;

                Postagem::create([
                    'titulo' => $dados['titulo'],
                    'descricao' => $dados['descricao'],
                    'hash' => $dados['hash'],
                    'conteudo' => json_decode($dados['conteudo']),
                    'tema' => $dados['tema'],
                    'imagem_postagem' => $request->imagem,
                    'user_id' => $usuario->id
                ]);

                DB::commit();

                return response()->json([
                    'status' => 'success',
                    'message' => 'Publicação postada com sucesso!',
                    'data' => $dados
                ]);

            } else {

                DB::rollBack();

                return response()->json([
                    'status' => 'invalid',
                    'errors' => $validate->errors()->all()
                ]);
            }

        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message'=> self::MESSAGES['error_system']
            ]);
        }
    }
}
