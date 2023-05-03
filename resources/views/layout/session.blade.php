@if (session('status'))
  <div class="alert alert-success alert-block container">
    <strong>{{ session('status') }}</strong>
  </div>
    {{-- <div class="alert alert-success">
      {{ session('status') }}
    </div> --}}
@endif