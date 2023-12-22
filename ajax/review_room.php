<?php 
   require('../admin/inc/db_config.php');
   require('../admin/inc/essentials.php');

   date_default_timezone_set("Asia/Ho_Chi_Minh");
    session_start();


    if(!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
        redirect('index.php');
    }

    if(isset($_POST['review_form']))
    {
        $frm_data = filteration($_POST);
       
        $upd_query = "UPDATE `booking_order` SET `rate_review`=? WHERE `booking_id`=? AND `user_id`=? ";

        $upd_values = [1,$frm_data['booking_id'],$_SESSION['uId']];

        $ups_result = update($upd_query,$upd_values,'iii');

        echo $result;
    }
    

  ?>