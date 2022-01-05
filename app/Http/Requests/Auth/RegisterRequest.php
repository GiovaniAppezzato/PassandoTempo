<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
{
    public $tipo_conta;
    protected $stopOnFirstFailure = true;

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
        strtolower(request('create')) == 'colaborador' ? $this->tipo_conta = 'Colaborador' : $this->tipo_conta = 'Comum';

        return [
            'name' => ['bail', 'required', 'string', 'max:255', 'min:4', 'unique:users'],
            'email' => ['bail', 'required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['bail', 'required', 'confirmed', 'min:8'], /* Rules\Password::defaults() */
            'data_nascimento' => $this->tipo_conta == 'Colaborador' ? ['required', 'date'] : ['nullable', 'date']
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        if($this->stopOnFirstFailure && $validator->errors()->any())
            return;

        $validator->after(function ($validator) {
            if(isset($this->data_nascimento) && RegisterRequest::validarNascimento($this->data_nascimento, ['min' => '1903-01-02', 'max' => date('Y-m-d')]) == false) {
                $validator->errors()->add('data_nascimento', 'Essa <span class="font-semibold">data</span> é inválida');
            }
        });
    }

    /**
     * regra de validação da data de nascimento
     * @param  string $data
     * @param  array $intervalo
     * @return boolean
     */
    public static function validarNascimento($data, $intervalo)
    {
        $data = strtotime($data);
        $intervalo = ['min' => strtotime($intervalo['min']), 'max' => strtotime($intervalo['max'])];

        return $data > $intervalo['min'] && $data < $intervalo['max'] ? true : false;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'É necessário informar um <span class="font-semibold">nome</span>.',
            'name.string' => 'Formato do <span class="font-semibold">nome</span> inválido.',
            'name.max' => 'O <span class="font-semibold">nome</span> atingiu o limite de caracteres.',
            'name.min' => 'O <span class="font-semibold">nome</span> deve ter pelo menos 4 caracteres.',
            'name.unique' => 'Já existe um usuário com esse <span class="font-semibold">nome</span>.',

            'email.required' => 'É necessário informar um <span class="font-semibold">email</span>.',
            'email.string' => 'Formato do <span class="font-semibold">email</span> inválido.',
            'email.email' => 'Formato do <span class="font-semibold">email</span> inválido.',
            'email.max' => 'O <span class="font-semibold">email</span> atingiu o limite de caracteres.',
            'email.unique' => 'Já existe um usuário com esse <span class="font-semibold">email</span>.',

            'password.required' => 'É necessário informar uma <span class="font-semibold">senha</span>',
            'password.confirmed' => 'As <span class="font-semibold">senhas</span> informadas não são iguais.',
            'password.min' => 'A <span class="font-semibold">senha</span> deve ter pelo menos 8 caracteres.',

            'data_nascimento.required' => 'É necessário informar uma <span class="font-semibold">data</span>.',
            'data_nascimento.date' => 'Formato da <span class="font-semibold">data</span> inválida.'
        ];
    }
}
