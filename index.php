<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBEXPLORE</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- favicon -->
    <link rel="icon" 
    sizes="32*32"
    href="./img/Screenshot_2024-03-01_221406-removebg-preview.png">

</head>
<body>

<!-- navbar -->

    <nav class="navbar" >
        <span><a >
            <img
                    class="logo1"
                    src="./img/logo (2).png"/> 
                
                <h1 class="logo">GLOBEXPLORE</h1></a
            ></span>

         
        
         <ul class="nav-links">
            <li>
                <a href="#home" id="one" >Home</a>
            </li>
            <li>
                <a href="#events" id="two" >Events</a>
            </li>
            <li>
                <a href="#explore" id="three">Explore</a>
            </li>
            <li>
                <a href="tours.php" id="four">Tours</a>
            </li>
            <li>
                <a href="#about" id="five">About</a></li>
            </li>
            <li>
                <a href="#contact" id="six">Contact</a>
            </li>
            <li>
                <a href="signin.php
                " id="seven" class="cir_border"
                    >SignIn </a>
                
            </li>
            </ul>
            <img src="./img/menu-btn.png" alt="" class="menu-btn" />
     </nav>
     <header>
        <!-- <div class="header-img" style="background-image: url(./img/pexels-archie-binamira-913215.jpg);"></div> -->
        <div class="header-content">
            <h2 >Let's Travel</h2>
            <!-- <div class="line"></div> -->
            <!-- <h1>A WONDERFUL GIFT</h1> -->
            
        </div>
     </header>
         <!--Events-->
         <section class="events" id="events">
            <div class="container">
                <div class="title">
                    <h1>Upcoming Events</h1>
                    <!-- <div class="line"></div> -->
                </div>
                <div class="box">
                    <div class="card">
                        <img class="card-img" src="./img/card1.jfif" />
                        <h4>Everest camp trek</h4>
                        <p class="font-color">
                            Everest base camp trek is without a doubt, one of
                            the most renowned travel destinations in the world.
                        </p>
                        <a href="#" class="bttn">All Details</a>
                    </div>
                    <div class="card">
                        <img src="./img/card2.jpg" />
                    <h4>Lakshadweep</h4>
                    <p class="font-color">
                        Settled off the Kerala coast on Laccadive sea, Lakshadweep . 
                        A club of 36 islands, a nature tourism destination.
                    </p>
                    <a href="#" class="bttn">All Details</a>
                </div>
                <div class="card">
                    <img src="./img/card3.jpg" />
                    <h4>Desert Safari</h4>
                    <p class="font-color">
                        Embark on the best desert safari in Dubai and try thrilling activities,
                         enjoy BBQ meals, round trip transfers etc.
                    </p>
                    <a href="#" class="bttn">All Details</a>
                </div>
            </div>
        </div>
    </section>
    <!--Events-->
<!-- <div class="background-image" style="background-image: url(./img/pexels-archie-binamira-913215.jpg);"></div> -->


<section class="explore" id="explore">
<div class="explore-content">
<h2>Explore The World </h2>
</div>
</section>
 



 <!--Events-->
 <section class="events" id="tours">
    <div class="container">
        <div class="title">
            <h1>Packages</h1>
            <div class="line"></div>
        </div>
        <div class="box">
            <div class="card">
                <img class="card-img" src="./img/package1.jpg" />
                <h4>Goa</h4>
                <p >
                Goa is a place known for its famous beaches, 
                cuisine, culture, climate, and historical places. 
                </p>
                <!-- <a href="#" class="bttn">All Details</a> -->
            </div>
            <div class="card">
                <img src="./img/package2.jpg" />
            <h4>Kerala</h4>
            <p>
            Kerala is a jewel of enchanting beauty and rich 
            cultural heritage that beckons to be explored.
            </p>
            <a href="tours.php" class="bttn1">View All</a>
        </div>
        <div class="card">
            <img src="./img/package3.jpg" />
            <h4>Thailand</h4>
            <p>
            Thailand offers a perfect mix of every factor 
            needed for a fun-filled vacation for tourists across the world
            </p>
            <!-- <a href="#" class="bttn">All Details</a> -->
        </div>
    </div>
</div>
</section>
<!--Events-->
<!-- <div >

<a href="#" class="view-all">View All</a>
</div> -->


<?php include('includes/sigin.php');?>	
</body>

</html>