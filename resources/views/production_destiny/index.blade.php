@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Production_destiny Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("production_destiny")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New production_destiny</button>
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
            @foreach($production_destinies as $production_destiny)
            <tr>
                <td>{!!$production_destiny->name!!}</td>
                <td>{!!$production_destiny->description!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/production_destiny/{!!$production_destiny->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/production_destiny/{!!$production_destiny->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/production_destiny/{!!$production_destiny->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $production_destinies->render() !!}

</section>
@endsection
