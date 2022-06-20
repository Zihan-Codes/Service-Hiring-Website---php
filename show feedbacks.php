<?php 
  include 'db.php';

  if (isset($_GET['sid'])) 
  {
    // code...
    $sid = $_GET['sid'];
    

    $sql = "SELECT * FROM service_provider WHERE id='".$sid."'";
    $res = mysqli_query($conn, $sql);

    if ($res) 
    {
    	if(mysqli_num_rows($res) > 0)
    	{
            while ($row = $res->fetch_assoc())
            {
            	$fname = $row["first_name"];
            	$lname = $row["last_name"];
            	
            }

        }
    }
    }

  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show feedbacks</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="author" content="Your name">

    <title>feedback| Hand to Your Doorstep</title>
    <link  href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
    <link  href="assets/css/Responsive-feedback-form-1.css" rel="stylesheet">
    <link  href="assets/css/Responsive-feedback-form.css" rel="stylesheet">
    <link  href="assets/css/styles.css" rel="stylesheet">
   
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
    <link rel="shortcut icon" href="img\logo2.png">
    <style>
      body {
        background-image: url("img/content.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      </style> 

</head>
<body>
	<?php
	  include 'header.php';
	 ?>

     <!-- Start: MAIN CONTENT -->
<div class="content">
    <!-- Start: SERVICE LIST -->
    <div class="container">
    	 <div class="row-fluid">
            <ul class="thumbnails">
                <li class="filterDiv Plumber" class="span3">
                  <div class="thumbnail">
                  
                    <div class="caption">
                    	<h3 style="margin-bottom: 20px;"><?php  echo $fname." ".$lname."'s Service feedbacks..." ?></h3>

                    	<?php
                    	   $sql2 = "SELECT * FROM customer_reviews WHERE sid='".$sid."'";
                    	   $res2 = mysqli_query($conn, $sql2);

                    	   if ($res2) {
                    	   	  if(mysqli_num_rows($res2) > 0)
    	                        {
                                  while ($row = $res2->fetch_assoc())
                                    {
                                    	$cname = $row["customer_name"];
                                    	$cemail = $row["email"];
                                    	$comment = $row["comment"];

                                    	?>
                                    	 <table width="100%" border="0">
                                    	 	<tbody>
                                    	 		<tr>
                                    	 			<td><h4>Customer Name: </h4></td>
                                    	 			<td><?php echo $cname; ?></td>
                                    	 		</tr>
                                    	 		<tr>
                                    	 			<td><h4>Customer Email: </h4></td>
                                    	 			<td><?php echo $cemail; ?></td>
                                    	 		</tr>
                                    	 		<tr>
                                    	 			<td><h4>Feedback: </h4></td>
                                    	 			<td><?php echo $comment; ?></td>
                                    	 		</tr>
                                    	 		<hr>
                                    	 	</tbody>
                                    	 </table>
                                    	<?php
                                    }
                                }
                    	   }
                    	 ?>


                    </div>
                  </div>
                </li>
            </ul>
         </div>
    </div>
</div>



	 <?php 
	   include 'footer.php';
	 ?>


</body>
</html>