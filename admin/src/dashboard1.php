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


    <div class="w-full h-screen">


        <?php
        
            require "header.php";

        ?>

        <div class="grid grid-cols-1 sm:grid-cols-4 p-10 *:border-2 *:shadow-2xlk 
        *:w-[100px] *:sm:w-[220px] *:h-[100px] *:sm:h-[190px] *:place-self-center 
        *:text-center *:content-center *:space-y-4 *:font-medium *:text-wrap 
        hover:*:border-2 hover:*:border-black">

            <div class="rounded-3xl bg-sky-300">
                <p class="text-2xl">Total Orders</p>
                <p class="text-4xl">02</p>
            </div>

            <div class="bg-blue-300 rounded-3xl">
                <p class="text-2xl">Monthly Revenue</p>
                <p class="text-4xl">02</p>
            </div>

            <div class="bg-indigo-300 rounded-3xl">
                <p class="text-2xl">Categories</p>
                <p class="text-4xl">02</p>
            </div>

            <div class="bg-purple-300 rounded-3xl">
                <p class="text-2xl">Total Sales</p>
                <p class="text-4xl">02</p>
            </div>

        </div>

        <hr class="border-2 border-slate-600" />

        <div class="flex place-content-center p-14">

            <punchbtn class="bg-slate-300">PUNCH IN</punchbtn>

        </div>

        <hr class="border-2 border-slate-600" />

        <div class="flex p-5 place-content-center">

            <div class="w-[520px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center">
                <span class="text-3xl font-bold">Company Performance This Week</span>
            </div>

        </div>

        <div class="flex flex-col mx-20 border-2 rounded-lg shadow-xl bg-slate-300/35 shadow-black/50">
            
            <div class="flex place-self-center">
                <img src="resources/profile_img/performance_1.png" alt="">
            </div>
            
            <div class="grid grid-cols-3 p-10 text-center place-items-center">

                <div>
                    <div class="p-5 text-xl border-2 border-black w-36 hover:bg-purple-300 rounded-2xl">Completed</div>
                </div>

                <div>
                    <div class="p-5 text-xl border-2 border-black w-36 hover:bg-purple-300 rounded-2xl">Percentage</div>
                </div>
                
                <div>
                    <div class="p-5 text-xl border-2 border-black w-36 hover:bg-purple-300 rounded-2xl">Pending</div>
                </div>

            </div>

        </div>
        
        <div class="flex p-5 place-content-center">
            
            <div class="w-[310px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center">
                <span class="text-3xl font-bold">Company Revenue</span>
            </div>
            
        </div>
        
        <div class="flex flex-col mx-20 border-2 rounded-lg shadow-xl bg-slate-300/35 shadow-black/50">            
            
            <div class="grid grid-cols-3 p-10 text-center place-items-center">
                
                <div>
                    <div class="p-5 text-xl border-2 border-black w-36 hover:bg-purple-300 rounded-2xl">1 Day</div>
                </div>
                
                <div>
                    <div class="p-5 text-xl border-2 border-black w-36 hover:bg-purple-300 rounded-2xl">1 Week</div>
                </div>
                
                <div>
                    <div class="p-5 text-xl border-2 border-black w-36 hover:bg-purple-300 rounded-2xl">1 Year</div>
                </div>
                
            </div>
            
            <div class="flex place-self-center">
                
                <img src="resources/profile_img/Revanew.png" alt="">
                
            </div>

        </div>
        
        <div class="flex p-5 my-5 place-content-center ">
            
            <div class="w-[310px] p-5 rounded-[30px] bg-[#645FCE] flex place-content-center ">
                <span class="text-3xl font-bold">Order Deatils</span>
            </div>
            
        </div>
        
        <div class="flex flex-col mx-20 border-2 rounded-lg shadow-xl bg-slate-300/35 shadow-black/50 ">            
            
            <table class="text-center table-fixed">
            
                <thead>
                    
                    <tr>
                        
                        <th>Order Id</th>
                        <th>Order Data</th>
                        <th>Customer</th>
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
                        
                        <td>03</td>
                        <td>8/13/2024</td>
                        <td>Sahan Perera</td>
                        <td>10000.00</td>
                        <td>Ongoing</td>
                        <td>2</td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td>04</td>
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

</body>

</html>