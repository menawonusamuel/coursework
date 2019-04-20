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
                        <h3>PLESE FILL IN THE DETAILS</h3>
                        <p>please enter the necessary information that the form will prompt you to do.</p>
                        <p></p>
                    </li>

                </ul>

            </article>
            <aside id="sidebar">
                <div class="dark">
                    <h2>Login!</h2>
                    <form  class="quote" action="login.php" method="post" autocomplete="on" autofocus>
                        <fieldset class="john">
                            <legend></legend>
                            <label for= "email">Email or Username</label><br><input type="text"  spellcheck="false" name="user" placeholder="Email or Username" /><br>

                            <label for= "email">Password</label><br><input type="password"  spellcheck="false" name="pwd" placeholder="Password" /><br>
                            <select name="actors">
                                <option value="1">Administrator</option>
                                <option value="2">Team leader</option>
                                <option value="3">Student</option>
                            </select>
                            <br><br />
                            <button type="submit" class="button_2" name="submit">SUBMIT</button>
                            <br>
                        </fieldset>
                    </form>
            </aside>

        </div>


        <!-- Trigger/Open The Modal -->

        <div style="float:right;" class="button_2" id="myBtn"> ForgetPassword</div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times</span>
                    <h2>Forget Password</h2>
                </div>
                <div class="modal-body">
                    <form  action="forget.php" method="post" autocomplete="on" autofocus><br>
                        <br>
                        <input type="text"  spellcheck="false" name="user" placeholder="Email or Username" /><br><br>
                        <button type="submit" class="button_2" name="submail">SUBMIT</button><br><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <h3>You can retrieve your password here</h3>
                </div>
            </div>

        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('myModal');

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>




        </form>
        </div>
    </section>

<?php include_once("foot.php");?>