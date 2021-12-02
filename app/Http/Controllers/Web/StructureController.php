<?php

namespace App\Http\Controllers\Web;

use App\Models\Structure;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StructureController extends Controller
{
    public function index(){
        $structures = Structure::all();
        return view('structure.index', ['structures' => $structures]);
    }

    public function create(Request $request){
        $users = User::all();
        return view('structure.create', ['users' => $users]);
    }

    public function store(Request $request){
        $structure = new Structure();

        $structure->name = $request->name;
        $structure->phone = $request->phone;
        $structure->email = $request->email;
        $structure->address = $request->address;
        $structure->site = $request->site;
        $structure->user_id = $request->user;

       if($structure->save()){
        $structures = Structure::all();
        return view('structure.index', ['addStructure' => 'Nouvelle structure ajoutéé !', 'structures' => $structures]);
       }else{
        $structures = Structure::all();

        return view('structure.index', ['addStructureFailed' => 'Nouvelle structure non ajoutéé !', 'structures' => $structures]); 
       }
    }

    

    public function show($id){
     $structure = Structure::find($id);
     return view('structure.details', ['structure' => $structure]);
    }
}
