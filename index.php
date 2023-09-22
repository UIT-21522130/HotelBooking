<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRJ Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:ital,wght@0,400;0,600;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">

    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px){
            .availability-form{
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
    

</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <!-- chi can nhap vao HRJ HOTEL -> den trang index.php
             fw: font-weight
             fs: font-size -->
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">HRJ HOTEL</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilites</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">About us</a>
            </li>            
            
        </ul>
        <div class="d-flex">
            
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
            </button>
        </div>
        </div>
    </div>
    </nav>

    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center    ">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login 
                        </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class = "form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class = "form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit"class="btn btn-dark shadow-none">Login with your email</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none"> Forgot your password?</a>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="passwordForm" action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                             User Registration 
                        </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
                        Note: your details must match with your ID (ID card, passport, driving lisense, etc.) that will be required during check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div data-ol-form-messages="" role="alert"></div>
                            <div class="alert alert-danger" hidden="hidden" data-ol-custom-form-message="password-contains-email" role="alert" aria-live="assertive">Password cannot contain parts of email address.
                                Please use a different password.
                            </div>
                            <div class="alert alert-danger" hidden="hidden" data-ol-custom-form-message="password-too-similar" role="alert" aria-live="assertive">Password is too similar to parts of email address.
                                Please use a different password.
                            </div>
                            <div class="form-group mb-3">
                                <label class="sr-only" for="email">Please enter your email address</label>
                                <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="" autocomplete="username" autofocus="">
                                <div class="small text-danger mt-2" hidden=""></div>
                            </div>                            
                            <div class="form-group mb-3">
                                <label class="sr-only" for="number">Phone Number</label>
                                <input type="number" class="form-control shadow-none" name='phonenumber' placeholder="Phone Number">                                
                            </div>
                            <div class="form-group mb-3">
                                <label class="sr-only" >Date of birth</label>
                                <input type="date" class="form-control shadow-none">                                
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">                                
                            </div>
                            <div class="form-group mb-3">
                                <label class="sr-only" for="passwordField">Please enter your password</label>
                                <input class="form-control" id="passwordField" type="password" name="password" placeholder="Password" required="" autocomplete="new-password" minlength="8">
                                <div class="small text-danger mt-2" hidden=""></div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="sr-only" for="confirmPasswordField">Confirm Password</label>
                                <input class="form-control" id="confirmPasswordField" type="password" name="password" placeholder="Confirm Password" required="" autocomplete="new-password" minlength="8">
                                <div class="small text-danger mt-2" id="confirmPasswordError" hidden>Passwords do not match.</div>
                            </div>     
                       
                        </div>
                    </div>
                    <div class="text-center my-1">
                        <button class="btn btn-dark shadow-none" type="submit" event-tracking="register" event-tracking-ga="register" event-tracking-mb="true" event-tracking-action="clicked" event-tracking-trigger="click" event-tracking-label="email" event-segmentation="{&quot;split-test-design-system-updates&quot;:&quot;default&quot;}" data-ol-disabled-inflight="">
                            <span data-ol-inflight="idle">Register using your email</span>
                            <span hidden="" data-ol-inflight="pending">Registering…</span>
                        </button>
                    </div>                        
                    </div>                    
                </form>
                <script>
                    const passwordField = document.getElementById('passwordField');
                    const confirmPasswordField = document.getElementById('confirmPasswordField');
                    const confirmPasswordError = document.getElementById('confirmPasswordError');
                    const form = document.getElementById('passwordForm');

                    form.addEventListener('submit', function (e) {
                        if (passwordField.value !== confirmPasswordField.value) {
                            e.preventDefault(); // Prevent form submission
                            confirmPasswordError.removeAttribute('hidden');
                        } else {
                            confirmPasswordError.setAttribute('hidden', 'true');
                        }
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- Carousal -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/1.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/2.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/3.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/4.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/5.png" class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/6.png" class="w-100 d-block"/>
            </div>
            </div>
        </div>
    </div>
    <!-- Check availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;" >Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;" >Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;" >Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="3">Four</option>
                                <option value="3">Five</option>
                                <option value="3">Six</option>
                                <option value="3">Seven</option>
                                <option value="3">Eight</option>

                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;" >Children</label>
                            <select class="form-select shadow-none">
                                <option value="3">Zero</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Our rooms -->
    <h2 id="rooms" class ="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">$10 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <!-- <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Pool
                        </span> -->

                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">$10 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <!-- <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Pool
                        </span> -->

                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Simple Room Name</h5>
                      <h6 class="mb-4">$10 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            3 Sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Television
                        </span>
                        <!-- <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Pool
                        </span> -->

                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                      </div>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>
    <!-- Our facilities -->
    <h2 id="ourfacilities" class ="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/facilities/wifi.svg" width="80px">
            <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/arrow-through-heart-fill.svg" width="80px">
                <h5 class="mt-3">arrow-through-heart-fill</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/maylanh.svg" width="80px">
                <h5 class="mt-3">maylanh</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/nuong.svg" width="80px">
                <h5 class="mt-3">nuong</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/tv.svg" width="80px">
                <h5 class="mt-3">tv</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>
    <!-- Testimonials -->
    <h2 class ="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center p-4">
                    <img src="images/facilities/star-fill.svg" width="30px">
                    <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>
                    Remember to adapt the code to your specific needs and the structure of the Cafe Vietstock website. Additionally, be mindful of any terms of service and legal considerations when scraping data from websites.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>

                </div>
              </div>
              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center p-4">
                    <img src="images/facilities/star-fill.svg" width="30px">
                    <h6 class="m-0 ms-2">Random user2</h6>
                </div>
                <p>
                    Remember to adapt the code to your specific needs and the structure of the Cafe Vietstock website. Additionally, be mindful of any terms of service and legal considerations when scraping data from websites.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>

                </div>
              </div>  
              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center p-4">
                    <img src="images/facilities/star-fill.svg" width="30px">
                    <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>
                    Remember to adapt the code to your specific needs and the structure of the Cafe Vietstock website. Additionally, be mindful of any terms of service and legal considerations when scraping data from websites.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill "></i>
                    <i class="bi bi-star-fill "></i>
                    <i class="bi bi-star-fill "></i>
                    <i class="bi bi-star-fill "></i>

                </div>
              </div>  
              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center p-4">
                    <img src="images/facilities/star-fill.svg" width="30px">
                    <h6 class="m-0 ms-2">Random user1</h6>
                </div>
                <p>
                    Remember to adapt the code to your specific needs and the structure of the Cafe Vietstock website. Additionally, be mindful of any terms of service and legal considerations when scraping data from websites.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>

                </div>
              </div>           
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div> 

    <!-- Reach us -->
    <h2 id="reachus" class ="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31345.845566573757!2d106.78245441179263!3d10.870050360181233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2sUniversity%20of%20Information%20Technology%20-%20VNUHCM!5e0!3m2!1sen!2s!4v1695391254591!5m2!1sen!2s" loading="lazy" ></iframe>            
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: 0986313973" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0986313973
                    </a><br>
                    <a href="tel: 0986313973" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0123456789
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="https://www.facebook.com/huong.bt.581/" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook</span>
                    </a><br>
                    <a href="https://github.com/UIT-21522130" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-github me-1"></i> Github</span>
                    </a><br>
                    <a href="https://www.instagram.com/_huong3002_/" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i> Instagram</span>
                    </a><br>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2">HRJ HOTEL</h3>
                <p>
                    Collaboration between educational institutions and employers is vital for addressing these dynamics and optimizing graduates' skills in their careers.
                </p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="#rooms" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="#ourfacilities" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
                <a href="#reachus" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>

            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow us</h5>
                <a href="https://www.facebook.com/huong.bt.581/" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-facebook me-1"></i> Facebook</span>
                </a><br>
                <a href="https://github.com/UIT-21522130" class="d-inline-block text-dark text-decoration-none mb-2">
                    <i class="bi bi-github me-1"></i> Github</span>
                </a><br>
                <a href="https://www.instagram.com/_huong3002_/" class="d-inline-block text-dark text-decoration-none">
                    <i class="bi bi-instagram me-1"></i> Instagram</span>
                </a><br>
            </div>
        </div>
    </div>

    <h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by our groups</h6>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay:{
            delay:3500,
            disableonInteraction: false,
        }
        });
        
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop:true,
            coverflowEffect: {
              rotate: 50,
              stretch: 0,
              depth: 100,
              modifier: 1,
              slideShadows: false,
            },
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
                    slidesPerview:2,
                },
                1024:{
                    slidesPerview:3,
                },
            }
          });
    </script>

</body> 
</html>