  
  <?php
  
  function nav($currect_page)
  {
	  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ; // current page url
	  $url = end($url_array);  
	  if($currect_page == $url){
		  echo 'active'; //class name in css 
	  } 
  }
  
  ?>
  
  
  <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item <?php echo nav('/')?>">
                                 <a class="nav-link" href="/">Home</a>
                              </li>
                              <li class="nav-item <?php echo nav('about')?>">
                                 <a class="nav-link" href="about">About</a>
                              </li>
                              <li class="nav-item <?php echo nav('glasses')?>">
                                 <a class="nav-link" href="glasses">Our Glasses</a>
                              </li>
                              <li class="nav-item <?php echo nav('shop')?>">
                                 <a class="nav-link" href="shop">Shop</a>
                              </li>
                              <li class="nav-item <?php echo nav('contact')?>">
                                 <a class="nav-link" href="contact">Contact Us</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="login">Login</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="signup">Register</a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->