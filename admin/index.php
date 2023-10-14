<!DOCTYPE html>
<html lang='vi'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php')  ?>
    <style>
        div.login-form{
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body class ="bg-light"></body>
    <div>
        <form>
            <h4>Admin Login</h4>
            <div>
                    <div class="mb-3">
                        <label class = "form-label">Email address</label>
                        <input type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                    </div>
                    <div class="mb-4">
                        <label class = "form-label">Password</label>
                        <input type="password" class="form-control shadow-none" placeholder="Password">
                    </div>
                    <button type="submit" class="btn -text-white custom-bg shadow-none" ></button>
            </div>
        </form>
    </div>
    <?php require('inc/scripts.php') ?>
</body>
</html>