<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="tailwind.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Neo Life | Home</title>

</head>

<body>

    <!-- background Animation -->

    <canvas class="absolute"></canvas>

    <!-- background Animation -->

    <div class="h-screen">

        <div>

            <?php

            require "header.php";

            ?>

            <!-- headerSection -->

            <div class="mt-16 mb-80">

                <div class="relative flex flex-col justify-center">

                    <div>

                        <div class="flex flex-col mt-32">

                            <div class="px-5">

                                <p class="text-xl font-bold text-center text-white">At Neolife Software Solutions, we
                                    specialize in delivering cutting-edge technology solutions tailored to meet the
                                    unique needs of businesses across various industries. Our mission is to empower our
                                    clients with innovative software that enhances productivity, efficiency, and overall
                                    business performance. </p>

                            </div>

                            <div class="flex flex-row justify-center">

                                <button class="mt-5 bg-[#645FCE] px-10 py-2 text-white rounded-full hover:bg-black font-medium duration-700 ease-out hover:ease-in hover:transition hover:duration-300 hover:text-white">About Us</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- headerSection -->

        </div>

        <!-- Language Image Slider -->
         

        <div class=" logos">

            <div class="flex flex-row logos-slide">

              

                    <img src="resources/logo image slider/css3-original-wordmark.svg" />


                    <img src="resources/logo image slider/git-original-wordmark.svg" />


                    <img src="resources/logo image slider/html5-original-wordmark.svg" />


                    <img src="resources/logo image slider/javascript-original.svg" />

                
                    <img src="resources/logo image slider/mysql-original-wordmark.svg" />

               

                    <img src="resources/logo image slider/php-original.svg" />

                
                    <img src="resources/logo image slider/illustrator-line.svg" />

                
                    <img src="resources/logo image slider/photoshop-original.svg" />

                
                    <img src="resources/logo image slider/wordpress-plain-wordmark.svg" />

                

            </div> 
            
            <script>
                var copy = document.querySelector(".logos-slide").cloneNode(true);
                //  document.querySelector(".logos").appendChild(copy);
            </script>

        </div>

        

        <!-- Language Image Slider -->

    </div>


</body>

</html>