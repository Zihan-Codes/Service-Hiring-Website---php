<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>HAND TO YOUR DOOR STEP</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
    <link href="css/prcss.css" rel="stylesheet">
    <style>
      body {
        background-image: url("img/content.png");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
		table {width:100%;}
      </style> 
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
              <a href="index.html" class="brand brand-bootbus">HAND TO YOUR DOOR STEP</a>
              <!-- Below button used for responsive navigation -->
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                </button>
                <!-- Start: Primary navigation -->
                <div class="nav-collapse collapse">        
                 <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                                 
                        <li class="divider"></li>
                        <li class="nav-header">SERVICES</li>
                        <li><a href="service.html">Service1</a></li>
                        <li><a href="service.html">Service2</a></li>
                        <li><a href="service.html">Service3</a></li>
                        <li><a href="all_services.html">All services</a></li>
                     </ul>                  
                    </li>
               
                    <li><a href="faq.html">Feedback</a></li>
                    <li><a href="contact_us.html">Contact us</a></li>
                    <li><a href="signup.html" class="active-link">Sign up</a></li>
                    <li><a href="signin.html">Sign in</a></li>
                 </ul>
                </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->
<!-- Start: MAIN CONTENT -->
<div class="content">
    <!-- Start: SERVICE LIST -->
    <div class="container">
        <div class="page-header">
        <h1>Profiles</h1>
        </div>

    <!-- Control buttons -->
        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('Plumber')"> Plumber</button>
            <button class="btn" onclick="filterSelection('Vegetable Shop Keeper')"> Vegetable Shop Keeper</button>
            <button class="btn" onclick="filterSelection('Grocery Shop Keeper')"> Grocery Shop Keeper</button>
            <button class="btn" onclick="filterSelection('Butcher')">Butcher </button>
            <button class="btn" onclick="filterSelection('Fish Shop Keeper')">Fish Shop Keeper </button>
            <button class="btn" onclick="filterSelection('Carpenter')">Carpenter </button>
            <button class="btn" onclick="filterSelection('Electrical Worker')"> Electrical Worker</button>
            <button class="btn" onclick="filterSelection('Electonic Worker')">Electonic Worker </button>
            <button class="btn" onclick="filterSelection('Cleaner')">Cleaner </button>
            <button class="btn" onclick="filterSelection('Helper')">Helper </button>
            <button class="btn" onclick="filterSelection('Mechanics')">Mechanics </button>
        </div>

        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="filterDiv Plumber" class="span3">
                  <div class="thumbnail">
                  
                    <div class="caption">
                      <h3>Plumber</h3>
                      <p>
                        Get fits and repairs the pipes, fittings, and other apparatus of water supply, sanitation, or heating systems
                      </p>
                      <?php 
                         $sql = "SELECT * FROM service_provider WHERE service_provider='Plumber'";
                         $reslt = mysqli_query($conn, $sql);

                         if($reslt){
                           if(mysqli_num_rows($reslt) > 0){
                             while ($row = $reslt->fetch_assoc()){
                              $sid = $row["id"];
                               $fname = $row["first_name"];
                               $lname = $row["last_name"];
                               $district = $row["district"];
                               $profile = $row["imageurl"];
                               

                             ?>
                               <table width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="2"><input type="button" name="button" id="button" value="Hire"></td>
                          </tr>
                          <tr>
                            <td width="60"><img src="profilepic/<?=$profile?>" alt="profile pic"/></td>
                            <td width="327"><p>Full Name: <?php echo $fname; ?> <?php echo $lname; ?></p>
                       <p>Age:35</p>
                         <p>Distric: <?php echo $district; ?></p>
                       <p>Service Rating:4.5</p></td>
                          </tr>
                          <tr>
                            <td><input type="button" name="button2" id="button2" value="Chat"></td>
                
                  
                      <?php echo '<td><a href="feedback.php?sid='.$sid.'"><button>Comment</button></a></td>'; ?>
                      <?php echo '<td><a href="show feedbacks.php?sid='.$sid.'"><button>See feedbacks</button></a></td>'; ?>
                   
                
                          </tr>
                          <tr><hr></tr>
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

        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="filterDiv Grocery Shop Keeper" class="span3">
                  <div class="thumbnail">
                  
                    <div class="caption">
                      <h3>Grocery Shop Keeper</h3>
                      <p>
                        Get Most grocery things, like foods, books, helth and beuty item, toys, and etc.
                      </p>
                      <?php 
                         $sql = "SELECT * FROM service_provider WHERE service_provider='Grocery Shop keeper'";
                         $reslt = mysqli_query($conn, $sql);

                         if($reslt){
                           if(mysqli_num_rows($reslt) > 0){
                             while ($row = $reslt->fetch_assoc()){
                              $sid = $row["id"];
                               $fname = $row["first_name"];
                               $lname = $row["last_name"];
                               $district = $row["district"];
                               $profile = $row["imageurl"];

                             ?>
                               <table width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="2"><input type="button" name="button" id="button" value="Hire"></td>
                          </tr>
                          <tr>
                           <td width="60"><img src="profilepic/<?=$profile?>" alt="profile pic"/></td>
                            <td width="327"><p>Full Name: <?php echo $fname; ?> <?php echo $lname; ?></p>
                       <p>Age:35</p>
                         <p>Distric: <?php echo $district; ?></p>
                       <p>Service Rating:4.5</p></td>
                          </tr>
                          <tr>
                            <td><input type="button" name="button2" id="button2" value="Chat"></td>
                <?php echo '<td><a href="feedback.php?sid='.$sid.'"><button>Comment</button></a></td>'; ?>
                <?php echo '<td><a href="show feedbacks.php?sid='.$sid.'"><button>See feedbacks</button></a></td>'; ?>
                          </tr>
                           <tr><hr></tr>
                        </tbody>
                      </table>
                             <?php


                             }
                           }
                         }
                      ?>
                     
                      <p></p>

                      

                    </div>
                  </div>
                </li>
              </ul>
        </div>

        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="filterDiv Butcher" class="span3">
                  <div class="thumbnail">
                  
                    <div class="caption">
                      <h3>Butcher</h3>
                      <p>
                        Get meat like chicken, mutton, beef, pork and etc.
                      </p>
                       <?php 
                         $sql = "SELECT * FROM service_provider WHERE service_provider='Butcher'";
                         $reslt = mysqli_query($conn, $sql);

                         if($reslt){
                           if(mysqli_num_rows($reslt) > 0){
                             while ($row = $reslt->fetch_assoc()){
                              $sid = $row["id"];
                               $fname = $row["first_name"];
                               $lname = $row["last_name"];
                               $district = $row["district"];
                               $profile = $row["imageurl"];

                             ?>
                               <table width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="2"><input type="button" name="button" id="button" value="Hire"></td>
                          </tr>
                          <tr>
                            <td width="60"><img src="profilepic/<?=$profile?>" alt="profile pic"/></td>
                            <td width="327"><p>Full Name: <?php echo $fname; ?> <?php echo $lname; ?></p>
                       <p>Age:35</p>
                         <p>Distric: <?php echo $district; ?></p>
                       <p>Service Rating:4.5</p></td>
                          </tr>
                          <tr>
                            <td><input type="button" name="button2" id="button2" value="Chat"></td>
                 <?php echo '<td><a href="feedback.php?sid='.$sid.'"><button>Comment</button></a></td>'; ?>
                 <?php echo '<td><a href="show feedbacks.php?sid='.$sid.'"><button>See feedbacks</button></a></td>'; ?>
                          </tr>
                           <tr><hr></tr>
                        </tbody>
                      </table>
                             <?php


                             }
                           }
                         }
                      ?>
                     

                      <p></p>

                      
                    </div>
                  </div>
                </li>
              </ul>
        </div>

        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="filterDiv Fish Shop Keeper" class="span3">
                  <div class="thumbnail">
                  
                    <div class="caption">
                      <h3>Vegetable Shop keeper</h3>
                      <p>Get fish item like seafoods, tuna fish, catle fish, salmon fish and etc.</p>
                      <?php 
                         $sql = "SELECT * FROM service_provider WHERE service_provider='Vegetable Shop keeper'";
                         $reslt = mysqli_query($conn, $sql);

                         if($reslt){
                           if(mysqli_num_rows($reslt) > 0){
                             while ($row = $reslt->fetch_assoc()){
                              $sid = $row["id"];
                               $fname = $row["first_name"];
                               $lname = $row["last_name"];
                               $district = $row["district"];
                               $profile = $row["imageurl"];

                             ?>
                               <table width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="2"><input type="button" name="button" id="button" value="Hire"></td>
                          </tr>
                          <tr>
                            <td width="60"><img src="profilepic/<?=$profile?>" alt="profile pic"/></td>
                            <td width="327"><p>Full Name: <?php echo $fname; ?> <?php echo $lname; ?></p>
                       <p>Age:35</p>
                         <p>Distric: <?php echo $district; ?></p>
                       <p>Service Rating:4.5</p></td>
                          </tr>
                          <tr>
                            <td><input type="button" name="button2" id="button2" value="Chat"></td>
                <?php echo '<td><a href="feedback.php?sid='.$sid.'"><button>Comment</button></a></td>'; ?>
                <?php echo '<td><a href="show feedbacks.php?sid='.$sid.'"><button>See feedbacks</button></a></td>'; ?>
                          </tr>
                           <tr><hr></tr>
                        </tbody>
                      </table>
                             <?php


                             }
                           }
                         }
                      ?>

                      <p></p>

                      
                     
                    </div>
                  </div>
                </li>
              </ul>
        </div>

 
        

        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="filterDiv Electrical Worker" class="span3">
                  <div class="thumbnail">
                  
                    <div class="caption">
                      <h3>Electrical Worker</h3>
                      <p>
                        Get plan, install and maintain electrical wiring systems across a wide variety of environments.
                      </p>
                      <?php 
                         $sql = "SELECT * FROM service_provider WHERE service_provider='Electrician'";
                         $reslt = mysqli_query($conn, $sql);

                         if($reslt){
                           if(mysqli_num_rows($reslt) > 0){
                             while ($row = $reslt->fetch_assoc()){
                              $sid = $row["id"];
                               $fname = $row["first_name"];
                               $lname = $row["last_name"];
                               $district = $row["district"];
                               $profile = $row["imageurl"];

                             ?>
                               <table width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="2"><input type="button" name="button" id="button" value="Hire"></td>
                          </tr>
                          <tr>
                            <td width="60"><img src="profilepic/<?=$profile?>" alt="profile pic"/></td>
                            <td width="327"><p>Full Name: <?php echo $fname; ?> <?php echo $lname; ?></p>
                       <p>Age:35</p>
                         <p>Distric: <?php echo $district; ?></p>
                       <p>Service Rating:4.5</p></td>
                          </tr>
                          <tr>
                            <td><input type="button" name="button2" id="button2" value="Chat"></td>
             <?php echo '<td><a href="feedback.php?sid='.$sid.'"><button>Comment</button></a></td>'; ?>
             <?php echo '<td><a href="show feedbacks.php?sid='.$sid.'"><button>See feedbacks</button></a></td>'; ?>
                          </tr>
                           <tr><hr></tr>
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



        



        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="filterDiv Helper" class="span3">
                  <div class="thumbnail">
                  
                    <div class="caption">
                      <h3>Helper</h3>
                      <p>Get helps for you or your group with a job you doing. Assistant, partner, ally, colleague.</p>
                      <?php 
                         $sql = "SELECT * FROM service_provider WHERE service_provider='Helper'";
                         $reslt = mysqli_query($conn, $sql);

                         if($reslt){
                           if(mysqli_num_rows($reslt) > 0){
                             while ($row = $reslt->fetch_assoc()){
                              $sid = $row["id"];
                               $fname = $row["first_name"];
                               $lname = $row["last_name"];
                               $district = $row["district"];
                               $profile = $row["imageurl"];

                             ?>
                               <table width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="2"><input type="button" name="button" id="button" value="Hire"></td>
                          </tr>
                          <tr>
                             <td width="60"><img src="profilepic/<?=$profile?>" alt="profile pic"/></td>
                            <td width="327"><p>Full Name: <?php echo $fname; ?> <?php echo $lname; ?></p>
                       <p>Age:35</p>
                         <p>Distric: <?php echo $district; ?></p>
                       <p>Service Rating:4.5</p></td>
                          </tr>
                          <tr>
                            <td><input type="button" name="button2" id="button2" value="Chat"></td>
                <?php echo '<td><a href="feedback.php?sid='.$sid.'"><button>Comment</button></a></td>'; ?>
                <?php echo '<td><a href="show feedbacks.php?sid='.$sid.'"><button>See feedbacks</button></a></td>'; ?>
                          </tr>
                           <tr><hr></tr>
                        </tbody>
                      </table>
                             <?php


                             }
                           }
                         }
                      ?>
                     <p></p>

                     
                    </div>
                  </div>
                </li>
              </ul>
        </div>


        <div class="row-fluid">
            <ul class="thumbnails">
                <li class="filterDiv Mechanics" class="span3">
                  <div class="thumbnail">
                  
                    <div class="caption">
                      <h3>Mechanics</h3>
                      <p>Get inspecting, servicing and repairing vehicles, machinery. monitor inventory and assemble mechanical components.</p>
                       <?php 
                         $sql = "SELECT * FROM service_provider WHERE service_provider='Mechanician'";
                         $reslt = mysqli_query($conn, $sql);

                         if($reslt){
                           if(mysqli_num_rows($reslt) > 0){
                             while ($row = $reslt->fetch_assoc()){
                              $sid = $row["id"];
                               $fname = $row["first_name"];
                               $lname = $row["last_name"];
                               $district = $row["district"];
                               $profile = $row["imageurl"];

                             ?>
                               <table width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="2"><input type="button" name="button" id="button" value="Hire"></td>
                          </tr>
                          <tr>
                            <td width="60"><img src="profilepic/<?=$profile?>" alt="profile pic"/></td>

                            <td width="327"><p>Full Name: <?php echo $fname; ?> <?php echo $lname; ?></p>
                       <p>Age:35</p>
                         <p>Distric: <?php echo $district; ?></p>
                       <p>Service Rating:4.5</p></td>
                          </tr>
                          <tr>
                            <td><input type="button" name="button2" id="button2" value="Chat"></td>
                <?php echo '<td><a href="feedback.php?sid='.$sid.'"><button>Comment</button></a></td>'; ?>
                <?php echo '<td><a href="show feedbacks.php?sid='.$sid.'"><button>See feedbacks</button></a></td>'; ?>
                          </tr>
                           <tr><hr></tr>
                        </tbody>
                      </table>
                             <?php


                             }
                           }
                         }
                      ?>

                      <p></p>

                      
                    </div>
                  </div>
                </li>
              </ul>
        </div>

        

        <!-- End: SERVICE LIST -->
    </div>
</div>
<!-- End: MAIN CONTENT -->




     <!-- Start: FOOTER -->
     <footer>
        <div class="container">
          <div class="row">
            <div class="span2">
              
              <h4><i class="icon-cogs icon-white"></i> Services</h4>
              <nav>
                <ul class="quick-links">
                  <li><a href="service.html">Service1</a></li>
                  <li><a href="service.html">Service2</a></li>
                  <li><a href="service.html">Service3</a></li>
                  <li><a href="all_services.html">All services</a></li>              
                </ul>
              </nav>
            </div>
           
            <div class="span2">
              <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
              <nav>
                <ul class="quick-links">
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="contact_us.html">Contact us</a></li>            
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </footer>
      <!-- End: FOOTER -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/boot-business.js"></script>
      <script type="text/javascript" src="js/prjs.js"></script>
    </body>
  </html>
