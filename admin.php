<!DOCTYPE html>
<html>
<head>
<title>Admin page</title>
<link rel="stylesheet" href="admin.css">
<style>
body{
background-color:rgb(139, 191, 239);
}
/*.middle {
padding:150px 20px;
margin-left:auto;
margin-right:auto;
height:400px;
width:500px;
}*/
* {
  padding: 0;
  margin: 0;
}
nav {
  position: fixed;
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
/*.container  {
 padding: 0 16px;
 padding-bottom:20px;
}
.card1  {
 box-shadow: 0 4px 8px 0 rgba(23, 0, 0, 0.1);
 background-color: rgb(255, 255, 255);
 padding-top:100px;
 margin-right:800px;
 margin-left:100px;
}
.card2 {
 box-shadow: 0 4px 8px 0 rgba(23, 0, 0, 0.1);
 background-color: rgb(112, 195, 84);
 padding-top:100px;
 margin-left:600px;margin-right:100px;
}*/
/*.card  {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      max-width: 300px;
      height: 300px;
      background-color: rgb(255, 255, 255);
      padding-top:30px;
      padding-bottom:50px;
      color:rgb(0, 0, 0);
      margin-left:150px;
  
   }
   .card1 {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      max-width: 300px;
      height: 300px;
      background-color: rgb(255, 255, 255);
      padding-top:30px;
      padding-bottom:50px;
      color:rgb(0, 0, 0);
      margin-left:700px;
   }*/
   .main {
  margin: 1rem;
  padding: 2rem 2rem;
  text-align: center;
}
.card {
  display: inline-block;
  border: 1px solid rgb(255, 255, 255);
  padding: 1rem 1rem;
  vertical-align: middle;
  margin-right: 80px;
  margin-left: 80px;
  height: 300px;
  width:300px;
  background-color: white;
}
.button:hover{
  background-color: rgb(30, 42, 112);
}

</style>
</head>
<script>
 function myFunction() {
 alert("Continue to LOGOUT");
 }

</script>
<body>
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
 <a href="contact.html">Contact</a> 
 
 <a onclick="myFunction()" href="home.html">LogOut</a>
</div>-->
<!--<div class="middle">-->
<!--<div class="row">
 <div class="column">
 <div class="card1">
 <div class="container" style="margin-top:100px;">
 <h2 >Attendance</h2>
 <p>Manage Attendance here:</p>
 <p><a href="attendance.html"><button class="button">GO</button></a></p>
 </div>
 </div>
 </div>
 </div>


 <div class="row">
 <div class="column">
 <div class="card2">
 <div class="container">
 <h2>Mark Sheet</h2>
 <p>Manage marks here </p>
 <p><a href="marks.html"><button class="button">GO</button></a></p>
 </div>
 </div>
 </div>
 </div>-->
 <br>
 <br>
 <br>
 <br><br><br><br>
 

 <div class="main">
  <div class="card">
    <h3 style="padding-top:5px; font-size: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Attendance</h3>
    <h4 style="margin-top:20px; text-align: center; font-size: 20px ;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">To Manage Attendance</h4>
    <a href="attendance.html"><button class="button" style="width:200px; margin-left:10px;margin-top:80px;">CLICK HERE</button></a>
    </div>
   
    <div class="card">
      <h3 style="padding-top:5px; font-size: 40px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Marks</h3>
      <h4 style="margin-top:20px; text-align: center; font-size: 20px ;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">To Manage Marks</h4>
      <a href="marks.html"><button class="button" style="width:200px; margin-left:10px;margin-top:80px;">CLICK HERE</button></a>
      </div>
     


 
 </div>

  
 
 
</body>
</html>
