<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRJ Hotel - CONTACT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>    


</head>
<body class="bg-light">

    <?php require('inc/header.php');?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">The PHP includes allow you to reuse common components like the header and footer across multiple pages. <br>The Swiper.js library is also being used for potential slideshow or carousel functionality.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31345.845566573757!2d106.78245441179263!3d10.870050360181233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2sUniversity%20of%20Information%20Technology%20-%20VNUHCM!5e0!3m2!1sen!2s!4v1695391254591!5m2!1sen!2s" loading="lazy" ></iframe>            
                <h5>Address</h5>
                <a href="https://maps.app.goo.gl/HRTpHdzTc1adhG79A" targer="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                    <i class="bi bi-geo-alt-fill"></i> Đường Hàn Thuyên, khu phố 6 P, Thủ Đức, Thành phố Hồ Chí Minh, Vietnam
                </a>
                <h5 class="mt-4">Call us</h5>
                <a href="tel: 0986313973" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> 0986313973
                </a><br>
                <a href="tel: 0986313973" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> 0123456789
                </a>

                <h5 class="mt-4">Email</h5>
                <a href="mailto: 21522130@gm.uit.edu.vn" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-fill"></i> 21522130@gm.uit.edu.vn
                </a>
                <h5 class="mt-4">Follow us</h5>
                <a href="https://www.facebook.com/huong.bt.581/" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-facebook me-1"></i> 
                </a>
                <a href="https://github.com/UIT-21522130" class="d-inline-block text-dark fs-5 me-2">
                    <i class="bi bi-github me-1"></i> 
                </a>
                <a href="https://www.instagram.com/_huong3002_/" class="d-inline-block text-dark fs-5">
                    <i class="bi bi-instagram me-1"></i> 
                </a>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class = "form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class = "form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class = "form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class = "form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit"class="btn text-white custom-bg mt-3">SEND</button>

                    </form>              
                </div>
            </div>
        </div>
    </div>

        <!-- END -->
    <?php require('inc/footer.php');?>

</body> 
</html>