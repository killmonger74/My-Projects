 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<meta name="keywords"content="ITG,chamoli,Gopeshwar,Engineering chamoli">
		<title>Institute Of Technology Gopeshwar</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/icomoon/style.css" rel="stylesheet" type="text/css">
		<link rel="icon"href="HERO.png">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet"href="mahakaal.css">
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		
		<div class="site-content">
			<div class="container">
				<main class="main-content">
					<div class="content" style="margin-left:15%">
						<header class="site-header">
							<a href="" class="logo"><img src="logo.png" alt=""></a>
							<div class="header-type" style="transform: translateY(-25px);">
								<h1>Institute of Technology<br> Gopeshwar</h1>
								<div class ="HOME"><button class="button dummy"><a href="index.html">Apply</a></button></div>
								
							</div>
							<div id="button">
									<button class="hamburger">&#9776;</button>
									<button class="cross">&#735;</button></div>
									  <div id = "menu">   
										   <ul class="catch after">    
											  <li class="grapes after">
												<a href = "index.html"id="active">HOME</a>
									
									
										 
									
									   </li>    
										   <li class="grapes after"><a href = "#">Academics</a>
									
										  <ul class="name after">
											<li class="name1"><a href ="Academic.php">Programmes</a></li>
											 <li class="name1"><a href ="Academic.php">Fees & Expenses</a></li>
											  <li class="name1"><a href ="Academic.php">Ordinance</a></li>
											   <li class="name1"><a href ="Academic.php">Apply online</a></li>
									</ul>
									
									
									
									
									   </li>     
										  <li class="grapes after"><a href = "#">Departments</a>
									
										  <ul class="name after"> <li class="name1"><a href ="department.php">Civil Engineering</a></li>
											<li class="name1"><a href ="department.php">C.S.E</a></li>
											
											
											   <li class="name1"><a href ="department.php">Electrical Engineering</a></li>  <li class="name1"><a href="department.php">E.C.E</a></li>
											  <li class="name1"><a href ="department.php">Mechnical Engineering</a></li>
											
											</ul>
									
									
									
									   </li>  
											 <li class="grapes after"><a href = "#">Facilities</a>
											<ul class="name after">
											  <li class="name1"><a href="Facilities.php">Infrastructure</a></li>
											  <li class="name1"><a href="Facilities.php">Library</a></li>
											  <li class="name1"><a href="Facilities.php">Canteen</a></li> 
											  <li class="name1"><a href="Facilities.php">NPTEL</a></li>
											  <li class="name1"><a href="Facilities.php">Labs</a></li>
											</ul>
											
											
											</li>  
										  <li class="grapes after "><a>Informatics</a>
											<ul class="name after">
											  <li class="name1"><a href="login.php">Dashboard</a></li>
											  <li class="name1"><a>Events</a></li>
											</ul>
										  </li>
										 </ul>  
	    									</div>
						</header> <!-- .site-header -->

                        <div class="dep1">
                            <div class="cse">
                            <div class="Feedback"style="text-align:center;padding:100px;background:#2f7fc2">
                          <?php 
                         $firstname=$_POST['firstname'];
                         $lastname=$_POST['lastname'];
                         $emailadress=$_POST['emailadress'];
                         $phonenumber=$_POST['phonenumber'];
                         $street=$_POST['Street'];
                         $city=$_POST['city'];
                         $zip=$_POST['zip'];
                         $branch=$_POST['option'];
 

                        $con=mysqli_connect("localhost","root");

                        mysqli_select_db($con,"session");

                           $q="select * from imp where firstname='$firstname' && lastname='$lastname' && emailadress='$emailadress'&& branch='$branch' && phonenumber='$phonenumber'&& street='$street'&& city='$city'&& zip='$zip'";
                        $result=mysqli_query($con,$q);
                        $num=mysqli_num_rows($result);
                        if(num==1){
                           echo"duplicate data";
                       }
                                               else{
  
                           $qy="insert into imp (firstname,lastname,emailadress,phonenumber,street,branch,city,zip) values('$firstname','$lastname','$emailadress','$phonenumber','$street','$branch','$city','$zip')";
                           mysqli_query($con,$qy);
  
   
                           echo "<h1 > Thankyou for your feed back</h1><br>";
    

                       }
 
                     ?>
                            </div>

                            </div>
                        </div>


                    </div>
				</main>

				<footer class="site-footer"style="">
					<p>Copyright &copy; Institute of Technology Gopeshwar. All rights reserved</p>

					<div class="social-links">
						<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
							
					</div>
					<div class="info">
							<div class="contact"><h3>Contact Us</h3></div>
							<div class="aboutus"><h3>About us</h3></div>
						</div>
				</footer>
				
			</div>

		</div>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="corosel.js"></script>
		<script src="js/app.js"></script>
		<script src="humburger.js"></script>
		<script src="dropdown.js"></script>
		<script src="news.js"></script>
		<script src="news-slider.js"></script>
	</body>

</html>
