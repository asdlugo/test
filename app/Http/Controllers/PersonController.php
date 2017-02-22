<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Person;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class PersonController.
 *
 * @author  The scaffold-interface created at 2017-02-17 02:31:12pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - person';
        $people = Person::paginate(6);
        return view('person.index',compact('people','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - person';
        
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new Person();

        
        $person->first_name = $request->first_name;

        
        $person->second_name = $request->second_name;

        
        $person->first_surname = $request->first_surname;

        
        $person->second_surname = $request->second_surname;

        
        $person->social_reason = $request->social_reason;

        
        $person->identy_card = $request->identy_card;

        
        $person->date_born = $request->date_born;

        
        $person->gender_person = $request->gender_person;

        
        $person->civil_state = $request->civil_state;

        
        $person->degree_instructio = $request->degree_instructio;

        
        $person->lives_production_unity = $request->lives_production_unity;

        
        $person->address_domicile = $request->address_domicile;

        
        $person->number_local = $request->number_local;

        
        $person->number_mobile = $request->number_mobile;

        
        $person->email = $request->email;

        
        
        $person->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new person has been created !!']);

        return redirect('person');
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
        $title = 'Show - person';

        if($request->ajax())
        {
            return URL::to('person/'.$id);
        }

        $person = Person::findOrfail($id);
        return view('person.show',compact('title','person'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - person';
        if($request->ajax())
        {
            return URL::to('person/'. $id . '/edit');
        }

        
        $person = Person::findOrfail($id);
        return view('person.edit',compact('title','person'  ));
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
        $person = Person::findOrfail($id);
    	
        $person->first_name = $request->first_name;
        
        $person->second_name = $request->second_name;
        
        $person->first_surname = $request->first_surname;
        
        $person->second_surname = $request->second_surname;
        
        $person->social_reason = $request->social_reason;
        
        $person->identy_card = $request->identy_card;
        
        $person->date_born = $request->date_born;
        
        $person->gender_person = $request->gender_person;
        
        $person->civil_state = $request->civil_state;
        
        $person->degree_instructio = $request->degree_instructio;
        
        $person->lives_production_unity = $request->lives_production_unity;
        
        $person->address_domicile = $request->address_domicile;
        
        $person->number_local = $request->number_local;
        
        $person->number_mobile = $request->number_mobile;
        
        $person->email = $request->email;
        
        
        $person->save();

        return redirect('person');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/person/'. $id . '/delete');

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
     	$person = Person::findOrfail($id);
     	$person->delete();
        return URL::to('person');
    }
}
