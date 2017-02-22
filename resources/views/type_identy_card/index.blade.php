@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Type_identy_card Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("type_identy_card")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New type_identy_card</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>type</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($type_identy_cards as $type_identy_card) 
            <tr>
                <td>{!!$type_identy_card->name!!}</td>
                <td>{!!$type_identy_card->description!!}</td>
                <td>{!!$type_identy_card->type!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/type_identy_card/{!!$type_identy_card->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/type_identy_card/{!!$type_identy_card->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/type_identy_card/{!!$type_identy_card->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $type_identy_cards->render() !!}

</section>
@endsection