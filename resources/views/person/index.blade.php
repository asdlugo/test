@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Person Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("person")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New person</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>first_name</th>
            <th>second_name</th>
            <th>first_surname</th>
            <th>second_surname</th>
            <th>social_reason</th>
            <th>identy_card</th>
            <th>date_born</th>
            <th>gender_person</th>
            <th>civil_state</th>
            <th>degree_instructio</th>
            <th>lives_production_unity</th>
            <th>address_domicile</th>
            <th>number_local</th>
            <th>number_mobile</th>
            <th>email</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($people as $person) 
            <tr>
                <td>{!!$person->first_name!!}</td>
                <td>{!!$person->second_name!!}</td>
                <td>{!!$person->first_surname!!}</td>
                <td>{!!$person->second_surname!!}</td>
                <td>{!!$person->social_reason!!}</td>
                <td>{!!$person->identy_card!!}</td>
                <td>{!!$person->date_born!!}</td>
                <td>{!!$person->gender_person!!}</td>
                <td>{!!$person->civil_state!!}</td>
                <td>{!!$person->degree_instructio!!}</td>
                <td>{!!$person->lives_production_unity!!}</td>
                <td>{!!$person->address_domicile!!}</td>
                <td>{!!$person->number_local!!}</td>
                <td>{!!$person->number_mobile!!}</td>
                <td>{!!$person->email!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/person/{!!$person->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/person/{!!$person->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/person/{!!$person->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $people->render() !!}

</section>
@endsection