<?php
include 'db.php';

if(isset($_POST['submit'])){
    
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $msg = $_POST['message'];


    $sql= "INSERT INTO `foodorder`  (`name` , `email`, `phonenumber`, `dateofbirth`, `time`, `message`) VALUES
    ('$name', '$email', '$phone', '$date' , '$time', '$msg')";

    if($conn->query($sql) === TRUE){
        echo "data inserts successfully";
    }
    else {
        echo "error" . $sql . "<br>" . $conn->error ;
    }

}


  ?>  



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container1">
        <nav>
            <div class="logo">
                <h1>jamshedpur food</h1>
            </div>

            <ul>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">gallery</a>
                <a href="#"> reservation</a>
                <a href="#">contact</a>

            </ul>
        </nav>
    </div>

    <!-- slider start -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slider1.jpg" class="d-block w-100" alt="..." style="height: 25rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slider2.jpg" class="d-block w-100" alt="..." style="height: 25rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slider3.jpg" class="d-block w-100" alt="..." style="height: 25rem;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- \about section -->

    <div class="about-sec">
        <div class="left-about">
            <h1>about us</h1>
            <p>Butazzo serves gourmet, hearth-baked pizza and fresh, artisan salads along with craft beer and
                value-priced wine. Butazzos features live acoustic music on weekends with sound powered b</p>
        </div>

        <div class="right-about">
            <img src="about-us.jpg" alt="" style="background-color: yellow;">
        </div>
    </div>

    <div class="menu-section">
        <h1>our menu</h1>
        <div class="menu-items">
            <div class="menu-item">
                <img src="pizza.jpg" alt="">
                <h3>burger</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="price">500</div>

            </div>
            <div class="menu-item">
                <img src="pizza.jpg" alt="">
                <h3>burger</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="price">500</div>

            </div>
            <div class="menu-item">
                <img src="pizza.jpg" alt=" " ;>
                <h3>burger</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="price">500</div>

            </div>

            <div class="menu-item">
                <img src="pizza.jpg" alt=" " ;>
                <h3>burger</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="price">500</div>

            </div>


            <div class="menu-item">
                <img src="pizza.jpg" alt=" " ;>
                <h3>burger</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="price">500</div>

            </div>


            <div class="menu-item">
                <img src="pizza.jpg" alt=" " ;>
                <h3>burger</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="price">500</div>

            </div>
        </div>
    </div>


    <div class="form-content">
        <h2>Reservation</h2>
        |<form method="post">
            <input type="text" name="fname" placeholder="Your name">
            <input type="email" name="email" placeholder="your email">
            <input type="text"name="phone" placeholder="Phone number">
            <input type="date" name="date">
            <input type="time" name="time">
            <textarea placeholder="Enter your queries" name="message"></textarea>
            <button type="submit" name="submit">Book now</button>
        </form>
    </div>
    <div class="gallery-section">
        <h3> Gallery</h3>
        <div class="gallery">
            <img src="gallery-1.jpg" alt="">
            <img src="gallery-1.jpg" alt="">
            <img src="gallery-1.jpg" alt="">
            <img src="gallery-1.jpg" alt="">
        </div>
    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117711.79652311046!2d86.0933688065083!3d22.784165518980103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e31989f0e2b5%3A0xeeec8e81ce9b344!2sJamshedpur%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1758183013585!5m2!1sen!2sin"
            width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="footer">
        <div class="left-footer">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus consectetur nobis minus cupiditate
                explicabo modi quisquam tempore corrupti nostrum.</p>
            <div class="workinghours">

            </div>


        </div>
        <div class="right-footer">
            <h3>Contact US</h3>
            <i class="fa-solid fa-phone"></i>
            <p>1010 Market Street, San Francisco, California, 91107</p>
            <i class="fa-solid fa-message"></i>
            <p>(415) 456 7800</p>
            <i class="fa-solid fa-location-dot"></i>
            <p>info@butazzopizza.net</p>
        </div>
    </div>










</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>

</html>