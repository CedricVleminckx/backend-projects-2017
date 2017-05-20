<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events;

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

  public function store()
  {
    $this->validate($request, [
      'eventName' => 'required|unique:events|max:200',
      'content' => 'required',
    ]);
    $post = new Events;
    $post->fill($request->all());
    $post->save();
    return redirect('/bewerken');
  }

  public function edit()
  {
  }

  public function update()
  {
  }

  public function delete()
  {
  }
}
