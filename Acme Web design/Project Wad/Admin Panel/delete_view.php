<?php
include ('sql_connection.php');
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['delete_view'])){
    $del_id = $_GET['delete_view'];
    $delete_view = "delete from videos where vid_id='$del_id'";
    $run_del = mysqli_query($con,$delete_view);

}