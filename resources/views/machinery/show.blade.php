@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show machinery
    </h1>
    <br>
    <form method = 'get' action = '{!!url("machinery")!!}'>
        <button class = 'btn btn-primary'>machinery Index</button>
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
                <td>{!!$machinery->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$machinery->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
