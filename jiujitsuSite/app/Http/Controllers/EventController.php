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
      $events = Events::orderBy('when', 'ASC')->get();
      return view('jiujitsu.events', ['events' => $events]);
  }

  public function homePage()
  {
      $events = Events::orderBy('when', 'ASC')->limit(2)->get();
      return view('jiujitsu.home', ['events' => $events]);
  }

  public function detail($id)
  {
      $event = Events::findorfail($id);

      $user = Auth::user();
      return view('jiujitsu.detail', ['event' => $event, 'user' => $user]);
  }

  public function inschrijven(Request $request, $id)
  {
      $this->validate($request, [
        'name' => 'required|unique:events|max:200',
        'lastname' => 'required',
        'leeftijd' => 'required',
        'email' => 'required',
      ]);
      $subs = new Subscriptions;
      $subs->fill(['users_id' => Auth::id(), 'events_id' => $id]);
      $subs->save();

    return redirect('/kalender');
  }
}
