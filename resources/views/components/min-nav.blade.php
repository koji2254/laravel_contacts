<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" />
  {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}
  <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
     integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
     crossorigin="anonymous"
     referrerpolicy="no-referrer"/>
  {{-- <script>
    tailwind.config = {
    darkMode: 'class',
    theme: {
       extend: {
          colors: {
          primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
          }
       },
       fontFamily: {
          'body': [
       'Inter', 
       'ui-sans-serif', 
       'system-ui', 
       '-apple-system', 
       'system-ui', 
       'Segoe UI', 
       'Roboto', 
       'Helvetica Neue', 
       'Arial', 
       'Noto Sans', 
       'sans-serif', 
       'Apple Color Emoji', 
       'Segoe UI Emoji', 
       'Segoe UI Symbol', 
       'Noto Color Emoji'
    ],
          'sans': [
       'Inter', 
       'ui-sans-serif', 
       'system-ui', 
       '-apple-system', 
       'system-ui', 
       'Segoe UI', 
       'Roboto', 
       'Helvetica Neue', 
       'Arial', 
       'Noto Sans', 
       'sans-serif', 
       'Apple Color Emoji', 
       'Segoe UI Emoji', 
       'Segoe UI Symbol', 
       'Noto Color Emoji'
    ]
       }
    }
    }
 </script> --}}
</head>
<body>
    <nav class="w-full p-3 md:px-10 flex items-center justify-between border border-b-2">
        <h1 class="font-lighter text-gray-900 text-xl">
          Contacts 
        </h1>
        <ul class="flex items-center gap-2 font-lighter">
         @auth
           <a href="/home">
            <li class="flex bg-teal-700 text-gray-50 cursor-pointer hover:bg-teal-800 p-1 px-2 rounded">Home
           </a>
           {{-- <a href=""> --}}
            <li id="logout-button" class="flex bg-teal-700 text-gray-50 cursor-pointer hover:bg-teal-800 p-1 px-2 rounded">logout
           {{-- </a> --}}
         @else      
            <a href="/register">
              <li class="flex bg-teal-700 text-gray-50 cursor-pointer hover:bg-teal-800 p-1 px-2 rounded">Register
              </li>
            </a>
             <a href="/login">
               <li class="bg-teal-700 text-gray-50 cursor-pointer hover:bg-teal-800 p-1 px-2 rounded ">sign-in</li>
            </a>     
         @endauth
        </ul>
    </nav>

    <div>
      {{ $slot }}

    </div>

    <script src="{{ asset('js/nav.js') }}"></script>
  </body>
  </html>    