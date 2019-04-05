<?php require_once("connection.php");
require("adheader2.php");


$id=$_POST['id'];
if(!$db_select){
    echo"Database selection failed";
}if (isset($_POST['submit']) && (empty($gn) && empty($id))){
    $sq="Select* from grp_tbl Order by group_id ASC";
    $que=mysqli_query($conn,$sq);
    print("<h2><font color=Blue>List of groups</font></h2>");
    print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Topic</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>"   . "</tr>";

    }
}else{
    $sql="Select * from grp_tbl Where(group_id='$id')";
    $query=mysqli_query($conn,$sql);
    if (!$query) {
        die("Database query failed");
    }
    print("<h2><font color=Blue>List of groups</font></h2>");
    print"
 <table border>
 	<tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Topic</Th><Th>Student</Th>";
    while ($rows = mysqli_fetch_array($query)){

        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td><td>";
        $sql="Select * from student Where(group_id='$id')";
        $que=mysqli_query($conn,$sql);
        if (!$que) {
            die("Database query failed" . mysqli_error());
        }
        while ($row = mysqli_fetch_array($que)){
            print  $row[1]. $row[2]."</td>";

        }
        print("</tr>");
    }
}echo "<p><a href=adgrp.php>Go back</a></p>";
?>