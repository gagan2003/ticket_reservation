


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="modal fade"  id="booknow1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "ticket.php" method = "POST">
      <div class="modal-body">
    
    <input type="hidden" class="form-control" name = "planeid" id="planeid" aria-describedby="texthelp">

    <input type="hidden" class="form-control" name = "From" id="From1" aria-describedby="texthelp">

    <input type="hidden" class="form-control" name = "to" id="to1" aria-describedby="texthelp">

    <input type="hidden" class="form-control" name = "arrivaltime" id="arrivaltime1" aria-describedby="texthelp">
 
    <input type="hidden" class="form-control" name = "depttime" id="depttime1" aria-describedby="texthelp">
    <div class="mb-3">
    <label for="passid" class="form-label">Enter passenger id</label>
    <input type="text" class="form-control" name = "passid" id="passid" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Enter name</label>
    <input type="text" class="form-control" name = "name" id="name" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">Enter city</label>
    <input type="text" class="form-control" name = "city" id="city" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="waaya" class="form-label">Enter waaya</label>
    <input type="text" class="form-control" name = "waaya" id="waaya" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="zip" class="form-label">Enter zip</label>
    <input type="text" class="form-control" name = "zip" id="zip" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Enter email</label>
    <input type="text" class="form-control" name = "email" id="email" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="mobileno" class="form-label">Enter mobileno</label>
    <input type="text" class="form-control" name = "mobileno" id="mobileno" aria-describedby="texthelp">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "bookticket" class="btn btn-primary">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ########################################## -->
    <h1>insert data in data base using modal</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<form action = "homepage.PHP" method = "POST">
    <span>
    <div class="mb-3">
    <label for="planeid" class="form-label">Enter id FOR SEARCH</label>
    <input type="text" class="form-control" name = "planeid" id="planeid" aria-describedby="texthelp">
  </div>
    </span>
  <span><button type="submit" name = "id" class="btn btn-primary">Submit</button></span>
</form>


<form action = "homepage.PHP" method = "POST">
    <span>
    <select class="form-select" aria-label="Default select example" name = "from">
  <option placeholder= "select one of thie"></option>
  <option value="JAIPUR">JAIPUR</option>
  <option value="DELHI">DELHI</option>
  <option value="MUMBAI">MUMBAI</option>
  <option value="3">3</option>
  <option value="5">5</option>
</select>
    </span>

<span>
<select class="form-select" aria-label="Default select example" name = "to">
  <option placeholder= "select one of thie"></option>
  <option value="JAIPUR">JAIPUR</option>
  <option value="DELHI">DELHI</option>
  <option value="MUMBAI">MUMBAI</option>
  <option value="3">3</option>
  <option value="5">5</option>
</select>
</span>
  <span><button type="submit" name = "staition" class="btn btn-primary">Submit</button></span>
</form>
<div class="container">
<?php
               $connection = mysqli_connect("localhost","root","","airline");
               if(isset($_POST['id'])){
                $id = $_POST['planeid'];
                $query = "SELECT * FROM `plane` where `planeid`= '$id' ";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">FROM</th>
                                <th scope="col">TO</th>
                                <th scope="col"> arrival time </th>
                                <th scope="col"> DEPT time </th>
                                <th scope="col"> arrival DATE </th>
                                <th scope="col"> DEPT DATE </th>
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
                                <td> <?php echo $row['planeid']; ?> </td>
                                <td> <?php echo $row['from']; ?> </td>
                                <td> <?php echo $row['to']; ?> </td>
                                <td> <?php echo $row['arrivaltime']; ?> </td>
                                <td> <?php echo $row['depttime']; ?> </td>
                                <td> <?php echo $row['arrivaldate']; ?> </td>
                                <td> <?php echo $row['deptdate']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success booknow"> book now </button>
                                </td>
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
<div class="container">
<?php
               $connection = mysqli_connect("localhost","root","","airline");
               if(isset($_POST['staition'])){
                $source = $_POST['from'];
                $destination = $_POST['to'];
                $query = "SELECT * FROM `plane` where `from`= '$source' anD  `to` = '$destination' ";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered  table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">FROM</th>
                                <th scope="col">TO</th>
                                <th scope="col"> arrival time </th>
                                <th scope="col"> DEPT time </th>
                                <th scope="col"> arrival DATE </th>
                                <th scope="col"> DEPT DATE </th>
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
                                <td> <?php echo $row['planeid']; ?> </td>
                                <td> <?php echo $row['from']; ?> </td>
                                <td> <?php echo $row['to']; ?> </td>
                                <td> <?php echo $row['arrivaltime']; ?> </td>
                                <td> <?php echo $row['depttime']; ?> </td>
                                <td> <?php echo $row['arrivaldate']; ?> </td>
                                <td> <?php echo $row['deptdate']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success booknow"> book now </button>
                                </td>
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
<form action = "homepage.PHP" method = "POST">
    <span>
    <div class="mb-3">
    <label for="pnrid" class="form-label">Enter id FOR SEARCH</label>
    <input type="text" class="form-control" name = "pnrid" id="pnrid" aria-describedby="texthelp">
  </div>
    </span>
  <span><button type="submit" name = "pnrid" class="btn btn-primary">Submit</button></span>
</form>

 
// Load the database configuration file 
<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = ""; 
$dbPassword = ""; 
$dbName     = "airline"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$pnrid; 
if(isset($_POST['pnrid'])){
    $pnrid = $_POST['pnrid'];}
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
} 
 
// Fetch records from database 
$query = $db->query("SELECT * FROM WHERE `pid`= '$pnrid'"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('pid', 'name', 'from', 'to', 'arrivaltime', 'depttime', 'city','waaya','city','pincode','planeid','email','mobileno', 'STATUS'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == 1)?'Active':'Inactive'; 
        $lineData = array($row['pid'], $row['name'], $row['from'], $row['to'], $row['arrivaltime'], $row['depttime'], $row['city'],$row['waaya'],$row['city'],$row['pincode'],$row['planeid'],$row['email'],$row['mobileno'],, $status); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            $('.booknow').on('click', function () {

                $('#booknow1').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
                console.log(data);
                    $('#planeid').val(data[0]);
                    $('#From1').val(data[1]);
                    $('#to1').val(data[2]);
                    $('#arrivaltime1').val(data[3]);
                    $('#depttime1').val(data[4]);
            });
        });
    </script>
  </body>
</html>