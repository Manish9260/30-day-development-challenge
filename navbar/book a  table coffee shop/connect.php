<?php
$SERVER = "localhodt";
$username = "root";
$password = "";
$dbname = "loging";


$con = mysqli_connect($SERVER,$username,$password,$dbname);

if(!con){

    echo "Not connecte"
}
else{
    echo "connecte";
}

?>
