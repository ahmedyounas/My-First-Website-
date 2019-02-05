<?php
session_start();
include ('sql_connection.php');
$error_msg = '';
if(isset($_POST['login'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['user_email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:admin_panel.php?logged_in=You have successfully logged in!');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Afordable and profectional web design">



    <meta name="keywords" content="web design, afforadable web design,profectional web design">
    <meta name="author" content="M.Asjad Farooq,Ahmed Younas,Anam Shafiq,Iqra Kafayat">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Acme Web Design | Admin login </title>
    <link rel="stylesheet" href="..\css\style.css">

</head>

<body>
<header>
    <div class="container">
        <div id="branding">
            <h1><span class ="highlight">Acme</span> Web Design</h1>
        </div>
        <nav>
            <ul>
                <li><a href="..\index.php">Home</a></li>
                <li><a href="..\about.php">About</a></li>
                <li><a href="..\servises.php">Services</a></li>
                <li><a href="..\register.php">Register</a></li>
                <li><a href="..\Login.php">Login</a></li>
                <li class="current"><a href="admin_login.php">Admin Login</a></li>
                <li><a href="..\contact.php">Contact Us</a></li>
                <li><a href="..\Q&A.php">Q&A</a></li>

            </ul>
        </nav>
    </div>
</header>


<section id="newsletter">
    <div class="container">
               <aside id="sidebar2">
                   <div class ="dark">
                       <div class="text-center">
            <form class="login_form" action="admin_login.php" method="post">
                <h2 class="text-danger"><?php echo @$_GET['not_admin']?></h2>
                <h2 class="text-primary"><?php echo @$_GET['logged_out']?></h2>
                <h2 class="m-3">Admin Login <br></h2>
                <div><?php echo $error_msg;?></div>
                <input type="text" id="user_email" name="user_email"
                       value="<?php echo @$_COOKIE['user_email']?>" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="user_pass" name="user_pass"
                       value="<?php echo @$_COOKIE['user_pass']?>" class="form-control" placeholder="Password" required><br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <button class="button_3" type="submit" name="login" value="Sign in">Sign in</button>
            </form>
            <script src="../js/jquery-3.3.1.js"></script>
            <script src="../js/bootstrap.bundle.js"></script>
                       </div>
                   </div>
               </aside>

        </div>



</section>

<footer>
    <p>Copy Rights 2019-2020 </p>
</footer>

</body>

</html>

