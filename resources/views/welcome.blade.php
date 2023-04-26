@extends('layout.default')

@section('content')
  <h1>Welcome!</h1>

  <div class="container mt-5">
    @include('layout.errors')
    @include('layout.session')
  </div>
@endsection