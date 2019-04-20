<?php
$review=$_POST['review'];
$reply=$_POST['reply'];
$daate=$_POST['date'];
if($_POST['submit']){

    $sql="UPDATE `reviews`
SET
reply='$reply',
datesent= 'date'
WHERE review_id='$review";
    $que=mysqli_query($db,$sql);
    if ($que===false) {
        die("Database query failed" . mysqli_error($db));
    }
    if(mysqli_affected_rows($db)==0){
        echo "Reply not given";
    }
    else{
        echo"Review replied";
    }
}
?>