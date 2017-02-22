@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create popular_organization
    </h1>
    <form method = 'get' action = '{!!url("popular_organization")!!}'>
        <button class = 'btn btn-danger'>popular_organization Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("popular_organization")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="rif">rif</label>
            <input id="rif" name = "rif" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection
