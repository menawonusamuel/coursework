<?php require_once("connection.php");
require("adheader2.php");

$fn=$_POST['fn'];
$ln=$_POST['ln'];

if(!$db_select){
    echo"Database selection failed";
}
if (isset($_POST['submit']) && (empty($fn) && empty($ln))){
    $sq="Select* from student Order by student_id ASC";
    $que=mysqli_query($conn,$sq);
    print("<h2><font color=Blue>List of students</font></h2>");
    print"
 <table border>
 	<tr><b><Th>Id<Th>Firstname</Th><Th>Lastname</Th><Th>Address</Th><Th>Postcode</Th><Th>Username</Th><Th>Email</Th><Th>Password</Th></b></tr>";

    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>". "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>" ."<td>". $rows[4]."</td>" ."<td>" . $rows[5] ."</td>" ."<td>" . $rows[6] . "</td><td>". $rows[7] ."</td> </tr>";

    }
}
else{
    $sql="Select * from student Where((firstname='$fn') OR (lastname='$ln'))";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }
    print("<h2><font color=Blue>List of students</font></h2>");
    print"
 <table border>
 	<tr><b><Th>Id<Th>Firstname</Th><Th>Lastname</Th><Th>Address</Th><Th>Postcode</Th><Th>Email</Th><Th>Username</Th><Th>Password</Th></b></tr>";
    while ($rows = mysqli_fetch_array($query)){

        print "<tr><td>" . $rows[0]. "</td>". "<td>" .$rows["firstname"] ."</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>" ."<td>". $rows[4]."</td>" ."<td>" . $rows[5] ."</td>" ."<td>" . $rows[6] . "</td></tr></table>";
    }
}echo "<p><a href=adstud.php>Go back</a>";

?>