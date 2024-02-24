<x-min-nav>
    <section class="w-full my-5">
      <div class="p-2 m-auto border-radius-lg w-11/12 md:w-8/12 ">
        <h1 class="font-semibold text-gray-600 text-xl">
            Register to Access free Storage
        </h1> 
      </div>
    <div class="m-auto w-80 bg-gray-50 p-3 my-2">
      <form class="space-y-4 m-auto w-full md:space-y-6" action="/auth-user" method="POST">
        @csrf
            <div>
                <label for="name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Your name</label>
                <input type="name" name="name" id="name" placeholder="name" class="form-input  @error('name')
                border-red-500 @enderror"  value="{{ old('name') }}">
                @error('name')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="email" placeholder="email" class="form-input @error('email')
                border-red-500 @enderror"  value="{{ old('email') }}">
                @error('email')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="••••••••" class="form-input @error('password')
                border-red-500 @enderror"  value="{{ old('password') }}">
                @error('password')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{ $message }}
                </span>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password_confirmation" id="confirm_password" placeholder="••••••••" class="form-input @error('password')
                border-red-500 @enderror"  value="{{ old('password') }}">
                @error('password')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                {{ $message }}
                </span>
                @enderror
            </div>

   
            <button type="submit" id="register-button" class="w-full text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium  text-sm px-5 py-2.5 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"> Register Account </button>
            <p class="text-md font-light text-gray-500 dark:text-gray-400">
                create new account? <a href="/login" class="font-medium text-md text-blue-600 hover:underline dark:text-emerald-500">login </a>
            </p>
        </form>
      </div>
    </section>

    <script src="{{ asset('js/AuthClass01.js') }}"></script>
    <script src="{{ asset('js/auth_01.js') }}"></script>
</x-min-nav>    