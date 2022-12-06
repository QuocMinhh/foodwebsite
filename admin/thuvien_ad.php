<?php
 function quanlysanpham()
 {
    $ketnoi = mysqli_connect('localhost','root','','baocaophp');
    $thongtin = mysqli_query($ketnoi, 'select * from menu');
    while ($dulieu = mysqli_fetch_array($thongtin))
    {
        echo "
         <tr>
        <td><img height='110px' width='130px' src ='../img/".$dulieu['images']."'></td>
        <td>".$dulieu['Tenfood']."</td>
        <td>".$dulieu['Gia']."$</td>
        <td>".$dulieu['Soluong']."</td>
        <td>".$dulieu['Ghichu']."</td>
        <form action='fix-products.php' method='POST'>
        <td><input type = 'submit' name='fix' value='Fix'></td>
        <input type='hidden' name='ten' value='".$dulieu['Tenfood']."'>
        <input type='hidden' name='img' value='".$dulieu['images']."'>
        <input type='hidden' name='gia' value='".$dulieu['Gia']."'>
        <input type='hidden' name='sl' value='".$dulieu['Soluong']."'>
        <input type='hidden' name='ma' value='".$dulieu['Mafood']."'>
        <input type='hidden' name='note' value='".$dulieu['Ghichu']."'>
        </form>
        <form method='POST' action='del-products.php'>
        <td><input type = 'submit' name='del' value='Delete'></td>
        <input type='hidden' name='ma' value='".$dulieu['Mafood']."'>
        </form>
    </tr>
    ";
    }

 }

 
 
function add_sanpham()
{
    $ketnoi = mysqli_connect('localhost','root','','baocaophp');
    if(isset($_POST['add-product']))
    {
    $mafood = $_POST['mafood'];
    $image = $_POST['images'];
    $tenfood = $_POST['tenfood'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $ghichu =$_POST['ghichu'];
    $add = "insert into menu (Mafood, images, Tenfood, Gia, Soluong, Ghichu) values ('$mafood','$image','$tenfood','$gia','$soluong','$ghichu')";
    if(mysqli_query($ketnoi, $add))
    {
         echo "<script language = 'javascript'>alert('Add_Products Succesful!');
        window.location='http://localhost/food-website/admin/quanlysanpham.php';
        </script>";
    }
    else{
        echo "<script language = 'javascript'>alert('Add_Products Fail!!!');
        window.location='http://localhost/food-website/account.php';
        </script>";
    }
  mysqli_close($ketnoi);
}
}
?>



<!--SUA SAN PHAM-->
<?php
function suasp(){
    $ketnoi = mysqli_connect('localhost','root','','baocaophp');
    if(isset($_POST['fix-product']))
    {
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $gia = $_POST['gia'];
        $sl = $_POST['sl'];;
        $note = $_POST['note'];
      $update =  "update menu set Tenfood='$ten', Gia='$gia',Soluong='$sl', Ghichu='$note'where Mafood='$ma' ";
     if(mysqli_query($ketnoi, $update))
      {
        echo "<script language = 'javascript'>alert('Fix-Products Succesful!');
        window.location='http://localhost/food-website/admin/quanlysanpham.php';
        </script>";
      }
     else
      {
     
        echo "<script language = 'javascript'>alert('Fix-Products Fail!!!!');
        window.location='http://localhost/food-website/admin/quanlysanpham.php';
        </script>";
      }
    }
    mysqli_close($ketnoi);
}
?>



<?php
function xemdonhang_dadat(){
    $ketnoi = mysqli_connect('localhost','root','','baocaophp');
    $thongtin = mysqli_query($ketnoi, 'select * from bill, cart where bill.id = cart.idbill');
    while ($dulieu = mysqli_fetch_array($thongtin))
    {
      
        echo "<table style='font-size:17px; margin-left:75px;'>
        <tr>
                    <th></th>
                    <th>IMAGES</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>TOTAL</th>
                </tr>
        <tr>
        <th>Product:</th>
        <td><img height='110px' width='130px' src ='../img/".$dulieu['images']."'></td>
          <td>".$dulieu['tensp']."</td>
          <td>".$dulieu['gia']."$</td>
          <td>".$dulieu['Soluong']."</td>
          <td>".$dulieu['thanhtien']."$</td>
          <td rowspan='3'>
          <form method='POST' action='del-donhang.php'>
        <td><input style='width: 120px; height:40px;margin-right:75px;' type = 'submit' name='del' value='Delete'></td>
        <input type='hidden' name='ma' value='".$dulieu['id']."'>
        <input type='hidden' name='idbill' value='".$dulieu['idbill']."'>
        </form>
        </td>
        </tr>
        <tr>
          <th>Infor User:</th>
          <td>".$dulieu['hoten']."</td>
          <td>".$dulieu['sdt']."</td>
          <td colspan='3'>".$dulieu['diachi']."</td>
        </tr>
      </table>" ;
    }   
}
?>
<?php
function demsoluongdondathang(){
  $ketnoi = mysqli_connect('localhost','root','','baocaophp');
  $thongtin = mysqli_query($ketnoi, 'select count(id) as soluong from cart ');
  $dulieu = mysqli_fetch_array($thongtin);
  echo $dulieu['soluong'];
}
?>