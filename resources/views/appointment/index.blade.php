@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Appointment Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("appointment")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New appointment</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>appointment_status</th>
            <th>star_date</th>
            <th>finish_date</th>
            <th>observation</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($appointments as $appointment) 
            <tr>
                <td>{!!$appointment->appointment_status!!}</td>
                <td>{!!$appointment->star_date!!}</td>
                <td>{!!$appointment->finish_date!!}</td>
                <td>{!!$appointment->observation!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/appointment/{!!$appointment->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/appointment/{!!$appointment->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/appointment/{!!$appointment->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $appointments->render() !!}

</section>
@endsection