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
                    <input type="submit" name="fix-product" value="UPDATE">

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
                    <?php
    $ketnoi = mysqli_connect('localhost','root','','baocaophp');
    $thongtin = mysqli_query($ketnoi, 'select * from menu');
    $dulieu = mysqli_fetch_array($thongtin);
    if(isset($_POST['fix']))
    {
        $ma = $_POST['ma'];
        $img = $_POST['img'];
        $ten = $_POST['ten'];
        $gia = $_POST['gia'];
        $sl = $_POST['sl'];
        $note = $_POST['note'];
             echo "
        <form method='POST'>
         <tr>
         <td>".$ma."</td>
        <td><img height='110px' width='130px' src ='../img/".$img."'></td>
        <td><input type='text' name='ten' value='".$ten."'></td>
        <td> <input type='text' name='gia' value='".$gia."'></td>
        <td> <input type='number' name='sl' value='".$sl."'></td>
        <td> <input type='text' name='note' value='".$note."'></td>
        <td> <input type='hidden' name='ma' value='".$ma."'></td>
        </form>
    </tr>
    ";   
      
    }
    suasp();
?>

                </table>

            </form>
        </main>
    </div>
    <!-- loader part  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="" />
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>