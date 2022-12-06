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
            <h1>QUẢN LÝ SẢN PHẨM</h1>
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
            <form action="" method="POST">
                <div class="add">
                    <input type="submit" name="add-product" value="SAVE">

                </div>
                <table>
                    <tr>
                        <th>ID-FOOD</th>
                        <th style="width: 200px;">IMAGES</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>NOTE</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="mafood"></td>
                        <td>
                            <input type="file" name="images">
                        </td>
                        <td><input type="text" name="tenfood"></td>
                        <td><input type="text" name="gia"></td>
                        <td><input type="text" name="soluong"></td>
                        <td><input type="text" name="ghichu"></td>

                    </tr>
                </table>
                <?php add_sanpham();  ?>
            </form>
        </main>
    </div>

</body>

</html>