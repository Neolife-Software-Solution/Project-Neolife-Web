<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employees | Neolife Software Solutions</title>

    <link rel="stylesheet" href="admin_style.css" />

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="h-screen w-full">

        <div> <?php require "header1.php"  ?></div>

        <!-- Employees -->

        <div class="flex place-content-center p-5">

            <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl ">

                <span class="font-bold text-sm lg:text-3xl">Employees</span>

            </div>

        </div>

        <!-- Employees -->

        <!-- Search & Sort -->

        <!-- Search -->

        <div class="p-5 mt-5">

            <div class="flex items-center md:max-w-xl lg:max-w-4xl mx-auto flex-col sm:flex-row">

                <!-- Search Bar -->

                <div class="sm:w-full">

                    <input type="text" class="bg-gray-50 border-2  border-gray-300 text-gray-900 text-sm rounded-lg shadow-2xl 
                    hover:border-black focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  
                    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Employee Name or Email Address" />

                </div>

                <!-- Search Bar -->

                <!-- Search Button -->

                <button type="submit" class="inline-flex items-center py-2.5 px-3 mt-2 sm:mt-0 ms-2 text-sm font-medium shadow-2xl 
                text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 
                focus:ring-4 focus:outline-none focus:ring-blue-300 
                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 space-x-2">

                    <span><i class="fa-solid fa-magnifying-glass fa-fade"></i></span>

                    <span>Search</span>

                </button>

                <!-- Search Button -->

            </div>

        </div>

        <!-- Search -->

        <!-- Sort -->

        <div class="p-5">

            <div class="flex items-center md:max-w-xl lg:max-w-4xl mx-auto flex-col place-items-center sm:flex-row">

                <!-- Search Bar -->

                <div class="flex flex-col sm:flex-row place-items-center w-full gap-5">

                    <input type="date" class="w-1/2 bg-gray-50 border-2  border-gray-300 text-gray-900 rounded-lg shadow-2xl 
                    hover:border-black focus:ring-blue-500 focus:border-blue-500 block  ps-10 p-2.5 text-center
                    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                    <div class="flex place-items-center text-center">
                        <span>to</span>
                    </div>

                    <input type="date" class="w-1/2 bg-gray-50 border-2  border-gray-300 text-gray-900 rounded-lg shadow-2xl 
                    hover:border-black focus:ring-blue-500 focus:border-blue-500 block ps-10 p-2.5 text-center
                    dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />

                </div>

                <!-- Search Bar -->

                <!-- Search Button -->

                <button type="submit" class="inline-flex items-center py-2.5 px-3 mt-2 sm:mt-0 ms-2 text-sm font-medium shadow-2xl 
                text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 
                focus:ring-4 focus:outline-none focus:ring-blue-300 
                dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 space-x-2">

                    <img width="20px" src="resources/employee_res/sort.svg" />

                    <span class="px-4">Sort</span>

                </button>

                <!-- Search Button -->

            </div>

        </div>

        <!-- Sort -->

        <!-- Search & Sort -->


        <!-- employee_list_design -->

        <div class="flex flex-col mb-3 lg:mx-32 my-5 bg-slate-100 rounded-2xl">

            <div class="flex justify-evenly p-10 gap-3">

                <div class="grid grid-cols-1 gap-10 lg:grid-cols-4 md:grid-cols-3">


                    <!-- employee_card -->

                    <div class="flex flex-col bg-[#645FCE]/10 p-6 rounded-xl  w-64 shadow-2xl">

                        <!-- Profile Icon -->

                        <div class="flex items-center justify-center w-full">

                            <div class="w-16 h-16 rounded-full flex items-center justify-center">
                                <img src="resources/profile_img/default.png" alt="Profile">
                            </div>

                        </div>

                        <!-- Profile Icon -->

                        <!-- Card Content -->

                        <div class="bg-white rounded-2xl p-4 mt-8 text-center shadow-2xl">

                            <p class="text-sm font-bold">459878945565454</p>
                            <p class="text-lg font-semibold mt-2">Jonathan Perera</p>
                            <p class="text-gray-500 mt-2">HR Department</p>

                            <!-- View Button -->
                            <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE] employee-view-modal">
                                View
                            </button>
                            <!-- View Button -->

                        </div>

                        <!-- Card Content -->

                    </div>

                    <!-- employee_card -->



                    <!-- delete this part for backend -->

                    <div class="flex flex-col bg-[#645FCE]/10 p-6 rounded-xl  w-64 shadow-2xl">

                        <!-- Profile Icon -->

                        <div class="flex items-center justify-center w-full">

                            <div class="w-16 h-16 rounded-full flex items-center justify-center">
                                <img src="resources/profile_img/default.png" alt="Profile">
                            </div>

                        </div>

                        <!-- Profile Icon -->

                        <!-- Card Content -->

                        <div class="bg-white rounded-2xl p-4 mt-8 text-center shadow-2xl">

                            <p class="text-sm font-bold">459878945565454</p>
                            <p class="text-lg font-semibold mt-2">Jonathan Perera</p>
                            <p class="text-gray-500 mt-2">HR Department</p>

                            <!-- View Button -->
                            <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE]">
                                View
                            </button>
                            <!-- View Button -->

                        </div>

                        <!-- Card Content -->

                    </div>
                    <div class="flex flex-col bg-[#645FCE]/10 p-6 rounded-xl  w-64 shadow-2xl">

                        <!-- Profile Icon -->

                        <div class="flex items-center justify-center w-full">

                            <div class="w-16 h-16 rounded-full flex items-center justify-center">
                                <img src="resources/profile_img/default.png" alt="Profile">
                            </div>

                        </div>

                        <!-- Profile Icon -->

                        <!-- Card Content -->

                        <div class="bg-white rounded-2xl p-4 mt-8 text-center shadow-2xl">

                            <p class="text-sm font-bold">459878945565454</p>
                            <p class="text-lg font-semibold mt-2">Jonathan Perera</p>
                            <p class="text-gray-500 mt-2">HR Department</p>

                            <!-- View Button -->
                            <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE]">
                                View
                            </button>
                            <!-- View Button -->

                        </div>

                        <!-- Card Content -->

                    </div>
                    <div class="flex flex-col bg-[#645FCE]/10 p-6 rounded-xl  w-64 shadow-2xl">

                        <!-- Profile Icon -->

                        <div class="flex items-center justify-center w-full">

                            <div class="w-16 h-16 rounded-full flex items-center justify-center">
                                <img src="resources/profile_img/default.png" alt="Profile">
                            </div>

                        </div>

                        <!-- Profile Icon -->

                        <!-- Card Content -->

                        <div class="bg-white rounded-2xl p-4 mt-8 text-center shadow-2xl">

                            <p class="text-sm font-bold">459878945565454</p>
                            <p class="text-lg font-semibold mt-2">Jonathan Perera</p>
                            <p class="text-gray-500 mt-2">HR Department</p>

                            <!-- View Button -->
                            <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE]">
                                View
                            </button>
                            <!-- View Button -->

                        </div>

                        <!-- Card Content -->

                    </div>
                    <div class="flex flex-col bg-[#645FCE]/10 p-6 rounded-xl  w-64 shadow-2xl">

                        <!-- Profile Icon -->

                        <div class="flex items-center justify-center w-full">

                            <div class="w-16 h-16 rounded-full flex items-center justify-center">
                                <img src="resources/profile_img/default.png" alt="Profile">
                            </div>

                        </div>

                        <!-- Profile Icon -->

                        <!-- Card Content -->

                        <div class="bg-white rounded-2xl p-4 mt-8 text-center shadow-2xl">

                            <p class="text-sm font-bold">459878945565454</p>
                            <p class="text-lg font-semibold mt-2">Jonathan Perera</p>
                            <p class="text-gray-500 mt-2">HR Department</p>

                            <!-- View Button -->
                            <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE]">
                                View
                            </button>
                            <!-- View Button -->

                        </div>

                        <!-- Card Content -->

                    </div>
                    <div class="flex flex-col bg-[#645FCE]/10 p-6 rounded-xl  w-64 shadow-2xl">

                        <!-- Profile Icon -->

                        <div class="flex items-center justify-center w-full">

                            <div class="w-16 h-16 rounded-full flex items-center justify-center">
                                <img src="resources/profile_img/default.png" alt="Profile">
                            </div>

                        </div>

                        <!-- Profile Icon -->

                        <!-- Card Content -->

                        <div class="bg-white rounded-2xl p-4 mt-8 text-center shadow-2xl">

                            <p class="text-sm font-bold">459878945565454</p>
                            <p class="text-lg font-semibold mt-2">Jonathan Perera</p>
                            <p class="text-gray-500 mt-2">HR Department</p>

                            <!-- View Button -->
                            <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE]">
                                View
                            </button>
                            <!-- View Button -->

                        </div>

                        <!-- Card Content -->

                    </div>
                    <div class="flex flex-col bg-[#645FCE]/10 p-6 rounded-xl  w-64 shadow-2xl">

                        <!-- Profile Icon -->

                        <div class="flex items-center justify-center w-full">

                            <div class="w-16 h-16 rounded-full flex items-center justify-center">
                                <img src="resources/profile_img/default.png" alt="Profile">
                            </div>

                        </div>

                        <!-- Profile Icon -->

                        <!-- Card Content -->

                        <div class="bg-white rounded-2xl p-4 mt-8 text-center shadow-2xl">

                            <p class="text-sm font-bold">459878945565454</p>
                            <p class="text-lg font-semibold mt-2">Jonathan Perera</p>
                            <p class="text-gray-500 mt-2">HR Department</p>

                            <!-- View Button -->
                            <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE]">
                                View
                            </button>
                            <!-- View Button -->

                        </div>

                        <!-- Card Content -->

                    </div>
                    <div class="flex flex-col bg-[#645FCE]/10 p-6 rounded-xl  w-64 shadow-2xl">

                        <!-- Profile Icon -->

                        <div class="flex items-center justify-center w-full">

                            <div class="w-16 h-16 rounded-full flex items-center justify-center">
                                <img src="resources/profile_img/default.png" alt="Profile">
                            </div>

                        </div>

                        <!-- Profile Icon -->

                        <!-- Card Content -->

                        <div class="bg-white rounded-2xl p-4 mt-8 text-center shadow-2xl">

                            <p class="text-sm font-bold">459878945565454</p>
                            <p class="text-lg font-semibold mt-2">Jonathan Perera</p>
                            <p class="text-gray-500 mt-2">HR Department</p>

                            <!-- View Button -->
                            <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE]">
                                View
                            </button>
                            <!-- View Button -->

                        </div>

                        <!-- Card Content -->

                    </div>

                    <!-- delete this part for backend -->

                </div>
            </div>
        </div>

        <!-- employee_list_design -->


        <!-- employee details model -->

        <div id="modal3" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50 mt-6">

            <div class="w-10/12 bg-white rounded-lg shadow-lg">

                <div class="flex items-center justify-between p-4 border-b">

                    <div class="flex place-content-center w-full p-5">

                        <div class="w-[400px] lg:w-[520px] p-4 rounded-[30px] bg-[#4CBBBF] flex place-content-center shadow-2xl ">

                            <span class="font-bold lg:text-3xl">Employee Details</span>

                        </div>

                    </div>

                    <button id="closeModal3" class="text-gray-500 hover:text-gray-700">&times;</button>

                </div>

                <div class="p-4">

                    <div class="grid grid-cols-4">

                        <!-- employee profile & id -->

                        <div class="w-full flex justify-center">

                            <div class="xl:top-24 xl:left-32">

                                <div class="grid gap-3 text-center">

                                    <div class="flex place-content-center w-full">

                                        <img src="resources\profile_img\default.png" alt="Profile Icon" class="rounded-full border-2 border-white w-40">
                                    
                                    </div>

                                    <span class="w-48 text-xl px-3 py-1 ">Employee ID</span>

                                </div>

                            </div>

                        </div>

                        <!-- employee profile & id -->


                        <!-- employee_detail_content -->

                        <div class="col-span-3 w-full flex justify-center">

                            <div class="w-10/12 rounded-lg shadow-2xl shadow-black/50 mx-auto">

                                <div class="flex flex-col">

                                    <!-- Employee Name -->

                                    <div class="px-5 pt-5">

                                        <input class="px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                                        border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Employee Name" type="text" disabled />

                                    </div>

                                    <!-- Employee Name -->

                                    <!-- Employee NIC & Username -->

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-5">

                                        <input class="px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                                        border-solid focus:border-[#645fce] border-[#f4ecff] text-center" placeholder="Employee NIC" type="text" disabled />

                                        <input class="px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                                        border-solid focus:border-[#645fce] border-[#f4ecff] text-center" placeholder="Username" type="text" disabled />

                                    </div>

                                    <!-- Employee NIC & Username -->

                                    <!-- Email Address -->

                                    <div class="px-5">

                                        <input class="px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                                        border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Email Address" type="email" disabled />

                                    </div>

                                    <!-- Email Address -->

                                    <!-- Contact No & Register Date -->

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-5">

                                        <input class="px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                                        border-solid focus:border-[#645fce] border-[#f4ecff] text-center" placeholder="Contact No" type="text" disabled />

                                        <input class="px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                                        border-solid focus:border-[#645fce] border-[#f4ecff] text-center" placeholder="Register Date" type="text" disabled />

                                    </div>

                                    <!-- Contact No & Register Date -->

                                    <!-- Home Address -->

                                    <div class="px-5">

                                        <input class="px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                                         border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Home Address" type="text" disabled />

                                    </div>

                                    <!-- Home Address -->

                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-5">

                                        <!-- block Button -->
                                        <button class="mt-4 px-4 py-2 bg-red-600/90 text-white rounded-full shadow hover:bg-red-600 employee-view-modal">
                                            Block
                                        </button>
                                        <!-- block Button -->

                                        <!-- View Attendance Button -->
                                        <button class="mt-4 px-4 py-2 bg-[#645FCE]/90 text-white rounded-full shadow hover:bg-[#645FCE] employee-view-modal">
                                            View Attendance
                                        </button>
                                        <!-- View Attendance Button -->

                                        <!-- Salary View Button -->
                                        <button class="mt-4 px-4 py-2 bg-green-600/90 text-white rounded-full shadow hover:bg-green-600 employee-view-modal">
                                            Salary View
                                        </button>
                                        <!-- Salary View Button -->

                                    </div>



                                </div>

                            </div>

                        </div>

                        <!-- employee_detail_content -->

                    </div>


                </div>

                <div class="flex justify-end p-4 border-t">

                    <button id="closeModalFooter3" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">
                        Close
                    </button>

                </div>

            </div>

        </div>

        <!-- employee details model -->


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

    <script src="tailwind.js"></script>

</body>

</html>