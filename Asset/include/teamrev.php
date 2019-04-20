<?php
session_start();
require_once("connection.php");
if(!isset($_GET['view'])){
    $_GET['view']="";
}
?>
<?php include_once("heading.php");?>
    <li> <div class="dropdown">
            <button class="dropbtn">Research</button>
            <div class="dropdown-content">
                <a href="studprof.php?stp=2">Upload research papers</a>

                <a href="studprof.php?stp=1">View research papers</a>
            </div>
        </div></li>
    <li><div class="dropdown">
            <button class="dropbtn">Review</button>
            <div class="dropdown-content">
                <a href="studprof.php?stp=4">View Reviews</a>
                <a href="studprof.php?stp=3">MakeReview</a>
            </div>
        </div></li>


    <li><a href="teamlead.php?stp=4">Go back</a></li>
    <li><a href="logout.php">Log out</a></li>
    </ul>
    </nav>
    </div>

    </header>

    <section id="newsletter">
        <div class="container">


            <h1 style="margin-right:30px;">Group<?php echo" " . $_SESSION['tgrp'];?></h1>
            <div class="dropdown">
                <button class="dropbtn"style="float:right; margin-right:10px;"><a href="viewstg.php" >Members </a></button>

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

    </section>


    <div class="heading"><h1>Welcome to the Student's Paper Sharing application</h1>
<?php

$sql="Select * from papers where file='$_GET[view]'";
$query=mysqli_query($db, $sql);
if($query===false){
    die(mysqli_error($db));
}
if(mysqli_num_rows($query)==0){
    echo "No review found";
}
else{
    $row =mysqli_fetch_assoc($query);
    # code...
    echo "Reviews for \"<strong>" . $_GET['view'] . "</strong>\" here";


    $sq="Select p.depositor, r.review, r.datesent from reviews r LEFT JOIN papers p ON (r.rpid=p.rpid) where p.file='$_GET[view]' Order by r.review_id DESC";
    $quer=mysqli_query($db, $sq);
    if($quer===false){
        die(mysqli_error($db));
    }
    if(mysqli_num_rows($query)!=0){


        while($rows=mysqli_fetch_array($quer)){
            echo"<div style=margin-down:1px;text-decoration:none;>";
            echo "<li>" . $rows['depositor'] . " who is a <span title=category style=color:teal;>".$row['category'] ."</span> posted: </li>";
            echo "<li>" . $rows['review'] . "  </li>";
            echo "<li>on <span title=date-of-review-sent style=color:teal;>" . $rows['datesent'] . " </span> </li>";
            echo "<li>Reply from Admin : " ;
            echo "<li>\"" . $rows[7] . " \" </li>";
            echo "<li>\"" . $rows[6] . " \" </li>";
            echo "<hr />";
        }
    }
    else{
        echo "No review found";
    }
}


?>