<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBairroRequest extends FormRequest
{
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
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'nome' => [
        'required',
        'string',
        'max:50',
        'min:3',
        'Unique:tb_bairros,nome',
      ],
      'codig_municipio' => [
        'required',
      ] ,
      'status' => 'required',
    ];
  }
  public function messages()
  {
    if($this->method('PUT')){
      return [
        'unique' => 'Não foi possível alterar, pois já existe um registro de Bairro com o mesmo nome para o Município informado.',
        'requerid' => 'Não foi possível alterar o Bairro.',  
      ];
    } else{
      return [
        'unique' => "Não foi possível cadastrar, pois já existe um registro de Bairro com o mesmo nome para o Município informado.",
        'requerid' => "Não foi possível cadastrar o bairro.",
      ];  
    }
      
  }
}
