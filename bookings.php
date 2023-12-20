<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('inc/links.php');?>    
    <title> <?php echo $settings_r['site_title']?> - CONFIRM BOOKING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


</head>
<body class="bg-light">

    <?php
        require('inc/header.php');
        
        if(!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
            redirect('index.php');
        }
    ?>

    <div class="container">
        <div class="row">
        
            <div class="col-12 my-5  px-4">
                <h2 class="fw-bold ">BOOKINGS</h2>
                <div style="font-size:14px;">
                    <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
                    <span class="text-secondary"> > </span>
                    <a href="#" class="text-secondary text-decoration-none">BOOKINGS</a>
                </div>
            </div> 
            <?php
                $query = "SELECT bo.*, bd.* from booking_order bo
                    inner join booking_details bd on bo.booking_id = bd.booking_id
                    where ((bo.booking_status = 'booked')
                    or (bo.booking_status = 'cancelled')
                    or (bo.booking_status = 'payment failed'))
                    and (bo.user_id=?)
                    order by bo.booking_id desc";
                
                $result = select($query, [$_SESSION['uId']], 'i');

                while($data = mysqli_fetch_assoc($result))
                {
                    $date = date("d-m-Y", strtotime($data['datentime']));
                    $checkin = date("d-m-Y", strtotime($data['check_in']));
                    $checkout = date("d-m-Y", strtotime($data['check_out']));

                    $status_bg = "";
                    $btn = "";

                    if($data['booking_status'] == 'booked') {
                       $status_bg = "bg-success";
                       if($data['arrival'] == 1) {
                            $btn = "<a href='generate_pdf.php&gen_pdf&id=$data[booking_id]' class='btn btn-dark btn-sm shadow-none'>Download PDF</a>
                            <button type='button' class='btn btn-dark btn-sm shadow-none'>Rate & Review</button>";
                       } 
                       else {
                        $btn = "<button type='button' class='btn btn-danger btn-sm shadow-none'>Cancel</button>";
                       }
                    }
                    else if($data['booking_status'] == 'cancelled'){
                        $status_bg = "bg-danger";
                        
                        if($data['refund'] == 0) {
                            $btn = "<span class='badge btn-primary'>Refund in process!</span>";
                        }
                        else {
                            $btn = "<a href='generate_pdf.php&gen_pdf&id=$data[booking_id]' class='btn btn-dark btn-sm shadow-none'>Download PDF</a>";
                        }
                    }
                    else {
                        $status_bg = "bg-warning";
                        $btn = "<a href='generate_pdf.php&gen_pdf&id=$data[booking_id]' class='btn btn-dark btn-sm shadow-none'>Download PDF</a>";
                    }

                    echo <<<bookings
                        <div class='col-md-4 px-4 mb-4'>
                            <div class='bg-white p-3 rounded shadow-sm'>
                                <h5 class="fw-bold">$data[room_name]</h5>
                                <p>$data[price] VND per night</p>
                                <p>
                                    <b>Check in: </b> $checkin <br>
                                    <b>Check out: </b> $checkout
                                </p>
                                <p>
                                    <b>Amount: </b>$data[price] VND<br>
                                    <b>Check out: </b> $data[order_id] <br>
                                    <b>Date: </b> $date
                                </p>
                                <p>
                                    <span class='badge $status_bg'>$data[booking_status]</span>
                                </p>
                                $btn
                            </div>
                        </div>
                    bookings;
                }
            ?>
        </div>
    </div>

    <?php require('inc/footer.php');?>
</body> 
</html>