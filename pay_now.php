<?php 
    require('admin/inc/db_config.php');
    require('admin/inc/essentials.php');
    date_default_timezone_set("Asia/Ho_Chi_Minh");

    session_start();
    $_SESSION['room'];
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true)
    {
        redirect('index.php');
    }
    
    if(isset($_POST['pay_now'])) 
    {
        $ORDER_ID = 'ORD_' .$_SESSION['uId'].random_int(11111,99999);
       
        $CUST_ID = $_SESSION['uId'];
        $frm_data = filteration($_POST);
        // $query1 = "INSERT INTO `booking_order`(`room_id`, `user_id`, `check_in`, `check_out`,`order_id`,`total_pay`,`price`) 
        $query1 = "INSERT INTO `booking_order`(`room_id`, `user_id`, `check_in`, `check_out`,`order_id`) 
            VALUES (?,?,?,?,?)";
        // $result = insert($query1,[$_SESSION['room']['id'],$CUST_ID,$frm_data['checkin'],$frm_data['checkout'],$ORDER_ID,$_SESSION['room']['payment'],$_SESSION['room']['price']],'sisssss');
        $result = insert($query1,[$_SESSION['room']['id'],$CUST_ID,$frm_data['checkin'],$frm_data['checkout'],$ORDER_ID],'sisss');
        $booking_id = mysqli_insert_id($con);
        $query2= "INSERT INTO `booking_details`( `booking_id`, `room_name`, `price`, `total_pay`, 
             `user_name`, `phonenum`, `address`) VALUES (?,?,?,?,?,?,?)";
        insert($query2,[$booking_id,$_SESSION['room']['name'],$_SESSION['room']['price'],$_SESSION['room']['payment'],$frm_data['name'],$frm_data['phonenum'],$frm_data['address']],'issssss');
        if($result) {
            redirect('pay_status.php');
        }
    }
?>
