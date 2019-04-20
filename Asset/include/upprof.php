<?php
session_start();
require_once("connection.php");?>
<?php include_once("head.php");?>
    <li> <div class="dropdown">
            <button class="dropbtn">Change</button>
            <div class="dropdown-content">
                <a href="stdedit.php?edit=1" title="Change your email address">Change email</a>
                <a href="stdedit.php?edit=2" title="Change your passwrod">Change Password</a>
            </div>
        </div></li>
    <li><div class="dropdown">
            <button class="dropbtn">Profile</button>
            <div class="dropdown-content">
                <a href="stdedit.php?edit=3" title="View and change other profile data">View your profile</a>
                <a href="stdedit.php?edit=4" title="View and change other profile picture"> Profile picture</a>
            </div>
        </div></li>


    <li><a href="logout.php">Log out </a> </li>
    <li><a href="studprof.php">GO BACK </a> </li>
    </ul>
    </nav>
    </div>

    </header>

    <div class="heading"><h1>Welcome to the Student's Paper Sharing application</h1>
        <?php
        if(!isset($_GET['edit'])){
            $_GET['edit']= "";
        }?>
        <?php
        switch($_GET['edit']){
        case 2 :?>
            <p>
            <form action="studedit.php" enctype="multipart/form-data" method="post">
                <legend>Change password</legend>
                <input type="text" name="olpwd" placeholder="Old password" /><br />
                <input type="text" name="nwpwd" placeholder="New password" /><br />
                <input type="submit" name="submit" value="Submit" />
            </form></p>
            <?php break;?>

        <?php case 1 : ;?>
            <p>
            <form action="emailch.php" enctype="multipart/form-data" method="post">
                <input type="email" name="olemail" placeholder=" Old email" /><br />
                <input type="email" name="nwemail" placeholder="New email" /><br />
                <input type="submit" name="change" value="Submit" />
            </form></p>
            <?php break;   ?>
        <?php case 3 : ;?>
            <?php
            print"<p>";

            $sql="Select * from student where student_id='$_SESSION[id]'";
            $query=mysqli_query($db, $sql);
            if($query===false){
                die(mysqli_error($db));
            }print"<table border>
  <tr><b><Th>S/N</Th><Th>First name</Th><Th>Last name</Th><Th>Address</Th><Th>Postcode</Th><Th>Email</Th><Th>Username</Th><Th>Group</Th>";
            while ($rows=mysqli_fetch_array($query)) {
                # code...

                print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>". "<td>". $rows[4] . "</td>". "<td>". $rows[5] . "</td>". "<td>". $rows[6] . "</td>". "<td>". $rows[9] . "</td>"."</tr>";

            }
            print"<a href=upprof.php>Click to edit</a>";
            print"</p>";
            ?>
            <?php break;?>

        <?php case 4 : ;?>
        <p>
            <form action="studprofile.php" enctype="multipart/form-data" method="post">
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" / ><br />
                <input type="file" name="fupload"><br />
                <input type="date" name="date" placeholder="Date of Upload"   />
                <input type="submit" name="submit" value="Upload">
                <?php break;}?>

                <?php

                $sql="Select * from student Where student_id='$_SESSION[id]'";
                $query=mysqli_query($db,$sql);
                if ($query===false) {
                    die("Database query failed" . mysqli_error($db));
                }
                while ($rows=mysqli_fetch_array($query)){
                $id=$rows[0];
                $firstname=$rows[1];
                $lastname=$rows[2];
                $address=$rows[3];
                $postcode=$rows[4];
                $username=$rows[6];?>
                <section id="main">
                    <div class="container">
                        <article id="main-col">
                            <h1 class="page-title">Students Profile  page</h1>
                            <ul id="services">
                                <li>
                                    <h3>School Research app</h3>
        <p>please enter the necessary information that the form will prompt you to do.</p>
        <p></p>
        </li>

        </ul>

        </article>
        <aside id="sidebar">
            <div class="dark">
                <h2>Update profile</h2>
                <?php
                print"<form action=upprof1.php method=post>
  Student id<br><input type=text name=id value=$rows[0] readonly /><br />
First name<br><input type=text name=fname value=$rows[1] /><br />
Last name<br><input type=text name=lname value=$rows[2] /><br />
Address<br><input type=text name=addr value=$rows[3] /><br />
Postcode<br><input type=text name=pstcde value=$rows[4] /><br />
Username<br><input type=text name=user value=$rows[6] /><br />
<input type=submit value=Submit name=submit /><br />
";
                }
                ?>
                <br>
                </fieldset></div>
        </aside>

    </div>



    </form>
    </div>
    </section>
<?php include_once("foot.php");?>