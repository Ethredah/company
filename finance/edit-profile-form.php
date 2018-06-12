
<?php

  require_once "functions/db.php";


  if (isset($_POST['update'])) {


      //-- Get Employee Data --//

      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                  echo $emailErr;
                  die();
                  $email = $_POST['email'];
               }
               else {

               }
      //-- Get Employee Data --//





      //-- Update DB --//
      $sql = "UPDATE employees SET email = ?, phone = ?, address = ? WHERE email='$email' ";
      //-- Update DB --//



      $stmt = $db->prepare($sql);


      try {
        $stmt->execute([$email,$phone,$address]);
        header('Location:profile.php?success');

      }

       catch (Exception $e) {
          $e->getMessage();
          echo "Error";
      }



      }















?>
