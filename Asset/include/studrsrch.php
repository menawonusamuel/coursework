<?php
session_start();
require_once("connection.php");?>
<?php

if(isset($_POST['submit'])){
    $pn=$_POST['pn'];
    $topic_id=$_POST['topid'];
    $date=$_POST['date'];


    $file= basename($_FILES['fupload']['name']);
    $fileTmpName= $_FILES['fupload']['tmp_name'];
    if(!$db){
        die("Database selection failed". mysqli_error($db));
    }
    if(empty($pn) && empty($topic_id) && empty($date) && empty($file)){
        echo "Fill in all details, Leaave no blank space";
    }
    else  {

        $upload= 'uploads/';
        move_uploaded_file($fileTmpName, $upload.$file);
        $sql= " INSERT INTO papers(Name, topic_id, file, date_of_upload) VALUES ('$_POST[pn]', '$_POST[topid]','{$_FILES['fupload']['name']}', '$_POST[date]')";
        $db_query=mysqli_query($db, $sql);
        if(!$db_query){
            die("Database query failed" . mysqli_error($db));
        }
        session_start();
        $_SESSION['mes']="File uploaded successfully";
        header("location:studprof.php?stp=2");
    }
}

?>