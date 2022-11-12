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
                        <label for="username"><b>Username </b></label>
                        <input type="text" id="username" name="username"><br><br>

                        <!-- Password Field -->
                        <label for="password"><b>Password </b></label>
                        <input type="password" id="password" name="password" required><br><br>

                        <!-- First Name Field -->
                        <label for="firstname"><b>First Name </b></label>
                        <input type="text" id="firstname" name="firstname"><br><br>

                        <!-- Last Name Field -->
                        <label for="lastname"><b>Last Name </b></label>
                        <input type="text" id="lastname" name="lastname"><br><br>
                        
                        <!-- Phone Number Field -->
                        <label for="phone"><b>Phone Number </b></label>
                        <input type="text" id="phone" name="phone"><br><br>

                        <!-- Email Field -->
                        <label for="email"><b>Email Address </b></label>
                        <input type="text" id="email" name="email" required><br><br>

                        <!-- Address Line Field -->
                        <label for="address"><b>Address Line </b></label>
                        <input type="text" id="address" name="address"><br><br>

                        <!-- Postcode Field -->
                        <label for="postcode"><b>Postcode </b></label>
                        <input type="text" id="postcode" name="postcode"><br><br>

                        <p>By creating an account you agree to G-TWENTY's Terms and Conditions. Please see our <a href="privacypolicy.php">Privacy Policy</a>.</p>

                        <div class="signupBtnDiv clearfix">
                            <!-- Sign Up button -->
                            <button type="submit" class="signupBtn" value="Sign Up">
                                <span class="inner">
                                    <span class="label">
                                        <span class="label-text">Sign Up</span>
                                    </span>
                                </span>
                            </button>
                        </div>

                        <!-- Link to the Login Page -->
                        <div class="loginLink clearfix">
                            <p>Already have an account? Login <a href="login.php">here</a></p>
                        </div>
                    </div>
                </form>
            </div>

<?php
    include('includes/footer.php');
?>