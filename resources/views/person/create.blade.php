@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create person
    </h1>
    <form method = 'get' action = '{!!url("person")!!}'>
        <button class = 'btn btn-danger'>person Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("person")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="first_name">first_name</label>
            <input id="first_name" name = "first_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="second_name">second_name</label>
            <input id="second_name" name = "second_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="first_surname">first_surname</label>
            <input id="first_surname" name = "first_surname" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="second_surname">second_surname</label>
            <input id="second_surname" name = "second_surname" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="social_reason">social_reason</label>
            <input id="social_reason" name = "social_reason" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="identy_card">identy_card</label>
            <input id="identy_card" name = "identy_card" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="date_born">date_born</label>
            <input id="date_born" name = "date_born" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="gender_person">gender_person</label>
            <input id="gender_person" name = "gender_person" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="civil_state">civil_state</label>
            <input id="civil_state" name = "civil_state" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="degree_instructio">degree_instructio</label>
            <input id="degree_instructio" name = "degree_instructio" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="lives_production_unity">lives_production_unity</label>
            <input id="lives_production_unity" name = "lives_production_unity" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="address_domicile">address_domicile</label>
            <input id="address_domicile" name = "address_domicile" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="number_local">number_local</label>
            <input id="number_local" name = "number_local" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="number_mobile">number_mobile</label>
            <input id="number_mobile" name = "number_mobile" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection