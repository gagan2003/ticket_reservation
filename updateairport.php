<?php
$connection = mysqli_connect("localhost","root","","pro");
// $db = mysqli_select_db($connection, '');

    if($connection)
    {if(isset($_POST['UPDATEDATA']))
    {   
        $id = $_POST['updateairportid2'];
        
        $name = $_POST['name2'];
        $dist = $_POST['dist2'];
        $state = $_POST['state2'];
        $zip = $_POST['zip2'];

        
        $query = "UPDATE `airport` SET `name` = '$name', `dist` = '$dist', `state` = '$state', `zip` = '$zip' WHERE `airport`.`id` = $id";
        echo $query;
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location: admin.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }}
    else{
        echo "enable in caonnection";
    }
?>