<?php
session_start();
require_once("connection.php");
$pwd1=$_POST['olpwd'];
$pwd2=$_POST['nwpwd'];


if(isset($_POST['submit']) &&  empty($pwd1) || empty($pwd2)){
    echo"Fill all fields";
}
if(isset($_POST['submit'])){


    $sql="Select * from student where student_id='$_SESSION[tid]'";
    $result=mysqli_query($db, $sql);

    if(!$result){
        die(mysqli_error($db));
    }
    if (mysqli_num_rows($result)!=0) {
        # code...
        $pwd2=password_hash($pwd2, PASSWORD_DEFAULT);

        if($row=mysqli_fetch_assoc($result)){
            if(password_verify( $pwd1, $row['password']==false)){
                echo "Wrong password";
            }
            else{
                $sqli="
 UPDATE student
 SET
 password='$pwd2'
 Where student_id='$_SESSION[tid]'";
                $query=mysqli_query($db, $sqli);
                if($query===false){
                    die(mysqli_error($db));
                }else{
                    echo "record updated";
                }
            }
        }
    }



}

?>