<?php

namespace App\Http\Controllers;

use App\Models\Tb_endereco;
use App\Models\Tb_pessoa;
use App\Models\Tb_uf;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
  public function index()
  {
    $pessoa = Tb_pessoa::all();
    $endereco = Tb_endereco::all();
    return [$pessoa, $endereco];
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    $pessoa = new Tb_pessoa;
    $pessoa->nome = $request->nome;
    $pessoa->sobrenome = $request->sobrenome;
    $pessoa->idade = $request->idade;
    $pessoa->login = $request->login;
    $pessoa->senha = $request->senha;
    $pessoa->status = $request->status;
    $pessoa->save();
    $endereco =new Tb_endereco;
    $endereco->codigo_pessoa = $request->codigo_pessoa;
    $endereco->codigo_bairro = $request->codigo_bairro;
    $endereco->nome_rua = $request->nome_rua;
    $endereco->numero = $request->numero;
    $endereco->complemento = $request->complemento;
    $endereco->cep = $request->cep;
    $endereco->save();
    return [$pessoa, $endereco];
  }

  public function show($id)
  {
    $pessoa = Tb_pessoa::find();
    $endereco = Tb_endereco::find();
    return [$pessoa, $endereco];
  }

  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    $pessoa = Tb_pessoa::findOrfail($request->id)->update($request->all());
    $endereco = Tb_endereco::findOrfail($request->id)->update($request->all());
    return [$pessoa, $endereco];
  }

  public function destroy($id)
  {
    //
  }
}
