<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" 
    crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <ul class="menu-bar">
        <a href=""><li>INÍCIO</li></a>
        <a href=""><li>ADOTE</li></a>
        <a href=""><li>SOBRE</li></a>
        <a href="logout.php"><li>SAIR</li></a>
        <div class="form">
        <form action="">
            <input class="input" type="search" required>
            <i style="color: purple;" class="fa fa-search"></i>
            <a class="a" href="javascript:void(0)" id="clear-btn">Clear</a>
        </form>
        </div>
        
    </ul>

</body>

</html>