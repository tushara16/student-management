<!DOCTYPE html>
<html>
<head>
<style>
table {
 border-collapse: collapse;
 width: 100%;
 border: 1px solid #ddd;
 border-color:black;
 background-color:white;
 margin-right:auto;
margin-left:auto;
}
th, td {
 text-align: left;
 padding: 16px;
 border: 1px solid black;
 border-radius: 5px;

}
body{
    background-color: rgb(183, 214, 241);
}
p{
font-size:32px
}
a{
color:#0014a8;
text-decoration:none;
}

</style>
<br>
<p style="color:black;" align="center" ><b>MARKS DETAILS</b></p>
</head>
<body class="background-image">
<br>
<br>
<br>
<table style="color:black">
 <tr>
 <th>Rollno</th>
 <th>NAME</th>
 <th>PYTHON</th>
 <th>ENGLISH</th>
 <th>JAVA</th>
<th>Operation</th>
 </tr>
<?php
$conn= mysqli_connect('localhost','root','','student');
if($conn-> connect_error){
die("connection failed:".$conn-> connect_error);
}
 $query="SELECT * from marks";
$data= mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
if($total!=0){
while($result=mysqli_fetch_assoc($data)){
echo"
<tr>
<td>".$result["id"]."</td>
<td>".$result["name"]."</td>
<td>".$result["python"]."</td>
<td>".$result["english"]."</td>
<td>".$result["java"]."</td>
<td><a href='marksdelete.php?rn=$result[id]'> delete</td>
</tr>";
}
echo"</table>";
}
else{
echo"0 result";
}
$conn->close();
?>
</table>
</body>
</html>
