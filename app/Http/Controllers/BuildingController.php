<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Building;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class BuildingController.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:33:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - building';
        $buildings = Building::paginate(6);
        return view('building.index',compact('buildings','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - building';

        return view('building.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $building = new Building();


        $building->name = $request->name;


        $building->description = $request->description;



        $building->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new building has been created !!']);

        return redirect('building');
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
        $title = 'Show - building';

        if($request->ajax())
        {
            return URL::to('building/'.$id);
        }

        $building = Building::findOrfail($id);
        return view('building.show',compact('title','building'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - building';
        if($request->ajax())
        {
            return URL::to('building/'. $id . '/edit');
        }


        $building = Building::findOrfail($id);
        return view('building.edit',compact('title','building'  ));
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
        $building = Building::findOrfail($id);

        $building->name = $request->name;

        $building->description = $request->description;


        $building->save();

        return redirect('building');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/building/'. $id . '/delete');

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
     	$building = Building::findOrfail($id);
     	$building->delete();
        return URL::to('building');
    }
}
