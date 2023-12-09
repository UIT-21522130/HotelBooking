
<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <!-- chi can nhap vao HRJ HOTEL -> den trang index.php
                fw: font-weight
                fs: font-size -->
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><?php echo $settings_r['site_title'] ?></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link me-2"  href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="ROOMS.PHP">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilites</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="CONTACT.PHP">Contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
            </li>            
            
        </ul>
        <div class="d-flex">
            <?php
                session_start();
                print_r($_SESSION);
            ?>
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
            <form id="login-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center    ">
                        <i class="bi bi-person-circle fs-3 me-2"></i> User Login 
                    </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class = "form-label">Email / Mobile</label>
                        <input type="text" name="email_mob" required class="form-control shadow-none">
                    </div>
                    <div class="mb-3">
                        <label class = "form-label">Password</label>
                        <input type="password" name="pass" required class="form-control shadow-none">
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
            <form id="register-form">
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
                      
                        <div class="form-group mb-3">
                            <label class="sr-only" >Name</label>
                            <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>                                
                        </div>
                        <div class="form-group mb-3">
                            <label class="sr-only" for="email">Please enter your email address</label>
                            <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="" autocomplete="username" autofocus="">
                            <div class="small text-danger mt-2" hidden=""></div>
                        </div>                            
                        <div class="form-group mb-3">
                            <label class="sr-only" for="number">Phone Number</label>
                            <input id="number"  class="form-control shadow-none" name='phonenum' placeholder="Phone Number">                                
                        </div>
                        <div class="form-group mb-3">
                            <label class="sr-only" >Address</label>
                            <textarea name="address" type="date" class="form-control shadow-none" rows="1" required></textarea>                             
                        </div>
                        <div class="form-group mb-3">
                            <label class="sr-only" >Date of birth</label>
                            <input name="dob" type="date" class="form-control shadow-none">                                
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Picture</label>
                            <input name="profile" accept=".jpg, .jpeg, .png, .webp" type="file" class="form-control shadow-none">                                
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Password</label>
                            <input name="pass"  type="password" class="form-control shadow-none" >      
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label"> Confirm Password</label>
                            <input name="cpass"  type="password" class="form-control shadow-none" >          
                        </div>     
                    
                    </div>
                </div>
                <div class="text-center my-1">
                    <button type="submit" class ="btn btn-dark shadow-none">REGISTER</button>
                
                </div>               
                </div>                           
            </form>
         
        </div>
    </div>
</div>