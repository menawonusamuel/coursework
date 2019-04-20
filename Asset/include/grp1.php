<?php require_once("connection.php");?>
<?php

$sql="Select * from student s LEFT JOIN grp_tbl g  ON (s.group_id=g.group_id) WHERE g.grpname='$_POST[gname]' AND s.actor!='Student' ";
$quer=mysqli_query($db,$sql);
if(!$quer){
    die("Database query failed".mysqli_error($db));
}
if(mysqli_num_rows($quer)!=0){
    while($row= mysqli_fetch_array($quer)){
        $qu="UPDATE  student 
SET 
actor='Student'
WHERE student_id=$row[0]";
        $q=mysqli_query($db,$qu);
        if(!$q){
            die("Database query failed" . mysqli_error($db));
        }}
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
header("location:adgrp.php?grp=4");?>
?>