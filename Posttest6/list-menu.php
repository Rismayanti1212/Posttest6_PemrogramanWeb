<?php
    require 'config.php';
    $result = $db->query("SELECT * FROM menus");
    $i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="logo.png">
    <title>Posttest 6 Pemrograman WEB</title>
    <!-- <link rel="stylesheet" href="our-service.css" /> -->
    <link rel="stylesheet" href="our-service-booking-table.css?v3" />
</head>
<body>
    <div class="container"></div>
    
    <header>
        <nav >
            <div class = "box-nav" align = "center"> 
            <ul class = "button-nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="menus.php">MENUS</a></li>
                <li><a href="our-service.php">OUR SERVICES</a></li>
                <li><a href="#">PROMO</a></li>
                <li><a href="aboutme.php">ABOUT ME</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
            <img src = "lightmode.png" id = "icon">
            </div>
        </nav>
    <main>
    <?php
    while($row = mysqli_fetch_array($result)){
    ?>
    <div class = "box5" align="center">
        <p><img src= "images/<?=$row['image_menu']?>" alt = "" width = 400px></p>
        <mark class = "hightlight"><b><?= $row['name_menu']; ?></b><br>
         <b>Rp. <?= $row['price']; ?></b></mark>
    </div>
    <?php 
        $i++;
        }
    ?>

</header>
    </main>
 
    <footer align="center">
        <p>Chimaa Owner The C'MZy RESTAURANT<br>
            Copyright &copy; 2022
        </p>
    </footer>
    <script src = "javascript.js"></script>
</body>
</html>