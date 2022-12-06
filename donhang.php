<?php
include('thuvien.php'); 
session_start();
if(isset($_SESSION['giohang']))
{
    $_SESSION['giohang'] = [];
} 

if(isset($_POST['addtocart']) && $_POST['addtocart']){
    $images = $_POST['images'];
    $Ten = $_POST['Tenfood'];
    $Giafood = $_POST['Gia'];
    $soluong = $_POST['soluong'];
    $_SESSION['images'] = $images;
    $_SESSION['Tenfood'] = $Ten;
    $_SESSION['Gia'] = $Giafood;
    $_SESSION['soluong'] = $soluong;
    //them ngoac [] de them duoc nhieu san pham trong gio hang
    $cart = [$images,$Ten,$Giafood,$soluong];
    $_SESSION['giohang'][] = $cart;
    //var_dump($_SESSION['giohang']);
     }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/donhang.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">

</head>

<body>
    <div class="wrapper">
        <h1>Shopping Cart</h1>
        <a style="text-decoration: none;
        margin-left:20px;
        font-size:20px;" href="home.php#menu"><i class="bx bx-home"></i>Continues Shopping</a>
        <hr style="margin-left:20px;">
        <br>
        <form action="bill.php" method="POST">
            <?php showgiohang(); ?>
        </form>

    </div>
</body>

</html>