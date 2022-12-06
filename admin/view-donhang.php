<?php  include('thuvien_ad.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/view-donhang.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <header>
            <h1>ORDERED</h1>
        </header>
        <nav>
            <ul>
                <a style="text-decoration: none;color: white;" class='bx bxs-home' href="../home.php"> Home</a>
            </ul>
            <ul>
                <a style="text-decoration: none;color: white;" href="quanlysanpham.php"><i class='bx bxs-store-alt'></i>
                    Products</a>
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
            <div style="margin:18px" class="soluong">
                <input style="width: 120px; height:40px;" type="submit"
                    value="Quantity: <?php demsoluongdondathang();  ?>">
            </div>
            <div class="cart">
                <?php xemdonhang_dadat(); ?>
            </div>
        </main>
    </div>

</body>

</html>