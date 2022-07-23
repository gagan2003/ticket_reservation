<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-top: 5rem;
    display: flex;
    padding: 5px 5px 5px 5px;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}
select.form-select.c1 {
    display: flex;
    align-items : center;
    justify-content: center;
}
.form-select{
    width: 40%
}
.form-select{
    width: 40%
}
p{
        
        padding: 40px 40px 40px 40px;
        margin: 40px 40px 40px 40px;
        text-align: center;
      }
      body { 
background: url("tic.jpg") no-repeat center center fixed #000; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
margin: 40px 40px 40px 40px;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 2;
}


      /* body{
        background-image: url("tic.jpg");
    margin: 40px 40px 40px 40px;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 2;
      } */
      /* .div1{
        display: inline;
        size: 40;
      } */
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="modal fade"  id="booknow1123" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form  action = "ticket.php" method = "POST">
      <div class="modal-body">
    
    <input type="text" class="form-control" name = "planeplaneidid1" id="planeid" aria-describedby="texthelp">

    <input type="text" class="form-control" name = "From" id="From1" aria-describedby="texthelp">

    <input type="text" class="form-control" name = "to" id="to1" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "arrivaltime" id="at" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "depttime" id="dt" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "fair123" id="fair00" aria-describedby="texthelp">

    <!-- <input type="hidden" class="form-control" name = "arrivaltime" id="arrivaltime1" aria-describedby="texthelp">
 
    <input type="hidden" class="form-control" name = "depttime" id="depttime1" aria-describedby="texthelp"> -->
    <div class="mb-3">
    <label for="passid" class="form-label">Enter passenger id</label>
    <input type="text" class="form-control" name = "passid" id="passid" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Enter name</label>
    <input type="text" class="form-control" name = "name" id="name" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Enter date</label>
    <input type="date" class="form-control" name = "date" id="date" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">Enter city</label>
    <input type="text" class="form-control" name = "city" id="city" aria-describedby="texthelp">
  </div>
  
  <div class="mb-3">
    <label for="age" class="form-label">Enter age</label>
    <input type="text" class="form-control" name = "age" id="age" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="waaya" class="form-label">Enter state</label>
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



<div class="modal fade"  id="booknow11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form action = "ticket.php"  method = "POST">
      <div class="modal-body">
    
    <input type="text" class="form-control" name = "planeplaneidid1" id="planeid1" aria-describedby="texthelp">

    <input type="text" class="form-control" name = "From" id="From11" aria-describedby="texthelp">

    <input type="text" class="form-control" name = "to" id="to11" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "arrivaltime" id="at1" aria-describedby="texthelp">
    <input type="text" class="form-control" name = "depttime" id="dt1" aria-describedby="texthelp">

    <!-- <input type="hidden" class="form-control" name = "arrivaltime" id="arrivaltime1" aria-describedby="texthelp">
 
    <input type="hidden" class="form-control" name = "depttime" id="depttime1" aria-describedby="texthelp"> -->
    <div class="mb-3">
    <label for="passid" class="form-label">Enter passenger id</label>
    <input type="text" class="form-control" name = "passid" id="passid" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Enter name</label>
    <input type="text" class="form-control" name = "name" id="name" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Enter date</label>
    <input type="date" class="form-control" name = "date" id="date" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">Enter city</label>
    <input type="text" class="form-control" name = "city" id="city" aria-describedby="texthelp">
  </div>
  
  <div class="mb-3">
    <label for="age" class="form-label">Enter age</label>
    <input type="text" class="form-control" name = "age" id="age" aria-describedby="texthelp">
  </div>
  <div class="mb-3">
    <label for="waaya" class="form-label">Enter state</label>
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
  <H1>SELECT AIRPORT FOR FROM -> TO</H1>
<select class="form-select" aria-label="Default select example" name = "id11">
  <option placeholder= "select one of thie"></option>
  <option value="1234">1234</option>
  <option value="9856">9856</option>
  <option value="9874">9874</option>
</select><button type="submit" name = "staition1" class="btn btn-primary">Submit</button>

</form>
<?php
               $connection = mysqli_connect("localhost","root","","pro");
               if(isset($_POST['staition1'])){
                $id1 = $_POST['id11'];
                $query = " SELECT `airport`.`name` `n`,`airport`.`id` `i` FROM `airport` where `airport`.`id` = '$id1';";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col">airport ID</th>
                                <th scope="col"> airport NAME</th>
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
                                <td> <?php echo $row['n']; ?> </td>
                                <td> <?php echo $row['i']; ?> </td>
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




<form action = "homepage.PHP" method = "POST">
  <H1>SELECT AIRPORT FOR FROM -> TO</H1>
    <select class="form-select c1" aria-label="Default select example" name = "from">
  <option placeholder= "select one of thie"></option>
  <option value="1">delhi</option>
  <option value="3">siakr</option>
  <option value="9874">asdf</option>
</select>

<select class="form-select c1" aria-label="Default select example" name = "to">
  <option placeholder= "select one of thie"></option>
  <option value="1">delhi</option>
  <option value="3">siakr</option>
  <option value="9874">asdf</option>


  <!-- <?php

$connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');
 
                $query = "SELECT `airport`.`id` `i`,`airport`.`dist` `n` FROM `airport`";

                $query_run = mysqli_query($connection, $query);
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                                $n1 =  $row['i'];  
                                $n2 =  $row['n'];  
                                ?> <option value= <?php $n1 ?> > <?php echo $n2?> </option>   <?php
                    }
                }
                else 
                {
                    echo "No Record Found";
                }


  ?> -->

 
</select>




<!-- <select class="form-select c2" aria-label="Default select example" placeholder= "select one of thie" name = "to">
  <option placeholder= "select one of thie"></option>
  <option value="1234">werq</option>
  <option value="9856">adf</option>
  <option value="9874">asdf</option>
</select> -->



<!-- <select class="form-select c1" aria-label="Default select example" name = "to"> -->
  <!-- <option placeholder= "select one of thie"></option> -->
  <!-- <option value="1234">werq</option> -->
  <!-- <option value="9856">adf</option>
  <option value="9874">asdf</option> -->


  <!-- <?php

$connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');
 
                $query = "SELECT `airport`.`id` `i`,`airport`.`dist` `n` FROM `airport`";

                $query_run = mysqli_query($connection, $query);
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                                $n1 =  $row['i'];  
                                $n2 =  $row['n'];  
                                ?> <option value= <?php $n1 ?> > <?php echo $n2?> </option>   <?php
                    }
                }
                else 
                {
                    echo "No Record Found";
                }


  ?>

 
</select> -->



<button type="submit" name = "staition" class="btn btn-primary">Submit</button>
  
</form>
<?php
               $connection = mysqli_connect("localhost","root","","pro");
               if(isset($_POST['staition'])){
                $from = $_POST['from'];
                $to = $_POST['to'];
                $query = "SELECT * FROM `availability` where `aid1`= '$from' and `aid2`= '$to'";
                // echo $query ."<br>";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col"> plane ID</th>
                                <th scope="col">FROM</th>
                                <th scope="col">TO</th>
                                <th scope="col"> arrival time </th>
                                <th scope="col"> DEPT time </th>
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
                                <td> <?php echo $row['pid']; ?> </td>
                                <td> <?php echo $row['aid1']; ?> </td>
                                <td> <?php echo $row['aid2']; ?> </td>
                                <td> <?php echo $row['arrivaltime']; ?> </td>
                                <td> <?php echo $row['depttime']; ?> </td>
                                <td>
                                <button type="button" class="btn btn-success booknowairportid"> book now </button>
                                    
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














<form action = "homepage.PHP" method = "POST">
    <div class="form-group w-50">
      <h3>ENTER PLANE ID IF YOU KNOW FOR SEARCH FROM -> TO</h3>
    <label for="planeid" class="form-label"></label>
    <input type="text" class="form-control" name = "planeid1" id="planeid" aria-describedby="texthelp">
  </div>
    </span>
  <span><button type="submit" name = "id1" class="btn btn-primary">Submit</button></span>
</form>
<?php
               $connection = mysqli_connect("localhost","root","","pro");
               if(isset($_POST['id1'])){
                $id = $_POST['planeid1'];
                $query = " SELECT `availability`.`pid` `i1`,`p`.`name` `n1`,`a1`.`name` `n2`,`availability`.`aid1` `i2`,`a2`.`name` `n3`,`availability`.`aid2` `i3`,`arrivaltime`,`depttime` FROM `availability` inner join `airport` `a1`,`plane` `p`,`airport` `a2` where `p`.`id` = `availability`.`pid` and `availability`.`aid1` = `a1`.`id` and `availability`.`aid2` = `a2`.`id` and `availability`.`pid` = '$id';";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col">PLANE ID</th>
                                <th scope="col"> PLANE NAME</th>
                                <th scope="col"> AIRPORT NAME from</th>
                                <th scope="col">AIRPORT ID from</th>
                                <th scope="col"> AIRPORT NAME to</th>
                                <th scope="col">AIRPORT ID to</th>
                                <th scope="col">ARRIVALTIME</th>
                                <th scope="col"> DEPT TIME</th>
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


<?php echo '
<H2>HERE WE ARE SHOWING ALL INFORMATION OF OUR PLANES</H2>';
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pro');
 
                $query = "SELECT `availability`.`pid` `i1`,`p`.`name` `n1`,`p`.`fair` `f`,`a1`.`dist` `n2`,`availability`.`aid1` `i2`,`a2`.`dist` `n3`,`availability`.`aid2` `i3`,`arrivaltime`,`depttime` FROM `availability` inner join `airport` `a1`,`plane` `p`,`airport` `a2` where `p`.`id` = `availability`.`pid` and `availability`.`aid1` = `a1`.`id` and `availability`.`aid2` = `a2`.`id`;
                ";

                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col">PLANE ID</th>
                                <th scope="col"> PLANE NAME</th>
                                <th scope="col"> AIRPORT DIST from</th>
                                <th scope="col">AIRPORT ID from</th>
                                <th scope="col"> AIRPORT NAME to</th>
                                <th scope="col">AIRPORT DIST to</th>
                                <th scope="col">ARRIVALTIME</th>
                                <th scope="col"> DEPT TIME</th>
                                <th scope="col"> FAIR</th>
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
                                <button type="button" class="btn btn-success booknow1"> book now </button>
                                    
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











    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            $('.booknow1').on('click', function () {

                $('#booknow1123').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
                console.log(data);
                    $('#planeid').val(data[0]);
                    $('#From1').val(data[3]);
                    $('#to1').val(data[5]);
                    $('#at').val(data[6]);
                    $('#dt').val(data[7]);
                    $('#fair00').val(data[8]);
            });
        });

        $(document).ready(function () {

$('.booknowairportid').on('click', function () {

    $('#booknow11').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();
    console.log(data);
        $('#planeid1').val(data[0]);
        $('#From11').val(data[1]);
        $('#to11').val(data[2]);
        $('#at1').val(data[3]);
        $('#dt1').val(data[4]);
});
});
    </script>
  </body>
</html>