<x-layout :title="$page_title">
<h2>Welcome to comments</h2>
 <h3>Comments:</h3>
@foreach ($comments as $comment )
<h1>{{ $comment->author }}</h1>
<p>{{ $comment->content }}</p>
<p><a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a></p>//post parent itself

@endforeach


</x-layout>