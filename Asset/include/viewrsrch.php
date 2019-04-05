<?php require_once("connection.php");
require("adheader2.php");

$gn=$_POST['gn'];
$id=$_POST['id'];

if(!$db_select){
    echo"Database selection failed";
}if (isset($_POST['submit']) && (empty($gn) && (!empty($id)))){
    $sq="Select* from papers Where(topic_id='$id') Order by rpid ASC";
    $que=mysqli_query($conn,$sq);
    print("<h2><font color=Blue>List of research papers</font></h2>");
    print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Paper name</Th><Th>File</Th><Th>Topic name</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[3] ."</td>" ."<td>" .$rows[2]."</td>"   . "</tr>";

    }}
elseif (isset($_POST['submit']) && ((!empty($gn)) && (empty($id)))) {
    # code...
    $sq="Select* from papers Where(Name='$gn') Order by rpid ASC";
    $que=mysqli_query($conn,$sq);
    print("<h2><font color=Blue>List of research papers</font></h2>");
    print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Paper name</Th><Th>File</Th><Th>Topic name</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[3] ."</td>" ."<td>" .$rows[2]."</td>"   . "</tr>";
    }
}
else{
    $sql="Select * from papers Where(rpid='$id' OR Name='$gn')";
    $query=mysqli_query($conn,$sql);
    if (!$query) {
        die("Database query failed");
    }
    print("<h2><font color=Blue>List of Research papers </font></h2>");
    print"
 <table border>
 	<tr><b><Th>S/N</Th><Th>Paper name</Th><Th>File</Th><Th>Topic name</Th>";
    while ($rows = mysqli_fetch_array($query)){

        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[3] ."</td>" ."<td>" .$rows[2]."</td>"   . "</tr>";
    }
}echo "<p><a href=adres.php>Go back</a></p>";
echo "<p><a href=adres.php?top=2>View topic</a></p>";
?>