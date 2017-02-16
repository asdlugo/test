@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show indigenous_person
    </h1>
    <br>
    <form method = 'get' action = '{!!url("indigenous_person")!!}'>
        <button class = 'btn btn-primary'>indigenous_person Index</button>
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
                    <b><i>name : </i></b>
                </td>
                <td>{!!$indigenous_person->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$indigenous_person->description!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>status : </i></b>
                </td>
                <td>{!!$indigenous_person->status!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection