<?php session_start();
require_once("connection.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$addr=$_POST['addr'];
$pstcde=$_POST['pstcde'];
$email=$_POST['email'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$actor=$_POST['actor'];
$grp=$_POST['grp'];

if(!$db_select){
    echo"Database selection failed";
}
$sql= "INSERT INTO student(firstname, lastname, address, postcode, email, username, password, actor, group_id) VALUES ('$fname', '$lname', '$addr', '$pstcde', '$email', '$uname', '$pwd', '$actor', '$grp')";
$query=mysqli_query($db,$sql);
if (!$query) {
    die("Database query failed");
}
$_SESSION['student'] = $uname;
header("Location:adstud.php");
mysqli_close($db);
?>

