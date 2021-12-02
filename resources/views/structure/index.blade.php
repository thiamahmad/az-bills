@extends('layout')

@section('content')
<div class="d-flex justify-content-between">
    <div class="col-7">
        <h3>Structures</h3>
    </div>
    <div class="col-5" align="right">
        <div class="btn-group">
            <a href="{{ route('structures.create') }}" class="btn btn-outline-success">Nouvelle structure</a>
            <a href="#" class="btn btn-outline-primary">Factures</a>
            <a href="#" class="btn btn-outline-primary">Clients</a>
            <a href="#" class="btn btn-outline-primary">Paiement</a>
        </div>
    </div>
</div>
<hr />

@isset($addStructure)
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>Success</strong> {{$addStructure}}.
</div>
@endisset
<script>
    $(".alert").alert();

</script>

<table class="table table-bordered table-striped">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Site</th>
            <th>Responsable</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($structures as $structure)
        <tr>
            <td>{{$structure->id}}</td>
            <td>{{$structure->name}}</td>
            <td>{{$structure->phone}}</td>
            <td>{{$structure->email}}</td>
            <td>{{$structure->address}}</td>
            <td>{{$structure->site}}</td>
            <td>{{$structure->user->name}}</td>
            <td>
                <div class="d-flex">
                    <a title="customers" href="{{route('structures.customers.index', $structure->id)}}">
                        <i class="fa fa-list text-primary mx-1" aria-hidden="true"></i>
                    </a>
                     <a title="" href="">
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
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Site</th>
            <th>Responsable</th>
            <th>Actions</th>
        </tr>
    </tfoot>
</table>
@endsection

