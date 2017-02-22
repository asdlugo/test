<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Facility;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class FacilityController.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:41:56pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - facility';
        $facilities = Facility::paginate(6);
        return view('facility.index',compact('facilities','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - facility';

        return view('facility.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facility = new Facility();


        $facility->name = $request->name;


        $facility->description = $request->description;



        $facility->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new facility has been created !!']);

        return redirect('facility');
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
        $title = 'Show - facility';

        if($request->ajax())
        {
            return URL::to('facility/'.$id);
        }

        $facility = Facility::findOrfail($id);
        return view('facility.show',compact('title','facility'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - facility';
        if($request->ajax())
        {
            return URL::to('facility/'. $id . '/edit');
        }


        $facility = Facility::findOrfail($id);
        return view('facility.edit',compact('title','facility'  ));
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
        $facility = Facility::findOrfail($id);

        $facility->name = $request->name;

        $facility->description = $request->description;


        $facility->save();

        return redirect('facility');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/facility/'. $id . '/delete');

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
     	$facility = Facility::findOrfail($id);
     	$facility->delete();
        return URL::to('facility');
    }
}
