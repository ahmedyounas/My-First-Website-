<html>
<head>
  <meta http-http-equiv="Content-Type" content="text/html:charset=UTF-8">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


  <title><?php echo $title;?>;</title>
  <link rel="stylesheet" href=".\css\style.css">
</head>
<body>
  <header>
  <div class="container">
     <div id="branding">
      <h1><span class ="highlight">Acme</span> Web Design</h1>
     </div>
     <!-- NAV CAN CONTAIN THE LINKS THAT ARE INTERLINKED WITH THE CURRENT HTML FILE -->
  <nav>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="about.php">About</a></li>
         <li><a href="servises.php">Services</a></li>
         <li><a href="register.php">Register</a></li>
            <li><a href="Login.php">Login</a></li>
          <li><a href="Admin%20Panel\admin_login.php">Admin Login</a></li>
            <li><a href="contact.php">Contact Us</a></li>
      <li ><a href="meterial.php">Material</a></li>
            <li ><a href="Q&A.php">Q&A</a></li>


        </ul>
  </nav>
        </div>

  </header>
<?php echo $content; ?>

</body>
</html>
