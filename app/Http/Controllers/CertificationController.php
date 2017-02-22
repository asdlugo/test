<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Certification;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class CertificationController.
 *
 * @author  The scaffold-interface created at 2017-02-17 02:52:44pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - certification';
        $certifications = Certification::paginate(6);
        return view('certification.index',compact('certifications','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - certification';
        
        return view('certification.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certification = new Certification();

        
        $certification->date_issue = $request->date_issue;

        
        $certification->date_epiration = $request->date_epiration;

        
        $certification->certification_status = $request->certification_status;

        
        $certification->certification_serial = $request->certification_serial;

        
        
        $certification->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new certification has been created !!']);

        return redirect('certification');
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
        $title = 'Show - certification';

        if($request->ajax())
        {
            return URL::to('certification/'.$id);
        }

        $certification = Certification::findOrfail($id);
        return view('certification.show',compact('title','certification'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - certification';
        if($request->ajax())
        {
            return URL::to('certification/'. $id . '/edit');
        }

        
        $certification = Certification::findOrfail($id);
        return view('certification.edit',compact('title','certification'  ));
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
        $certification = Certification::findOrfail($id);
    	
        $certification->date_issue = $request->date_issue;
        
        $certification->date_epiration = $request->date_epiration;
        
        $certification->certification_status = $request->certification_status;
        
        $certification->certification_serial = $request->certification_serial;
        
        
        $certification->save();

        return redirect('certification');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/certification/'. $id . '/delete');

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
     	$certification = Certification::findOrfail($id);
     	$certification->delete();
        return URL::to('certification');
    }
}
