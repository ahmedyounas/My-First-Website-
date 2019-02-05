<?php
$title = "Acme Web Design | Login ";
$content = '

<section id="main">
    <div class="container">


    <aside id="sidebar">
        <div class="dark">

                <p>Email:</p>

            <i class="fas fa-user-circle mt-1"></i> <input type="text" placeholder="Enter Email... ">

                <p>Password:</p>
              <i class="fas fa-lock mt-1"></i>  <input type="Password" placeholder="Enter Password... " required pattern="^[a-zA-Z0-9]{8}$">

            <header>
            <nav>
                <ul>
                    <li><a href="Forget-password.php">Forget-Password</a></li>
                    <button type="submit" class="button_3">Login</button>
                </ul>
            </nav>

                </header>




        </div>
    </aside>

    </div>

</section>



<footer>
  <p>Copy Rights 2018-2019</p>
</footer>

';
include 'template.php';
 ?>
