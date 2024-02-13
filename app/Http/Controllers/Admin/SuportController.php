<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

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
}
