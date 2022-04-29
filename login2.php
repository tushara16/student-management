<?php
require_once("connection.php");
if(isset($_POST['submit']))
    {
        $studentName = $_POST['usrname'];
        $studentpassword = $_POST['psw'];
        
            $query = " select * from teacher where usrname= '$studentName' AND psw= '$studentpassword' ";
            $result = mysqli_query($conn,$query);

            $num = mysqli_num_rows($result);
if($num==1)
            {
                header("location:admin.php");
            }
            else
            {
               header("location:loginadmin.php");
            }
}

?>