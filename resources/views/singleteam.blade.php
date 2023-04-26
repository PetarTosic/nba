@extends('layout.default')

@section('content')
  <div class="border rounded-4 container m-4 p-3">
    <h1>{{ $team->name }}</h1>
    <p>{{ $team->address }}</p>
    <p>{{ $team->email }}</p>
    <p>{{ $team->city }}</p>
    <div class="border rounded p-2">Players:
    <ul>
      @foreach ($team->players as $player)
      <li>{{$player->first_name}} {{$player->last_name}} <a href="players/{{$player->id}}" class="btn btn-sm btn-outline-secondary">View player</a></li>
    @endforeach
    </ul>
  </div>
  </div>
@endsection