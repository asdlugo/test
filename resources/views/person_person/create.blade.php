@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create person_person
    </h1>
    <form method = 'get' action = '{!!url("person_person")!!}'>
        <button class = 'btn btn-danger'>person_person Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("person_person")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="family_relationship">family_relationship</label>
            <input id="family_relationship" name = "family_relationship" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection