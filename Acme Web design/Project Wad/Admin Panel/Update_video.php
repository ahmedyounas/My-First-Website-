<?php

include ('sql_connection.php');
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_GET['update_video'])){
    $get_id = $_GET['update_video'];
    $get_vid = "select * from videos where vid_id='$get_id'";
    $run_vid = mysqli_query($con, $get_vid);
    $row_vid = mysqli_fetch_array($run_vid);
    $vid_id = $row_vid['vid_id'];
    $vid_title = $row_vid['vid_title'];
    $vid_cat = $row_vid['pro_cat'];
    $vid = $row_vid['vid'];
    $vid_desc = $row_vid['vid_desc'];

    $get_serv = "select * from services where serv_id = '$vid_cat'";
    $run_serv = mysqli_query($con,$get_serv);
    $row_serv = mysqli_fetch_array($run_serv);
    $serv_title = $row_serv['serv_title'];

}
if(isset($_POST['update_video'])){
    //getting text data from the fields
    $vid_title = $_POST['vid_title'];
    $vid_cat = $_POST['vid_cat'];
    $vid_desc = $_POST['vid_desc'];


    //getting image from the field
    $vid = $_FILES['vid']['name'];
    $vid_tmp = $_FILES['vid']['tmp_name'];
    move_uploaded_file($vid_tmp,"../media/".$vid);

    $update_videos = "update videos set vid_cat = '$vid_cat', 
                                        vid_title = '$vid_title' ,
                                        vid_desc = '$vid_desc',
                                        vid = '$vid', 
                                        where vid_id='$vid_id'";

    $update_vid = mysqli_query($con, $update_videos);
    if($update_vid){
        header("location: admin_panel.php?view_products");
    }
}
?>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <h2 class="offset-lg-3 offset-md-2 offset-1 "> Edit and Update Video </h2>
            </div>
            <div class="row">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="vid_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> videos </span> Title:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                        </div>
                        <input type="text" class="form-control" id="vid_title" name="vid_title" placeholder="Enter videos Title" >
                    </div>
                </div>

                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="vid_cat" class="float-md-right"><span class="d-sm-none d-md-inline"> Videos </span> Category:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-list-alt"></i></div>
                        </div>
                        <select class="form-control" id="vid_cat" name="vid_cat">
                            <option>Select Category</option>
                            <?php
                            $getCatsQuery = "select * from services";
                            $getCatsResult = mysqli_query($con,$getCatsQuery);
                            while($row = mysqli_fetch_assoc($getCatsResult)){
                                $serv_id = $row['serv_id'];
                                $serv_title = $row['serv_title'];
                                echo "<option value='$serv_id'>$serv_title</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="vid1" class="float-md-right"><span class="d-sm-none d-md-inline"> ADD </span> Videos:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-image"></i></div>
                        </div>
                        <input class="form-control" type="file" id="vid" name="vid">
                    </div>
                </div>
            </div>

            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="vid_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> videos </span> Detail:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                        </div>
                        <textarea class="form-control" type="file" id="vid_desc" name="vid_desc" placeholder="Enter Video Detail"></textarea>
                    </div>
                </div>
            </div>


            <div class="form-group row">
                <div class="offset-sm-3 col-12 col-sm-6">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" id="update_vid" name="update_vid"
                           value="Update video Now">
                </div>
            </div>
        </form>
    </div>
</div>
