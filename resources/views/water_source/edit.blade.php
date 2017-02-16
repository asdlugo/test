@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit water_source
    </h1>
    <form method = 'get' action = '{!!url("water_source")!!}'>
        <button class = 'btn btn-danger'>water_source Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("water_source")!!}/{!!$water_source->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$water_source->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$water_source->
            description!!}"> 
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control" value="{!!$water_source->
            status!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection