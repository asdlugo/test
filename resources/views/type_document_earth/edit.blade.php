@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit type_document_earth
    </h1>
    <form method = 'get' action = '{!!url("type_document_earth")!!}'>
        <button class = 'btn btn-danger'>type_document_earth Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("type_document_earth")!!}/{!!$type_document_earth->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$type_document_earth->
            name!!}">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$type_document_earth->
            description!!}">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection
