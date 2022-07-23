<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      p{
        
        padding: 40px 40px 40px 40px;
        margin: 40px 40px 40px 40px;
      }
      body{
        background-image: url("pinup.jpg");
        margin: 40px 40px 40px 40px;
        /* background-attachment: fixed; */
        background-repeat: no-repeat;
        background-size: 1600px 1000px;
        opacity: 2;
      }
    </style>
    <title>SignIn SignUp</title>
  </head>
  <body>
<!--  -->



  <div class="modal" id = "signin" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action = "signin.php" method = "POST">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password1" class="form-label">Enter Password</label>
    <input type="password" class="form-control" class = "password1" id="password1" name="password1">
  </div>
  <button type="submit" name = "submit"class="btn btn-primary">Submit</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        
      </div>
    </form>
    </div>
  </div>
</div>


<div class="modal" id = "login" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action = "login.php" method = "POST">
  <div class="mb-3">
    <label for="email" class="form-label">Enter Email address</label>
    <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password1" class="form-label">Enter Password</label>
    <input type="password" class="form-control" class = "password1" id="password1" name="password1">
  </div>
  <button type="submit" name = "submit"class="btn btn-primary">Submit</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        
      </div>
    </form>
    </div>
  </div>
</div>






  <div class="modal" id = "signup" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action = "signup.php" method = "POST">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password1" class="form-label">Enter Password</label>
    <input type="password" class="form-control" class = "password1" id="password1" name="password1">
  </div>
  <div class="mb-3">
    <label for="password2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" class = "password2" id="password2" name="password2">
  </div>
  <button type="submit" name = "submit"class="btn btn-primary">Submit</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>


    <P>
    <h1>if you first time than you must be sign-up else sign-in</h1>
    <span><button type="button" class="btn btn-primary signup" id= "signup">Sign Up</button></span>
    <span><button type="button" class="btn signin btn-secondary" id = "signin">Sign in</button></span>
    <h1>if you are member of an airline than you can login here</h1>
    <button type="button" class="btn login btn-secondary" id = "login">Login</button>
    </P>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function () {

$('.signup').on('click', function () {

    $('#signup').modal('show');

});
});

$(document).ready(function () {

$('.signin').on('click', function () {

    $('#signin').modal('show');

});
});
$(document).ready(function () {

$('.login').on('click', function () {

    $('#login').modal('show');

});
});
   </script>
  </body>
</html>