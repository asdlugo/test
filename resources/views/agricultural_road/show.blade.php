@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show agricultural_road
    </h1>
    <br>
    <form method = 'get' action = '{!!url("agricultural_road")!!}'>
        <button class = 'btn btn-primary'>agricultural_road Index</button>
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
                <td>{!!$agricultural_road->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$agricultural_road->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
