<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | Access Level 01</title>

    <link rel="stylesheet" href="admin_style.css" />

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="icon" href="resources/logo/favicon.png" />


</head>

<body>

    <div class="h-screen w-full">

        <!-- Access level 01 header -->

        <div><?php require "header1.php"  ?></div>

        <!-- Access level 01 header -->


        <!-- Content -->

        <!-- Company Report -->

        <div class="grid grid-cols-1 lg:grid-cols-4 p-10 *:border-2 *:shadow-2xl 
        *:w-[200px] *:lg:w-[220px] *:h-[200px] *:lg:h-[190px] *:place-self-center 
        *:text-center *:content-center *:space-y-4 *:font-medium *:text-wrap 
        hover:*:border-2 hover:*:border-black gap-2">

            <div class="rounded-3xl bg-[#645FCE]">

                <p class="text-2xl">Total Orders</p>
                <p class="text-4xl">02</p>

            </div>

            <div class="rounded-3xl bg-[#645FCE]">

                <p class="text-2xl">Monthly Revenue</p>
                <p class="text-4xl">02</p>

            </div>

            <div class="rounded-3xl bg-[#645FCE]">

                <p class="text-2xl">Categories</p>
                <p class="text-4xl">02</p>

            </div>

            <div class="rounded-3xl bg-[#645FCE]">

                <p class="text-2xl">Total Sales</p>
                <p class="text-4xl">02</p>

            </div>

        </div>


        <hr class="border-2 border-slate-600" />

        <div class="flex place-content-center p-14">

            <punchbtn class="bg-slate-300">PUNCH IN</punchbtn>

        </div>

        <hr class="border-2 border-slate-600" />


        <!-- Company Report -->

        <hr class="border-2 border-slate-600" />

        <!-- Company Performance title -->

        <div class="flex place-content-center p-5">

            <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl ">

                <span class="font-bold text-sm lg:text-3xl">Company Performance</span>

            </div>

        </div>

        <!-- Company Performance title -->

        <!-- Company Performance Content -->

        <div class="flex flex-col lg:mx-32 my-5 bg-slate-100 rounded-2xl shadow-2xl shadow-black/50">

            <!-- Company Performance image -->

            <div class="flex flex-row place-self-center">

                <img class="lg:w-96 w-[200px]" src="resources/dashboard_img/performance.png" alt="Performance Chart" />

            </div>

            <!-- Company Performance image -->

            <!-- Company Performance image Section -->

            <div class="grid lg:grid-cols-3 grid-cols-1 place-items-center p-10 gap-2">

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Completed</div>

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Percentage</div>

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Pending</div>

            </div>

            <!-- Company Performance image Section -->

        </div>

        <!-- Company Performance Content -->

        <!-- User Performance title -->

        <div class="flex place-content-center p-5">

            <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl ">

                <span class="font-bold text-sm lg:text-3xl">User Performance</span>

            </div>

        </div>

        <!-- User Performance title -->

        <!-- User Performance Content -->

        <div class="flex flex-col lg:mx-32 my-5 bg-slate-100 rounded-2xl shadow-2xl shadow-black/50">

            <!-- User Performance image -->

            <div class="flex flex-row place-self-center">

                <img class="lg:w-96 w-[200px]" src="resources/dashboard_img/performance.png" alt="Performance Chart" />

            </div>

            <!-- User Performance image -->

            <!-- User Performance image Section -->

            <div class="grid lg:grid-cols-3 grid-cols-1 place-items-center p-10 gap-2">

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Completed</div>

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Percentage</div>

                <div class="w-36 p-5 hover:bg-[#645FCE] rounded-2xl text-xl text-center border-2 border-black">Pending</div>

            </div>

            <!-- User Performance image Section -->

        </div>

        <!-- User Performance Content -->

        <!-- Company Revenue title -->

        <div class="flex place-content-center p-5">

            <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl">

                <span class="font-bold text-sm lg:text-3xl">Company Revenue</span>

            </div>

        </div>

        <!-- Company Revenue title -->

        <!-- Company Revenue Content -->

        <div class="flex flex-col lg:mx-32 my-5 bg-slate-100 rounded-2xl shadow-2xl shadow-black/50 py-5">

            <!-- Company Revenue image -->

            <div class="flex flex-row place-self-center">

                <img class="lg:w-96 w-[200px]" src="resources/dashboard_img/analytics.png" alt="Performance Chart" />

            </div>

            <!-- Company Revenue image -->

        </div>

        <!-- Company Revenue Content -->

        <!-- Order Details title -->

        <div class="flex flex-row justify-center p-5 ">

            <div class="hidden lg:block">

                <div class="lg:w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center shadow-2xl  ">

                    <span class="font-bold text-3xl text-center">Order Details</span>

                </div>

            </div>

        </div>

        <!-- Order Details title -->

        <!-- Order Details Content -->

        <div class="px-24 p-5 hidden lg:block">

            <div class="flex flex-col bg-slate-100 rounded-2xl shadow-2xl shadow-black/50 p-5">

                <table class="table-auto text-center">

                    <thead>

                        <tr>

                            <th>Order Id</th>
                            <th>Order Date</th>
                            <th>Order Customer</th>
                            <th>Payment</th>
                            <th>Order Status</th>
                            <th>Total</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>01</td>
                            <td>8/13/2024</td>
                            <td>Sahan Perera</td>
                            <td>10000.00</td>
                            <td>Ongoing</td>
                            <td>2</td>

                        </tr>

                        <tr>

                            <td>02</td>
                            <td>8/13/2024</td>
                            <td>Sahan Perera</td>
                            <td>10000.00</td>
                            <td>Ongoing</td>
                            <td>2</td>

                        </tr>

                        <tr>

                            <td>02</td>
                            <td>8/13/2024</td>
                            <td>Sahan Perera</td>
                            <td>10000.00</td>
                            <td>Ongoing</td>
                            <td>2</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <!-- Order Details Content -->

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

</body>

</html>