@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Type_document_earth Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("type_document_earth")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New type_document_earth</button>
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
            @foreach($type_document_earths as $type_document_earth)
            <tr>
                <td>{!!$type_document_earth->name!!}</td>
                <td>{!!$type_document_earth->description!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/type_document_earth/{!!$type_document_earth->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/type_document_earth/{!!$type_document_earth->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/type_document_earth/{!!$type_document_earth->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $type_document_earths->render() !!}

</section>
@endsection
