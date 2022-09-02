<?php

namespace App\Http\Controllers;

use App\Models\Tb_municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
  public function index()
  {
    return  Tb_municipio::all();
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    return  Tb_municipio::create( $request->all());
  }

  public function show($id)
  {
      return Tb_municipio::find($id);
  }

  public function edit($id)
  {
    //
  }

  public function update(Tb_municipio $municipio,Request $request)
  {
    $municipio->fill( $request->all());
    $municipio->save();
    return $municipio;
  }

  public function destroy($id)
  {
    //
  }
}
