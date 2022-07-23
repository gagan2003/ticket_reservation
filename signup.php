<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // echo $name . " -> " . $password1 . " -> " .$password2 . " -> " . $email;



      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "pro";

      $conn = mysqli_connect($servername, $username, $password, $database);
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        
        if($password1 == $password2){
            $sql = "INSERT INTO `user` ( `email`, `password`) VALUES ('$email', '$password1')";
            $result = mysqli_query($conn, $sql);
            if($result){header("Location: homepage.php");
            }
            // echo $sql;
        
        
    }
    else
        {
            echo '<div class="alert alert-warning"role="alert">your password is not matches!!!!!!!</div>';
        }
    }
    
    }
    
?>
