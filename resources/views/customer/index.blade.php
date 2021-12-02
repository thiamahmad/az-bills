@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-4">
        <ul class="list-group">
            <li class="list-group-item">{{$structure->name}}</li>
            <li class="list-group-item">{{$structure->user->name}}</li>
            <li class="list-group-item">{{$structure->phone}}</li>
            <li class="list-group-item">{{$structure->email}}</li>
            <li class="list-group-item">{{$structure->address}}</li>
        </ul>
    </div>
    <div class="col-md-8">
        <div class="d-flex justify-content-between">
            <div class="col-7">
                <h3>Customers</h3>
            </div>
            <div class="col-5" align="right">
                <div class="btn-group">
                    <a href="{{route('structures.customers.create', $structure->id)}}" class="btn btn-success">Nouveau client</a>
                    {{-- <a href="#" class="btn btn-outline-primary">Factures</a>
                    <a href="#" class="btn btn-outline-primary">Paiements</a> --}}
                </div>
            </div>
        </div>
        <hr />
        <table class="table table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Telephone</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($structure->customers as $customer)
                <tr>
                    <td>{{$customer->first_name}}</td>
                    <td>{{$customer->last_name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->address}}</td>
                    <td>
                        <div class="d-flex">
                            <a title="bills" href="{{route('customers.bills.index', $customer->id)}}">
                                <i class="fa fa-list text-primary mx-1" aria-hidden="true"></i>
                            </a>
                            <a title="" href="#">
                                <i class="fa fa-eye text-secondary mx-1" aria-hidden="true"></i>
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
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Telephone</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


@endsection

