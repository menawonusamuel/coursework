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
$gn=$_POST['gn'];

if (isset($_POST['submit']) && (empty($gn))){
    $sq="Select * from topic Order by topic_id ASC";
    $que=mysqli_query($db,$sq);
    ?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title">List of groups</h1>
    <ul id="services">
    <li>
    <?php
    print("<h2><font color=Blue>List of topics: No record entered</font></h2>");
    print" 
 <table >
 	<tr><b><Th>S/N</Th><Th>Topic</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>"  . "</tr>";

    }
}
else{
    $sql="Delete from topic Where(name='$gn') Order by topic_id ASC";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }
    if(mysqli_affected_rows($db)==0){?>
        <section id="main">
        <div class="container">
        <article id="main-col">
        <h1 class="page-title">List of topics</h1>
        <ul id="services">
        <li><?php
        echo"Record not found, Record deleted";
    }else{
        $sq="Select * from topic";
        $que=mysqli_query($db,$sq);
        if (!$que) {
            die("Database query failed");
        }?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">List of topics</h1>
                    <ul id="services">
                        <li><?php
        print("<h2><font color=Blue>List of topics:Database record deleted</font></h2>");
        print" 
 <table >
 	<tr><b><Th>S/N</Th><Th>Topic</Th>";
        while ($rows = mysqli_fetch_array($que)){
            print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>"  . "</tr>";

        }

    }}
echo "<p><a href=adres.php?top=3>Go back</a>";
?>