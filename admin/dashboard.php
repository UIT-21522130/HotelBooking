<?php
    require('inc/essentials.php');
    require('inc/db_config.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang = "vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
   
    <?php 
        require('inc/header.php'); 
        $is_shutdown = mysqli_fetch_assoc(mysqli_query($con,"SELECT `shutdown` FROM `settings`"));
        $current_bookings = mysqli_fetch_assoc(mysqli_query($con,"SELECT 
            COUNT(CASE WHEN booking_status = 'booked' AND arrival =0 then 1 end) as `new_bookings`,
            COUNT(CASE WHEN booking_status = 'cancelled' AND refund =0 then 1 end) as `refund_bookings`
        from `booking_order`
        "));
        // $current_users = mysqli_fetch_assoc(mysqli_query($con,"SELECT
        //     COUNT(id) AS `total`,
        //     COUNT(CASE WHEN  `is_verified`=0 THEN 1 END) AS `unverified`
        //     from `user_cred`
        // "));
        $unread_queries = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(sr_no) as `count` FROM `user_queries` where `seen` =0 "));
        
        $unread_reviews = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(sr_no) as `count` FROM `rating_review` where `seen` =0 "));
        
        $current_users = mysqli_fetch_assoc(mysqli_query($con,"SELECT 
            COUNT(id) as total,
            COUNT(CASE WHEN `is_verified` = 1 then 1 end) as `active`,
            COUNT(CASE WHEN  `is_verified` = 0 then 1 end) as `inactive`
        from `user_cred`"));  
    ?>


    <div class="container_fluid" id="main-content">
        <!-- <div class="row mb-4">            -->
             <div class="col-lg-10 ms-auto p-4 overflow-hidden"> 
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3>DASHBOARD 🌻🌷🌹🌛⛺🏨🏰🏯🚃⛽🏟️</h3>
                        <?php 
                            if($is_shutdown['shutdown']) {
                                echo <<<data
                                    <h6 class="badge bg-danger py-2 px-3 rounded">Shutdown Mode is actived! </h6>
                                
                                data;
                            }
                        ?>
                </div>            
        <div class="row mb-4">
            <div class="col-md-3 mb-4">
                <a href="new_bookings.php" class="text-decoration-none">
                    <div class="card text-center text-success p-3">
                        <h4>New Bookings 🗓</h4>
                        <h1 class="mt-2 mb-0"><?php echo $current_bookings['new_bookings']?> </h1>                        
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="refund_bookings.php" class="text-decoration-none">
                    <div class="card text-center text-warning p-3">
                        <h4>Refund Bookings 🗓😱</h4>
                        <h1 class="mt-2 mb-0"> <?php echo $current_bookings['refund_bookings'] ?> </h1>
                    </div>
                </a>
            </div>
          <div class="col-md-3 mb-4">
          <!-- <div class="col-lg-10 ms-auto p-3"> -->
              <a href="user_queries.php" class="text-decoration-none">
                  <div class="card text-center text-info p-3">
                      <h4>Users Queries 👨‍👩‍👦‍👦</h4>
                      <h1 class="mt-2 mb-0"><?php echo $unread_queries['count'] ?></h1>
                  </div>
              </a>
          </div>
          <div class="col-md-3 mb-4">
              <a href="rate_review.php" class="text-decoration-none">
                  <div class="card text-center text-info p-3">
                      <h4>Rating & Review ️🥇️🥈️🥉💖</h4>
                      <h1 class="mt-2 mb-0"><?php echo $unread_reviews['count'] ?></h1>
                  </div>
              </a>
          </div>

      </div>

        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4>Booking Analytics 🔍📝📈📊</h4>
            <select class="form-select shadow-none bg-light w-auto" onchange="booking_analytics(this.value)">
                <option value="1">Past 30 Days</option>
                <option value="2">Past 90 Days</option>
                <option value="3">Past 1 years</option>
                <option value="4">Past all time</option>
            </select>  
        </div>

        <div class="row mb-3">
          <div class="col-md-3 mb-4">
                  <div class="card text-center text-primary p-3">
                      <h6>Total Bookings</h6>
                      <h1 class="mt-2 mb-0" id="total_bookings">4</h1>
                      <h4 class = "mt-2 mb-0" id="total_amt"></h4>
                  </div>
          </div>
          <div class="col-md-3 mb-4">
                  <div class="card text-center text-success p-3">
                      <h6>Active Bookings</h6>
                      <h1 class="mt-2 mb-0" id="active_bookings">4</h1>
                      <h4 class = "mt-2 mb-0" id="active_amt"></h4>
                  </div>
          </div>
          <div class="col-md-3 mb-4">
                  <div class="card text-center text-success p-3">
                      <h6>Cancelled Bookings</h6>
                      <h1 class="mt-2 mb-0" id="cancelled_bookings">4</h1>
                      <h4 class = "mt-2 mb-0" id="cancelled_amt"></h4>
                  </div>
          </div>
        </div>


        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4>User, Queries, Review Analytics</h4>
            <select class="form-select shadow-none bg-light w-auto" onchange="user_analytics(this.value)">
                <option value="1">Past 30 Days</option>
                <option value="2">Past 90 Days</option>
                <option value="3">Past 1 years</option>
                <option value="4">Past all time</option>
            </select>  
        </div>

        <div class="row mb-3">
          <div class="col-md-3 mb-4">
            <div class="card text-center text-success p-3">
                <h6>New Registration</h6>
                <h1 class="mt-2 mb-0" id="total_new_reg"></h1>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card text-center text-primary p-3">
                <h6>Queries</h6>
                <h1 class="mt-2 mb-0" id ="total_queries"></h1>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="card text-center text-primary p-3">
                <h6>Reviews</h6>
                <h1 class="mt-2 mb-0" id="total_reviews"></h1>
            </div>
          </div>
      </div>

        <h5>Users</h5>
        <div class="row mb-3">
          <div class="col-md-3 mb-4">
                  <div class="card text-center text-info p-3">
                      <h5>Total</h5>
                      <h1 class="mt-2 mb-0"><?php echo $current_users['total'] ?></h1>
                  </div>
          </div>
          <div class="col-md-3 mb-4">
                  <div class="card text-center text-success p-3">
                      <h5>Active</h5>
                      <h1 class="mt-2 mb-0"><?php echo $current_users['active'] ?></h1>
                  </div>
          </div>
          <div class="col-md-3 mb-4">
                  <div class="card text-center text-warning p-3">
                      <h5>Inactive</h5>
                      <h1 class="mt-2 mb-0"><?php echo $current_users['inactive'] ?></h1>
                  </div>
          </div>
      </div>   
    </div>
    </div>
    </div>

    <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

    <?php require('inc/scripts.php');   ?>
    <script src="scripts/dashboard.js"></script>
</body>
</html>