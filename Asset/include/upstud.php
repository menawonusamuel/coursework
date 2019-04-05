<?php require_once("connection.php");
require"header.php";?>
<?php

if(!$db){
    die("Database selection failed");
}
$id=$_POST['id'];
$sql="Select * from student Where student_id='$id'";
$query=mysqli_query($conn,$sql);
if (!$query) {
    die("Database query failed");
}
while ($rows=mysqli_fetch_array($query)){

    print"<form action=upstud1.php method=post>
Matric number<input type=text name=id value=$rows[0] >
First number<input type=text name=fn value=$rows[1] ><br />
Last number<input type=text name=ln value=$rows[2] ><br />
Address<input type=text name=addr value=$rows[3] ><br />
Postcode<input type=number name=pstcde value=$rows[4] ><br />
Email<input type=email name=email value=$rows[5] ><br />
Username<input type=text name=uname value=$rows[6] ><br />
Password<input type=password name=pwd value=$rows[7] ><br />
<h3>Assign to Group</h3>";
    $db=mysqli_select_db($conn,"db1813617_coursework");
    if(!$db){
        die("Database selection failed");
    }
    $sql="Select * from grp_tbl";
    $query=mysqli_query($conn,$sql);
    if (!$query) {
        die("Database query failed");
    }?>
    <select name="grp">
    <?php
    while ($rows = mysqli_fetch_array($query)){
        echo "<option  value=" . $rows[0] .  ">" .  $rows[1] . " </option>";
    }

    print" </select>
  <h3>Register as:</h3>
 <select name=actor>
  <option  value=Administrator>Administrator</option>
  <option  value=Team leader>Teamleader</option>
  <option  value=Student selected>Student</option>
  </select>
  <input type=submit value=Submit />";
}
require"footer.php";?>