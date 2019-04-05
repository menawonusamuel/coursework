<?php
require("adheader2.php");
?>
<h1>Students</h1>
<div class="body">
    <ul>
        <li><a href="adstud.php?stud=1">Add Student</a></li>
        <li><a href="adstud.php?stud=2">View Students</a></li>
        <li><a href="adstud.php?stud=3">Delete Student</a></li>
        <li><a href="adstud.php?stud=4">Update Student</a></li>
    </ul>
</div>
<div class="content">
    <?php if(!isset($_GET['stud'])){
        $_GET['stud']= "";
    }?>
    <p><?php
        switch($_GET['stud']){
        case 1 :
            header("location:reg.php");
            break;
        case 2 :
        # code...?>
    <p >Search for Student
    <form action=viewstud.php method=post>
        <input type= "text" name="fn" placeholder="Firstname" />
        <input type="text" name="ln" placeholder= "Lastname"  />
        <input type="submit" name="submit" value="Search" />
    </form></p>
    <p >Search for Student by Matric Number
    <form action=viewstud1.php method=post>
        <input type= "text" name="id" placeholder="Matric number" />
        <input type="submit" name="check" value="Search" />
    </form></p>
<?php break;
case 3 :?>
    <p >Delete  Student
    <form action=delstud.php method=post>
        <input type= "text" name="fn" placeholder="Firstname" />
        <input type="text" name="ln" placeholder= "Lastname"  />
        <input type="submit" name="submit" value="Delete" />
    </form>
    <?php break;
case 4 :?>
    <p >Update Student
    <form action=upstud.php method=post>
        <input type= "text" name="id" placeholder="Matric number" />
        <input type="submit" name="submit" value="Search" />
    </form>
<?php
}
?>

</div>

</div>