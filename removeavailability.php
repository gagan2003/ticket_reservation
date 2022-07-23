<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'pro');

    if(isset($_POST['DELTEDATA3']))
    {   
        $id1 = $_POST['deleteplane13'];
        $id2 = $_POST['deleteairport11'];
        $id3 = $_POST['deleteairport21'];
        // echo $id1 . '<br>';
        // echo $id3 . '<br>';
        // echo $id2 . '<br>';
        $query = "DELETE FROM `availability` WHERE `availability`.`pid` = $id1 AND `availability`.`aid1` = $id2 AND `availability`.`aid2` = $id3;";
        echo $query;
        // $query_run = mysqli_query($connection, $query);
        // echo $query;
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