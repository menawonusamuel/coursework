<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>PROJECT RESEARCH PAPER SHARING</title>
    <meta charset="UTF-8">
    <meta content="width=300, initial-scale=1" name="viewport">
    <meta name="description" content="Project Research Paper Sharing Site">
    <title>PROJECT RESEARCH PAPER SHARING</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="wrapper">
        <div class="space">
        <div aria-label="Google">
            <div></div>
            <div class="container">
                <hgroup>
                    <h1>Project Research Paper Sharing</h1>
                    <h3>Sign in</h3>
                </hgroup>
            </div>
        </div>
        <div class="main">
        <div class="topic"
            <h2>Login!</h2>
            <form action="login.php" method="post" autocomplete="on" autofocus>
            <input type="email" spellcheck="false" name="email" placeholder="Email or Username" />
            <input type="password" spellcheck="false" name="pwd" placeholder="Password" />
                <select name="actors">
                    <option value="1">Administrator</option>
                    <option value="2">Teamleader</option>
                    <option value="3">Student</option>
                </select>
                <input type="submit" value="Submit"/>
            </form>
        </div>
        </div>
    </div>
</body>
</html>>
