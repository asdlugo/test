@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show transport
    </h1>
    <br>
    <form method = 'get' action = '{!!url("transport")!!}'>
        <button class = 'btn btn-primary'>transport Index</button>
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
                <td>{!!$transport->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$transport->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
