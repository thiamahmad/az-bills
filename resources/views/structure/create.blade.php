@extends('layout')

@section('content')
<form method="POST" action="{{route('structures.store')}}">
    @csrf
    
    <div class="form-group row justify-content-center">
        <label for="name" class="col-md-8">Nom</label>
        <div class="col-md-8 m-2">
            <input type="text" class="form-control" name="name" id="nameStr" placeholder="TBM" required>
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label for="phone" class="col-md-8">Téléphone</label>
        <div class="col-md-8 m-2">
            <input type="text" class="form-control" name="phone" id="phoneStr" placeholder="701071213">
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label for="email" class="col-md-8">E-mail</label>
        <div class="col-md-8 m-2">
            <input type="text" class="form-control" name="email" id="emailStr" placeholder="example@gmail.com">
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label for="address" class="col-md-8">Responsable</label>
        <div class="col-md-8 m-2">
            <input type="text" class="form-control" name="address" id="addresseStr" placeholder="Hersent, Rue 43">
        </div>
    </div>
    <div class="form-group row justify-content-center">
        <label for="site" class="col-md-8">site</label>
        <div class="col-md-8 m-2">
            <input type="text" class="form-control" name="site" id="siteStr" placeholder="">
        </div>
    </div>

    <div class="form-group row justify-content-center">
        <label for="code" class="col-md-8">user</label>
        <div class="col-md-8 m-2">
            <select class="form-control" name="user" id="userStr" required>
                <option selected>Choose a user</option>
               @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
               @endforeach
            </select>
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
