<?php session_start();
require_once("connection.php");
if (!isset($_SESSION['user_iid'])) {
    $_SESSION['user_id'];
}

if(!$db_select){
    echo"Database selection failed";
}
$sql="Select * from student";
$query=mysqli_query($conn,$sql);
if(!$query){
    echo "Database query failed";
}
while ($result=mysqli_fetch_assoc($query)) {
    echo $_SESSION['name'];
}
?>