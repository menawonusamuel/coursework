<?php require_once("connection.php");?>
<?php require_once("header.php");?>
<?php

if(!$db){
    die("Database selection failed");
}
$id=$_POST['id'];
if (isset($_POST['submit']) && empty($id)){
    $sq="Select* from grp_tbl Order by group_id ASC";
    $que=mysqli_query($db,$sq);
    print("<h2><font color=Blue>List of groups:No record updated</font></h2>");
    print" 
 <table border>
  <tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Student name</Th><Th>Topic</Th>";
    while ($row = mysqli_fetch_array($que)){
        print "<tr><td>" . $row[0]. "</td>" . "<td>" . $row[1] . "</td>" . "<td>" .$row[2] ."</td>" ."<td>" .$row[3]."</td>" ."<td>". $row[4]."</td>"  . "</tr>";

    }}else{
    if(mysqli_affected_rows($db)===FALSE){
        echo"No updated data,Record doesn't exist";
    }else{
        $sql="Select * from grp_tbl Where group_id='$id'";
        $query=mysqli_query($db,$sql);
        if (!$query) {
            die("Database query failed");
        }
        while ($rows=mysqli_fetch_array($query)){
            $id=$rows[0];
            $gname=$rows[1];
            $desc=$rows[2];
            $topic=$rows[3];
            print"<form action=upgrp.php method=post>
  Group number<input type=text name=id value=$rows[0] readonly /><br />
Group name<input type=text name=gname value=$rows[1] /><br />
Group description<textarea cols=30 rows=4 name=desc />$rows[2]</textarea><br /><br />

  <h3>Team leader:</h3>";


            if(!$db){
                die("Database selection failed");
            }
            $sql="Select * from student";
            $query=mysqli_query($db,$sql);
            if (!$query) {
                die("Database query failed");
            }?>
            <select name="stud" value>
            <?php
            while ($rows = mysqli_fetch_array($query)){
                echo "<option  value=" . $rows[0] .  ">" .  $rows[1] . " " . $rows[2] . " </option>";
            }
            print"</select>";
            $sq="Select * from topic";
            $quer=mysqli_query($db,$sq);
            if (!$quer) {
                die("Database query failed");
            }
            print"<h3>Group topic:</h3>
<select name=topic>";
            while ($row = mysqli_fetch_array($quer)){
                echo "<option  value=" . $row[0] .  ">" .  $row[1]." </option>";
            }}
        ?>
        <?php print" </select>
  <input type=submit value=Submit />
  </form>";

    }}
?>