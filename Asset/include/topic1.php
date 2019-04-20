<?php require_once("connection.php");?>
<?php include_once("heading.php");?>
<li> <div class="dropdown">
        <button class="dropbtn">Students</button>
        <div
        <section id="main">
            <div class="container">
                <article id="main-col"class="dropdown-content">
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
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div><?php require_once("connection.php");?>
<?php
if(isset($_POST['submit'])){
if(empty($_POST['topicname'])){
    session_start();
    $_SESSION['msg']="No text";
    header("location:topic.php?emptyfield");
}
else{

$sql="Select name from topic Where name='$_POST[topicname]'";
$res=mysqli_query($db,$sql);
if($res===false){
    die(mysqli_error($db));
}

if(mysqli_num_rows($res)!=0){
?><section id="main">
    <div class="container">
        <article id="main-col">
            <h1 class="page-title">Change topic</h1>
            <ul id="services">
                <li>
                    <?php
                    echo "Topic present, Choose another name<p>";
                    echo "<p><a href=adres.php?top=1>Go back</a>";
                    }
                    else{
                    $que="INSERT INTO topicname(name) VALUES('$_POST[topicname]')";
                    $query=mysqli_query($db,$que);
                    if(!$query){
                        die("Database query failed". mysqli_error($db));
                    }?><section id="main">
                        <div class="container">
                            <article id="main-col">
                                <h1 class="page-title">Change topic</h1>
                                <ul id="services">
                                    <li>
                                        <?php
                                        echo"Data inserted";
                                        }
                                        }



                                        }
                                        ?>