<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Attendance Report | Employees</title>

    <link rel="stylesheet" href="admin_style.css" />

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="w-full h-screen">

        <!-- Access level 01 header -->

        <div><?php require "header1.php" ?></div>

        <!-- Access level 01 header -->

        <!-- Content -->

        <!-- title -->

        <div class="text-center p-5">
            <span class=" text-2xl md:text-5xl lg:text-6xl font-bold text-zinc-500 ">Employees Attendance</span>
        </div>

        <!-- title -->

        <!-- Search Section -->

        <div class="p-5 sm:p-14">

            <div class="flex items-center md:max-w-xl lg:max-w-4xl mx-auto">

            <!-- Search Bar -->

                <div class="sm:w-full">

                    <input type="text" class="bg-gray-50 border-2  border-gray-300 text-gray-900 text-sm rounded-lg shadow-2xl hover:border-black focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Employee Name or Email Address" />

                </div>

            <!-- Search Bar -->

            <!-- Search Button -->

                <button type="submit" class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium shadow-2xl text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 space-x-2">

                    <span><i class="fa-solid fa-magnifying-glass fa-fade"></i></span>

                    <span>Search</span>

                </button>

            <!-- Search Button -->
            
            </div>

        </div>

        <!-- Search Section -->

        <!-- Table Section -->

        <div class="max-w-3.5 md:max-w-2xl mb-10 md:mb-10 lg:mb-3 lg:max-w-7xl mx-auto mt-8 bg-gray-300 p-4 px-20 md:p-8 lg:p-14 rounded-lg shadow-xl border-2 border-gray-900 overflow-x-auto">

            <table class=" max-w-1.5 md:min-w-full lg:min-w-full bg-gray-300">

                <thead>

                    <tr>
                        <th class="py-2 px-2 md:px-4 border-b text-left text-sm md:text-base">Employee ID</th>
                        <th class="py-2 px-2 md:px-4 border-b text-left text-sm md:text-base">Employee Name</th>
                        <th class="py-2 px-2 md:px-4 border-b text-left text-sm md:text-base">Date</th>
                        <th class="py-2 px-2 md:px-4 border-b text-left text-sm md:text-base">Punch In</th>
                        <th class="py-2 px-2 md:px-4 border-b text-left text-sm md:text-base">Punch Out</th>
                        <th class="py-2 px-2 md:px-4 border-b text-left text-sm md:text-base">Working Hours</th>
                        <th class="py-2 px-2 md:px-4 border-b text-left text-sm md:text-base">Over Time(+) / Less Time(-)</th>
                    </tr>

                </thead>

                <tbody>

                    <tr class="hover:bg-white">
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">0147</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">Wanda</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">01/08/2025</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">8.10 AM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">4.30 PM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">8H 20Min</td>
                        <td class="py-2 px-2 md:px-4 border-b text-green-500 text-sm md:text-base">+ 2H 20 Min</td>
                    </tr>

                    <tr class="hover:bg-white">
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">0222</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">Jumla</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">01/08/2025</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">9.30 AM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">1.20 PM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">5H</td>
                        <td class="py-2 px-2 md:px-4 border-b text-red-500 text-sm md:text-base">- 1H 10 Min</td>
                    </tr>

                    <tr class="hover:bg-white">
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">0147</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">Wanda</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">01/08/2025</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">8.10 AM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">4.30 PM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">8H 20Min</td>
                        <td class="py-2 px-2 md:px-4 border-b text-green-500 text-sm md:text-base">+ 2H 20 Min</td>
                    </tr>

                    <tr class="hover:bg-white">
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">0222</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">Jumla</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">01/08/2025</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">9.30 AM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">1.20 PM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">5H</td>
                        <td class="py-2 px-2 md:px-4 border-b text-red-500 text-sm md:text-base">- 1H 10 Min</td>
                    </tr>

                    <tr class="hover:bg-white">
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">0147</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">Wanda</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">01/08/2025</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">8.10 AM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">4.30 PM</td>
                        <td class="py-2 px-2 md:px-4 border-b text-sm md:text-base">8H 20Min</td>
                        <td class="py-2 px-2 md:px-4 border-b text-green-500 text-sm md:text-base">+ 2H 20 Min</td>
                    </tr>

                </tbody>

            </table>

        </div>

        <!-- Table Section -->

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

        <!-- Content -->

    </div>

</body>

</html>