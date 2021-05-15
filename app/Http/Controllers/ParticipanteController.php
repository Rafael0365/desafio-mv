<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Participante;

class ParticipanteController extends Controller
{
    public function show(){
        $participantes = Participante::get();
        
        return view('participante',['participantes'=>$participantes]);
    }

    public function index(){
        return view('cadastro-participante');
    }

    public function edit($id){
        $participante = Participante::find($id);
        return view('cadastro-participante',['participante'=>$participante]);
    }

    public function update(Request $request, $id){
        $participante = Participante::find($id);
        $participante->nome = $request->input('nome');
        $participante->cpf = $request->input('cpf');
        $participante->prato = $request->input('prato');
        $participante->save();
        return redirect()->route('participante.lista');
    }

    public function delete($id){
        $participante = Participante::find($id);
        $participante->delete();
        return redirect()->route('participante.lista');
    }

    public function create(Request $request){
        $participante = new Participante();
        $participante->nome = $request->input('nome'); 
        $participante->cpf = $request->input('cpf'); 
        $participante->prato = $request->input('prato'); 
        $participante->save();
        return redirect()->route('participante.lista');
    }
}
