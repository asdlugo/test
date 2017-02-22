@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit type_identy_card
    </h1>
    <form method = 'get' action = '{!!url("type_identy_card")!!}'>
        <button class = 'btn btn-danger'>type_identy_card Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("type_identy_card")!!}/{!!$type_identy_card->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$type_identy_card->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control" value="{!!$type_identy_card->
            description!!}"> 
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <input id="type" name = "type" type="text" class="form-control" value="{!!$type_identy_card->
            type!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection