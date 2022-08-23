<?php
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Result Management System</title>
<link href="style.css" rel="stylesheet" >
</head>

<body><br />

<div align="center">
<span class="head"><strong>Student Result Management System</strong></span>
<hr class="hr" />
<br />
<br />
<span class="subhead"><strong>Check your Result Here </strong></span>
<br />
<br />
<br />
<form method="post" action="viewResult.php">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">ROLL NO.</td><td><input type="text" required="required" name="roll" class="fields" size="15" placeholder="Enter your Roll No." /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="SHOW" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<button class="btn"><a href="register.php" class="link">Student Registration</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn"><a href="faculty.php" class="link">Faculty Login</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="btn" style=""><a href="registerFaculty.php" class="link">Faculty Registration</a></button>
</div>

</body>
</html>