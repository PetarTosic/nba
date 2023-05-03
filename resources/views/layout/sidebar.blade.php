<div class="d-flex flex-column flex-grow-0 p-3 text-bg-info border" style="width: 200px;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-4">Teams</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    @foreach($teams as $team) 
    <li class="nav-item m-1">
      <a href="/news/team/{{ $team->name }}" @if($team->name == $name) class="active nav-link" @else class="nav-link" @endif aria-current="page">
        {{$team->name}}
      </a>
    </li>
    @endforeach
  </ul>
  <hr>
  
</div>