<?php require_once("connection.php") ?>
<?php
require("header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<body>


<div class="container">
    <h1>Admin dashboard</h1>
    <nav>
        <li><a href="admin.php">Home</a></li>
        <li><a href="adstud.php">Students</a></li>
        <li><a href="adgrp.php">Groups</a></li>
        <li><a href="adres.php">Research papers</a></li>
    </nav>
</div>

<div class="main">
    <div class="cont">
        <?php
        $sq="Select count(student_id) from student ORDER by student_id ASC";
            $qu=mysqli_query($db,$sq);
        ?>
        <div class="contt"><div class="word"><h2><?php while ($rows = mysqli_fetch_array($que)){
            print $rows[0];
            }
                    ?></h2></div>
        </div> </div>
        <div class="contt"><div class="word"><h2>groups</h2></div>
        </div>
        <div class="contt"><div class="word"><h2></h2>research papers</div>
        </div>
        <div class="contt"><div class="word"><h2></h2>group leaders</div>
        </div>
    </div>
    <div class="body">
        <img src="../Image/a.jpeg"> "Enjoy with best side school app to use to ensure progress of students in a school society or community"
    </div>
    <div class="content">
        <p>Halo</p>
    </div>
</div>
<div class="footer">
    <p><h1>© Copyright Samir@2019</h1></p>
</div>

</body>
</html>
