@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit appointment
    </h1>
    <form method = 'get' action = '{!!url("appointment")!!}'>
        <button class = 'btn btn-danger'>appointment Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("appointment")!!}/{!!$appointment->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="appointment_status">appointment_status</label>
            <input id="appointment_status" name = "appointment_status" type="text" class="form-control" value="{!!$appointment->
            appointment_status!!}"> 
        </div>
        <div class="form-group">
            <label for="star_date">star_date</label>
            <input id="star_date" name = "star_date" type="text" class="form-control" value="{!!$appointment->
            star_date!!}"> 
        </div>
        <div class="form-group">
            <label for="finish_date">finish_date</label>
            <input id="finish_date" name = "finish_date" type="text" class="form-control" value="{!!$appointment->
            finish_date!!}"> 
        </div>
        <div class="form-group">
            <label for="observation">observation</label>
            <input id="observation" name = "observation" type="text" class="form-control" value="{!!$appointment->
            observation!!}"> 
        </div>
        <button class = 'btn btn-primary' type ='submit'>Update</button>
    </form>
</section>
@endsection