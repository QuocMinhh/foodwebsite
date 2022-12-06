<?php  include('thuvien_ad.php'); ?>
<?php 
    session_start();
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
    <title>Document</title>
    <link rel="stylesheet" href="../css/qlsp.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <header>
            <h1>Product Management</h1>
        </header>
        <nav>
            <ul>
                <a style="text-decoration: none;color: white;" class='bx bxs-home' href="../home.php"> Home</a>
            </ul>
            <ul>
                <a style="text-decoration: none;color: white;" class='bx bxs-shopping-bag' href="view-donhang.php">
                    Ordered</a>
            </ul>
            <ul>
                <a style="text-decoration: none;color: white;" href="../account.php"><i class='bx bx-revision'></i>
                    Change Password</a>
            </ul>
            <ul>
                <a style="text-decoration: none;color: white;" href="../account.php"><i class='bx bx-power-off'></i>
                    Log-out</a>
            </ul>
        </nav>
        <main>
            <div class="add">
                <form action="add_product.php"> <input type="submit" name="submit" value="Add Product"></form>
            </div>
            <table style="margin-left:52px;">
                <tr>
                    <th>IMAGES</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>NOTE</th>
                    <th>FIX</th>
                    <th>DELETE</th>
                </tr>
                <?php quanlysanpham(); 
               ?>
            </table>
        </main>
    </div>

</body>

</html>