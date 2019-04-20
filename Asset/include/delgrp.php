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
$id=$_POST['id'];
if (isset($_POST['submit'])  && empty($id)){
    $sq="Select* from grp_tbl Order by group_id ASC";
    $que=mysqli_query($db,$sq);?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title"><p><a href=adgrp.php?grp=3>Go back</a></h1>
    <ul id="services">
    <li>
    <?php
    print" 
<h2><font color=Blue>List of groups: No record entered</font></h2>
 <table >
 	<tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Topic</Th><Th>Student name</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" ;
        $req="Select * from topic where topic_id='$rows[3]'";
        $ques=mysqli_query($db,$req);
        while($ra=mysqli_fetch_array($ques)){
            echo $ra[1] . "</td>";
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
}
else{$que="UPDATE student
SET 
group_id=0
WHERE group_id=$id";
    $query=mysqli_query($db,$que);
    if(!$query){
        die("Database query failed" . mysqli_error($db));
    }
    $sql="Delete from grp_tbl Where group_id='$id'";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }
    ?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">List of groups</h1>
                <ul id="services">
                    <li>
    <?php
    if(mysqli_affected_rows($db)==0){
        echo "No record deleted";
    }
    else{
        echo "<font color=blue><h3> Group  has been deleted</h3></font>";
        echo "<p><a href=adgrp.php?grp=3>Go back</a>";
    }
}
?>