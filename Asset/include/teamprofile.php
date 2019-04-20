<?php
session_start();
require_once("connection.php");?>
<?php
if(isset($_POST['submit'])){

    $file= basename($_FILES['fupload']['name']);
    $fileTmpName= $_FILES['fupload']['tmp_name'];
    if(!$db){
        die("Database selection failed". mysqli_error($db));
    }


    $upload= 'profile/';
    move_uploaded_file($fileTmpName, $upload.$file);
    $sql= " UPDATE student
    SET
    Photo='{$_FILES['fupload']['name']}'
    Where student_id=$_SESSION[tid]";
    $db_query=mysqli_query($db, $sql);
    echo"File uploaded";
    if(!$db_query){
        die("Database query failed" . mysqli_error($db));
    }
}


?>