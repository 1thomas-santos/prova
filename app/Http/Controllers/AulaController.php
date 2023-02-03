<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        
        Aula::create([
            'materia'=>$request->input('materia'),
            'descricao'=>$request->input('descricao'),
            'horario'=>$request->input('horario'),
            'professor'=>$request->input('professor'),
            'user_id' => auth()->user()->id
        ]);
        

        return redirect()->route('dashboard');
    }

    public function edit()
    {
        
    }

    public function update () 
    {

    }

    public function destroy($id)
    {
        Aula::where('id', $id)->delete();
        return back();
    }
    
}