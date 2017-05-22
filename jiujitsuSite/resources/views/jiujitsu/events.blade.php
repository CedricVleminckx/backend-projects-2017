{{-- extend the parent tpl --}}
@extends('layouts.master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Jiujitsu')

@section('content')

<main>

@foreach($events as $event)
  <section id="who-we-are">
    <div class="container inner-right">
      <div class="row">

        <div class="col-md-10">
          @if(Auth::guest())
            @if($event->who == 'true')
              <header>
                <a href="{{ url('/kalender') }}/{{$event->id}}"><h1>{{$event->eventName}}</h1></a>
                <p>{!! $event->content !!}</p>
              </header>
              <a href="{{ url('/kalender') }}/{{$event->id}}" class="btn btn-large">Meer info</a>
            @endif
          @endif
          @if(Auth::user())
              <header>
                <a href="{{ url('/kalender') }}/{{$event->id}}"><h1>{{$event->eventName}}</h1></a>
                <p>{!! $event->content !!}</p>
              </header>
              <a href="{{ url('/kalender') }}/{{$event->id}}" class="btn btn-large">Meer info</a>
          @endif
        </div><!-- /.col -->
      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>
@endforeach

</main>

@endsection
