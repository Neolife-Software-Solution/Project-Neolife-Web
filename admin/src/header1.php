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

            <li class="active">

                <a href="dashboard1.php">

                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class=" bx bxs-building"></i>
                    <span class="text">Department</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-folder"></i>
                    <span class="text">Ongoing Project</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-chart"></i>
                    <span class="text">Analytics</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-briefcase"></i>
                    <span class="text">Orders</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-mobile"></i>
                    <span class="text">Meeting</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-user"></i>
                    <span class="text">Employees</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-coin"></i>
                    <span class="text">Salary</span>

                </a>

            </li>

            <li>

                <a href="attendanceReport.php">

                    <i class="bx bxs-user-check"></i>
                    <span class="text">Attendance</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-message"></i>
                    <span class="text">Message</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-door-open"></i>
                    <span class="text">Leave</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="bx bxs-cog"></i>
                    <span class="text">Setting</span>

                </a>

            </li>

            <li class="text sm:hidden block">

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

        <nav class="nav-container flex justify-between items-center p-4 bg-gray-800 text-white">

            <!-- toggle-menu-icon -->

            <i class='bx bx-menu text-2xl'></i>

            <!-- toggle-menu-icon -->


            <!-- admin_header_right -->

            <div class="nav-right flex items-center gap-8 relative">

                <!-- admin_name -->
                <p class=" text-sm font-bold hidden sm:block">Kavindu Vishmitha</p>
                <!-- admin_name -->

                <!-- admin_profile_&_dropdownMenu -->

                <div class="relative">

                    <!-- profile_icon -->

                    <a href="#" class="profile">

                        <img src="resources/profile_img/default.png" alt="Profile Image" class="w-10 h-10 rounded-full cursor-pointer" id="profileImage" />

                    </a>

                    <!-- profile_icon -->

                    <!-- dropdownMenu_(profile_details) -->

                    <div id="dropdownMenu" class="hidden absolute px-36 right-0 mt-7 w-96 bg-white text-black rounded-lg shadow-lg  sm:px-6 sm:py-5 py-4 sm:space-y-4 space-y-2 ">

                        <p class="hover:text-white  ease-out rounded-md  hover:bg-indigo-600 text-sm sm:text-base"><b>User Name :</b> Kavindu Vishmitha</p>
                        <p class="hover:text-white  ease-out rounded-md  hover:bg-indigo-600 text-sm sm:text-base"><b>Email :</b> 2003kavinduvishmitha@gmail.com</p>
                        <p class="hover:text-white  ease-out rounded-md  hover:bg-indigo-600 text-sm sm:text-base"><b>Postion :</b> Full-Stack Developer</p>
                        <p class="hover:text-white  ease-out rounded-md  hover:bg-indigo-600 text-sm sm:text-base"><b>Department :</b> HR Department</p>
                        <i class="fa-solid fa-right-from-bracket fa-fade cursor-pointer "></i>

                    </div>

                    <!-- dropdownMenu_(profile_details) -->

                </div>

                <!-- admin_profile_&_dropdownMenu -->

                <!-- bell_icon -->

                <a href="#" class="notification relative">

                    <i class="fa-solid fa-bell fa-shake text-base sm:text-xl"></i>

                    <span class="num absolute top-0 right-0 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">1</span>

                </a>

                <!-- bell_icon -->

                <!-- message_icon -->

                <a href="#" class="notification relative">

                    <i class="fa-solid fa-message fa-shake text-sm sm:text-xl"></i>

                    <span class="num absolute top-0 right-0 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">1</span>

                </a>

                <!-- message_icon -->

            </div>

            <!-- admin_header_right -->

        </nav>

    </section>

    <!-- admin_dashboard_header -->

    <script src="header.js"></script>

</body>

</html>