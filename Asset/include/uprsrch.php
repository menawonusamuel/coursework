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
    </header>
<?php

$id=$_POST['id'];
if (isset($_POST['submit']) && empty($id)){
    $sq="Select* from papers Order by topic_id ASC LIMIT 8";
    $que=mysqli_query($db,$sq);?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title">List of topics</h1>
    <ul id="services">
    <li>
    <?php
    print" 
<h2><font color=Blue>List of research papers: No record entered</font></h2>
<div style=overflow-x:auto;>
 <table >
  <tr><b><Th>S/N</Th><Th>Papername</Th><Th>Topic name</Th><Th>File</Th><Th>Date of uploaad</Th><Th>Depositor</Th><Th>Category</Th><Th>Receipient</Th><Th>Review</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] ."</td>". "<td>" ;
        $resut="Select * from topic where topic_id='$rows[2]'";
        $result=mysqli_query($db,$resut);
        while($rol = mysqli_fetch_array($result)){
            print $rol[1]. "</td>";
        }
        print "<td>" . $rows[3] ."</td>". "<td>" . $rows[4] ."</td>". "<td>" . $rows[5] ."</td>". "<td>" . $rows[6] ."</td>". "<td>" . $rows[7] ."</td>". "<td>" . $rows[8] ."</td></tr></div";
    }

}
else{?>

    <?php
    $s="Select* from papers  Where rpid='$id'Order by rpid ASC";
    $qu=mysqli_query($db,$s);
    if($qu===false){
        die(mysqli_error($db));
    }
    if(mysqli_num_rows($qu)==0){?>
        <section id="main">
        <div class="container">
        <article id="main-col">
        <h1 class="page-title">List of research paapers</h1>
        <ul id="services">
        <li>
        <?php
        echo"Record not found<p>";
        echo "<a href=adres.php?res=4>Go back</a></li></p>";
    }
    else{?><section id="main">
        <div class="container">
        <article id="main-col">
            <h1 class="page-title">Update Papers</h1>
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
        <h2>Update Research paper</h2>
        <?php
        $rowse =mysqli_fetch_array($qu);
        print"<form action=uprsrch1.php enctype=multipart/form-data method=post>
Paper id<br><input type=text name=id value=$rowse[0] readonly /><br />
Paper name<br><input type=text name=gname value=$rowse[1] /><br />";
        $query="Select * from topic where topic_id='$rowse[2]'";
        $sqli=mysqli_query($db,$query);
        if(!$sqli){
            die(mysqli_error($db));
        }?>

        <?php
        print"
Date of Upload<br><input type=date name=date value=$rowse[4] readonly=true /><br />
Review<br><textarea cols=30 rows=4 name=rev />$rowse[8]</textarea><br /><br />
Actor<br><input type=text name=stud value=$rowse[5] readonly/><br />
<input type=file name=fupload>$rowse[3] <br />";
        print"</select>";
        $sq="Select * from topic";
        $quer=mysqli_query($db,$sq);
        if (!$quer) {
            die("Database query failed");
        } echo  "Topic set: " . $rowse[2] . "<br />";
        echo  "Change topic <br />";
        print"<h3>Group topic:</h3>";

        echo "<select name=topic>";
        while ($row = mysqli_fetch_array($quer)){
            echo "<option  value=" . $row[0] .  ">" .  $row[1]." </option>";
        }
        ?>
        <?php print" </select>
  <input type=submit value=Submit />
  </form>";
    }

}
?>