<?php
include 'SHeader.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>
</head>

<body>

<table width="1000" border="1" align="center">
  <tr>
    <td width="150">
    <form id="form1" name="form1" method="post" action="">
	 <p>Log in</p>
  	  <label for="UserName"></label>
  	  <input type="text" name="UserName" id="UserName" />
 	 <p>Password</p> 
  	  <label for="PassWord"></label>
  	  <input type="password" name="PassWord" id="PassWord" />
	</form>
    <br />advertisements if we want</td>
    <td><form id="form1" name="form1" method="post" action="">
<p>User Name*:   
  <label for="UserName"></label>
  <input type="text" name="UserName" id="UserName" />
  </p>
 <p>Password*:
   <label for="PassWord"></label>
  <input type="password" name="PassWord" id="PassWord" />
</p>
<p>Re-Type Password*:
   <label for="PassWordAgain"></label>
  <input type="password" name="PassWordA" id="PassWordA" />
</p>
<p>Email*:
   <label for="Email"></label>
  <input type="text" name="Email" id="Email" />
</p>
<p>Company Name/Full Name:
   <label for="Company"></label>
  <input type="text" name="Company" id="Company" />
</p>
<p>House Number:
   <label for="Address1"></label>
  <input type="text" name="Address1" id="Address1" />
</p>
<p>City:
  <label for="Address2"></label>
  <input type="text" name="Address1" id="Address1" />
</p>
<p>Post Code:
  <label for="Address3"></label>
  <input type="text" name="Address1" id="Address1" />
</p>
<p>Phone:
   <label for="Phone"></label>
  <input type="text" name="Phone" id="Phone" />
</p>
</form></td>
    <td width="150">Adevertisements if we want</td>
  </tr>
</table>

</body>
<?php
include 'footer.php';
?>
</html>