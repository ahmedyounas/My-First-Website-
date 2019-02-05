<?php
session_start();
session_destroy();
header('location:admin_login.php?logged_out=You have logged out');