<?php
session_start();
require_once("connection.php");?>
<?php include_once("heading.php");?>
    <li> <div class="dropdown">
            <button class="dropbtn">Research</button>
            <div class="dropdown-content">
                <a href="teamlead.php?stp=1">View research papers</a>
                <a href="teamlead.php?stp=2">Upload research papers</a>
            </div>
        </div></li>
    <li><div class="dropdown">
            <button class="dropbtn">Review</button>
            <div class="dropdown-content">
                <a href="teamlead.php?stp=3">Make Review</a>
                <a href="teamlead.php?stp=4">View Reviews</a>
            </div>
        </div></li>

    <a href="teamedit.php">Edit profile</a>
    <li><a href="logout.php">Log out</a></li>
    </ul>
    </nav>
    </div>

    </header>
    <section id="newsletter">
        <div class="container">


            <h1 style="margin-right:30px;">Group<?php echo" " . $_SESSION['tgrp'];?></h1>
            <div class="dropdown">
                <button class="dropbtn"style="float:right; margin-right:10px;"><a href="teamstg.php" >Members </a></button>

            </div>
            <h1 style="float:right;">Welcome<?php echo" " . $_SESSION['tuser'];?> <h1>
                    <?php

                    $sqli="Select * from student Where student_id='$_SESSION[tid]'";
                    $quer=mysqli_query($db,$sqli);
                    if($quer===false){
                        die(mysqli_error($db));
                    }
                    if(mysqli_num_rows($quer)==0){
                        print("<img src=img_avatar.png alt=Person width=96 height=96 title='$_SESSION[tuser]'");
                    }else{
                        $row=mysqli_fetch_array($quer);
                        print"<div class=chi>
        <a href=profile/{$row['Photo']}><img src=profile/{$row['Photo']} alt=Person width=96 height=96 title={$_SESSION['tuser']} ></a>
    </div>";}
                    ?>

        </div>

    </section>
<?php

$sq="Select * from student Where group_id='$_SESSION[tgrp]' Order by actor DESC";
$que=mysqli_query($db,$sq);?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Student Profile</h1>
                <ul id="services">
                    <li>
<?php
print("<h2><font color=Blue>List of students</font></h2>");
print"
<div style=overflow-x:auto;>
 <table style=width:100%;>
 	<tr><b><Th>Firstname</Th><Th>Lastname</Th><Th>Category</Th><Th>Image</Th></b></tr>";

while ($rows = mysqli_fetch_array($que)){
    print "<tr><td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" . "<td>" . $rows[8] . "</td>" . "<td>" ."<a href=profile/{$rows['Photo']}><img src=profile/{$rows['Photo']} alt=Person width=96 height=96 title=$rows[1]$rows[2] ></a>" . "</td>". " </tr></div>";

}
echo "<p><a href=teamlead.php>Go back</a>";

?>