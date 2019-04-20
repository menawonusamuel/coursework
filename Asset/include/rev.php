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
<li><a href="logout.php">Logout</a></li>
</ul>
</nav>
</div>
</header>
<h1>Welcome admin </h1>
<div class="chip">


</div>
</div>

</section>
<section id="newsletter">
    <div class="container">
        <h1 style="margin-right: 30px; float:left;"><span style="color:teal";> Admin Dashboard</h1>
        <img src=img_avatar.png alt=Person width=96 height=96 title=Admin />


</section>
<form>
    <h3>View reviews</h3>
    <?php
    $sql="Select * from reviews r LEFT JOIN papers p ON (r.rpid=p.rpid)  Order by r.review_id DESC";
    $query=mysqli_query($db, $sql);
    if($query===false){
        die(mysqli_error($db));
    }
    if(mysqli_num_rows($query)==0){
        die(mysqli_error($db));
    }  $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed");
    }
    while($rows=mysqli_fetch_array($query)){
        echo"<div style=margin-down:1px;text-decoration:none;>";
        echo "<li>" . $rows['depositor'] . " who is a <span title=category style=color:teal;>" . $rows[14].  "</span>  in Group ". "<span title=category style=color:teal;>".$rows['group_id']."</span> posted for Research paper <span title=category style=color:Blue;><strong>" . $rows[9]."</strong></span> : </li>";
        echo "<li>\"" . $rows[2] . " \" </li>";
        echo "<li>on date : <span title=date-of-review-sent style=color:teal;>" . $rows['datesent'] . " </span> </li>";
        echo "<li>Reply from Admin : " ;
        echo "<li>\"" . $rows[7] . " \" </li>";
        echo "<li>\"" . $rows[6] . " \" </li>";
        echo "<hr />";
        ;?>
        <?php
        echo " <div class=dropdown>";
        print"<button class=dropbtn><a href=delete.php?del={$rows[0]}>Delete</a></button>";
        echo"</div>";

        ?>
        <?php
        echo " <div class=dropdown>";
        print"<button class=dropbtn><a href=reply.php?rep={$rows[0]}>Reply</a></button>";
        echo"</div>";
        echo "</div";
        echo "<hr />";
    }
    ?>
</form>