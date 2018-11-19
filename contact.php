<?php require('head.php');?>
<?php include_once('navigation.php');?>

<h1 class="contactH1">Contact Us</h1>

<div class="contactContainer" id="contact">
    <div class="addressDiv">
        <h3 class="businessH3">Company Name</h3>
        <p class="street">
        3401 Nicholasville Road
        </p>
        <p class="city">
            Lexinton, KY 40503
        </p>
        <p class="phone">
            555-555-5555
        </p>
        <div class="socialMedia">
        <!--enter Font Awesome icons for facebook, linkedin, github-->
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                <li><a href=""><i class="fab fa-instagram fa-2x"></i></a></li>
                <li><a href=""><i class="fab fa-twitter-square fa-2x"></i></a></li>
                <li><a href=""><i class="fab fa-snapchat-square fa-2x"></i></a></li>
                <!--<li><a href=""></a></li>-->
                <!--<li><a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a></li>
                <li><a href="#"><i class="fab fa-github fa-2x"></i></a></li>-->
            </ul>

        </div><!--socialMeida-->
    </div> 

    <div class="contactFormDiv">
    
              
        <form method="post" action="parser.php">
            <input type="text" name="name" placeholder="Enter your name" id="name">
            <input type="email" name="email" placeholder="Enter your email" id="email">
            <textarea type="text" name="message" placeholder="Enter your message" id="message"></textarea>

            <input type="submit" name="submit" value="Submit" id="submit">
        </form>
    </div> <!--contactForm-->

                 
</div><!--contactContainer-->

<?php include_once('footer.php');?>