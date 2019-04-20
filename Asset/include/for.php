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
                    <h2>Login!</h2>
                    <form  class="quote" action="for1.php" method="post" autocomplete="on" autofocus>
                        <fieldset class="john">
                            <legend></legend>
                            <label for= "firstname">Firstname</label><br><input type="text"  spellcheck="false" name="fname" placeholder="Email or Username" /><br>

                            <label for= "lastname">Lastname</label><br><input type="text"  spellcheck="false" name="lname" placeholder="Password" /><br>
                            <label for= "group">Group</label><br><input type="number"  spellcheck="false" name="grp" placeholder="Group number" /><br>
                            <select name="actor">
                                <option value="1">Administrator</option>
                                <option value="2">Team leader</option>
                                <option value="3">Student</option>
                            </select>
                            <br><br />
                            <button type="submit" class="button_2" name="submit" id="myBtn">SUBMIT</button>
                            <br>
                        </fieldset>
                    </form>
            </aside>

        </div>
    </section>

<?php include_once("foot.php");?>