<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Production_destiny;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Production_destinyController.
 *
 * @author  The scaffold-interface created at 2017-02-15 09:04:59pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Production_destinyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - production_destiny';
        $production_destinies = Production_destiny::paginate(6);
        return view('production_destiny.index',compact('production_destinies','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - production_destiny';

        return view('production_destiny.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $production_destiny = new Production_destiny();


        $production_destiny->name = $request->name;


        $production_destiny->description = $request->description;



        $production_destiny->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new production_destiny has been created !!']);

        return redirect('production_destiny');
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
        $title = 'Show - production_destiny';

        if($request->ajax())
        {
            return URL::to('production_destiny/'.$id);
        }

        $production_destiny = Production_destiny::findOrfail($id);
        return view('production_destiny.show',compact('title','production_destiny'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - production_destiny';
        if($request->ajax())
        {
            return URL::to('production_destiny/'. $id . '/edit');
        }


        $production_destiny = Production_destiny::findOrfail($id);
        return view('production_destiny.edit',compact('title','production_destiny'  ));
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
        $production_destiny = Production_destiny::findOrfail($id);

        $production_destiny->name = $request->name;

        $production_destiny->description = $request->description;


        $production_destiny->save();

        return redirect('production_destiny');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/production_destiny/'. $id . '/delete');

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
     	$production_destiny = Production_destiny::findOrfail($id);
     	$production_destiny->delete();
        return URL::to('production_destiny');
    }
}
