<?php
    session_start();
    $ketnoi = mysqli_connect('localhost','root','','baocaophp');
    $thongtin = mysqli_query($ketnoi, 'select * from taikhoan');
    $admin = mysqli_query($ketnoi, 'select * from taikhoan where MaTK = "ADMIN"');
    $thongtinadmin = mysqli_fetch_array($admin);
    $email_signin = $_POST['email-signin'];
    $password_signin = $_POST['password-signin'];
    $_SESSION['email_signin'] = $email_signin;
    $_SESSION['password_signin'] = $password_signin;
    while($login = mysqli_fetch_array($thongtin))
    {
         if($email_signin == $login['Email'] && $password_signin == $login['Password'])
    {  
        if($login['MaKH'] == $thongtinadmin['MaKH'])
        {
            header('Location: http://localhost/min/home.php',true, 301);
        }
        else{
             header('Location: http://localhost/min/home.php',true, 301);
        }
    }
        else{
        echo "<script language = 'javascript'>alert('Tài khoản hoặc mật khẩu sai');
        window.location='http://localhost/min/account.php';
        </script>";
    } 
    
    }
   
?>