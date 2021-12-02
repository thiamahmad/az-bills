@extends('layout')

@section('content')
<form method="POST" action="{{route('customers.bills.store', $customerId)}}">
    @csrf
    
    <div class="form-group row justify-content-center">
        <label for="name" class="col-md-8">Name</label>
        <div class="col-md-8 m-2">
            <input type="text" class="form-control" name="name" id="name_bill" placeholder="facture-200" required>
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label for="phone" class="col-md-8">Details</label>
        <div class="col-md-8 m-2">
            <textarea type="text" class="form-control" name="details" id="details_bill" row="3"></textarea>
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label for="email" class="col-md-8">IssuedAt</label>
        <div class="col-md-8 m-2">
            <input type="date" class="form-control" name="issued_at" id="issued_at_bill" placeholder="">
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label for="address" class="col-md-8">ExpireAt</label>
        <div class="col-md-8 m-2">
            <input type="date" class="form-control" name="expire_at" id="expire_at_bill" placeholder="">
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
