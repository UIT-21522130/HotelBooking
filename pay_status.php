<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>    
    <title> <?php echo $settings_r['site_title']?>- PAYMENTS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

</head>
<body>
    <?php require('inc/header.php');?>

     <div class = "col-12 px-5">
        <h1 class="fw-bold mt-5">BOOKING STATUS</h1>
         <p class ="fw-bold alert alert-success fs-4">
            <i class="bi bi-check-all"></i>
            Payment done, we contact to you soon! Thank you so much!
            <br> <br>
            <a href='bookings.php'>GO TO BOOKINGS</a>
         </p>
    </div>
    <?php require('inc/footer.php') ?>
</body>
</html>