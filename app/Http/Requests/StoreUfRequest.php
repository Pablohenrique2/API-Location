<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUfRequest extends FormRequest
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
        'Unique:tb_ufs,nome',
      ],
      'sigla' => [
        'required',
        'Unique:tb_ufs,sigla',
      ] ,
      'status' => 'required',
    ];
  }

  public function messages()
  {
    return [
      'required' => 'O campo  e obrigadorio',
      'unique' => 'Não foi possível alterar, pois já existe um registro de UF com a mesma sigla cadastrada.',   
    ];
  }
}
