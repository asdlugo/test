@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit popular_organization
    </h1>
    <form method = 'get' action = '{!!url("popular_organization")!!}'>
        <button class = 'btn btn-danger'>popular_organization Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("popular_organization")!!}/{!!$popular_organization->
        id!!}/update'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$popular_organization->
            name!!}">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$popular_organization->
            description!!}">
        </div>
        <div class="form-group">
            <label for="rif">rif</label>
            <input id="rif" name = "rif" type="text" class="form-control" value="{!!$popular_organization->
            rif!!}">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection
