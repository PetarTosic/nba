@extends('layout.default')

@section('content')
  @foreach ($teams as $team)
    <div class="container m-3">
      <span>{{ $team->name }}</span>
      <a href="/teams/{{ $team->id }}" class="btn btn-sm btn-outline-secondary">View team</a>
    </div>
  @endforeach

  <div class="container m-3">
    {{ $teams }}
  </div>
  
@endsection