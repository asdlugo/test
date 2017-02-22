@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show service
    </h1>
    <br>
    <form method = 'get' action = '{!!url("service")!!}'>
        <button class = 'btn btn-primary'>service Index</button>
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
                <td>{!!$service->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$service->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
