<?php
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang = "vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
   
    <?php require('inc/header.php'); ?>

    <div class="container_fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Chào mừng đến với khách sạn của chúng tôi 🍊🍐🍎🍏🍑🥕🌶🍋🌽🍉🍓🍅🍇🥝🥑🍍🍒🥂🍻🍺🍷🥃🍸🍹🍾
            </div>
        </div>
    </div>

    <style>
    #dashboard-menu {
      position:fixed;
      height:100%;
    }
  </style>

    <?php require('inc/scripts.php');   ?>
</body>
</html>