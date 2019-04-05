<?php
session_start();
require_once("connection.php");?>
<?php
require("header.php");
?>
<form action="rsrch1.php" enctype="multipart/form-data" method="post">

    <input type="text" name="pn" placeholder="Paper name" /><br />
    <?php
    $sqli="Select * from topic";
    $query=mysqli_query($db,$sqli);
    if (!$sqli) {
        die("Database query failed" .mysqli_error());
    }?>
    <h3>Group topic:</h3>

    <?php
    print"<select name=topic>";
    while ($row = mysqli_fetch_array($quer)){
        echo "<option  value=" . $row[0] .  ">" .  $row[1]." </option>";
    }
    ?>
    </select>
    <br />
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" / ><br />
    <input type="file" name="fupload"><br />
    <input type="date" name="date" placeholder="Date of Upload" />
    <input type="submit" name="submit" value="Upload">
</form>