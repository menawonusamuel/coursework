<?php
session_start();
require_once("connection.php");?>
<?php include_once("heading.php");?>
<li> <div class="dropdown">
        <button class="dropbtn">Research</button>
        <div class="dropdown-content">
            <a href="teamlead.php?stp=1">View research papers</a>
            <a href="teamlead.php?stp=2">Upload research papers</a>
        </div>
    </div></li>
<li><div class="dropdown">
        <button class="dropbtn">Review</button>
        <div class="dropdown-content">
            <a href="teamlead.php?stp=3">Make Review</a>
            <a href="teamlead.php?stp=4">View Reviews</a>
        </div>
    </div></li>

<a href="teamedit.php">Edit profile</a>
<li><a href="logout.php">Log out</a></li>
</ul>
</nav>
</div>

</header>
<section id="newsletter">
    <div class="container">


        <h1 style="margin-right:30px;">Group<?php echo" " . $_SESSION['tgrp'];?></h1>
        <div class="dropdown">
            <button class="dropbtn"style="float:right; margin-right:10px;"><a href="teamstg.php" >Members </a></button>

        </div>
        <h1 style="float:right;">Welcome<?php echo" " . $_SESSION['tuser'];?> <h1>
                <?php

                $sqli="Select * from student Where student_id='$_SESSION[tid]'";
                $quer=mysqli_query($db,$sqli);
                if($quer===false){
                    die(mysqli_error($db));
                }
                if(mysqli_num_rows($quer)==0){
                    print("<img src=img_avatar.png alt=Person width=96 height=96 title='$_SESSION[tuser]'");
                }else{
                    $row=mysqli_fetch_array($quer);
                    print"<div class=chi>
        <a href=profile/{$row['Photo']}><img src=profile/{$row['Photo']} alt=Person width=96 height=96 title={$_SESSION['tuser']} ></a>
    </div>";}
                ?>

    </div>

</section>

<div class="heading"><h1>Welcome to the Student's Paper Sharing application</h1>

    <?php if(!isset($_GET['stp'])) {
        print"
<section id=showcase>
      <div class=container>
        
      </div>
    
  </section>" ;} ?>

    <?php
    if(!isset($_GET['stp'])){
        $_GET['stp']= "";
    }?>
    <?php
    switch($_GET['stp']){
    case 2 :?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Services</h1>
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
                    <h2>Upload paper</h2>
                    <form action="teamled.php" enctype="multipart/form-data" method="post">

                        <input type="text" name="pn" placeholder="Paper name" /><br />
                        <?php

                        $sq="Select * from topic Where topic_id={$_SESSION['ttopic']}";
                        $quer=mysqli_query($db,$sq);
                        if ($quer===false) {
                            die("Database query failed" . mysqli_error($db));
                        }?>
                        <h3>Group topic:</h3>

                        <?php
                        print"<select name=topid>";
                        while ($row = mysqli_fetch_array($quer)){
                            echo "<option  value=" . $row[0] .  ">" .  $row[1]." </option>";
                        }
                        ?>
                        </select>
                        <br />
                        <?php

                        $sq="Select * from student Where group_id={$_SESSION['tgrp']}";
                        $quer=mysqli_query($db,$sq);
                        if (!$quer) {
                            die("Database query failed". mysqli_error($db));
                        }?>
                        <h3>Group members:</h3>

                        <?php
                        print"<select name=receive>";
                        while ($row = mysqli_fetch_array($quer)){
                            echo "<option  value=" . $row[6] .  ">" .  $row[1]." " . $row[2] ." </option><br>";
                        }
                        ?>
                        <option value="Group">Group</option>
                        </select>

                        <input type="hidden" name="size" value="7000000" / ><br />
                        <input type="file" name="fupload"><br />
                        <input type="text" name="date" value=<?php   echo date("Y/m/d");?> readonly="true" />
                        <input type="hidden" name="insert" value=<?php echo $_SESSION['tuser']; ?> /><br />
                        <input type="hidden" name="cat" value=<?php echo $_SESSION['tcat']; ?> /><br />
                        <textarea name="review" cols= 35 rows= 4 placeholder="Paper description "></textarea>
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
<article id="main-col"/>
<h1 class="page-title">List of Research papers</h1>
<ul id="services"/>
<li></li>
<?php 	print"<p>";


$sql="Select * from papers where topic_id='$_SESSION[ttopic]'";
$query=mysqli_query($db, $sql);
if($query===false){
    die(mysqli_error($db));
}
if(mysqli_num_rows($query)==0){
    echo" No record found";
    echo"<p><a href=teamlead.php>Go back</a></p>";
}
else{
    print"<table style=width:100%;>
  <tr><b><Th>S/N</Th><Th>Paper name</Th><Th>Date of upload</Th><Th>File name</Th><Th>Topic number</Th>";
    while ($rows=mysqli_fetch_array($query)) {
        # code...

        print "<tr><td>" . $rows[0]. "</td>" . "<td>" . $rows[1] . "</td>" . "<td>" .$rows[4] ."</td>" ."<td><a href=download.php?file=" .$rows[3].">". $rows[3]  ."</a></td><td>";
        $sql="Select * from topic Where(topic_id='$_SESSION[ttopic]')";
        $que=mysqli_query($db,$sql);
        if (!$que) {
            die("Database query failed" . mysqli_error($db));
        }
        while ($row = mysqli_fetch_array($que)){
            print $row[1]."</td>";

        }
        "</tr>";

    }
}
print"</p>";
?>
<?php break;?>
<?php case 3 :?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">Welcome</h1>
                <ul id="services">
                    <li>
                        <h3>School app sharing</h3>
                        <p>please enter the necessary information that the form will prompt you to do.</p>
                        <p></p>
                    </li>

                </ul>

            </article>
            <aside id="sidebar">
                <div class="dark">
                    <h2>Make review</h2>
                    <form action="teamrsrch.php" enctype="multipart/form-data" method="post">

                        <?php

                        $sqlii="Select * from papers Where topic_id='$_SESSION[ttopic]'";
                        $que=mysqli_query($db,$sqlii);
                        if (!$que) {
                            die("Database query failed");
                        }?>
                        <h3>Paper name:</h3>

                        <?php
                        print"<select name=paperid>";
                        while ($r = mysqli_fetch_array($que)){
                            echo "<option  value=" . $r[0] .  ">" .  $r[1]." </option>";

                        }
                        ?>
                        </select>
                        <br />
                        <h3>Your review:</h3>
                        <textarea name="review" cols= 35 rows= 4 placeholder="Paper description "></textarea>
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
<?php
case 4 :?>
    <section id="main">
        <div class="container">
            <article id="main-col">
                <h1 class="page-title">View Reviews</h1>


                <?php
                print"<p>";


                print"<table  style=width:100%;border: 1px solid>";
                print" <tr><b><Th>S/N</Th><Th>Research Papers</Th><Th>Date of upload</Th><Th>Depositor</Th><Th>Category</Th><Th>Paper description</Th></tr>";

                # code...
                $sql="Select * from papers 
  Where topic_id='$_SESSION[ttopic]'";
                $que=mysqli_query($db,$sql);
                if (!$que) {
                    die("Database query failed" . mysqli_error($db));
                }
                while ($row = mysqli_fetch_array($que)){
                    print "<tr><td>". $row[0]."</td><td><a href=teamrev.php?view=" . $row['file'] . ">" .$row['file']."</a></td><td>".$row['date_of_upload'] ."</td><td>". $row['depositor']."</td><td>".$row['category']."</td><td>".$row['review']."</td>";

                }
                print"</p>";
                print"Click to view research paper to see  reviews";
                ?>
                </table>
                </ul>

            </article>
        </div>
    </section>

    <?php break; }?>
</div>
</div></div>
<div class="space"></div>
</div>

</body>
</html>