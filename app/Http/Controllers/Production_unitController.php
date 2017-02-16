<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Production_unit;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Production_unitController.
 *
 * @author  The scaffold-interface created at 2017-02-16 07:45:09pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Production_unitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - production_unit';
        $production_units = Production_unit::paginate(6);
        return view('production_unit.index',compact('production_units','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - production_unit';
        
        return view('production_unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $production_unit = new Production_unit();

        
        $production_unit->number_document_earth = $request->number_document_earth;

        
        $production_unit->name_production_unit = $request->name_production_unit;

        
        $production_unit->total_surface = $request->total_surface;

        
        $production_unit->usable_surface = $request->usable_surface;

        
        $production_unit->surface_used = $request->surface_used;

        
        $production_unit->production_unit_clasification = $request->production_unit_clasification;

        
        $production_unit->export = $request->export;

        
        $production_unit->import_need = $request->import_need;

        
        $production_unit->attached_agency = $request->attached_agency;

        
        $production_unit->agency_type = $request->agency_type;

        
        $production_unit->agency_name = $request->agency_name;

        
        $production_unit->agency_rif = $request->agency_rif;

        
        $production_unit->depart_quality_control = $request->depart_quality_control;

        
        $production_unit->depart_investigation = $request->depart_investigation;

        
        $production_unit->pilot_plan = $request->pilot_plan;

        
        $production_unit->community_participation = $request->community_participation;

        
        $production_unit->sica_registred = $request->sica_registred;

        
        $production_unit->sunagro = $request->sunagro;

        
        
        $production_unit->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new production_unit has been created !!']);

        return redirect('production_unit');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - production_unit';

        if($request->ajax())
        {
            return URL::to('production_unit/'.$id);
        }

        $production_unit = Production_unit::findOrfail($id);
        return view('production_unit.show',compact('title','production_unit'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - production_unit';
        if($request->ajax())
        {
            return URL::to('production_unit/'. $id . '/edit');
        }

        
        $production_unit = Production_unit::findOrfail($id);
        return view('production_unit.edit',compact('title','production_unit'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $production_unit = Production_unit::findOrfail($id);
    	
        $production_unit->number_document_earth = $request->number_document_earth;
        
        $production_unit->name_production_unit = $request->name_production_unit;
        
        $production_unit->total_surface = $request->total_surface;
        
        $production_unit->usable_surface = $request->usable_surface;
        
        $production_unit->surface_used = $request->surface_used;
        
        $production_unit->production_unit_clasification = $request->production_unit_clasification;
        
        $production_unit->export = $request->export;
        
        $production_unit->import_need = $request->import_need;
        
        $production_unit->attached_agency = $request->attached_agency;
        
        $production_unit->agency_type = $request->agency_type;
        
        $production_unit->agency_name = $request->agency_name;
        
        $production_unit->agency_rif = $request->agency_rif;
        
        $production_unit->depart_quality_control = $request->depart_quality_control;
        
        $production_unit->depart_investigation = $request->depart_investigation;
        
        $production_unit->pilot_plan = $request->pilot_plan;
        
        $production_unit->community_participation = $request->community_participation;
        
        $production_unit->sica_registred = $request->sica_registred;
        
        $production_unit->sunagro = $request->sunagro;
        
        
        $production_unit->save();

        return redirect('production_unit');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/production_unit/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$production_unit = Production_unit::findOrfail($id);
     	$production_unit->delete();
        return URL::to('production_unit');
    }
}
