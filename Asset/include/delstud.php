<?php require_once("connection.php");
require("adheader2.php");
$fn=$_POST['fn'];
$ln=$_POST['ln'];

if(!$db_select){
    echo"Database selection failed";
}
if (isset($_POST['submit']) && (empty($fn) && empty($ln))){
    $s="Select* from student Order by student_id ASC";
    $qu=mysqli_query($db,$s);
    print("<h2><font color=Blue>List of students: No record entered</font></h2>");
    print"
 <table border>
 	<tr><b><Th>Id<Th>Firstname</Th><Th>Lastname</Th><Th>Address</Th><Th>Postcode</Th><Th>Username</Th><Th>Email</Th><Th>Password</Th></b></tr>";

    while ($ro = mysqli_fetch_array($qu)){
        print "<tr><td>" . $ro[0]. "</td>". "<td>" . $ro[1] . "</td>" . "<td>" .$ro[2] ."</td>" ."<td>" .$ro[3]."</td>" ."<td>". $ro[4]."</td>" ."<td>" . $ro[5] ."</td>" ."<td>" . $ro[6] . "</td><td>". $ro[7] ."</td> </tr>";

    }
}
else{
    $sql="Delete from student Where((firstname='$fn') AND (lastname='$ln'))";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }
    if (mysqli_affected_rows($db)==0){
        echo "Record not found, Record not deleted";
    }
    else{
        $sq="Select* from student Order by student_id ASC";
        $que=mysqli_query($db,$sq);
        if (!$que) {
            die("Database query failed");
        }
        print"
 <table border>
 	<tr><b><Th>Id<Th>Firstname</Th><Th>Lastname</Th><Th>Address</Th><Th>Postcode</Th><Th>Email</Th><Th>Username</Th><Th>Password</Th></b></tr>";
        while ($rows = mysqli_fetch_array($que)){
            print "<tr><td>" . $rows[0]. "</td>". "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>" ."<td>". $rows[4]."</td>" ."<td>" . $rows[5] ."</td>" ."<td>" . $rows[6] . "</td><td>". $rows[7] ."</td> </tr>";

        }
    }
}
echo "<p>Database deleted succesfully</p>";

echo "<p><a href=adstud.php>Go back</a>";
?>