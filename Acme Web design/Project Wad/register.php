<?php
$title = "Acme Web Design | Register ";
$content = '

    <section id="main">
<div class="container">
        <aside id="sidebar">
<div class="dark">
            <form>
                <p>Enter Email </p> <i class="fas fa-user-circle mt-1"></i> <input type="email" placeholder="Enter Email... "><br>
                <p>Enter First Name </p><input type="fname" placeholder="Enter First name"><br>
                <p>Enter Last Name </p><input type="lname" placeholder="Enter Last name"><br>
                <p>Select your Gender </p> <input type="checkbox" name="Gender" value="Male"> Male<br>
                <input type="checkbox" name="Gender" value="Female" checked> Female<br>
                <input type="checkbox" name="gender" value="other"> Other<br>
                <p>Birthday: </p><i class="fas fa-birthday-cake"></i> <input type="date" name="birthday">
                <p>Enter Password </p><i class="fas fa-lock mt-1"></i> <input type="password" placeholder="Enter Password"requried pattern="^[a-zA-Z0-9]{8}$"><br>
                <p>Enter Confirm Password </p><i class="fas fa-lock mt-1"></i> <input type="password" placeholder="Enter Password"requried pattern="^[a-zA-Z0-9]{8}$">
                <p><br></p>
                <button type="register" class="button_2">Register</button>
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
