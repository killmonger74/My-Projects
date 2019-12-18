<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <title>Login system</title>
                                <link rel="stylesheet"href="style.css">
                                <link rel="stylesheet" href="login.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <body>
       
		<div class="site-content">
			<div class="container">
				<main class="main-content">
					<div class="content">
						<header class="site-header">
							<a href="" class="logo"><img src="logo.png" alt=""></a>
							<div class="header-type" style="transform: translateY(-25px);">
                                <h1>Institute of Technology<br> Gopeshwar</h1>
                            </div>
                        </header>
                        
        <div class="flip">
            <div class="flip-again">
                    <div id ="front">
                        <form action="validate.php" method="POST">
                            <div class ="form-box">
                            <h1>Login Here</h1>
                            <div class="input-box">
                            <i class="fa fa-user" aria-hidden="true"></i>
                                <input  class="row"type="text" name="name1" placeholder="Enter Your name">
                            </div>
                            <div class ="input-box">
                            <i class="fa fa-envelope-o" aria-hidden="true" ></i>
                             <input type="email"name="email" placeholder="Email.id" required id="lol">
                            
                           </div>
                            <div class ="input-box">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <input type="password"  name="password"placeholder="Password" required id="kuldeep">
               
                          <span class="eye" > 
        
                         <i id="hide1" class="fa fa-eye-slash" aria-hidden="true"></i>
        
                           <i id="hide" class="fa fa-eye" aria-hidden="true" ></i>
                
                        </span>
                         </div>
                            <div>
                              <a href="login.html"> 
                                  <button type="submit" id="button1">Login</button></a>
          
                                </form>
                             <a id ="forget" href="#"style="color:black text-decoration: dashed;" > 
                             Create New Account</a>
      
                              </div>

   
                     </div>
                </div>

            <div id="back">
                  <div class ="form-box">
                      <h1>Sign Up Here</h1>
                      <form action="registration.php" method="POST">
                          <div class="input-box">
                          <i class="fa fa-user" aria-hidden="true"></i>
                             <input class ="row" type ="text" name="name" placeholder="Name"required >
                          </div>
                          <div class ="input-box">
                             <i class="fa fa-envelope-o" aria-hidden="true"></i>
                              <input type="email" name="email1"placeholder="Email.id" required  id="lol1">
                               </div>
                           <div class ="input-box">
                               <i class="fa fa-key" aria-hidden="true"></i>
                                <input type="password" name="password1"placeholder="Choose a Password"  required autofocus id="kuldeep1">
               
                               <span class="eye" > 

                                    <i id="hide2" class="fa fa-eye-slash" aria-hidden="true" ></i>
        
                                   <i id="hide3" class="fa fa-eye" aria-hidden="true"></i>
                
                              </span> 

                          </div>
                     <div class="input-box">
                          <i class="fa fa-key" aria-hidden="true"></i>
                             <input type="password"name="password2" placeholder="Confirm Password" reqiured id="rana">
                            <?php 
                            if($_POST[password1]!=$_POST[password2]){
                                echo "wrong password";
                                header("Location:login.php");
                            }?>
                         <span class="eye" > 
        
                              <i id="hide4" class="fa fa-eye-slash" aria-hidden="true"></i>
           
                             <i id="hide5" class="fa fa-eye" aria-hidden="true"></i>
                   
                          </span> 
                     </div>
            
            
                           <div>
                                 <a href="#">   <button type="submit" id="button">Create Account</button></a>
                            </div>
                            </form>
                            
            
            
                           <div>
                                <a href="#"   id="button7">already having a account?</a>
                           </div>
                 </div>



     </div>
					</div>
                        </main>
            </div>
		</div>
  <script src="login.js"></script>
</body>
</html>