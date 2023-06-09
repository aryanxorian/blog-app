@props(['post'])
<article
       {{$attributes->merge(["class"=>"transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl"])}} >
                <div class="py-6 px-5">
                    <div>
                        <img src="./images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl">
                    </div>

                    <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                                {{-- <x-category-label :category="{{$post->category}}" /> --}}
                                    <x-category-label :category="$post->category"/>
                               
                            </div>

                            <div class="mt-4">
                                <h1 class="text-3xl">
                                   {{$post->title}}
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                    <time>{{$post->created_at->diffForHumans()}}</time>
                                </span>
                            </div>
                        </header>

                        <div class="text-sm mt-4">
                           {{$post->excerpt}}
                        </div>

                    </div>
                </div>
            </article>