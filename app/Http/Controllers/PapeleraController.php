<?php

namespace App\Http\Controllers;
use App\Models\{note};
/* use Carbon\Carbon;
use Throwable; */

use Illuminate\Http\Request;

class PapeleraController extends Controller {
    
    public function index(){
        try {
            $dataNotes = note::all()->where('archive','=',1);
        } catch (Throwable $th) {

        }
        return view('papelera')->with(compact('dataNotes'));
    }

    public function updateArch($id) {
        $dataNote = note::find($id);
        $dataNote->archive = 0;
        $dataNote-> save();
        return redirect()->route('paper.index');
    }

    public function destroy($id)
    {
        $dataNote = note::find($id);
        $dataNote->delete();
        return back();
    }
}
