<?php
session_start();
require_once("connection.php");
if(isset($_POST['submit']))
    {
        $studentName = $_POST['name'];
        $studentpassword = $_POST['psw'];
        $sql="select * from attendance where `name`='$studentName'";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($res)){
            $_SESSION['id']=$row['id'];
            $_SESSION['cmp']=$row['cmp'];
        }
            $query = " select * from student where name= '$studentName' AND psw= '$studentpassword' ";
            $result = mysqli_query($conn,$query);
            $_SESSION['name']=$studentName;
            $num = mysqli_num_rows($result);
if($num==1)
            {
                header("location:student.php");
            }
            else
            {
               header("location:loginstu.php");
            }
}

?>