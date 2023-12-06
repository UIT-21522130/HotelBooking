
<?php
    require('inc/essentials.php');
    require('inc/db_config.php');

    session_start();
    if ((isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"] == true)){
        redirect("dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang='vi'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php require('inc/links.php')  ?>
    <style>
        div.login-form{
            position: absolute; 
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width:500px;
        }
    </style>
</head>
<body class ="bg-light"> 
    
    <div class = "login-form text-center rounded bg-white shadow overflow-none ">
        <form method="POST">
            <h4 class="bg-primary text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                    <div class="mb-3">
                        <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
                    </div>
                    <div class="mb-4">
                        <input name = "admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
                    </div>
                    <button name="login" type="submit" class="btn text-white bg-primary shadow-none" >Login</button>
                    <!-- <input name="login" type="submit" value = "Login" class="btn text-white bg-primary shadow-none" > -->

            </div>
        </form>
    </div>
    
    <?php
        if(isset($_POST['login']))
        {
            $frm_data = filteration($_POST);

            $query = "SELECT * FROM `admin` where `admin_name`=? and `admin_pass` = ?";
            $values = [$frm_data['admin_name'],$frm_data['admin_pass']];
            $res = select($query,$values,"ss");
            if($res->num_rows==1){
                $row= mysqli_fetch_array($res);
               
                $_SESSION["adminLogin"] = true;
                $_SESSION["adminId"] = $row["sr_no"];
                redirect('dashboard.php');
            }
            else{
               alert('error','Login failed-Vui lòng nhập đúng tài khoản');
               
            }
        }

    ?>


</body>
</html>