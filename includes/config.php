<?php

$db_conn = mysqli_connect('localhost', 'root', '', 'sms_project');

if($db_conn){
    echo "Database connection established Successfully";
} else{
    echo "Database connection failed";
}
?>