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
            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link  me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilites</a>
            </li>
            <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
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