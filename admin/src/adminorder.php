<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Order </title>

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

</head>

<body>

    <?php

    require "header1.php";

    ?>

    <div class="h-screen">

        <div>

            <div class="flex place-content-center">

                <span class="mt-5 text-3xl font-bold">Manage Order</span>

            </div>

        </div>

        <!-- search order section -->

        <div>

            <div class="flex flex-row justify-end gap-5 p-8">

                <div>

                    <input class="p-5 py-2 text-lg font-bold text-black rounded-full shadow-md bg-slate-200 focus:outline-none hover:shadow-black w-96" placeholder="Search Order" type="text"></input>

                </div>

                <div>

                    <button class="bg-[#6A2DEB] px-10 py-3 rounded-full text-md hover:bg-[#8B65DB] duration-700 ease-out hover:ease-in hover:duration-800 text-white font-semibold">Search</button>

                </div>

            </div>

        </div>

        <!-- search order section -->

        <!-- Search Order Card Section -->

        <div>

            <div class="flex justify-center">

                <div class=" lg:w-[1000px] border border-black rounded-lg shadow-lg shadow-black w-[500px]">

                    <!-- order card header -->

                    <div>

                        <div class="flex flex-row p-4 text-center bg-black/15 justify-evenly">

                            <div class="w-20">

                                <img class="rounded-lg" src="resources/logo/logo.png" alt="">

                            </div>

                            <div class="mt-4">

                                <div>

                                    <span class="text-lg font-bold">Order Id</span>

                                </div>

                                <div>

                                    <span class="text-lg font-bold text-red-600">56589854#</span>

                                </div>

                            </div>

                            <div class="mt-6">

                                <span class="text-lg font-bold">Business / Brand Name</span>

                            </div>

                            <div class="mt-4">

                                <div>

                                    <span class="text-lg font-bold">Order Status</span>

                                </div>

                                <div>

                                    <span class="text-lg font-bold text-blue-600">New Order</span>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- order card header -->
                    <!-- order card body -->

                    <div>

                        <div>

                            <div>

                                <!-- order Deatils -->

                                <div>

                                    <div class="flex flex-row justify-center gap-8 m-4">

                                        <div class="flex flex-col gap-4 text-lg font-bold">

                                            <span>Business Type</span>
                                            <span>Scale Of Business</span>
                                            <span>Selecter Package Name</span>
                                            <span>Customer Monthly Buget</span>
                                            <span>Client Name</span>
                                            <span>Client Email </span>
                                            <span>Client Mobile Number </span>

                                        </div>

                                        <div class="flex flex-col gap-4 text-lg">

                                            <span>Food And Bevarage</span>
                                            <span>Large Scale</span>
                                            <span>Web Protfolio</span>
                                            <span>Rs.100.000.00</span>
                                            <span>Sahan Perera</span>
                                            <span>Sahan@gmail.com</span>
                                            <span>0714586981</span>

                                        </div>

                                    </div>

                                </div>

                                <!-- order Deatils -->
                                <!-- order Status Button -->

                                <div>

                                    <div class="flex flex-row gap-4 font-bold justify-evenly">

                                        <button class="p-2 m-2 text-xl duration-300 ease-in bg-green-500 rounded-md hover:shadow-black hover:shadow-md">Accept Order</button>
                                        <button class="p-2 m-2 text-xl duration-300 ease-in bg-orange-400 rounded-md hover:shadow-black hover:shadow-md">Ongoing Project</button>
                                        <button class="p-2 m-2 text-xl duration-300 ease-in rounded-md bg-stone-400 hover:shadow-black hover:shadow-md">Finalized Project</button>
                                        <button class="p-2 m-2 text-xl duration-300 ease-in bg-purple-500 rounded-md hover:shadow-black hover:shadow-md">Testing Project</button>
                                        <button class="p-2 m-2 text-xl duration-300 ease-in rounded-md bg-amber-500 hover:shadow-black hover:shadow-md open-modal">Finished Project</button>
                                        <button class="p-2 m-2 text-xl duration-300 ease-in bg-yellow-400 rounded-md hover:shadow-black hover:shadow-md">Cancel Project</button>
                                        <button class="p-2 m-2 text-xl duration-300 ease-in bg-red-600 rounded-md hover:shadow-black hover:shadow-md">Delete Project</button>

                                    </div>

                                </div>

                                <!-- order Status Button -->

                            </div>

                        </div>

                    </div>

                    <!-- order card body -->

                </div>

            </div>

        </div>

        <!-- Search Order Card Section -->

        <!-- Our Orders Section -->

        <div>

            <div class="flex mb-5 place-content-center">

                <span class="py-2 mt-10 text-xl font-bold bg-blue-500 rounded-lg px-80">Our Orders</span>

            </div>

        </div>

        <div>

            <div class="flex flex-col gap-5 p-5">

                <!-- Search Order Card Section -->

                <div>

                    <div class="flex justify-center">

                        <div class=" w-[1000px] border border-black rounded-lg shadow-lg shadow-black">

                            <!-- order card header -->

                            <div>

                                <div class="flex flex-row p-4 text-center bg-black/15 justify-evenly">

                                    <div class="w-20">

                                        <img class="rounded-lg" src="resources/logo/logo.png" alt="">

                                    </div>

                                    <div class="mt-4">

                                        <div>

                                            <span class="text-lg font-bold">Order Id</span>

                                        </div>

                                        <div>

                                            <span class="text-lg font-bold text-red-600">56589854#</span>

                                        </div>

                                    </div>

                                    <div class="mt-6">

                                        <span class="text-lg font-bold">Business / Brand Name</span>

                                    </div>

                                    <div class="mt-4">

                                        <div>

                                            <span class="text-lg font-bold">Order Status</span>

                                        </div>

                                        <div>

                                            <span class="text-lg font-bold text-blue-600">New Order</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- order card header -->
                            <!-- order card body -->

                            <div>

                                <div>

                                    <div>

                                        <!-- order Deatils -->

                                        <div>

                                            <div class="flex flex-row justify-center gap-8 m-4">

                                                <div class="flex flex-col gap-4 text-lg font-bold">

                                                    <span>Business Type</span>
                                                    <span>Scale Of Business</span>
                                                    <span>Selecter Package Name</span>
                                                    <span>Customer Monthly Buget</span>
                                                    <span>Client Name</span>
                                                    <span>Client Email </span>
                                                    <span>Client Mobile Number </span>

                                                </div>

                                                <div class="flex flex-col gap-4 text-lg">

                                                    <span>Food And Bevarage</span>
                                                    <span>Large Scale</span>
                                                    <span>Web Protfolio</span>
                                                    <span>Rs.100.000.00</span>
                                                    <span>Sahan Perera</span>
                                                    <span>Sahan@gmail.com</span>
                                                    <span>0714586981</span>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- order Deatils -->
                                        <!-- order Status Button -->

                                        <div>

                                            <div class="flex flex-row gap-4 font-bold justify-evenly">

                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-green-500 rounded-md hover:shadow-black hover:shadow-md">Accept Order</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-orange-400 rounded-md hover:shadow-black hover:shadow-md">Ongoing Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in rounded-md bg-stone-400 hover:shadow-black hover:shadow-md">Finalized Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-purple-500 rounded-md hover:shadow-black hover:shadow-md">Testing Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in rounded-md bg-amber-500 hover:shadow-black hover:shadow-md open-modal">Finished Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-yellow-400 rounded-md hover:shadow-black hover:shadow-md">Cancel Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-red-600 rounded-md hover:shadow-black hover:shadow-md">Delete Project</button>

                                            </div>

                                        </div>

                                        <!-- order Status Button -->

                                    </div>

                                </div>

                            </div>

                            <!-- order card body -->

                        </div>

                    </div>

                </div>

                <div>

                    <div class="flex justify-center">

                        <div class="w-[1000px] border border-black rounded-lg shadow-lg shadow-black">

                            <!-- order card header -->

                            <div>

                                <div class="flex flex-row p-4 text-center bg-black/15 justify-evenly">

                                    <div class="w-20">

                                        <img class="rounded-lg" src="resources/logo/logo.png" alt="">

                                    </div>

                                    <div class="mt-4">

                                        <div>

                                            <span class="text-lg font-bold">Order Id</span>

                                        </div>

                                        <div>

                                            <span class="text-lg font-bold text-red-600">56589854#</span>

                                        </div>

                                    </div>

                                    <div class="mt-6">

                                        <span class="text-lg font-bold">Business / Brand Name</span>

                                    </div>

                                    <div class="mt-4">

                                        <div>

                                            <span class="text-lg font-bold">Order Status</span>

                                        </div>

                                        <div>

                                            <span class="text-lg font-bold text-green-600">Order Accepted</span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- order card header -->
                            <!-- order card body -->

                            <div>

                                <div>

                                    <div>

                                        <!-- order Deatils -->

                                        <div>

                                            <div class="flex flex-row justify-center gap-8 m-4">

                                                <div class="flex flex-col gap-4 text-lg font-bold">

                                                    <span>Business Type</span>
                                                    <span>Scale Of Business</span>
                                                    <span>Selecter Package Name</span>
                                                    <span>Customer Monthly Buget</span>
                                                    <span>Client Name</span>
                                                    <span>Client Email </span>
                                                    <span>Client Mobile Number </span>

                                                </div>

                                                <div class="flex flex-col gap-4 text-lg">

                                                    <span>Food And Bevarage</span>
                                                    <span>Large Scale</span>
                                                    <span>Web Protfolio</span>
                                                    <span>Rs.100.000.00</span>
                                                    <span>Sahan Perera</span>
                                                    <span>Sahan@gmail.com</span>
                                                    <span>0714586981</span>

                                                </div>

                                            </div>

                                        </div>

                                        <!-- order Deatils -->
                                        <!-- order Status Button -->

                                        <div>

                                            <div class="flex flex-row gap-4 font-bold justify-evenly">

                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-green-500 rounded-md hover:shadow-black hover:shadow-md">Accept Order</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-orange-400 rounded-md hover:shadow-black hover:shadow-md">Ongoing Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in rounded-md bg-stone-400 hover:shadow-black hover:shadow-md">Finalized Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-purple-500 rounded-md hover:shadow-black hover:shadow-md">Testing Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in rounded-md bg-amber-500 hover:shadow-black hover:shadow-md open-modal">Finished Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-yellow-400 rounded-md hover:shadow-black hover:shadow-md">Cancel Project</button>
                                                <button class="p-2 m-2 text-xl duration-300 ease-in bg-red-600 rounded-md hover:shadow-black hover:shadow-md">Delete Project</button>

                                            </div>

                                        </div>

                                        <!-- order Status Button -->

                                    </div>

                                </div>

                            </div>

                            <!-- order card body -->

                        </div>

                    </div>

                </div>

                <!-- Search Order Card Section -->

            </div>

        </div>

        <!-- Our Orders Section -->

    </div>

    <!--Finished Project Modal -->

    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">

        <div class="w-1/3 p-2 bg-white rounded-lg shadow-lg">

            <div class="flex items-center justify-between p-4 border-b">

                <h3 class="text-xl font-semibold">Finished Project</h3>

                <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>

            </div>

            <div class="flex items-center justify-center w-full ">

                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">

                    <div class="flex flex-col items-center justify-center pt-5 pb-6">

                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">

                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />

                        </svg>

                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>

                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>

                    </div>

                    <input id="dropzone-file" type="file" class="hidden" />

                </label>

            </div>

            <label for="message" class="block mt-4 text-sm font-bold ">Project Description</label>

            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

            <div id="modalContent" class="p-4">

                <!-- Dynamic content will go here -->

            </div>

            <div class="flex justify-end p-4 border-t">

                <button id="closeModalFooter" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-5 ms-36">Save Changes</button>

            </div>

        </div>

    </div>

    <!--Finished Project Modal -->

    <script src="tailwind.js"></script>

</body>

</html>