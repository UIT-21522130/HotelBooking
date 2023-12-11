<?php 
   require('../admin/inc/db_config.php');
   require('../admin/inc/essentials.php');

   date_default_timezone_set("Asia/Ho_Chi_Minh");

  
   if(isset($_POST['register']))
   {
        $data= filteration($_POST);

        //match password and confirm password
        if($data['pass'] != $data['cpass']) {
                // echo 'pass_mismatch';
                echo 2;
                exit;
        }
        //check user exist or not
        $u_exist =select("SELECT * FROM `user_cred` WHERE `email`= ? OR `phonenum` = ? LIMIT 1",
        [$data['email'],$data['phonenum']],"ss");
        
        if(mysqli_num_rows($u_exist)!=0){
            $u_exist_fetch = mysqli_fetch_assoc($u_exist);
            // echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
            echo ($u_exist_fetch['email'] == $data['email']) ? 3 : 4;
            exit;
        }
        //upload user image to server
        $img = uploadUserImage($_FILES['profile']);
        if ($img == 'inv_img') {
            echo 'inv_img';
            exit;
        }
        //
        else if ($img == 'upd_failed') {
            echo 'upd_failed';
            exit;
        }
        //upload DB
        $query = "INSERT INTO `user_cred`( `name`, `email`, `phonenum`, `dob`, `profile`,
         `address`, `password`) VALUES (?,?,?,?,?,?,?)";
         $values = [$data['name'], $data['email'], $data['phonenum'], $data['dob'], $img, $data['address'],$data['pass']];
        if(insert($query,$values,'sssssss')) {
            echo 1;
        }
        else {
            echo 'ins_failed';
        } 
   }


   if(isset($_POST['login']))
   {
        $data = filteration($_POST);

        // Thực hiện truy vấn SQL
        $u_exist = select("SELECT * FROM `user_cred` WHERE `email`= ? OR `phonenum`= ? LIMIT 1", 
        [$data['email_mob'], $data['email_mob']], "ss");

        // Kiểm tra số dòng kết quả trả về
        if ($u_exist && mysqli_num_rows($u_exist) > 0) {

            $u_fetch = mysqli_fetch_assoc($u_exist);
            if($u_fetch['is_verified']==0)
            {
                echo 'not_verified';
            }
            else
            {
                if ($u_fetch['password'] === $data['pass']) {
                    session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['uId'] = $u_fetch['id'];
                    $_SESSION['uName'] = $u_fetch['name'];
                    $_SESSION['uPic'] = $u_fetch['profile'];
                    $_SESSION['uPhone'] = $u_fetch['phonenum'];
                    echo 'success';
                } else {
                    echo 'invalid_pass';
                }
            }
        } 
        else 
            {
                echo 'inv_email_mob';
            }
   }

   if(isset($_POST['forgot_pass']))
   {
        $data = filteration($_POST);

        $u_exist = select("SELECT * FROM `user_cred` WHERE `email`= ?  LIMIT 1", [$data['email']], "s");

        if(mysqli_num_rows($u_exist)==0)
        {
            echo 'inv_email';
        }
        else
        {
            $u_fetch = mysqli_fetch_assoc($u_exist);
            if($u_fetch['is_verified']==0)
            {
                echo 'not_verified';
            }
            else
            {
                //Đoạn này ảnh hưởng phần send mail -> xem lại 47:19
                echo 'upd_failed';
            }
        }
   }


   if(isset($_POST['recover_user']))
   {
    $data = filteration($_POST);

    $enc_pass = password_hash($data['pass'],PASSWORD_BCRYPT);

    //Đoạn này lấy token và t_expire => xem lại 1:10:30
    $query = "UPDATE `user_cred` SET `password`=? WHERE `email`=? ";

    $values = [$enc_pass,null,null,$data['email']];

    if(update($query,$value,'ssss'))
    {
        echo 1;
    }
    else
    {
        echo'failed';
    }

   }

?>