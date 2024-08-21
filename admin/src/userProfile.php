<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Admin User Profile</title>

    <link rel="stylesheet" href="admin_style.css" />

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

</head>

<body>

    <div class="min-h-screen">


        <!-- content -->

        <div class="flex-grow">

            <div class="relative w-full">

                <!-- <div>

                <?php /* require "header1.php" */ ?>

                </div> -->

                <!-- Employee's full name design and profile image design -->

                <div class="relative bg-[#4cbbbf] w-full h-72">

                    <!-- Employee's full name in the top -->

                    <div class="w-full flex justify-center">

                        <div class="absolute top-14 xl:right-32 w-[350px] sm:w-[500px] md:w-[600px] h-44 text-white">

                            <div class="grid grid-cols-2 p-5">

                                <!-- Left Column (Headings) -->

                                <div class="col-span-1 space-y-5 font-bold">

                                    <!-- full name -->

                                    <div class="flex flex-row">

                                        <div class="w-20 sm:w-32 md:w-44 font-bold md:text-2xl">Full Name</div>
                                        <span class="font-bold md:text-2xl">: -</span>

                                    </div>

                                    <!-- full name -->

                                    <!-- Position -->

                                    <div class="flex flex-row">

                                        <div class="w-20 sm:w-32 md:w-44 font-bold md:text-2xl">Position</div>
                                        <span class="font-bold md:text-2xl">: -</span>

                                    </div>

                                    <!-- Position -->

                                    <!-- Department -->

                                    <div class="flex flex-row">

                                        <div class="w-20 sm:w-32 md:w-44 font-bold md:text-2xl">Department</div>
                                        <span class="font-bold md:text-2xl">: -</span>

                                    </div>

                                    <!-- Department -->

                                </div>

                                <!-- Left Column (Headings) -->

                                <!-- Right Column (Description/Data) -->

                                <div class="col-span-1 space-y-5">

                                    <div class="md:text-2xl">W. D. John De Silva</div>

                                    <div class="md:text-2xl">CEO</div>

                                    <div class="md:text-2xl">HR Department</div>

                                </div>

                                <!-- Right Column (Description/Data) -->

                            </div>

                        </div>

                    </div>

                    <!-- Employee's full name in the top -->

                    <!-- Profile Image Section -->

                    <div class="w-full flex justify-center">

                        <div class="absolute top-[300px] xl:top-24 xl:left-32 z-10">

                            <div class="grid gap-3 text-center">

                                <img src="resources\profile_img\default.png" alt="Profile Icon" class="rounded-full border-2 border-white h-72 w-72">

                                <button class="w-48 bg-[#645FCE]/70 text-lg rounded px-3 py-1 place-self-center hover:bg-[#645FCE]/100">Edit Profile Image</button>

                            </div>

                        </div>

                    </div>

                    <!-- Profile Image Section -->

                </div>

                <!-- Employee's full name design and profile image design -->


                <!-- Profile Settings -->

                <div class="w-full flex justify-center mt-96 xl:mt-44 mb-32">

                    <div class="w-10/12 rounded-lg shadow-2xl shadow-black/50 mx-auto">

                        <!-- Profile Settings Heading -->

                        <div class="flex place-content-center p-5 mt-3">

                            <div class="w-72 p-4 rounded-3xl bg-[#645FCE] flex place-content-center">

                                <span class="font-bold text-2xl lg:text-3xl">Profile Settings</span>

                            </div>

                        </div>

                        <!-- Profile Settings Heading -->


                        <!-- Profile Settings Content -->

                        <div class="flex flex-col">

                            <!-- Employee Name -->

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-5">

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="First Name" type="text" disabled />

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Last Name" type="text" disabled />

                            </div>

                            <!-- Employee Name -->

                            <!-- Employee Email -->

                            <div class="px-5">

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Email Address" type="email" disabled />

                            </div>

                            <!-- Employee Email -->

                            <!-- Employee Username & Password -->

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-5">

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Username" type="text" disabled />

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Password" type="password" disabled />

                            </div>

                            <!-- Employee Username & Password -->

                            <!-- Employee Position & Department -->

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 px-5">

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Position" type="text" disabled />

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Department" type="text" disabled />

                            </div>

                            <!-- Employee Position & Department -->

                            <!-- Address line 01 -->

                            <div class="p-5">

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Home Address Line 01" type="text" />

                            </div>

                            <!-- Address line 01 -->

                            <!-- Address line 02 -->

                            <div class="px-5">

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Home Address Line 02" type="text" />

                            </div>

                            <!-- Address line 02 -->

                            <!-- Contact Numbers -->

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-5">

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="Mobile Number" type="text" />

                                <input class=" px-5 py-3 outline-none w-full rounded-full border-2 transition-colors duration-100 
                            border-solid focus:border-[#645fce] border-[#f4ecff]" placeholder="WhatsApp Mobile Number" type="text" />

                            </div>

                            <!-- Contact Numbers -->

                            <!-- submit_button -->

                            <div class="p-8 flex place-content-center mb-3">

                                <button class="bg-[#645FCE]/70 text-white py-2 px-5 rounded-[20px] text-2xl hover:bg-[#645FCE]/90
                                 active:bg-[#645FCE]/100 focus:outline-none focus:ring focus:[#645FCE]/30">Save Changes</button>

                            </div>

                            <!-- submit_button -->

                        </div>

                        <!-- Profile Settings Content -->

                    </div>

                </div>

                <!-- Profile Settings -->

            </div>

        </div>

        <!-- content -->


    </div>

</body>

</html>