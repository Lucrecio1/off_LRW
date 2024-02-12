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
}
