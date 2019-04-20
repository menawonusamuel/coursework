<?php
session_start();
require_once("connection.php");?>
<?php
if(isset($_POST['submit'])){
    $paper=$_POST['paperid'];
    $review=$_POST['review'];


    if(empty($review) ){
        echo "Fill in all details, Leaave no blank space";
    }
    else  {

        $sql= " INSERT INTO reviews(rpid, review, student_id, std_cat, group_id, datesent, reply) VALUES ('$_POST[paperid]', '$_POST[review]', '$_SESSION[id]', '$_SESSION[cat]', '$_SESSION[grp]', 'null', 'null')";
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