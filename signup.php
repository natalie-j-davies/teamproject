<?php
    define("TITLE", "Sign Up | G-TWENTY");
    include('includes/header.php');
?>

            <!-- Sign-up title -->
            <div class="login-title text-center">
                <h1 class="title">Sign Up</h1>
                <p>Please fill in this sign-up form to create an account</p>
            </div>

            <hr>

            <!-- Sign-up form to sign up an account -->
            <div class="login-form">
                <form action="signup.php" id="signup-form">
                    <div class="container">
                        <!-- Username Field -->
                        <label for="username"><b>Username: </b></label>
                        <input type="text" id="username" name="username"><br><br>

                        <!-- Password Field -->
                        <label for="password"><b>Password: </b></label>
                        <input type="password" id="password" name="password"><br><br>

                        <!-- First Name Field -->
                        <label for="firstname"><b>First Name: </b></label>
                        <input type="text" id="firstname" name="firstname"><br><br>

                        <!-- Last Name Field -->
                        <label for="lastname"><b>Last Name: </b></label>
                        <input type="text" id="lastname" name="lastname"><br><br>
                    </div>
                </form>
            </div>

<?php
    include('includes/footer.php');
?>