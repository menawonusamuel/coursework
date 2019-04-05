<?php require_once("connection.php");?>
<?php
if(isset($_POST['submit'])){
    if(empty($_POST['topicname'])){
        session_start();
        $_SESSION['msg']="No text";
        header("location:topic.php?emptyfield");
    }
    else{


        if(!$db){
            die("Database selection failed");
        }
        $que="INSERT INTO topic(name) VALUES('$_POST[topicname]')";
        $query=mysqli_query($db,$que);
        if(!$query){
            die("Database query failed");
        }
        header("location:adres.php");
    }
}
?>