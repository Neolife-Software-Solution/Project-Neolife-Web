<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Department</title>

    <link rel="stylesheet" href="header.css">

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

</head>

<body class="bg-gray-100">

    <!-- Manage Dearpement section Start-->

    <div class="text-center">

        <h1 class="mt-5 text-3xl font-bold text-gray-700">Manage Department</h1>

        <!-- Add Dearpement lable -->

        <div class="mt-10">

            <span class="px-20 py-2 text-lg font-bold text-white bg-orange-500 rounded-lg">Add New Department</span>

        </div>

        <!-- Add Dearpement lable -->

        <!-- Add Dearpement input filed -->

        <div class="mt-6">

            <div class="inline-block ">

                <input class="px-6 py-2 bg-gray-300 rounded-lg" type="text" placeholder="HR Department"> </input>

            </div>

            <button class="px-6 py-2 mt-5 ml-2 text-white bg-blue-500 rounded">Add Department</button>

        </div>

        <!-- Add Dearpement input filed -->


    </div>

    <!-- Manage Dearpement section End-->

    <!-- our Dearpement section Start-->

    <div>

        <div class="flex justify-center mt-6 mb-5">

            <!-- our Dearpement section name-->

            <div class="px-6 py-2 font-bold text-white bg-blue-500 rounded-lg lg:px-60">Our Departments</div>

            <!-- our Dearpement section name-->

        </div>

        <!-- our Dearpement section Content -->

        <div class="max-w-5xl p-6 mx-auto bg-purple-300 rounded-lg shadow-md">

            <h2 class="mb-5 text-2xl font-bold text-center ">HR Department</h2>

            <!-- add employee section -->
            <div>

                <div class="hidden lg:block md:block">

                    <div class="flex flex-row justify-between ">

                        <!-- add employee input fields -->

                        <div>

                            <input class="py-2 font-bold text-center bg-gray-200 rounded-lg" placeholder="Add New Employee" type="text"></input>

                        </div>

                        <div>

                            <input class="py-2 font-bold text-center bg-gray-200 rounded-lg" placeholder="Add Job Roles" type="text"></input>

                        </div>

                        <!-- add employee input fields -->


                    </div>

                </div>

                <div class="flex justify-end mt-2">

                    <!-- add employee button -->

                    <button class="px-6 py-2 text-white bg-blue-500 rounded-lg">Add Employee</button>

                    <!-- add employee button -->

                </div>

            </div>

            <!-- add employee section -->

            <!-- Employee Table -->

            <div class="relative mt-4 overflow-x-auto rounded-lg shadow-md">

                <!-- table Content -->

                <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">

                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                        <tr class="text-center">

                            <th scope="col" class="px-6 py-3">Full Name</th>

                            <th scope="col" class="px-6 py-3">Employee Id</th>

                            <th scope="col" class="px-6 py-3">Join Date</th>

                            <th scope="col" class="px-6 py-3">Position</th>

                            <th scope="col" class="px-6 py-3">Availability</th>

                            <th scope="col" class="px-6 py-3">Status</th>

                            <th scope="col" class="px-6 py-3">Block/UnBlock</th>

                            <th scope="col" class="px-6 py-3">Remove Employee</th>

                        </tr>

                    </thead>

                    <!-- table data -->

                    <tbody class="mb-3 text-center">

                        <tr class="bg-white border-b dark:border-gray-700 text-gray-950">

                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">Kavindu Vishmitha</th>

                            <td class="px-6 py-4">1000</td>

                            <td class="px-6 py-4">2024.01.01</td>

                            <td class="px-6 py-4">Member</td>

                            <td class="px-6 py-4">Unavailable</td>

                            <td class="px-6 py-4">Online</td>

                            <td class="px-6 py-4">

                                <button class="px-4 py-1 font-medium text-black bg-orange-500 rounded-lg ">Block</button>

                            </td>

                            <td class="px-6 py-4">

                                <button class="px-3 py-1 font-medium text-white bg-red-700 rounded-lg">Remove</button>

                            </td>

                        </tr>

                        <tr class="bg-white border-b dark:border-gray-700 text-gray-950">

                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">Kavindu Vishmitha</th>

                            <td class="px-6 py-4">1000</td>

                            <td class="px-6 py-4">2024.01.01</td>

                            <td class="px-6 py-4">Member</td>

                            <td class="px-6 py-4">Unavailable</td>

                            <td class="px-6 py-4">Online</td>

                            <td class="px-6 py-4">

                                <button class="px-4 py-1 font-medium text-black bg-orange-500 rounded-lg ">Block</button>

                            </td>

                            <td class="px-6 py-4">

                                <button class="px-3 py-1 font-medium text-white bg-red-700 rounded-lg">Remove</button>

                            </td>

                        </tr>

                        <tr class="bg-white border-b dark:border-gray-700 text-gray-950">

                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">Kavindu Vishmitha</th>

                            <td class="px-6 py-4">1000</td>

                            <td class="px-6 py-4">2024.01.01</td>

                            <td class="px-6 py-4">Member</td>

                            <td class="px-6 py-4">Unavailable</td>

                            <td class="px-6 py-4">Online</td>

                            <td class="px-6 py-4">

                                <button class="px-4 py-1 font-medium text-black bg-orange-500 rounded-lg ">Block</button>

                            </td>

                            <td class="px-6 py-4">

                                <button class="px-3 py-1 font-medium text-white bg-red-700 rounded-lg">Remove</button>

                            </td>

                        </tr>

                        <tr class="bg-white border-b dark:border-gray-700 text-gray-950">

                            <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">Kavindu Vishmitha</th>

                            <td class="px-6 py-4">1000</td>

                            <td class="px-6 py-4">2024.01.01</td>

                            <td class="px-6 py-4">Member</td>

                            <td class="px-6 py-4">Unavailable</td>

                            <td class="px-6 py-4">Online</td>

                            <td class="px-6 py-4">

                                <button class="px-4 py-1 font-medium text-black bg-orange-500 rounded-lg ">Block</button>

                            </td>

                            <td class="px-6 py-4">

                                <button class="px-3 py-1 font-medium text-white bg-red-700 rounded-lg">Remove</button>

                            </td>

                        </tr>

                    </tbody>

                    <!-- table data -->

                </table>

                <!-- table Content -->

            </div>

            <!-- Employee Table -->

        </div>

        <!-- our Dearpement section Content -->

    </div>

    <!-- our Dearpement section End-->

</body>

</html>