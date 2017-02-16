@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show person_person
    </h1>
    <br>
    <form method = 'get' action = '{!!url("person_person")!!}'>
        <button class = 'btn btn-primary'>person_person Index</button>
    </form>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>family_relationship : </i></b>
                </td>
                <td>{!!$person_person->family_relationship!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection