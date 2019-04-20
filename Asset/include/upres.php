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
    <li><a href="adres.php?top=4">Go back</a></li>
    </ul>
    </nav>
    </div>
    </header>
<?php

$id=$_POST['id'];
if (isset($_POST['submit']) && empty($id)){
    $sq="Select* from topic Order by topic_id ASC";
    $que=mysqli_query($db,$sq);?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title">List of topics</h1>
    <ul id="services">
    <li>
    <?php
    print" 
<h2><font color=Blue>List of topics: No record entered</font></h2>
<div style=overflow-x:auto;>
 <table >
  <tr><b><Th>S/N</Th><Th>Topicname</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] ."</td></tr></div";
    }
}

else{
    $sql="Select * from topic Where name='$id'";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }if(mysqli_num_rows($query)==0){?>
        <section id="main">
        <div class="container">
        <article id="main-col">
        <h1 class="page-title">List of topics</h1>
        <ul id="services">
        <li><?php
        echo"Record not found<p>";
        echo "<a href=adres.php?top=4>Go back</a></li></p>";
    }else{
        while ($rows=mysqli_fetch_array($query)){
            ?><section id="main">
                <div class="container">
                    <article id="main-col">
                        <h1 class="page-title">Update Topic</h1>
                        <ul id="services">
                            <li>
                                <h3>School Research app</h3>
                                <p>please enter the necessary information that the form will prompt you to do.</p>
                                <p></p>
                            </li>

                        </ul>

                    </article>
                    <aside id="sidebar">
                        <div class="dark">
                            <h2>Update Topic</h2>
            <?php
            print"<form action=upres1.php method=post>
Topic number<br /><input type=text name=id value=$rows[0] readonly=true><br /><br />
Topic<br /><input type=text name=fn value=$rows[1] ><br /><br />
<input type=submit value=Submit />";
        }
    }
}
?>