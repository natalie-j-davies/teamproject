<?php
    define("TITLE", "Contact Us | G-TWENTY");
    include('includes/header.php');
?>

        <div class="contact">
                <header>
                <div id="contact-title">
                    <h1><img class="contact-logo"src="images/logo/logo-symbol.png">Contact Us</h1>
                        <p>For all enquiries, please email us or use the contact form and our 
                            expert support team will get back to you as soon as possible.</p>
                    </header>
                </div>
                <div class="contact-flexbox">
                    <div class="social-box">
                        <section>
                            <h4>Socials</h4>
                            <p>
                                Instagram:<br>
                                G-Twenty2022<br>
                                Twitter: <br>
                                G-Twenty2022<br>
                                Facebook: <br>
                                G-Twenty2022
                            </p>
                            <h4>Contact Number</h4>
                            <p>01218906558</p>

                            <h4>Email Address</h4>
                            <p>G-Twenty2022@hotmail.com</p>
                        </section>
                    </div>
                <div class="form-box">
                    <form>
                    <div class="contact-form">
                          <span>Full Name</span>
                          <input type="text" required>
                      </div><br>
          
                      <div class="contact-form">
                          <span>Email Address</span>
                          <input type="E-mail" required>
                      </div><br>
                      <div class="contact-form">
                      <span> Input your Message here....</span>
                          <textarea name="text"> </textarea>
                      </div><br>
                      <div class="contact-form" id="contact-button">
                          <input type="submit" name="submit">
                    </div>
                </div>
                    </form>
            </div>   
            </div> 

        
    


<?php
    include('includes/footer.php');
?>