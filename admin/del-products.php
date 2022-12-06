<?php
 $ketnoi = mysqli_connect('localhost','root','','baocaophp');
 $thongtin = mysqli_query($ketnoi, 'select * from menu');
 if(isset($_POST['del']))
 {
    $ma = $_POST['ma'];
    $del = "delete from menu where Mafood='$ma'";
    if (mysqli_query($ketnoi, $del)) {
        echo "<script language = 'javascript'>alert('Delete Succesful!');
        window.location='http://localhost/food-website/admin/quanlysanpham.php';
        </script>";
    } else {
        echo "Xóa thất bại: " . mysqli_error($ketnoi);
    }
 }

?>