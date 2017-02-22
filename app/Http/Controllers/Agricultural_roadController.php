<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agricultural_road;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Agricultural_roadController.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:49:49pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Agricultural_roadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - agricultural_road';
        $agricultural_roads = Agricultural_road::paginate(6);
        return view('agricultural_road.index',compact('agricultural_roads','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - agricultural_road';

        return view('agricultural_road.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agricultural_road = new Agricultural_road();


        $agricultural_road->name = $request->name;


        $agricultural_road->description = $request->description;



        $agricultural_road->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new agricultural_road has been created !!']);

        return redirect('agricultural_road');
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
        $title = 'Show - agricultural_road';

        if($request->ajax())
        {
            return URL::to('agricultural_road/'.$id);
        }

        $agricultural_road = Agricultural_road::findOrfail($id);
        return view('agricultural_road.show',compact('title','agricultural_road'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - agricultural_road';
        if($request->ajax())
        {
            return URL::to('agricultural_road/'. $id . '/edit');
        }


        $agricultural_road = Agricultural_road::findOrfail($id);
        return view('agricultural_road.edit',compact('title','agricultural_road'  ));
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
        $agricultural_road = Agricultural_road::findOrfail($id);

        $agricultural_road->name = $request->name;

        $agricultural_road->description = $request->description;

        $agricultural_road->save();

        return redirect('agricultural_road');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/agricultural_road/'. $id . '/delete');

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
     	$agricultural_road = Agricultural_road::findOrfail($id);
     	$agricultural_road->delete();
        return URL::to('agricultural_road');
    }
}
