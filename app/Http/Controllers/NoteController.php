<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{note};
use Throwable;

class NoteController extends Controller
{
    public function index(){
        
        return view('notas');
    }

    public function store(Request $request)
    {
        #validar
        list($rules, $messages) = $this->_rules();
        $this->validate($request,$rules,$messages);

        //Insertar
        $not = new note();
        $not->title = $request->input('title');
        $not->description = $request->input('description');
        $not->type = $request->input('type');
        $not->archive = 0;
        $not->fav = 0;
        $not-> save();

        return redirect()->route('notas.index');
    }

    public function noteAlls(){
        try {
           $dataNotes = note::where('archive','=',0)->get();
        } catch (Throwable $th) {
    
        }
       return $dataNotes;
    }

    public function noteRects(){
        try {
           $dataNotes = note::where('type','=','recort')->where('archive','=',0)->get();
        } catch (Throwable $th) {

        }

       return $dataNotes;
    }

    public function noteLinks(){
        try {
           $dataNotes = note::where('type','=','link')->where('archive','=',0)->get();
        } catch (Throwable $th) {

        }
       return $dataNotes;
    }

    public function updateArch($id) {
        $dataNote = note::find($id);
        $dataNote->archive = 1;
        $dataNote-> save();
        return redirect()->route('notas.index');
    }

    public function noteEdit($id) {
        try {
            $dataNotes = note::find($id);
        } catch (Throwable $th) {

        }
        return view('notaEdit')->with(compact('dataNotes'));
    }

    public function update(Request $request, $id) {
        #validar
        list($rules, $messages) = $this->_rules();
        $this->validate($request,$rules,$messages);
        
        #update
        $dataNote = note::find($id);
        $dataNote->title = $request->input('title');
        $dataNote->description = $request->input('description');
        $dataNote->type = $request->input('type');
        $dataNote-> save();
        return redirect()->route('notas.index');
    }

        #reglas de validar
        private function _rules(){
            $messages =[
                'title.required' => 'el titulo es requerido',
                'title.min' => 'Minimo 5 caracteres del titulo',
                'description.requerid' => 'escrebe la nota',
                'description.min' => 'la descripcion minimo 10 caracteres',
                'description.max' => 'maximo 200 carcteres de la nota',
                'type.not_in' => 'no has elejido la prioridad'
            ];
    
            $rules =[
                'title' => 'required|min:5',
                'description' => 'required|min:10|max:200',
                'type' => 'not_in:0'
            ];
    
            return array($rules,$messages);
        }
}
