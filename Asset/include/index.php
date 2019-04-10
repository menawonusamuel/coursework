<?php require "header.php";?>
    <h2>Login!</h2>
    <form action="login.php" method="post" autocomplete="on" autofocus>

        <input type="text"  spellcheck="false" name="user" placeholder="Email or Username" />
        <input type="password"  spellcheck="false" name="pwd" placeholder="Password" />
        <select name="actors">
            <option value="1">Administrator</option>
            <option value="2">Team leader</option>
            <option value="3">Student</option>
        </select>
        <input type="submit" name="submit" value="Submit" />
<?php require "footer.php";?>