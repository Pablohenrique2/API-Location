<?php

namespace App\Http\Controllers;

use App\Models\Tb_bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
  public function index()
  {
    return Tb_bairro::all();
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
      return  Tb_bairro::create( $request->all());
  }

  public function show($id)
  {
    return Tb_bairro::find($id);
  }

  public function edit($id)
  {
    //
  }

  public function update(Tb_bairro $bairro,Request $request)
  {
    $bairro->fill( $request->all());
    $bairro->save();
    return $bairro;
  }

  public function destroy($id)
  {
   //
  }
}
