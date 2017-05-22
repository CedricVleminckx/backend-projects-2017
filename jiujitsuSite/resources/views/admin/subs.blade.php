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
          <form class="add" action="{{url('/bewerken/add')}}">
            <button type="submit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i>Evenement</button>
          </form>
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>title</th>
                <th>naam</th>
                <th>achternaam</th>
                <th>email</th>
                <th>leeftijd</th>
              </tr>
            </thead>
            @foreach($subs as $sub)
            <tbody>
              <tr>
                <td>{{ $sub->events_id }}</td>
                <td>{{ $sub->eventName}}</td>
                <td>{{ $sub->name }}</td>
                <td>{{ $sub->lastname }}</td>
                <td>{{ $sub->email }}</td>
                <td>{{ $sub->leeftijd }}</td>
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
