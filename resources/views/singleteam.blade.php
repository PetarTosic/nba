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
  <form action="{{url('createcomment')}}" method="POST" class="mt-5 w-50">
    @csrf
    <div class="mb-3">
        <label class="form-label">Enter your comment</label>
        <textarea type="text" class="form-control" name="content" required></textarea>
        <input type="hidden" name="team_id" value="{{ $team->id }}">
    </div>
    <button type="submit" class="btn btn-primary">Post Comment</button>
  </form>

  @include('components.comment')

  <div class="container mt-5">
    @include('layout.errors')
    @include('layout.session')
  </div>
@endsection