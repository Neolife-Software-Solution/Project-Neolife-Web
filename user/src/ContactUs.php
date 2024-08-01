<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css" />

        <link rel="stylesheet" href="tailwind.css" />

        <link rel="icon" href="resources/logo/favicon.png" />

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

                    <div class="flex flex-row pt-12 sm:px-3">

                        <div class="flex flex-col">
                            
                            <div class="flex flex-row justify-center">
    
                                <span class="font-bold lg:text-xl sm:text-lg">Welcome to NeoLife Software Solutions!</span>
    
                            </div>
                            
                            <div class="mt-5 text-lg text-center lg:text-balance sm:text-wrap">
        
                                <p>We're here to help you with any questions, concerns, or inquiries you may have. Whether you're interested in our services, need support, or just want to give us feedback, 
                                    we'd love to hear from you. Please use any of the methods below to get in touch with us.
                                </p>
        
                            </div>

                        </div>

                    </div>

                    <!-- introsection -->

                    <!-- helpaddingsection -->

                    <div class="p-5 mt-12 bg-slate-300">

                        <div class="grid mt-24 mb-20 border sm:grid-cols-1 lg:grid-cols-2">

                            <!-- helprexcard -->

                            <div class="p-5 bg-white grid-col-6">

                                <!-- head -->

                                <div class="flex flex-row justify-center mb-4">

                                    <span class="text-xl font-bold">How Can We Help You ?</span>

                                </div>

                                <!-- head -->

                                <!-- content -->

                                <div class="flex flex-col w-full gap-4 mt-11">

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
                                    
                                        <select class="px-4 py-3 placeholder-black duration-300 ease-out rounded-md focus:outline-none hover:transition hover:ease-in hover:duration-700 bg-slate-300 hover:bg-indigo-300">

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
                                    
                                    <div class="flex flex-row lg:justify-end sm:justify-center">

                                        <button class="rounded-md bg-[#645FCE] px-8 hover:text-white py-3">Send</button>                                        

                                    </div>

                                </div>

                                <!-- content -->                            

                            </div>

                            <!-- helprexcard -->

                            <!-- mapview -->

                            <div class="p-5 shadow-lg shadow-black"></div>

                            <!-- mapview -->

                        </div>

                        <div class="">

                            <div class="flex flex-row justify-center text-center lg:block sm:text-sm sm:hidden">

                                <div class="">

                                    <span><i class="ml-2 mr-2 fa-solid fa-envelope"></i>&nbsp;<a href="mailto:softwareneolife@gmail.com"> softwareneolife@gmail.com</a></span>
                                    <span><i class="ml-2 mr-2 fa-brands fa-facebook"></i>&nbsp;<a href="https://www.facebook.com/profile.php?id=61552215121507">NeoLife Software Solutions</a></span>
                                    <span><i class="ml-2 mr-2 fa-solid fa-mobile"></i>&nbsp;+94 711401506 (Main)</span>
                                    <span><i class="ml-2 mr-2 fa-solid fa-mobile"></i>&nbsp;+94 771234560 (Local)</span>

                                </div>

                            </div>

                        </div>

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