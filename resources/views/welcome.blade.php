@extends('layout.default')

@section('content')
  <h1 class="container m-5">Welcome!</h1>

  <div class="container mt-5">
    @include('layout.errors')
    @include('layout.session')
  </div>
@endsection