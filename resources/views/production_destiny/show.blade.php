@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show production_destiny
    </h1>
    <br>
    <form method = 'get' action = '{!!url("production_destiny")!!}'>
        <button class = 'btn btn-primary'>production_destiny Index</button>
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
                <td>{!!$production_destiny->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$production_destiny->description!!}</td>
            </tr>

        </tbody>
    </table>
</section>
@endsection
