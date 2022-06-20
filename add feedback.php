<?php 
  include 'db.php';

   

  if (isset($_POST['submit'])) {
  	    $cname = $_POST['cname'];
  	    $email = $_POST['email'];
  	    $comment = $_POST['comment'];
        $sid = $_POST['sid'];
        echo $sid;

  	    $sql = "INSERT INTO customer_reviews (customer_name, email, comment, sid) VALUES ('$cname', '$email', '$comment', '$sid')";
  	    $res = mysqli_query($conn, $sql);

  	    if ($res) {
  	    	 echo '<script>alert("your comment saved successfully...")</script>';
           
  	    }else {
  	    	echo '<script>alert("couldn\'t save your comment...")</script>';
  	    }
  }
?>