<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMunicipioRequest;
use App\Models\Tb_municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
  public function index(Request $request)
  {
    $codigo = $request->codigo_uf;
    $nome = $request->nome;
    $codigo_municipio = $request->codigo_municipio;
    $municipio = Tb_municipio::where(function($query) use ($codigo,$nome,$codigo_municipio){
      if($codigo && $nome && $codigo_municipio) {
        $query->where('codigo_uf',$codigo);
        $query->where('nome',$nome);
        $query->where('codigo_municipio',$codigo_municipio);
      } elseif ($codigo_municipio) {
        $query->where('codigo_municipio',$codigo_municipio);
      } elseif ($nome && $codigo_municipio) {
        $query->where('nome',$nome);
        $query->where('codigo_municipio',$codigo_municipio);
      }
    })->get();

    return $municipio;
  }

  public function create()
  {
    //
  }

  public function store(StoreMunicipioRequest $request)
  {
    Tb_municipio::create( $request->all());
    return response()->json("Município cadastrado com sucesso.", 201);
  }

  public function show($id)
  {
      return Tb_municipio::find($id);
  }

  public function edit($id)
  {
    //
  }

  public function update(Tb_municipio $municipio,StoreMunicipioRequest $request)
  {
    $municipio->fill( $request->all());
    $municipio->save();
    return Tb_municipio::all();
  }

  public function destroy($id)
  {
    //
  }
}
