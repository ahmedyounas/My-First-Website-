<?php
$title = "Acme Web Design | Forget-Password ";
$content = '

<section id="main">
    <div class="container">


        <aside id="sidebar">
            <div class="dark">

                <p>Email:</p>
                <i class="fas fa-user-circle mt-1"></i> <input type="email" placeholder="Enter Email... ">

                <p>Password:</p>
                <i class="fas fa-lock mt-1"></i> <input type="Password" placeholder="Enter Password... " required pattern="^[a-zA-Z0-9]{8}$" >
                <!--regex exaclty 8 characters-->
               

                <p>Confirm Password:</p>
                <i class="fas fa-lock mt-1"></i> <input type="Password" placeholder="Enter Password Again ... " required pattern="^[a-zA-Z0-9]{8}$">

                <p><br></p>

                <button type="submit" class="button_4">Forget-Password</button>

                </form>

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
