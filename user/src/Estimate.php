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

        <!-- bodyarea -->
    
        <div class="h-screen">

            <!-- headerarea -->

            <div>

                <?php
                
                    require "header.php";

                ?>

            </div>
            
            <!-- headerarea -->        
            
            <div class="flex flex-col">                
            
                <div class="grid grid-cols-1">

                    <div class="flex flex-row justify-center">
                        
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

                                    <!-- package_card1 -->
    
                                    <div class="flex flex-row justify-center mt-5">
    
                                        <div class="relative w-full px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq1" class="appearance-none peer">
                                            
                                            <label for="faq1" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Web Development</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                        
                                            
                                            </div>
                                            
                                        </div>
    
                                    </div>

                                    <!-- package_card1 -->

                                    <!-- package_card2 -->
                                    
                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative w-full px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq2" class="appearance-none peer">
                                            
                                            <label for="faq2" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>

                                                
                                                <h3>System Development</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                               
    
                                            </div>
                                            
                                        </div>
    
                                    </div>

                                    <!-- package_card2 -->

                                    <!-- package_card3 -->
                                    
                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative w-full px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq3" class="appearance-none peer">
                                            
                                            <label for="faq3" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Application Development</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                            
    
                                            </div>
                                            
                                        </div>
    
                                    </div>

                                    <!-- package_card3 -->

                                    <!-- package_card4 -->
                                    
                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative w-full px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq4" class="appearance-none peer">
                                            
                                            <label for="faq4" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Hardware and Networking</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                            
    
                                            </div>
                                            
                                        </div>
    
                                    </div>

                                    <!-- package_card4 -->

                                    <!-- package_card5 -->

                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative w-full px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq4" class="appearance-none peer">
                                            
                                            <label for="faq4" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Graphic Designing</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                            
    
                                            </div>
                                            
                                        </div>
    
                                    </div>

                                    <!-- package_card5 -->
                                     
                                    <!-- package_card6 -->

                                    <div class="flex flex-row justify-center mt-3">
    
                                        <div class="relative w-full px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                            
                                            <input type="radio" name="faq" id="faq4" class="appearance-none peer">
                                            
                                            <label for="faq4" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                
                                                <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                
                                                <h3>Video Editing</h3>
                                                
                                            </label>
                                            
                                            <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                            
    
                                            </div>
                                            
                                        </div>
    
                                    </div>

                                    <!-- package_card6 -->
                                
                                </div>
                                
                            </div>
    
                            <!-- packages -->
    
                        </div>
                        
                        <!-- packageselectsection -->
    
                    </div>
                    
                </div>

                <!-- estimatesendingsection -->

                <div class="">

                    <!-- header_section -->

                    <div class="flex flex-col mt-5">

                        <div class="flex flex-row justify-center">

                            <div class="">

                                <span class="text-2xl font-bold headertext bg-[#645FCE] text-white px-9 py-3 rounded-lg">Get An Estimate</span>

                            </div>

                        </div>

                    </div>

                    <!-- header_section -->

                    <!-- estimate_sending_section -->

                    <div>

                        <div class="flex flex-col">

                            <div class="grid grid-cols-1">

                                <div class="flex flex-row justify-center p-5">

                                    <!-- estimate_sending_inputfields -->

                                    <div class="flex flex-col w-full gap-3 rounded-lg p-7 bg-slate-300">

                                        <div class="grid grid-cols-1 mt-5">

                                            <input type="text" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="What's Your Business Type ex :- Food And Bevarage" />

                                        </div>

                                        <div class="grid grid-cols-1">

                                            <input type="text" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="What's Your Business / Brand Name ex :- Food And Bevarage" />

                                        </div>

                                        <div class="grid grid-cols-1">

                                            <input type="text" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="What's Your Business Scale ex :- Small Scale , Medium Scale , Large Scale , None" />

                                        </div>

                                        <!-- packages selecting area -->

                                        <div class="grid grid-cols-1">

                                            <select class="px-2 py-3 placeholder-black rounded-md focus:outline-none">

                                                <div class="w-auto" role="listbox">

                                                    <option value="0">Select Your Service</option>
                                                    <option value="1">Web Development</option>
                                                    <option value="2">System Development</option>

                                                </div>

                                            </select>

                                        </div>

                                        <div class="grid grid-cols-1">

                                            <select class="px-2 py-3 placeholder-black rounded-md focus:outline-none">

                                                <div class="w-auto" role="listbox">

                                                    <option value="0">Select Package</option>
                                                    <option value="1">Basic Package</option>
                                                    <option value="2">Standerd Package</option>
                                                    <option value="3">Premium Package</option>

                                                </div>

                                            </select>

                                        </div>

                                        <!-- packages selecting area -->

                                        <div class="grid grid-cols-1">

                                            <input type="text" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="Enter Your Monthly Budget ex :- Rs 100000.00" />

                                        </div>

                                        <div class="grid grid-cols-1">

                                            <input type="text" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="Enter Your Name ex :- John Doely" />

                                        </div>

                                        <div class="grid grid-cols-1">

                                            <input type="text" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="Enter Your Email Address ex :- john_doely@gmail.com" />

                                        </div>

                                        <div class="grid grid-cols-1">

                                            <input type="text" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="Enter Your Mobile Number ex :- 0771234560 / 0331234560" />

                                        </div>

                                        <!-- estimate_sending_button -->

                                        <div class="flex flex-row justify-end">
    
                                            <button class="bg-[#8B65DB] px-6 py-3 rounded-md text-md hover:bg-[#6A2DEB] duration-700 ease-out hover:ease-in hover:duration-800 hover:text-white">Send Your Estimate</button>
    
                                        </div>

                                        <!-- estimate_sending_button -->
                                        
                                    </div>

                                    <!-- estimate_sending_inputfields -->

                                </div>

                            </div>

                        </div>
                        
                    </div>

                    <!-- estimate_sending_section -->

                </div>
               
                <!-- estimatesendingsection -->
                
            </div>            

            <!-- footerarea -->

            <div>

                <?php
                
                    require "footer.php";

                ?>

            </div>

            <!-- footerarea -->

        </div>

        <!-- bodyarea -->

        <script src="tailwind.js"></script>
    
    </body>

</html>