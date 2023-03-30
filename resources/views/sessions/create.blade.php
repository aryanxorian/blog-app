<x-layout>

    <section>
        <!-- component -->
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col  justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Login</h1>
            <form method="POST" action="/login">
                @csrf
                
               

                <input 
                    type="email"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="email"
                    value="{{old('email')}}"
                    placeholder="Email" />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                   @enderror

                <input 
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="password"
                    placeholder="Password" />
                @error('password')
                 <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                @enderror

                <button
                    type="submit"
                    class="w-full text-center py-3 rounded bg-blue-500 text-white hover:bg-green-dark focus:outline-none my-1"
                >Log In</button>
            </form>
            
        </div>

       
    </div>
</div>
    </section>
</x-layout>