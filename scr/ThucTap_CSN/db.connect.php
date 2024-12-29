<?php
$server_name = "localhost";
$user_name = "root";
$user_pass = '';
$database_name = "website";

$con = mysqli_connect($server_name, $user_name, $user_pass, $database_name);

if(!$con){
    die ('Connection Failed' .mysql_error());
}
//}else{
    //echo('Co so du lieu duoc ket noi thanh cong');
//}
?>


