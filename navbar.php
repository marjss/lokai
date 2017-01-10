<div class="header navbar-fixed-top">
		<div class="container-fluid">
			<div class="logo">
				<h1><a href="<?php echo HOME_URL; ?>"><img src="images/logo.png" alt="Logo" ></a></h1>
			</div>
			<div class="nav-left">
				<img src="images/menu-lines.png" alt="">
                 <span class="menutext">MENU</span>
			</div>
		 <nav id="sidebar-wrapper">
			<div class="closeIcon"><img src="images/close.png" alt=""></div>
				<ul class="sidebar-nav">
	<li><a href="#page1">Welcome</a></li>
	<li><a href="#page2">Helping Veterans</a></li>
	<li><a href="#page3">Source</a></li>
	<li><a href="#page4">Directly from</a></li>
	<li><a href="#page5">Directly from</a></li>
	<li><a href="#page6">Composition</a></li>
	<li><a href="#page7">Thank you</a></li>
				</ul>
			</nav>
			<div class="nav-right">
					<ul class="social-icon">
		    <li><a href="#" target="_blank" class="tw-icon"><img src="images/tw-icon.png" alt=""></a></li>
			<li><a href="#" target="_blank" class="insta-icon"><img src="images/insta-icon.png" alt=""></a></a></li>
		</ul>		
		<ul class="other-ul">
		    <li><a href="#" ><img src="images/cart.png" alt=""> Cart </a></li>
                    <?php if(isset($_SESSION['status']) && $_SESSION['status'] == 'verified') 
                                {
                                //Twitter Session
                                $screen_name 		= $_SESSION['request_vars']['screen_name'];
                                $twitter_id			= $_SESSION['request_vars']['user_id'];
                                $oauth_token 		= $_SESSION['request_vars']['oauth_token'];
                                $oauth_token_secret = $_SESSION['request_vars']['oauth_token_secret'];
                                $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $oauth_token, $oauth_token_secret);
                                ?>
                                <li><a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="js:doLogout();"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                              <?php  } else 
                                  //Instagram Session
                                  if(isset($_SESSION['user']->access_token) && !empty($_SESSION['user'])) {
                                      
                                      
                                      ?>
                                  <li>
                                      <!--<a href="#" onclick="js:doLogout();"><img src="images/logout.png" alt="logout"> Logout </a>-->
                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="js:doLogout();"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                                  </li>
                             <?php } elseif(isset($_SESSION['email'])){ ?>
                                 <li>
                                      <a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="js:doLogout();"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                                  </li>
                             <?php } else { ?>
                                    <li><a href="#" data-toggle="modal" data-target="#login" ><img src="images/login.png" alt=""> Login </a></li>
                            <?php    }
                                ?>
			
		</ul>			
			</div>
		</div>
	</div>