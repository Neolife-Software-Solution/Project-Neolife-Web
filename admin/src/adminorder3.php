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

    require "header3.php";

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

    <script src="tailwind.js"></script>

</body>

</html>