<?php 
require_once("../includes/session.php");
if(!logged_in()) redirect_to("login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Creating New Page</title>
<script type="text/javascript">

function validate_form ( ) { 
    valid = true;
    if ( document.form.pagetitle.value == "" ) { 
	alert ( "Please enter the page title." ); 
	valid = false;
	} else if ( document.form.linklabel.value == "" ) { 
	alert ( "Please enter info for the link label." ); 
	valid = false;
	}// else if ( document.form.pagebody.value == "" ) { 
	//alert ( "Please enter some info into the page body." ); 
	//valid = false;
	//}
	return valid;
}
</script>

<script src="../ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="a.css" />
</head>

<body>
<div id="hidden"></div>
<div id="backend">
<table width="100%" border="0" cellpadding="8">
  <tr>
    <td><h3>Creating a New Page&nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="index.php">Admin Home</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="../" target="_blank">View Live Website</a></h3></td>
  </tr>
  <tr>
    <td>Be sure to fill in all fields, they are all required.<br /></td>
  </tr>
  <tr>
    <td>
    
<table width="100%" border="0" cellpadding="5">
    <form id="form" name="form" method="post" action="page_new_parse.php" onsubmit="return validate_form ( );">
  <tr>
    <td width="15%" align="right" class="r1">Page Full Title</td>
    <td width="85%" class="r1"><input name="pagetitle" type="text" id="pagetitle" size="80" maxlength="64" value="<?php if(isset($pagetitle)) echo $pagetitle; ?>" /></td>
  </tr>
  <tr>
    <td align="right" class="r2">Link Label</td>
    <td class="r2"><input name="linklabel" type="text" id="linklabel" maxlength="24"  value="<?php if(isset($linklabel)) echo $linklabel; ?>" /> 
      (What the link to this page will display as)</td>
  </tr>
  <tr>
    <td align="right" valign="top" class="r3">Page Body</td>
    <td class="r3"><textarea name="pagebody" id="pagebody" cols="88" rows="16"><?php if(isset($pagebody)) echo $pagebody; ?></textarea><script type="text/javascript">
    CKEDITOR.replace( 'pagebody' );
</script></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Create Page" /></td>
  </tr>
  </form>
</table>

    
    </td>
  </tr>
</table>
</div>
</body>
</html>