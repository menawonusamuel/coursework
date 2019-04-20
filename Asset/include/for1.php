<?php
require_once("connection.php");
if (isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $grp=$_POST['grp'];
    $actor=$_POST['actor'];

    $sql="Select * From student Where firstname ='$fname' AND lastname='$lname' AND group_id='$grp' AND actor='$actor'";
    $query=mysqli_query($db,$sql);
    if($query===false){
        die(mysqli_error($db));
    }
    if(mysqli_num_rows($query)==0)
    {
        header("location:chngepwd.php");
    }
    else{
        echo"Record not found";
    }
}
?>