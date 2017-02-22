@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show person
    </h1>
    <br>
    <form method = 'get' action = '{!!url("person")!!}'>
        <button class = 'btn btn-primary'>person Index</button>
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
                    <b><i>first_name : </i></b>
                </td>
                <td>{!!$person->first_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>second_name : </i></b>
                </td>
                <td>{!!$person->second_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>first_surname : </i></b>
                </td>
                <td>{!!$person->first_surname!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>second_surname : </i></b>
                </td>
                <td>{!!$person->second_surname!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>social_reason : </i></b>
                </td>
                <td>{!!$person->social_reason!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>identy_card : </i></b>
                </td>
                <td>{!!$person->identy_card!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>date_born : </i></b>
                </td>
                <td>{!!$person->date_born!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>gender_person : </i></b>
                </td>
                <td>{!!$person->gender_person!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>civil_state : </i></b>
                </td>
                <td>{!!$person->civil_state!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>degree_instructio : </i></b>
                </td>
                <td>{!!$person->degree_instructio!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>lives_production_unity : </i></b>
                </td>
                <td>{!!$person->lives_production_unity!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>address_domicile : </i></b>
                </td>
                <td>{!!$person->address_domicile!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>number_local : </i></b>
                </td>
                <td>{!!$person->number_local!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>number_mobile : </i></b>
                </td>
                <td>{!!$person->number_mobile!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$person->email!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection