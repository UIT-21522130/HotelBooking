
<?php
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['get_bookings']))
    {
        $frm_data = filteration($_POST);
        $query = "SELECT bo.*, bd.* from booking_order bo
        inner join booking_details bd on bo.booking_id = bd.booking_id
        where (bo.order_id like ? or bd.phonenum like ? or bd.user_name like ?)
        and (bo.booking_status = ? and bo.arrival = ?) 
        order by bo.booking_id ASC";

        $res = select($query,
             ["%$frm_data[search]%", "%$frm_data[search]%", "%$frm_data[search]%", "booked", 0], 'sssss');
        $i = 1;
        $table_data = "";

        if(mysqli_num_rows($res)==0)
        {
            echo "<b>No data found!</br>";
            exit;
        }

        while($data = mysqli_fetch_assoc($res))
        {
            $date = date("d-m-Y", strtotime($data['datentime']));
            $checkin = date("d-m-Y", strtotime($data['check_in']));
            $checkout = date("d-m-Y", strtotime($data['check_out']));

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
                        <b> Check-in: </b>$checkin <br>
                        <b> Check-out: </b>$checkout <br>
                        <b>Paid: </b> $data[total_pay] VNĐ <br>
                        <b>Date: </b> $date 
                    </td>
                    <td>
                        <button type='button' onclick='assign_room($data[booking_id])' class='btn text-white btn-sm fw-bold custom-bg shadow-none' data-bs-toggle='modal' data-bs-target='#assign-room'>
                            <i class='bi bi-check2-square'></i> Assign room
                        </button> <br>
                        <button type='button' onclick='cancel_booking($data[booking_id])' class='mt-2 btn btn-outline-danger btn-sm fw-bold shadow-none'>
                            <i class='bi bi-trash'></i> Cancel booking
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
        set bo.arrival = ?, bo.rate_review =?,  bd.room_no = ?
        where bo.booking_id = ?";

        $values = [1,0, $frm_data['room_no'], $frm_data['booking_id']];
        $res = update($query, $values, 'iisi');

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
