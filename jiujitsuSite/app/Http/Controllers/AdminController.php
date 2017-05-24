<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events;
use App\Subscriptions;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
      return view('login');
  }

  public function bewerken()
  {
    $events = Events::all();
    return view('jiujitsu.edit', ['events' => $events]);
  }

  public function add()
  {
    return view('edit.addEvent');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'eventName' => 'required|unique:events|max:200',
      'content' => 'required',
      'location' => 'required',
      'price' => 'required',
      'type' => 'required',
      'when' => 'required',
    ]);
    $event = new Events;
    $event->fill($request->all());
    $event->save();
    return redirect('/bewerken');
  }

  public function edit($id)
  {
    $event = Events::findorfail($id);
    return view('edit.editEvent', ['event' => $event]);
  }

  public function update(Request $request, $id)
  {
    $event = Events::findorfail($id);
    $event->fill($request->all());
    $event->save();
    return redirect('/bewerken');
  }

  public function delete(Request $request)
  {
    Events::destroy($request->id);
    return redirect('/bewerken');
  }

  public function subscriptions()
  {
    $subs = Subscriptions::join('users', 'users.id','=', 'users_id')
        ->join('events', 'events.id','=', 'events_id')
        ->select('Eventname', 'name', 'lastname', 'email', 'leeftijd', 'events_id', 'member')
        ->orderby('events_id', 'ASC')
        ->get();
    return view('admin.subs', ['subs' => $subs]);
  }
}
