<?php
require("../includes/session.php");

if(!logged_in()){
	redirect_to("../index.php");	
}
else {




$pid = $_POST['pid'];
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

include_once "../scripts/connect_to_mysql.php";

$query = mysqli_query($connection, "UPDATE pages SET pagetitle='$pagetitle', linklabel='$linklabel', pagebody='$pagebody', lastmodified='now()' WHERE id='$pid'") or die (mysqli_error($myConnection));

echo 'Operation Completed Successfully! <br /><br /><a href="index.php">Click Here</a>';
exit();
}
?>