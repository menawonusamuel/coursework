<?php
session_start();?>
<?php require_once("connection.php");?>
<?php include_once("heading.php");?>
    <li><a href="admin.php">Home</a></li>
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
    </ul>
    </nav>
    </div>
    </header>
<?php
$fn=$_POST['fn'];
$ln=$_POST['ln'];

if (isset($_POST['submit']) && (empty($fn) && empty($ln))){
    $s="Select* from student Order by student_id ASC";
    $qu=mysqli_query($db,$s);
    print("<h2><font color=Blue>List of students: No record entered</font></h2>");
    ?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title">List of groups</h1>
    <ul id="services">
    <li>
    <?php
    print"
 <table >
 	<tr><b><Th>Id<Th>Firstname</Th><Th>Lastname</Th><Th>Address</Th><Th>Postcode</Th><Th>Username</Th><Th>Email</Th><Th>Password</Th></b></tr>";

    while ($ro = mysqli_fetch_array($qu)){
        print "<tr><td>" . $ro[0]. "</td>". "<td>" . $ro[1] . "</td>" . "<td>" .$ro[2] ."</td>" ."<td>" .$ro[3]."</td>" ."<td>". $ro[4]."</td>" ."<td>" . $ro[5] ."</td>" ."<td>" . $ro[6] . "</td><td>". $ro[7] ."</td> </tr>";

    }
}
else{
    $sql="Delete from student Where((firstname='$fn') AND (lastname='$ln'))";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }
    if (mysqli_affected_rows($db)==0){?>
        <section id="main">
        <div class="container">
        <article id="main-col">
        <h1 class="page-title">List of groups</h1>
        <ul id="services">
        <li>
        <?php

        echo "Record not found, Record not deleted";
    }
    else{
        $sq="Select* from student Order by student_id ASC";
        $que=mysqli_query($db,$sq);
        if (!$que) {
            die("Database query failed");
        }?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">List of Students</h1>
                    <ul id="services">
                        <li>
        <?php echo "<p>Database deleted succesfully</p>";
        print"
 <table >
 	<tr><b><Th>Id<Th>Firstname</Th><Th>Lastname</Th><Th>Address</Th><Th>Postcode</Th><Th>Email</Th><Th>Username</Th><Th>Password</Th></b></tr>";
        while ($rows = mysqli_fetch_array($que)){
            print "<tr><td>" . $rows[0]. "</td>". "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>" ."<td>". $rows[4]."</td>" ."<td>" . $rows[5] ."</td>" ."<td>" . $rows[6] . "</td><td>". $rows[7] ."</td> </tr>";

        }
    }
}



echo "<p><a href=adstud.php>Go back</a>";
?>