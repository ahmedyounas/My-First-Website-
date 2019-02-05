<?php

require "sql_connection.php";

function getCategories()
{
    global $con;

    $getCategoryQuery = "select * from Services";

    $getCategoriesResult = mysqli_query($con,$getCategoryQuery);
    while($row = mysqli_fetch_assoc($getCategoriesResult))
    {
        $id = $row['serv_id'];

        $title = $row['serv_name'];

        echo "<li><a class='nav-link'  href='#'>$title</a></li>";

    }
}
?>