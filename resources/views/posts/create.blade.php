<x-layout>
    <section>
        
        <div class="bg-grey-lighter min-h-screen flex flex-col">

            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <h1> Publish New Post</h1>
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                    <form method="POST" action="/register">
                        @csrf
                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="title"
                            value="{{old('title')}}"
                            placeholder="Title" />
                        @error('title')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror
                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="slug"
                            value="{{old('slug')}}"
                            placeholder="Slug" />
                        @error('slug')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror
                            <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="excerpt"
                            value="{{old('excerpt')}}"
                            placeholder="Excerpt" />
                        @error('excerpt')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror

                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="body"
                            value="{{old('body')}}"
                            placeholder="Body" />
                            @error('body')
                            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="category"
                            >
                            Category
                            </label>
                            <select name="category_id" id="category" class="mb-6 py-2 px-2 rounded-2xl">
                            @php
                            $categories = \App\Models\Category::all();
                            @endphp
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{ ucwords($category->name)}}</option>
                            @endforeach
                            </select>
                            @error('category')
                            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                            @enderror
                        <button
                            type="submit"
                            class="w-full text-center py-3 rounded bg-blue-500 text-white hover:bg-green-dark focus:outline-none my-1"
                        >Post</button>
                    </form>
                    
            </div>
        </div>
    </section>
</x-layout>