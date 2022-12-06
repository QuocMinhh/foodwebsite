<?php
function taogiohang($img, $Tenfood, $Giafood,$soluong,$thanhtien,$idbill)
{   
    $ketnoi = ketnoidb();
    $sql = "insert into cart (images,tensp, gia, soluong, thanhtien,idbill) values ('$img', '$Tenfood', '$Giafood','$soluong','$thanhtien','$idbill')" ;
    $ketnoi->exec($sql);
    $ketnoi=null;
    
}
function taodonhang($hoten, $sdt, $address,$tongtien)
{   
    $ketnoi = ketnoidb();
    $sql = "insert into bill (hoten, sdt, diachi,tongtien) values ('$hoten', '$sdt', '$address','$tongtien')" ;
    $ketnoi->exec($sql);
    $last_id = $ketnoi->lastInsertId();
    $ketnoi=null;
    //lay id moi ve 
    return $last_id;
 
    
}
function ketnoidb(){

    $servername="localhost";
    $username="root";
    $password ="";
    $dbname="baocaophp";
    try{
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO :: ATTR_ERRMODE,PDO :: ERRMODE_EXCEPTION);
        return$conn;
    }catch(PDOException $e){
       return $e->getMessage();
   }
}
function tongdonhang(){
    $tong=0;
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0){
            for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
                $tt=$_SESSION['giohang'][$i][2]*$_SESSION['giohang'][$i][3];
                $tong+=$tt;
            }
   }
    return $tong;
    }
}
function showgiohang(){
    if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
        for($i=0; $i < sizeof($_SESSION['giohang']); $i++)
        {
            $tongtien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][2];
            echo "<div class='shop'>
            <div class='box' style='margin-left:20px; width:980px';>
            <img class='image'  src='../min/img/".$_SESSION['giohang'][$i][0]."' width ='120px' height='100px'/>
                <div class='content'>
                    <h3>".$_SESSION['giohang'][$i][1]."</h3>
                    <h4>Price: ".$_SESSION['giohang'][$i][2]."$</h4>
                    <p class='unit'><b>Quantity: " .$_SESSION['giohang'][$i][3]." </b></p>
                    <p class='btn-area'><i aria-hidden='true' class='fa fa-trash'></i> <span
                            class='btn2'><a href='donhang.php?deldonhang'>Remove</a></span></p>
                </div>
            </div>
        </div> 
        <form method ='POST'>
            <div class='right-bar'>
            <p><i>Information User:</i></p>
           
                <span style='margin-left:40px;'><b>Name:</b> <input style='height:27px;' type='text' name='tennguoimua'></span>
            
                <span style='margin-left:100px;'><b>Phone:</b> <input style='height:27px;' type='text' name='sdt'></span>
              
                <span style='margin-left:100px;'><b>Address</b>: <input style='height:27px;' type='text' name='diachi'></span>

                <hr style='margin-top:20px;'>
                <p><span><b>Total</b></span> <span><b>$tongtien$</b></span></p>
                <input style='margin-top:20px;
                    height: 30px;
                    width: 200px;
                    background-color: #63bf5b;
                    margin-left:350px;
                ' type='submit' class='addto' value ='Submit Order' name = 'add'>
            </div>
            </form>
        </div>"; 
        }
    }
}


?>
<?php  
function sanpham()
{
    $ketnoi = mysqli_connect('localhost','root','','baocaophp');
    $thongtin = mysqli_query($ketnoi, 'select * from menu');
    while ($dulieu = mysqli_fetch_array($thongtin))
    {
         
        echo " <div class='box'>
        <div class='image'>
        <img src ='../min/img/".$dulieu['images']."'>
            <a class='fas fa-heart'></a>
        </div>
        <div class='content'>
            <div class='stars'>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star-half-alt'></i>
            </div>
            <h3>".$dulieu['Tenfood']."</h3>
            <p>
                During the pizza search segment, the confederates pretended that they could not find a
                toy
                pizza
                that.
            </p>
            <p>$<span>".$dulieu['Gia']."</span></p>
            <b><span>Number: </span></b>
            <form action='donhang.php' method='POST'>
            <input type='number' name='soluong' value='1'>
            <input type='submit' name='addtocart' class='btn' value='Add to cart'>
            <input type='hidden' name='Tenfood' value='".$dulieu['Tenfood']."'>
            <input type='hidden' name='images' value='".$dulieu['images']."'>
            <input type='hidden' name='Gia' value='".$dulieu['Gia']."'>
            </form>
        </div>
    </div>";
    
    }
   
}


?>
<?php

function xulitimkiem()
    {
       
    $ketnoi = mysqli_connect('localhost','root','','baocaophp'); //ket noi vao csdl 
  	$tiemkiem = $_POST["timkiem"]; //lay du lieu tu form 
  	$dulieu = mysqli_query($ketnoi, "select * from menu where Tenfood like '%$tiemkiem%'"); //lay du lieu tu bang //lay du lieu hinh anh
	  while($xuattiemkiem = mysqli_fetch_array($dulieu)) // lưu dữ liệu từ select của bảng vào mảng và gán nó bằng 1 biến mới
        {
            echo " <div style='width:auto; height:auto;' class='box'>
        <div class='image'>
        <img  src ='../min/img/".$xuattiemkiem['images']."'>
            <a class='fas fa-heart'></a>
        </div>
        <div class='content'>
            <div class='stars'>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star-half-alt'></i>
            </div>
            <h3>".$xuattiemkiem['Tenfood']."</h3>
            <p>
                During the pizza search segment, the confederates pretended that they could not find a
                toy
                pizza
                that.
            </p>
            <p>$<span>".$xuattiemkiem['Gia']."</span></p>
            <p>Quantity: <span>".$xuattiemkiem['Soluong']."</span></p>
            <b><span>Number: </span></b>
            <form action='donhang.php' method='POST'>
            <input type='number' name='soluong' value='1'>
            <input type='submit' name='addtocart' class='btn' value='Add to cart'>
            <input type='hidden' name='Tenfood' value='".$xuattiemkiem['Tenfood']."'>
            <input type='hidden' name='images' value='".$xuattiemkiem['images']."'>
            <input type='hidden' name='Gia' value='".$xuattiemkiem['Gia']."'>
            </form>
        </div>
    </div>";

        }           

}
 ?>