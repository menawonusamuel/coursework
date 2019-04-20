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
<li><a href="logout.php">Log out </a> </li>

</div>
</ul>
</nav>
</div>
</header>
<section id="showcase">
    <div class="container">

        <h1>Welcome admin </h1>
        <div class="chip">


        </div>
    </div>

</section>
<section id="newsletter">
    <div class="container">
        <h1 style="margin-right: 30px; float:left;"><span style="color:teal";> Dashboard</h1>

        <?php

        $sq="SELECT COUNT(student_id) FROM `student` WHERE actor='Team leader'";
        $que= mysqli_query($db, $sq);
        if($que==false){
            die(mysqli_error($db));
        }
        if(mysqli_num_rows($que)!=0){

            $row=mysqli_fetch_assoc($que);
            echo " <h1 style=margin-right: 30px;> " . $row['COUNT(student_id)']  .  " leaders</h1>";
        }
        $sql="SELECT COUNT(group_id) FROM `grp_tbl`";
        $query= mysqli_query($db, $sql);

        if($query==false){
            die(mysqli_error($db));
        }
        if(mysqli_num_rows($query)!=0){

            $row=mysqli_fetch_assoc($query);
            echo " <h1 style=margin-right: 30px;> |" . $row['COUNT(group_id)']  .  " groups</h1>";
        }
        $sqliii="SELECT COUNT(rpid) FROM `papers` ";
        $qu= mysqli_query($db, $sqliii);
        if($qu==false){
            die(mysqli_error($db));
        }
        if(mysqli_num_rows($qu)!=0){

            $row=mysqli_fetch_assoc($qu);
            echo " <h1 style=margin-right: 30px;> |" . $row['COUNT(rpid)']  .  " research papers</h1>";
        }
        $sqi="SELECT COUNT(topic_id) FROM `topic` ";
        $q= mysqli_query($db, $sqi);
        if($q==false){
            die(mysqli_error($db));
        }
        if(mysqli_num_rows($q)!=0){

            $row=mysqli_fetch_assoc($q);
            echo " <h1 style=margin-right: 30px;> |" . $row['COUNT(topic_id)']  .  " topics</h1>";
        }?>
        <?php

        $sqli="SELECT COUNT(student_id) FROM `student` WHERE actor!='Team leader'";
        $quer= mysqli_query($db, $sqli);
        if($quer==false){
            die(mysqli_error($db));
        }
        if(mysqli_num_rows($quer)!=0){

            $row=mysqli_fetch_assoc($quer);
            echo " <h1 style=margin-right: 30px;> |" . $row['COUNT(student_id)']  .  " non leaders</h1>";
        }
        $sqlie="SELECT COUNT(student_id) FROM `student`";
        $quere= mysqli_query($db, $sqlie);
        if($quere==false){
            die(mysqli_error($db));
        }
        if(mysqli_num_rows($quere)!=0){

            $row=mysqli_fetch_assoc($quere);
            echo " <h1 style=margin-right: 30px;> |" . $row['COUNT(student_id)']  .  " students</h1>";
        }



        ?>
        <

</section>


<section id="main">
    <div class="container">
        <article id="main-col">

            <h1 class="page-title">Welcome to School app research sharing</h1>



            <p>Programs offered at the university attracts professional recognition through their emphasis and close working links with
                industries and other professions. Our programs emphasize the importance of the solid of broad skills and knowledge...</p>

            <h1 class="page-title">RGU</h1>
            <p>RGU a great learning Institute..</p>









        </article>


        <aside id="sidebar">
            <div class="dark">
                <h3>Progressive Programs</h3>
                <p>We are committed to delivering to our student, Proffessional and Academics Programs dedicated to Academics Excellence as well as promoting inculcating ethicals,
                    spiritual growth and dignity of Service...</p>
            </div>
            <div class="dark">
                <h3>Quality Education</h3>
                <p>Our University offers quality Education through innovative programs, approachable professors who demonstrates hands-on learning techniques and a friendly
                    environment...</p>
            </div>
        </aside>

    </div>
</section>


<footer>
    <div id="contact">
        <h2>20 Ashwood park</h2>
        Bridge of Don<br/>
        Aberdeen, UK.
    </div>
    <p>Samir Love, Copyright &copy; 2019</p>
</footer>

</body>
</html>