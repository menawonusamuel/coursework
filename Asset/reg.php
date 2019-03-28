<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Student</title>
    <meta charset="utf-8">
    <meta content="width=300, initial-scale=1" name="viewport">
    <meta name="description" content="Student research site">
    <title>Student research</title>
    <link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
<div class="wrapper">
    <div class="space">
        <div aria-label="Streaak" >
        </div></div>
    <div class="container">
        <hgroup>
            <h1>One Account, then research</h1>
            <h3>Add to Streaak</h3>
        </hgroup>
    </div>
</div>
<div class="main">
    <div class="topic">
        <h2>Registration</h2>
        <form action="reg1.php" method="post" autocomplete="on" autofocus>
            <input type="text"  spellcheck="false" name="fname" placeholder="First name" />
            <input type="text"  spellcheck="false" name="lname" placeholder="Last name" />
            <input type="text"  spellcheck="false" name="addr" placeholder="Address" />
            <input type="text"  spellcheck="false" name="pstcde" placeholder="Post code" />
            <input type="email"  spellcheck="false" name="email" placeholder="Email" />
            <input type="text"  spellcheck="false" name="uname" placeholder="Username" />
            <input type="password"  spellcheck="false" name="pwd" placeholder="Password" />
            <h3>Register as:</h3>
            <select name="actor">
                <option  value="Administrator">Administrator</option>
                <option  value="Team leader">Team leader</option>
                <option  value="Student" selected="">Student</option>
            </select>
            <input type="submit" value="Submit" />
        </form>
    </div>
</div>
</div>
</body>
</html>