<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person_person;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Person_personController.
 *
 * @author  The scaffold-interface created at 2017-02-16 08:30:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Person_personController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - person_person';
        $person_people = Person_person::paginate(6);
        return view('person_person.index',compact('person_people','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - person_person';
        
        return view('person_person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person_person = new Person_person();

        
        $person_person->family_relationship = $request->family_relationship;

        
        
        $person_person->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new person_person has been created !!']);

        return redirect('person_person');
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
        $title = 'Show - person_person';

        if($request->ajax())
        {
            return URL::to('person_person/'.$id);
        }

        $person_person = Person_person::findOrfail($id);
        return view('person_person.show',compact('title','person_person'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - person_person';
        if($request->ajax())
        {
            return URL::to('person_person/'. $id . '/edit');
        }

        
        $person_person = Person_person::findOrfail($id);
        return view('person_person.edit',compact('title','person_person'  ));
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
        $person_person = Person_person::findOrfail($id);
    	
        $person_person->family_relationship = $request->family_relationship;
        
        
        $person_person->save();

        return redirect('person_person');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/person_person/'. $id . '/delete');

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
     	$person_person = Person_person::findOrfail($id);
     	$person_person->delete();
        return URL::to('person_person');
    }
}
