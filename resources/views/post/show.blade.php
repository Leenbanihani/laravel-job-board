<x-layout :title="$page_title">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>Author: {{ $post->author }}</p>

       <ul>
    @foreach ($post->comments as $comment)
      <li>{{ $comment->author }}, {{ $comment->content }}</li>
    
    @endforeach
</ul>
</x-layout>