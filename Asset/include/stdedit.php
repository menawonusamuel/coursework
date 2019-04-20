<?php
session_start();
require_once("connection.php");?>
<?php include_once("heading.php");?>
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
<section id="newsletter">
    <div class="container">

        <h1 style="margin-right:30px;">Group<?php echo" " . $_SESSION['grp'];?></h1>
        <div class="dropdown">
            <button class="dropbtn"style="float:right; margin-right:10px;"><a href="viewstg.php" >Members </a></button>

        </div>
        <h1 style="float:right;">Welcome<?php echo" " . $_SESSION['user'];?> <h1>
                <?php

                $sqli="Select * from student Where student_id='$_SESSION[id]'";
                $quer=mysqli_query($db,$sqli);
                if($quer===false){
                    die(mysqli_error($db));
                }
                if(mysqli_num_rows($quer)==0){
                    print("<img src=img_avatar.png alt=Person width=96 height=96 title='$_SESSION[user]'");
                }else{
                    $row=mysqli_fetch_array($quer);
                    print"<div class=chi>
        <a href=profile/{$row['Photo']}><img src=profile/{$row['Photo']} alt=Person width=96 height=96 title={$_SESSION['user']} ></a>
    </div>";}
                ?>
    </div>
    </div>

</section>

<div class="heading"><h1>Welcome to the Student's Paper Sharing application</h1>
    <?php if(!isset($_GET['edit'])) {
        print"
<section id=showcase>
      <div class=container>
        
      </div>
    
  </section>" ;} ?>
    <?php
    if(!isset($_GET['edit'])){
        $_GET['edit']= "";
    }?>
    <?php
    switch($_GET['edit']){
    case 2 :?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Services</h1>
                <ul id="services">
                    <li>
                        <h3>School Sharing App</h3>
                        <p>please enter the necessary information that the form will prompt you to do.</p>
                        <p></p>
                    </li>
                    <li>
                        <h3></h3>
                        <p></p>
                        <p></p>
                    </li>
                    <li>
                        <h3></h3>
                        <p></p>
                        <p></p>
                    </li>
                </ul>

            </article>
            <aside id="sidebar">
                <div class="dark">
                    <h2>Change password</h2>
                    <form action="studedit.php" enctype="multipart/form-data" method="post">
                        <input type="text" name="olpwd" placeholder="Old password" /><br /><br>
                        <input type="text" name="nwpwd" placeholder="New password" /><br /><br>
                        <br>
                        <button type="submit" class="button_2" name="submit">SUBMIT</button>

                        <br>
                        </fieldset></form>
            </aside>

        </div>

    </section>

        </form>
</div>
    </section>

<?php include_once("foot.php");?>
<?php break;?>

<?php case 1 : ;?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Services</h1>
                <ul id="services">
                    <li>
                        <h3>School Sharing App</h3>
                        <p>please enter the necessary information that the form will prompt you to do.</p>
                        <p></p>
                    </li>
                    <li>
                        <h3></h3>
                        <p></p>
                        <p></p>
                    </li>
                    <li>
                        <h3></h3>
                        <p></p>
                        <p></p>
                    </li>
                </ul>

            </article>
            <aside id="sidebar">
                <div class="dark">
                    <h2>Change email</h2>
                    <form action="emailch.php" enctype="multipart/form-data" method="post">
                        <input type="email" name="olemail" placeholder=" Old email" /><br /><br>
                        <input type="email" name="nwemail" placeholder="New email" /><br /><br>
                        <button type="submit" class="button_2" name="change">SUBMIT</button>

                        <br>
                        </fieldset></form>
            </aside>

        </div>



        </form>
        </div>
    </section>

    <?php include_once("foot.php");?>
    <?php break;   ?>
<?php case 3 : ;?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">View profile</h1>
                <ul id="services">
                    <li>

                        <?php
                        print"<p>";

                        $sql="Select * from student where student_id='$_SESSION[id]'";
                        $query=mysqli_query($db, $sql);
                        if($query===false){
                            die(mysqli_error($db));
                        }print"<table style=width:100%;>
  <tr><b><Th>S/N</Th><Th>First name</Th><Th>Last name</Th><Th>Address</Th><Th>Postcode</Th><Th>Email</Th><Th>Username</Th><Th>Group</Th>";
                        while ($rows=mysqli_fetch_array($query)) {
                            # code...

                            print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[2] ."</td>" ."<td>" .$rows[3]."</td>". "<td>". $rows[4] . "</td>". "<td>". $rows[5] . "</td>". "<td>". $rows[6] . "</td>". "<td>". $rows[9] . "</td>"."</tr>";

                        }
                        print"<a href=upprof.php>Click to edit</a>";
                        print"</p>";
                        ?>     <br>

                </ul>

            </article>
        </div>
    </section>
    <?php break;?>

<?php case 4 : ;?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Welcome</h1>
                <ul id="services">
                    <li>
                        <h3>School Paper App Sharing</h3>
                        <p>please enter the necessary information that the form will prompt you to do.</p>
                        <p></p>
                    </li>
                    <li>
                        <h3></h3>
                        <p></p>
                        <p></p>
                    </li>
                    <li>
                        <h3></h3>
                        <p></p>
                        <p></p>
                    </li>
                </ul>

            </article>
            <aside id="sidebar">
                <div class="dark">
                    <h2>Chnge profile pic</h2>
                    <form action="studprofile.php" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" / ><br /><br>
                        <input type="file" name="fupload"><br /><br>
                        <input type="text" name="date" value=<?php   echo date("Y/m/d");?> readonly="true" />
                        <br>
                        <button type="submit" class="button_2" name="submit">Upload</button>

                        <br>
                        </fieldset></form>
            </aside>

        </div>



        </form>
        </div>
    </section>
    <?php include_once("foot.php");?>
    <?php break;}?>
</div>
</div></div>
<div class="space"></div>
</div>

</body>
</html>