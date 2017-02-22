@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Popular_organization Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("popular_organization")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New popular_organization</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>rif</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($popular_organizations as $popular_organization)
            <tr>
                <td>{!!$popular_organization->name!!}</td>
                <td>{!!$popular_organization->description!!}</td>
                <td>{!!$popular_organization->rif!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/popular_organization/{!!$popular_organization->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/popular_organization/{!!$popular_organization->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/popular_organization/{!!$popular_organization->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $popular_organizations->render() !!}

</section>
@endsection
