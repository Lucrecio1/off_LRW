<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;
use SplSubject;

class SuportController extends Controller
{
    public function index(Support $support){

        $supports = $support->all();

        //dd($supports);
        return view('index', compact('supports'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request, Support $support){

        $dados = $request->all();
        $dados['status'] = 'a';
        $support = $support->create($dados);

        return redirect()->route('supports.index');
        
    }

    public function show(string | int $id){
        
        // Support::find($id);
        // Support::where('$id',$id)->first;
        if (!$support = Support::find($id)) {
            return back();
        }
        
        return view('show', compact('support'));
        
    }

    public function editar( Support $suport,string | int $id) {
        
        if (!$suport = $suport->where('id', $id)->first()) {
            return back();
        }

        return view('editar', compact('suport'));
    }

    public function atualizar(Request $request,Support $support, string |int $id){
        if (!$support = Support::find($id)) {
            return back();
        }
        $support->update($request->only([
            'subject','body'
        ]));

        return redirect()->route('supports.index');
    }

    public function apagar(string | int $id){
        if (!$support = Support::find($id)) {
            return back();
        }
            $support->delete();
            return redirect()->route('supports.index');
    }
}
