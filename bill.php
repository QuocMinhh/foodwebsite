<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/donhang.css">
</head>

<body>
    <?php
    include('thuvien.php');
    session_start();
    ketnoidb();
    //lay thong tin tu form
    if(isset($_POST['add']) && $_POST['add']){
      $hoten = $_POST['tennguoimua'];
      $sdt = $_POST['sdt'];
      $address = $_POST['diachi'];
      $tongtien = tongdonhang();
      //inset don hang
     $idbill=taodonhang($hoten, $sdt, $address,$tongtien);
     //sau khi insert thi có id mới

      //dùng for để đọc giỏ hàng 
      for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
        $img =  $_SESSION['giohang'][$i][0];
        $Tenfood = $_SESSION['giohang'][$i][1];
        $Giafood = $_SESSION['giohang'][$i][2];
        $soluong =  $_SESSION['giohang'][$i][3];
        $thanhtien = $Giafood * $soluong;
        taogiohang($img, $Tenfood, $Giafood,$soluong,$thanhtien,$idbill);
       

        
      }
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
            <a href="home.php#menu"><i class="bx bx-home"></i></a>
            <?php  echo "<script language = 'javascript'>alert('Oder Succesful');
        window.location='http://localhost/food-website/home.php#menu';
        </script>";?>
            </form>

        </div>
    </body>

    </html>
</body>

</html>