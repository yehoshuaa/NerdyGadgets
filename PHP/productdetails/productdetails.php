<?php
session_start();

// Create connection
$conn = new mysqli('localhost', 'root', '', 'nerdy_gadgets_start');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$productId = $_GET['id'];

$result = null;
if (mysqli_fetch_assoc($conn->query("SELECT * FROM product WHERE id = '{$productId}'"))){
    $result = mysqli_fetch_assoc($conn->query("SELECT * FROM product WHERE id = '{$productId}'"));
    $image = $result['image'];
}else{
    echo 'Product niet gevonden';
    exit();
};


//Fetch reviews
if ($conn->query("SELECT * FROM review WHERE productID = '{$productId}'")->fetch_all(MYSQLI_ASSOC)){

    $reviewResult = $conn->query("SELECT * FROM review WHERE productID = '{$productId}'")->fetch_all(MYSQLI_ASSOC);
    $reviews = [];

    foreach ($reviewResult as $review){

        $reviews[] = json_decode($review['review']);

    }
}



//print("<pre>".print_r($reviews,true)."</pre>");

//exit();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/index.css">
    <link rel="stylesheet" href="../../CSS/productdt.css">
    <script src="https://kit.fontawesome.com/2a92e0944c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d8635543be.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com/3.3.5"></script>
</head>
<style>

</style>
<body>

<header>
    <nav class="bg-[#36454f] border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/index.php" class="flex items-center">
                <img src="../../images/nerdygadgetslogo.png" width="229px" height="166.05" alt="NerdyGadgets logo" />
            </a>
            <div class="flex items-center lg:order-2">
                <?php if (!isset($_SESSION['id'])){?>
                    <a href="/PHP/login_handling/login.php" class="text-gray-800 text-white hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Log in</a>
                <?php }else{?>
                    <i class="cursor-pointer py-3 px-3.5 mr-3 rounded-lg text-white fa-regular fa-user hover:text-black hover:bg-white"></i>
                <?php }?>

                <a href="/PHP/shoppingcart/shoppingCart.php">
                    <i class="cursor-pointer py-3 px-3 bg-white rounded-lg fa-solid fa-cart-shopping hover:bg-gray-600 hover:text-white"></i>
                </a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/index.php" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/PHP/catalog/producten.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Catalogus</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!--End header-->
<div class="wrapper">

    <div id="imageContainer" class="relative h-64 w-full max-w-1/4">
        <img
                class="absolute top-0 left-0 w-full h-full object-contain"
                src="../../product_images/<?php echo $image;?>.jpg"
                alt="Your Image Alt Text"
                id="image"
        />
    </div>

<!--    Resizes the product image to fit the imagecontainer-->
    <script>
        const imageContainer = document.getElementById('imageContainer');
        const image = document.getElementById('image');

        // Set the desired width
        const desiredWidth = 1200;

        // Calculate the required height to maintain the aspect ratio
        const aspectRatio = image.width / image.height;
        const desiredHeight = Math.round(desiredWidth / aspectRatio);

        // Apply the height to the container
        imageContainer.style.height = `${desiredHeight}px`;
    </script>

    <div class="w-3/4">
        <h3 class="font-bold"><?php echo $result['name']?></h3>

        <form>

            <input hidden name="id" value="<?php echo $productId;?>">

            <div class="mt-4">
                <label>Aantal:</label>
                <input type="number" name="amount" value="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-1/4 p-2.5">
            </div>


            <hr style="margin-top: 5%;margin-bottom: 5%">

            <button onclick="<?php
            if (!isset($_SESSION['cart'][$productId]) && isset($_GET['amount'])){
                $_SESSION['cart'][$productId] = $_GET['amount'];
            }
            ?>" class="add-to-cart-button">
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

            <?php echo str_replace('"', '',$result['description']);?>

        </p>
    </div>


    <div>

        <h3 class="font-bold text-lg">Aanbevolen</h3>

        <div class="recommended">


            <div class="p-3" style="box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);"><img class="rec-img" src="../../product_images/gVJY2kP9wWvl.jpg">
                <h4>Productnaam</h4>
                    <b style="float: right">$500,-</b>
            </div>
            <div class="p-3" style="box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);"><img class="rec-img" src="../../product_images/J1V42Jmq7xOg.jpg">
                <h4>Productnaam</h4>
                <b style="float: right">$500,-</b>
            </div>
            <div class="p-3" style="box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);"><img class="rec-img" src="../../product_images/J13NW3yoozmy.jpg">
                <h4>Productnaam</h4>
                <b style="float: right">$500,-</b>
            </div>
            <div class="p-3" style="box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);"><img class="rec-img" src="../../product_images/j84KpqMW4Rlv.jpg">
                <h4>Productnaam</h4>
                <b style="float: right">$500,-</b>
            </div>


        </div>
    </div>

</div>


<h2 class="font-bold text-lg" style="text-align: left;margin: 5% 10% 0% 10%;">Reviews</h2>

<form action="reviewHandler.php" method="POST" style="text-align: left;margin: 5% 10% 0% 10%;">

    <input hidden value="<?php echo $_GET['id'] ?>" name="productID">

    <label><b>Naam:</b>
    <input required style="border: 2px solid #ccc;border-radius: 4px;
    padding: 12px 20px;display: block;border: #3498db 1px" name="name"></label>

    <label><b>Wat vond u van het product op een schaal van 1 tot 5?</b>
    <select required style="border: 2px solid #ccc;border-radius: 4px;
  padding: 12px 20px;display: block" name="rating">
        <option value="none">Kies rating</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    </label>

    <label style="margin-top: 10px"><b>Bericht:</b>
        <textarea required style="  border: 2px solid #ccc;border-radius: 4px;padding: 12px 20px;display: block;width: 30%;" name="message"></textarea>
    </label>

    <button style="margin-top: 10px;border: 2px solid #ccc;border-radius: 4px;
  padding: 12px 20px;background-color: #3498db; color: white" type="submit">Plaats review</button>

</form>
<div class="reviews">

    <?php if (isset($reviews)){
        foreach ($reviews as $review){
        ?>



    <div class="review">
        <div class="rating"><?php echo str_replace('u2605', '★', $review->rating) ?></div>
        <div class="username"><?php echo $review->name ?></div>
        <div class="review-text"><?php echo $review->message ?></div>
    </div>

    <?php }}?>

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
                        <a href="https://youtu.be/dQw4w9WgXcQ?si=-cwfb1cj22BDMmTx" class="hover:underline">Facebook</a>
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
        var snd = new Audio('/EasterEgg_Files/Cash_sound.mp3')//wav is also supported
        snd.play()//plays the sound
    }


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