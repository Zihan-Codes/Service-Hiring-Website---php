<?php include 'register.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Hand To Your Doorstep | SERVICE PROVIDING WEB APPLICATION</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">

    <style type="text/css">
      .service-role{
        text-align: left;
        padding-left: 40%;
      }
    </style>
  </head>
  <body style="background-image: url(img/content.png);  background-repeat: no-repeat;
  background-attachment: fixed; background-size: cover;">
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->

      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
           
            <a href="index.html" class="brand brand-bootbus"> Hand To Your Doorstep</a>
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">PRODUCTS</li>
                    <li><a href="product.html">Product1</a></li>
                    <li><a href="product.html">Product2</a></li>
                    <li><a href="product.html">Product3</a></li>
                    <li><a href="all_products.html">All products</a></li>             
                    <li class="divider"></li>
                    <li class="nav-header">SERVICES</li>
                    <li><a href="service.html">Service1</a></li>
                    <li><a href="service.html">Service2</a></li>
                    <li><a href="service.html">Service3</a></li>
                    <li><a href="all_services.html">All services</a></li>
                  </ul>                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.html">Our works</a></li>
                    <li><a href="patnerships.html">Parnerships</a></li>
                    <li><a href="leadership.html">Leadership</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </li>
                <li><a href="faq.html">FEEDBACK</a></li>
                <li><a href="contact_us.html">CONTACT US</a></li>
                <li><a href="signup.html">SIGN UP</a></li>
                <li><a href="signin.html">SIGN IN</a></li>
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
      <div class="container">
        <div class="page-header">
          <h1>REGISTRATION FORUM</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-gift"></i> Be a part of us!</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup" action="signup.php" method="post" enctype="multipart/form-data">
                  <input type="text" name="F_Name" placeholder="Enter Your First Name">
                  <input type="text" name="L_Name" placeholder="Enter Your Last Name">
                   <input type="text" name="Address" placeholder="Enter Your Address">
                    <input type="text" name="District" placeholder="Enter Your District">
                    <br>
                   <input  type="radio" name="Gender"  value="Female"> Female 
                    <input type="radio" name="Gender" value="Male"> Male <br>

                 
                  <input type="text" name="Email" placeholder="Enter Your Email">
                   <input type="text" name="Phone_No" placeholder="Enter Your Phone Number">
                   <br>
                   <input  type="radio" name="User"  value="Service Provider" > Service Provider 
                    <input  type="radio" name="User"  value="customer" > Customer<br>
                    <hr>
                    <p>If you are a service provider, please fill your Service</p><br>
                    <div class="service-role">
                      <input  type="radio" name="service"  value="Plumber" checked> Plumber<br>
                    <input  type="radio" name="service"  value="Electrician" > Electrician<br>
                    <input  type="radio" name="service"  value="Mechanician"> Mechanician<br>
                    <input  type="radio" name="service"  value="Helper"> Helper<br>
                    <input  type="radio" name="service"  value="Vegetable Shop keeper"> Vegetable Shop keeper<br>
                    <input  type="radio" name="service"  value="Grocery Shop keeper"> Grocery Shop keeper<br>
                    <input  type="radio" name="service"  value="Butcher"> Butcher<br>
                    </div>
                    <div>
                      <h3>Please add your profile pic</h3>
                      <input type="file" name="prfl">
                    </div>
                    <hr>
    
                  <input type="password" name="password" placeholder="Password">
                  <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                  <div>
                    <input type="submit" value="Signup" class="btn btn-primary btn-large" name="save">
                  </div>
                </form>
                <h4><i class="icon-question-sign"></i> Already have an account?</h4>
                <a href="signin.html" class="btn btn-large bottom-space">Signin</a>
                <h4><i class="icon-thumbs-up"></i> Sign in with third party account</h4>
                <ul class="signin-with-list">
                  <li>
                    <a class="btn-twitter">
                      <i class="icon-twitter icon-large"></i>
                      Signin with Twitter
                    </a>
                  </li>
                  <li>
                    <a class="btn-facebook">
                      <i class="icon-facebook icon-large"></i>
                      Signin with Facebook
                    </a>
                  </li>
                  <li>
                    <a class="btn-google">
                      <i class="icon-google-plus icon-large"></i>
                      Signin with Google
                    </a>
                  </li>
                  <li>
                    <a class="btn-github">
                      <i class="icon-github icon-large"></i>
                      Signin with Github
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-star icon-white"></i> Products</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="product.html">Product1</a></li>
                <li><a href="product.html">Product2</a></li>
                <li><a href="product.html">Product3</a></li>
                <li><a href="all_products.html">All products</a></li>
              </ul>
            </nav>
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
            <h4><i class="icon-beaker icon-white"></i> About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="our_works.html">Our works</a></li>
                <li><a href="patnerships.html">Patnerships</a></li>
                <li><a href="leadership.html">Leadership</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="blog.html">Blog</a></li>
              <ul>
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
            <h4><i class="icon-legal icon-white"></i> Legal</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">License</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Security</a></li>      
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="icon-google-plus"></i></a>              
              <a href="#"><i class="icon-github"></i></a>
              <a href="mailto:soundar.rathinasamy@gmail.com"><i class="icon-envelope"></i></a>        
            </div>
            <div class="social-icons-row">
              <i class="icon-phone icon-large phone-number"></i> +919750227877
            </div>
          </div>      
          <div class="span3">
            <h4>Get updated by email</h4>
            <form>
              <input type="text" name="email" placeholder="Email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; 2012-3000 Bootbusiness, Inc. All Rights Reserved.
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>