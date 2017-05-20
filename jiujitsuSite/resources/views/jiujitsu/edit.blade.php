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
                <th></th>
              </tr>
            </thead>
            @foreach($events as $event)
            <tbody>
              <tr>
                <td>{{$event->id}}</td>
                <td><a href="{{ url('/kalender')}}/{{ $event->id }}">{{$event->eventName}}</a></td>
                <td class="text-right">
                  <a href="{{url('/bewerken/edit')}}/{{ $event->id }}"><button  type="submit" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i>Edit</button></a>
                </td>
                <td class="text-right">

                <form class="delete" action="{{ url('/bewerken/delete')}}/{{$event->id}}" method="post">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i>Delete</button>
                </form>
                </td>
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
