<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="producten.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://cdn.tailwindcss.com/3.3.5"></script>
</head>
<!-- Makes the connection to the database and pulls the data from it -->
<?php
require 'connection.php';

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
                <img src="../images/nerdygadgetslogo.png" width="229px" height="166.05" alt="NerdyGadgets logo" />
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

    <button id="slideBtn" class="slide-btn">Slide Menu</button>
        <div id="menu" class="slide-menu">
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

       
 
        </header>


    
    <section class="ProductSection">
    <?php
    while ($row = mysqli_fetch_assoc($all_product)) {
        ?>
        <!-- product box -->
        <div class="productbox <?php echo $row['category']; ?>">
            <!-- Product Image -->
            <div class="p-img-container">
                <div class="p-img">
                    <a href="#">
                        <img src="product_images/<?php echo $row['image']?>.jpg" alt="Front">
                    </a>
                </div>
            </div>

            <!-- product text -->
            <div class="p-box-text">
                <!-- product category -->
                <div class="product-category">
                    <span><?php echo $row["category"] ?></span>
                </div>
                <!-- Title -->
                <a href="#" class="product-title">
                    <?php echo strlen($row["name"]) > 22 ? substr($row["name"], 0, 22) . '...' : $row["name"]; ?>
                </a>
                <!-- price -->
                <div class="price-buy">
                    <span class="p-price"><?php echo $row["price"] ?></span>
                    <a href="#" class="p-buy-btn">Buy Now</a>
                </div>
                <!-- Description -->
                <div class="description">
                    <?php echo strlen($row["description"]) > 300 ? substr($row["description"], 0, 300) . '...' : $row["description"]; ?>
                </div>
            </div>
        </div>
        <?php } ?>
</section>

<!-- footer -->
<div class="footer">
  <div class="col-1">
      <h3> Informatie</h3>
      <a href="#">Home</a>
      <a href="#">Over ons</a>
      <a href="#">Contact</a>
      <a href="#">Retourneren</a>
      <a href="#">Voorwaarden</a>
      <a href="#">Blog</a>

  </div>
  <div class="col-2">
      <h3>Catergorieen</h3>
      <a href="#">Beeld & Geluid</a>
      <a href="#">Kabels</a>
      <a href="#">Losse artikelen</a>
      <a href="#">Sale</a>
      <a href="#">Telefonie</a>
      <a href="#">Navigatie</a>
  </div>
  <div class="col-3">
      <h3 align="right">Contact</h3>
      <p align="right"> Nerdy Gadgets</p>
      <p align="right">Hospitaaldreef 5</p>
      <p align="right">1312 RC Almere</p>
      <div class="social-icons">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-behance"></i>
          <!-- <p alligun="right"> © Nerdy Gadgets 2023</p> -->

      </div>
      <div class="test">
          <p align="right"> © Nerdy Gadgets 2023</p>
      </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
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
    // Function to filter products based on search input
    function filterSearch() {
        var searchTerm = $('#searchInput').val().toLowerCase();
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

    // Call filterSearch function when search input changes
    $('#searchInput').on('input', filterSearch);
    
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