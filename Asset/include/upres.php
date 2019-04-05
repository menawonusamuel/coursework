<?php require_once("connection.php");
require"header.php";?>
<?php

if(!$db){
    die("Database selection failed");
}
$id=$_POST['id'];
$sql="Select * from topic Where topic_id='$id'";
$query=mysqli_query($db,$sql);
if (!$query) {
    die("Database query failed");
}
while ($rows=mysqli_fetch_array($query)){

    print"<form action=upres1.php method=post>
Matric number<input type=text name=id value=$rows[0] ><br />
Topic<input type=text name=fn value=$rows[1] ><br />
<input type=submit value=Submit />";
}
require"footer.php";?>