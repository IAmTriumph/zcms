<?php 
require_once("../includes/session.php");
confirm_logged_in();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Backend</title>
<script type="text/javascript">

function validate_form1 ( ) { 
    valid = true;
    if ( document.form1.pid.value == "" ) { 
	alert ( "Please enter the ID number for the page to be edited." ); 
	valid = false;
	} 
	return valid;
}
	
function validate_form2 ( ) { 
    valid = true;
    if ( document.form2.pid.value == "" ) { 
	alert ( "Please enter the ID number for the page to be deleted." ); 
	valid = false;
	} 
	return valid;
}	

</script>
<link rel="stylesheet" type="text/css" href="a.css" />
</head>

<body>
<div id="hidden"></div>
<div id="backend">

<table width="960" border="0" cellpadding="8">
  <tr>
    <td width="100%"><h3>Z-Burger CMS&nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="index.php">Admin Home</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="../">View Live Website</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="new_user.php">Create New User</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="logout.php">Logout</a></h3></td>
  </tr>
  <tr>
    <td>Hello <?php echo $_SESSION['username']; ?>, what would you like to do?<br /></td>
  </tr>
  <tr>
    <td  class="r1"><h3><a href="create_page.php">Create New Page</a></h3></td>
	
  </tr>
  <tr>
    <td colspan="2" class="r2"><form id="form1" name="form1" method="post" action="edit_page.php" onsubmit="return validate_form1 ( );">
      <br />
      <input type="submit" name="button2" id="button2" value="Edit Existing Page" />
      <input name="pid" type="text" id="pid" size="8" maxlength="11" />
    &lt;&lt;&lt;&lt; place ID of the page to be edited here<br />
    <br />
    </form></td>
  </tr>
  <tr>
    <td colspan="2" class="r3"><form id="form2" name="form2" method="post" action="page_delete_parse.php" onsubmit="return validate_form2 ( );">
      <br />
      <input type="submit" name="button" id="button" value="Delete Page" />
      <input name="pid" type="text" id="pid" size="8" maxlength="11" />
  &lt;&lt;&lt;&lt; place ID of the page to be deleted here<br />
      <br />
    </form></td>
  </tr>
</table>
</div>
</body>
</html>