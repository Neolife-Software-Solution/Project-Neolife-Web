<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | Access Level 01</title>

    <link rel="stylesheet" href="admin_style.css" />

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />


</head>

<body>

    <div class="h-screen w-full">

        <div>

            <?php

            require "header3.php";

            ?>

        </div>

        <div class="flex flex-row justify-center">

            <div class="grid grid-cols-1 lg:grid-cols-2 p-10 *:border-2 *:shadow-2xl 
                *:w-[200px] *:lg:w-[220px] *:h-[200px] *:lg:h-[190px] *:place-self-center 
                *:text-center *:content-center *:space-y-4 *:font-medium *:text-wrap 
                hover:*:border-2 hover:*:border-black gap-2">

                <div class="rounded-3xl bg-[#645FCE]">

                    <p class="text-2xl">Total Orders</p>
                    <p class="text-4xl">02</p>

                </div>


                <div class="rounded-3xl bg-[#645FCE]">

                    <p class="text-2xl">Categories</p>
                    <p class="text-4xl">02</p>

                </div>


            </div>

        </div>


        <hr class="border-2 border-slate-600" />

        <div class="flex place-content-center p-14">

            <punchbtn class="bg-slate-300">PUNCH IN</punchbtn>

        </div>

        <hr class="border-2 border-slate-600" />

        <div class="flex place-content-center p-5">

            <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl ">

                <span class="font-bold text-sm lg:text-3xl">User Performance</span>

            </div>

        </div>

        <div class="flex flex-col lg:mx-32 my-5 bg-slate-100 rounded-2xl shadow-2xl shadow-black/50">

            <div class="flex flex-row place-self-center">

                <img class="lg:w-96 w-[200px]" src="resources/dashboard_img/performance.png" alt="Performance Chart" />

            </div>

            <div class="grid lg:grid-cols-3 grid-cols-1 place-items-center p-10 gap-2">

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Completed</div>

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Percentage</div>

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Pending</div>

            </div>

        </div>

        <!-- Meeting title -->

        <div class="flex flex-row justify-center p-5 ">

            <div>

                <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl  ">

                    <span class="font-bold text-sm lg:text-3xl">Meeting</span>

                </div>

            </div>

        </div>

        <!-- Meeting title -->

        <!-- Meeting Content -->

        <div class="flex flex-col mb-6 lg:mx-32 mt-5 bg-slate-100 rounded-2xl shadow-2xl shadow-black/50">

            <div class="flex justify-evenly p-10 gap-3">

                <div class="grid grid-cols-1 gap-3 lg:grid-cols-3 md:grid-cols-2">

                    <!-- Meeting Section 1 -->

                    <div class="bg-indigo-600 p-10 rounded-lg shadow-lg w-full max-w-xs">

                        <div class="space-y-3 text-center">

                            <!-- Date -->

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Date</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">2096/05/02</span>

                            </div>

                            <!-- Date -->

                            <!-- Time -->

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Time</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">12.15.20</span>

                            </div>

                            <!-- Time -->

                            <!-- Meeting Type -->

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting Type</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg break-words whitespace-normal">Special Meeting</span>

                            </div>

                            <!-- Meeting Type -->

                            <!-- Meeting Duration -->

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting Duration</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">3 Houses</span>

                            </div>

                            <!-- Meeting Duration -->

                            <!-- Meeting By -->

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting By</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">Jude Thamel</span>

                            </div>

                            <!-- Meeting By -->

                            <!-- Position -->

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Position</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">Director</span>

                            </div>

                            <!-- Position -->

                            <!-- Joing Meeting Button -->

                            <div class="flex flex-col">

                                <button type="submit" class="w-full mt-3 py-2 px-4 bg-white text-indigo-600 font-semibold rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>

                            </div>

                            <!-- Joing Meeting Button -->

                        </div>

                    </div>

                    <!-- Meeting Section 1 -->

                    <div class="bg-indigo-600 p-10 rounded-lg shadow-lg w-full max-w-xs">

                        <div class="space-y-3 text-center">

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Date</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">2096/05/02</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Time</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">12.15.20</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting Type</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg break-words whitespace-normal">Special Meeting</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting Duration</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">3 Houses</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting By</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">Jude Thamel</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Position</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">Director</span>

                            </div>

                            <div class="flex flex-col">

                                <button type="submit" class="w-full mt-3 py-2 px-4 bg-white text-indigo-600 font-semibold rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>

                            </div>

                        </div>

                    </div>

                    <div class="bg-indigo-600 p-10 rounded-lg shadow-lg w-full max-w-xs">

                        <div class="space-y-3 text-center">

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Date</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">2096/05/02</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Time</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">12.15.20</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting Type</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg break-words whitespace-normal">Special Meeting</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting Duration</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">3 Houses</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Meeting By</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">Jude Thamel</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block text-white font-medium mb-2">Position</label>

                                <span class="text-gray-800 bg-white px-3 py-1 border border-gray-300 rounded-lg">Director</span>

                            </div>

                            <div class="flex flex-col">

                                <button type="submit" class="w-full mt-3 py-2 px-4 bg-white text-indigo-600 font-semibold rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Meeting Content -->

        <!-- footer -->

        <footer class="w-full  left-0 right-0 md:mt-6 ">

            <!-- content -->

            <!-- footer_copyrightsection -->

            <div class="flex flex-row justify-center p-4 bg-white">

                <div class="flex flex-col items-center gap-2 md:gap-32 md:flex-row lg:flex-row lg:gap-60">

                    <!-- logo -->

                    <div>

                        <img class="h-14 md:h-20" src="resources/logo/logo_transparent vertical.png" alt="">

                    </div>

                    <!-- logo -->

                    <div class="flex flex-col px-8 sm:px-0">

                        <span class=" text-sm md:text-sm font-bold lg:text-lg ">&copy;&nbsp;2024 - 2024 NeoLife Software Solutions&trade;</span>

                        <span class=" text-xs md:text-sm font-bold text-center hidden sm:block">All Rights Reserved By NeoLife Software Solutions</span>

                        <span class=" text-xs md:text-sm font-bold text-center hidden sm:block">Designed & Developed By NeoLife Software Solutions</span>

                    </div>

                </div>

            </div>

            <!-- footer_copyrightsection -->

        </footer>

        <!-- footer -->

    </div>

</body>

</html>