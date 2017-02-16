@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show production_unit
    </h1>
    <br>
    <form method = 'get' action = '{!!url("production_unit")!!}'>
        <button class = 'btn btn-primary'>production_unit Index</button>
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
                    <b><i>number_document_earth : </i></b>
                </td>
                <td>{!!$production_unit->number_document_earth!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name_production_unit : </i></b>
                </td>
                <td>{!!$production_unit->name_production_unit!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>total_surface : </i></b>
                </td>
                <td>{!!$production_unit->total_surface!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>usable_surface : </i></b>
                </td>
                <td>{!!$production_unit->usable_surface!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>surface_used : </i></b>
                </td>
                <td>{!!$production_unit->surface_used!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>production_unit_clasification : </i></b>
                </td>
                <td>{!!$production_unit->production_unit_clasification!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>export : </i></b>
                </td>
                <td>{!!$production_unit->export!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>import_need : </i></b>
                </td>
                <td>{!!$production_unit->import_need!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>attached_agency : </i></b>
                </td>
                <td>{!!$production_unit->attached_agency!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>agency_type : </i></b>
                </td>
                <td>{!!$production_unit->agency_type!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>agency_name : </i></b>
                </td>
                <td>{!!$production_unit->agency_name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>agency_rif : </i></b>
                </td>
                <td>{!!$production_unit->agency_rif!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>depart_quality_control : </i></b>
                </td>
                <td>{!!$production_unit->depart_quality_control!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>depart_investigation : </i></b>
                </td>
                <td>{!!$production_unit->depart_investigation!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>pilot_plan : </i></b>
                </td>
                <td>{!!$production_unit->pilot_plan!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>community_participation : </i></b>
                </td>
                <td>{!!$production_unit->community_participation!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sica_registred : </i></b>
                </td>
                <td>{!!$production_unit->sica_registred!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sunagro : </i></b>
                </td>
                <td>{!!$production_unit->sunagro!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection