@foreach ($team->comments as $comment)
  <div class="container border mt-5 rounded-3 p-3">
    <h4>{{ $comment->user->name }}</h4>
    <textarea disabled rows="3" cols="10" style="width: 100%" class="p-2 rounded">{{ $comment->content }}</textarea>
  </div>
@endforeach
