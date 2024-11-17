<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet' />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="header.css" />

        <link rel="stylesheet" href="admin_style.css" />

        <link rel="stylesheet" href="tailwind.css" />

        <title>Ongoing Projects | Neolife Software Solutions</title>

        <link rel="icon" href="resources/logo/favicon.png" />

    </head>

    <body>
    
        <div class="h-screen bg-white">

            <!-- head -->

            <div>
                
                <?php
                
                    require "header1.php";

                ?>

            </div>

            <!-- head -->
            
            <!-- header_section_start -->

            <div>

                <div class="flex flex-row justify-center">

                    <span class="text-2xl font-semibold text-stone-500 headertext">On Going Projects</span>

                </div>

            </div>
            
            <!-- header_section_end -->

            <!-- content_start -->

            <div class="flex flex-col">

                <!-- ongoing project showing section -->

                <div class="flex flex-row justify-center p-2"> <!-- for loop start here -->

                    <div class="flex flex-row p-2 p-3 rounded-md bg-slate-300">
    
                        <div class="flex flex-col">
    
                            <!-- brand name and detail heading section -->
                        
                            <div class="flex flex-col leading-10">
                                
                                <!-- brande name and detail section -->
        
                                <div class="flex justify-center felx-row">
                
                                    <span class="text-lg tracking-wide headertext-aboutus">ET With Lakmal</span>
        
                                </div>
        
                                <div class="flex flex-row justify-center">
         
                                    <div class="flex flex-col">
    
                                        <div>
            
                                            <span class="font-bold">Business Type&nbsp;:</span>
                                            <span>Food and beverage</span>
            
                                        </div>
            
                                        <div>
            
                                            <span class="font-bold">Scale of business&nbsp;:</span>
                                            <span>Large Scale</span>    
            
                                        </div>
                                        
                                        <div>
            
                                            <span class="font-bold">Selected Package Name&nbsp;:</span>
                                            <span>Web protfolio</span>                                    
            
                                        </div>                                    
    
                                    </div>
                                                                    
                                </div>
        
                                <!-- brande name and detail section -->
                                
                                <!-- add sprint button -->

                                <div class="flex flex-row justify-center mt-2">                                
    
                                    <button class="px-8 py-1 font-bold duration-500 ease-out bg-purple-400 rounded-lg text-md add-sprint-modal hover:bg-blue-700 hover:duration-700 hover:ease-in hover:text-white">Add Sprint&nbsp;<i class="text-lg fa-solid fa-plus fa-fade"></i></button>                                
    
                                </div>

                                <!-- add sprint button -->
        
                            </div>
        
                            <!-- brand name and detail heading section -->
        
                            <!-- ongoing project adding member table and detail table -->
        
                            <div class="flex flex-col">
        
                                <!-- sprint table start -->
    
                                <div class="flex flex-row p-1"> <!-- for loop has start in here -->
    
                                    <!-- sprint number -->
    
                                    <span class="text-lg headertext">Sprint No&nbsp;:&nbsp;01</span>
    
                                    <!-- sprint number -->
    
                                </div>
    
                                <!-- table content -->

                                <div class="flex flex-row bg-white rounded-lg">
        
                                    <div class="flex flex-col">
        
                                        <!-- table starting -->

                                        <table class="p-1 border border-separate rounded-lg table-auto border-slate-500 border-spacing-2">
    
                                            <!-- table head -->

                                            <thead>
                                                
                                                <tr>
                                                    
                                                    <th class="p-1 border border-slate-600">No</th>
                                                    <th class="p-1 border border-slate-600">Time Period</th>
                                                    <th class="p-1 border border-slate-600">Activity</th>
                                                    <th class="p-1 border border-slate-600">Sprint No</th>
                                                    <th class="p-1 border border-slate-600">Department</th>
                                                    <th class="p-1 border border-slate-600">Employee ID</th>
                                                    <th class="p-1 border border-slate-600">Employee Name / Name's</th>
                                                
                                                </tr>
                                                
                                            </thead>

                                            <!-- table head -->

                                            <!-- table body -->
                                            
                                            <tbody>
    
                                                <tr>
                                                    
                                                    <td class="p-1 border border-slate-700">1</td>
                                                    <td class="p-1 border border-slate-700">2024/08/09 - 2024/09-10</td>
                                                    <td class="p-1 border border-slate-700">Create Home Page</td>
                                                    <td class="p-1 border border-slate-700">Sprint 1</td>
                                                    <td class="p-1 border border-slate-700">IT</td>
                                                    <td class="p-1 border border-slate-700">1961</td>
                                                    <td class="p-1 border border-slate-700">John Doely</td>
                                                
                                                </tr>
                                                                                                                                                                                                                                
                                                <tr>
                                                    
                                                    <td class="p-1 border border-slate-700">2</td>
                                                    <td class="p-1 border border-slate-700">2024/08/09 - 2024/09-10</td>
                                                    <td class="p-1 border border-slate-700">Create Home Page</td>
                                                    <td class="p-1 border border-slate-700">Sprint 1</td>
                                                    <td class="p-1 border border-slate-700">IT</td>
                                                    <td class="p-1 border border-slate-700">1961</td>
                                                    <td class="p-1 border border-slate-700">John Doely</td>
                                                
                                                </tr>
                                                                                                                                                                                                                                
                                                <tr>
                                                    
                                                    <td class="p-1 border border-slate-700">3</td>
                                                    <td class="p-1 border border-slate-700">2024/08/09 - 2024/09-10</td>
                                                    <td class="p-1 border border-slate-700">Create Home Page</td>
                                                    <td class="p-1 border border-slate-700">Sprint 1</td>
                                                    <td class="p-1 border border-slate-700">IT</td>
                                                    <td class="p-1 border border-slate-700">1961</td>
                                                    <td class="p-1 border border-slate-700">John Doely</td>
                                                
                                                </tr>
                                                                                                                                                                                                                                
                                                <tr>
                                                    
                                                    <td class="p-1 border border-slate-700">4</td>
                                                    <td class="p-1 border border-slate-700">2024/08/09 - 2024/09-10</td>
                                                    <td class="p-1 border border-slate-700">Create Home Page</td>
                                                    <td class="p-1 border border-slate-700">Sprint 1</td>
                                                    <td class="p-1 border border-slate-700">IT</td>
                                                    <td class="p-1 border border-slate-700">1961</td>
                                                    <td class="p-1 border border-slate-700">John Doely</td>
                                                
                                                </tr>
                                                                                                                                                                                                                                
                                                <tr>
                                                    
                                                    <td class="p-1 border border-slate-700">5</td>
                                                    <td class="p-1 border border-slate-700">2024/08/09 - 2024/09-10</td>
                                                    <td class="p-1 border border-slate-700">Create Home Page</td>
                                                    <td class="p-1 border border-slate-700">Sprint 1</td>
                                                    <td class="p-1 border border-slate-700">IT</td>
                                                    <td class="p-1 border border-slate-700">1961</td>
                                                    <td class="p-1 border border-slate-700">John Doely</td>
                                                
                                                </tr>
                                                                                                                                                                                                                                
                                                <tr>
                                                    
                                                    <td class="p-1 border border-slate-700">6</td>
                                                    <td class="p-1 border border-slate-700">2024/08/09 - 2024/09-10</td>
                                                    <td class="p-1 border border-slate-700">Create Home Page</td>
                                                    <td class="p-1 border border-slate-700">Sprint 1</td>
                                                    <td class="p-1 border border-slate-700">IT</td>
                                                    <td class="p-1 border border-slate-700">1961</td>
                                                    <td class="p-1 border border-slate-700">John Doely</td>
                                                
                                                </tr>
                                                                                                                                                                                                                                
                                                <tr>
                                                    
                                                    <td class="p-1 border border-slate-700">7</td>
                                                    <td class="p-1 border border-slate-700">2024/08/09 - 2024/09-10</td>
                                                    <td class="p-1 border border-slate-700">Create Home Page</td>
                                                    <td class="p-1 border border-slate-700">Sprint 1</td>
                                                    <td class="p-1 border border-slate-700">IT</td>
                                                    <td class="p-1 border border-slate-700">1961</td>
                                                    <td class="p-1 border border-slate-700">John Doely</td>
                                                
                                                </tr> 
                                                                                                                                                                                                                               
                                                <tr>
                                                    
                                                    <td class="p-1 border border-slate-700">8</td>
                                                    <td class="p-1 border border-slate-700">2024/08/09 - 2024/09-10</td>
                                                    <td class="p-1 border border-slate-700">Create Home Page</td>
                                                    <td class="p-1 border border-slate-700">Sprint 1</td>
                                                    <td class="p-1 border border-slate-700">IT</td>
                                                    <td class="p-1 border border-slate-700">1961</td>
                                                    <td class="p-1 border border-slate-700">John Doely</td>
                                                
                                                </tr>                                                                                                                                                                                
                                                
                                            </tbody>

                                            <!-- table body -->
                                            
                                        </table>

                                        <!-- table ending -->
        
                                    </div>                                
        
                                </div>

                                <!-- table content -->
    
                                <!-- assign team button -->
    
                                <div class="flex flex-row justify-center mt-4 mb-3">
    
                                    <button class="px-6 py-2 text-white bg-red-700 rounded-md duration-600 hover:bg-yellow-600 hover:text-black hover:duration-700 hover:ease-in assign-team-modal">Assign Team&nbsp;<i class="text-lg fa-solid fa-user-plus fa-shake"></i></button>
    
                                </div> <!-- for loop has end in here -->
    
                                <!-- assign team button -->
    
                                <!-- sprint table start -->
        
                            </div>
                            
                            <!-- ongoing project adding member table and detail table -->
    
                        </div>
                        
                    </div>                    

                </div> <!-- for loop end here -->
            
                <!-- ongoing project showing section -->

            </div>

            <!-- content_end -->            
                         
        </div>
        
        <!-- Project add sprint modal start -->

        <div id="modal2" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">

            <div class="w-1/3 p-2 bg-white rounded-lg shadow-lg">

                <div class="flex items-center justify-between p-4 border-b">

                    <h3 class="text-xl font-semibold">Add Sprint Number</h3>

                    <button id="closeModal2" class="text-gray-500 hover:text-gray-700">&times;</button>

                </div>                

                <div class="flex flex-row mt-1 mb-4">

                    <label for="message" class="block mt-4 font-bold text-md ">Project Sprint Number</label>                    

                </div>

                <input id="message" rows="4" type="text" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add Sprint Number ex:- 01" />

                <div id="modalContent2" class="p-4">

                    <!-- Dynamic content will go here -->

                </div>

                <div class="flex justify-end p-4 border-t">

                    <button id="closeModalFooter2" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-5 ms-36">Add Sprint</button>

                </div>

            </div>

        </div>

        <!-- Project add sprint modal end-->
        
        <!-- Project assign team modal start -->

        <div id="modal1" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">

            <div class="w-auto p-2 bg-white rounded-lg shadow-lg">

                <div class="flex items-center justify-between p-1 border-b">

                    <h3 class="text-xl font-semibold">Assign Team Member For Sprint</h3>

                    <button id="closeModal1" class="text-gray-500 hover:text-gray-700">&times;</button>

                </div>                

                <div class="flex flex-row justify-center p-1">

                    <label for="message" class="block mt-4 text-lg font-bold ">Assign Member&nbsp;<i class="text-xl fa-solid fa-user"></i></label>                    

                </div>

                <div>

                    <hr />

                </div>

                <div id="modalContent1" class="p-4">

                    <!-- add time period -->

                    <div class="flex flex-row">

                        <div class="flex flex-col p-1">

                            <div class="flex flex-row mb-4">

                                <span class="font-bold text-md">Add Time Period</span>

                            </div>

                            <div class="flex flex-row gap-2">

                                <div>
    
                                    <label class="text-sm font-bold">From&nbsp;:</label>
                                    <input type="date" class="px-2 py-2 rounded-md cursor-pointer focus:outline-indigo-600 bg-slate-200" placeholder="Add Time From" />
    
                                </div>
    
                                <div>
    
                                    <label class="text-sm font-bold">To&nbsp;:</label>
                                    <input type="date" class="px-2 py-2 rounded-md cursor-pointer focus:outline-indigo-600 bg-slate-200" placeholder="Add Time To" />
    
                                </div>
                                
                            </div>

                        </div>

                    </div>

                    <!-- add time period -->

                    <!-- add activity -->

                    <div class="flex flex-row mt-3 mb-4">

                        <span class="font-bold text-md">Add Activity</span>

                    </div>
                    
                    <div class="flex flex-col mt-3">

                        <label class="mb-3 text-sm font-bold">Activity&nbsp;:</label>
                        <input type="text" class="px-2 py-2 rounded-md focus:outline-indigo-600 bg-slate-200" placeholder="Add Activity" />

                    </div>

                    <!-- add activity -->

                    <!-- add employee -->

                    <div class="flex flex-row mt-3 border-t">

                        <div class="flex flex-col p-1">

                            <div class="flex flex-row mb-4">

                                <span class="font-bold text-md">Add Employee</span>

                            </div>

                            <!-- add employee table -->

                            <div>

                                <table class="p-1 border border-separate rounded-lg table-auto border-slate-500 border-spacing-2">
                                    
                                    <thead>

                                        <tr>

                                            <th class="p-1 border border-slate-600">Department</th>

                                            <th class="p-1 border border-slate-600">Employee ID</th>

                                            <th class="p-1 border border-slate-600">Assigned Employee</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td class="p-1 border border-slate-700">IT</td>

                                            <td class="p-1 border border-slate-700">1961</td>

                                            <td class="p-1 border border-slate-700">John Doely</td>

                                        </tr>

                                        <tr>

                                            <td class="p-1 border border-slate-700">HR</td>

                                            <td class="p-1 border border-slate-700">1963</td>

                                            <td class="p-1 border border-slate-700">Jonathen Perera</td>

                                        </tr>

                                    </tbody>
                                    
                                </table>

                            </div>

                            <!-- add employee table -->

                            <div class="flex flex-col mt-4">

                                <label class="mb-3 text-sm font-bold">Search Employee&nbsp;:</label>
                                <input type="text" class="px-2 py-2 rounded-md focus:outline-indigo-600 bg-slate-200" placeholder="Search Employee ID / Name" />

                            </div>

                            <div class="flex flex-row justify-end mt-4">

                                <button class="px-5 py-2 text-black duration-500 ease-out bg-green-400 rounded-md hover:bg-red-600 hover:duration-700 hover:ease-in hover:text-white">Add Detail&nbsp;<i class="fa-solid fa-check fa-beat"></i></button>

                            </div>

                        </div>

                    </div>

                    <!-- add employee -->

                </div>

                <div class="flex justify-end p-4 border-t">

                    <button id="closeModalFooter1" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-5 ms-36">Confirm Details</button>

                </div>

            </div>

        </div>

        <!-- Project assign team modal end-->

        <script src="tailwind.js"></script>

    </body>

</html>