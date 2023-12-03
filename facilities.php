<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRJ Hotel - FACILITIES</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>    
    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform:scale(1.03);
            transition: all 0.3s;
        }
    </style>

</head>
<body class="bg-light">

    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">The PHP includes allow you to reuse common components like the header and footer across multiple pages. <br>The Swiper.js library is also being used for potential slideshow or carousel functionality.
        </p>
    </div>

    <div class="container">
        <div class="row">
    <?php 
        $res= selectAll('facilities');
        while ($row = mysqli_fetch_assoc($res)) {
            echo <<<data
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex a;ign-items-center mb-2">
                        <img src="images/facilities/{$row['name']}.svg" width="40px">
                        <h5 class="m-2 ms-3">$row[name]</h5>
                    </div>  
                        <p>$row[description]</p>                                      
                </div>
                </div>
            data;
        } 

    ?>
         
        
        <!-- END -->
    <?php require('inc/footer.php');?>

</body> 
</html>