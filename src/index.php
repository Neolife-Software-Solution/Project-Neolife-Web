<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="tailwind.css">

        <link rel="stylesheet" href="service_img_slider.scss">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" href="resources/logo/favicon.png" />

        <title>Neo Life | Home</title>

    </head>

    <body>

        <!-- background Animation -->

        <!-- <canvas class="absolute"></canvas> -->

        <!-- background Animation -->

        <div class="h-screen">

            <div>

                <?php
                    
                    require "header.php";

                ?>

                <!-- Our Services Section -->
                
                <div class="hidden mt-16 lg:block">

                    <div class="relative flex flex-col justify-center">

                        <div>
                            
                            <!-- background Animation Content -->
                                 
                            <div class="flex flex-col mt-32 ">

                                <div class="px-5">

                                    <p class="text-xl font-bold text-center text-black">At Neolife Software Solutions, we
                                        specialize in delivering cutting-edge technology solutions tailored to meet the
                                        unique needs of businesses across various industries. Our mission is to empower our
                                        clients with innovative software that enhances productivity, efficiency, and overall
                                        business performance. </p>

                                </div>

                                <div class="flex flex-row justify-center">

                                    <button class="mt-5 bg-[#645FCE] px-10 py-2 text-white rounded-full hover:bg-black font-medium duration-700 ease-out hover:ease-in hover:transition hover:duration-300 hover:text-white">About Us</button>

                                </div>

                            </div>

                            <!-- background Animation Content -->
                        
                        </div>
                        
                    </div>
                    
                    <!-- Image Slider -->
                    
                    <div class=" mt-60">
                    
                        <div class="overflow-hidden">
                            
                            <div class="bg-[#645FCE] py-5 relative mt-80">
                            
                                <div>
            
                                    <span class="relative flex flex-row justify-center text-2xl font-bold text-white headertext">Our Services</span>
            
                                </div>
            
                                
                            </div>
                            
                            <div class="container_img">

                                <div>

                                    <div class="w-screen">
                                    
                                        <!-- images -->
                                        <div class="slide">
                                            
                                            <div class="item" style="background-image: url(resources/Services_img_slider/Application\ Development\(2\).jpeg);">

                                                <div class="content">

                                                    <div class="name">Application Development</div>
                                                    
                                                    <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempore error obcaecati. Odit quas autem, id architecto, facere pariatur delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus libero eos!</div>
                                                    
                                                    <button class="px-10 py-2 text-black bg-white btn">See More</button>
                                                    
                                                </div>

                                            </div>
                                            <div class="bg-cover item h-80" style="background-image: url(resources/Services_img_slider/web-development\(1\).jpg);">

                                                <div class="content">

                                                    <div class="name">web Development</div>

                                                    <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempore error obcaecati. Odit quas autem, id architecto, facere pariatur delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus libero eos!</div>
                                                    
                                                    <button class="px-10 py-2 text-black bg-white btn">See More</button>
                                                    
                                                </div>

                                            </div>
                                            <div class="bg-cover item h-80" style="background-image: url(resources/Services_img_slider/System\ Development\(1\).webp);">

                                                <div class="content">

                                                    <div class="name">System Development</div>
                                                    
                                                    <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempore error obcaecati. Odit quas autem, id architecto, facere pariatur delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus libero eos!</div>
                                                    
                                                    <button class="px-10 py-2 text-black bg-white btn">See More</button>
                                                    
                                                </div>

                                            </div>
                                            <div class="bg-cover item h-80" style="background-image: url(resources/Services_img_slider/Graphi\ Design\ \(3\).png);">

                                                <div class="content">

                                                    <div class="name">Graphic Design</div>
                                                    
                                                    <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempore error obcaecati. Odit quas autem, id architecto, facere pariatur delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus libero eos!</div>
                                                    
                                                    <button class="px-10 py-2 text-black bg-white btn">See More</button>
                                                    
                                                </div>

                                            </div>
                                            <div class="bg-cover item h-80" style="background-image: url(resources/Services_img_slider/Video\ Editing\(1\).webp);">

                                                <div class="content">

                                                    <div class="name">Video Editing</div>

                                                    <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempore error obcaecati. Odit quas autem, id architecto, facere pariatur delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus libero eos!</div>
                                                
                                                    <button class="px-10 py-2 text-black bg-white btn">See More</button>
                                                    
                                                </div>

                                            </div>
                                            <div class="bg-cover item h-80" style="background-image: url(resources/Services_img_slider/computer_hardware_\(3\).png);">

                                                <div class="content">

                                                    <div class="name">computer Hardware</div>
                                                    
                                                    <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempore error obcaecati. Odit quas autem, id architecto, facere pariatur delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus libero eos!</div>
                                                    
                                                    <button class="px-10 py-2 text-black bg-white btn">See More</button>
                                                    
                                                </div>

                                            </div>
                                            <div class="bg-cover item h-80" style="background-image: url(resources/Services_img_slider/computer_networking.png);">

                                                <div class="content">

                                                    <div class="name">Networking</div>
                                                    
                                                    <div class="des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus tempore error obcaecati. Odit quas autem, id architecto, facere pariatur delectus iusto recusandae officia tempore, atque impedit nostrum necessitatibus libero eos!</div>
                                                    
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
                        
                    </div>
                    
                    <!-- Image Slider -->
                                       
                </div> 
                
                <!-- Our Services Section -->
                
            </div>

        </div>

        <script src="service_img_slider_animation.js"></script>

    </body>

</html>