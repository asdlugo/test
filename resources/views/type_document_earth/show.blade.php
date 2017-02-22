@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show type_document_earth
    </h1>
    <br>
    <form method = 'get' action = '{!!url("type_document_earth")!!}'>
        <button class = 'btn btn-primary'>type_document_earth Index</button>
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
                <td>{!!$type_document_earth->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$type_document_earth->description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection
