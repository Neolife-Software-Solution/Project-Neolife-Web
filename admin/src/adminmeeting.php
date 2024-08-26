<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Meetings </title>

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

</head>

<body>

    <?php
    
        require "header1.php";

    ?>

    <div class="h-screen">

        <!-- Meeting lable -->
        <div>

            <div class="flex flex-row place-content-center">

                <div class="mt-5">

                    <span class="bg-[#645FCE] py-2 px-10 text-3xl font-semibold text-white rounded-md ">Meetings</span>

                </div>

            </div>

        </div>
        <!-- Meeting lable -->

        <!-- Meeting Deatils -->

        <div class="flex justify-center">

            <div class="lg:w-[930px] p-10 mt-10 bg-white flex flex-col rounded-lg shadow-black shadow-lg">

                <div class="flex flex-col ">

                    <!-- Meeting Input Fields -->
                    <div class="">

                        <div class="justify-center lg:flex">

                            <input class="p-5 py-2 text-lg font-bold rounded-full shadow-md  bg-slate-200 focus:outline-none hover:shadow-black lg:w-[930px] w-80 text-black" placeholder="Meeting Tittle" type="text"></input>

                        </div>

                    </div>

                    <div class="">

                        <div class="justify-center mt-5 lg:flex">

                            <input class="p-5 py-2 text-lg font-bold rounded-full shadow-md  bg-slate-200 focus:outline-none hover:shadow-black lg:w-[930px] w-80 text-black" placeholder="Meeting Held Date" type="text"></input>

                        </div>

                    </div>

                    <div class="">

                        <div class="justify-center mt-5 lg:flex">

                            <input class="p-5 py-2 text-lg font-bold rounded-full shadow-md  bg-slate-200 focus:outline-none hover:shadow-black lg:w-[930px] w-80 text-black" placeholder="Meeting Presenter" type="text"></input>

                        </div>

                    </div>

                    <div class="">

                        <div class="justify-center mt-5 lg:flex">

                            <input class="p-5 py-2 text-lg font-bold rounded-full shadow-md  bg-slate-200 focus:outline-none hover:shadow-black lg:w-[930px] w-80 text-black" placeholder="Add Meeting Link" type="text"></input>

                        </div>

                    </div>
                    <!-- Meeting Input Fields -->

                    <div>

                        <div class="grid mt-10">
                        
                            <div class="grid justify-center grid-cols-2">
                                
                                <div>
        
                                    <button class="bg-[#6A2DEB] px-10 py-2 rounded-full text-md hover:bg-[#8B65DB] duration-700 ease-out hover:ease-in hover:duration-800 text-white font-semibold">Schedule Meeting</button>
        
                                </div>
                                
                                <div class="grid justify-end">
        
                                    <button class="bg-[#6A2DEB] px-10 py-2 rounded-full text-md hover:bg-[#8B65DB] duration-700 ease-out hover:ease-in hover:duration-800 text-white font-semibold">Clear</button>
        
                                </div>
                            
                            </div>
                            
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Meeting Deatils -->

        <!--Scheduled Meeting lable -->
        <div>

            <div class="flex flex-row place-content-center">

                <div class="mt-10">

                    <span class="bg-[#645FCE] py-2 px-10 text-3xl font-semibold text-white rounded-md ">Scheduled Meetings</span>

                </div>

            </div>

        </div>
        <!--Scheduled Meeting lable -->

        <!--Scheduled Meeting Content -->

        <div class="flex justify-center p-5">

            <div class="lg:w-[930px] mt-5 bg-white flex flex-col rounded-lg shadow-black shadow-lg">
                
                <div class="flex justify-center gap-3 p-10">
    
                    <div class="grid grid-cols-1 gap-3 lg:grid-cols-3 md:grid-cols-2">
    
                        <!-- Meeting Section 1 -->
    
                        <div class="w-full max-w-xs p-10 rounded-lg shadow-lg bg-black/40 ">
    
                            <div class="space-y-3 text-center">
    
                                <!-- Date -->
    
                                <div class="flex flex-col">
    
                                    <label class="block mb-2 font-medium text-white">Date</label>
    
                                    <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">2096/05/02</span>
    
                                </div>
    
                                <!-- Date -->    
    
                                <!-- Meeting Type -->
    
                                <div class="flex flex-col">
    
                                    <label class="block mb-2 font-medium text-white">Meeting Type</label>
    
                                    <span class="px-3 py-1 text-gray-800 break-words whitespace-normal bg-white border border-gray-300 rounded-lg">Special Meeting</span>
    
                                </div>
    
                                <!-- Meeting Type -->
    
                                <!-- Joing Meeting Button -->
    
                                <div class="flex flex-col">
    
                                    <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-indigo-600 bg-white rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>
    
                                </div>
    
                                <!-- Joing Meeting Button -->
                                 
                                <!-- Remove Meeting Button -->
    
                                <div class="flex flex-col">
    
                                    <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-red-600 bg-white rounded-lg shadow-md hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">Remove Meeting</button>
    
                                </div>
    
                                <!-- Remove Meeting Button -->
    
                            </div>
    
                        </div>
    
                        <!-- Meeting Section 1 -->
                        
                        <!-- Meeting Section 2 -->
    
                        <div class="w-full max-w-xs p-10 rounded-lg shadow-lg bg-black/40">
    
                            <div class="space-y-3 text-center">
    
                                <!-- Date -->
    
                                <div class="flex flex-col">
    
                                    <label class="block mb-2 font-medium text-white">Date</label>
    
                                    <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">2096/05/02</span>
    
                                </div>
    
                                <!-- Date -->    
    
                                <!-- Meeting Type -->
    
                                <div class="flex flex-col">
    
                                    <label class="block mb-2 font-medium text-white">Meeting Type</label>
    
                                    <span class="px-3 py-1 text-gray-800 break-words whitespace-normal bg-white border border-gray-300 rounded-lg">Special Meeting</span>
    
                                </div>
    
                                <!-- Meeting Type -->   
                                    
                                <!-- Joing Meeting Button -->
    
                                <div class="flex flex-col">
    
                                    <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-indigo-600 bg-white rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>
    
                                </div>
    
                                <!-- Joing Meeting Button -->
                                 
                                <!-- Remove Meeting Button -->
    
                                <div class="flex flex-col">
    
                                    <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-red-600 bg-white rounded-lg shadow-md hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">Remove Meeting</button>
    
                                </div>
    
                                <!-- Remove Meeting Button -->
    
                            </div>
    
                        </div>
    
                        <!-- Meeting Section 2 -->
                         
                        <!-- Meeting Section 3 -->
    
                        <div class="w-full max-w-xs p-10 rounded-lg shadow-lg bg-black/40">
    
                            <div class="space-y-3 text-center">
    
                                <!-- Date -->
    
                                <div class="flex flex-col">
    
                                    <label class="block mb-2 font-medium text-white">Date</label>
    
                                    <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">2096/05/02</span>
    
                                </div>
    
                                <!-- Date -->    
    
                                <!-- Meeting Type -->
    
                                <div class="flex flex-col">
    
                                    <label class="block mb-2 font-medium text-white">Meeting Type</label>
    
                                    <span class="px-3 py-1 text-gray-800 break-words whitespace-normal bg-white border border-gray-300 rounded-lg">Special Meeting</span>
    
                                </div>
    
                                <!-- Meeting Type -->   
                                    
                                <!-- Joing Meeting Button -->
    
                                <div class="flex flex-col">
    
                                    <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-indigo-600 bg-white rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>
    
                                </div>
    
                                <!-- Joing Meeting Button -->
                                 
                                <!-- Remove Meeting Button -->
    
                                <div class="flex flex-col">
    
                                    <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-red-600 bg-white rounded-lg shadow-md hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-75">Remove Meeting</button>
    
                                </div>
    
                                <!-- Remove Meeting Button -->
    
                            </div>
    
                        </div>
    
                        <!-- Meeting Section 3 -->
                         
                    </div>
    
                </div>
            
            </div>


        </div>

        <!--Scheduled Meeting Content -->

    </div>

</body>

</html>