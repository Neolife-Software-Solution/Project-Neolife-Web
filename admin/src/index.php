<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="admin_style.css">

        <link rel="stylesheet" href="tailwind.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" href="resources/logo/favicon.png" />

        <title>NeoLife Software Solution | Admin Login</title>

    </head>

    <body class="bg_img">

        <div class="h-screen">
            
            <div class="flex flex-row justify-center p-5">

                <div class="flex flex-col">

                    <!-- Header Text Section -->

                    <div class="flex flex-row justify-center">
                        
                        <div class="grid grid-cols-1 mt-10 mb-5">
    
                            <span class="text-lg lg:text-4xl headertext-aboutus">Welcome To Admin Login</span>
    
                        </div>
                    
                    </div>

                    <!-- Header Text Section -->

                    <div class="flex flex-col mt-2">

                        <div class="grid grid-cols-1">

                            <div class="flex flex-row p-5 shadow-xl bg-slate-700/30 shadow-black/10 rounded-xl">
    
                                <div class="">

                                    <!-- Verfy Code Section -->
    
                                    <div>
    
                                        <input class="h-10 p-5 rounded-full shadow-md focus:outline-none hover:shadow-black w-[300px] lg:w-[530px]" placeholder="Enter Your Admin Email Address" type="email" name="" id=""/>
                                    
                                    </div>
                                
                                    <div class="flex flex-row justify-center mt-5 lg:justify-end">
    
                                        <button class="h-10 py-2 font-bold duration-500 ease-out bg-white rounded-full lg:w-52 hover:bg-gray-500 w-60 hover:duration-700 hover:ease-in">Get verification Code</button>
    
                                    </div>

                                    <!-- Verfy Code Section -->

                                    <!-- Verfiy Email Sections -->

                                    <div class="mt-10">
    
                                        <div>
    
                                            <div class="flex flex-row justify-center ">
    
                                                <span class="text-center text-white text-xl font-bold lg:h-10 lg:w-[500px] bg-[#645FCE] p-2 rounded-md w-80">Verfy Your Email Address</span>
    
                                            </div>
    
                                        </div>    
    
                                    </div>

                                    <div class="justify-center mt-10 lg:flex">
    
                                        <input class="h-10 py-2 bg-white lg:w-[530px] font-bold p-5 rounded-full shadow-md text-center focus:outline-none hover:shadow-black text-lg w-80" placeholder="Entetr Your verification Code" type="text"></input>
    
                                    </div>
                                    
                                    <div class="justify-center mt-10 lg:flex:">
    
                                        <input class="h-10 py-2 bg-white lg:w-[530px] font-bold p-5 rounded-full shadow-md text-center focus:outline-none hover:shadow-black text-lg w-80" placeholder="Create User Name" type="text"></input>
    
                                    </div>
                                    
                                    <div >

                                        <div class="justify-center lg:flex lg:flex-row">

                                            <div class="flex justify-center p-2 mt-10">
            
                                                <input class="h-10 p-5 py-2 text-lg font-bold text-center bg-white rounded-full shadow-md w-60 focus:outline-none hover:shadow-black" placeholder="Create Password" type="password"></input>
            
                                            </div>
                                            
                                            <div class="flex justify-center p-2 mt-10">
            
                                                <input class="h-10 p-5 py-2 text-lg font-bold text-center bg-white rounded-full shadow-md w-60 focus:outline-none hover:shadow-black" placeholder="Re-Type Password" type="password"></input>
            
                                            </div>
                                        
                                        </div>
                                        
                                    </div>
                                                                        
                                    <div class="flex justify-center mt-10 ">
    
                                        <button class="h-10 py-2 font-bold duration-500 ease-out bg-white rounded-full w-52 hover:duration-700 hover:ease-in hover:bg-gray-500">Create Account</button>
    
                                    </div>

                                    <!-- Verfiy Email Sections -->
                                        
                                </div>
    
                            </div>
                        
                        </div>
                    
                    </div>

                </div>

            </div>

        </div>

        <script src="admin_script.js"></script>

    </body>

</html>