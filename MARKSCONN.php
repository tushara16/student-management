<?php
$id=$_POST['id'];
$name=$_POST['name'];
$place=$_POST['python'];
$phno=$_POST['english'];
$cmp=$_POST['java'];
$conn = new mysqli('localhost','root','','student');
if($conn->connect_error){
die('Connection failed:'.$conn->$connect_error);
} else{
$stmt=$conn->prepare("insert into marks(id,name,python,english,java) values (?,?,?,?,?)");
$stmt->bind_param("sssis",$id,$name,$place,$phno,$cmp);
$stmt->execute();
echo "Successful";
$stmt->close();
$conn->close();
}
?>