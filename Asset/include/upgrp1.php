<?php
session_start();?>
<?php require_once("connection.php");?>
<?php include_once("heading.php");?>
    <li><a href="adgrp.php?grp=4">GO back</a></li>
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
if (isset($_POST['submit']) && empty($id)){
    $sq="Select* from grp_tbl Order by group_id ASC";
    $que=mysqli_query($db,$sq);?>
    <section id="main">
    <div class="container">
    <article id="main-col">
    <h1 class="page-title">List of groups</h1>
    <ul id="services">
    <li>
    <?php
    print" 
<h2><font color=Blue>List of groups: No record entered</font></h2>
 <table >
  <tr><b><Th>S/N</Th><Th>Groupname</Th><Th>Group description</Th><Th>Topic</Th><Th>Student name</Th>";
    while ($rows = mysqli_fetch_array($que)){
        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" ;
        $rest="Select * from topic where topic_id='$rows[3]'";
        $qrech=mysqli_query($db,$rest);
        while($l=mysqli_fetch_array($qrech)){
            echo $l[1] ."</td>";
        }
        $query="Select * from Student where group_id='$rows[0]' AND actor!='Student' Order by group_id ASC";
        $sql=mysqli_query($db,$query);
        if(!$sql){
            die(mysqli_error($db));
        }
        while($row=mysqli_fetch_array($sql)){
            echo " <td>" . $row[1]. " " . $row[2] . "</td>";
        }
        print "</tr>";
    }
}
else{
    if(mysqli_affected_rows($db)===FALSE){
        echo"No updated data,Record doesn't exist";
    }else{
        $sql="Select * from grp_tbl Where group_id='$id'";
        $query=mysqli_query($db,$sql);
        if (!$query) {
            die("Database query failed");
        } if (mysqli_num_rows($query) == 0){?>
            <section id="main">
            <div class="container">
            <article id="main-col">
            <h1 class="page-title">List of groups</h1>
            <ul id="services">
            <li>
            <?php

            echo "<h3><font color=red>No record of group.</font></h3>";
            print"<a href=adgrp.php?grp=4>GO back</a>";
        }
        else{
            while ($rows=mysqli_fetch_array($query)){
                $id=$rows[0];
                $gname=$rows[1];
                $desc=$rows[2];
                $topic=$rows[3];?>
                <section id="main">
                <div class="container">
                <article id="main-col">
                    <h1 class="page-title">View Group</h1>
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
                <h2>Update Group</h2>
                <?php
                print"<form action=upgrp.php method=post>
  Group number<br ><input type=text name=id value=$rows[0] readonly /><br />
Group name<br /><input type=text name=gname value=$rows[1] /><br /><br />
Group description<br /><textarea cols=30 rows=4 name=desc />$rows[2]</textarea><br /><br /><br />

  <h3>Team leader:</h3>";


                $sql="Select * from student Where actor='Student'";
                $query=mysqli_query($db,$sql);
                if (!$query) {
                    die("Database query failed");
                }?>
                <select name="stud" value>
                <?php
                while ($rows = mysqli_fetch_array($query)){
                    echo "<option  value=" . $rows[0] .  ">" .  $rows[1] . " " . $rows[2] . " </option>";
                }
                print"</select>";
                $sq="Select * from topic";
                $quer=mysqli_query($db,$sq);
                if (!$quer) {
                    die("Database query failed");
                }
                print"<h3>Group topic:</h3>
<select name=topic>";
                while ($row = mysqli_fetch_array($quer)){
                    echo "<option  value=" . $row[0] .  ">" .  $row[1]." </option>";
                }}
            ?>
            <?php print" </select>
  <input type=submit value=Submit />
  </form>";

        }}}
?>