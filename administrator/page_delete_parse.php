<?php
require("../includes/session.php");

if(!logged_in()){
	redirect_to("../index.php");	
}
else {



$pid = $_POST['pid'];

require_once "../includes/connection.php";

$query = mysqli_query($connection, "DELETE FROM pages WHERE id='$pid'") or die (mysqli_error($connection));

echo 'Page has been deleted successfully. <br /><br /><a href="index.php">Click Here</a>';
exit();
}
?>