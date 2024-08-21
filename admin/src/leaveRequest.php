<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />

    <title>Leave Request | Employees</title>

</head>

<body>

    <div class=" w-full h-screen ">

        <!-- Access level 01 header -->

        <div><?php require "header1.php"  ?></div>

        <!-- Access level 01 header -->

        <!-- Content -->

        <!-- title -->

        <div class="text-center p-5">
            <span class=" text-3xl md:text-5xl lg:text-6xl font-bold text-zinc-500 ">Leave Request</span>
        </div>

        <!-- title -->

        <div class="md:max-w-3xl lg:max-w-4xl mx-auto flex flex-col items-center  p-10 sm:p-20 mt-5 sm:mt-14 bg-slate-50 rounded-2xl shadow-2xl border-3  sm:mb-10">

            <div class="flex flex-col items-center p-4 sm:p-20 gap-10 bg-white rounded-2xl border-2">

                <div class="flex sm:flex-row gap-10 flex-col">

                    <!-- Selector -->

                    <div>
                        <select class="bg-gray-50 border-2 border-gray-300 hover:border-blue-500 text-gray-900 text-sm sm:text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Select Employee</option>
                            <option value="">Pasindu Nethsara</option>
                            <option value="">Jude Thamel</option>
                            <option value="">Sanjana Kumara</option>
                            <option value="">Avishka Jayalath</option>
                            <option value="">Kavindu Vishmitha</option>
                        </select>
                    </div>

                    <!-- Selector -->

                    <!-- date -->

                    <input type="text" class="text-center border-2 text-base sm:text-lg rounded-lg hover:border-blue-500" placeholder="mm/dd/yyyy">

                    <!-- date -->

                </div>

                <!-- Submit Button -->

                <div>
                    <button class="bg-blue-500 text-white font-bold text-sm sm:text-lg rounded-lg px-5 py-2.5 hover:bg-blue-700">Submit</button>
                </div>

                <!-- Submit Button -->

            </div>
        </div>
    </div>

    <!-- Content -->

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

</body>

</html>