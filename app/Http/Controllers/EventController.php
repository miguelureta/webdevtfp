<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listing=Event::all();
        return view('events.list', compact('listing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'eventname'=>'required',
            'venue' =>'required',
            'sdate' =>'required',
            'edate'=>'required',
            'description'=>'required',
            'eimage'=>'nullable'
        ]);

        $event = new Event;
        $event->EventName=$request->eventname;
        $event->Description=$request->description;
        $event->Venue=$request->venue;
        $event->Startdate=$request->sdate;
        $event->Enddate=$request->edate;
        $event->Image=$request->eimage;
        $event->save();

        return redirect(route('event_list'))->with('success', 'Event Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($EventsID)
    {
        $listing = Event::where("EventsID", $EventsID)->first();
        return view('events.edit', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $EventsID)
    {
        $this->validate($request, [
            'eventname'=>'required',
            'venue' =>'required',
            'sdate' =>'required',
            'edate'=>'required',
            'description'=>'required',
            'eimage'=>'nullable'
        ]);

        $event = Event::where('EventsID', $EventsID)->first();
        $event->EventName=$request->eventname;
        $event->Description=$request->description;
        $event->Venue=$request->venue;
        $event->Startdate=$request->sdate;
        $event->Enddate=$request->edate;
        $event->Image=$request->eimage;
        $event->save();

        return redirect(route('event_list'))->with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($EventsID)
    {
        $listing = Event::where('EventsID', $EventsID)->first();
        $listing->delete();

        return redirect(route('event_list'))->with('success', 'Event Deleted');
    }
}
