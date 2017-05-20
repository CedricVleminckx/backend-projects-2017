<?php

namespace App\Http\Controllers;

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
      return view('jiujitsu.detail', ['event' => $event]);
  }
}
