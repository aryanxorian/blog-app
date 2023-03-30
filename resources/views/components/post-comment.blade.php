@props(['comment'])
<article class="flex space-x-4 bg-gray-100 p-6 border-gray-200 rounded-xl">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?u={{$comment->id}}" alt="avatar" width="60" height="60" class="rounded-xl"/>

    </div>
    <div>
        <header>
            <h3 class="font-bold"> {{$comment->author->username}} </h3>
            <p class="text-sm"> Posted <time> {{$comment->created_at->diffForHumans()}} </time></p>
        </header>
        <p> {{$comment->body}}</p>
    </div>
</article>