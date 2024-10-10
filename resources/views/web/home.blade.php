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
        <nav class="p-4" x-data="{ isOpen: false }">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo -->
                <div class="text-gray-700 text-lg font-bold">
                    MyWebsite
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
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="text-gray-700 hover:text-gray-300">Home</a>
                    <a href="#" class="text-gray-700 hover:text-gray-300">About</a>
                    <a href="#" class="text-gray-700 hover:text-gray-300">Services</a>
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


        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"">
            <!-- Your content About-->
            <section class="" name="about" class="w-full h-screen">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center">
                    <div class="shadow-2xl bg-cover h-[500px] bg-center rounded-[60px] "
                        style="background-image: url(images/Hero.png)">
                        <div class="text-center pt-28 px-12">
                            <h2 class="text-white text-md text-center underline">WHO ARE WE</h1>
                                <h1 class="text-white font-bold text-5xl pt-12">Ultimate Solitions for Your Business
                                    Dreams</h1>
                                <p class="text-sm pt-[200px] text-slate-200">With access to major suppliers and
                                    manufacturers around the globe, Azoil Trading and Commerce Agency trades several of
                                    crude oil and refined petroleum products in global energy market. OUR MISSION is to
                                    provide first-class quality and services to all our valuable customers and to always
                                    be innovative and alert in the marketplace we serve.</p>
                        </div>
                    </div>
                    <div class="w-full px-32 py-20">
                        <div class="w-full py-4">
                            <h2 class="text-orange-400 text-sm underline">ABOUT OUT COMPANY</h2>
                        </div>
                        <div class="flex space-x-20">
                            <div class="w-1/2 py-7">
                                <h2 class="text-gray-800 text-4xl font-bold">With access to major suppliers and
                                    manufacturers around the globe.</h2>
                            </div>
                            <div class="w-1/2 py-7">
                                <p class="text-sm text-gray-500 ">TTOIL Trading and Commerce Agency trades several of
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


            <section name="services" class="pb-12">

                <!-- Slider main container -->
                <div>
                    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                        space-between="30" centered-slides="true" autoplay-delay="2500"
                        autoplay-disable-on-interaction="false">
                        <swiper-slide>
                            <div class="h-[450px] rounded-[60px] overflow-hidden">
                                <img src="images/Hero.png" alt="" class="">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="h-[450px] rounded-[60px] overflow-hidden">
                                <img src="images/Hero.png" alt="" class="w-full object-cover">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="h-[450px] rounded-[60px] overflow-hidden">
                                <img src="images/Hero.png" alt="" class="w-full object-cover">
                            </div>
                        </swiper-slide>
                        <swiper-slide>
                            <div class="h-[450px]  rounded-[60px] overflow-hidden">
                                <img src="images/Hero.png" alt="" class="w-full object-cover">
                            </div>
                        </swiper-slide>
                    </swiper-container>
                </div>
                <div class="w-full px-32 pt-20">
                    <div class="w-full py-4">
                        <h2 class="text-orange-400 text-sm underline">SERVICES</h2>
                    </div>
                    <div class="flex space-x-20">
                        <div class="w-1/2 py-7">
                            <h2 class="text-gray-800 text-4xl font-bold">Our Services.</h2>
                        </div>
                        <div class="w-1/2 py-7">
                            <p class="text-sm text-gray-500 ">TTOIL Trading and Commerce Agency trades several of
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
                <div class="w-full h-auto bg-green-600 px-32 py-20 rounded-[60PX]">
                    <div class="pb-12">
                        <h2 class="text-orange-400 text-sm underline">PRODUCTS</h2>
                    </div>
                    <div class="flex space-x-20 text-white ">
                        <div class="w-1/2 opacity-60 from-yellow-400">
                            <img src="images/product.png" alt="" class="rounded-xl shadow-lg">
                        </div>
                        <div class="w-1/2">
                            <h1 class="">
                                <span><i class="fa-solid fa-arrow-left" style="color: #FFFFFF;"></i></span>
                                Fuel Oil & Vacuum Gasoil
                            </h1>
                            <p class="py-6 text-sm">
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
                        <div class="px-32 pb-2">
                            <div class="w-full pt-4">
                                <h2 class="text-orange-400 text-sm underline">BLOGS</h2>
                            </div>
                            <div class="flex space-x-20 pb-10">
                                <div class="w-1/2 py-7">
                                    <h2 class="text-gray-800 text-4xl font-bold">Our latest blogs</h2>
                                </div>
                                {{-- <div class="w-1/2 py-7">
                                    <p class="text-sm text-gray-500 ">TTOIL Trading and Commerce Agency trades several
                                        of
                                        crude oil and refined petroleum products in global energy market. TTOIL operates
                                        in
                                        UAE, Turkey, Azerbaijan, Russia, Ukraine, Georgia, Kazakhstan, Turkmenistan and
                                        other CIS and Central Asian Countries. OUR MISSION is to provide first-class
                                        quality
                                    </p>
                                </div> --}}
                            </div>
                            <div class="space-y-12">
                                <article>
                                    <div class="flex w-full space-x-6">
                                        <div class="w-1/2">
                                            <img src="images/blogs1.jpg" alt=""
                                                class="rounded-2xl h-[250px] w-full shadow-xl">
                                        </div>
                                        <div class="w-1/2">
                                            <p class="text-sm text-gray-500">Februari 10, 2023</p>
                                            <h1 class="text-gray-700 pt-6 text-xl font-bold">Lorem ipsum dolor sit amet
                                                consectetur
                                                adipisicing elit.</h1>
                                            <h2 class="text-sm text-gray-500 pt-4 pb-4">Lorem ipsum dolor, sit amet
                                                consectetur
                                                adipisicing elit. Dolores facere
                                                aliquid esse eligendi labore. Illum nobis distinctio officia quia nulla!
                                                Natus dolorem blanditiis facere aliquam tenetur laudantium, eaque
                                                sapiente labore!</h2>
                                            <button type="button"
                                                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 shadow-lg">Read
                                                more..</button>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="flex w-full space-x-6">
                                        <div class="w-1/2">
                                            <img src="images/blogs1.jpg" alt=""
                                                class="rounded-2xl h-[250px] w-full shadow-xl">
                                        </div>
                                        <div class="w-1/2">
                                            <p class="text-sm text-gray-500">Februari 10, 2023</p>
                                            <h1 class="text-gray-700 pt-6 text-xl font-bold">Lorem ipsum dolor sit amet
                                                consectetur
                                                adipisicing elit.</h1>
                                            <h2 class="text-sm text-gray-500 pt-4 pb-4">Lorem ipsum dolor, sit amet
                                                consectetur
                                                adipisicing elit. Dolores facere
                                                aliquid esse eligendi labore. Illum nobis distinctio officia quia nulla!
                                                Natus dolorem blanditiis facere aliquam tenetur laudantium, eaque
                                                sapiente labore!</h2>
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
                <div class="bg-green-500 w-full h-auto rounded-[60px] shadow-xl">
                    <div class="py-20 px-32">
                        <div class="text-center">
                            <div class="justify-center pb-4">
                                <h2 class="text-orange-400 text-sm underline text-center">CONTACT</h2>
                            </div>
                            <div class="pb-6">
                                <h2 class="text-white text-2xl font-bold">Feel Free to Contact US</h2>
                            </div>
                        </div>
                        <form action="" class=" space-y-4">

                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-center text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Full name" required />
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-center text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Email" required />
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-center text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                                placeholder="Title" required />
                            <textarea type="text area" id="first_name"
                                class="bg-gray-50 border h-32 border-gray-300 text-center text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                                placeholder="Your message" required></textarea>
                            <div class="flex justify-center items-center pt-4">
                                <button type="button"
                                    class="text-white  bg-gradient-to-r from-slate-600 to-slate-700 focus:ring-4 focus:outline-none focus:ring-white font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 shadow-lg hover:bg-gradient-to- hover:from-gray-700 hover:to-gray-600">SAND
                                    YOUR MESSAGE</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="pt-16 px-32">
                    <div class="space-y-2">
                        <h2 class="text-md text-gray-600">Lorem ipsum dolor </h2>
                        <h1 class="text-xl text-gray-800 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Totam,</h1>
                    </div>
                    <div class="flex space-x-24 justify-between pt-6">
                        <div class="space-y-2">
                            <h2 class="text-green-600">Send us an email <i class="fa-solid fa-envelope"
                                    style="color: #43A047;"></i></h2>
                            <p>email.com</p>
                        </div class="space-y-2">
                        <div class="space-y-2">
                            <h2 class="text-green-600">Give us a call <i class="fa-solid fa-phone"
                                    style="color: #43A047;"></i></h2>
                            <p>083333333333</p>
                        </div class="space-y-2">
                        <div class="space-y-2">
                            <h2 class="text-green-600">Visit our office <i class="fa-solid fa-building"
                                    style="color: #43A047;"></i></h2>
                        </div>
                        <div class="space-y-2">
                            <h2 class="text-green-600">Send us a package <i class="fa-solid fa-building"
                                    style="color: #43A047;"></i></h2>

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
