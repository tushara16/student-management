<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Profile page</title>
<link rel="stylesheet" href="student.css">
<style>
body{
background-color:rgb(139, 191, 239);
}
* {
  padding: 0;
  margin: 0;
}
nav {
 
  background-color: rgb(30, 42, 112);
  width: 100%;
}
ul {
  position: relative;
  float: right;
  margin-right: 20px;
}
ul li {
  display: inline-block;
  line-height: 70px;
  margin: 0.5px;
}
ul li a {
  color: white;
  text-decoration: none;
  padding: 14px 16px;
  font-size: 20px;
}
.logo {
  font-size: 25px;
  margin-left: 15px;
  position: relative;
  color: white;
  font-weight: 400;
  line-height: 70px;
  font-family: "Times New Roman", Times, serif;
}
table,tr,td{
   border:1px solid white;
   border-collapse:collapse;
}

</style>
</head>
<script>
 function myFunction() {
 alert("Continue to LOGOUT");
 } 
</script>
<body class="background-image">
<nav>
        <label class="logo">
            <i class="fa-solid fa-building-columns"></i> OAKHILL UNIVERSITY
          </label>
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="contact.html">Contact</a></li>
           <li><a onclick="myFunction()" href="home.html">LogOut</a> </li>  
    </nav>
<!--<div class="topnav">
 <a class="active" href="home.html">Home</a>
 <a href="contact.html">ContactUs</a>
 <a onclick="myFunction()" href="home.html">LogOut</a> 
</div>-->
<div class="main">
<h3 style="color:black ;margin-top:10px;">STUDENT PROFILE</h3>
<?php
$conn= mysqli_connect('localhost','root','','student');
if($conn-> connect_error){
die("connection failed:".$conn-> connect_error);
}
?>
<table style="margin-top:50px; ">
 <tr>
 <td style="width:35%;">StudentName:</td>
 <?php 
     $studentName = $_SESSION['name'];
    $query = " select * from attendance where name= '$studentName' ";
    $result = mysqli_query($conn,$query);
    $num = mysqli_num_rows($result);
    if($num==1){ echo"<td>".$_SESSION['name']."</td>";}
 ?>
 </tr>
 <td>RollNO:</td>
 <?php 
    $studentName = $_SESSION['name'];
    $query = " select * from attendance where name= '$studentName' ";
    $result = mysqli_query($conn,$query);
    $num = mysqli_num_rows($result);
    if($num==1){ echo"<td>".$_SESSION['id']."</td>";}
 ?>
 </tr>
 <tr>
 <td>Branch:</td>
 <td>CS&SE</td>
 </tr>
 <tr>
 <td>Year:</td>
 <td>3rd year</td>
 </tr>
 <tr>
 <td>JoiningYear</td>
 <td>2019</td>
 </tr>
 <tr>
 <td>PassOutYear</td>
 <td>2023</td>
 </tr>
 <tr>
     <td>Attendance</td>
<?php 
    $studentName = $_SESSION['name'];
    $query = " select * from attendance where name= '$studentName' ";
    $result = mysqli_query($conn,$query);
    $num = mysqli_num_rows($result);
    if($num==1){ echo"<td>".$_SESSION['cmp']."</td>";}
 ?>
 </tr>
</table>
</body>
</html>