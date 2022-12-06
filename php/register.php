<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $ketnoi = mysqli_connect('localhost','root','','baocaophp');
    $MaKh = $_POST['MaKH'];
    $hoten = $_POST['Hoten'];
    $_SESSION['MaKH'] = $MaKh;
    $_SESSION['Hoten'] = $hoten;
    $email_signout = $_POST['email-signout'];
    $password_signout = $_POST['password-signout'];
    $insert = "insert into taikhoan (MaKH, Hoten, Email, Password) values ('$MaKh','$hoten','$email_signout','$password_signout')";
    if(mysqli_query($ketnoi, $insert))
    {
        echo "<script language ='javascript'>alert('Đăng ký thành công');
        window.location='http://localhost/min/account.php';
        </script>";
        
    }
        
      
    
    ?>


</body>

</html>