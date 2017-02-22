<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Problematic;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ProblematicController.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:50:12pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ProblematicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - problematic';
        $problematics = Problematic::paginate(6);
        return view('problematic.index',compact('problematics','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - problematic';

        return view('problematic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $problematic = new Problematic();


        $problematic->name = $request->name;


        $problematic->description = $request->description;


        $problematic->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new problematic has been created !!']);

        return redirect('problematic');
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
        $title = 'Show - problematic';

        if($request->ajax())
        {
            return URL::to('problematic/'.$id);
        }

        $problematic = Problematic::findOrfail($id);
        return view('problematic.show',compact('title','problematic'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - problematic';
        if($request->ajax())
        {
            return URL::to('problematic/'. $id . '/edit');
        }


        $problematic = Problematic::findOrfail($id);
        return view('problematic.edit',compact('title','problematic'  ));
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
        $problematic = Problematic::findOrfail($id);

        $problematic->name = $request->name;

        $problematic->description = $request->description;

        $problematic->save();

        return redirect('problematic');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/problematic/'. $id . '/delete');

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
     	$problematic = Problematic::findOrfail($id);
     	$problematic->delete();
        return URL::to('problematic');
    }
}
