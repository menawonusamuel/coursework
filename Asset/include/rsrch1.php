<?php
session_start();?>
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
    <a href="adres.php?top=4">Go back</a></li>
    </ul>
    </nav>
    </div>
    </header>
<?php
if(isset($_POST['submit'])){
    $pn=$_POST['pn'];
    $topic_id=$_POST['topid'];
    $date=$_POST['data'];
    $inset=$_POST['inset'];
    $cat=$_POST['cat'];
    $review=$_POST['review'];
    $max_file_size = 7000000;


    $file= basename($_FILES['fupload']['name']);
    $allowedfile=explode(' ',$file);
    $file=implode('-', $allowedfile);
    $fileTmpName= $_FILES['fupload']['tmp_name'];
    if(!$db){
        die("Database selection failed". mysqli_error($db));
    }
    if(isset($_POST['submit']) && empty($_POST['pn']) && empty($_POST['topid']) && empty($_POST['data'])){
        echo "Fill in all details, Leave no blank space";
    }
    elseif  ($_FILES['fupload']['size']  ==  0)  {
        ?>
        <section id="main">
        <div class="container">
        <article id="main-col">
        <h1 class="page-title">Error uploading paper</h1>
        <ul id="services">
        <li>
        <?php
        echo("ERROR:  Zero  byte  file  upload<p>");
        echo("Upload paper<p>");
        echo "<p><a href=adres.php?res=1>Go back</a></p>";
    }
    else  {

        $upload= 'uploads/';
        move_uploaded_file($fileTmpName, $upload.$file);
        $sql= " INSERT INTO papers(Name, topic_id, file, date_of_upload, category, depositor, review,receipient) VALUES ('$_POST[pn]', '$_POST[topid]','$file', '$_POST[data]', '$_POST[cat]', '$inset', '$_POST[review]', 'none')";
        $db_query=mysqli_query($db, $sql);
        if($db_query==false){
            die( mysqli_error($db));
        }?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">Upload paper Successfully</h1>
                    <ul id="services">
                        <li>
        <?php
        echo"File uploaded successfully<p>";
        echo "<p><a href=adres.php?res=1>Go back</a><p>";
    }
}

?>