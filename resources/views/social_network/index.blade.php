@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Social_network Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("social_network")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New social_network</button>
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
            @foreach($social_networks as $social_network)
            <tr>
                <td>{!!$social_network->name!!}</td>
                <td>{!!$social_network->description!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/social_network/{!!$social_network->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/social_network/{!!$social_network->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/social_network/{!!$social_network->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $social_networks->render() !!}

</section>
@endsection
