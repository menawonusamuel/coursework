<?php
require_once("connection.php");
if (isset($_POST['submail'])){
    $user=$_POST['user'];


    $sql="Select * From student Where username ='$user' OR email='$user' ";
    $query=mysqli_query($db,$sql);
    if(!$query){
        die(mysqli_error($db));
    }else{
        while ($row=mysqli_fetch_assoc($query)) {
            if($user==$row['email'] OR $user==$row['username']){
                session_start();
                $_SESSION['forgetmail']=$row['email'];
                $_SESSION['foruser']=$row['username'];
                header("location:for.php");
            }
            else{
                echo "No email or username available";
            }
        }
    }
}
?>