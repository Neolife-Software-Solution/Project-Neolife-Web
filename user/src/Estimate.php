<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css" />

        <link rel="stylesheet" href="tailwind.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" href="resources/logo/favicon.png" />

        <title>Estimate | NeoLife Software Solutions</title>

    </head>
    
    <body>
    
        <div class="h-screen">

            <div>

                <?php
                
                    require "header.php";

                ?>

            </div>            
            
            <div>                
            
                <div>

                    <div>
                        
                        <!-- packageselectsection -->                                        
    
                        <div class="p-3 mt-16">
    
                            <div class="py-5">
    
                                <div>
    
                                    <span class="flex flex-row justify-center text-2xl text-3xl font-bold headertext">Our Services</span>
    
                                </div>
    
                            </div>
                            
                            <!-- packages -->
    
                            <div class="flex justify-center flex-row bg-[#645FCE] p-3 rounded-2xl">
    
                                <div class="">
    
                                    <div class="flex flex-row justify-center mt-5">
    
                                        <div class="relative px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq1" class="appearance-none peer">
                                            
                                            <label for="faq1" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Web Development</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">
                                            
                                                
                                            
                                            </div>
                                            
                                        </div>
    
                                    </div>
                                    
                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq2" class="appearance-none peer">
                                            
                                            <label for="faq2" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>

                                                
                                                <h3>System Development</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                               
    
                                            </div>
                                            
                                        </div>
    
                                    </div>
                                    
                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq3" class="appearance-none peer">
                                            
                                            <label for="faq3" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Application Development</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                            
    
                                            </div>
                                            
                                        </div>
    
                                    </div>
                                    
                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq4" class="appearance-none peer">
                                            
                                            <label for="faq4" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Hardware and Networking</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                            
    
                                            </div>
                                            
                                        </div>
    
                                    </div>

                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq4" class="appearance-none peer">
                                            
                                            <label for="faq4" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Graphic Designing</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                            
    
                                            </div>
                                            
                                        </div>
    
                                    </div>

                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq4" class="appearance-none peer">
                                            
                                            <label for="faq4" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Video Editing</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                            
    
                                            </div>
                                            
                                        </div>
    
                                    </div>
                                
                                </div>
                                                    
    
                            </div>
    
                            <!-- packages -->
    
                        </div>
                        
                        <!-- packageselectsection -->
    
                    </div>
                    
                </div>

                <!-- estimatesendingsection -->

                <div class="mt-4">

                    <div class="flex flex-row justify-center">

                        <div class="">
                        
                            <span class="text-2xl font-bold headertext">Get An Estimate</span>

                        </div>
                        
                    </div>

                    <div>

                        <div class="flex flex-row justify-center p-4">

                            <div class="w-full p-2 p-5 bg-slate-300">

                                <div class="flex flex-col">

                                    <div class="grid grid-cols-1">

                                        <input type="text" class="focus:outline-none">

                                    </div>

                                </div>                                
                            
                            </div>

                        </div>

                    </div>
                    
                </div>

                <!-- estimatesendingsection -->
                
            </div>            

            <div>

                <?php
                
                    require "footer.php";

                ?>

            </div>

        </div>

        <script src="tailwind.js"></script>
    
    </body>

</html>