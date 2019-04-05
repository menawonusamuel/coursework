<?php require_once("connection.php");
require("adheader2.php");
$gn=$_POST['gn'];

if(!$db_select){
    echo"Database selection failed";
}
if (isset($_POST['submit']) && (empty($gn))){
    $sq="Select* from papers Order by rpid ASC";
    $que=mysqli_query($db,$sq);
    if(mysqli_num_rows($db)==0){
        print("<h2><font color=Blue>List of Research papers: No record available</font></h2>");
    }else{
        print("<h2><font color=Blue>List of Research papers: No record entered</font></h2>");
        print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Paper name</Th><Th>File</Th><Th>Topic name</Th>";
        while ($rows = mysqli_fetch_array($que)){
            print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[3] ."</td>" ."<td>" .$rows[2]."</td>"   . "</tr>";

        }
    }
    $sql="Delete from papers Where(Name='$gn')";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed" . mysqli_error($db));
    }
    if(mysqli_affected_rows($db)==0){
        echo"Record not found, Record deleted";
    }else{
        $sq="Select * from papers";
        $que=mysqli_query($db,$sq);
        if (!$que) {
            die("Database query failed");
        }
        print("<h2><font color=Blue>List of Research papers</font></h2>");
        print" 
 <table border>
 	<tr><b><Th>S/N</Th><Th>Paper name</Th><Th>File</Th><Th>Topic name</Th>";
        while ($rows = mysqli_fetch_array($que)){

            print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[3] ."</td>" ."<td>" .$rows[2]."</td>"   . "</tr>";

        }}}
echo "<p><a href=adres.php?res=3>Go back</a>";
?>