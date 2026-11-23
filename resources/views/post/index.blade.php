<x-layout :title="$page_title">
    <h1>Blog Posts</h1>
    @foreach ($posts as $post){
        <h1 class="font-bold">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <p>Author: {{ $post->author }}</p>
        <p>Published: {{ $post->published ? 'Yes' : 'No' }}</p>
    }



    
    @endforeach
    {{ $posts->links() }}
    <!--it bring the pagination links for the posts collection and it will be displayed in the view-->
</x-layout>