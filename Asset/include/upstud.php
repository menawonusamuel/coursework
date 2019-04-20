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
    <li><a href="adstud.php?stud=4">Go Back</a></li>
    </ul>
    </nav>
    </div>
    </header>
<?php

$id=$_POST['id'];
$sql="Select * from student Where student_id='$id'";
$query=mysqli_query($db,$sql);
if (!$query) {
    die("Database query failed");
}
if(mysqli_num_rows($query)==0){?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title">List of groups</h1>
    <ul id="services">
    <li>
    <?php

    print ("<font color=blue><h3> Student not found or has been deleted</h3></font>");
}
while ($rows=mysqli_fetch_array($query)){
    ?>
    <section id="main">
    <div class="container">
    <article id="main-col">
        <h1 class="page-title">Delete Students</h1>
        <ul id="services">
            <li>
                <h3>School Research app</h3>
                <p>please enter the necessary information that the form will prompt you to do.</p>
                <strong><p>Please updte the frcords </p></strong>
                    <p></p>
            </li>

        </ul>

    </article>
    <aside id="sidebar">
    <div class="dark">
    <h2>Delete Student</h2>
    <?php
    print"<form action=upstud1.php method=post>
Matric number<br /><input type=text name=id value=$rows[0] ><br /><br />
First name<br /><input type=text name=fn value=$rows[1] ><br /><br />
Last name<br /><input type=text name=ln value=$rows[2] ><br /><br />
Address<br /><input type=text name=addr value=$rows[3] ><br /><br />
Postcode<br /><input type=number name=pstcde value=$rows[4] ><br /><br />
Email<br /><input type=email name=email value=$rows[5] ><br /><br />
Username<br /><input type=text name=uname value=$rows[6] ><br /><br />
Password<br /><input type=password name=pwd value=$rows[7] ><br /><br />
<h3>Assign to Group</h3>";

    $sql="Select * from grp_tbl";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }?>
    <select name="grp">
    <?php
    while ($rows = mysqli_fetch_array($query)){
        echo "<option  value=" . $rows[0] .  ">" .  $rows[1] . " </option>";
    }?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">List of groups</h1>
                <ul id="services">
                    <li>
    <?php
    print" </select>
  <h3>Register as:</h3>
 <select name=actor>
  <option  value=Team leader>Teamleader</option>
  <option  value=Student selected>Student</option>
  </select>
  <input type=submit value=Submit />";
}
?>