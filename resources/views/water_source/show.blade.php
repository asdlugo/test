@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show water_source
    </h1>
    <br>
    <form method = 'get' action = '{!!url("water_source")!!}'>
        <button class = 'btn btn-primary'>water_source Index</button>
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
                <td>{!!$water_source->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$water_source->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
