@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Person_person Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("person_person")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New person_person</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>family_relationship</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($person_people as $person_person) 
            <tr>
                <td>{!!$person_person->family_relationship!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/person_person/{!!$person_person->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/person_person/{!!$person_person->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/person_person/{!!$person_person->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $person_people->render() !!}

</section>
@endsection