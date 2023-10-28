<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/productdt.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/2a92e0944c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d8635543be.js" crossorigin="anonymous"></script>
</head>
<style>

</style>
<body>
<header>
    <nav class="bg-[#36454f] border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/home" class="flex items-center">
                <img src="images/nerdygadgetslogo.png" width="229px" height="166.05" alt="NerdyGadgets logo" />
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#" class="text-gray-800 text-white hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Log in</a>
                <i class="cursor-pointer py-3 px-3 bg-white rounded-lg fa-solid fa-cart-shopping"></i>

                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Company</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Marketplace</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Features</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Team</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Contact</a>
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
<!--End header-->
<div class="wrapper">

    <div class="slider-container">
        <div class="image-gallery">
            <img src="images/laptop1.jpg" alt="Image 1">
            <img src="images/laptop2.jpg" alt="Image 2">
            <img src="images/laptop3.jpg" alt="Image 3">
            <!-- Add more images as needed -->
        </div>
        <div class="main-image-container">
            <div class="nav-buttons">
                <button id="prevButton" onclick="prevImage()">&#10094;</button>
                <button id="nextButton" onclick="nextImage()">&#10095;</button>
            </div>
            <img src="images/laptop1.jpg" alt="Main Image" class="main-image" id="mainImage">
        </div>
    </div>

    <div class="prdctdesc">
        <h3 class="font-bold">Leuke laptop</h3>

        <form>

            <div>
                <label>Kies je kleur:</label>
                <select class="select h-10 w-24" name="languages" id="lang">
                    <option value="Rood">Rood</option>
                    <option value="Blauw">Blauw</option>
                    <option value="Geel">Geel</option>
                </select>
            </div>

            <hr style="margin-top: 5%;margin-bottom: 5%">

            <button class="add-to-cart-button">
                <span class="cart-icon"></span>
                Toevoegen aan winkelwagen
            </button>
        </form>

    </div>




</div>
<div class="productdetails">

    <div style="width: 100%">
        <h3 class="font-bold text-lg">Productbeschrijving</h3>
        <br>
        <p style="font-weight: normal">

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vestibulum libero vitae nibh faucibus suscipit eu imperdiet justo. Vivamus posuere tellus metus, eu fermentum turpis gravida in. Nunc lacinia odio et egestas porttitor. Integer nisi purus, posuere vitae faucibus in, posuere quis quam. Maecenas dapibus eros at commodo aliquam. Integer nec nunc lobortis, lacinia ipsum at, luctus est. Etiam auctor quis metus feugiat rutrum.
            <br><br>
            Sed semper tortor neque, at feugiat leo luctus non. Nulla ut pharetra mi. Nam at libero porttitor, condimentum arcu a, mollis eros. Quisque fringilla non ante non cursus. Pellentesque et mattis ipsum, nec placerat enim. Nulla ultrices turpis eget leo suscipit mattis. Morbi pharetra feugiat massa et porta. Duis finibus vehicula sapien at vulputate. Morbi sagittis aliquet aliquet. In id porta mi, at dictum nibh. Maecenas efficitur sollicitudin lacus ac vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas a vestibulum leo.

        </p>
    </div>


    <div>

        <h3 class="font-bold text-lg">Aanbevolen</h3>

        <div class="recommended">


            <div class="p-3" style="box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);"><img class="rec-img" src="images/laptop1.jpg">
                <h4>Productnaam</h4>
                    <b style="float: right">$500,-</b>
            </div>
            <div class="p-3" style="box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);"><img class="rec-img" src="images/laptop1.jpg">
                <h4>Productnaam</h4>
                <b style="float: right">$500,-</b>
            </div>
            <div class="p-3" style="box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);"><img class="rec-img" src="images/laptop1.jpg">
                <h4>Productnaam</h4>
                <b style="float: right">$500,-</b>
            </div>
            <div class="p-3" style="box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);"><img class="rec-img" src="images/laptop1.jpg">
                <h4>Productnaam</h4>
                <b style="float: right">$500,-</b>
            </div>


        </div>
    </div>

</div>


<h2 class="font-bold text-lg" style="text-align: left;margin: 5% 10% 0% 10%;">Reviews</h2>
<div class="reviews">

    <div class="review">
        <div class="rating">★★★★★</div>
        <div class="username">Placeholder</div>
        <div class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod ante in congue cursus.</div>
    </div>
    <div class="review">
        <div class="rating">★★★★★</div>
        <div class="username">Placeholder</div>
        <div class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod ante in congue cursus.</div>
    </div>
    <div class="review">
        <div class="rating">★★★★★</div>
        <div class="username">Placeholder</div>
        <div class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod ante in congue cursus.</div>
    </div>
    <div class="review">
        <div class="rating">★★★★★</div>
        <div class="username">Placeholder</div>
        <div class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod ante in congue cursus.</div>
    </div>
    <div class="review">
        <div class="rating">★★★★★</div>
        <div class="username">Placeholder</div>
        <div class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod ante in congue cursus.</div>
    </div>
    <div class="review">
        <div class="rating">★★★★★</div>
        <div class="username">Placeholder</div>
        <div class="review-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod ante in congue cursus.</div>
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
                        <a href="#" class=" hover:underline">About</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Careers</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Brand Center</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Blog</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase ">Help center</h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Discord Server</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Twitter</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Facebook</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-white uppercase">Legal</h2>
                <ul class="text-white font-medium">
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Licensing</a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="hover:underline">Terms &amp; Conditions</a>
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


</body>
<script>
    const mainImage = document.getElementById('mainImage');
    const galleryImages = document.querySelectorAll('.image-gallery img');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    let currentIndex = 0;

    function showImage(index) {
        mainImage.src = galleryImages[index].src;
        currentIndex = index;
        updateNavButtons();
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        showImage(currentIndex);
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        showImage(currentIndex);
    }

    function updateNavButtons() {
        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex === galleryImages.length - 1;
    }

    showImage(currentIndex);
</script>