@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit institute
    </h1>
    <form method = 'get' action = '{!!url("institute")!!}'>
        <button class = 'btn btn-danger'>institute Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("institute")!!}/{!!$institute->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$institute->
            name!!}">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$institute->
            description!!}">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection
