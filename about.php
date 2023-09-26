<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRJ Hotel - ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>    
    <style>
        .box{
            border-top-color: var(--teal) !important;

        }
    </style>
    <!-- sao k push dc z-->
</head>
<body class="bg-light">

    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">The PHP includes allow you to reuse common components like the header and footer across multiple pages. <br>The Swiper.js library is also being used for potential slideshow or carousel functionality.
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">HRJ Hotel</h3>
                <p>
                Formerly known as Best Western Dalat Plaza Hotel, built in 2010, it is the first 3-star hotel in Da Lat that meets international standards with 91 bedrooms designed in European architecture in harmony with modern decoration. , amenities. During the operation, the hotel continuously changes and renews services to become an ideal place for tourists, businessmen and those who want to come to enjoy cuisine and festivals, meeting or party.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="m-100" style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">500+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">1000+ REVIEWS</h4>
                </div>
            </div> 
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFFS </h4>
                </div>
            </div>           
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
        <div class="container px-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/grouppeople.jpg" class="w-100">
                        <h5 class="mt-2">Random name</h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/grouppeople.jpg" class="w-100">
                        <h5 class="mt-2">Random name</h5>
                    </div>                
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/grouppeople.jpg" class="w-100">
                        <h5 class="mt-2">Random name</h5>
                    </div>                
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/grouppeople.jpg" class="w-100">
                        <h5 class="mt-2">Random name</h5>
                    </div>                
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/grouppeople.jpg" class="w-100">
                        <h5 class="mt-2">Random name</h5>
                    </div>                
                    <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="images/about/grouppeople.jpg" class="w-100">
                        <h5 class="mt-2">Random name</h5>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <!-- END -->
    <?php require('inc/footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 40,
            pagination: {
            el: ".swiper-pagination",
            },
            breakpoints:{
                320:{
                    slidesPerview:1,
                },
                640:{
                    slidesPerview:1,
                },
                768:{
                    slidesPerview:3,
                },
                1024:{
                    slidesPerview:3,
                },
            }
        });
    </script>

</body> 
</html>