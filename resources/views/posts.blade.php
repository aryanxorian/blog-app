
<x-layout >
    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())

            <x-post-grid :posts="$posts" />
            {{$posts->links()}}

        @else 
            <p> No Post Yet</p>
        @endif

          
        </div>

        {{-- <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />

        </div> --}}
    </main>
    {{-- @foreach ($posts as $post) 
    <article>
        <h1> 
            <a href="/posts/{{$post->id}}">
            {{$post->title; }} </a></h1>
            <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</a>
        <div>
            {{$post->excerpt }}
        </div>
        By  <a href="/authors/{{$post->author->username}}"> {{$post->author->name}}</a> in 
    <a href="/categories/{{$post->category->slug}}"> {{$post->category->name}}</a>
    </article>

    @endforeach --}}
</x-layout>
