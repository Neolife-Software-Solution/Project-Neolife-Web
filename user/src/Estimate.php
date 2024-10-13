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

                    require "user_connection.php"; // datbaseconnectionrequire

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

                                    <!-- package_card -->
    
                                    <?php
                                    
                                        $our_services_rs =  Database::search("SELECT DISTINCT `service_name` FROM `our_services` ");

                                        $our_services_num = $our_services_rs->num_rows;

                                        for($s = 0; $s < $our_services_num; $s++) {

                                            $our_services_data = $our_services_rs->fetch_assoc();

                                            ?>
                                            
                                                <div class="flex flex-row justify-center mt-5">
                                                
                                                    <div class="relative w-full px-5 py-2 mb-2 bg-white rounded-md shadow-lg tab">
                                                        
                                                        <input type="radio" name="faq" id="faq1" class="appearance-none peer">
                                                        
                                                        <!-- servicenamelable -->

                                                        <label for="faq1" class="flex items-center cursor-pointer font-semibold text-lg after:content-['+'] after:absolute after:right-5 after:text-2xl     after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-45">
                                                            
                                                            <h2 class="flex items-center justify-center w-8 h-8 mr-3 text-white rounded-sm bg-[#645FCE]">X</h2>
                                                            
                                                            <!-- servicename -->

                                                            <h3><?php echo $our_services_data["service_name"]; ?></h3>

                                                            <!-- servicename -->
                                                            
                                                        </label>

                                                        <!-- servicenamelable -->
                                                        
                                                        <!-- accordian detailbody -->
                                                
                                                        <div class="h-0 mt-5 overflow-hidden transition-all duration-500 ease-in-out answer content peer-checked:h-full lg:w-[1111px]">                                                                                        
                                                        
                                                            <!-- package cards -->
                                                
                                                            <div class="flex flex-row">
                                                                
                                                                <div class="flex flex-col">
                                                
                                                                    <div class="grid gap-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
                                                
                                                                        <!-- packages -->

                                                                        <?php
                                                                        
                                                                            $os_package_rs = Database::search("SELECT * FROM `our_services_packages` ");

                                                                            $os_package_num = $os_package_rs->num_rows;
                                                                            
                                                                            for($p = 0; $p < $os_package_num; $p++) {

                                                                                $os_package_data = $os_package_rs->fetch_assoc();

                                                                                ?>
                                                                                
                                                                                    <div class="flex flex-row p-3 rounded-md bg-slate-200">
                                                                                    
                                                                                        <div class="flex flex-col w-full">
                                                                                    
                                                                                            <!-- packageheading -->
                                                                                    
                                                                                            <div class="flex flex-row">
                                                                                    
                                                                                                <div class="flex flex-row justify-end">                                                                                                                                    
                                                                                    
                                                                                                    <span class="text-2xl font-bold"><i class="text-2xl fa-regular fa-building fa-fade"></i>&nbsp;&nbsp;<?php echo $os_package_data["ospackage_name"]; ?></span>                              
                                                                                    
                                                                                                </div>                                                                        
                                                                                    
                                                                                            </div>
                                                                                    
                                                                                            <!-- packageheading -->
                                                                                    
                                                                                            <!-- packagebody -->
                                                                                            
                                                                                            <div class="flex flex-row p-2 mt-2 bg-white rounded-md">
                                                                                    
                                                                                                <div class="flex flex-col">
                                                                                    
                                                                                                    <div class="flex flex-row items-center leading-10">
                                                                                    
                                                                                                        <span class="font-bold text-md">Package Name :-</span>
                                                                                                        <span class="text-sm">Available Package</span>
                                                                                    
                                                                                                    </div>
                                                                                    
                                                                                                    <div class="flex flex-row">
                                                                                    
                                                                                                        <div class="flex flex-col leading-6">
                                                                                    
                                                                                                            <span class="text-lg font-bold">Package includes and Details</span>
                                                                                    
                                                                                                            <div>
                                                                                    
                                                                                                                <p>Simple & Attractive Front-End Small scale Up to 2 pages. Recommended for portfolios and business websites</p>                                                                                
                                                                                    
                                                                                                            </div>                                                                                
                                                                                    
                                                                                                        </div>
                                                                                    
                                                                                                    </div>
                                                                                                    
                                                                                                    <!-- packageincludedetails -->
                                                                                    
                                                                                                    <div class="flex flex-row items-center">
                                                                                    
                                                                                                        <div class="flex flex-col leading-10">
                                                                                    
                                                                                                            <span class="font-bold text-md">Package Deatils</span>
                                                                                    
                                                                                                            <div class="flex flex-row">
                                                                                    
                                                                                                                <span class="text-sm font-bold"><i class="fa-solid fa-check fa-fade"></i>&nbsp;&nbsp;1 page Design customization</span>                                                                                
                                                                                    
                                                                                                            </div>
                                                                                                                                                                                        
                                                                                                            <div class="flex flex-row">
                                                                                    
                                                                                                                <span class="text-sm font-bold"><i class="fa-solid fa-check fa-fade"></i>&nbsp;&nbsp;1 page Design customization</span>                                                                                
                                                                                    
                                                                                                            </div>                                                                                
                                                                                    
                                                                                                            <div class="flex flex-row">
                                                                                    
                                                                                                                <span class="text-sm font-bold"><i class="fa-solid fa-check fa-fade"></i>&nbsp;&nbsp;1 page Design customization</span>                     
                                                                                    
                                                                                                            </div>                                                                                
                                                                                                            
                                                                                                            <div class="flex flex-row">
                                                                                    
                                                                                                                <span class="text-sm font-bold"><i class="fa-solid fa-check fa-fade"></i>&nbsp;&nbsp;1 page Design customization</span>                                                                                
                                                                                    
                                                                                                            </div>
                                                                                                            
                                                                                                            <div class="flex flex-row mt-2">
                                                                                    
                                                                                                                <button id="openModalButton" class="bg-[#6A2DEB] px-2 rounded-md text-md hover:bg-[#8B65DB] duration-700 ease-out hover:ease-in hover:duration-800 hover:text-white">More details</button>
                                                                                    
                                                                                                            </div>
                                                                                    
                                                                                                            <!-- packagemoredetailsmodal -->
                                                                                                                                                                                                
                                                                                                            <!-- packagemoredetailsmodal -->
                                                                                                            
                                                                                                        </div>    
                                                                                                        
                                                                                    
                                                                                                    </div>
                                                                                    
                                                                                                    <!-- packageincludedetails -->
                                                                                    
                                                                                                </div>
                                                                                    
                                                                                            </div>
                                                                                    
                                                                                            <!-- packagebody -->
                                                                                            
                                                                                        </div>
                                                                                    
                                                                                    </div>                                                                                    
                                                                                
                                                                                <?php

                                                                            }

                                                                        ?>                                                
                                                
                                                                        <!-- packages -->                                                                                                                                                                                                                                                                                                                                                        
                                                
                                                                    </div>
                                                
                                                                </div>                                                
                                                
                                                            </div>
                                                
                                                            <!-- package cards -->
                                                                                                            
                                                        </div>
                                                
                                                        <!-- packagemodelview -->
                                                        
                                                        <div id="modal" class="fixed inset-0 z-10 hidden overflow-y-auto">
                                                
                                                            <div class="flex items-end justify-center min-h-screen p-4 text-center sm:items-center sm:p-0">
                                                
                                                                <div class="fixed inset-0 transition-opacity duration-300 ease-out bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
                                                                
                                                                <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:w-full sm:max-w-lg">
                                                
                                                                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                                
                                                                        <div class="sm:flex sm:items-start">
                                                
                                                                            <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                                                
                                                                                <svg class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                                
                                                                                </svg>
                                                
                                                                            </div>
                                                
                                                                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                                
                                                                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Deactivate account</h3>
                                                
                                                                                <div class="mt-2">
                                                
                                                                                    <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                                                
                                                                                </div>
                                                
                                                                            </div>
                                                
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="px-4 py-3 bg-gray-50 sm:flex sm:flex-row-reverse sm:px-6">
                                                
                                                                        <button id="deactivateButton" type="button" class="inline-flex justify-center w-full px-3 py-2 text-sm font-semibold text-white bg-red-600 rounded-md shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
                                                
                                                                        <button id="cancelButton" type="button" class="inline-flex justify-center w-full px-3 py-2 mt-3 text-sm font-semibold text-gray-900 bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                                                
                                                                    </div>
                                                                
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                
                                                        <!-- packagemodelview -->
                                                
                                                        <!-- accordian detailbody -->
                                                        
                                                    </div>
                                                
                                                </div>
                                                

                                            <?php

                                        }

                                    ?>

                                    <!-- package_card -->

                                   
                                
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

                                            <input type="text" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="What's Your Business / Brand Name ex :- Foodies & Buddies" />

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

                                            <input type="email" class="px-3 py-3 placeholder-black rounded-md focus:outline-none" placeholder="Enter Your Email Address ex :- john_doely@gmail.com" />

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
        <script src="script.js"></script>
    
    </body>

</html>