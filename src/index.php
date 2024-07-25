<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="tailwind.css">

        <!-- <link rel="stylesheet" href="service_img_slider.scss"> -->

        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" href="resources/logo/favicon.png" />

        <title>Neolife Software Solutions | Home</title>

    </head>

    <body>

        <div class="h-screen">

            <!-- Header -->

            <div>

                <?php
                    
                    require "header.php";

                ?>

            </div>

            <!-- Header -->            

            <!-- backgroundvideo -->

            <div class="mt-16">

                <div class="absolute flex flex-row justify-center bg-cover">

                    <video width="50%" height="50%"  autoplay="{true}" loop muted>
                    
                        <source src="resources/background_video_animation/background.mp4" type="video/mp4">
                    
                    </video>

                </div>

                <!-- Vedio Content -->

                <div class="relative flex flex-row">

                    <div class="flex flex-row mt-60">

                        <div class="flex flex-col mt-32">

                            <div class="flex flex-col px-5">

                                <div>

                                    <p class="text-2xl font-bold text-center text-white">
    
                                        At Neolife Software Solutions, we
                                        specialize in delivering cutting-edge technology solutions tailored to meet the
                                        unique needs of businesses across various industries. Our mission is to empower our
                                        clients with innovative software that enhances productivity, efficiency, and overall
                                        business performance.
    
                                    </p>

                                </div>

                                <div class="flex flex-row justify-center mt-8">

                                    <button class="bg-[#645FCE] px-6 py-3 text-white rounded-md hover:bg-black font-medium duration-700 ease-out hover:ease-in hover:transition hover:duration-300 hover:text-white">
                                        
                                        About Us
                                    
                                    </button>
                                    
                                </div>

                            </div>                            

                        </div>

                    </div>

                </div>               
                
                <!-- Vedio Content -->

            </div>

            <!-- background video -->

            <!-- Our Services Section-->

            <div class="mt-80">

                <div>

                    <div class="bg-[#645FCE] py-5 ">

                        <div>

                            <span class="flex flex-row justify-center text-2xl font-bold text-white headertext">
                                
                                Our Services
                                
                            </span>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Our Services Section-->
            
            <!-- Our Services Image Slider -->

            <div>

                <div class="container_img">

                    <div>

                        <div class="w-screen">

                            <!-- images -->                             
                            <div class="slide">

                                <div class="item"
                                    style="background-image: url(resources/Services_img_slider/Application\ Development\(2\).jpeg);">

                                    <div class="content">

                                        <div class="name">Application Development</div>

                                        <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                                            tempore error obcaecati. Odit quas autem, id architecto, facere pariatur
                                            delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus
                                            libero eos!</div>

                                        <button class="px-10 py-2 text-black bg-white btn">See More</button>

                                    </div>

                                </div>
                                <div class="bg-cover item h-80"
                                    style="background-image: url(resources/Services_img_slider/web-development\(1\).jpg);">

                                    <div class="content">

                                        <div class="name">web Development</div>

                                        <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                                            tempore error obcaecati. Odit quas autem, id architecto, facere pariatur
                                            delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus
                                            libero eos!</div>

                                        <button class="px-10 py-2 text-black bg-white btn">See More</button>

                                    </div>

                                </div>
                                <div class="bg-cover item h-80"
                                    style="background-image: url(resources/Services_img_slider/System\ Development\(1\).webp);">

                                    <div class="content">

                                        <div class="name">System Development</div>

                                        <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                                            tempore error obcaecati. Odit quas autem, id architecto, facere pariatur
                                            delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus
                                            libero eos!</div>

                                        <button class="px-10 py-2 text-black bg-white btn">See More</button>

                                    </div>

                                </div>
                                <div class="bg-cover item h-80"
                                    style="background-image: url(resources/Services_img_slider/Graphi\ Design\ \(3\).png);">

                                    <div class="content">

                                        <div class="name">Graphic Design</div>

                                        <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                                            tempore error obcaecati. Odit quas autem, id architecto, facere pariatur
                                            delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus
                                            libero eos!</div>

                                        <button class="px-10 py-2 text-black bg-white btn">See More</button>

                                    </div>

                                </div>
                                <div class="bg-cover item h-80"
                                    style="background-image: url(resources/Services_img_slider/Video\ Editing\(1\).webp);">

                                    <div class="content">

                                        <div class="name">Video Editing</div>

                                        <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                                            tempore error obcaecati. Odit quas autem, id architecto, facere pariatur
                                            delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus
                                            libero eos!</div>

                                        <button class="px-10 py-2 text-black bg-white btn">See More</button>

                                    </div>

                                </div>
                                <div class="bg-cover item h-80"
                                    style="background-image: url(resources/Services_img_slider/computer_hardware_\(3\).png);">

                                    <div class="content">

                                        <div class="name">computer Hardware</div>

                                        <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                                            tempore error obcaecati. Odit quas autem, id architecto, facere pariatur
                                            delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus
                                            libero eos!</div>

                                        <button class="px-10 py-2 text-black bg-white btn">See More</button>

                                    </div>

                                </div>
                                <div class="bg-cover item h-80"
                                    style="background-image: url(resources/Services_img_slider/computer_networking.png);">

                                    <div class="content">

                                        <div class="name">Networking</div>

                                        <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
                                            tempore error obcaecati. Odit quas autem, id architecto, facere pariatur
                                            delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus
                                            libero eos!</div>

                                        <button class="px-10 py-2 text-black bg-white btn">See More</button>

                                    </div>

                                </div>

                            </div>                            
                            <!-- images -->

                        </div>

                    </div>

                    <div class="button">

                        <button class="prev btn2"><i class="fa-solid fa-arrow-left"></i></button>
                        <button class="next btn2"><i class="fa-solid fa-arrow-right"></i></button>

                    </div>
                            
                </div>
                
            </div>

            <!-- Our Services Image Slider -->

            <!-- Our Language Image Slider -->

            <div>

                <div class="mt-80 Logo_body">

                    <div class="logos mt-80">

                        <!-- Language Images  -->

                        <div class="logos-items">

                            <img class=" item1" src="resources/logo image slider/css3-original-wordmark.svg" />

                            <img class=" item2" src="resources/logo image slider/git-original-wordmark.svg" />

                            <img class=" item3" src="resources/logo image slider/html5-original-wordmark.svg" />

                            <img class=" item4" src="resources/logo image slider/javascript-original.svg" />

                            <img class=" item5" src="resources/logo image slider/mysql-original-wordmark.svg" />

                            <img class=" item6" src="resources/logo image slider/php-original.svg" />

                            <img class=" item7" src="resources/logo image slider/illustrator-line.svg" />

                            <img class=" item8" src="resources/logo image slider/photoshop-original.svg" />

                            <img class=" item9" src="resources/logo image slider/wordpress-plain-wordmark.svg" />

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

                        <!-- Language Image Slider -->

                    </div>

                </div>

            </div>

            <!-- Our Language Image Slider -->            

        </div>

        <script src="service_img_slider_animation.js"></script>

    </body>

</html>