<?php
session_start()?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- site css -->
    <link rel="stylesheet" href="../../CSS/index.css">
    <!-- glider css -->
    <link rel="stylesheet" href="../../CSS/glider.min.css">
    <script src="https://kit.fontawesome.com/2a92e0944c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d8635543be.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>NerdyGadgets</title>
</head>

<body>
<header>
    <nav class="bg-[#36454f] border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/home" class="flex items-center">
                <img src="../../images/nerdygadgetslogo.png" width="229px" height="166.05" alt="NerdyGadgets logo" />
            </a>
            <div class="flex items-center lg:order-2">
                <?php if (!isset($_SESSION['id'])){?>
                    <a href="login.php" class="text-gray-800 text-white hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Log in</a>
                <?php }else{?>
                    <i class="cursor-pointer py-3 px-3.5 mr-3 rounded-lg text-white fa-regular fa-user hover:text-black hover:bg-white"></i>
                <?php }?>
                <i class="cursor-pointer py-3 px-3 bg-white rounded-lg fa-solid fa-cart-shopping hover:bg-gray-600 hover:text-white"></i>

                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="../productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="../productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Company</a>
                    </li>
                    <li>
                        <a href="../productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Marketplace</a>
                    </li>
                    <li>
                        <a href="../productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Features</a>
                    </li>
                    <li>
                        <a href="../productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Team</a>
                    </li>
                    <li>
                        <a href="../productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Contact</a>
                    </li>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="h-5 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!--Body-->

<section class="bg-gray-50 my-44">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Registreer
                </h1>

                <form class="space-y-4 md:space-y-6" action="loginhandler.php" method="POST">

<!--                    First name-->
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Voornaam</label>
                        <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Voornaam" required">
                    </div>

<!--                    Prefix-->
                    <div>
                        <label for="prefix" class="block mb-2 text-sm font-medium text-gray-900">Tussenvoegsel</label>
                        <input type="text" name="prefix" id="prefix" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Tussenvoegsel">
                    </div>

<!--                    Surname-->
                    <div>
                        <label for="surname" class="block mb-2 text-sm font-medium text-gray-900">Achternaam</label>
                        <input type="text" name="surname" id="surname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Achternaam" required>
                    </div>


<!--                    Email-->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Email" required="">
                    </div>

<!--                    Password-->
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Wachtwoord</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                    </div>
                    <input hidden name="type" value="registreer">

                    <hr>

<!--                                        Address-->
<!--                                        Housenumber-->
                    <div class="inline-block">
                        <label for="housenr" class="block mb-2 text-sm font-medium text-gray-900">Huisnummer</label>
                        <input type="text" name="housenr" id="housenr" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Huisnummer" required>
                    </div>

                    <!--                    Postalcode-->
                    <div class="inline-block">
                        <label for="postalcode" class="block mb-2 text-sm font-medium text-gray-900">Postcode</label>
                        <input type="text" name="postalcode" id="postalcode" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Postcode" required>
                    </div>


                    <!--                    Street-->
                    <div>
                        <label for="street" class="block mb-2 text-sm font-medium text-gray-900">Straat</label>
                        <input type="text" name="street" id="street" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Street" required>
                    </div>

                    <!--                    City-->
                    <div>
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900">Stad</label>
                        <input type="text" name="city" id="city" placeholder="Stad" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                    </div>

<!--                    Submit button-->
                    <button type="submit" class="w-full text-white bg-[#4666ff] hover:bg-[#4666ff] focus:ring-4 focus:outline-none focus:ring-[#4666ff] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Registreren</button>
                    <p class="text-sm font-light text-gray-500">
                        Heb je al een account? <a href="login.php" class="font-medium text-primary-600 hover:underline">Log in</a>
                    </p>


                </form>

            </div>
        </div>
    </div>
</section>



<!-- Footer -->

<footer class="bg-[#4666ff]">
    <div class="mx-auto w-full max-w-screen-xl">
        <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Company</h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class=" hover:underline">About</a>
                    </li>
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Careers</a>
                    </li>
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Brand Center</a>
                    </li>
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase ">Help center</h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Discord Server</a>
                    </li>
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Twitter</a>
                    </li>
                    <li class="mb-4">
                        <a href="https://youtu.be/dQw4w9WgXcQ?si=-cwfb1cj22BDMmTx" class="hover:underline">Facebook</a>
                    </li>
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Legal</h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Licensing</a>
                    </li>
                    <li class="mb-4">
                        <a href="../productdetails/productdetails.php" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Contact</h2>

                <p class="text-white text-center -ml-52"><b>NerdyGadgets B.V.</b><br>
                    Hospitaaldreef 5<br>
                    1312 RC Almere
                </p>



            </div>
        </div>
        <hr>
        <div class="px-4 py-6  md:flex md:items-center md:justify-between">
        <span class="text-sm text-white sm:text-center">© 2023 <a href="https://flowbite.com/">NerdyGadgets</a>.
        </span>
            <p class="text-white font-normal text-center">Voor 17:00 besteld morgen in huis!</p>
            <div class="flex mt-4 inline space-x-5 list-none  sm:justify-center md:mt-0">



                <li><button onclick="sound()"><i class="fab fa-cc-visa text-2xl text-white"></i></button></li>
                <li><button onclick="sound()"><i class="fab fa-cc-mastercard text-2xl text-white"></button></i></li>
                <li><button onclick="sound()"><i class="fab fa-cc-paypal text-2xl text-white"></i></button></li>
                <li><button onclick="sound()"><i class="fab fa-cc-amex text-2xl text-white"></i></button></li>



            </div>
        </div>
    </div>
</footer>

</body>
<script>
    function sound(){
        var snd = new Audio('EasterEgg_Files/Cash_sound.mp3')//wav is also supported
        snd.play()//plays the sound
    }
</script>


</html>