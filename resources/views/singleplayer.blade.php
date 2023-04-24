@extends('layout.default')

@section('content')
<div class="container m-5 p-3 border rounded">
  <h1>{{ $player->first_name }} {{ $player->last_name }}</h1>
  <p>Email: {{ $player->email }}</p>
  <a href="/teams/{{$player->team->id}}" class="btn btn-sm btn-outline-secondary">Return to team</a>
</div>
  
@endsection