<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Indigenous_person;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Indigenous_personController.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:09:04pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Indigenous_personController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - indigenous_person';
        $indigenous_peoples = Indigenous_person::paginate(6);
        return view('indigenous_person.index',compact('indigenous_peoples','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - indigenous_person';

        return view('indigenous_person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indigenous_person = new Indigenous_person();


        $indigenous_person->name = $request->name;


        $indigenous_person->description = $request->description;


        $indigenous_person->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new indigenous_person has been created !!']);

        return redirect('indigenous_person');
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
        $title = 'Show - indigenous_person';

        if($request->ajax())
        {
            return URL::to('indigenous_person/'.$id);
        }

        $indigenous_person = Indigenous_person::findOrfail($id);
        return view('indigenous_person.show',compact('title','indigenous_person'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - indigenous_person';
        if($request->ajax())
        {
            return URL::to('indigenous_person/'. $id . '/edit');
        }


        $indigenous_person = Indigenous_person::findOrfail($id);
        return view('indigenous_person.edit',compact('title','indigenous_person'  ));
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
        $indigenous_person = Indigenous_person::findOrfail($id);

        $indigenous_person->name = $request->name;

        $indigenous_person->description = $request->description;


        $indigenous_person->save();

        return redirect('indigenous_person');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/indigenous_person/'. $id . '/delete');

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
     	$indigenous_person = Indigenous_person::findOrfail($id);
     	$indigenous_person->delete();
        return URL::to('indigenous_person');
    }
}
