
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="logo.png">
    <title>Posttest 6 Pemrograman WEB</title>
    <!-- <link rel="stylesheet" href="our-service.css" /> -->
    <link rel="stylesheet" href="preview-booking.css?v3" />
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
        <div><h1 class="text-h1" align = "center">PREVIEW MENUS</h1>
        <div class = "box-preview">
        <table class = "table" border = 0 align = "center">
            <tr>
                <th colspan = '9'>Preview Menu</th>
            </tr>
            <tr>
                <th>Number</th>
                <th>Time Upload</th>
                <th>Name Menu</th>
                <th>Class Menu</th>
                <th>Price</th>
                <th>Pictures</th>
                <th colspan = '2'>Action</th>
            </tr>
            <?php
                require 'config.php';
                $result = $db->query("SELECT * FROM menus");
                $i = 1;
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row['date_upload']; ?></td>
                <td><?= $row['name_menu']; ?></td>
                <td><?= $row['class_menu']; ?></td>
                <td><?= $row['price']; ?></td>
                <td><img src= "images/<?=$row['image_menu']?>" alt = "" width = 100px></td>
                <td><a href = "edit-menu.php?id_menu=<?=$row['id_menu']?>">Update</a></td>
                <td><a href="delete-menu.php?id_menu=<?=$row['id_menu']?>">Delete</a></td>
            </tr>
            <?php 
            $i++;
                }
            ?>
            <tr>
                <th colspan = '9'><a href = "append-menu.php">+ Append Menu</a></th>
            </tr>
            </table>
        </div>
        </main>
</header>
 
    <footer align="center">
        <p>Chimaa Owner The C'MZy RESTAURANT<br>
            Copyright &copy; 2022
        </p>
    </footer>
    <script src = "javascript.js"></script>
</body>
</html>
