<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\Line;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    public function index($id)
    {
        $customer = Customer::find($id);

        return view('bill.index', ['customer' => $customer]);
    }

    public function create($id)
    {
        return view('bill.create', ['customerId' => $id]);
    }

    public function store(Request $request, $id)
    {

        $bill = new Bill();
        $bill->name = $request->name;
        $bill->details = $request->details;
        $bill->issued_at = $request->issued_at;
        $bill->expire_at = $request->expire_at;
        $bill->status = 0;
        $bill->customer_id = $id;
        $bill->save();
        if ($bill) {
            $customer = Customer::find($id);
            return view('bill.index', ['customer' => $customer]);
        } else {
            $customer = Customer::find($id);
            return view('bill.index', ['customer' => $customer]);
        }
    }

    public function show($id)
    {
        return Bill::find($id);
    }

    public function destroy($id)
    {
        Bill::destroy($id);
    }
}
