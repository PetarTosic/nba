@if (session('status'))
  <div class="alert alert-success alert-block container mt-5">
    <strong>{{ session('status') }}</strong>
  </div>
    {{-- <div class="alert alert-success">
      {{ session('status') }}
    </div> --}}
@endif