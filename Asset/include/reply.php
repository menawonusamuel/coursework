<?php
require_once("connection.php");
if(!isset($_GET['rep'])){
    $_GET['rep']="";
}?>
<?php include_once("heading.php");?>
    <li> <div class="dropdown">
            <button class="dropbtn">Students</button>
            <div class="dropdown-content">
                <a href="adstud.php?stud=1">Add Student</a>
                <a href="adstud.php?stud=2">View Students</a>
                <a href="adstud.php?stud=3">Delete Student</a>
                <a href="adstud.php?stud=4">Update Student</a>
            </div>
        </div></li>
    <li> <div class="dropdown">
            <button class="dropbtn">Groups</button>
            <div class="dropdown-content">
                <a href="adgrp.php?grp=1">Add Group</a>
                <a href="adgrp.php?grp=2">View Groups & Team Leaders</a>
                <a href="adgrp.php?grp=3">Delete Group & Tem leader</a>
                <a href="adgrp.php?grp=4">Update Group & Team leader</a>
            </div>
        </div></li>
    <li> <div class="dropdown">
            <button class="dropbtn">Research papers</button>
            <div class="dropdown-content">
                <a href="adres.php?top=1">Add Topic</a>
                <a href="adres.php?top=2">View Topic </a>
                <a href="adres.php?top=3">Delete Topic </a>
                <a href="adres.php?top=4">Update Topic</a>
                <a href="adres.php?res=1">Add research paper</a>
                <a href="adres.php?res=2">View research papers</a>
                <a href="adres.php?res=3">Delete research papers</a>
                <a href="adres.php?res=4">Update research papers</a>
            </div>
        </div></li>
    <li><a href="rev.php">Back</a></li>
    </ul>
    </nav>
    </div>
    </ul>
    </nav>
    </div>

    </header>


    <section id="newsletter">
        <div class="container">
            <h1>Moving the app way</h1>

        </div>

    </section>

    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Services</h1>
                <ul id="services">
                    <li>
                        <h3>PLEASE FILL IN THE DETAILS</h3>
                        <p>please enter the necessary information that the form will prompt you to do.</p>
                        <p></p>
                    </li>

                </ul>

            </article>
            <aside id="sidebar">
                <div class="dark">
                    <h2>Make review</h2>
                    <form action="reply1.php" method="post">

                        <?php
                        $sqlii="Select * from reviews r LEFT JOIN papers p ON (r.rpid=p.rpid) Where review_id='$_GET[rep]' Order by r.review_id DESC";
                        $que=mysqli_query($db,$sqlii);
                        if (!$que) {
                            die("Database query failed");
                        }?>
                        <h3>Paper name:</h3>

                        <?php
                        print "<input type=hidden value='$_GET[rep]' name=review";?>

                        <?php
                        print"<select >";
                        while ($r = mysqli_fetch_array($que)){

                            echo "<option  value=" . $r[8] .  ">" .  $r[9]." </option>";
                        }
                        ?>
                        </select>
                        <br />
                        <h3>Your reply:</h3>
                        <textarea name="reply" cols= 35 rows= 4 placeholder="Paper description "></textarea><br><br>
                        <h3>Date:</h3>
                        <input type="text" name="date" value=<?php   echo date("Y/m/d");?> readonly="true" />
                        <br><br>
                        <button type="submit" class="button_2" name="submit">SUBMIT</button>

                        <br>
                        </fieldset></form>
            </aside>

        </div>


        </form>
        </div>
    </section>

<?php include_once("foot.php");
?>