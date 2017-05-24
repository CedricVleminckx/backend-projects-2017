{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Jiujitsu')

@section('content')
<main>
  <section id="who-we-are">
    <div class="container inner-right">
      <div class="row">
        <div class="col-md-10">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>title</th>
                <th>naam</th>
                <th>achternaam</th>
                <th>email</th>
                <th>leeftijd</th>
                <th>member</th>
              </tr>
            </thead>
            @foreach($subs as $sub)
            <tbody>
              <tr>
                <td>{{ $sub->events_id }}</td>
                <td><a href="{{ url('/kalender/')}}/{{ $sub->events_id}}">{{ $sub->eventName}}</a></td>
                <td>{{ $sub->name }}</td>
                <td>{{ $sub->lastname }}</td>
                <td>{{ $sub->email }}</td>
                <td>{{ $sub->leeftijd }}</td>
                <td>{{ $sub->member }}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>
</main>
@endsection
