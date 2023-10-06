<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/2a92e0944c.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d8635543be.js" crossorigin="anonymous"></script>
    <title>NerdyGadgets</title>
</head>
<body>
    <header>
        <img style="background-color: white; border-radius: 100px" class="logo" src="images/logo.png" alt="logo">


        <div class="search-container">
            <input style="height: 40px;width: 20rem" type="text" class="input" placeholder="Zoeken...">
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

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="color: white">Welkom bij NerdyGadgets</h1><br>
            <p style="color: white;text-align: center;font-style: italic" >Van nerds, voor nerds: NerdyGadgets, jouw gadgetparadijs</p><br>

            <p style="color: white;text-align: center;font-weight: normal">Van geavanceerde mechanische toetsenborden tot precisie gamingmuizen, NerdyGadgets
                is jouw bestemming voor de nieuwste en meest innovatieve elektronica. Laat je onderdompelen
                in een wereld van technologische wonderen en verander de manier waarop je speelt, werkt en creërt.</p>

            <button style="display: block; margin: 2rem auto auto auto;background-color: dodgerblue" class="btn catalogus">Catalogus</button>
        </div>
    </div>

    <!--De aanbevolen producten-->
    <div class="wrapper">

        <hr>
        <h1 style="margin-top: 20px;margin-bottom: 20px">Aanbevolen</h1>
        <hr>
        <div class="grid-container">

            <div class="grid-item"><img src="images/laptop1.jpg" height="230" width="230"/><p>Placeholder</p>
                <h2 class="price">$2300,-</h2>
            </div>

            <div class="grid-item"><img src="images/laptop2.jpg" height="230" width="230"/><p>Placeholder</p>
                <h2 class="price">$1200,-</h2></div>

            <div class="grid-item"><img src="images/laptop3.jpg" height="230" width="230"/><p>Placeholder</p>
                <h2 class="price">$1700,-</h2></div>

            <div class="grid-item"><img src="images/laptop4.jpg" height="230" width="230"/><p>Placeholder</p>
                <h2 class="price">$900,-</h2></div>

        </div>

        <!--Meer gadgets knop-->
        <div style="text-align: center;margin-top: 8%"><button  onclick="window.location = 'https://www.google.com' " class="meer-gadgets">Meer Gadgets</button></div>
    </div>

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
            <h3>Categorieën</h3>
            <a href="#">Beeld & Geluid</a>
            <a href="#">Kabels</a>
            <a href="#">Losse artikelen</a>
            <a href="#">Sale</a>
            <a href="#">Telefonie</a>
            <a href="#">Navigatie</a>
        </div>
        <div class="col-3">
            <h3 style="color: white" >Contact</h3>
            <p style="color: white" > Nerdy Gadgets</p>
            <p style="color: white" >Hospitaaldreef 5</p>
            <p style="color: white" >1312 RC Almere</p>

            <div class="social-icons">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-behance"></i>
            </div>

            <div class="test">
                <p style="color: white" align="right"> © Nerdy Gadgets 2023</p>



            </div>



</body>
</html>