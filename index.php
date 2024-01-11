<?php
session_start();
//$_SESSION['cart'] = [];
//var_dump($_SESSION['cart']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- site css -->
    <link rel="stylesheet" href="CSS/index.css">
    <!-- glider css -->
    <link rel="stylesheet" href="CSS/glider.min.css">
    <script src="https://kit.fontawesome.com/2a92e0944c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d8635543be.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>NerdyGadgets</title>
</head>
<body>
<!--<header>-->
<!--    <img style="background-color: white;margin-bottom: -10px;border-radius: 100px" class="logo" src="https://cdn.discordapp.com/attachments/1153666965139894324/1163753201762324530/yalloooo.png?ex=6540b8a0&is=652e43a0&hm=341ef536f5ef415bf4e36f391d4e8212398d3143e611b8af6b22c1169b66f21c&" alt="logo">-->
<!---->
<!---->
<!--    <div class="search-container">-->
<!--        <input style="height: 40px;width: 20rem" type="text" class="input" placeholder="Zoeken...">-->
<!--        <input type="image" src= "images/search.png" height="15px" width="15px" alt="submit">-->
<!--    </div>-->
<!--    <nav class="navbar">-->
<!--        <ul class="nav_links">-->
<!--            <li><a href=productdetails.php"></a></li>-->
<!--            <li><a href=productdetails.php"></a></li>-->
<!--            <li><i class="fa-regular fa-user"></i><a href=productdetails.php"> Account</a> </li>-->
<!--        </ul>-->
<!--    </nav>-->
<!---->
<!--    <i style="background-color: white;padding: 10px 15px;border-radius: 10px"  class="fa-solid fa-cart-shopping"></i>-->
<!---->
<!---->
<!---->
<!---->
<!--</header>-->

<header>
    <nav class="bg-[#36454f] border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/index.php" class="flex items-center">
                <img src="images/nerdygadgetslogo.png" width="229px" height="166.05" alt="NerdyGadgets logo" />
            </a>
            <div class="flex items-center lg:order-2">
                <?php if (!isset($_SESSION['id'])){?>
                    <a href="PHP/login_handling/login.php" class="text-gray-800 text-white hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Log in</a>
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
                        <a href="PHP/productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="PHP/catalog/producten.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Catalogus</a>
                    </li>
                    <li>
                        <a href="PHP/productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Marketplace</a>
                    </li>
                    <li>
                        <a href="PHP/productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Features</a>
                    </li>
                    <li>
                        <a href="PHP/productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Team</a>
                    </li>
                    <li>
                        <a href="PHP/productdetails/productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Contact</a>
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

<!-- Hero -->
<div class="m-10 p-5 mx-auto bg-image rounded-3" style="
    background-image: url('images/Banner.webp');
    height: 300px;
    width: 1300px;
  ">
</div>
<!-- Hero -->

<!-- product slider -->
<section class="p-slider">

    <!-- Heading -->
    <h3 class="product-slider-heading">Aanbevolen producten</h3>


    <div class="glider-contain">
        <div class="glider">

            <!----------- start of row ------------->

            <!-- first product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- second product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- third product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- fourth product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- fifth product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>

            <!----------- another row ------------->

            <!-- first product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- second product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- third product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- fourth product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- fifth product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>

            <!----------- another row ------------->

            <!-- first product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- second product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- third product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- fourth product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>
            <!-- fifth product box -->
            <div class="product-box">
                <!-- Discount -->
                <span class="p-discount"> 20%</span>

                <!-- Product Image -->
                <div class="p-img-container">
                    <div class="p-img">
                        <a href="PHP/productdetails/productdetails.php">
                            <img src="https://placehold.co/220x220" alt="Front">
                        </a>
                    </div>
                </div>

                <!-- product text -->
                <div class="p-box-text">

                    <!-- product category -->
                    <div class="producyt-category">
                        <span>Laptop</span>
                    </div>
                    <!-- Title -->
                    <a href="PHP/productdetails/productdetails.php" class="product-title">
                        ThinkPad_T14s Gen_2 (Intel)
                    </a>

                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price">1200$</span>
                        <a href="PHP/productdetails/productdetails.php" class="p-buy-btn">Buy Now</a>
                    </div>

                </div>


            </div>

        </div>

        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>








</section>

<div>
    <div class="relative bg-cover bg-center h-32 md:h-64 my-10" style="background-image: url('images/retrobanner.png');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center text-white">
            <div class="max-w-md mx-auto text-center">
                <div class="text-3xl md:text-4xl font-bold leading-tight">
                    "Geweldige klantenservice en de gadgets zijn super nerdy!"
                </div>
                <div class="text-xl mt-4">
                    ★★★★★
                </div>
                <div class="text-lg mt-2">- Joop</div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<footer class="bg-[#4666ff]">
    <div class="mx-auto w-full max-w-screen-xl">
        <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Company</h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class=" hover:underline">About</a>
                    </li>
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Careers</a>
                    </li>
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Brand Center</a>
                    </li>
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase ">Help center</h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Discord Server</a>
                    </li>
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Twitter</a>
                    </li>
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Facebook</a>
                    </li>
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Legal</h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Licensing</a>
                    </li>
                    <li class="mb-4">
                        <a href="PHP/productdetails/productdetails.php" class="hover:underline">Terms &amp; Conditions</a>
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



                    <li><i class="fab fa-cc-visa text-2xl text-white"></i></li>
                    <li><i class="fab fa-cc-mastercard text-2xl text-white"></i></li>
                    <li><i class="fab fa-cc-paypal text-2xl text-white"></i></li>
                    <li><i class="fab fa-cc-amex text-2xl text-white"></i></li>


            </div>
        </div>
    </div>
</footer>




        <!-- glider js -->
        <script src="JS/glider.min.js"></script>
        <!-- glider script -->
        <script>
            new Glider(document.querySelector('.glider'), {
                slidesToShow: 5,
                slidesToScroll: 5,
                draggable: true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                }
            });
        </script>

</body>
</html>