@extends('layout')

@section('content')
<div class="d-flex justify-content-between">
    <div class="col-7">
        <h3>Customers</h3>
    </div>
    <div class="col-5" align="right">
        <div class="btn-group" >
            <a href="#" class="btn btn-success active" aria-current="page">
                <i class="bi bi-file-person"></i> Nouveau client
            </a>
            <a href="#" class="btn btn-warning">
                 <i class="bi bi-"></i> Factures
                </a>
            <a href="#" class="btn btn-primary">Autres</a>
          </div>
    </div>
</div>
<hr/>
<table class="table table-bordered table-striped">
    <thead class="thead-light">
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Telephone</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Ahmet</td>
            <td>THIAM</td>
            <td>+221774200064</td>
            <td>thiamdidate88@gmail.com</td>
        </tr>
        <tr>
            <td>Ahmet</td>
            <td>THIAM</td>
            <td>+221774200064</td>
            <td>thiamdidate88@gmail.com</td>
        </tr>
        <tr>
            <td>Ahmet</td>
            <td>THIAM</td>
            <td>+221774200064</td>
            <td>thiamdidate88@gmail.com</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Telephone</th>
            <th>E-mail</th>
        </tr>
    </tfoot>
</table>
@endsection