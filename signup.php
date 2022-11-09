<?php
    define("TITLE", "Sign Up | G-TWENTY");
    include('includes/header.php');
?>

            <!-- Signup title -->
            <div class="login-title text-center">
                <h1 class="title">Sign Up</h1>
                <p>Please fill in this sign-up form to create an account</p>
            </div>

            <hr>

            <!-- Sign-up form to sign up an account -->
            <div class="login-form">
                <form action="#" id="signup-form">
                    <div class="container">
                        <!-- Username Field -->
                        <label for="username"><b>Username:</b></label>
                        <input type="text" id="username" name="username"><br><br>

                    </div>
                </form>
            </div>

<?php
    include('includes/footer.php');
?>