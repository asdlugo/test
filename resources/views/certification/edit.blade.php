@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit certification
    </h1>
    <form method = 'get' action = '{!!url("certification")!!}'>
        <button class = 'btn btn-danger'>certification Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("certification")!!}/{!!$certification->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="date_issue">date_issue</label>
            <input id="date_issue" name = "date_issue" type="text" class="form-control" value="{!!$certification->
            date_issue!!}"> 
        </div>
        <div class="form-group">
            <label for="date_epiration">date_epiration</label>
            <input id="date_epiration" name = "date_epiration" type="text" class="form-control" value="{!!$certification->
            date_epiration!!}"> 
        </div>
        <div class="form-group">
            <label for="certification_status">certification_status</label>
            <input id="certification_status" name = "certification_status" type="text" class="form-control" value="{!!$certification->
            certification_status!!}"> 
        </div>
        <div class="form-group">
            <label for="certification_serial">certification_serial</label>
            <input id="certification_serial" name = "certification_serial" type="text" class="form-control" value="{!!$certification->
            certification_serial!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection