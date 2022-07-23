<?php
$connection = mysqli_connect("localhost","root","","pro");
// $db = mysqli_select_db($connection, '');

    if($connection)
    {if(isset($_POST['UPDATEDATA1']))
    {   
        $id = $_POST['updateplaneid2'];
        
        $name = $_POST['name2'];
        $airline = $_POST['airline2'];
        $noofseat = $_POST['noofseat2'];
        $fair = $_POST['fair12'];

        
        $query = "UPDATE `plane` SET `id` = '$id', `name` = '$name', `airline` = '$airline', `noofseat` = '$noofseat',`fair` = '$fair' WHERE `plane`.`id` = $id";
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