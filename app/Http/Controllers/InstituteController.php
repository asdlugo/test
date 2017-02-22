<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institute;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class InstituteController.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:47:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - institute';
        $institutes = Institute::paginate(6);
        return view('institute.index',compact('institutes','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - institute';

        return view('institute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $institute = new Institute();


        $institute->name = $request->name;


        $institute->description = $request->description;


        $institute->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new institute has been created !!']);

        return redirect('institute');
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
        $title = 'Show - institute';

        if($request->ajax())
        {
            return URL::to('institute/'.$id);
        }

        $institute = Institute::findOrfail($id);
        return view('institute.show',compact('title','institute'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - institute';
        if($request->ajax())
        {
            return URL::to('institute/'. $id . '/edit');
        }


        $institute = Institute::findOrfail($id);
        return view('institute.edit',compact('title','institute'  ));
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
        $institute = Institute::findOrfail($id);

        $institute->name = $request->name;

        $institute->description = $request->description;


        $institute->save();

        return redirect('institute');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/institute/'. $id . '/delete');

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
     	$institute = Institute::findOrfail($id);
     	$institute->delete();
        return URL::to('institute');
    }
}
