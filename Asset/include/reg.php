<?php require_once("connection.php");?>
<?php require"header.php";?>
    <h2>Registration</h2>
    <form action="reg1.php" method="post" autocomplete="on" autofocus>
    <input type="text"  spellcheck="false" name="fname" placeholder="First name" />
    <input type="text"  spellcheck="false" name="lname" placeholder="Last name" />
    <input type="text"  spellcheck="false" name="addr" placeholder="Address" />
    <input type="text"  spellcheck="false" name="pstcde" placeholder="Post code" />
    <input type="email"  spellcheck="false" name="email" placeholder="Email" />
    <input type="text"  spellcheck="false" name="uname" placeholder="Username" />
    <input type="password"  spellcheck="false" name="pwd" placeholder="Password" />
    <h3>Assign to Group</h3>
    <?php

    $sql="Select * from grp_tbl";
    $query=mysqli_query($db,$sql);
    if (!$query) {
        die("Database query failed" .mysqli_error());
    }?>
    <select name="grp">
        <?php
        while ($rows = mysqli_fetch_array($query)){
            echo "<option  value=" . $rows[0] .  ">" .  $rows[1] . " </option>";
        }
        ?>
    </select>
    <h3>Register as:</h3>
    <select name="actor">
        <option  value="Administrator">Administrator</option>
        <option  value="Team leader">Teamleader</option>
        <option  value="Student" selected="">Student</option>
    </select>
    <input type="submit" value="Submit" />
<?php require"footer.php";?>