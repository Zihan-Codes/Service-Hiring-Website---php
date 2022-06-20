<?php 
  include 'db.php';

   if (isset($_POST['save'])) {
   	     $fname = $_POST['F_Name'];
   	     $lname = $_POST['L_Name'];
   	     $gender = $_POST['Gender'];
   	     $adrss = $_POST['Address'];
   	     $district = $_POST['District'];
   	     $phone = $_POST['Phone_No'];
   	     $email = $_POST['Email'];
   	     $pswrd = $_POST['password'];
   	     $cpswrd = $_POST['password_confirmation'];
   	     $service = $_POST['service'];
         $role = $_POST["User"];
         

             


   	     if ($pswrd == $cpswrd) {
            if($role=="Service Provider"){
              $image = $_FILES['prfl']['name'];
              if ($image==NULL) {
               $pimage = "temp.jpg";
             }else {

              $profileimg = $_FILES['prfl']['name'];
              $prflrename = $fname . $profileimg; // Rename the image
              $destination = 'profilepic/' . $prflrename;
              $extension = pathinfo($profileimg, PATHINFO_EXTENSION);
              $fileimg = $_FILES['prfl']['tmp_name'];
              $pflsize = $_FILES['prfl']['size']; 

              if (move_uploaded_file($fileimg,$destination)){
                $pimage = $prflrename;
              }            
             }

              

            $sql = "INSERT INTO service_provider (first_name, last_name, email, phone, address, district, password, gender, service_provider, imageurl) VALUES ('$fname', '$lname', '$email', '$phone', '$adrss', '$district', '$pswrd', '$gender', '$service', '$pimage')";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                echo "Your Service provider details saved successfully";
                header('location: profiles.php?email='.$email);
            }else {
              echo "something wrong";
            }
            }else {
              $sql = "INSERT INTO customer (first_name, last_name, email, phone, address, district, password, gender) VALUES ('$fname', '$lname', '$email', '$phone', '$adrss', '$district', '$pswrd', '$gender')";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                header('location: profile.php');
            }else {
              echo "something wrong";
            }
            }
   	     }else {
   	     	
           echo '<script>alert("Password and confirm password not equal ")</script>';
   	     //	header('register.php');
   	     }

   }
?>