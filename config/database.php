<?php

 $host = "localhost";
 $port = "5432";
 $dbname = "pro_inter";
 $user= "postgres";
 $password="postgres";

 
$conn = pg__connect("
    host=$host
    port= $port
    dbname=$name
    user=$user
    password =$password

")

if(!$conn){
    die("Connection error".preg_last_error())
}else{
    echo"Success connetion"
}

?>

