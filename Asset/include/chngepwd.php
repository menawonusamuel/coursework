<?php include_once("head.php");?>

    <li class="current"><a href="login.php">Login</a></li>
    <li><a href="about.html">About</a></li>
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
                    <h2>Change Password</h2>
                    <form  class="quote" action="chngepwd1.php" method="post" autocomplete="on" autofocus>
                        <fieldset class="john">
                            <legend></legend><br>
                            <label for= "firstname"></label><br><input type="text"  spellcheck="false" name="pwd" placeholder="Enter new Password" /><br>


                            <br><br />
                            <button type="submit" class="button_2" name="submit" >SUBMIT</button>
                            <br>
                        </fieldset>
                    </form>
            </aside>

        </div>
    </section>

<?php include_once("foot.php");?>