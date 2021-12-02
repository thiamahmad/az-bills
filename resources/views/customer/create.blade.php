@extends('layout')

@section('content')
<form method="POST" action="{{route('structures.customers.store', $structureId)}}">
    @csrf
    <div class="form-group row justify-content-center">
        <label class="col-md-8" for="firstName">Prénom {{$structureId}}</label>
        <div class="col-md-8 m-2">
            <input class="form-control" type="text" name="first_name" id="first_name_cust" placeholder="">
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label class="col-md-8" for="name">Nom</label>
        <div class="col-md-8 m-2">
            <input class="form-control" type="text" name="last_name" id="laste_name_cust" placeholder="">
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label class="col-md-8" for="email">E-mail</label>
        <div class="col-md-8 m-2">
            <input class="form-control" type="email" name="email" id="email_cust" placeholder="">
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label class="col-md-8" for="phone">Téléphone</label>
        <div class="col-md-8 m-2">
            <input class="form-control" type="text" name="phone" id="phone_cust" placeholder="">
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label class="col-md-8" for="address">Adresse</label>
        <div class="col-md-8 m-2">
            <input class="form-control" type="text" name="address" id="address_cust" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10 col-md-8">
            <button type="reset" class="btn btn-secondary">Annuler</button>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </div>
</form>
@endsection

