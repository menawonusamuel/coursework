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
    <li><a href="adres.php?res=4">Go back</a></li>
    </ul>
    </nav>
    </div>
    </header>   <?php

if (!$db_selected) die("<h3><font color=red>Database <b>groups</b> does not exist.</font></h3>");
$file= basename($_FILES['fupload']['name']);
$allowedfile=explode(' ',$file);
$file=implode('-', $allowedfile);
$fileTmpName= $_FILES['fupload']['tmp_name'];

if(isset($_POST['submit']) && empty($_POST['pn']) && empty($_POST['topid']) && empty($_POST['data'])){
    echo "Fill in all details, Leaave no blank space";
}
else  {

    $upload= 'uploads/';
    move_uploaded_file($fileTmpName, $upload.$file);
    $query=mysqli_query($db,"SELECT * FROM papers");
    if (mysqli_num_rows($query) == 0) {die("<h3><font color=red>No record availabe.</font></h3>");}
    $quer=mysqli_query($db,  "
 UPDATE papers
 SET
 Name='$_POST[gname]',
 date_of_upload='$_POST[date]',
 review='$_POST[rev]',
 topic_id='$_POST[topic]',
 file='$file'
 Where rpid='$_POST[id]'"
    );
    if(!$quer){
        die("Database  query faailed". mysqli_error($quer));
    }
    if(mysqli_affected_rows($db)==0){
        ?>
        <section id="main">
        <div class="container">
        <article id="main-col">
        <h1 class="page-title">List of research papers</h1>
        <ul id="services">
        <li><?php
        echo "No record updated<br/>";
        print("<a href=adres?res=4.php>Go  back</a> ");
    }else{
        mysqli_close($db);?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">List of research papers</h1>
                    <ul id="services">
                        <li><?php
        print ("<font color=blue><h3> Data for book with Id $_POST[id] has been updated.</h3></font>");
        print("<a href=adres?res=4.php>Go  back</a> ");
        print("</center>");
    }
}
?>