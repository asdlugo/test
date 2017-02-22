<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Popular_organization;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Popular_organizationController.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:22:34pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Popular_organizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - popular_organization';
        $popular_organizations = Popular_organization::paginate(6);
        return view('popular_organization.index',compact('popular_organizations','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - popular_organization';

        return view('popular_organization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $popular_organization = new Popular_organization();


        $popular_organization->name = $request->name;


        $popular_organization->description = $request->description;


        $popular_organization->rif = $request->rif;


        $popular_organization->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new popular_organization has been created !!']);

        return redirect('popular_organization');
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
        $title = 'Show - popular_organization';

        if($request->ajax())
        {
            return URL::to('popular_organization/'.$id);
        }

        $popular_organization = Popular_organization::findOrfail($id);
        return view('popular_organization.show',compact('title','popular_organization'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - popular_organization';
        if($request->ajax())
        {
            return URL::to('popular_organization/'. $id . '/edit');
        }


        $popular_organization = Popular_organization::findOrfail($id);
        return view('popular_organization.edit',compact('title','popular_organization'  ));
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
        $popular_organization = Popular_organization::findOrfail($id);

        $popular_organization->name = $request->name;

        $popular_organization->description = $request->description;

        $popular_organization->rif = $request->rif;

        $popular_organization->save();

        return redirect('popular_organization');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/popular_organization/'. $id . '/delete');

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
     	$popular_organization = Popular_organization::findOrfail($id);
     	$popular_organization->delete();
        return URL::to('popular_organization');
    }
}
