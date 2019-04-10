<?php
require_once("connection.php");
$user= $_POST['user'];
$pwd=$_POST['pwd'];
$actor=$_POST['actors'];

if(isset($_POST['submit']) &&  $actor="Student") {


    $sql = "Select * from student where username='$user' AND actor='$actor'";
    $result = mysqli_query($db, $sql);

    if ($result === false) {
        die(mysqli_error($db));
    }
    if ($row = mysqli_fetch_assoc($result)) {

        $pwd = password_verify($pwd, $row['password']);

        if ($pwd == false) {
            header("location:index.php");
        } elseif ($pwd == true) {
            session_start();
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['grp'] = $row['group_id'];
            $_SESSION['cat'] = $row['actor'];

            $sql = "Select * from grp_tbl where group_id='$_SESSION[grp]'";
            $quer = mysqli_query($db, $sql);
            if ($rows = mysqli_fetch_assoc($quer)) {
                $_SESSION['topic'] = $rows['topic_id'];
            }
            header("location:studprof.php");
        } else {
            header("location:index.php?wrong pasword or usernaame");
        }
    }
}
?>