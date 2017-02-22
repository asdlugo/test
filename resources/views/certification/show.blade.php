@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show certification
    </h1>
    <br>
    <form method = 'get' action = '{!!url("certification")!!}'>
        <button class = 'btn btn-primary'>certification Index</button>
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
                    <b><i>date_issue : </i></b>
                </td>
                <td>{!!$certification->date_issue!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>date_epiration : </i></b>
                </td>
                <td>{!!$certification->date_epiration!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>certification_status : </i></b>
                </td>
                <td>{!!$certification->certification_status!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>certification_serial : </i></b>
                </td>
                <td>{!!$certification->certification_serial!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection