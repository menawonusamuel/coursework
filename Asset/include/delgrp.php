<?php require_once("connection.php");
require("adheader2.php");
$gn=$_POST['gn'];
$id=$_POST['id'];

if(!$db_select){
    echo"Database selection failed";
}
if (isset($_POST['submit']) && (empty($gn) && empty($id))){
    $sq="Select* from grp_tbl Order by group_id ASC";
    $que=mysqli_query($db,$sq);
    print("<h2><font color=Blue>List of students: No record entered</font></h2>");
    print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Student name</Th><Th>Topic</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>" ."<td>". $rows[4]."</td>"  . "</tr>";

    }
}
else {
    $sql = "Delete from grp_tbl Where((grpname='$gn') AND (group_id='$id'))";
    $query = mysqli_query($db, $sql);
    if (!$query) {
        die("Database query failed");
    }
    if(mysqli_affected_rows($db)==0){
        echo"Record not found, Record deleted";
    }else{
        $sq="Select * from grp_tbl";
        $que=mysqli_query($db,$sq);
        if (!$que) {
            die("Database query failed");
        }
        print("<h2><font color=Blue>List of groups</font></h2>");
        print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Student name</Th><Th>Topic</Th>";
        while ($rows = mysqli_fetch_array($que)){

            print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>" ."<td>". $rows[4]."</td>"  . "</tr>";

        }}
}echo "<p><a href=adgrp.php?grp=3>Go back</a>";

?>