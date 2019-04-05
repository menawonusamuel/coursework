<?php
require_once("connection.php");
require("adheader2.php");

if (!$db_selected) die("<h3><font color=red>Database <b>books</b> does not exist.</font></h3>");
$query=mysqli_query($conn,"SELECT * FROM student");
if (mysqli_num_rows($query) == 0) {die("<h3><font color=red>Table is empty.</font></h3>");}
$quer=mysqli_query($conn,  "
 UPDATE student
 SET
student_id='$_POST[id]',
firstname='$_POST[fn]',
lastname='$_POST[ln]',
address='$_POST[addr]',
postcode='$_POST[pstcde]',
email='$_POST[email]',
username='$_POST[uname]',
password='$_POST[pwd]',
actor='$_POST[actor]',
group_id='$_POST[grp]'
Where student_id='$_POST[id]'");
if(!$quer){
    print("Database  query faailed");
}
mysqli_close($conn);
print ("<font color=blue><h3> Data for book with Id $_POST[id] has been updated.</h3></font>");
print("<a href=adstud.php?stud=4>Go  back</a> ");
?>