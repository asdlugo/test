@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Indigenous_person Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("indigenous_person")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New indigenous_person</button>
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
            @foreach($indigenous_peoples as $indigenous_person)
            <tr>
                <td>{!!$indigenous_person->name!!}</td>
                <td>{!!$indigenous_person->description!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/indigenous_person/{!!$indigenous_person->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/indigenous_person/{!!$indigenous_person->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/indigenous_person/{!!$indigenous_person->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $indigenous_peoples->render() !!}

</section>
@endsection
