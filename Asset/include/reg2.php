<?php
session_start(); ?>
<?php require_once("connection.php");?>
<?php include_once("heading.php");?>
<li> <div class="dropdown">
        <button class="dropbtn">Students</button>
        <div class="dropdown-content">
            <a href="adstud.php?stud=1">Add Student</a>
            <a href="adstud.php?stud=2">View Students</a>
            <a href="adstud.php?stud=3">Delete Student</a>
            <a href="adstud.php?stud=4">Update Student</a>
        </div>
    </div></li>
<li> <div class="dropdown">
        <button class="dropbtn">Groups</button>
        <div class="dropdown-content">
            <a href="adgrp.php?grp=1">Add Group</a>
            <a href="adgrp.php?grp=2">View Groups & Team Leaders</a>
            <a href="adgrp.php?grp=3">Delete Group & Tem leader</a>
            <a href="adgrp.php?grp=4">Update Group & Team leader</a>
        </div>
    </div></li>
<li> <div class="dropdown">
        <button class="dropbtn">Research papers</button>
        <div class="dropdown-content">
            <a href="adres.php?top=1">Add Topic</a>
            <a href="adres.php?top=2">View Topic </a>
            <a href="adres.php?top=3">Delete Topic </a>
            <a href="adres.php?top=4">Update Topic</a>
            <a href="adres.php?res=1">Add research paper</a>
            <a href="adres.php?res=2">View research papers</a>
            <a href="adres.php?res=3">Delete research papers</a>
            <a href="adres.php?res=4">Update research papers</a>
        </div>
    </div></li>
    <a href="adstud.php?stud=1">Go back</a></li>
    </ul>
    </nav>
    </div>
    </header><?php
require_once("connection.php");?>
<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $addr=$_POST['addr'];
    $pstcde=$_POST['pstcde'];
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $pwd=$_POST['pwd'];
    $actor=$_POST['actor'];
    $grp=$_POST['grp'];


    $file= basename($_FILES['fupload']['name']);
    $allowedfile=explode(' ',$file);
    $file=implode('-', $allowedfile);
    $fileTmpName= $_FILES['fupload']['tmp_name'];
    if(!$db){
        die("Database selection failed". mysqli_error($db));
    }
    if(isset($_POST['submit']) && empty($_POST['fname']) && empty($_POST['lname']) && empty($_POST['addr']) && empty($_POST['pstcde'])&& empty($_POST['email'])&& empty($_POST['uname']) && empty($_POST['pwd'])&& empty($_POST['actor'])&& empty($_POST['grp']))
    {?> <section id="main">
        <div class="container">
        <article id="main-col">
        <h1 class="page-title">Error registering Student</h1>
        <ul id="services">
        <li>
        <?php
        echo "Fill in all details, Leaave no blank space";
    }
    elseif  ($_FILES['fupload']['size']  ==  0)  {
        ?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">Error registering Student</h1>
                    <ul id="services">
                        <li>
        <?php
        echo ("ERROR:  Zero  byte  file  upload");
        echo"<p><a href=adstud.php?stud=1>Go back</a></p>";
    }
    else  {

        $upload= 'profile/';
        move_uploaded_file($fileTmpName, $upload.$file);
        $pwd=password_hash($pwd, PASSWORD_DEFAULT);
        $sql= "INSERT INTO student(firstname, lastname, address, postcode, email, username, password, actor, group_id, Photo) VALUES ('$fname', '$lname', '$addr', '$pstcde', '$email', '$uname', '$pwd', '$actor', '$grp', '$file')";
        $db_query=mysqli_query($db, $sql);
        if($db_query==false){
            die( mysqli_error($db));
        }
        session_start();
        $_SESSION['mes']="File uploaded successfully";
        header("location:reg.php");
    }
}

?>