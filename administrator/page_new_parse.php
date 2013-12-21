<?php
require("../includes/session.php");

if(!logged_in()){
	redirect_to("../index.php");
	
}
else {
$pagetitle = $_POST['pagetitle'];
$linklabel = $_POST['linklabel'];
$pagebody = $_POST['pagebody'];

function filterFunction ($var) { 
    //$var = nl2br(htmlspecialchars($var));
    $var = preg_replace("/'/", "&#39;", $var);
    $var = preg_replace("/`/", "&#39;", $var);
    return $var; 
	
} 
$pagetitle = filterFunction($pagetitle);
$linklabel = filterFunction($linklabel);
$pagebody = filterFunction($pagebody);


require_once "../includes/connection.php";

$query = mysqli_query($connection, "INSERT INTO pages (pagetitle, linklabel, pagebody, lastmodified) 
        VALUES('$pagetitle','$linklabel','$pagebody',now())") or die (mysqli_error($myConnection));

echo 'Operation Completed Successfully! <br /><br /><a href="index.php">Click Here</a>';
exit();
}
?>