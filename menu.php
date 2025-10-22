<?php
include 'admin\db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
            margin: 20px 20px;
        }

        .logo h1 {
            font-size: 20px;
            font-family: cursive;
            color: rebeccapurple;
            border-radius: 5px;
            border-bottom: 2px solid red;
            border-bottom-right-radius: 2rem;
            width: 11rem;
        }

        ul a {
            text-decoration: none;
            text-transform: uppercase;
            padding: 5px;

            color: rgb(14, 14, 13);


        }

        ul a:hover {
            color: blue;
            border-bottom: 1px solid black;

        }


        .item-name {
            font-size: 3rem;
            margin-bottom: 2rem;
        }

        .icons i {
            margin-bottom: 1rem;
            color: yellow;
        }

        .item-price {
            font-size: 2rem;
            color: red;
        }

        #para {
            font-size: 25px;
        }

        .menu-section {

            width: 25rem;
            padding: 35px;
            display: flex;
            gap: 8rem;
        }

        .item-name {
            display: flex;
            justify-content: space-between;
            font-size: 2rem;
        }

        .menu-img {
            box-shadow: 4px 1px 2px 5px rgba(0, 0, 0, 0.2);
            padding: 30px;
            height: 32rem;
        }

        .footer {
            background-color: #f6a525;
            display: flex;
            justify-content: space-between;
            margin: 30px 30px;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: medium;

        }

        .left-footer {
            margin-left: 20px;

            width: 22rem;
            margin-top: 2rem;
            line-height: 20px;

        }

        .left-footer p {
            line-height: 20px;
        }

        .left-footer h3 {
            letter-spacing: 10px;
            font-family: cursive;
            font-size: 2rem;
            font-weight: 700;
            color: #033575;
            margin-bottom: 20px;
        }

        .right-footer {
            margin-top: 2rem;
            margin-right: 20px;



        }

        .right-footer i {
            display: flex;
            gap: 20px;
        }

        .right-footer H3 {
            font-family: cursive;
            font-size: 2rem;
            color: darkviolet;
            margin-bottom: 20px;
        }

        .right-footer p {
            line-height: 20px;
        }

        .menu-img img {
            height: 14rem;
            width: 18rem;
        }
    </style>
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
     <h1 style="text-align: center; margin-bottom: 2rem; font-size: 3rem; font-family: cursive; color: red;">Burger <span style="color: #f6a525;">menu</span></h1>
 <div class="menu-section">
  <?php
    $result = $conn->query("SELECT * FROM menu");
    while ($row = $result->fetch_assoc()) :
        // prepend 'uploads/' to the filename from database
        $imagePath = 'admin/uploads/' . $row['image'];
    ?>
        <div class="menu-img">
<img src="<?php echo htmlspecialchars($imagePath); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
            
            <div class="item-name"><?php echo htmlspecialchars($row['name']); ?></div>
            <div class="item-price"><?php echo htmlspecialchars($row['price']); ?></div>

            <div class="icons" style="text-align: center;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>

            <p id="para"> <?php echo htmlspecialchars($row['description']); ?></p>
        </div>
    <?php endwhile; ?>
</div>




<h1 style="text-align: center; margin-bottom: 2rem; font-size: 3rem; font-family: cursive; color: red;">Pizza <span style="color: #f6a525;">Menu</span></h1>

<div class="pizza-section" style="display: flex; gap: 20px;">
    <?php
    $resultpizza = $conn->query("SELECT * FROM pizza");
    while ($rowpizza = $resultpizza->fetch_assoc()) :
        $imagePathimg = 'admin/uploads/' . $rowpizza['image'];
    ?>
        <div class="menu-img">
            <img src="<?php echo htmlspecialchars($imagePathimg); ?>" alt="<?php echo htmlspecialchars($rowpizza['name']); ?>">
            <div class="item-name">
                <?php echo htmlspecialchars($rowpizza['name']); ?>
            </div>
            <div class="item-price">$<?php echo htmlspecialchars($rowpizza['price']); ?></div>

            <div class="icons" style="text-align: center;">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p id="para"><?php echo htmlspecialchars($rowpizza['description']); ?></p>
        </div>
    <?php endwhile; ?>
</div>


    <div class="footer">
        <div class="left-footer">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio ducimus consectetur nobis minus
                cupiditate explicabo modi quisquam tempore corrupti nostrum.</p>
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
</html>