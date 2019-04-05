<?php require_once("connection.php");
require("adheader2.php");
$gn=$_POST['gn'];
$id=$_POST['id'];
if(!$db_select){
    echo"Database selection failed";
}
if (isset($_POST['submit']) && (empty($gn)&& (empty($id) ))){
    $sq="Select * from topic Order by topic_id ASC";
    $que=mysqli_query($conn,$sq);
    print("<h2><font color=Blue>List of topics: No record entered</font></h2>");
    print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Topic</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>"  . "</tr>";

    }
}else{
    $sql="Select * from topic Where((name='$gn') OR (topic_id='$id'))";
    $query=mysqli_query($conn,$sql);
    if (!$query) {
        die("Database query failed");
    }
    print("<h2><font color=Blue>List of topics</font></h2>");
    print"
 <table border>
 	<tr><b><Th>S/N</Th><Th>Topic</Th>";
    while ($rows = mysqli_fetch_array($query)){

        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>"  . "</tr>";

    }
}echo "<p><a href=adres.php>Go back</a></p>";
?>