<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Project Research Paper Sharing Site">
    <title>WELCOME TO PROJECT RESEARCH PAPER SHARING</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
</head>
<body>
    <div class="wrapper">
        <div class="space">
        <div aria-label="Google">
            <div></div>
            <div class="container">
                <hgroup>
                    <h1>Research Paper Sharing Application</h1>
                    <h3>Making your Research work easy</h3>
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
