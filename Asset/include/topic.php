<?php
session_start();
require_once("connection.php");?>
<?php
require("header.php");
?>
<form action="topic1.php" method="post">
    <?php if (isset($_SESSION['msg'])){
        echo $_SESSION['msg'] . "<br />";
    }?>
    <input type="text" name="topicname" placeholder="Topic name" />
    <input type="submit" name=submit value="Submit">
</form>