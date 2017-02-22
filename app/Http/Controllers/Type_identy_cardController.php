<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type_identy_card;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Type_identy_cardController.
 *
 * @author  The scaffold-interface created at 2017-02-17 03:52:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Type_identy_cardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - type_identy_card';
        $type_identy_cards = Type_identy_card::paginate(6);
        return view('type_identy_card.index',compact('type_identy_cards','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - type_identy_card';

        return view('type_identy_card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type_identy_card = new Type_identy_card();


        $type_identy_card->name = $request->name;


        $type_identy_card->description = $request->description;



        $type_identy_card->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new type_identy_card has been created !!']);

        return redirect('type_identy_card');
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
        $title = 'Show - type_identy_card';

        if($request->ajax())
        {
            return URL::to('type_identy_card/'.$id);
        }

        $type_identy_card = Type_identy_card::findOrfail($id);
        return view('type_identy_card.show',compact('title','type_identy_card'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - type_identy_card';
        if($request->ajax())
        {
            return URL::to('type_identy_card/'. $id . '/edit');
        }


        $type_identy_card = Type_identy_card::findOrfail($id);
        return view('type_identy_card.edit',compact('title','type_identy_card'  ));
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
        $type_identy_card = Type_identy_card::findOrfail($id);

        $type_identy_card->name = $request->name;

        $type_identy_card->description = $request->description;

        $type_identy_card->type = $request->type;


        $type_identy_card->save();

        return redirect('type_identy_card');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/type_identy_card/'. $id . '/delete');

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
     	$type_identy_card = Type_identy_card::findOrfail($id);
     	$type_identy_card->delete();
        return URL::to('type_identy_card');
    }
}
