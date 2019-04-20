<?php
session_start();
require_once("connection.php");
$em1=$_POST['olemail'];
$em2=$_POST['nwemail'];
if(isset($_POST['change'])){


    $sql="Select * from student where email='$em1'";
    $res=mysqli_query($db, $sql);
    if($res===false){
        die(mysqli_error($db));
    }
    if(mysqli_num_rows($res)!=0){
        if($row=mysqli_fetch_assoc($res)){
            if($em1==$row['email']){
                $sqlii= "
	 UPDATE student
	SET
 email='$_POST[nwemail]'
 Where student_id='$_SESSION[id]'";

                $query=mysqli_query($db, $sqlii);
                if($query===false){
                    die(mysqli_error($db));
                }
                else{
                    echo "Database updated";
                }
            }
        }
    }
}


?>