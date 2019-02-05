<?php
session_start();
require_once "sql_connection.php";
if(!isset($_SESSION['user_email'])){
    header('location: admin_login.php?not_admin=You are not Admin!');
}
?>
<?php
$day=60*60*24*10+time();
setcookie('admin_visit',date('d/m/y'),$day);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Afordable and profectional web design">
    <meta name="keywords" content="web design, afforadable web design,profectional web design">
    <meta name="author" content="M.Asjad Farooq,Ahmed Younas,Anam Shafiq,Iqra Kafayat,wahabjamshaid,M.khyzernaeem">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Acme Web Design | Admin Panel </title>
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
                <li class="current"><a href="admin_panel.php">Admin Panel</a></li>
                <li><a href="..\contact.php">Contact Us</a></li>
                <li><a href="..\Q&A.php">Q&A</a></li>


            </ul>
        </nav>
    </div>
</header>

<div class="wrapper">
    <nav id="sidebar">

        <div class="sidebar-header">

            <h3> <img src="data:image/png;base64,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"> <br>Admin Panel</h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a href="admin_login.php?login">
                    <i class="fas fa-plus"></i> login
                </a>
            </li>
            <li>
                <a href="admin_panel.php?insert_videos">
                    <i class="fas fa-plus"></i> Insert Videos
                </a>
            </li>
            <li>
            <li>
                <a href="admin_panel.php?view_videos">
                    <i class="fas fa-plus"></i> View Videos
                </a>
            </li>
                <a href="admin_logout.php">
                    <i class="fa fa-sign-out-alt"></i> <br>Admin logout</a>
            </li>
        </ul>
    </nav>
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

        </nav>
        <div class="container">
            <div class="dark">
            <h2 class="text-center text-primary"><?php echo @$_GET['logged_in']?> </h2>
                <?php

                if(isset($_GET['insert_videos'])){
                    include ('insert_videos.php');
                }
                else if(isset($_GET['view_videos'])){
                    include ('view_videos.php');
                }
                else if(isset($_GET['update_videos'])){
                    include ('Update_video.php');
                }
                else if(isset($_GET['delete_view'])){
                    include ('delete_view.php');
                }

            ?>
        </div>
        </div>
    </div>
</div>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>

<footer>
    <p>Copy Rights 2019-2020 </p>
</footer>
</body>

</html>
<?php

if(isset($_COOKIE['admin_visit']))
{
    $last_visit=$_COOKIE['admin_visit'];
    echo"<center><font color=>Dear admin you last visit this panel on :<b>$last_visit";
}

?>
