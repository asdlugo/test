@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show popular_organization
    </h1>
    <br>
    <form method = 'get' action = '{!!url("popular_organization")!!}'>
        <button class = 'btn btn-primary'>popular_organization Index</button>
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
                <td>{!!$popular_organization->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>description : </i></b>
                </td>
                <td>{!!$popular_organization->description!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>rif : </i></b>
                </td>
                <td>{!!$popular_organization->rif!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>status : </i></b>
                </td>
                <td>{!!$popular_organization->status!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection