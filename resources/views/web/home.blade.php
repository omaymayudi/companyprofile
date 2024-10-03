<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://rsms.me/inter/inter.css" rel="stylesheet"/>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
    <script>
 
      </script>

    <title>Halaman Home</title>
</head>
<body class="h-full bg-stone-50 ">
   <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav class="bg-stone-50" x-data="{ isOpen: false }">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between mx-32">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">    
            </div>
           <div class="px-2">
            <a href="#" class="rounded-md px-3 py-2 text-md font-bold text-[#0d730d] hover:underline">KRT GREEN INDONESIA</a>
           </div>

          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-700 hover:text-white">About</a>
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-700 hover:text-white">Services</a>
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-700 hover:text-white">Products</a>
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-700 hover:text-white">Gallery</a>
                  <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-700 hover:text-white">Contact</a>

                </div>
              </div>
  
              <!-- Profile dropdown -->
              {{-- <div class="relative ml-3">
                <div >
                  <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>
  
               
                <div 
                 x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
            
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
              </div> --}}
            </div>
          </div>
          <div class="-mr-2 flex md:hidden" >
            <!-- Mobile menu button -->
            <button @click="isOpen = !isOpen" type="button" class="relative inline-flex items-center justify-center rounded-md bg-stone-50 p-2 text-gray-800 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg  :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="md:hidden" id="mobile-menu" x-show="isOpen">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a>
        </div>
      </div>
    </nav>
  
    {{-- <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
      </div>
    </header> --}}
    <main class="mx-auto max-w-7xl">
      <!-- Your content About-->
      <section class="" name="about">
        <div class="">
          <div class="mx-4 bg-cover h-[630px] bg-center rounded-[60px]" style="background-image: url(images/Hero.png)">
             <div class="text-center pt-28 px-12">
              <h2 class="text-white text-md text-center underline">WHO ARE WE</h1>
                <h1 class="text-white font-bold text-5xl pt-12">Ultimate Solitions for Your Business Dreams</h1>
                <p class="text-sm pt-[320px] text-slate-200">With access to major suppliers and manufacturers around the globe, Azoil Trading and Commerce Agency trades several of crude oil and refined petroleum products in global energy market. OUR MISSION is to provide first-class quality and services to all our valuable customers and to always be innovative and alert in the marketplace we serve.</p>
             </div>
          </div>
          <div class="w-full px-32 py-20">
            <div class="w-full py-4">
              <h2 class="text-orange-400 text-sm underline">ABOUT OUT COMPANY</h2>
            </div>
            <div class="flex space-x-20">
              <div class="w-1/2 py-7">
                <h2 class="text-gray-800 text-4xl font-bold">With access to major suppliers and manufacturers around the globe.</h2>
              </div>
              <div class="w-1/2 py-7">
                <p class="text-sm text-gray-500 ">TTOIL Trading and Commerce Agency trades several of crude oil and refined petroleum products in global energy market. TTOIL operates in UAE, Turkey, Azerbaijan, Russia, Ukraine, Georgia, Kazakhstan, Turkmenistan and other CIS and Central Asian Countries. OUR MISSION is to provide first-class quality and services to all our valuable customers and to always be innovative and alert in the marketplace we serve.</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section name="services" class="pb-12">   

<!-- Slider main container -->
 <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
 centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
 <swiper-slide>
   <div class="h-[650px] rounded-[60px]">
     <img src="images/Hero.png" alt="" class="">
   </div>
 </swiper-slide>
 <swiper-slide>
   <div class="h-[650px] rounded-[60px]">
     <img src="images/Hero.png" alt="" class="object-fill">
   </div>
 </swiper-slide>
 <swiper-slide>
   <div class="h-[650px]">
     <img src="images/Hero.png" alt="" class="rounded-[60px]">
   </div>
 </swiper-slide>
 <swiper-slide>
   <div class="h-[650px]">
     <img src="images/Hero.png" alt="" class="rounded-[60px]">
   </div>
 </swiper-slide>
</swiper-container>

      </section>
     
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>
</html>