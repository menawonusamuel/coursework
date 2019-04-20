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
    <li><a href="adgrp.php">Go Back</a></li>
    </ul>
    </nav>
    </div>
    </header>
<?php
$id=$_POST['id'];
if (isset($_POST['submit']) && (empty($gn) && empty($id))){
    $sq="Select* from grp_tbl Order by group_id ASC";
    $que=mysqli_query($db,$sq);
    ?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title"><p><a href=adgrp.php?grp=2>Go back</a></h1>
    <ul id="services">
    <li>
    <?php
    print("<h2><font color=Blue>List of groups</font></h2>");
    print" 
 <table >
 	<tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Topic</Th><Th>Team Leaders </Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>";
        $sqlii="Select * from topic where topic_id='$rows[3]'";
        $res=mysqli_query($db, $sqlii);
        if($res===false){
            die(mysqli_error($db));
        }
        while($r= mysqli_fetch_array($res)){
            print $r['name']. "</td>";
        }
        $query="Select * from Student where group_id='$rows[0]' AND actor!='Student' Order by group_id ASC";
        $sql=mysqli_query($db,$query);
        if(!$sql){
            die(mysqli_error($db));
        }
        while($row=mysqli_fetch_array($sql)){
            echo "<td>" . $row[1]. " " . $row[2] . "</td>";
        }
        print "</tr>";
    }
}else{
    $sql="Select * from grp_tbl Where(group_id='$id')";
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

        print ("<font color=blue><h3> Group not found or has been deleted</h3></font>");
    }else{?>

        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">List of groups</h1>
                    <ul id="services">
                        <li>
        <?php
        print("<h2><font color=Blue>List of groups</font></h2>");
        print"
 <table >
 	<tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Topic</Th><Th>Student</Th>";
        while ($rows = mysqli_fetch_array($query)){

            print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" ;

            $s="Select * from topic where topic_id='$rows[3]'";
            $result=mysqli_query($db,$s);
            if($result===false){
                die(mysqli_error($db));
            }
            while ($roq=mysqli_fetch_array($result)) {
                print $roq[1]. "</td><td>";
            }
            $sql="Select * from student Where group_id='$id' AND actor !='Student'";
            $que=mysqli_query($db,$sql);
            if ($que===false) {
                die("Database query failed" . mysqli_error($db));
            }
            while ($row = mysqli_fetch_array($que)){
                print  $row[1] . " " . $row[2]. "</td>";

            }
            print("</tr>");
        }
    }echo "<p><a href=adgrp.php?grp=2>Go back</a>";
}
?>