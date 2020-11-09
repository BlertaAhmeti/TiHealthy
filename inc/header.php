<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TiHealthy</title>
</head>
<style >
    .nav-link{
        color: #fff;
        margin-right: 30px;
        text-transform: uppercase;
        font-weight: bold;
    }
    .logo{
       color: #fff;
       font-weight: bold;
    }

    .activeItem{
        border-bottom: 1px solid #fff;
    }
 
</style>
<body>

    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: green;">
        <div class="container">
            <a class="navbar-brand" href="#"><h3 class="logo w-25">TiHealthy</h3></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0  ">
                    <li class="nav-item active ">
                        <a class="nav-link" href="index.php">Ballina</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Menu</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="klientet.php">Klientet</a>
                    </li>
                    <?php if(isset($_SESSION['adm'])){
                        if(!is_null( $_SESSION['adm']['username'])){
                        ?>
                   <li class="nav-item">
                        <a class="nav-link" href="porosite.php">Porosite</a>
                    </li>
                  <?php } } ?>
                  <?php if(empty($_SESSION['adm']['username'])){?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" >Login</a>
                    </li>
                   <?php }else {?>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                 <?php  } ?>
                </ul>
            </div>
        </div>
    </nav>
   