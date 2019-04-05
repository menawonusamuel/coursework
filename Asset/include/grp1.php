<?php require_once("connection.php");?>
<?php

if(!$db){
    die("Database selection failed");
}
$que="INSERT INTO grp_tbl(grpname, grpdesc, topic_id) VALUES('$_POST[gname]', '$_POST[desc]', '$_POST[topic]')";
$query=mysqli_query($db,$que);
if(!$query){
    die("Database query failed");
}
$que="UPDATE student
SET 
actor='Team leader'
WHERE student_id=$_POST[stud]";
$query=mysqli_query($db,$que);
if(!$query){
    die("Database query failed" . mysqli_error($db));
}
header("location:adgrp.php");?>
?>