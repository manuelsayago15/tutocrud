<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;

use Redirect;

use App\Http\Requests;

class UsuarioController extends Controller
{
    public function index(){
    	$data = Usuario::all();
    	return view('usuario.index', ['usuarios' => $data]);
    }

    public function newUser(){
    	return view('usuario.new');
    }

    public function store(Request $request){
    	$usuario = new Usuario;
    	$usuario->nombre = $request->nombre;
    	$usuario->apepat = $request->apepat;
    	$usuario->apemat = $request->apemat;
    	$usuario->save();
    	return Redirect::to('usuario');
    }

    public function edit($id){
    	$data = Usuario::findOrFail($id);
    	return view('usuario.edit', ['usuario' => $data]);
    }

    public function update(Request $request){
    	$usuario = Usuario::findOrFail($request->id);
    	$usuario->nombre = $request->nombre;
    	$usuario->apepat = $request->apepat;
    	$usuario->apemat = $request->apemat;
    	$usuario->save();
    	return Redirect::to('usuario');
    }

    public function delete($id) {
    	$usuario = Usuario::findOrFail($id);
    	$usuario->delete();
    	return Redirect::to('usuario');
    }
}
