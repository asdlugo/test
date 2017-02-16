@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create appointment
    </h1>
    <form method = 'get' action = '{!!url("appointment")!!}'>
        <button class = 'btn btn-danger'>appointment Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("appointment")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="appointment_status">appointment_status</label>
            <input id="appointment_status" name = "appointment_status" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="star_date">star_date</label>
            <input id="star_date" name = "star_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="finish_date">finish_date</label>
            <input id="finish_date" name = "finish_date" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="observation">observation</label>
            <input id="observation" name = "observation" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection