<?php
require("adheader2.php");
?>
    <h1>Groups</h1>
    <div class="body">
        <ul>
            <li><a href="adgrp.php?grp=1">Add Group</a></li>
            <li><a href="adgrp.php?grp=2">View Groups & Team Leaders</a></li>
            <li><a href="adgrp.php?grp=3">Delete Group & Tem leaader</a></li>
            <li><a href="adgrp.php?grp=4">Update Group & Teamleader</a></li>
            <li><a href="adgrp.php?grp=5">Add Students to Group</a></li>
        </ul>
    </div>
<?php if(!isset($_GET['grp'])){
    $_GET['grp']= "";
}?>
    <p><?php
switch($_GET['grp']){
    case 1 :
        header("location:grp.php");
        break;
    case 2 :?>
        <p >Search for Group
        <form action=viewgrp.php method=post>
            <input type="text" name="id" placeholder= "Group number"  />
            <input type="submit" name="submit" value="Search" />
        </form></p>

        <?php break;
    case 3 :?>
        <p >Delete  Group
        <form action=delgrp.php method=post>
            <input type= "text" name="gn" placeholder="Firstname" />
            <input type="text" name="id" placeholder= "Lastname"  />
            <input type="submit" name="submit" value="Delete" />
        </form>
        <?php break;
    case 4 :?>
        <p >Update  Group
        <form action=upgrp1.php method=post>
            <input type="text" name="id" placeholder= "Group number"  />
            <input type="submit" name="submit" value="Search" />
        </form></p>

        <?php
        break;
}?>