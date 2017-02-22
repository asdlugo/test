@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit indigenous_person
    </h1>
    <form method = 'get' action = '{!!url("indigenous_person")!!}'>
        <button class = 'btn btn-danger'>indigenous_person Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("indigenous_person")!!}/{!!$indigenous_person->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$indigenous_person->
            name!!}">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$indigenous_person->
            description!!}">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection
