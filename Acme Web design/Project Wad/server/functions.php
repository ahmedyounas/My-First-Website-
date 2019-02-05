<?php
require_once "sql_connection.php";
function getserv(){
    global $con;
    $getCatsQuery = "select * from Services";
    $getCatsResult = mysqli_query($con,$getCatsQuery);
    while($row = mysqli_fetch_assoc($getCatsResult)){
        $serv_id = $row['serv_id'];
        $serv_title = $row['serv_title'];
        echo "<li><a class='nav-link'  href='insert_videos.php?serv=$serv_id'>$serv_title</a></li>";
    }
}

function getvid(){
    global $con;
    $getVidQuery = '';
    if(!isset($_GET['serv'])){
        $getVidQuery = "select * from videos order by RAND();";
    }
    else if(isset($_GET['serv'])){
        $vid_cat_id = $_GET['serv'];
        $getVidQuery = "select * from videos where vid_cat = '$vid_cat_id'";
    }
    $getVidResult = mysqli_query($con,$getVidQuery);
    $count_pro = mysqli_num_rows($getVidResult);
    if($count_pro==0){
        echo "<h4 class='alert-warning align-center my-2 p-2'> No Product found in selected criteria </h4>";
    }
    while($row = mysqli_fetch_assoc($getVidResult)){
        $vid_id = $row['vid_id'];
        $vid_title = $row['vid_title'];
        $vid = $row['vid'];
        echo "
                <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary'>
                    <h5 class='text-capitalize'>$vid_title</h5>
                    <img src='media/$vid'>
                        <button class='btn btn-primary btn-sm'>
                            <i class='fas fa-cart-plus'></i> Add to Cart
                        </button>
                    </a>
                </div>
        ";
    }
}