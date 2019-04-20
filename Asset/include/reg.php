<?php require_once("connection.php");?>
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
    <li><a href="logout.php">Logout</a></li>
    </ul>
    </nav>
    </div>
    </header>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Register Students</h1>
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
                    <h2>Register Student</h2>
                    <form action="reg2.php" method="post" enctype="multipart/form-data" autofocus>

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
                            die("Database query failed");
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
                            <option  value="Student" selected="">Student</option>
                        </select>
                        <h3>Upload profille pic:</h3>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" / ><br />
                        <input type="file" name="fupload"><br />
                        <br>
                        <button type="submit" class="button_2" name="submit">Submit</button>

                        <br>
                        </fieldset></form>
            </aside>

        </div>

    </section>

        </form>
        </div>
    </section>
<?php include_once("foot.php");?>