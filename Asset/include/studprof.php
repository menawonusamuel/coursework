<?php
session_start();
require_once("connection.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Students page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrap"><h2>Students page</h2>
    <p>Log out  </p>
    <p>Edit profile   </p>
    <p>Welcome<?php echo" " . $_SESSION['user'];?> </p>
    <p>Group<?php echo" " . $_SESSION['grp'];?> </p>
    <div class="container">
    </div>
    <div class="space"></div>
    <div class="main">
        <div class="nav">
            <ul>
                <li><a href="studprof.php?stp=1">View research papers</a></li>
                <li><a href="studprof.php?stp=2">Upload research papers</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="splashscreen"><img src="a.jpeg" />
                <?php
                if(isset($_SESSION['mes'])){
                    echo $_SESSION['mes'];
                }?></div>
            <div class="space"></div>
            <div class="heading"><h1>Welcome to the Student's Paper Sharing application</h1>
                <p>
                    <?php
                    if(!isset($_GET['stp'])){
                        $_GET['stp']= "";
                    }?>
                    <?php
                    switch($_GET['stp']){
                    case 2 :?>
                <p>
                <form action="studrsrch.php" enctype="multipart/form-data" method="post">

                    <input type="text" name="pn" placeholder="Paper name" /><br />
                    <?php
                    $sq="Select * from topic Where topic_id='$_SESSION[topic]'";
                    $quer=mysqli_query($db,$sq);
                    if (!$quer) {
                        die("Database query failed");
                    }?>
                    <h3>Group topic:</h3>

                    <?php
                    print"<select name=topic>";
                    while ($row = mysqli_fetch_array($quer)){
                        echo "<option  value=" . $row[0] .  ">" .  $row[1]." </option>";
                        $_SESSION['topic_name']=$row[1];
                    }
                    ?>
                    </select>
                    <br />
                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" / ><br />
                    <input type="file" name="fupload"><br />
                    <input type="date" name="date" placeholder="Date of Upload" />
                    <input type="submit" name="submit" value="Upload">
                </form></p>
                <?php break;}?>
                <p>
                    <?php

                    $sql="Select * from papers where topic_id='$_SESSION[topic]'";
                    $query=mysqli_query($db, $sql);
                    if($query===false){
                        die(mysqli_error($db));
                    }
                    while ($rows=mysqli_fetch_array($query)) {
                        # code...
                        print"<table border>
  <tr><b><Th>S/N</Th><Th>Paper name</Th><Th>Date of upload</Th><Th>File name</Th><Th>Topic number</Th>";
                        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[4] ."</td>" ."<td>" .$rows[3]."</td>". "<td>". $rows[2] . "</td></tr>";

                    }
                    ?>
                </p>
            </div>
        </div></div>
    <div class="space"></div>
</div>

</body>
</html>