<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ServiceController.
 *
 * @author  The scaffold-interface created at 2017-02-15 04:30:43pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - service';
        $services = Service::paginate(6);
        return view('service.index',compact('services','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - service';

        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service();


        $service->name = $request->name;


        $service->description = $request->description;


        $service->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new service has been created !!']);

        return redirect('service');
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
        $title = 'Show - service';

        if($request->ajax())
        {
            return URL::to('service/'.$id);
        }

        $service = Service::findOrfail($id);
        return view('service.show',compact('title','service'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - service';
        if($request->ajax())
        {
            return URL::to('service/'. $id . '/edit');
        }


        $service = Service::findOrfail($id);
        return view('service.edit',compact('title','service'  ));
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
        $service = Service::findOrfail($id);

        $service->name = $request->name;

        $service->description = $request->description;



        $service->save();

        return redirect('service');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/service/'. $id . '/delete');

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
     	$service = Service::findOrfail($id);
     	$service->delete();
        return URL::to('service');
    }
}
