<?php session_start();
require_once("connection.php");?>
<?php
require("heading.php");
?><?php

$sql="Select * from student Where student_id='$_SESSION[tid]'";
$query=mysqli_query($db,$sql);
if ($query===false) {
    die("Database query failed" . mysqli_error($db));
}
$quer=mysqli_query($db,  "
 UPDATE student
 SET
 firstname='$_POST[fname]',
 lastname='$_POST[lname]',
 address='$_POST[addr]',
 postcode='$_POST[pstcde]',
 username='$_POST[user]'
 Where student_id='$_SESSION[tid]'"
);
if(!$quer){
    die(mysqli_error($db));
}else{
    mysqli_close($db);
    print ("<font color=blue><h3> Profile has been updated.</h3></font>");
    print("<a href=stdedit.php?edit=3>Go  back</a> ");
    print("</center>");
}

?>