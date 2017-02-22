<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type_document_earth;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Type_document_earthController.
 *
 * @author  The scaffold-interface created at 2017-02-16 02:50:53pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Type_document_earthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - type_document_earth';
        $type_document_earths = Type_document_earth::paginate(6);
        return view('type_document_earth.index',compact('type_document_earths','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - type_document_earth';

        return view('type_document_earth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type_document_earth = new Type_document_earth();


        $type_document_earth->name = $request->name;


        $type_document_earth->description = $request->description;


        $type_document_earth->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new type_document_earth has been created !!']);

        return redirect('type_document_earth');
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
        $title = 'Show - type_document_earth';

        if($request->ajax())
        {
            return URL::to('type_document_earth/'.$id);
        }

        $type_document_earth = Type_document_earth::findOrfail($id);
        return view('type_document_earth.show',compact('title','type_document_earth'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - type_document_earth';
        if($request->ajax())
        {
            return URL::to('type_document_earth/'. $id . '/edit');
        }


        $type_document_earth = Type_document_earth::findOrfail($id);
        return view('type_document_earth.edit',compact('title','type_document_earth'  ));
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
        $type_document_earth = Type_document_earth::findOrfail($id);

        $type_document_earth->name = $request->name;

        $type_document_earth->description = $request->description;


        $type_document_earth->save();

        return redirect('type_document_earth');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/type_document_earth/'. $id . '/delete');

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
     	$type_document_earth = Type_document_earth::findOrfail($id);
     	$type_document_earth->delete();
        return URL::to('type_document_earth');
    }
}
