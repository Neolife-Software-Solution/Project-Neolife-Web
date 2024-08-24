<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Department</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

</head>

<body class="bg-gray-100">

    <div class="text-center py-10">

        <h1 class="text-3xl font-bold text-gray-700">Manage Department</h1>

        <div class="mt-10">

            <span class="bg-orange-500 text-white px-20 py-2 rounded-lg">Add New Department</span>

        </div>
        <div class="mt-10">

            <div class="bg-gray-300 inline-block">

                <input class="px-6 py-2 rounded-lg" type="text" placeholder="HR Department"> </input>
            </div>

            <button class="bg-blue-500 text-white px-6 py-2 rounded ml-2">Add Department</button>

        </div>

        <div class="mt-6">

            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg">Our Departments</button>

        </div>

    </div>

    <div class="bg-purple-300 shadow-md rounded-lg max-w-5xl mx-auto p-6">

        <h2 class="text-center text-2xl font-bold text-gray-700">HR Department</h2>

        <div class="flex flex-row">

            <button class= "mr-36 font-bold bg-gray-200 px-14 py-2 rounded-lg ">Add New Employee</button>
        
            <button class="ml-[350px] font-bold bg-gray-200 px-14 py-2 rounded-lg">Add Job Roles</button>

        </div>

        <div class="flex justify-end mt-2">

            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg">Add Employee</button>

        </div>

        <!-- Employee Table -->

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                    <tr>

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

                <tbody class="mb-3">

                    <tr class="bg-white border-b dark:border-gray-700 text-gray-950">

                        <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap ">Kavindu Vishmitha</th>

                        <td class="px-6 py-4">1000</td>

                        <td class="px-6 py-4">2024.01.01</td>

                        <td class="px-6 py-4">Member</td>

                        <td class="px-6 py-4">Unavailable</td>

                        <td class="px-6 py-4">Online</td>

                        <td class="px-6 py-4">

                        <button class=" font-medium bg-orange-500 text-black px-4 py-1 rounded-lg">Block</button>

                        </td>

                        <td class="px-6 py-4">

                            <button class="font-medium bg-red-700 text-white px-3 py-1 rounded-lg">Remove</button>

                        </td>

                    </tr>


                </tbody>

            </table>

        </div>


    </div>

</body>

</html>