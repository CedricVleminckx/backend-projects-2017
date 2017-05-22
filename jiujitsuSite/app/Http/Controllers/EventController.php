<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Events;
use App\Subscriptions;
use App\User;


class EventController extends Controller
{
  public function overview()
  {
      $events = Events::all();
      return view('jiujitsu.events', ['events' => $events]);
  }
  public function detail($id)
  {
      $event = Events::findorfail($id);

      $user = Auth::user();

      return view('jiujitsu.detail', ['event' => $event, 'user' => $user]);
  }

  public function inschrijven(Request $request, $id)
  {
    if(Auth::user()){
      $id2 = Auth::id();
      Subscriptions::create(['users_id' => $id2, 'events_id' => $id]);
    }
    /*else{
      $this->validate($request, [
        'name' => 'required|unique:events|max:200',
        'lastname' => 'required',
        'leeftijd' => 'required',
        'email' => 'required',
      ]);
      $event = new Subsriptions;
      $event->fill($request->all());
      $event->save();
    }*/
    return redirect('/kalender');
  }
}
