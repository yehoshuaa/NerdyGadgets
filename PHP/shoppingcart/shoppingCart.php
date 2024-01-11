<?php
                session_start();
/*$_SESSION['cart'] = [
    1 => 5,
    3 => 5,
    4 => 5
];*/
if(isset($_SESSION['cart'])){

$items = $_SESSION['cart'];
$ids = array_keys($items);
$ids = implode(', ',$ids);

$conn = new mysqli('localhost', 'root', '', 'nerdy_gadgets_start');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM product WHERE id IN ({$ids});");

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

}
//var_dump($data);exit();
?>
<!DOCTYPE html>
<html>
<head>

    <title>Shopping Cart UI</title>

    <link rel="stylesheet" type="text/css" href="/CSS/shoppingCart.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Orbitron&display=swap" rel="stylesheet">

</head>
<body>

<!--navbar-->
<!--<header>-->
<!--    <nav class="bg-[#36454f] border-gray-200 px-4 lg:px-6 py-2.5">-->
<!--        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">-->
<!--            <a href="/home" class="flex items-center">-->
<!--                <img src="images/nerdygadgetslogo.png" width="229px" height="166.05" alt="NerdyGadgets logo" />-->
<!--            </a>-->
<!--            <div class="flex items-center lg:order-2">-->
<!--                <a href="productdetails.php" class="text-gray-800 text-white hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Log in</a>-->
<!--                <i class="cursor-pointer py-3 px-3 bg-white rounded-lg fa-solid fa-cart-shopping"></i>-->
<!---->
<!--                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">-->
<!--                    <span class="sr-only">Open main menu</span>-->
<!--                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>-->
<!--                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>-->
<!--                </button>-->
<!--            </div>-->
<!--            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">-->
<!--                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">-->
<!--                    <li>-->
<!--                        <a href="productdetails.php" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Company</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Marketplace</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Features</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Team</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="productdetails.php" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0">Contact</a>-->
<!--                    </li>-->
<!--                    <div class="relative">-->
<!--                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">-->
<!--                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">-->
<!--                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <input type="search" id="default-search" class="h-5 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Mockups, Logos..." required>-->
<!--                    </div>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
<!--</header>-->







<!--shopping cart-->
<div class="CartContainer">
    <button onclick="history.back()">Back</button>
    <div class="Header">
        <h3 class="Heading">Shopping Cart</h3>
        <button onclick="clearCartAndReload()" class="Action">Remove all</button>
    </div>



    <script>
        function clearCartAndReload() {
            // Use AJAX to send a request to the server to clear the cart
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "clear_cart.php", true);
            xhr.send();

            // Reload the page after a short delay (adjust the delay if needed)
            setTimeout(function () {
                location.reload();
            }, 500);
        }
    </script>


    <div class="productContainer">
        <?php
        if(isset($_SESSION['cart'])){
        $totalPrice = 0;
        foreach ($data as $product){
            $productName  = $product['name'];
            $productImage = $product['image'];
            $productPrice = $product['price'];
            $totalPrice += $productPrice;
            $amount = $items[$product['id']];
//            $productAmount = $items[$product['id']];
            ?>

            <div class="Cart-Items">
                <div class="image-box">
                    <img src="../../product_images/<?php echo $productImage;?>.jpg" style={{ height="150px" }} />
                </div>
                <div class="about">
                    <h1 style="font-size: 80%" class="title"><?php echo $productName;?>></h1>
                    <h3 class="subtitle">16 inch</h3>
                    <img src="../../product_images/<?php echo $productImage;?>.jpg" style={{ height="30px" }}/>
                </div>
                <div class="counter">
                    <button onclick="" class="btn">-</button>
                    <div class="count"><?php echo $amount;?></div>
                    <button onclick="" class="btn">+</button>
                </div>
                <div class="prices">
                    <div class="amount"><?php echo '€'.$productPrice?></div>
                    <button onclick="<?php /*unset($_SESSION['cart'][$product['id']]);*/ ?>" class="remove"><u>Remove</u></button>
                </div>
            </div>
        <?php } ?>
    </div>
    <hr>
    <div class="checkout">
        <div class="total">
            <div>
                <div class="Subtotal">Sub-Total</div>
                <div class="items"><?php echo count($items)?> items</div>
            </div>
            <div class="total-amount"><?php echo '€'.$totalPrice?></div>
        </div>
        <button class="button">Checkout</button></div>
    <?php }else{
            echo '<h3 style="text-align: center" class="subtitle">Winkelwagen is leeg</h3>';
    }?>
</div>
</body>
</html>