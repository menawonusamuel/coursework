<?php
require("adheader2.php");
?>
    <h1>Groups</h1>
    <div class="body">
        <ul>
            <li><a href="adres.php?top=1">Add Topic</a></li>
            <li><a href="adres.php?top=2">View Topic </a></li>
            <li><a href="adres.php?top=3">Delete Topic </a></li>
            <li><a href="adres.php?top=4">Update Topic</a></li>
            <li><a href="adres.php?res=1">Add researchpaper</a></li>
            <li><a href="adres.php?res=2">View researchpapers</a></li>
            <li><a href="adres.php?res=3">Delete researchpapers</a></li>
            <li><a href="adres.php?res=4">Update researchpapers</a></li>
        </ul>
    </div>
<?php if(!isset($_GET['top'])){
    $_GET['top']= "";
}?>
    <p><?php
switch($_GET['top']){
    case 1 :
        header("location:topic.php");
        break;
    case 2 :?>
        <p >Search for Topic
        <form action=viewres.php method=post>
            <input type= "text" name="gn" placeholder="Topic name" />
            <input type="number" name="id" placeholder= "Topic number"  />
            <input type="submit" name="submit" value="Search" />
        </form></p>

        <?php break;
    case 3 :?>
        <p >Delete  Topic
        <form action=delres.php method=post>
            <input type= "text" name="gn" placeholder="Firstname" />
            <input type="submit" name="submit" value="Delete" />
        </form>
        <?php break;
    case 4 :?>
        <p >Update  Topic
        <form action=upres.php method=post>
            <input type="text" name="id" placeholder= "Topic number"  />
            <input type="submit" name="submit" value="Search" />
        </form></p>

        <?php
        break;
}?>

<?php if(!isset($_GET['res'])){
    $_GET['res']= "";
}?>
    <p><?php
switch($_GET['res']){
    case 1 :
        header("location:rsrch.php");
        break;
    case 2 :?>
        <p >Search for Research paper
        <form action=viewrsrch.php method=post>
            <input type= "text" name="gn" placeholder="Research name" />
            <input type="number" name="id" placeholder= "Topic number"  />
            <input type="submit" name="submit" value="Search" />
        </form></p>

        <?php break;
    case 3 :?>
        <p >Delete  Research
        <form action=delrsrch.php method=post>
            <input type= "text" name="gn" placeholder="Research paper name" />
            <input type="submit" name="submit" value="Delete" />
        </form>
        <?php break;
    case 4 :?>
        <p >Update  Topic
        <form action=uprsrch.php method=post>
            <input type="text" name="id" placeholder= "Research paper number"  />
            <input type="submit" name="submit" value="Search" />
        </form></p>

        <?php
        break;
    default : echo "Hello Admin";
}?>