<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Social_network;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Social_networkController.
 *
 * @author  The scaffold-interface created at 2017-02-15 09:01:07pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Social_networkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - social_network';
        $social_networks = Social_network::paginate(6);
        return view('social_network.index',compact('social_networks','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - social_network';

        return view('social_network.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $social_network = new Social_network();


        $social_network->name = $request->name;


        $social_network->description = $request->description;


        $social_network->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new social_network has been created !!']);

        return redirect('social_network');
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
        $title = 'Show - social_network';

        if($request->ajax())
        {
            return URL::to('social_network/'.$id);
        }

        $social_network = Social_network::findOrfail($id);
        return view('social_network.show',compact('title','social_network'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - social_network';
        if($request->ajax())
        {
            return URL::to('social_network/'. $id . '/edit');
        }


        $social_network = Social_network::findOrfail($id);
        return view('social_network.edit',compact('title','social_network'  ));
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
        $social_network = Social_network::findOrfail($id);

        $social_network->name = $request->name;

        $social_network->description = $request->description;


        $social_network->save();

        return redirect('social_network');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/social_network/'. $id . '/delete');

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
     	$social_network = Social_network::findOrfail($id);
     	$social_network->delete();
        return URL::to('social_network');
    }
}
