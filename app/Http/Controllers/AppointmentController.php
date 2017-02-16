<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appointment;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class AppointmentController.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:30:15pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - appointment';
        $appointments = Appointment::paginate(6);
        return view('appointment.index',compact('appointments','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - appointment';
        
        return view('appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();

        
        $appointment->appointment_status = $request->appointment_status;

        
        $appointment->star_date = $request->star_date;

        
        $appointment->finish_date = $request->finish_date;

        
        $appointment->observation = $request->observation;

        
        
        $appointment->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new appointment has been created !!']);

        return redirect('appointment');
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
        $title = 'Show - appointment';

        if($request->ajax())
        {
            return URL::to('appointment/'.$id);
        }

        $appointment = Appointment::findOrfail($id);
        return view('appointment.show',compact('title','appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - appointment';
        if($request->ajax())
        {
            return URL::to('appointment/'. $id . '/edit');
        }

        
        $appointment = Appointment::findOrfail($id);
        return view('appointment.edit',compact('title','appointment'  ));
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
        $appointment = Appointment::findOrfail($id);
    	
        $appointment->appointment_status = $request->appointment_status;
        
        $appointment->star_date = $request->star_date;
        
        $appointment->finish_date = $request->finish_date;
        
        $appointment->observation = $request->observation;
        
        
        $appointment->save();

        return redirect('appointment');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/appointment/'. $id . '/delete');

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
     	$appointment = Appointment::findOrfail($id);
     	$appointment->delete();
        return URL::to('appointment');
    }
}
