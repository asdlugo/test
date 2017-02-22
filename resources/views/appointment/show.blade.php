@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show appointment
    </h1>
    <br>
    <form method = 'get' action = '{!!url("appointment")!!}'>
        <button class = 'btn btn-primary'>appointment Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>appointment_status : </i></b>
                </td>
                <td>{!!$appointment->appointment_status!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>star_date : </i></b>
                </td>
                <td>{!!$appointment->star_date!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>finish_date : </i></b>
                </td>
                <td>{!!$appointment->finish_date!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>observation : </i></b>
                </td>
                <td>{!!$appointment->observation!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
