@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show social_network
    </h1>
    <br>
    <form method = 'get' action = '{!!url("social_network")!!}'>
        <button class = 'btn btn-primary'>social_network Index</button>
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
                <td>{!!$social_network->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$social_network->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
