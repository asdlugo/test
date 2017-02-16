@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit person_person
    </h1>
    <form method = 'get' action = '{!!url("person_person")!!}'>
        <button class = 'btn btn-danger'>person_person Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("person_person")!!}/{!!$person_person->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="family_relationship">family_relationship</label>
            <input id="family_relationship" name = "family_relationship" type="text" class="form-control" value="{!!$person_person->
            family_relationship!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection