<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="tailwind.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="icon" href="resources/logo/favicon.png" />

    <title>Header</title>

  </head>

  <body>

    <div>

      <!-- content -->

      <div class="bg-[#645FCE] max-w-full mx-auto p-2 justify-between text-slate-200 flex flex-row fixed top-0 left-0 right-0 items-center">

        <!-- headrelogoandname -->

        <div class="flex flex-row items-center lg:gap-4">

          <img class="h-[48px] sm:ml-3 lg:ml-5 rounded-full" src="resources/logo/logo.png" />
          <span class="hidden text-2xl text-black logotext lg:block">NeoLife <br/><span class="hidden text-xs text-white logotext lg:block">Pioneers of Digital Era</span></span>
          <span class="ml-[90px] md:ml-[540px] lg:hidden sm:block logotext">+94&nbsp;&nbsp;775429803</span>

        </div>

        <!-- headrelogoandname -->

        <!-- navbarcontent -->

        <div>

          <div class="flex flex-row items-center gap-5 sm:mr-3 lg:me-5">

            <a href="#" class="hidden lg:block">

              <span class="px-4 py-3 font-medium duration-700 ease-out rounded-md headertext hover:bg-zinc-700 hover:ease-in hover:transition hover:duration-300 hover:text-white">Home</span>

            </a>

            <a href="Estimate.php" target="_blank" class="hidden lg:block">

              <span class="px-4 py-3 font-medium duration-700 ease-out rounded-md hover:ease-in hover:transition hover:duration-300 hover:text-white hover:bg-black">Build Your Dream&nbsp;<i class="fa-solid fa-arrow-right fa-shake"></i></span>

            </a>

            <a href="#" target="_blank" class="hidden lg:block">

              <span class="px-4 py-3 font-medium duration-700 ease-out rounded-md headertext hover:bg-zinc-700 hover:ease-in hover:transition hover:duration-300 hover:text-white">Our Services</span>

            </a>

            <a href="#" target="_blank" class="hidden lg:block">

              <span class="px-4 py-3 font-medium duration-700 ease-out rounded-md headertext hover:bg-zinc-700 hover:ease-in hover:transition hover:duration-300 hover:text-white">Our Project</span>

            </a>

            <a href="#" target="_blank" class="hidden lg:block">

              <span class="px-4 py-3 font-medium duration-700 ease-out rounded-md headertext hover:bg-zinc-700 hover:ease-in hover:transition hover:duration-300 hover:text-white">About US</span>

            </a>

            <a href="ContactUs.php" target="_blank" class="hidden lg:block">

              <span class="px-4 py-3 font-medium duration-700 ease-out rounded-md headertext hover:bg-zinc-700 hover:ease-in hover:transition hover:duration-300 hover:text-white">Contact Us</span>

            </a>

            <!-- dropdown -->

            <a>
    
              <div class="relative sm:block lg:hidden" id="dropdownButton">

                <!-- dropdownbutton -->
              
                <button class="justify-center w-full gap-4 px-4 py-2 text-black transition rounded-md transfor ring-inset ring-2 ring-black" onclick="Dropdown()">

                  <i class="text-lg fa-solid fa-bars fa-fade"></i>

                </button>

                <!-- dropdownbutton -->

                <!-- dropdowncontent -->

                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">

                  <div class="flex flex-col hidden gap-2 p-2 text-start" id="dropdown">

                    <a href="#" target="_self" class="p-3 text-black duration-700 ease-out rounded-md hover:duration-500 hover:text-white hover:bg-indigo-600 hover:ease-in hover:transition">Home</a>
                    <a href="Estimate.php" target="_self" class="p-3 text-black duration-700 ease-out rounded-md hover:duration-500 hover:text-white hover:bg-black hover:ease-in hover:transition">Build Your Dream&nbsp;<i class="fa-solid fa-arrow-right fa-shake"></i></a>
                    <a href="#" target="_self" class="p-3 text-black duration-700 ease-out rounded-md hover:duration-500 hover:text-white hover:bg-indigo-600 hover:ease-in hover:transition">Our Services</a>
                    <a href="#" target="_self" class="p-3 text-black duration-700 ease-out rounded-md hover:duration-500 hover:text-white hover:bg-indigo-600 hover:ease-in hover:transition">Our Projects</a>
                    <a href="#" target="_self" class="p-3 text-black duration-700 ease-out rounded-md hover:duration-500 hover:text-white hover:bg-indigo-600 hover:ease-in hover:transition">About Us</a>
                    <a href="ContactUs.php" target="_self" class="p-3 text-black duration-700 ease-out rounded-md hover:duration-500 hover:text-white hover:bg-indigo-600 hover:ease-in hover:transition">Contact Us</a>

                  </div>

                </div>

                <!-- dropdowncontent -->
              
              </div>

            </a>

            <!-- dropdown -->

          </ul>

        </div>

        <!-- navbarcontent -->

      </div>
      
      <!-- content -->

    </div>

    <script src="tailwind.js"></script>

  </body>

</html>