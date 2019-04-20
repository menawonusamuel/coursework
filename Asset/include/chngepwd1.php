<?php include_once("head.php");?>
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
            <h1 class="page-title">Change Password</h1>
            <ul id="services">
                <li>

                    <?php
                    session_start();
                    require_once("connection.php");
                    $pwd=$_POST['pwd'];

                    $sql="Select * from student where email='$_SESSION[forgetmail]' OR username='$_SESSION[foruser]'";
                    $result=mysqli_query($db, $sql);

                    if(!$result){
                        die(mysqli_error($db));
                    }
                    if (mysqli_num_rows($result)!=0) {
                        # code...
                        $pwd=password_hash($pwd, PASSWORD_DEFAULT);

                        $sqli="
 UPDATE student
 SET
 password='$pwd'
 Where email='$_SESSION[forgetmail]' OR username='$_SESSION[foruser]'";
                        $query=mysqli_query($db, $sqli);
                        if($query===false){
                            die(mysqli_error($db));
                        }else{
                            echo "Password changed";
                            print("<p><a href=index.php>Click to go back</a></p>");
                        }
                    }
                    ?>
                    <p></p>
                </li>

            </ul>

        </article>