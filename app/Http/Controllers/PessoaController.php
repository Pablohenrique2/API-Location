<?php

namespace App\Http\Controllers;

use App\Models\Tb_endereco;
use App\Models\Tb_pessoa;
use App\Models\Tb_uf;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pessoa = Tb_pessoa::all();
      $endereco = Tb_endereco::all();
      return [$pessoa, $endereco];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $pessoa = Tb_pessoa::findOrfail($request->id)->update($request->all());
      $endereco = Tb_endereco::findOrfail($request->id)->update($request->all());
      return [$pessoa, $endereco];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
