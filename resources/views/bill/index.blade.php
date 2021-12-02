@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-4">
        <ul class="list-group">
            <li class="list-group-item">{{$customer->first_name}} {{$customer->last_name}}</li>
            <li class="list-group-item">{{$customer->email}}</li>
            <li class="list-group-item">{{$customer->phone}} </li>
            <li class="list-group-item">{{$customer->address}}</li>
        </ul>
    </div>

    <div class="col-md-8">

        <div class="d-flex justify-content-between">
            <div class="col-7">
                <h3>Bills</h3>
            </div>
            <div class="col-5" align="right">
                <div class="btn-group">
                    <a href="{{route('customers.bills.create', $customer->id)}}" class="btn btn-success">Nouvelle Facture</a>
                    {{-- <a href="#" class="btn btn-outline-primary">Factures</a>
                    <a href="#" class="btn btn-outline-primary">Paiements</a> --}}
                </div>
            </div>
        </div>
        <hr />
        <table class="table table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Details</th>
                    <th>IssuedAt</th>
                    <th>ExpireAt</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer->bills as $bill)
                <tr>
                    <td>{{$bill->name}}</td>
                    <td>{{$bill->details}}</td>
                    <td>{{$bill->issued_at}}</td>
                    <td>{{$bill->expire_at}}</td>
                    <td>{{$bill->status}}</td>
                    <td>
                        <div class="d-flex">
                            <a title="paiement" href="/">
                                <i class="fa fa-list text-primary mx-1" aria-hidden="true"></i>
                            </a>
                            <a title="" href="#" >
                                <i class="fa fa-edit text-secondary mx-1" aria-hidden="true"></i>
                            </a>
                            <a title="" href="#">
                                <i class="fa fa-edit text-warning mx-1" aria-hidden="true"></i>
                            </a>
                            <a title="" href="#">
                                <i class="fa fa-trash text-danger mx-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Details</th>
                    <th>IssuedAt</th>
                    <th>ExpireAt</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


@endsection
