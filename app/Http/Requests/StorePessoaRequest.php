<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePessoaRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return false;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      "codigoPessoa"=>['required'] ,
      "nome"=>['required'] ,
      "sobrenome"=>['required'] ,
      "idade"=>['required'] ,
      "login"=>['required'] ,
      "senha"=>['required'] ,
      "status"=>['required'] ,
      "codigoEndereco"=> ['required'] ,
      "codigoPessoa"=> ['required'] ,
      "codigoBairro"=> ['required'] ,
      "nomeRua"=> ['required'] ,
      "numero"=> ['required'] ,
      "complemento"=> ['required'] ,
      "cep"=> ['required'] ,
    ];
  }
  public function messages()
  {
    if($this->method('PUT')){
      return [
        'requerid' => 'Não foi possível alterar a Pessoa.',  
      ];
    } else{
      return [
        'requerid' => "Não foi possível cadastrar a pessoa.",
      ];  
    }
  }
}