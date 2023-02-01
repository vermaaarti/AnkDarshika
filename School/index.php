<?php
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!--css file-->
<link rel=¨stylesheet¨ type=¨text/css¨ href=¨index.css¨>
<link rel=¨stylesheet¨ type=¨text/css¨ href=¨form.css¨>
<title>Student Result Management System</title>
<link href="style.css" rel="stylesheet" >
</head>

<body><br />

<section class="container-fluid">
<div class="row"  style="background-color: rgb(255,255,255);">
  <div class="col">
 
  <nav class="navbar navbar-expand-lg my-0 py-0" style="backdrop-filter:blur(8px);box-shadow: 2px 2px 4px rgb(232, 238, 243);">
  <div class="container-fluid">
    <a class="navbar-brand my-0 py-0" href="#">
      <img src="header-logo.png" alt="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgb(232, 238, 243);box-shadow: 2px 2px 4px rgb(52, 236, 206);">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav me-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="#" style="font-family: Papyrus;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#student" style="font-family: Papyrus;">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#faculty" style="font-family: Papyrus;">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#checkResult" style="font-family: Papyrus;">Check Result</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#result" style="font-family: Papyrus;">Register</a>
        </li>
      </ul>
     </div>
  </div>
</nav>

</div>
</div>
</section>


<section class="part1 container-fluid mt-5">
    <div class="row p-1" style="background-color: rgb(255,255,255);">
     <div class="col-md-6 py-5 ">
    <div class="mt-5">
 <div> <span class="head mt-5"><strong>ANKDARSHIKA</strong></span></div>
  <h5 class="para m-4" style="font-size: 23px; font-family: Papyrus;">Hii folk...!<br /> ankdarshika allows you to easily
     access and view your academic results. The system also provides your faculties with a secure login to 
     manage your information, your faculties have the ability to assign individual marks, add subjects, and 
     update your records. With this system, you and your faculties can stay informed and on top of 
     academic progress, ensuring that you and your classmates are on track for success.</h5>
   </div>
    </div>
        <div class="col-md-6">
<img class="img-fluid img-responsive" src="https://st.depositphotos.com/2419757/54635/v/450/depositphotos_546354268-stock-illustration-diverse
-college-university-students-schoolgirl.jpg" alt="">

     </div>
    </div>
</section>


<section id="student" class="part2 container-fluid" style="background-color:rgb(232, 238, 243);">
<div class="row p-1 justify-content-center">
     <div class="col">
   <h5 align="center" class="head my-4"><strong>Facility for Students</strong></h5>
      </div>
</div>
  <div class="row  p-1">
  <div align="center" class="col-sm-6">
  <div class="" style="font-family:Papyrus;"><b>Registration</b><br/>
 <div class="msg">
   <button class="fields mb-5 "><a href="register.php" class=" text-dark p-2" style="text-decoration: none;">Click for Registration</a>
  </button></div>
  </div></div>
  <div align="center" class="col-sm-6">
  <div class="" style="font-family:Papyrus;"><b>View Result</b>
  <form method="post" action="viewResult.php">
<table  class="py-5 mb-5">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr class=""><td class="labels m-5"></td><td><input type="text" required="required" name="roll"
 class="fields" size="15" placeholder="Enter your Roll No." /></td>
<td colspan="2" align="center"><input type="submit" value="SHOW" class="fields" /></td></tr>
</table>
</form>
  </div>
  </div></div>
</section>



<section id="faculty" class="part3 container-fluid" style="background-color:rgb(219, 217, 220);">
<div class="row p-1">
     <div class="col">
   <h5 align="center" class="head my-5"><strong>Facility for Faculty</strong></h5>
    </div>
</div>
  <div class="row p-1">
     <div class="col" style="font-family:Papyrus;"><b>View Users</b>
      <div class="">
   <button style="font-family:Papyrus;" class="fields mb-5 mt-3 p-2"><a href="viewUsers.php" class=" text-dark" style="text-decoration: none;">View Here</a>
  </button></div>
     </div>
     <div class="col" style="font-family:Papyrus;"><b>Submit Marks</b>
     <div class="">
   <button style="font-family:Papyrus;" class="fields mb-5 mt-3 p-2"><a href="submitMarks.php" class=" text-dark" style="text-decoration: none;">Submit Here</a>
  </button></div>
     </div>
     <div class="col" style="font-family:Papyrus;"><b>Add Subjects</b>
      <div class="">
   <button style="font-family:Papyrus;" class="fields mb-5 mt-3 p-2"><a href="addSubject.php" class=" text-dark" style="text-decoration: none;">Add Here</a>
  </button></div>
     </div>
     <div class="col" style="font-family:Papyrus;"><b>Change Password</b>
      <div class="">
   <button style="font-family:Papyrus;" class="fields mb-5 mt-3 p-2"><a href="changePassword.php" class=" text-dark" style="text-decoration: none;">Change Here</a>
  </button></div>
     </div>
     <div class="col" style="font-family:Papyrus;"><b>Logout</b>
     <div class="">
   <button style="font-family:Papyrus;" class="fields mb-5 mt-3 p-2"><a href="logout.php" class=" text-dark" style="text-decoration: none;">Logout Here</a>
  </button></div>
     </div>
     </div>
</div>
</section>


<section id="checkResult" class="part4 container-fluid" style="background-color:rgb(232, 238, 243);">
  <div class="row p-3" >
      <!--login-signup form-->
     <div align="center" class="col">
     <h5 align="center" class="head mt-5"><strong>Are you a Student...? <br />Register here</strong></h5> 
     <div class="">
    <button style="font-family:Papyrus;" class="fields mb-5 mt-3 p-2"><a href="register.php" class=" text-dark" 
      style="text-decoration: none;">Student Registration</a>
    </button></div>
    </div>
    <div align="center" class="col">
    <h5 align="center" class="head mt-5"><strong>Are you a Faculty...?<br /> Register here</strong></h5> 
   <div class="">
    <button style="font-family:Papyrus;" class="fields mb-5 mt-3 p-2"><a href="registerFaculty.php" class=" text-dark" 
      style="text-decoration: none;">Faculty Registration</a>
    </button></div>
    <h5 align="center" class="head"><strong>And login here</strong></h5> 
     <div class="">
    <button style="font-family:Papyrus;" class="fields mb-5 mt-3 p-2"><a href="faculty.php" class=" text-dark" 
      style="text-decoration: none;">Faculty Login</a>
    </button></div>
    </div>
</div>
</section>


<section id="result" class="part5 container-fluid" style="background-color:rgb(219, 217, 220);">
  <div class="row p-3" >
      <!--login-signup form-->
     <div align="center" class="col">
     <h5 align="center" class="head p-3"><strong>Students Check your Result Here</strong></h5><br /> 
     <form method="post" action="viewResult.php">
<table  class="py-5 mb-5">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr class=""><td class="labels m-5"></td><td><input type="text" required="required" name="roll"
 class="fields" size="15" placeholder="Enter your Roll No." /></td>
<td colspan="2" align="center"><input type="submit" value="SHOW" class="fields" /></td></tr>
</table>
</form>
 </div>
</div>
</section>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript" src="form.js"></script>
</body>
</html>