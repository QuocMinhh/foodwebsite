<?php include('thuvien.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/timkiem.css">
</head>

<body>
    <section class="menu" id="menu">
        <form action="donhang.php" method="post">
            <h3 class="sub-heading"> <a href="home.php  "><i class="fas fa-home"></i></a></h3>
            <h1 class="heading">Finded</h1>

            <div style=" display:inline-flex; width:auto; height:auto;" class="box-container">
                <?php xulitimkiem();  ?>
            </div>

        </form>
    </section>
</body>

</html>