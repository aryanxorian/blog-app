<x-layout>

    <section>
        <!-- component -->
        <div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                    <form method="POST" action="/register">
                        @csrf
                        <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="name"
                            value="{{old('name')}}"
                            placeholder="Full Name" />
                        @error('name')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror
                            <input 
                            type="text"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                            name="username"
                            value="{{old('username')}}"
                            placeholder="User Name" />
                        @error('username')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                        @enderror

                        <input 
                            type="text"
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
                        >Create Account</button>
                    </form>
                    <div class="text-center text-sm text-grey-dark mt-4">
                        By signing up, you agree to the 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and 
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>
                </div>

                <div class="text-grey-dark mt-6">
                    Already have an account? 
                    <a class="no-underline border-b border-blue text-blue" href="../login/">
                        Log in
                    </a>.
                </div>
            </div>
        </div>
    </section>
</x-layout>