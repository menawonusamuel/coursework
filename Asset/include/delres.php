<?php require_once("connection.php");
require("adheader2.php");
$gn=$_POST['gn'];

if(!$db_select){
    echo"Database selection failed";
}
if (isset($_POST['submit']) && (empty($gn))){
    $sq="Select * from topic Order by topic_id ASC";
    $que=mysqli_query($db_select,$sq);
    print("<h2><font color=Blue>List of topics: No record entered</font></h2>");
    print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Topic</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>"  . "</tr>";

    }
}
else{
    $sql="Delete from topic Where(name='$gn')";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }
    if(mysqli_affected_rows($db)==0){
        echo"Record not found, Record deleted";
    }else{
        $sq="Select * from topic";
        $que=mysqli_query($conn,$sq);
        if (!$que) {
            die("Database query failed");
        }
        print("<h2><font color=Blue>List of topics:Database record deleted</font></h2>");
        print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Topic</Th>";
        while ($rows = mysqli_fetch_array($que)){
            print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>"  . "</tr>";

        }

    }}
echo "<p><a href=adres.php?grp=3>Go back</a>";
?>