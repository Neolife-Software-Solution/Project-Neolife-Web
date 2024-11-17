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

    <div class="w-full h-screen">

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

        <div class="flex p-5 place-content-center">

            <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl ">

                <span class="text-sm font-bold lg:text-3xl">User Performance</span>

            </div>

        </div>

        <div class="flex flex-col my-5 shadow-2xl lg:mx-32 bg-slate-100 rounded-2xl shadow-black/50">

            <div class="flex flex-row place-self-center">

                <img class="lg:w-96 w-[200px]" src="resources/dashboard_img/performance.png" alt="Performance Chart" />

            </div>

            <div class="grid grid-cols-1 gap-2 p-10 lg:grid-cols-3 place-items-center">

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Completed</div>

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Percentage</div>

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Pending</div>

            </div>

        </div>

        <div class="flex flex-row justify-center p-5 ">

            <div class="hidden lg:block">

                <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl  ">

                    <span class="text-3xl font-bold text-center">Order Details</span>

                </div>

            </div>

        </div>

        <div class="hidden p-5 px-24 lg:block">

            <div class="flex flex-col p-5 shadow-2xl bg-slate-100 rounded-2xl shadow-black/50">

                <table class="text-center table-auto">

                    <thead>

                        <tr>

                            <th>Order Id</th>
                            <th>Order Date</th>
                            <th>Order Customer</th>
                            <th>Payment</th>
                            <th>Order Status</th>
                            <th>Total</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>01</td>
                            <td>8/13/2024</td>
                            <td>Sahan Perera</td>
                            <td>10000.00</td>
                            <td>Ongoing</td>
                            <td>2</td>

                        </tr>

                        <tr>

                            <td>02</td>
                            <td>8/13/2024</td>
                            <td>Sahan Perera</td>
                            <td>10000.00</td>
                            <td>Ongoing</td>
                            <td>2</td>

                        </tr>

                        <tr>

                            <td>02</td>
                            <td>8/13/2024</td>
                            <td>Sahan Perera</td>
                            <td>10000.00</td>
                            <td>Ongoing</td>
                            <td>2</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <!-- Meeting title -->

        <div class="flex flex-row justify-center p-5 ">

            <div class="hidden lg:block">

                <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl  ">

                    <span class="text-3xl font-bold text-center">Meeting</span>

                </div>

            </div>

        </div>

        <!-- Meeting title -->

        <!-- Meeting Content -->

        <div class="flex flex-col my-5 mb-3 shadow-2xl lg:mx-32 bg-slate-100 rounded-2xl shadow-black/50">

            <div class="flex gap-3 p-10 justify-evenly">

                <div class="grid grid-cols-1 gap-3 lg:grid-cols-3 md:grid-cols-2">

                    <!-- Meeting Section 1 -->

                    <div class="w-full max-w-xs p-10 bg-indigo-600 rounded-lg shadow-lg">

                        <div class="space-y-3 text-center">

                            <!-- Date -->

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Date</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">2096/05/02</span>

                            </div>

                            <!-- Date -->

                            <!-- Time -->

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Time</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">12.15.20</span>

                            </div>

                            <!-- Time -->

                            <!-- Meeting Type -->

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Meeting Type</label>

                                <span class="px-3 py-1 text-gray-800 break-words whitespace-normal bg-white border border-gray-300 rounded-lg">Special Meeting</span>

                            </div>

                            <!-- Meeting Type -->

                            <!-- Meeting By -->

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Meeting By</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">Jude Thamel</span>

                            </div>

                            <!-- Meeting By -->

                            <!-- Joing Meeting Button -->

                            <div class="flex flex-col">

                                <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-indigo-600 bg-white rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>

                            </div>

                            <!-- Joing Meeting Button -->

                        </div>

                    </div>

                    <!-- Meeting Section 1 -->

                    <div class="w-full max-w-xs p-10 bg-indigo-600 rounded-lg shadow-lg">

                        <div class="space-y-3 text-center">

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Date</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">2096/05/02</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Time</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">12.15.20</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Meeting Type</label>

                                <span class="px-3 py-1 text-gray-800 break-words whitespace-normal bg-white border border-gray-300 rounded-lg">Special Meeting</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Meeting By</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">Jude Thamel</span>

                            </div>

                            <div class="flex flex-col">

                                <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-indigo-600 bg-white rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>

                            </div>

                        </div>

                    </div>

                    <div class="w-full max-w-xs p-10 bg-indigo-600 rounded-lg shadow-lg">

                        <div class="space-y-3 text-center">

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Date</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">2096/05/02</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Time</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">12.15.20</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Meeting Type</label>

                                <span class="px-3 py-1 text-gray-800 break-words whitespace-normal bg-white border border-gray-300 rounded-lg">Special Meeting</span>

                            </div>

                            <div class="flex flex-col">

                                <label class="block mb-2 font-medium text-white">Meeting By</label>

                                <span class="px-3 py-1 text-gray-800 bg-white border border-gray-300 rounded-lg">Jude Thamel</span>

                            </div>
                            
                            <div class="flex flex-col">

                                <button type="submit" class="w-full px-4 py-2 mt-3 font-semibold text-indigo-600 bg-white rounded-lg shadow-md hover:bg-indigo-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Join Meeting</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Meeting Content -->

    </div>

</body>

</html>