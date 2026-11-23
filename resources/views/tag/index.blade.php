<x-layout :title="$page_title">
    <h1>Blog Tags</h1>
    @foreach ($tags as $tag){
        <h1 class="font-bold">{{ $tag->title }}</h1>
}

    
    @endforeach
</x-layout>