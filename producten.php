<?php
require_once 'connection.php';

$sql = "Select * FROM product";
$all_product = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="producten.css">
</head>
<body>
  <?php
while($row = mysqli_fetch_assoc($all_product)){
?>
    <!-- header aka menubar -->
    <header>
        <img style="background-color: white; border-radius: 100px" class="logo" src="images/logo.png" alt="logo">


        <div class="search-container">
            <input id="searchInput" style="height: 40px;width: 20rem" type="text" class="input" placeholder="Zoeken...">
            <input type="image" src= "images/search.png" height="15px" width="15px" alt="submit">
        </div>

        <nav class="navbar">
            <ul class="nav_links">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><i class="fa-regular fa-user"></i><a href="#"> Account</a> </li>
            </ul>
        </nav>

      <i style="background-color: white;padding: 10px 15px;border-radius: 10px"  class="fa-solid fa-cart-shopping"></i>
    </header>
    <nav class="menu-bar">
      <button class="menu-btn" data-category="all">All</button>
      <button class="menu-btn" data-category="Laptop">Laptops</button>
      <button class="menu-btn" data-category="PC">PCs</button>
      <button class="menu-btn" data-category="display">Accessories</button>
    </nav>

   <!-- producten -->
      <section class="ProductSection">

 <!-- product box 1 -->
<div class="productbox">

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
    <span>Laptop</span>
  </div>
  <!-- Title -->
  <a href="#" class="product-title">
    loserPad_1 (AMD)
  </a>
  <!-- price -->
  <div class="price-buy">
    <span class="p-price">1200$</span>
    <a href="#" class="p-buy-btn">Buy Now</a>
  </div>
    <!-- Description -->
    <div class="description">
      Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    </div>
 </div>
</div>




<!-- ===============another row============ -->



<!-- ===============another row============ -->


<?php
};
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
<script>
  // Search function for all the products

  // Get all product boxes
const productBoxes = document.querySelectorAll('.productbox');

// Function to handle the search
function handleSearch() {
  const searchValue = document.getElementById('searchInput').value.toLowerCase();

  productBoxes.forEach((box) => {
    const title = box.querySelector('.product-title').textContent.toLowerCase();
    if (title.includes(searchValue)) {
      box.style.display = 'block'; // Show the matching product
    } else {
      box.style.display = 'none'; // Hide non-matching products
    }
  });
}
// Event listener for the input event (typing in the search bar)
document.getElementById('searchInput').addEventListener('input', handleSearch);


// Filter function by category

// Function to handle filtering based on the selected category
function filterProducts(category) {
  const productBoxes = document.querySelectorAll('.productbox');
  
  productBoxes.forEach((box) => {
    const productCategory = box.querySelector('.product-category span').textContent;

    if (category === 'all' || productCategory === category) {
      box.style.display = 'block'; // Show the matching product
    } else {
      box.style.display = 'none'; // Hide non-matching products
    }
  });
}

// Event listener for menu button clicks
document.querySelectorAll('.menu-btn').forEach((button) => {
  button.addEventListener('click', function () {
    const selectedCategory = this.getAttribute('data-category');
    filterProducts(selectedCategory);
  });
});

// Initially display all products
filterProducts('all');

</script>
</html>