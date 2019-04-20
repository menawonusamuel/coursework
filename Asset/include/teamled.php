<?php
session_start();
require_once("connection.php");?>
<?php
if(isset($_POST['submit'])){
    $pn=$_POST['pn'];
    $topic_id=$_POST['topid'];
    $rec=$_POST['receive'];
    $date=$_POST['date'];
    $insert=$_POST['insert'];
    $cat=$_POST['cat'];
    $review=$_POST['review'];
    $max_file_size = 7000000;


    $file= basename($_FILES['fupload']['name']);
    $allowedfile=explode(' ',$file);
    $file=implode('-', $allowedfile);
    $fileTmpName= $_FILES['fupload']['tmp_name'];
    if(!$db){
        die("Database selection failed". mysqli_error($db));
    }
    if(empty($pn) || empty($topic_id) || empty($date) || empty($file)){
        echo "Fill in all details, Leaave no blank space";
    }elseif  ($_FILES['fupload']['size']  ==  0)  {

        die("ERROR:  Zero  byte  file  upload");
    }
    else  {

        $upload= 'uploads/';
        move_uploaded_file($fileTmpName, $upload.$file);
        $sql= " INSERT INTO papers(Name, topic_id, file, date_of_upload, category, depositor, receipient, review) VALUES ('$_POST[pn]', '$_POST[topid]','{$_FILES['fupload']['name']}', '$_POST[date]', '$_POST[cat]', '$_POST[insert]', '$_POST[receive]', '$_POST[review]')";
        $db_query=mysqli_query($db, $sql);
        if(!$db_query){
            die("Database query failed" . mysqli_error($db));
        }
        session_start();
        $_SESSION['mes']="File uploaded successfully";
        header("location:teamlead.php?stp=2");
    }
}

?>