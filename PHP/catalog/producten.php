<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="producten.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://kit.fontawesome.com/2a92e0944c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d8635543be.js" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com/3.3.5"></script>
</head>
<!-- Makes the connection to the database and pulls the data from it -->
<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'nerdy_gadgets_start');

$sql = "Select * FROM product";
$sqlProduct = "Select DISTINCT category FROM product";
$sqlPrice = "Select price FROM product";
$sqlImage ="select image From product";

$all_category= $conn->query($sqlProduct);
$all_product = $conn->query($sql);
$all_price = $conn ->query($sqlPrice);
$all_image = $conn ->query($sqlImage);
?>
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
                        <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Catalogus</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>

   
<div class="sidebar hidden" id="sidebar">
        <div id="sidemenu" class="side-menu">
         <?php
            while ($options = mysqli_fetch_assoc($all_category)) {
            echo '<label><input type="checkbox" class="category-filter" name="category[]" value="' . $options['category'] . '"><span class="category-label">' . $options['category'] . '</span></label><br>';
            }
            ?>
           <button id="sort-highest-btn">Sort by Highest Price</button>
           <button id="sort-lowest-btn">Sort by Lowest Price</button>

           <div id="price-slider"></div>
           <p>
             Min Price: <span id="minPrice"></span>
             Max Price: <span id="maxPrice"></span>
            </p>
        </div>
</div>

<div class="flex justify-center">
    <button style="text-align: center;font-size: xx-large" onclick="sidebarToggle()"><i class="fa-solid fa-filter"></i></button>
</div>
<script>
    // Sidebar toggle
    function sidebarToggle() {
        var x = document.getElementById("sidebar");
        x.classList.toggle("hidden");
    }
</script>
    
    <?php
    while ($row = mysqli_fetch_assoc($all_product)) {
        $id = $row['id'];
        ?>
        <div class="ProductSection">
        <!-- product box -->
        <div class="productbox <?php echo $row['category']; ?>">
            <div class="product-content">
                <!-- Product Image -->
                <div class="p-img">
                    <a href="#">
                        <img src="../../product_images/<?php echo $row['image']?>.jpg" alt="Front">
                    </a>
                </div>
                <!-- product text -->
                <div class="p-box-text">
                    <!-- product category -->
                    <div class="product-category">
                        <span><?php echo $row["category"] ?></span>
                    </div>
                    <!-- Title -->
                    <a href="#" class="product-title">
                        <?php echo strlen($row["name"]) > 30 ? substr($row["name"], 0, 30) . '...' : $row["name"]; ?>
                    </a>
                    <!-- price -->
                    <div class="price-buy">
                        <span class="p-price"><?php echo $row["price"] ?></span>
                        <div class="button-container">
                           <a href="/PHP/productdetails/productdetails.php?id=<?php echo $id;?>&amount=1" class="p-buy-btn">Buy Now</a>
                         </div>
                    </div>
                    <!-- Description -->
                    <div class="description">
                        <?php echo strlen($row["description"]) > 320 ? substr($row["description"], 0, 320) . '...' : $row["description"]; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>


<!-- footer -->
<footer class="bg-[#4666ff]" style="width: 100%;">
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
    function sound(){
        var snd = new Audio('EasterEgg_Files/Cash_sound.mp3')//wav is also supported
        snd.play()//plays the sound
    }
// filter op category
$(document).ready(function() {
        //filter products based on selected categories
        function filterProducts() {
            var selectedCategories = [];
            // Get all checked checkboxes
            $('.category-filter:checked').each(function() {
                selectedCategories.push($(this).val());
            });

            // Show all products if no categories are selected
            if (selectedCategories.length === 0) {
                $('.productbox').show();
            } else {
                // Hide all products initially
                $('.productbox').hide();

                // Show products that belong to selected categories
                selectedCategories.forEach(function(category) {
                    $('.' + category).show();
                });
            }
        }

        // Call filter function when checkboxes change
        $('.category-filter').change(filterProducts);
    });



        document.addEventListener('DOMContentLoaded', function() {
            var slideBtn = document.getElementById('slideBtn');
            var menu = document.getElementById('menu');

            slideBtn.addEventListener('click', function() {
                // Toggle the menu visibility on button click
                var menuStyle = window.getComputedStyle(menu);
                var menuLeft = menuStyle.getPropertyValue('left');

                if (menuLeft === '-400px') {
                    menu.style.left = '0';
                } else {
                    menu.style.left = '-400px';
                }
            });
        });


// highest lowest sort functie
        $(document).ready(function() {
    var productsContainer = $('.ProductSection');
    var products = $('.productbox').get();

    // Function to sort products by price in ascending order
    function sortByLowestPrice() {
        products.sort(function(a, b) {
            var priceA = parseFloat($(a).find('.p-price').text());
            var priceB = parseFloat($(b).find('.p-price').text());
            return priceA - priceB;
        });

        // Re-append sorted products to the container
        productsContainer.empty();
        $(products).each(function() {
            productsContainer.append(this);
        });
    }

    // Function to sort products by price in descending order
    function sortByHighestPrice() {
        products.sort(function(a, b) {
            var priceA = parseFloat($(a).find('.p-price').text());
            var priceB = parseFloat($(b).find('.p-price').text());
            return priceB - priceA;
        });

        // Re-append sorted products to the container
        productsContainer.empty();
        $(products).each(function() {
            productsContainer.append(this);
        });
    }

    // Event listeners for sorting buttons
    $('#sort-highest-btn').click(function() {
        sortByHighestPrice();
    });

    $('#sort-lowest-btn').click(function() {
        sortByLowestPrice();
    });
});
        

// searchbar functie
$(document).ready(function() {
    function filterSearch() {
        var searchTerm = $('#default-search').val().toLowerCase(); 
        var products = $('.productbox');

        products.each(function() {
            var productName = $(this).find('.product-title').text().toLowerCase();
            if (productName.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
    $('#default-search').on('input', filterSearch); 
});


// Price slider
$(document).ready(function() {
    var products = $('.productbox');

    // Get min and max prices
    var minPrice = parseFloat($('.p-price').first().text());
    var maxPrice = parseFloat($('.p-price').first().text());
    $('.p-price').each(function() {
      var price = parseFloat($(this).text());
      if (price < minPrice) {
        minPrice = price;
      }
      if (price > maxPrice) {
        maxPrice = price;
      }
    });

    // Initialize price slider
    $('#price-slider').slider({
      range: true,
      min: minPrice,
      max: maxPrice,
      values: [minPrice, maxPrice],
      slide: function(event, ui) {
        $('#minPrice').text(ui.values[0]);
        $('#maxPrice').text(ui.values[1]);

        // Filter products based on the price range
        var min = ui.values[0];
        var max = ui.values[1];
        products.each(function() {
          var price = parseFloat($(this).find('.p-price').text());
          if (price >= min && price <= max) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
      }
    });

    // Set initial price values
    $('#minPrice').text(minPrice);
    $('#maxPrice').text(maxPrice);
  });
</script>
</html>