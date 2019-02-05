<?php
include ('sql_connection.php');
if(!isset($_SESSION['user_email'])){
header('location: admin_login.php?not_admin=You are not Admin!');
}
?>
<div class="row">
    <div class="col-sm-12">
        <h1>Videos</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Videos</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_vid = "select * from videos";
            $run_vid = mysqli_query($con,$get_vid);
            $count_vid = mysqli_num_rows($run_vid);
            if($count_vid==0){
                echo "<h2> No videos found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_vid = mysqli_fetch_array($run_vid)) {
                    $vid_id = $row_vid['vid_id'];
                    $vid_cat = $row_vid['vid_cat'];
                    $vid_title = $row_vid['vid_title'];
                    $vid = $row_vid['vid'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $vid_title; ?></td>
                        <td><video width='480' height='480' controls> <source src='../media/<?php echo $vid;?>'  type='video/mp4'></video></td>
                        <td><?php echo $vid_cat ?>/-</td>
                        <td><a href="admin_panel.php?update_videos=<?php echo $vid_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="admin_panel.php?delete_view=<?php echo $vid_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>