<?php include 'db.php';
      include 'header.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Serivice Provider Profile</title>

 	<style type="text/css">
 		
 		.img-align{
 			margin-left: auto;
 			margin-right: auto;
 			width: 20%;
 			display: block;
 		}
 		.s-name{
 			color:  #2980b9;
 		}
 		.profile-content{
 			text-align: center;
 			border-style: double;
 			width: 30%;
 			margin-left: auto;
 			margin-right: auto;
 			display: block;
 			margin-bottom: 20px;
 		}
 		.profile-content-2{
 			text-align: left;
 			margin-right: auto;
 			margin-left: auto;
 			display: block;
 			padding-left: 20%;
 		}
 	</style>
 </head>
 <body>
    
    <?php
      if ($_GET['email']) {
      	  $emailid = $_GET['email'];
      	  

      	  $sql = "SELECT * FROM service_provider WHERE email='".$emailid."'";
          $reslt = mysqli_query($conn, $sql);

          if ($reslt) {
          	  if (mysqli_num_rows($reslt)>0) {
          	  	  while ($row = $reslt->fetch_assoc()){
          	  	  	$sid = $row["id"];
                    $fname = $row["first_name"];
                    $lname = $row["last_name"];
                    $district = $row["district"];
                    $profile = $row["imageurl"];
                    $service = $row["service_provider"];
                    $email = $row["email"];

                    ?>
                       <div style="">
                       	<div>
                       		<button>Messages</button>

                       	</div>
                       	 <h1 style="text-align: center;">Welcome <span class="s-name"><?php echo $fname." ".$lname; ?>...</span></h1>
                       <img class="img-align" src="profilepic/<?=$profile?>" alt="profile pic"/>
                       <div class="profile-content">
                       	 <h3>Your Service</h3>
                       	 <hr>
                       	 <div class="profile-content-2">
                       	 	<p>First Name : <?php echo$fname; ?></p>
                       	 <p>Last Name : <?php echo  $lname; ?></p>
                       	 <p>Full Name : <?php echo $fname." ".$lname; ?></p>
                       	 <p>Service : <?php echo $service; ?></p>
                       	 <p>Email : <?php echo $email; ?></p>
                       	 </div>
                       </div>
                       </div>
                    <?php
          	  	  }

          	  }
          }

      }else {
      	echo "passed email is not passed.";
      }
     ?>
 </body>
 </html>

 <?php include 'footer.php'; ?>