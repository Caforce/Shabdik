<?php
session_start();
include 'config.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HOME</title>
</head>

<body>
    <div class="header">
        <div class="container">
            <?php
                include 'navbar.php';
            ?>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Workout <br> A New Style!</h1>
                    <p>Success isn't always about greatness. It's about consistancy. Consistent<br>hard work gains succes. Greatness will come.</p>
                    <a href="products.php" class="btn">Explore Now &#8594</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
        </div>
    </div>

    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
        <h2 class="title">Featured Categories</h2>
            <div class="row">
                <div class="col-3">
                    <a href="products.php?key=airdot"><img src="images/category-1.jpg" alt=""></a>
                </div>
                <div class="col-3">
                    <a href="products.php?key=airdot"><img src="images/category-2.jpg" alt=""></a>
                </div>
                <div class="col-3">
                    <a href="products.php?key=headset"><img src="images/category-3.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <?php
            $sql = "SELECT * FROM products limit 0, 4";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                $title = $row["title"];
                $description = $row["description"];
                $category = $row["category"];
                $quantity = $row["quantity"];
                $price = $row["price"];
                $img = './images/' . $row["img"] . 'e1.jpeg';

            ?>
                <div class="col-4">
                    <a href="productdetails.php?pid=<?= $id; ?>"><img src="<?= $img; ?>"></a>
                    <a href="productdetails.php?pid=<?= $id; ?>">
                        <h4><?= $title; ?></h4>
                    </a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p><?= $price; ?></p>
                </div>
            <?php
            }
            ?>
        </div>

        <h2 class="title">Latest Products</h2>
        <div class="row">
            <?php
            $sql = "SELECT * FROM products ORDER BY id desc limit 0, 4";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                $title = $row["title"];
                $description = $row["description"];
                $category = $row["category"];
                $quantity = $row["quantity"];
                $price = $row["price"];
                $img = './images/' . $row["img"] . 'e1.jpeg';

            ?>
                <div class="col-4">
                    <a href="productdetails.php?pid=<?= $id; ?>"><img src="<?= $img; ?>"></a>
                    <a href="productdetails.php?pid=<?= $id; ?>">
                        <h4><?= $title; ?></h4>
                    </a>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p><?= $price; ?></p>
                </div>
            <?php
            }

            ?>
        </div>
    </div>
    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on Alimart</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 features a 39.9% layer
                        (than Mi Band 3) AMOLED color full-touch display with
                        adjustable brightness, so everything is clear as can be.
                    </small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>

                    <p>Loren Ipsum is simply dummy text of the printing
                        and typesetting industry. Loren Ipsum has been the industry. Lorem Ipsum has been the
                        industry's standad dummy text ever
                    </p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="images/user-1.png" alt="">
                    <h3>sean parker</h3>
                </div>
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>

                    <p>Loren Ipsum is simply dummy text of the printing
                        and typesetting industry. Loren Ipsum has been the industry. Lorem Ipsum has been the
                        industry's standad dummy text ever
                    </p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="images/user-2.png" alt="">
                    <h3>Mike Smith</h3>
                </div>
                <div class="col-3">
                    <i class="fas fa-quote-left"></i>

                    <p>Loren Ipsum is simply dummy text of the printing
                        and typesetting industry. Loren Ipsum has been the industry. Lorem Ipsum has been the
                        industry's standad dummy text ever
                    </p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <img src="images/user-3.png" alt="">
                    <h3>Mabel Joe</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-bose.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-fiio.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-sony.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-jbl.png">
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

</body>

</html>