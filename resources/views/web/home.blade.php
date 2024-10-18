<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href="https://rsms.me/inter/inter.css" rel="stylesheet" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


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
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <nav class="lg:px-32 md:px-8 px-4 py-4" x-data="{ isOpen: false }">
                <div class="container mx-auto flex justify-between items-center">
                    <!-- Logo -->
                    <div class="text-green-600 lg:text-xl font-bold">
                        PT. KRT GREEN INDONESIA
                    </div>

                    <!-- Hamburger Icon for Mobile -->
                    <div class="md:hidden">
                        <button @click="isOpen = !isOpen" class="text-gray-700 focus:outline-none">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Navbar Links (Desktop) -->
                    <div class="hidden md:flex space-x-6 md:text-sm lg:text-md text-sm font-bold">
                        <a href="#" class="text-gray-700 hover:text-gray-300">Home</a>
                        <a href="#" class="text-gray-700 hover:text-gray-300">About</a>
                        <a href="#" class="text-gray-700 hover:text-gray-300">Services</a>
                        <a href="#" class="text-gray-700 hover:text-gray-300">Blogs</a>
                        <a href="#" class="text-gray-700 hover:text-gray-300">Contact</a>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div x-show="isOpen" class="md:hidden mt-4 w-screen h-screen">
                    <div class="flex justify-center items-center w-full">
                        <ul class="justify-center space-y-10">
                            <li><a href="#" class=" text-gray-700 hover:bg-blue-700">Home</a></li>
                            <li><a href="#" class=" text-gray-700 hover:bg-blue-700">Home</a></li>
                            <li><a href="#" class=" text-gray-700 hover:bg-blue-700">Home</a></li>
                            <li><a href="#" class=" text-gray-700 hover:bg-blue-700">Home</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>


        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Your content About-->
            <section class="" name="about">
                <div class="py-8">
                    <div class="shadow-2xl bg-cover lg:h-[500px] md:h-[400px] bg-center lg:rounded-[60px] md:rounded-[45px] rounded-3xl"
                        style="background-image: url(images/Hero.png)">
                        <div class="text-center lg:pt-12 pt-6 md:pt-8 lg:px-12">
                            <h2 class="text-white md:text-base text-xs text-center underline">WHO ARE WE</h1>
                                <h1 class="text-white font-bold lg:text-5xl md:text-3xl text-xl md:pt-16 pt-6">Ultimate
                                    Solitions for
                                    Your
                                    Business
                                    Dreams</h1>
                                <p
                                    class="lg:text-sm md:text-[10px] lg:pt-[180px] md:pt-[170px] text-slate-200 p-4 text-[10px]">
                                    With
                                    access to
                                    major
                                    suppliers and
                                    manufacturers around the globe, Azoil Trading and Commerce Agency trades several of
                                    crude oil and refined petroleum products in global energy market. OUR MISSION is to
                                    provide first-class quality and services to all our valuable customers and to always
                                    be innovative and alert in the marketplace we serve.</p>
                        </div>
                    </div>


                    <div class="w-full lg:px-32 md:px-8 px-4 py-20">
                        <div class="w-full py-4">
                            <h2 class="text-orange-400 text-sm underline">ABOUT OUT COMPANY</h2>
                        </div>
                        <div class="grid lg:grid-cols-2 sm:grid-cols-2">
                            <div class="md:py-7 py-4">
                                <h2 class="text-gray-800 lg:text-4xl md:text-2xl text-xl font-bold">Our Services.</h2>
                            </div>
                            <div class="md:py-7 py-4">
                                <p class="md:text-sm text-xs tex text-gray-500 ">TTOIL Trading and Commerce Agency
                                    trades
                                    several
                                    of
                                    crude oil and refined petroleum products in global energy market. TTOIL operates in
                                    UAE, Turkey, Azerbaijan, Russia, Ukraine, Georgia, Kazakhstan, Turkmenistan and
                                    other CIS and Central Asian Countries. OUR MISSION is to provide first-class quality
                                    and services to all our valuable customers and to always be innovative and alert in
                                    the marketplace we serve.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section name="services" class="">

                <!-- Slider main container -->
                <div class="">
                    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                        space-between="30" centered-slides="true" autoplay-delay="2500"
                        autoplay-disable-on-interaction="false">
                        <swiper-slide>
                            <div class="h-[450px] lg:rounded-[60px] md:rounded-[45px] rounded-3xl overflow-hidden">
                                <img src="images/Hero.png" alt="" class="w-full h-full object-cover">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="h-[450px] lg:rounded-[60px] md:rounded-[45px] rounded-3xl overflow-hidden">
                                <img src="images/Hero.png" alt="" class="w-full h-full object-cover">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="h-[450px] lg:rounded-[60px] md:rounded-[45px] rounded-3xl overflow-hidden">
                                <img src="images/Hero.png" alt="" class="w-full h-full object-cover">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="h-[450px]  lg:rounded-[60px] md:rounded-[45px] rounded-3xl overflow-hidden">
                                <img src="images/Hero.png" alt="" class="w-full h-full object-cover">
                            </div>
                        </swiper-slide>
                    </swiper-container>
                </div>
                <div class="w-full lg:px-32 md:px-8 px-4 py-20">
                    <div class="w-full py-4">
                        <h2 class="text-orange-400 text-sm underline">SERVICES</h2>
                    </div>
                    <div class="grid lg:grid-cols-2 sm:grid-cols-2">
                        <div class="py-7">
                            <h2 class="text-gray-800 lg:text-4xl md:text-2xl text-xl font-bold">Our Services.</h2>
                        </div>
                        <div class="py-7">
                            <p class="md:text-sm text-xs tex text-gray-500 ">TTOIL Trading and Commerce Agency trades
                                several of
                                crude oil and refined petroleum products in global energy market. TTOIL operates in
                                UAE, Turkey, Azerbaijan, Russia, Ukraine, Georgia, Kazakhstan, Turkmenistan and
                                other CIS and Central Asian Countries. OUR MISSION is to provide first-class quality
                                and services to all our valuable customers and to always be innovative and alert in
                                the marketplace we serve.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="" name="product" class="w-full h-auto">
                <div
                    class="w-full h-auto bg-[#109010] py-20 lg:rounded-[60px] md:rounded-[45px] rounded-3xl lg:px-32 md:px-8 px-4">
                    <div class="pb-12">
                        <h2 class="text-orange-400 text-sm
                        underline">PRODUCTS</h2>
                        <h2 class="text-white lg:text-4xl md:text-2xl text-xl font-bold pt-8">Our Product.</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 md:space-x-8 text-white">
                        <div class="opacity-60 from-yellow-400">
                            <img src="images/product.png" alt="" class="rounded-xl shadow-lg">
                        </div>
                        <div class="">
                            <h1 class="md:pt-0 pt-6 text-sm md:text-base">
                                <span><i class="fa-solid fa-arrow-left" style="color: #FFFFFF;"></i></span>
                                Fuel Oil & Vacuum Gasoil
                            </h1>
                            <p class="pt-6 md:text-sm text-xs ">
                                TTOIL started out as a fuel oil and a VGO trader, and this is what we are really good
                                at. Every month we move over 1 million tons of heavy feedstocks. Half of this is used by
                                refineries to supplement their incoming crude streams, andthe other half as blendstock
                                for bunker fuel.

                                Our fuel oil trading geography is extensive. We source fuel oil and VGO from Russia,
                                Kazakhstan, Turkmenistan, Algeria, West Africa and take it to major trading hubs
                                including Rotterdam, Fujairah, Singapore, Turkey or directly to refineries. We serve
                                marine bunker markets through long term partnerships with fleet owners and bunkering
                                companies. We add value by carefully selecting incoming streams, using our extensive
                                terminal network to store and blend them where required, maintaining the quality
                                throughout.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section name="blogs" class="w-full h-auto">
                <section class="py-24 ">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="lg:px-32 md:px-8 pb-2">
                            <div class="w-full pt-4">
                                <h2 class="text-orange-400 text-sm underline">BLOGS</h2>
                            </div>
                            <div class="flex space-x-20 pb-10">
                                <div class="w-1/2 py-7">
                                    <h2 class="text-gray-800 text-4xl font-bold">Our latest blogs</h2>
                                </div>

                            </div>
                            <div class="xl:space-y-12 lg:space-y-6 space-y-4">
                                <article>
                                    <div class="grid grid-cols-1 md:grid-cols-2 w-full md:space-x-6 space-y-3">
                                        <div class="">
                                            <img src="images/blogs1.jpg" alt=""
                                                class="rounded-2xl xl:h-[250px] lg:h-[200px] w-full shadow-xl">
                                        </div>
                                        <div class="">
                                            <p class="text-sm text-gray-500">Februari 10, 2023</p>
                                            <h1 class="text-gray-700 xl:pt-6 md:pt-4 xl:text-xl md:text-lg font-bold">
                                                Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit.</h1>
                                            <p class="text-sm text-gray-500 xl:pt-4 pt-2 pb-4 truncate ">Lorem
                                                ipsum dolor, sit amet consectetur adipisicing elit. Dolores facere
                                                aliquid esse eligendi labore. Illum nobis distinctio officia quia nulla!
                                                Natus dolorem blanditiis facere aliquam tenetur laudantium, eaque
                                                sapiente labore!</p>
                                            <button type="button"
                                                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 shadow-lg">Read
                                                more..</button>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid grid-cols-1 md:grid-cols-2 w-full md:space-x-6 space-y-3">
                                        <div class="">
                                            <img src="images/blogs1.jpg" alt=""
                                                class="rounded-2xl xl:h-[250px] lg:h-[200px] w-full shadow-xl">
                                        </div>
                                        <div class="">
                                            <p class="text-sm text-gray-500">Februari 10, 2023</p>
                                            <h1 class="text-gray-700 xl:pt-6 md:pt-4 xl:text-xl md:text-lg font-bold">
                                                Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit.</h1>
                                            <p class="text-sm text-gray-500 xl:pt-4 pt-2 pb-4 truncate ">Lorem
                                                ipsum dolor, sit amet consectetur adipisicing elit. Dolores facere
                                                aliquid esse eligendi labore. Illum nobis distinctio officia quia nulla!
                                                Natus dolorem blanditiis facere aliquam tenetur laudantium, eaque
                                                sapiente labore!</p>
                                            <button type="button"
                                                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 shadow-lg">Read
                                                more..</button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                    </div>
                </section>

            </section>

            <section name="contact">
                <div
                    class="bg-[#109010] w-full h-auto lg:rounded-[60px] md:rounded-[45px] rounded-3xl lg:px-32 md:px-8 px-4">
                    <div class="py-20 ">
                        <div class="text-center">
                            <div class="justify-center pb-4">
                                <h2 class="text-orange-400 text-sm underline text-center">CONTACT</h2>
                            </div>
                            <div class="pb-6">
                                <h2 class="text-white md:text-2xl text-xl font-bold">Feel Free to Contact US</h2>
                            </div>
                        </div>
                        <form action="#" method="POST">
                            <!-- Name Field -->
                            <div class="mb-4">

                                <input type="text" id="name" name="name"
                                    class="w-full px-4 text-center py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"
                                    required placeholder="Name">
                            </div>
                            <!-- Email Field -->
                            <div class="mb-4">

                                <input type="email" id="email" name="email"
                                    class="w-full px-4 text-center py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"
                                    required placeholder="Email">
                            </div>
                            <!-- Subject Field -->
                            <div class="mb-4">

                                <input type="text" id="subject" name="subject"
                                    class="w-full px-4 text-center py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"
                                    required placeholder="Subject">
                            </div>
                            <!-- Message Field -->
                            <div class="mb-4">

                                <textarea id="message" name="message" rows="4"
                                    class="w-full px-4 text-center py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400"
                                    required placeholder="Massage"></textarea>
                            </div>
                            <!-- Submit Button -->
                            <button type="button"
                                class="text-white w-full bg-gradient-to-r from-green-600 via-green-500 border-white border border-spacing-3 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 shadow-lg">Send
                                Massage</button>
                        </form>

                    </div>
                </div>
                <div class="pt-16 lg:px-32 px-8">
                    <div class="space-y-2">
                        <h2 class="text-md text-gray-600">Lorem ipsum dolor </h2>
                        <h1 class="text-xl text-gray-800 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Totam,</h1>
                    </div>
                    <div class="grid w-full pt-6">

                        <!-- Contact Information -->
                        <div class="flex flex-col md:flex-row justify-between items-center ">

                            <div>
                                <p class="text-gray-800 font-semibold">Address:</p>
                                <p class="text-gray-600">123 Main Street, City, Country</p>
                            </div>
                            <div>
                                <p class="text-gray-800 font-semibold">Phone:</p>
                                <p class="text-gray-600">+1 (123) 456-7890</p>
                            </div>
                            <div>
                                <p class="text-gray-800 font-semibold">Email:</p>
                                <p class="text-gray-600">contact@example.com</p>
                            </div>
                        </div>
                    </div>
            </section>
            <footer class="pt-16">
                <hr class="bg-green-600 font-bold text-lg w-full h-1 rounded border-0 opacity-65">
                <div class="w-full h-14 px-12 pt-2 flex justify-between">
                    <div class="w-1/2 flex">
                        <p class="text-gray-500"><span class="text-2xl text-gray-500">©</span> 2024 PT. KRT GREEN
                            INDONESIA</p>
                    </div>
                    <div class="w-1/2 flex  justify-end ">
                        <li class="flex space-x-6 text-2xl text-gray-500">
                            <ul><i class="fa-brands fa-linkedin"></i></ul>
                            <ul><i class="fa-brands fa-square-instagram"></i></i></ul>
                            <ul><i class="fa-brands fa-square-facebook"></i></ul>
                            <ul><i class="fa-solid fa-map-location-dot"></i></ul>
                        </li>
                    </div>
                </div>
            </footer>
        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</body>

</html>
