<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Perfil;

class UpdatePerfil extends FormRequest
{
    protected $stopOnFirstFailure = false;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'descricao' => ['string', 'max:130', 'min:5', 'nullable'],
            'imagem_perfil' => ['mimes:jpg,png,jpeg', 'max:5000', 'nullable'],
        ];

        foreach (Perfil::getLinksValidos() as $i => $link) {
            $rules[$link] = ['url', 'nullable'];
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        $mensagens = [
            'descricao.string' => 'Formato da descrição é inválida.',
            'descricao.max' => 'A descrição atingiu o limite de caracteres.',
            'descricao.min' => 'A descrição deve ter pelo menos 5 caracteres.',

            'imagem_perfil.file' => 'A imagem de perfil deve ser um arquivo.',
            'imagem_perfil.max' => 'A imagem deve ter no máximo 5mb.',
            'imagem_perfil.mimes' => 'Formato do arquivo da imagem não é válida.',
        ];

        foreach (Perfil::getLinksValidos() as $i => $item) {
            $mensagens["{$item}.url"] = "Deve ser informado uma URL válida no link - " . ucfirst($item);
        }

        // dd($mensagens);
        return $mensagens;
    }
}
