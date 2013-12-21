<?php
session_start();


require_once "includes/connection.php";
// Determine which page ID to use in our query below ---------------------------------------------------------------------------------------

if (!isset($_GET['pid'])){
$pageid = '1';
} else {

	$pageid = preg_replace('/[^0-9]/',"",$_GET['pid']);
;
}
// Query the body section for the proper page
$sqlCommand = "SELECT pagebody FROM pages WHERE id='$pageid' LIMIT 1"; 
$query = mysqli_query($connection, $sqlCommand) or die (mysqli_error()); 
while ($row = mysqli_fetch_array($query)) { 
    $body = $row["pagebody"];
} 
mysqli_free_result($query); 
//---------------------------------------------------------------------------------------------------------------------------------------------------------------


//---------------------------------------------------------------------------------------------------------------------------------------------------------------
// Build Main Navigation menu and gather page data here -----------------------------------------------------------------------------
$sqlCommand = "SELECT id, linklabel FROM pages WHERE showing='1' ORDER BY id ASC"; 
$query = mysqli_query($connection, $sqlCommand) or die (mysqli_error()); 

$menuDisplay = '';
while ($row = mysqli_fetch_array($query)) { 
    $pid = $row["id"];
    $linklabel = $row["linklabel"];
	
	//$menuDisplay .= '<a href="index.php?pid=' . $pid . '">' . $linklabel . '</a><br />';
	  $menuDisplay .= '<li><a href="index.php?pid=' . $pid . '">' . $linklabel . '</a></li>';
	
} 
mysqli_free_result($query); 
//---------------------------------------------------------------------------------------------------------------------------------------------------------------
//mysqli_close($myConnection); 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Z-Burger, Glover Park | Home</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

<div id="hwrapper">
	<div id="header">
    	<div id="headertext">
    		<ul><?php echo $menuDisplay; ?></ul>
        </div>
    
   
    </div>


</div>
<br />
<div id="contentwrapper">


<?php echo $body; ?>


</div>

<div id="mediafooter">
<a href="https://www.facebook.com/pages/Z-burger/85125658792" target="_blank"><img src="img/facebook.png" border="0"></a>
<a href="https://www.twitter.com/zburger" target="_blank"><img src="img/twitter.png" border="0"></a>
</div>

</body>
</html>