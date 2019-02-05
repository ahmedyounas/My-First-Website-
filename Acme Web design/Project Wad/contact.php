<?php
$title = "Acme Web Design | Contact Us ";
$content = '
<section id="newsletter">
    <div class="container">
        <h1>Subscribe To Our Newsletter</h1>
        <form>
            <input type="email" placeholder="Enter Email... ">
            <button type="submit" class="button_1">Subscribe</button>
        </form>
    </div>
</section>

<!-- ASIDE FOR THE SIDE DATA -->
<aside id="sidebar">
    <div class="dark">  <!--- CLASS DARK CALLED FROM GLOBEL CSS FILE -->
        <h3>Give us a Feedback!</h3>
        <form class="quote">
            <div>
                <label>Name</label><br>
                <input type="text" placeholder="Name">
            </div>
            <div>
                <label>Email</label><br>
                <i class="fas fa-user-circle mt-1"></i> <input type="text" placeholder="Email adress">
            </div>
            <div>
                <label>Message</label><br>
                <i class="fas fa-comment"></i> <input type="text" placeholder="Enter Message">
            </div>
            <button class="button_1" type="submit">Send</button>
        </form>
    </div>
</aside>





<aside id="sidebarcontact">
    <div class="dark">  <!--- CLASS DARK CALLED FROM GLOBEL CSS FILE -->

    <header>
        <p><b>Ahmed Younas</b><br></p>
        <p>     Email:ahmedyounas@ucp.edu.pk<br></p>
        <p>  <i class="fas fa-phone"></i>    Contact number:03211433969<br></p>
        <p>     Field:BSCS<br></p>
      </header>

        <header>
        <p><b>Asjad Farooq</b><br></p>
        <p>     Email:asjadfarooq1@ucp.edu.pk<br></p>
        <p> <i class="fas fa-phone"></i>     Contact number:03374848738<br></p>
        <p>     Field:BSCS<br></p>
        </header>

        <header>
        <p><b>Iqra Kafayat</b><br></p>
        <p>     Email:iqra234@gmail.com<br></p>
        <p>  <i class="fas fa-phone"></i>    Contact number:03334844738<br></p>
        <p>     Field:BSCS<br></p>
        </header>

        <header>
        <p><b>Anam Shafiq</b><br></p>
        <p>     Email:anam4@gmail.com<br></p>
        <p>  <i class="fas fa-phone"></i>    Contact number:03215687459<br></p>
        <p>     Field:BSCS<br></p>

        </header>
    </div>
</aside>
<aside id="sidebarmap">
    <div class ="dark">
        <div class="container">
            <p><b>Map:</b></p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54460.96135080206!2d74.23321199105017!3d31.44689493668008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919017432b1835b%3A0xe396992a5b05891c!2sUniversity+of+Central+Punjab!5e0!3m2!1sen!2s!4v1542539330813" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</aside>

';
include 'template.php';
 ?>
