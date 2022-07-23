<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'pro');

    if(isset($_POST['DELTEDATA']))
    {   
        $id = $_POST['deleteplane'];
        $query = "DELETE FROM `plane` WHERE `plane`.`id` = $id;";
        echo $query;
        // $query_run = mysqli_query($connection, $query);

        // if($query_run)
        // {
        //     echo '<script> alert("Data Deleted"); </script>';
        //     header("Location: admin.php");
        // }
        // else
        // {
        //     echo '<script> alert("Data Not Updated"); </script>';
        // }
    }
?>