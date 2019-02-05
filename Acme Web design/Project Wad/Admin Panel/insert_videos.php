<?php
include ('sql_connection.php');
if(!isset($_SESSION['user_email'])){
    header('location: admin_login.php?not_admin=You are not Admin!');
}

if(isset($_POST['insert_videos'])){
    //getting text data from the fields
    $vid_title = $_POST['vid_title'];
    $vid_cat = $_POST['vid_cat'];
    $vid_desc = $_POST['vid_desc'];
    //$vid = $_POST['vid'];

    //getting image from the field
    $vid = $_FILES['vid']['name'];
    $vid_tmp = $_FILES['vid']['tmp_name'];
    move_uploaded_file($vid_tmp,"../media/".$vid);

    $insert_videos = "insert into `videos` (vid_cat, vid_title,vid_desc,vid) 
                  VALUES ('$vid_cat','$vid_title','$vid_desc','$vid');";
    $insert_vid = mysqli_query($con, $insert_videos);

}
?>
<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Videos </h1>
<form action="" method="post" enctype="multipart/form-data">
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
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <button type="submit" name="insert_videos" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert video Now </button>
        </div>
    </div>
</form>
<?php
if(isset($_POST['insert_videos']))
{
echo"<br />".$vid."has been uploaded";
}

?>
