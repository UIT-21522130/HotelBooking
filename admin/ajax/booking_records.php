
<?php
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['get_bookings']))
    {
        $frm_data = filteration($_POST);

        $limit = 1;
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
        
        $total_rows = mysqli_num_rows($res);

        if($total_rows==0)
        {
            $output = json_encode(["table_data"=>"<b>No data found!</b>", "pagination"=>'']);
            echo $output;
            exit;
        }
        $i = $start+1;
        $table_data ="";

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
                        <button type='button' onclick='download($data[booking_id])' class='btn btn-outline-success btn-sm fw-bold shadow-none'>
                            <i class='bi bi-file-earmark-arrow-down-fill'></i>                        
                        </button>
                    </td>
                </tr>
            ";

            $i++;
        }

        $pagination ="";
        if ($total_rows > $limit)
        {
            $total_pages = ceil($total_rows/$limit); // vd có 25 records 5 limit => 25/5 = 5 pages

            if($page != 1)
            {
                $pagination .= "<li class='page-item '>
                    <button onclick ='change_page(1)' class='page-link shadow-none'>First</a>
                </li>";
            }

            $disabled = ($page == 1) ? "disabled" : "";
            $prev = $page-1;
            $pagination .= "<li class='page-item $disabled'>
                <button onclick ='change_page($prev)' class='page-link shadow-none'>Prev</a>
            </li>";
            
            $disabled = ($page == $total_pages) ? "disabled" : "";
            $next = $page+1;
            $pagination .= "<li class='page-item $disabled'>
                <button onclick ='change_page($next)' class='page-link shadow-none'>Next</a>
            </li>";
        
            if($page != $total_pages)
            {
                $pagination .= "<li class='page-item '>
                    <button onclick ='change_page($total_pages)' class='page-link shadow-none'>Last</a>
                </li>";
            }
        }


        $output = json_encode(["table_data"=>$table_data, "pagination" => $pagination]);
        echo $output;
    }


?>
