<?php require_once("connection.php");?>
<?php include_once("heading.php");?>
    <li> <div class="dropdown">
            <button class="dropbtn">Students</button>
            <div
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
<h1>Welcome admin </h1>
<div class="chip">


</div>
</div>

</section>
<section id="newsletter">
    <div class="container">
        <h1 style="margin-right: 30px; float:left;"><span style="color:teal";> Dashboard</h1>
        <img src=img_avatar.png alt=Person width=96 height=96 title=Admin />
        <button class="dropbtn"style="float:right; margin-right:10px;"><a href="rev.php" >Review </a></button>

</section>
<section id="main">
    <div class="container">
        <article id="main-col">
            <h1 class="page-title">Add Topic</h1>
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
                <h2>Topic creation</h2>
                <form action="topic1.php" method="post">
                    <?php if (isset($_SESSION['msg'])){
                        echo $_SESSION['msg'] . "<br />";
                    }?>
                    <input type="text" name="topicname" placeholder="Topic name" /><br>
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