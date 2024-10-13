<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="header.css">

    <link rel="stylesheet" href="tailwind.css" />

    <title>Admin-Header & Side Menu 01</title>

    <link rel="icon" href="resources/logo/favicon.png" />

</head>

<body>

    <!-- In here, admin dashboard side panel is got header part too. Admin header is the one adjusting. -->

    <!-- admin_dashboard_sidepanel -->

    <section id="sidebar">

        <!-- logo_&_dashboard_name -->

        <a href="#" class="brand">

            <img class="w-[80px] rounded-full sm:mt-10 mt-4 p-2" src="resources/logo/logo.png" />

            <span class="sm:mt-10 md:text-3xl">Dashboard</span>

        </a>

        <!-- logo_&_dashboard_name -->

        <!-- dashboard_sidepanel_button_list -->

        <ul class="side-menu top">

            <li class="active" title="Dashboard">

                <a href="#">

                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>

                </a>

            </li>

            <li title="Department">

                <a href="#">

                    <i class=" bx bxs-building"></i>
                    <span class="text">Department</span>

                </a>

            </li>

            <li title="On Going Project">

                <a href="ongoing_project.php">

                    <i class="bx bxs-folder"></i>
                    <span class="text">Ongoing Project</span>

                </a>

            </li>

            <li title="Analytics">

                <a href="#">

                    <i class="bx bxs-chart"></i>
                    <span class="text">Analytics</span>

                </a>

            </li>

            <li title="Orders">

                <a href="#">

                    <i class="bx bxs-briefcase"></i>
                    <span class="text">Orders</span>

                </a>

            </li>

            <li title="Meeting">

                <a href="#">

                    <i class="bx bxs-mobile"></i>
                    <span class="text">Meeting</span>

                </a>

            </li>

            <li title="Employees">

                <a href="#">

                    <i class="bx bxs-user"></i>
                    <span class="text">Employees</span>

                </a>

            </li>

            <li title="Salary">

                <a href="#">

                    <i class="bx bxs-coin"></i>
                    <span class="text">Salary</span>

                </a>

            </li>

            <li title="Attendance">

                <a href="#">

                    <i class="bx bxs-user-check"></i>
                    <span class="text">Attendance</span>

                </a>

            </li>

            <li title="Message">

                <a href="#">

                    <i class="bx bxs-message"></i>
                    <span class="text">Message</span>

                </a>

            </li>

            <li title="Leave">

                <a href="#">

                    <i class="bx bxs-door-open"></i>
                    <span class="text">Leave</span>

                </a>

            </li>

            <li title="Setting">

                <a href="#">

                    <i class="bx bxs-cog"></i>
                    <span class="text">Setting</span>

                </a>

            </li>

            <li class="block text sm:hidden" title="Log Out">

                <a href="#">

                    <i class='bx bx-log-out'></i>
                    <span>Log Out</span>

                </a>

            </li>

        </ul>

        <!-- dashboard_sidepanel_button_list -->

    </section>

    <!-- admin_dashboard_sidepanel -->


    <!-- admin_dashboard_header -->

    <section id="content" class="fixed">

        <nav class="flex items-center justify-between p-4 text-white bg-gray-800 nav-container">

            <!-- toggle-menu-icon -->

            <i class='text-2xl bx bx-menu'></i>

            <!-- toggle-menu-icon -->


            <!-- admin_header_right -->

            <div class="relative flex items-center gap-8 nav-right">

                <!-- admin_name -->
                <p class="hidden text-sm font-bold sm:block">Kavindu Vishmitha</p>
                <!-- admin_name -->

                <!-- admin_profile_&_dropdownMenu -->

                <div class="relative">

                    <!-- profile_icon -->

                    <span class="profile">

                        <img src="resources/profile_img/default.png" alt="Profile Image" class="w-10 h-10 rounded-full cursor-pointer" id="profileImage" />

                    </span>

                    <!-- profile_icon -->

                    <!-- dropdownMenu_(profile_details) -->

                    <div id="dropdownMenu" class="absolute right-0 hidden py-4 space-y-2 text-black bg-white rounded-lg shadow-lg px-36 mt-7 w-96 sm:px-6 sm:py-5 sm:space-y-4 ">

                        <p class="p-1 text-sm ease-out rounded-md hover:text-white hover:bg-indigo-600 sm:text-base"><b>User Name :</b> Kavindu Vishmitha</p>
                        <p class="p-1 text-sm ease-out rounded-md hover:text-white hover:bg-indigo-600 sm:text-base"><b>Email :</b> 2003kavinduvishmitha@gmail.com</p>
                        <p class="p-1 text-sm ease-out rounded-md hover:text-white hover:bg-indigo-600 sm:text-base"><b>Postion :</b> Full-Stack Developer</p>
                        <p class="p-1 text-sm ease-out rounded-md hover:text-white hover:bg-indigo-600 sm:text-base"><b>Department :</b> HR Department</p>
                        <i class="cursor-pointer fa-solid fa-right-from-bracket fa-fade "></i>

                    </div>

                    <!-- dropdownMenu_(profile_details) -->

                </div>

                <!-- admin_profile_&_dropdownMenu -->

                <!-- bell_icon -->

                <span class="relative notification">

                    <i class="text-base text-black fa-solid fa-bell fa-shake sm:text-xl"></i>

                    <span class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 text-xs text-white bg-red-500 rounded-full num">1</span>

                </span>

                <!-- bell_icon -->

                <!-- message_icon -->

                <span class="relative notification">

                    <i class="text-sm text-black fa-solid fa-message fa-shake sm:text-xl"></i>

                    <span class="absolute top-0 right-0 flex items-center justify-center w-5 h-5 text-xs text-white bg-red-500 rounded-full num">1</span>

                </span>

                <!-- message_icon -->

            </div>

            <!-- admin_header_right -->

        </nav>

    </section>

    <!-- admin_dashboard_header -->

    <script src="header.js"></script>

</body>

</html>