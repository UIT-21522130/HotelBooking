
<?php
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['booking_analytics']))
    {
        $frm_data = filteration($_POST);
        $condition ="";
         if($frm_data['period'] ==1 ){
                $condition = "WHERE datentime BETWEEN NOW() - INTERVAL 30 DAY AND NOW()"; 
         }
         else if ($frm_data['peirod'] == 2){
            $condition = "WHERE datentime BETWEEN NOW() - INTERVAL 90 DAY AND NOW()"; 
         }
         else if ($frm_data['peirod'] == 3){
            $condition = "WHERE datentime BETWEEN NOW() - INTERVAL 1 YEAR AND NOW()"; 
         }
        $result = mysqli_fetch_assoc(mysqli_query($con,"SELECT 
    
        COUNT(CASE WHEN booking_status != 'pending'  then 1 end) as `total_bookings`,
        
        COUNT(CASE WHEN booking_status = 'booked' AND arrival =1 then 1 end) as `active_bookings`,
        COUNT(CASE WHEN booking_status = 'cancelled' AND refund =1 then 1 end) as `cancelled_bookings`
        from `booking_order` $condition
    "));
        $output = json_encode($result);
        echo $output;
    }
    if(isset($_POST['user_analytics']))
    {
        $frm_data = filteration($_POST);
        $condition ="";
         if($frm_data['period'] ==1 ){
                $condition = "WHERE datentime BETWEEN NOW() - INTERVAL 30 DAY AND NOW()"; 
         }
         else if ($frm_data['peirod'] == 2){
            $condition = "WHERE datentime BETWEEN NOW() - INTERVAL 90 DAY AND NOW()"; 
         }
         else if ($frm_data['peirod'] == 3){
            $condition = "WHERE datentime BETWEEN NOW() - INTERVAL 1 YEAR AND NOW()"; 
         }
         $total_reviews = mysqli_fetch_assoc(mysqli_query($con,"SELECT 
            COUNT(sr_no) as `count` FROM `rating_review`  $condition "));
         $total_queries = mysqli_fetch_assoc(mysqli_query($con,"SELECT 
            COUNT(sr_no) as `count` FROM `user_queries`  $condition "));
         $total_new_reg = mysqli_fetch_assoc(mysqli_query($con,"SELECT 
            COUNT(id) as `count` FROM `user_cred`  $condition "));

        $output =['total_queries' => $total_queries['count'], 'total_new_reg'=> $total_new_reg['count'], 
                'total_reviews'=> $total_reviews['count']];
       $output = json_encode($output);
       echo $output;
    }
   
?>
