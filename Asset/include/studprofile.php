<?php
session_start();
require_once("connection.php");?>
<?php
if(isset($_POST['submit'])){



    $file= basename($_FILES['fupload']['name']);
    $allowedfile=explode(" ", $file);
    $file=implode('-', $allowedfile);
    $fileTmpName= $_FILES['fupload']['tmp_name'];
    if(!$db){
        die("Database selection failed". mysqli_error($db));
    }
    else  {

        $upload= 'profile/';
        move_uploaded_file($fileTmpName, $upload.$file);
        $sql= " UPDATE student
    SET
    Photo='$file'
    Where student_id=$_SESSION[id]";
        $db_query=mysqli_query($db, $sql);
        if(!$db_query){
            die("Database query failed" . mysqli_error($db));
        }
        session_start();
        $_SESSION['mes']="File uploaded successfully";
        header("location:stdedit.php?edit=4");
    }
}

?>