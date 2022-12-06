<?php
 $ketnoi = mysqli_connect('localhost','root','','baocaophp');
 $thongtin = mysqli_query($ketnoi, 'select * from cart, bill where cart.idbill = bill.id');
 if(isset($_POST['del']))
 {
    $ma = $_POST['ma'];
    $idbill = $_POST['idbill'];
    $del = "delete from cart where id='$ma'";
    $delinf = "delete from bill where id = '$idbill'";
    if (mysqli_query($ketnoi, $del)) {
        if(mysqli_query($ketnoi,$delinf))
        {
            echo "<script language = 'javascript'>alert('Delete Succesful!');
        window.location='http://localhost/food-website/admin/view-donhang.php';
        </script>";
        }
    } else {
        echo "Xóa thất bại: " . mysqli_error($ketnoi);
    }
    mysqli_close($ketnoi);
 }

?>