<?php
$connection = mysqli_connect("localhost","root","","pro");
// $db = mysqli_select_db($connection, '');

    if($connection)
    {if(isset($_POST['UPDATEDATA4']))
    {   
        $pid = $_POST['deleteplane13'];
        
        $ai1 = $_POST['deleteairport11'];
        $ai2 = $_POST['deleteairport21'];
        $arrtime = $_POST['deleteairport123'];
        $dtime = $_POST['deleteairport124'];
        $fair = $_POST['fair00123'];

        
        $query = "UPDATE `availability` SET `arrivaltime` = '$arrtime', `depttime` = '$dtime', `fair` = '$fair' WHERE `availability`.`pid` = $pid AND `availability`.`aid1` = $ai1 AND `availability`.`aid2` = $ai2;";
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