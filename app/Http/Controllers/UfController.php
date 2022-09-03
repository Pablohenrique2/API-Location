<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUfRequest;
use App\Models\Tb_uf;
use Illuminate\Http\Request;
use Exception;


class UfController extends Controller
{
  public function index(Request $request)
  {
    
    $codigo = $request->codigo;
    $nome = $request->nome;
    $sigla = $request->sigla;
    $uf = Tb_uf::where(function($query) use ($codigo,$nome,$sigla){
      if($codigo && $nome && $sigla) {
        $query->where('codigo',$codigo);
        $query->where('nome',$nome);
        $query->where('sigla',$sigla);
      } elseif ($sigla) {
        $query->where('sigla',$sigla);
      } elseif ($nome && $sigla) {
        $query->where('nome',$nome);
        $query->where('sigla',$sigla);
      } elseif($nome){
        $query->where('nome',$nome);
      }
    })->get();
    
    return $uf;
  }

  public function create()
  {
    //
  }

  public function store(StoreUfRequest $request)
  {
    Tb_uf::create( $request->all());
    return response()->json("UF cadastrada com sucesso.", 201);
  }

  public function show(Request $request,$id)
  {
    
    $uf = Tb_uf::find($id);
    return $uf;
  }

  public function edit($id)
  {
   //
  }

  public function update(Tb_uf $uf, StoreUfRequest $request)
  {
    $uf->fill( $request->all());
    $uf->save();
    return $uf;
    
  }

  public function destroy($id)
  {
    //
  }
}
