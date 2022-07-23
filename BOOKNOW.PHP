<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><form action = "ticket.php" method = "POST">
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
    
</body>
</html>