<?php 
  include 'db.php';

   if (isset($_POST['login'])) {
         
         $email = $_POST['email'];
         $pswrd = $_POST['password'];
         $role = $_POST['User'];

         if ($role=="customer") {

          $sql = "SELECT * FROM customer WHERE email='".$email."'";
         $reslt = mysqli_query($conn, $sql);

         if ($reslt) {
            if(mysqli_num_rows($reslt) > 0){
              $sql2 = "SELECT password FROM customer WHERE email='".$email."'";
              $reslt2 = mysqli_query($conn, $sql);


              if(mysqli_num_rows($reslt2) > 0){
                while ($row = $reslt2->fetch_assoc()){
                  $psd = $row["password"];
                }
                if ($pswrd==$psd) {
                     header("location: profile.php");
                }else {
                  
                  echo '<script>alert("Password did not match...")</script>';
                }
              }

              }else {
             // echo "You didn't registerd yet. Please signup before login.";
              echo '<script>alert("You did not registerd yet. Please signup before login")</script>';
              //header("location: signin.php");


            }
             
            }
            
         }else {

           $sql = "SELECT * FROM service_provider WHERE email='".$email."'";
         $reslt = mysqli_query($conn, $sql);

         if ($reslt) {
            if(mysqli_num_rows($reslt) > 0){
              $sql2 = "SELECT password FROM service_provider WHERE email='".$email."'";
              $reslt2 = mysqli_query($conn, $sql);


              if(mysqli_num_rows($reslt2) > 0){
                while ($row = $reslt2->fetch_assoc()){
                  $psd = $row["password"];
                }
                if ($pswrd==$psd) {
                     header("location: profiles.php?email=".$email);
                }else {
                  
                  echo '<script>alert("Password did not match...")</script>';
                }
              }

              }else {
             // echo "You didn't registerd yet. Please signup before login.";
              echo '<script>alert("You did not registerd yet. Please signup before login")</script>';
              //header("location: signin.php");


            }
             
            }
            
         }
         

         
             
            }
            
         

   
?>