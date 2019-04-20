<?php require_once("connection.php");?>
<?php include_once("heading.php");?>
    <li> <div class="dropdown">
            <button class="dropbtn">Students</button>
            <div c
            <section id="main">
                <div class="container">
                    <article id="main-col"class="dropdown-content">
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
    <li><a href="logout.php">Logout</a></li>
    </ul>
    </nav>
    </div>
    </header>
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
                    <h2>Group creation</h2>
                    <form action="grp1.php" method="post">
                        <input type="text" name="gname" placeholder="Group name" /></br />
                        Group description: <textarea name="desc" rows="5" cols="35"></textarea><br /><br />

                        <h3>Team leader:</h3>

                        <?php

                        $sql="Select * from student Where actor='Student'";
                        $query=mysqli_query($db,$sql);
                        if (!$query) {
                            die("Database query failed". mysqli_error($db));
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
                        <br>
                        <button type="submit" class="button_2" name="submit">Submit</button>

                        <br>
                        </fieldset></form>
            </aside>

        </div>



        </form>
        </div>
    </section>
<?php include_once("foot.php");?>