<?php
    require('admin/inc/essentials.php');
    require('admin/inc/db_config.php');
    require('admin/inc/mpdf/vendor/autoload.php');

    session_start();

    if(!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
        redirect('index.php');
    }

    if(isset($_GET['gen_pdf']) && isset($_GET['id']))
    {
        $frm_data = filteration($_GET);

        $query = "SELECT bo.*, bd.*, uc.email from booking_order bo
        inner join booking_details bd on bo.booking_id = bd.booking_id
        inner join user_cred uc on bo.user_id = uc.id
        where ((bo.booking_status = 'booked' and bo.arrival = 1)
        or (bo.booking_status = 'cancelled' and bo.refund = 1))
        and bo.booking_id = '$frm_data[id]'
        ";

        $res = mysqli_query($con, $query);
        $total_rows = mysqli_num_rows($res);
        if($total_rows ==0 )
        {
            header('location: index.php');
            exit;
        }
        $data = mysqli_fetch_assoc($res);

        $date = date("h:ia | d-m-Y", strtotime($data['datentime']));
        $checkin = date("d-m-Y", strtotime($data['check_in']));
        $checkout = date("d-m-Y", strtotime($data['check_out']));

        // echo $date;

        $table_data = 
        "
            <h2>BOOKING RECEIPT</h2>
            <table border ='1'>
                <tr>
                    <td>Order ID: $data[order_id]</td>
                    <td>Booking Date: $date</td>
                </tr>
                <tr>
                    <td colspan ='2'>Status: $data[booking_status]</td>
                </tr>
                <tr>
                    <td>Name: $data[user_name]</td>
                    <td>Email: $data[email]</td>
                </tr>
                <tr>
                    <td>Phone number: $data[phonenum]</td>
                    <td>Address: $data[address]</td>
                </tr>
                <tr>
                    <td>Room name: $data[room_name]</td>
                    <td>Cost: $data[price] VNĐ one day</td>
                </tr>
                <tr>
                    <td>Check-in: $checkin</td>
                    <td>Check-out: $checkout</td>
                </tr>
        ";
        if($data['booking_status'] == 'cancelled')
        {
            $refund = ($data['refund']) ? "Amount refunded": "Not yet Refunded";

            $table_data .="<tr>
                <td> Amount Paid: $data[total_pay] VND</td>
                <td> Refund: $refund</td>
            </tr>";
        }
        else if($data['booking_status']=='booked')
        {
            $table_data .="<tr>
                <td> Room number: $data[room_no]</td>
                <td> Amount paid: $data[total_pay] VND</td>
            </tr>";
        }
        $table_data .="</table>";
        // echo $table_data;
        $mpdf = new \Mpdf\Mpdf();
        
        $mpdf->WriteHTML($table_data);
        
        $mpdf->Output($data['order_id'].'.pdf', 'D');    
    }
    else
    {
        header('location: index.php');
    }
?>