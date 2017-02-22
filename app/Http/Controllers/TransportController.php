<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transport;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class TransportController.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:34:06pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - transport';
        $transports = Transport::paginate(6);
        return view('transport.index',compact('transports','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - transport';

        return view('transport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transport = new Transport();


        $transport->name = $request->name;


        $transport->description = $request->description;


        $transport->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new transport has been created !!']);

        return redirect('transport');
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
        $title = 'Show - transport';

        if($request->ajax())
        {
            return URL::to('transport/'.$id);
        }

        $transport = Transport::findOrfail($id);
        return view('transport.show',compact('title','transport'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - transport';
        if($request->ajax())
        {
            return URL::to('transport/'. $id . '/edit');
        }


        $transport = Transport::findOrfail($id);
        return view('transport.edit',compact('title','transport'  ));
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
        $transport = Transport::findOrfail($id);

        $transport->name = $request->name;

        $transport->description = $request->description;


        $transport->save();

        return redirect('transport');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/transport/'. $id . '/delete');

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
     	$transport = Transport::findOrfail($id);
     	$transport->delete();
        return URL::to('transport');
    }
}
