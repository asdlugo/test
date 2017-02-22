<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Machinery;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class MachineryController.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:44:28pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MachineryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - machinery';
        $machineries = Machinery::paginate(6);
        return view('machinery.index',compact('machineries','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - machinery';

        return view('machinery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $machinery = new Machinery();


        $machinery->name = $request->name;


        $machinery->description = $request->description;


        $machinery->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new machinery has been created !!']);

        return redirect('machinery');
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
        $title = 'Show - machinery';

        if($request->ajax())
        {
            return URL::to('machinery/'.$id);
        }

        $machinery = Machinery::findOrfail($id);
        return view('machinery.show',compact('title','machinery'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - machinery';
        if($request->ajax())
        {
            return URL::to('machinery/'. $id . '/edit');
        }


        $machinery = Machinery::findOrfail($id);
        return view('machinery.edit',compact('title','machinery'  ));
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
        $machinery = Machinery::findOrfail($id);

        $machinery->name = $request->name;

        $machinery->description = $request->description;


        $machinery->save();

        return redirect('machinery');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/machinery/'. $id . '/delete');

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
     	$machinery = Machinery::findOrfail($id);
     	$machinery->delete();
        return URL::to('machinery');
    }
}
