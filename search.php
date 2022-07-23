<div class="container">
<?php
               if ($_SERVER['REQUEST_METHOD'] == 'POST'){ $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'airline');
                $source = $_POST['from'];
                $destination = $_POST['to'];
                $query = "SELECT * FROM `plane` where `from`= '$source' anD  `to` = '$destination'";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">ID</th>
                                <th scope="col">FROM</th>
                                <th scope="col">TO</th>
                                <th scope="col">ARR TIME</th>
                                <th scope="col">DEPT_TIME</th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['NAME']; ?> </td>
                                <td> <?php echo $row['ID']; ?> </td>
                                <td> <?php echo $row['FROM']; ?> </td>
                                <td> <?php echo $row['TO']; ?> </td>
                                <td> <?php echo $row['ARR_TIME']; ?> </td>
                                <td> <?php echo $row['DEPT_TIME']; ?> </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }}
            ?>
</div>