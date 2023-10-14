<?php
    
    $hname= 'localhost';
    $uname= 'root';
    $pass= '';
    $db = 'hotelbooking';
    $con = mysqli_connect($$hanme,$uname,$pass,$db);

    if(!$con) {
        die("cannot connect DB".mysqli_connect_error());
    }
    /* Lọc data */
    function filteration($data){
        foreach($data as $key => $value){
            $data[$key] = trim($value);
            $data[$key] = stripcslashes($value);
            $data[$key] = htmlspecialchars($value);
            $data[$key] = strip_tags($value);

        }
        return $data;
    }

    function select($sql,$value,$datatypes) 
    {
        
    }
?>