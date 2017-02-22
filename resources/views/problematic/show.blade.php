@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show problematic
    </h1>
    <br>
    <form method = 'get' action = '{!!url("problematic")!!}'>
        <button class = 'btn btn-primary'>problematic Index</button>
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
                <td>{!!$problematic->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$problematic->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
