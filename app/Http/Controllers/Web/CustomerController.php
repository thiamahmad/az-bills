<?php

namespace App\Http\Controllers\Web;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Structure;

class CustomerController extends Controller
{
    public function index($id)
    {
        $structure = Structure::find($id);
        //dd($structure);
        return view('customer.index', ['structure' => $structure]);
    }

    public function create($id)
    {
        return view('customer.create',['structureId' => $id]);
    }

    public function store(Request $request, $id)
    {
        $customer['first_name'] = $request->first_name;
        $customer['last_name'] = $request->last_name;
        $customer['email'] = $request->email;
        $customer['phone'] = $request->phone;
        $customer['address'] = $request->address;
        $customer['structure_id'] = $id;

        $structure = Structure::find($id);
        
        if(Customer::firstOrCreate($customer)){
            return view('structure.details', ['structure'=>$structure, 'addCustomer'=> 'client ajouté !']);
        }else{
            return view('structure.details', ['structure'=>$structure, 'addCustomer'=> 'client ajouté !']);
        }
    }

    public function show($id)
    {
        return Customer::find($id);
    }

    public function destroy($id)
    {
        return Customer::destroy($id);
    }
}
