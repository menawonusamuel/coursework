<?php
require_once("connection.php");
if(!isset($_GET['del'])){
    $_GET['del']="";
}

$sql="DELETE FROM `reviews` WHERE review_id='$_GET[del]'";
$query=mysqli_query($db, $sql);
if($query===false){
    die(mysqli_error($db));
}
if(mysqli_affected_rows($db)==0){
    echo"No record deleted";
}
else{
    echo"record deleted";
    header("location:rev.php");
}

?>