@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Agricultural_road Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("agricultural_road")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New agricultural_road</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($agricultural_roads as $agricultural_road)
            <tr>
                <td>{!!$agricultural_road->name!!}</td>
                <td>{!!$agricultural_road->description!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/agricultural_road/{!!$agricultural_road->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/agricultural_road/{!!$agricultural_road->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/agricultural_road/{!!$agricultural_road->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $agricultural_roads->render() !!}

</section>
@endsection
