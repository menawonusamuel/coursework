<?php require_once("connection.php");?>
<?php
require("header.php");
?><?php

if (!$db_selected) die("<h3><font color=red>Database <b>groups</b> does not exist.</font></h3>");
$query=mysqli_query($db,"SELECT * FROM grp_tbl");
if (mysqli_num_rows($query) == 0) {die("<h3><font color=red>Table is empty.</font></h3>");}
$quer=mysqli_query($db,  "
 UPDATE grp_tbl
 SET
 grpname='$_POST[gname]',
 grpdesc='$_POST[desc]',
 topic_id='$_POST[topic]'
 Where group_id='$_POST[id]'"
);
if(!$quer){
    print("Database  query failed");
}
$que="UPDATE student
SET 
actor='Team leader'
WHERE student_id=$_POST[stud]";
$query=mysqli_query($db,$que);
if(!$query){
    die("Database query failed" . mysqli_error($db));
}
mysqli_close($db);
print ("<font color=blue><h3> Data for book with Id $_POST[id] has been updated.</h3></font>");
print("<a href=adgrp.php>Go  back</a> ");
print("</center>");

?>