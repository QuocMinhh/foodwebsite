<?php include('thuvien.php'); ?>
<?php session_start();?>
<?php 
    if($_SESSION['email_signin'] == '')
    {
       header("location: http://localhost/food-website/account.php");  
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- header section starts      -->

    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>FoodShip</a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#dishes">dishes</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <i class='fas fa-shopping-cart' id="fa-shopping"></i>
            <?php
             $ketnoi = mysqli_connect('localhost','root','','baocaophp');
            $thongtin = mysqli_query($ketnoi, 'select * from taikhoan');
            $admin = mysqli_query($ketnoi, 'select * from taikhoan where MaTK = "ADMIN"');
            $thongtinadmin = mysqli_fetch_array($admin);
            $email = $_SESSION['email_signin'];
            $password = $_SESSION['password_signin'];
            while($login = mysqli_fetch_array($thongtin))
            {
               if($login['Email'] == $email && $login['Password']==$password)
            {
                if($login['MaTK'] == $thongtinadmin['MaTK'])
                {
                    echo "<a href='admin/quanlysanpham.php'><i class='bx bxs-wrench' id='wrench'></i></a>";
                    echo "<a href='account.php'>".$login['Hoten']." (ADMIN) "."<i>Logout</i></a>";
                }
                else{
                    echo "<a href='account.php'>".$login['Hoten']."<i> <u>Logout</u> </i></a>";
                }
            }
            }
?>
        </div>
    </header>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="xulytimkiem.php" method="post" id="search-form">
        <input type="search" placeholder="search here..." name="timkiem" id="search-box" />
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
<!-- view don hang -->
<form action="" method="post" id="view-form">
        
    </form>
    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="swiper-container home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>spicy noodles</h3>
                        <p>
                            Noodles are a type of food made from unleavened dough which is rolled flat and cut
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/noodle.png" alt="" />
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>fried chicken</h3>
                        <p>
                            Chicken should be fried for about 7-8 minutes per side.
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/chickenfried.png" alt="" />
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>hot pizza</h3>
                        <p>
                            During the pizza search segment, the confederates pretended that they could not find.
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="" />
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- home section ends -->

    <!-- dishes section starts  -->

    <section class="dishes" id="dishes">
        <h3 class="sub-heading">our dishes</h3>
        <h1 class="heading">popular dishes</h1>
        <form action="">
            <div class="box-container">

                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/Hambuger.png" alt="" />
                    <h3>Hamburger</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>$20.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/dish-2.png" alt="" />
                    <h3>Chicken Roates</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>$15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/dish-3.png" alt="" />
                    <h3>Chicken BBQ</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>$15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/noodle.png" alt="" />
                    <h3>Noodle shoup</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>$15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/Pizza.png" alt="" />
                    <h3>Pizza beef</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>$15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/menu-1.jpg" alt="" />
                    <h3>Pizza Hotdog </h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>$15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>


            </div>
        </form>
    </section>

    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
        <h3 class="sub-heading">about us</h3>
        <h1 class="heading">why choose us?</h1>

        <div class="row">
            <div class="image">
                <img src="images/about-img.png" alt="" />
            </div>

            <div class="content">
                <h3>best food in the country</h3>
                <p>
                    In a large shallow dish, combine 2-2/3 cups flour, garlic salt, paprika, 2-1/2 teaspoons pepper and
                    poultry seasoning. In another shallow dish, beat eggs and 1-1/2 cups water; add 1 teaspoon salt and
                    the remaining 1-1/3 cups flour and 1/2 teaspoon pepper.
                </p>
                <p>
                    Dip chicken in egg mixture, then place in flour mixture, a few pieces at a time. Turn to coat.
                </p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">
        <h3 class="sub-heading">our menu</h3>
        <h1 class="heading">today's speciality</h1>
        <div class="box-container">
            <?php 
            sanpham();
             ?>
        </div>

    </section>

    <!-- menu section ends -->

    <!-- footer section starts  -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>locations</h3>
                <a href="#">india</a>
                <a href="#">japan</a>
                <a href="#">russia</a>
                <a href="#">USA</a>
                <a href="#">france</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">dishes</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">reivew</a>
                <a href="#">order</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">+111-222-3333</a>
                <a href="#">shaikhanas@gmail.com</a>
                <a href="#">anasbhai@gmail.com</a>
                <a href="#">mumbai, india - 400104</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
            </div>
        </div>

        <div class="credit">
            copyright @ 2021 by <span>mr. web designer</span>
        </div>
    </section>

    <!-- footer section ends -->

    <!-- loader part  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="" />
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>