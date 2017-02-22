@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show type_identy_card
    </h1>
    <br>
    <form method = 'get' action = '{!!url("type_identy_card")!!}'>
        <button class = 'btn btn-primary'>type_identy_card Index</button>
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
                <td>{!!$type_identy_card->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$type_identy_card->description!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>type : </i></b>
                </td>
                <td>{!!$type_identy_card->type!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection