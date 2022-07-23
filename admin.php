<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-top: 5rem;
    display: flex;
    padding: 5px 5px 5px 5px;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
      p{
        
        padding: 40px 40px 40px 40px;
        margin: 40px 40px 40px 40px;
        text-align: center;
      }
      body{
        background-image: url(asdf.jpg);
    margin: 40px 40px 40px 40px;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 2;
      }
      /* @media (max-width: {
          
      } */
    </style>
  </head>
  <body>
<!-- ADD INFORMATION  MODAL OF AIRLINE-->
<div class="modal fade" id="AVAILABILTY" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ENTER PLANE DETAILS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "availability.php" method = "POST">
      <div class="modal-body">
  <div class="mb-3">
    <label for="planeid" class="form-label">Enter PLANE id</label>
    <input type="text" class="form-control" name = "planeid" id="planeid" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="FROM" class="form-label">Enter FROM</label>
    <input type="text" class="form-control" name = "FROM" id="FROM" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="TO" class="form-label">Enter TO</label>
    <input type="text" class="form-control" name = "TO" id="TO" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="arrtime" class="form-label">Enter ARRIVAL TIME</label>
    <input type="text" class="form-control" name = "arrtime" id="arrtime" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="depttime" class="form-label">Enter DEPT DATE</label>
    <input type="text" class="form-control" name = "depttime" id="depttime" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="fair" class="form-label">Enter fair</label>
    <input type="text" class="form-control" name = "fair96" id="fair" aria-describedby="texthelp">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "DATA1" class="btn btn-primary">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- ADD INFORMATION  MODAL OF AIRLINE-->
<div class="modal fade" id="insertplane" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ENTER PLANE DETAILS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "insertplane.php" method = "POST">
      <div class="modal-body">
  <div class="mb-3">
    <label for="planeid" class="form-label">Enter id</label>
    <input type="text" class="form-control" name = "planeid" id="planeid" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Enter Name</label>
    <input type="text" class="form-control" name = "name" id="name" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="airline" class="form-label">Enter airline</label>
    <input type="text" class="form-control" name = "airline" id="airline" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="noofseat" class="form-label">Enter noofseat</label>
    <input type="text" class="form-control" name = "noofseat" id="noofseat" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="fair" class="form-label">Enter fair</label>
    <input type="text" class="form-control" name = "fair" id="fair" aria-describedby="texthelp">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "DATA" class="btn btn-primary">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ADD INFORMATION  MODAL OF AIRLINE-->
<div class="modal fade" id="insertairport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ENTER PLANE DETAILS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "insertairport.php" method = "POST">
      <div class="modal-body">
  <div class="mb-3">
    <label for="planeid" class="form-label">Enter id</label>
    <input type="text" class="form-control" name = "planeid" id="planeid" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Enter Name</label>
    <input type="text" class="form-control" name = "name" id="name" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="dist" class="form-label">Enter dist</label>
    <input type="text" class="form-control" name = "dist" id="dist" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="state" class="form-label">Enter state</label>
    <input type="text" class="form-control" name = "state" id="state" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="zip" class="form-label">Enter zip</label>
    <input type="text" class="form-control" name = "zip" id="zip" aria-describedby="texthelp">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "DATA" class="btn btn-primary">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- #####################    EDIT DATA USING MODAL     #######################/ -->
<div class="modal fade"  id="editmodalairport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "updateairport.php" method = "POST">
      <div class="modal-body">
    
    <input type="text" class="form-control" name = "updateairportid2" id="updateairportid11" aria-describedby="texthelp">
  
    <div class="mb-3">
    <label for="name1" class="form-label">Enter new name</label>
    <input type="text" class="form-control" name = "name2" id="name19" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="dist1" class="form-label">Enter distict</label>
    <input type="text" class="form-control" name = "dist2" id="dist19" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="state1" class="form-label">Enter state</label>
    <input type="text" class="form-control" name = "state2" id="state19" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="zip1" class="form-label">Enter pincode</label>
    <input type="text" class="form-control" name = "zip2" id="zip19" aria-describedby="texthelp">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "UPDATEDATA" class="btn btn-primary">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade"  id="editavailabilityavai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "editavailability.php" method = "POST">
      <div class="modal-body">
    
      <input type="text" class="form-control" name = "deleteplane13" id="deleteplane13" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "deleteairport11" id="deleteairport1" aria-describedby="texthelp">
     <input type="text" class="form-control" name = "deleteairport21" id="deleteairport2" aria-describedby="texthelp">
     <input type="text" class="form-control" name = "deleteairport123" id="artimr" aria-describedby="texthelp">
     <input type="text" class="form-control" name = "deleteairport124" id="dtime" aria-describedby="texthelp">
     <input type="text" class="form-control" name = "fair00123" id="fair00" aria-describedby="texthelp">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "UPDATEDATA4" class="btn btn-primary">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- #####################    EDIT DATA USING MODAL     #######################/ -->
<div class="modal fade"  id="editmodalPLANE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "updateplane.php" method = "POST">
      <div class="modal-body">
    
    <input type="hidden" class="form-control" name = "updateplaneid2" id="updateplaneid1" aria-describedby="texthelp">
  
    <div class="mb-3">
    <label for="name1" class="form-label">Enter name</label>
    <input type="text" class="form-control" name = "name2" id="name11" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="airline1" class="form-label">Enter airline</label>
    <input type="text" class="form-control" name = "airline2" id="airline1" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="noofseat1" class="form-label">Enter noofseat</label>
    <input type="text" class="form-control" name = "noofseat2" id="noofseat1" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="fair1" class="form-label">Enter fair</label>
    <input type="text" class="form-control" name = "fair12" id="fair1" aria-describedby="texthelp">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "UPDATEDATA1" class="btn btn-primary">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ##########################   DELETE DATA USING MODAL    ###################################### -->
<div class="modal fade"  id="deleteairport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "removeairport.php" method = "POST">
      <div class="modal-body">
    <input type="hidden" class="form-control" name = "deletebtnairport" id="deletebtnairport" aria-describedby="texthelp">

  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "DELTEDATA" class="btn btn-primary">DELETE</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ##########################   DELETE DATA USING MODAL    ###################################### -->
<div class="modal fade"  id="deleteplane" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "removeplane.php" method = "POST">
      <div class="modal-body">
    <input type="hidden" class="form-control" name = "deleteplane" id="deleteplane1" aria-describedby="texthelp">

  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "DELTEDATA" class="btn btn-primary">DELETE</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ##########################   DELETE DATA USING MODAL    ###################################### -->
<div class="modal fade"  id="deleteavailabilityfromtable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "removeavailability.php" method = "POST">
      <div class="modal-body">
    <input type="hidden" class="form-control" name = "deleteplane13" id="deleteplane13" aria-describedby="texthelp">
    <input type="hidden" class="form-control" name = "deleteairport11" id="deleteairport1" aria-describedby="texthelp">
     <input type="hidden" class="form-control" name = "deleteairport21" id="deleteairport2" aria-describedby="texthelp">
     <!-- <input type="text" class="form-control" name = "deleteairport123" id="artimr" aria-describedby="texthelp">
     <input type="text" class="form-control" name = "deleteairport124" id="dtime" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "deleteplane111" id="deleteplane13" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "deleteairport111" id="deleteairport13" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "deleteairport211" id="deleteairport23" aria-describedby="texthelp"> -->

  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name = "DELTEDATA3" class="btn btn-primary">DELETE</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- ##################         MAIN PROGRAM      ######################## -->
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
<BR></BR><BR></BR>

<p>
<div>
    <h1>CLICK ON ADD INFORMATION ADD YOU CAN ADD NEW VAILABILITY INFORMATION</h1>
  </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AVAILABILTY">
  add information
</button>
<BR></BR>
  <div>
    <h1>CLICK ON ADD INFORMATION ADD YOU CAN ADD NEW AIRPLANE INFORMATION</h1>
  </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertplane">
  add information
</button>
<BR></BR>
<div>
    <h1>CLICK ON ADD INFORMATION ADD YOU CAN ADD NEW AIRPORT INFORMATION</h1>
  </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertairport">
  add information
</button><BR></BR>

<form action = "admin.PHP" method = "POST">
    <span>
    <div class="form-group w-50">
      <h3>ENTER airport ID FOR SEARCH AND YOU CAN UPDATE IT</h3>
      <label for="planeid" class="form-label"></label>
      
    
    <input type="text" class="form-control input-sm" name = "airid" id="airid" aria-describedby="texthelp">
  </div>
  <br></br>
  <button type="submit" name = "METHOD1" class="btn btn-primary">Submit</button></span>
</form>
<DIV>
<?php
               if ($_SERVER['REQUEST_METHOD'] == 'POST'){$connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');
                if(isset($_POST["airid"])){
                $id = $_POST['airid'];
                $query = "SELECT * FROM `airport` where `id`= '$id' ";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">DIST</th>
                                <th scope="col"> STATE </th>
                                <th scope="col"> PIN CODE</th>
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
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['dist']; ?> </td>
                                <td> <?php echo $row['state']; ?> </td>
                                <td> <?php echo $row['zip']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtnAIRPORT"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success deletebtnAIRPORT"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                        <?php           
                    
                }}
            ?>
</DIV>
</div><BR></BR>
<form action = "admin.PHP" method = "POST">
    <span>
    <div class="form-group w-50">
      <h3>ENTER PLANE ID FOR SEARCH AND YOU CAN UPDATE IT</h3>
      <label for="planeid" class="form-label"></label>
      
    
    <input type="text" class="form-control input-sm" name = "planeid" id="planeid" aria-describedby="texthelp">
  </div>
  <br></br>
  <button type="submit" name = "METHOD1" class="btn btn-primary">Submit</button></span>
</form>
<DIV>
<?php
               if ($_SERVER['REQUEST_METHOD'] == 'POST'){$connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');
                if(isset($_POST["planeid"])){
                $id = $_POST['planeid'];
                $query = "SELECT * FROM `plane` where `id`= '$id' ";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">AIRLINE</th>
                                <th scope="col"> NO of SEAT </th>
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
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['airline']; ?> </td>
                                <td> <?php echo $row['noofseat']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtnPLANE"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success deletebtnPLANE"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                        <?php           
                    
                }}
            ?>
</DIV>
</div><BR></BR>


<div class="container">
<?php echo '
<H2>HERE WE ARE SHOWING ALL INFORMATION OF OUR PLANES</H2>';
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');

                $query = "SELECT * FROM `airport`";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">DIST</th>
                                <th scope="col"> STATE </th>
                                <th scope="col"> PIN CODE</th>
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
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['dist']; ?> </td>
                                <td> <?php echo $row['state']; ?> </td>
                                <td> <?php echo $row['zip']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtnAIRPORT"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success deletebtnAIRPORT"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
</div>
<div class="container">
<?php echo '
<H2>HERE WE ARE SHOWING ALL INFORMATION OF OUR PLANES</H2>';
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');

                $query = "SELECT * FROM `PLANE`";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">AIRLINE</th>
                                <th scope="col"> NO of SEAT </th>
                                <!-- <th scope="col"> FAIR </th> -->
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
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['name']; ?> </td>
                                <td> <?php echo $row['airline']; ?> </td>
                                <td> <?php echo $row['noofseat']; ?> </td>
                                <!-- <td> <?php echo $row['fair']; ?> </td> -->
                                <td>
                                    <button type="button" class="btn btn-success editbtnPLANE"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success deletebtnPLANE"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
</div>
<div class="container">
<?php echo '
<H2>HERE WE ARE SHOWING ALL INFORMATION OF OUR PLANES</H2>';
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');
 
                $query = "SELECT `availability`.`pid` `i1`,`availability`.`fair` `f`,`p`.`name` `n1`,`a1`.`dist` `n2`,`availability`.`aid1` `i2`,`a2`.`dist` `n3`,`availability`.`aid2` `i3`,`arrivaltime`,`depttime` FROM `availability` inner join `airport` `a1`,`plane` `p`,`airport` `a2` where `p`.`id` = `availability`.`pid` and `availability`.`aid1` = `a1`.`id` and `availability`.`aid2` = `a2`.`id`;
                ";

                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col">PLANE ID</th>
                                <th scope="col"> PLANE NAME</th>
                                <th scope="col"> AIRPORT NAME from</th>
                                <th scope="col">AIRPORT DIST from</th>
                                <th scope="col"> AIRPORT NAME to</th>
                                <th scope="col">AIRPORT DIST to</th>
                                <th scope="col">ARRIVALTIME</th>
                                <th scope="col"> DEPT TIME</th>
                                <th scope="col"> fair</th>
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
                                <td> <?php echo $row['i1']; ?> </td>
                                <td> <?php echo $row['n1']; ?> </td>
                                <td> <?php echo $row['n2']; ?> </td>
                                <td> <?php echo $row['i2']; ?> </td>
                                <td> <?php echo $row['n3']; ?> </td>
                                <td> <?php echo $row['i3']; ?> </td>
                                <td> <?php echo $row['arrivaltime']; ?> </td>
                                <td> <?php echo $row['depttime']; ?> </td>
                                <td> <?php echo $row['f']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success editavailability"> EDIT </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success deleteavailability"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
</div>
</p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            $('.editbtnAIRPORT').on('click', function () {

                $('#editmodalairport').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
                console.log(data);
                    $('#updateairportid11').val(data[0]);
                    $('#name19').val(data[1]);
                    $('#dist19').val(data[2]);
                    $('#state19').val(data[3]);
                    $('#zip19').val(data[4]);
            });
        });
        $(document).ready(function () {

$('.editbtnPLANE').on('click', function () {

    $('#editmodalPLANE').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();
    console.log(data);
        $('#updateplaneid1').val(data[0]);
        $('#name11').val(data[1]);
        $('#airline1').val(data[2]);
        $('#noofseat1').val(data[3]);
        // $('#fair1').val(data[4]);
});
});
        $(document).ready(function () {

$('.deletebtnAIRPORT').on('click', function () {

    $('#deleteairport').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();
    // console.log(data);
        $('#deletebtnairport').val(data[0]);
});
});
$(document).ready(function () {

$('.deletebtnPLANE').on('click', function () {

    $('#deleteplane').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();
    // console.log(data);
        $('#deleteplane1').val(data[0]);
});
});
$(document).ready(function () {
$('.editavailability').on('click', function () {

$('#editavailabilityavai').modal('show');

$tr = $(this).closest('tr');

var data = $tr.children("td").map(function () {
    return $(this).text();
}).get();
console.log(data);
        $('#artimr').val(data[6]);
        $('#dtime').val(data[7]);
        $('#deleteairport1').val(data[3]);
        $('#deleteplane1').val(data[1]);
        $('#deleteairport13').val(data[2]);
        $('#deleteplane13').val(data[0]);
        $('#deleteairport23').val(data[4]);
        $('#deleteairport2').val(data[5]);
        $('#fair00').val(data[8]);
});
});
$(document).ready(function () {

$('.deleteavailability').on('click', function () {

    $('#deleteavailabilityfromtable').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();
    // console.log(data);
        $('#deleteairport1').val(data[3]);
        $('#deleteplane1').val(data[1]);
        $('#deleteairport13').val(data[2]);
        $('#deleteplane13').val(data[0]);
        $('#deleteairport23').val(data[4]);
        $('#deleteairport2').val(data[5]);
});
});
    </script>
  </body>
</html>