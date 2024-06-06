<?php
   include ('conecting.php');
   if (isset($_POST['submit'])) {
      $Username = $_POST['Username'];
      $password = $_POST['password'];
   
      $sqlquery = "SELECT * FROM register WHERE Username = '$Username' and password = '$password'";

      $result = mysqli_query($conn, $sqlquery);

      if (mysqli_num_rows($result) > 0) {
         header("Location: mainMenu.php");
      } else {
         header("Location: register.php");
         echo "Failed: " . mysqli_error($conn);
      }

      }

?>