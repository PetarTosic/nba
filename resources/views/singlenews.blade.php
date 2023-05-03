@extends('layout.default')

@section('content')
<div class="container my-5 rounded-3">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
    <h1 class="text-body-emphasis m-3">{{ $news->title }}</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      {{ $news->content }}
    </p>
    <div class="d-inline-flex gap-2 mb-5">
      <div><strong>{{ $news->user->name }}</strong></div>
    </div>
  </div>
</div>
@endsection