<?php
session_start();
require_once("connection.php");?>
<?php include_once("heading.php");?>
    <li> <div class="dropdown">
            <button class="dropbtn">Change</button>
            <div class="dropdown-content">
                <a href="stdedit.php?edit=1" title="Change your email address">Change email</a>
                <a href="stdedit.php?edit=2" title="Change your passwrod">Change Password</a>
            </div>
        </div></li>
    <li><div class="dropdown">
            <button class="dropbtn">Profile</button>
            <div class="dropdown-content">
                <a href="stdedit.php?edit=3" title="View and change other profile data">View your profile</a>
                <a href="stdedit.php?edit=4" title="View and change other profile picture"> Profile picture</a>
            </div>
        </div></li>


    <li><a href="logout.php">Log out </a> </li>
    <li><a href="studprof.php">GO BACK </a> </li>
    </ul>
    </nav>
    </div>

    </header>
    <section id="newsletter">
        <div class="container">

            <h1 style="margin-right:30px;">Group<?php echo" " . $_SESSION['grp'];?></h1>
            <h1 style="float:right;">Welcome<?php echo" " . $_SESSION['user'];?> <h1>
                    <?php

                    $sqli="Select * from student Where student_id='$_SESSION[id]'";
                    $quer=mysqli_query($db,$sqli);
                    if($quer===false){
                        die(mysqli_error($db));
                    }
                    if(mysqli_num_rows($quer)==0){
                        print("<img src=img_avatar.png alt=Person width=96 height=96 title='$_SESSION[user]'");
                    }else{
                        $row=mysqli_fetch_array($quer);
                        print"<div class=chi>
        <a href=profile/{$row['Photo']}><img src=profile/{$row['Photo']} alt=Person width=96 height=96 title={$_SESSION['user']} ></a>
    </div>";}
                    ?>
        </div>
        </div>

    </section>

    <div class="heading"><h1>Welcome to the Student's Paper Sharing application</h1>
<?php

$sq="Select * from student Where group_id='$_SESSION[grp]' Order by actor DESC";
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
 <table >
 	<tr><b><Th>Firstname</Th><Th>Lastname</Th><Th>Category</Th><Th>Profile</Th></b></tr>";

while ($rows = mysqli_fetch_array($que)){
    print "<tr><td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" . "<td>" . $rows[8] . "</td>" . "<td>" ."<a href=profile/{$rows['Photo']}><img src=profile/{$rows['Photo']} alt=Person width=96 height=96 title=$rows[1]$rows[2] ></a>" . "</td>". " </tr></div>";

}
echo "<p><a href=studprof.php.php>Go back</a>";

?>