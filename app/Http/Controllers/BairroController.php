<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBairroRequest;
use App\Models\Tb_bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
  public function index(Request $request)
  {
    $codigo = $request->codigo_bairro;
    $nome = $request->nome;
    $status = $request->status;
    $codigo_municipio = $request->codigo_municipio;
    $bairro = Tb_bairro::where(function($query) use ($codigo,$nome,$codigo_municipio,$status){
      if($codigo && $nome && $codigo_municipio) {
        $query->where('codigo_bairro',$codigo);
        $query->where('nome',$nome);
        $query->where('codigo_municipio',$codigo_municipio);
      } elseif ($codigo) {
        $query->where('codigo_bairro',$codigo);
      } elseif ($nome && $codigo_municipio) {
        $query->where('nome',$nome);
        $query->where('codigo_municipio',$codigo_municipio);
      } elseif($nome){
        $query->where('nome',$nome);
      } elseif($status) {
        $query->where('status',$status);
      }
    })->get();

    return $bairro;
  }

  public function create()
  {
      //
  }

  public function store(StoreBairroRequest $request)
  {
    Tb_bairro::create( $request->all());
    return response()->json("Bairro cadastrado com sucesso.", 201);
  }

  public function show($id)
  {
    return Tb_bairro::find($id);
  }

  public function edit($id)
  {
    //
  }

  public function update(Tb_bairro $bairro,StoreBairroRequest $request)
  {
    $bairro->fill( $request->all());
    $bairro->save();
    return Tb_bairro::all();
  }

  public function destroy($id)
  {
   //
  }
}
