<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password1 = $_POST['password1'];

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "pro";

      $conn = mysqli_connect($servername, $username, $password, $database);
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 

        $sql = "SELECT * FROM `admin` where `email` = '$email' and `password` = '$password1'";
        // echo $sql . "<br>";
        $result = mysqli_query($conn, $sql);
        // echo $result . "<br>";
        $num = mysqli_num_rows($result);
        echo $num . "<br>";
        if($num >= 1){
            header("Location: admin.php");
        }
        else {
            echo '<div class="alert alert-warning"role="alert">somethin wrong you can try again!!!!!!!</div>';
        }
    }
    
}
    
    
?>
