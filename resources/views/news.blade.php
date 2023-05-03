@extends('layout.default')

@section('content')



  @foreach ($news as $singlenews)
  <div class="row m-3 container">
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
  @endforeach

  <div class="container m-3">
    {{ $news }}
  </div>

  <form action="{{url('createnews')}}" method="POST" class="mt-5 w-50">
    @csrf
    <div class="mb-3">
        <label class="form-label">Enter title:</label>
        <input type="text" class="form-control" name="title" required>
        <label class="form-label">Enter news content:</label>
        <textarea type="text" class="form-control" name="content" required></textarea>
        <select class="form-select" name="team[]" multiple>
          @foreach ($teams as $team)
            <option value="{{$team->id}}">{{$team->name}}</option>
          @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Post News</button>
  </form>

@endsection

