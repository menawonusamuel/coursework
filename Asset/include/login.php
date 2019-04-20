<?php
require_once("connection.php");
$user= $_POST['user'];
$pwd=$_POST['pwd'];
$actor=$_POST['actors'];

if(empty($user) || empty($pwd)){
    echo " Fill in details ";
}

/*if(isset($_POST['forget'])){
	header("location:forget.php");
}
*/
if(isset($_POST['submit']) &&  $actor="Student"){


    $sql="Select * from student where username='$user' AND actor='$actor'";
    $result=mysqli_query($db, $sql);

    if($result===false){
        die(mysqli_error($db));
    }
    if($row=mysqli_fetch_assoc($result)){

        $pwd=password_verify($pwd, $row['password']);

        if($pwd==false){
            header("location:index.php");
        }
        elseif($pwd==true){
            session_start();
            $_SESSION['id']=$row['student_id'];
            $_SESSION['user']=$row['firstname']. " " . $row['lastname'];
            $_SESSION['grp']=$row['group_id'];
            $_SESSION['cat']=$row['actor'];

            $sql="Select * from grp_tbl where group_id='$_SESSION[grp]'";
            $quer=mysqli_query($db, $sql);
            if($rows=mysqli_fetch_assoc($quer)){
                $_SESSION['topic']=$rows['topic_id'];
            }
            header("location:studprof.php");
        }

        else{
            header("location:index.php?wrong pasword or usernaame");
        }
    }
}

if(isset($_POST['submit']) &&  $actor="Team leader"){


    $sql="Select * from student where username='$user' AND actor='$actor'";
    $result=mysqli_query($db, $sql);

    if($result===false){
        die(mysqli_error($db));
    }
    if($row=mysqli_fetch_assoc($result)){

        $pwd=password_verify($pwd, $row['password']);

        if($pwd==false){
            header("location:index.php?wrong_password or username");
        }
        elseif($pwd==true){
            session_start();
            $_SESSION['id']=$row['student_id'];
            $_SESSION['user']=$row['firstname']. " " . $row['lastname'];
            $_SESSION['grp']=$row['group_id'];
            $_SESSION['cat']=$row['actor'];

            $sql="Select * from grp_tbl where group_id='$_SESSION[grp]'";
            $quer=mysqli_query($db, $sql);
            if($rows=mysqli_fetch_assoc($quer)){
                $_SESSION['topic']=$rows['topic_id'];
            }
            header("location:teamlead.php");
        }

        else{
            header("location:index.php?wrong password or username");
        }
    }
}

$_SESSION['name']="Admin";
$_SESSION['password']="sam";
if(isset($_POST['submit']) && $actor='Administrator'){
    if(($user==$_SESSION['name']) && ($pwd==$_SESSION['password'])){
        header("location:admin.php");
    }
    else{
        echo "Invalid username or password for Admin";
    }
}
?>