<?php 

define('DB_SERVER',"localhost");
define('DB_USERNAME',"rootlayout");
define('DB_PASSWORD',"#-1234");
define('DB_DATABASE',"pos_system");

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }

?>