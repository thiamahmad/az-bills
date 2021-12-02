<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index(){
        return view('structure.index');
    }

    public function create(Request $request){
        return view('structure.create');

    }

    public function store(Request $request){

    }

    

    public function show($id){
        
    }
}
