<x-min-nav>
    <section class="w-full ">
        <div class="w-full bg-gray-900 p-2 pl-4 text-white">
          <div class="flex items-center gap-2">
            <div class="text-xs">
                jjameskoji@gmail.com
            </div>
            <div class="border-l-2 pl-1">
                <span class="text-xs">badge</span>
                <span class="bg-amber-500 text-xs font-semibold px-1  border border-amber-400 rounded-lg">Gold</span>
            </div>
            <span class="text-xs border-l-2 pl-2">3 Contacts</span>
           
              <button id="show-form" class="border rounded hover:bg-gray-700  bg-emerald-950 text-gray-100 font-normal text-xs px-3 p-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                  <path d="M8.5 4.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 13c.552 0 1.01-.452.9-.994a5.002 5.002 0 0 0-9.802 0c-.109.542.35.994.902.994h8ZM12.5 3.5a.75.75 0 0 1 .75.75v1h1a.75.75 0 0 1 0 1.5h-1v1a.75.75 0 0 1-1.5 0v-1h-1a.75.75 0 0 1 0-1.5h1v-1a.75.75 0 0 1 .75-.75Z" />
                </svg>
              </button>
          </div>
        </div>
        <div class="sm:w sm:w-80 m-2 bg-gray-200" id="contacts-div">
            {{-- <div id="contact-card" class="contact-card p-1 bg-gray-50 mt-1 border-t-2 flex items-center gap-2">
               <span class="bg-white rounded-full p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
               </span>
              <div class="flex items-center justify-between w-full">
                <div class="border-l-2 px-1">
                  <small class="text-gray-700 font-semibold">Emmanuel Joel</small>
                  <p class="font-semibold text-gray-800">+123 2929380222</p>
                </div>
                <span class="p-2 bg-white rounded hover:bg-emerald-500 hover:text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                  </svg>                  
                </span>
              </div> 
            </div> --}}
        </div>
      
    </section>

    <section id="contact-form-overlay" class="contact-form-overlay">
      <div class="contact-form-body">
        <div class="font-bold px-5 text-gray-800 w-full flex justify-between">
         <span class="text-lg first-letter:p-1 flex items-center gap-1"> Create a New Contact <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
        </svg>
        
        </span>
         <span id="close-contact-form" class="bg-gray-300 flex items-center p-1.5 rounded hover:text-gray-50 hover:bg-red-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
          <path fill-rule="evenodd" d="M2.22 2.22a.75.75 0 0 1 1.06 0L5.5 4.44V2.75a.75.75 0 0 1 1.5 0v3.5a.75.75 0 0 1-.75.75h-3.5a.75.75 0 0 1 0-1.5h1.69L2.22 3.28a.75.75 0 0 1 0-1.06Zm10.5 0a.75.75 0 1 1 1.06 1.06L11.56 5.5h1.69a.75.75 0 0 1 0 1.5h-3.5A.75.75 0 0 1 9 6.25v-3.5a.75.75 0 0 1 1.5 0v1.69l2.22-2.22ZM2.75 9h3.5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-1.69l-2.22 2.22a.75.75 0 0 1-1.06-1.06l2.22-2.22H2.75a.75.75 0 0 1 0-1.5ZM9 9.75A.75.75 0 0 1 9.75 9h3.5a.75.75 0 0 1 0 1.5h-1.69l2.22 2.22a.75.75 0 1 1-1.06 1.06l-2.22-2.22v1.69a.75.75 0 0 1-1.5 0v-3.5Z" clip-rule="evenodd" />
        </svg>
        </span>
        </div>
        <div class="w-80 m-auto p-5">
          <form class="w-full rounded " action="">
            <div class="mb-1 mt-1">
              <input type="text" class="form-input" id="info-name" placeholder="name">
            </div>
            <div class="mb-1">
              <input type="number" class="form-input" id="info-number" placeholder="phone number">
            </div>
            <div class="mb-1">
              <input type="email" class="form-input" id="info-email" placeholder="Email">
            </div>
            <div class="mb-1">
              <input type="text" class="form-input" id="info-address" placeholder="address">
            </div>
            <div class="mt-3">
              <button id="create-contact-btn" type="submit" class="form-submit">Create</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section id="info-contact-overlay" class="info-contact-overlay">
      <div class="info-contact-body p-3">
        <div class="flex items-center justify-between py-1.5">
          <div></div>
          <div class="flex gap-2 items-center">
            <div class="border p-1 hover:bg-gray-200 rounded"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
              <path d="M13.488 2.513a1.75 1.75 0 0 0-2.475 0L6.75 6.774a2.75 2.75 0 0 0-.596.892l-.848 2.047a.75.75 0 0 0 .98.98l2.047-.848a2.75 2.75 0 0 0 .892-.596l4.261-4.262a1.75 1.75 0 0 0 0-2.474Z" />
              <path d="M4.75 3.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h6.5c.69 0 1.25-.56 1.25-1.25V9A.75.75 0 0 1 14 9v2.25A2.75 2.75 0 0 1 11.25 14h-6.5A2.75 2.75 0 0 1 2 11.25v-6.5A2.75 2.75 0 0 1 4.75 2H7a.75.75 0 0 1 0 1.5H4.75Z" />
            </svg>
            </div>
            <div class="border p-1 hover:bg-red-500 hover:text-gray-50 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                <path fill-rule="evenodd" d="M5 3.25V4H2.75a.75.75 0 0 0 0 1.5h.3l.815 8.15A1.5 1.5 0 0 0 5.357 15h5.285a1.5 1.5 0 0 0 1.493-1.35l.815-8.15h.3a.75.75 0 0 0 0-1.5H11v-.75A2.25 2.25 0 0 0 8.75 1h-1.5A2.25 2.25 0 0 0 5 3.25Zm2.25-.75a.75.75 0 0 0-.75.75V4h3v-.75a.75.75 0 0 0-.75-.75h-1.5ZM6.05 6a.75.75 0 0 1 .787.713l.275 5.5a.75.75 0 0 1-1.498.075l-.275-5.5A.75.75 0 0 1 6.05 6Zm3.9 0a.75.75 0 0 1 .712.787l-.275 5.5a.75.75 0 0 1-1.498-.075l.275-5.5a.75.75 0 0 1 .786-.711Z" clip-rule="evenodd" />
              </svg>
            </div>
            
            <div id="close-info-contact" class="border p-1 hover:bg-gray-700 hover:text-gray-50 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                <path d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94 5.28 4.22Z" />
              </svg>
              
            </div>
            
          </div>
      
        </div>
        <div class="ml-5">
          <div class="flex gap-2 items-center font-semibold text-sm border-b-2 p-1">
            <span class="text-gra-700 font-normal text-sm">Name:</span>
            <span class="text-md">James Joshua Koji</span>  
          </div>
          <div class="flex gap-2 items-center font-semibold text-sm border-b-2 p-1">
            <span class="text-gra-700 font-normal text-sm">Phone:</span>
            <span>07066631387</span>  
          </div>
          <div class="flex gap-2 items-center font-semibold text-sm border-b-2 p-1">
            <span class="text-gra-700 font-normal text-sm">Email:</span>
            <span>jjameskoji@gmail.com</span>  
          </div>
          <div class="flex gap-2 items-center font-semibold text-sm border-b-2 p-1">
            <span class="text-gra-700 font-normal text-sm">Address:</span>
            <span>Samaru Zaria</span>  
          </div>
        </div>
      </div>
    </section>

    <script src="{{ asset('js/AuthClass01.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>  
    
</x-min-nav>  

