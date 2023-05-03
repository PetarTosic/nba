@extends('layout.default')

@section('content')
<div class="d-flex align-items-stretch">
  <div class="">
    @include('layout.sidebar')
  </div>
  <div class="m-3 flex-column">
    <strong class="container border rounded-3 p-2 m-5">News about {{ $name }}</strong>
    @foreach ($news as $singlenews)
    <div class="row m-3">
      <div class="col">
        <div class="card shadow-sm"> 
          <div class="card-body">
            <div>{{ $singlenews->user->name }}</div>
            <div>Team/s: @foreach($singlenews->team as $team) | <a href="/teams/{{$team->id}}" class="btn btn-sm"> {{ $team->name }} </a>@endforeach</div>
            <p class="card-text"><strong>{{ $singlenews->title }}</strong></p>
            <p class="card-text">{{ $singlenews->content }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="/news/{{ $singlenews->id }}" class="btn btn-sm btn-outline-secondary">View</a>
              </div>
              <small class="text-body-secondary">9 mins</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection