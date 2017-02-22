@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Certification Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("certification")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New certification</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>date_issue</th>
            <th>date_epiration</th>
            <th>certification_status</th>
            <th>certification_serial</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($certifications as $certification) 
            <tr>
                <td>{!!$certification->date_issue!!}</td>
                <td>{!!$certification->date_epiration!!}</td>
                <td>{!!$certification->certification_status!!}</td>
                <td>{!!$certification->certification_serial!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/certification/{!!$certification->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/certification/{!!$certification->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/certification/{!!$certification->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $certifications->render() !!}

</section>
@endsection