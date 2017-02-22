@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Water_source Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("water_source")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New water_source</button>
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
            @foreach($water_sources as $water_source)
            <tr>
                <td>{!!$water_source->name!!}</td>
                <td>{!!$water_source->description!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/water_source/{!!$water_source->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/water_source/{!!$water_source->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/water_source/{!!$water_source->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $water_sources->render() !!}

</section>
@endsection
