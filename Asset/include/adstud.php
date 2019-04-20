<?php
session_start();
require_once("connection.php");?>
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
    <h1>Welcome admin </h1>
    <div class="chip">


    </div>
    </div>

    </section>
    <section id="newsletter">
        <div class="container">
            <h1 style="margin-right: 30px; float:left;"><span style="color:teal";> Dashboard</h1>
            <img src=img_avatar.png alt=Person width=96 height=96 title=Admin />



    </section>
<?php if(!isset($_GET['stud'])) {
    print"
<section id=showcase>
      <div class=container>
        
      </div>
    
  </section>" ;} ?>

<?php if(!isset($_GET['stud'])){
    $_GET['stud']= "";
}?>
    <p><?php
switch($_GET['stud']){
    case 1 :
        header("location:reg.php");
        break;
    case 2 :
        # code...?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">View Students</h1>
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
                <h2>Search for Students</h2>
                <form action=viewstud.php method=post>
                    <input type= "text" name="fn" placeholder="Firstname" /><br><br>
                    <input type="text" name="ln" placeholder= "Lastname"  /><br>
                    <br>
                    <button type="submit" class="button_2" name="submit">Search</button>
                </form></p>
                <p >Search for Student by Matric Number
                <form action=viewstud1.php method=post>
                    <input type= "text" name="id" placeholder="Matric number" /><br>
                    <br>
                    <button type="submit" class="button_2" name="sub">Search</button>

                    <br>
                    </fieldset></form></div>
        </aside>

        </div>



        </form>
        </div>
        </section>
        <?php break;
    case 3 :?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">Delete Students</h1>
                    <ul id="services">
                        <li>
                            <h3>School Research app</h3>
                            <p>please enter the necessary information that the form will prompt you to do.</p>
                            <strong><p>Please enter the student's firstname and students lastname to  be deleted </p></strong>
                                <p></p>
                        </li>

                    </ul>

                </article>
                <aside id="sidebar">
                    <div class="dark">
                        <h2>Delete Student</h2>
                        <form action=delstud.php method=post>
                            <input type= "text" name="fn" placeholder="Firstname" /><br><br>
                            <input type="text" name="ln" placeholder= "Lastname"  /><br><br>
                            <br>
                            <button type="submit" class="button_2" name="submit">Search</button>

                            <br>
                            </fieldset></form></div>
                </aside>

            </div>



            </form>
            </div>
        </section>
        <?php break;
    case 4 :?>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 class="page-title">Delete Students</h1>
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
                        <h2>Update Student</h2>
                        <form action=upstud.php method=post>
                            <input type= "text" name="id" placeholder="Matric number" />
                            <br>
                            <button type="submit" class="button_2" name="submit">Search</button>

                            <br>
                            </fieldset></form></div>
                </aside>

            </div>



            </form>
            </div>
        </section>
    <?php
}
?>


<?php include_once("foot.php");?>