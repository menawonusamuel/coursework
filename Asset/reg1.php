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

$db_select=mysqli_select_db($db, "db1813617_coursework");
if(!$db_select){
    echo"Database selection failed";
}
$sql= "INSERT INTO student(firstname, lastname, address, postcode, email, username, password, actor)
 VALUES ('$fname', '$lname', '$addr', '$pstcde', '$email', '$uname', '$pwd', '$actor')";
$query=mysqli_query($db,$sql);
if (!$query) {
    die("Database query failed");
    $_SESSION['student'] = $uname;
    header('location : ../login.php');
}
?>