<?php

namespace App\Http\Controllers;

use App\Models\Tb_uf;
use Illuminate\Http\Request;

class UfController extends Controller
{
  public function index()
  {
    return Tb_uf::all();
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    return  Tb_uf::create( $request->all());
  }

  public function show($id)
  {
    return Tb_uf::find($id);
  }

  public function edit($id)
  {
   //
  }

  public function update(Tb_uf $uf, Request $request)
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
