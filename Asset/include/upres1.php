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
    </header><?php

if (!$db_selected) die("<h3><font color=red>Database does not exist.</font></h3>");
$query=mysqli_query($db,"SELECT * FROM topic");
if (mysqli_num_rows($query) == 0) {die("<h3><font color=red>Table is empty.</font></h3>");}
$quer=mysqli_query($db,  "
 UPDATE topic
 SET
name='$_POST[fn]'
Where topic_id='$_POST[id]'");
if(!$quer){
    print("Database  query faailed". mysqli_error($db));
}
mysqli_close($db);?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">List of groups</h1>
                <ul id="services">
                    <li>
<?php
print ("<font color=blue><h3> Data for topic with Id $_POST[id] has been updated.</h3></font>");
print("<a href=adstud.php?stud=4>Go  back</a> ");
?>