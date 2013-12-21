<?php  
/* Created by Adam Khoury @ www.developphp.com */

// Place db host name. Sometimes "localhost" but  
// sometimes looks like this: >>      ???mysql??.someserver.net 
$db_host = "localhost"; 
// Place the username for the MySQL database here 
$db_username = "root";  
// Place the password for the MySQL database here 
$db_pass = "";  
// Place the name for the MySQL database here 
$db_name = "zcms_tmp"; 

// Run the connection here   
$connection = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die ("could not connect to mysql");  
//mysqli_select_db("zcms");
// Now you can use the variable $myConnection to connect in your queries      
?> 