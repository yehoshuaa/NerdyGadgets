<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="producten.css">
</head>
<!-- Makes the connection to the database and pulls the data from it -->
<?php
require 'connection.php';

$sql = "Select * FROM product";
$sqlProduct = "Select DISTINCT category FROM product";
$sqlPrice = "Select price FROM product";

$all_category= $conn->query($sqlProduct);
$all_product = $conn->query($sql);
$all_price = $conn ->query($sqlPrice);

?>
<body>

<header>
        <img style="background-color: white; border-radius: 100px" class="logo" src="images/logo.png" alt="logo">


        <div class="search-container">
            <input id="searchInput" style="height: 40px;width: 20rem" type="text" class="input" placeholder="Zoeken...">
            <input type="image" src= "images/search.png" height="15px" width="15px" alt="submit">
        </div>

        <button id="slideBtn" class="slide-btn">Slide Menu</button>
        <div id="menu" class="slide-menu">
    <?php 
    while ($options = mysqli_fetch_assoc($all_category)) {
        echo '<label><input type="checkbox" class="category-filter" name="category[]" value="' . $options['category'] . '"><span class="category-label">' . $options['category'] . '</span></label><br>';
    }
    ?>

<button id="sort-highest-btn">Sort by Highest Price</button>
<button id="sort-lowest-btn">Sort by Lowest Price</button>

    </div>

        <nav class="navbar">
            <ul class="nav_links">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><i class="fa-regular fa-user"></i><a href="#"> Account</a> </li>  
        </nav>

      <i style="background-color: white;padding: 10px 15px;border-radius: 10px"  class="fa-solid fa-cart-shopping"></i>

      
    </header>


    <?php
while ($row = mysqli_fetch_assoc($all_product)) {
    ?>
    <!-- header aka menubar -->
    <!-- producten -->
    <section class="ProductSection">
        <!-- product box -->
        <div class="productbox <?php echo $row['category']; ?>">
            <!-- Product Image -->
            <div class="p-img-container">
                <div class="p-img">
                    <a href="#">
                        <img src="http://via.placeholder.com/220x220" alt="Front">
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
    <?php
}
?>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// filter op category
$(document).ready(function() {
        // Function to filter products based on selected categories
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
    
    // ... Rest of your existing JavaScript code ...

});

</script>
</html>