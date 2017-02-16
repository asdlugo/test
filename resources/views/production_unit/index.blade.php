@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Production_unit Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("production_unit")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New production_unit</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>number_document_earth</th>
            <th>name_production_unit</th>
            <th>total_surface</th>
            <th>usable_surface</th>
            <th>surface_used</th>
            <th>production_unit_clasification</th>
            <th>export</th>
            <th>import_need</th>
            <th>attached_agency</th>
            <th>agency_type</th>
            <th>agency_name</th>
            <th>agency_rif</th>
            <th>depart_quality_control</th>
            <th>depart_investigation</th>
            <th>pilot_plan</th>
            <th>community_participation</th>
            <th>sica_registred</th>
            <th>sunagro</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($production_units as $production_unit) 
            <tr>
                <td>{!!$production_unit->number_document_earth!!}</td>
                <td>{!!$production_unit->name_production_unit!!}</td>
                <td>{!!$production_unit->total_surface!!}</td>
                <td>{!!$production_unit->usable_surface!!}</td>
                <td>{!!$production_unit->surface_used!!}</td>
                <td>{!!$production_unit->production_unit_clasification!!}</td>
                <td>{!!$production_unit->export!!}</td>
                <td>{!!$production_unit->import_need!!}</td>
                <td>{!!$production_unit->attached_agency!!}</td>
                <td>{!!$production_unit->agency_type!!}</td>
                <td>{!!$production_unit->agency_name!!}</td>
                <td>{!!$production_unit->agency_rif!!}</td>
                <td>{!!$production_unit->depart_quality_control!!}</td>
                <td>{!!$production_unit->depart_investigation!!}</td>
                <td>{!!$production_unit->pilot_plan!!}</td>
                <td>{!!$production_unit->community_participation!!}</td>
                <td>{!!$production_unit->sica_registred!!}</td>
                <td>{!!$production_unit->sunagro!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/production_unit/{!!$production_unit->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/production_unit/{!!$production_unit->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/production_unit/{!!$production_unit->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $production_units->render() !!}

</section>
@endsection