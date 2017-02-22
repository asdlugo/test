<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Water_source;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Water_sourceController.
 *
 * @author  The scaffold-interface created at 2017-02-15 09:12:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Water_sourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - water_source';
        $water_sources = Water_source::paginate(6);
        return view('water_source.index',compact('water_sources','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - water_source';

        return view('water_source.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $water_source = new Water_source();


        $water_source->name = $request->name;


        $water_source->description = $request->description;



        $water_source->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new water_source has been created !!']);

        return redirect('water_source');
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
        $title = 'Show - water_source';

        if($request->ajax())
        {
            return URL::to('water_source/'.$id);
        }

        $water_source = Water_source::findOrfail($id);
        return view('water_source.show',compact('title','water_source'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - water_source';
        if($request->ajax())
        {
            return URL::to('water_source/'. $id . '/edit');
        }


        $water_source = Water_source::findOrfail($id);
        return view('water_source.edit',compact('title','water_source'  ));
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
        $water_source = Water_source::findOrfail($id);

        $water_source->name = $request->name;

        $water_source->description = $request->description;

        $water_source->save();

        return redirect('water_source');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/water_source/'. $id . '/delete');

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
     	$water_source = Water_source::findOrfail($id);
     	$water_source->delete();
        return URL::to('water_source');
    }
}
