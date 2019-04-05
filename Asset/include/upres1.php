<?php
require_once("connection.php");
require("adheader2.php");

if (!$db_selected) die("<h3><font color=red>Database <b>books</b> does not exist.</font></h3>");
$query=mysqli_query($db,"SELECT * FROM topic");
if (mysqli_num_rows($query) == 0) {die("<h3><font color=red>Table is empty.</font></h3>");}
$quer=mysqli_query($db,  "
 UPDATE topic
 SET
topic_id='$_POST[id]',
topic='$_POST[fn]
Where topic_id='$_POST[id]'");
if(!$quer){
    print("Database  query failed");
}
mysqli_close($db);
print ("<font color=blue><h3> Data for book with Id $_POST[id] has been updated.</h3></font>");
print("<a href=adstud.php?stud=4>Go  back</a> ");
?>