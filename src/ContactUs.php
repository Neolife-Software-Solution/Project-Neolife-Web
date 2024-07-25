<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />
    
    <link href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" rel="stylesheet">
    
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

    <title>Contact Us | NeoLife Software Solutions</title>

</head>

<body>

    <!-- content -->

    <div class="h-screen">

        <!-- header -->

        <div class="">

            <?php

                require "header.php";

            ?>

        </div>

        <!-- header -->

        <!-- body -->

        <div class="mt-16">

            <div class="mt-10">

                <!-- introsection -->

                <div class="flex flex-row justify-center pt-12 sm:px-3">

                    <div class="flex flex-col">

                        <div class="flex flex-row justify-center">

                            <span class="font-bold lg:text-xl sm:text-lg">Welcome to NeoLife Software Solutions!</span>

                        </div>

                        <!-- introduction -->

                        <div class="p-1 mt-5 text-lg text-center">

                            <p>Ready to transform your business with cutting-edge technology? 
                                Contact us today to learn more about our services and how we can help you achieve your goals.
                            </p>

                        </div>

                        <!-- introduction -->

                    </div>

                </div>

                <!-- introsection -->

                <!-- helpaddingsection -->

                <div class="p-5 mt-12 bg-slate-300">

                    <div class="grid mt-24 mb-20 border sm:grid-cols-1 lg:grid-cols-2">

                        <!-- helpreqcard -->

                        <div class="p-5 bg-white grid-col-6">

                            <!-- head -->

                            <div class="flex flex-row justify-center mb-4">

                                <span class="text-xl font-bold">How Can We Help You ?</span>

                            </div>

                            <!-- head -->

                            <!-- content -->

                            <div class="flex flex-col w-full gap-4 mt-11">

                                <!-- name,email,mobile,and etc.. -->

                                <div class="grid grid-cols-1">

                                    <input type="text" placeholder="Name" class="px-4 py-3 placeholder-black duration-300 ease-out rounded-md focus:outline-none hover:transition hover:ease-in hover:duration-700 bg-slate-300 hover:bg-indigo-300" />

                                </div>

                                <div class="grid grid-cols-1">

                                    <input type="email" placeholder="Email" class="px-4 py-3 placeholder-black duration-300 ease-out rounded-md focus:outline-none hover:transition hover:ease-in hover:duration-700 bg-slate-300 hover:bg-indigo-300" />

                                </div>

                                <div class="grid grid-cols-1">

                                    <input type="text" placeholder="Mobile Number" class="px-4 py-3 placeholder-black duration-300 ease-out rounded-md focus:outline-none hover:transition hover:ease-in hover:duration-700 bg-slate-300 hover:bg-indigo-300" />

                                </div>

                                <!-- selectmenu -->

                                <div class="grid grid-cols-1">

                                    <select class="px-2 py-3 placeholder-black duration-300 ease-out rounded-md focus:outline-none hover:transition hover:ease-in hover:duration-700 bg-slate-300 hover:bg-indigo-300">

                                        <div class="w-auto" role="listbox">

                                            <option value="0">Select Your Problem</option>
                                            <option value="1">Services Problem</option>
                                            <option value="2">About Employees</option>

                                        </div>

                                    </select>

                                </div>

                                <!-- selectmenu -->

                                <div class="grid grid-cols-1">

                                    <input type="text" placeholder="Let's Talk about your problem" class="px-4 py-3 placeholder-black duration-300 ease-out rounded-md focus:outline-none hover:transition hover:ease-in hover:duration-700 bg-slate-300 hover:bg-indigo-300" />

                                </div>

                                <!-- sendbutton -->

                                <div class="flex flex-row lg:justify-end sm:justify-center">

                                    <button class="rounded-md bg-[#645FCE] px-8 hover:bg-[#5852EC] hove:transition hover:duration-500 hover:ease-in duration-700 ease-out hover:text-white py-3">Send</button>

                                </div>

                                <!-- sendbutton -->

                                <!-- name,email,mobile,and etc.. -->

                            </div>

                            <!-- content -->

                        </div>

                        <!-- helpreqcard -->

                        <!-- imagelider -->                        

                        <div class="relative p-5 shadow-lg shadow-black">

                            <div class="flex flex-row">

                                <div id="carousel-example" class="relative w-full mt-8" data-carousel="slide">

                                    <!-- Carousel wrapper -->

                                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

                                        <!-- Item 1 -->

                                        <div class="hidden duration-700 ease-in-out" data-carousel-item id="carousel-item-1">

                                            <img src="resources/contsctus_slider_images/contact_slider_img_01.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

                                        </div>

                                        <!-- Item 2 -->

                                        <div class="hidden duration-700 ease-in-out" data-carousel-item id="carousel-item-2">

                                            <img src="resources/contsctus_slider_images/contact_slider_img_02.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

                                        </div>

                                        <!-- Item 3 -->

                                        <div class="hidden duration-700 ease-in-out" data-carousel-item id="carousel-item-3">

                                            <img src="resources/contsctus_slider_images/contact_slider_img_03.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

                                        </div>

                                        <!-- Item 4 -->

                                        <div class="hidden duration-700 ease-in-out" data-carousel-item id="carousel-item-4">

                                            <img src="resources/contsctus_slider_images/contact_slider_img_04.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">

                                        </div>

                                    </div>

                                    <!-- Slider indicators -->

                                    <div class="absolute z-30 flex hidden space-x-3 -translate-x-1/2 lg:block bottom-5 left-1/2 rtl:space-x-reverse">

                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0" id="carousel-indicator-1"></button>

                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1" id="carousel-indicator-2"></button>

                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2" id="carousel-indicator-3"></button>

                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3" id="carousel-indicator-4"></button>

                                    </div>

                                    <!-- Slider controls -->

                                    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>

                                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">

                                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">

                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>

                                            </svg>

                                            <span class="sr-only">Previous</span>

                                        </span>

                                    </button>

                                    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>

                                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">

                                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">

                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>

                                            </svg>

                                            <span class="sr-only">Next</span>

                                        </span>
                                        
                                    </button>

                                </div>

                            </div>

                        </div>                        

                        <!-- imagelider -->

                    </div>

                    <!-- social_media & other details tags -->

                    <div class="">

                        <div class="flex flex-row justify-center hidden text-sm text-center lg:block">

                            <div class="">

                                <span><i class="ml-2 mr-2 fa-solid fa-envelope"></i>&nbsp;<a target="_blank" href="mailto:softwareneolife@gmail.com"> softwareneolife@gmail.com</a></span>

                                <span><i class="ml-2 mr-2 fa-brands fa-facebook"></i>&nbsp;<a target="_blank" href="https://www.facebook.com/profile.php?id=61552215121507">NeoLife Software Solutions</a></span>

                                <span><i class="ml-2 mr-2 fa-solid fa-mobile"></i>&nbsp;+94 711401506 (Main)</span>
                                
                                <span><i class="ml-2 mr-2 fa-solid fa-mobile"></i>&nbsp;+94 711401506 (Local)</span>

                            </div>

                        </div>

                    </div>

                    <!-- social_media & other details tags -->

                </div>

                <!-- helpaddingsection -->

            </div>

        </div>

        <!-- body -->

        <div>

            <?php

            require "footer.php";

            ?>

        </div>

    </div>

    <!-- content -->

    <script src="script.js"></script>

    <script src="tailwind.js"></script>

</body>

</html>