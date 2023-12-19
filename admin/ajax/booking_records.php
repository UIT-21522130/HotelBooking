
<?php
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['get_bookings']))
    {
        $frm_data = filteration($_POST);

        $limit = 10;
        $page = $frm_data['page'];
        $start = ($page-1)* $limit;

        $query = "SELECT bo.*, bd.* from booking_order bo
        inner join booking_details bd on bo.booking_id = bd.booking_id
        where ((bo.booking_status = 'booked' and bo.arrival = 1)
        or (bo.booking_status = 'cancelled' and bo.refund = 1))
        and (bo.order_id like ? or bd.phonenum like ? or bd.user_name like ?)
        order by bo.booking_id desc";

        $res = select($query,
             ["%$frm_data[search]%", "%$frm_data[search]%", "%$frm_data[search]%"], 'sss');
        
        $limit_query = $query ." LIMIT $start, $limit";
        $limit_res = select($limit_query,
            ["%$frm_data[search]%", "%$frm_data[search]%", "%$frm_data[search]%"], 'sss');
        
        $i = 1;
        $table_data = "";

        $total_rows = mysqli_num_rows($res);

        if($total_rows==0)
        {
            $output = json_encode(["table_data"=>"<b>No data found!</b>", "pagination"=>'']);
            echo $output;
            exit;
        }

        while($data = mysqli_fetch_assoc($limit_res))
        {
            $date = date("d-m-Y", strtotime($data['datentime']));
            $checkin = date("d-m-Y", strtotime($data['check_in']));
            $checkout = date("d-m-Y", strtotime($data['check_out']));

            if($data['booking_status']=='booked')
            {
                $status_bg = 'bg-success';
            }
            else if($data['booking_status']=='cancelled')
            {
                $status_bg = 'bg-danger';
            }

            $table_data .=
            "
                <tr>
                    <td>$i</td>
                    <td>
                        <span class='badge bg-primary'>
                            Order ID: $data[order_id]
                        </span> <br>
                        <b>Name: <b> $data[user_name] <br>
                        <b>Phone number: </b>$data[phonenum]
                    </td>
                    <td>
                        <b>Room: </b>$data[room_name] <br>
                        <b>Price: </b> $data[price] VNĐ
                    </td>
                    <td>
                        <b>Amount: </b> $data[total_pay] VNĐ <br>
                        <b>Date: </b> $date 
                    </td>
                    <td>
                        <span class ='badge $status_bg'>$data[booking_status]</span>
                    </td>
                    <td>
                        <button type='button' onclick='cancel_booking($data[booking_id])' class='mt-2 btn btn-outline-danger btn-sm fw-bold shadow-none'>
                            <i class='bi bi-trash'></i>
                        </button>
                    </td>
                </tr>
            ";

            $i++;
        }
        echo $table_data;
    }

    if(isset($_POST['assign_room']))
    {
        $frm_data = filteration($_POST);

        $query = "UPDATE booking_order bo inner join booking_details bd
        ON bo.booking_id = bd.booking_id
        set bo.arrival = ?,  bd.room_no = ?
        where bo.booking_id = ?";

        $values = [1, $frm_data['room_no'], $frm_data['booking_id']];
        $res = update($query, $values, 'isi');

        echo ($res == 2) ? 1 : 0;
    }


    if(isset($_POST['cancel_booking']))
    {
        $frm_data = filteration($_POST);
        $query = "UPDATE booking_order set booking_status=?, refund=? where booking_id = ?";
        $values = ['cancelled',0, $frm_data['booking_id']];

        $res = update($query, $values, 'sii');
        echo $res;
    }

?>
