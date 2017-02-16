@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create production_unit
    </h1>
    <form method = 'get' action = '{!!url("production_unit")!!}'>
        <button class = 'btn btn-danger'>production_unit Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("production_unit")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="number_document_earth">number_document_earth</label>
            <input id="number_document_earth" name = "number_document_earth" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name_production_unit">name_production_unit</label>
            <input id="name_production_unit" name = "name_production_unit" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="total_surface">total_surface</label>
            <input id="total_surface" name = "total_surface" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="usable_surface">usable_surface</label>
            <input id="usable_surface" name = "usable_surface" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="surface_used">surface_used</label>
            <input id="surface_used" name = "surface_used" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="production_unit_clasification">production_unit_clasification</label>
            <input id="production_unit_clasification" name = "production_unit_clasification" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="export">export</label>
            <input id="export" name = "export" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="import_need">import_need</label>
            <input id="import_need" name = "import_need" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="attached_agency">attached_agency</label>
            <input id="attached_agency" name = "attached_agency" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="agency_type">agency_type</label>
            <input id="agency_type" name = "agency_type" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="agency_name">agency_name</label>
            <input id="agency_name" name = "agency_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="agency_rif">agency_rif</label>
            <input id="agency_rif" name = "agency_rif" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="depart_quality_control">depart_quality_control</label>
            <input id="depart_quality_control" name = "depart_quality_control" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="depart_investigation">depart_investigation</label>
            <input id="depart_investigation" name = "depart_investigation" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="pilot_plan">pilot_plan</label>
            <input id="pilot_plan" name = "pilot_plan" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="community_participation">community_participation</label>
            <input id="community_participation" name = "community_participation" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sica_registred">sica_registred</label>
            <input id="sica_registred" name = "sica_registred" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="sunagro">sunagro</label>
            <input id="sunagro" name = "sunagro" type="text" class="form-control">
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection