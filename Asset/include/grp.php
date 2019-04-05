<?php require_once("connection.php");?>
<?php
require("header.php");
?>
    <p>Group creation</p>
    <form action="grp1.php" method="post">
        <input type="text" name="gname" placeholder="Group name" /></br />
        Group description: <textarea name="desc" rows="5" cols="35"></textarea><br /><br />

        <h3>Team leader:</h3>

        <?php
        if(!$db){
            die("Database selection failed");
        }
        $sql="Select * from student";
        $query=mysqli_query($db,$sql);
        if (!$query) {
            die("Database query failed");
        }?>
        <select name="stud">
            <?php
            while ($rows = mysqli_fetch_array($query)){
                echo "<option  value=" . $rows[0] .  ">" .  $rows[1] . " " . $rows[2] . " </option>";
            }
            ?>
        </select>
        <?php
        $sq="Select * from topic";
        $quer=mysqli_query($db,$sq);
        if (!$quer) {
            die("Database query failed");
        }?>
        <h3>Group topic:</h3>
        <select name="topic">
            <?php
            while ($row = mysqli_fetch_array($quer)){
                echo "<option  value=" . $row[0] .  ">" .  $row[1]." </option>";
            }
            ?>
        </select>
        <input type=submit value=Submit />
    </form>

<?php require"footer.php";