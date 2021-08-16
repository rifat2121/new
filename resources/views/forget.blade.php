<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	
	
	<link rel="stylesheet" type="text/css" href="/css/c.css">

	<link rel="stylesheet" type="text/css" href="/css/d.css">


 
 
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/opol.jpg');">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="{{URL::to('/forget')}}"  method="post">
					@csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                     <br>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username" >
					User Type<select id="input"  name="name" required>
							
						
							 <option value="">None</option>
							<option value="studentadvisor">Studentadvisor</option>
							<option value="proctor">proctor</option>
							<option value="hcell">Hcell</option>
							<option value="student">student</option>
							<option value="admin">admin</option>
							<option value="VC">VC</option>

						</select>
						<span class="" data-placeholder="&#xf207;"></span>
					</div>
                    
                    


					<div class="wrap-input100 validate-input" data-validate = "Enter username" >
						<input class="input100" required="required" type="text" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					

					  <div class="wrap-input100 validate-input" data-validate = "Enter username" >
						<input class="input100" required="required" type="text" name="food" placeholder="Enter your favourite food(use lower letter)">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


					  <div class="wrap-input100 validate-input" data-validate = "Enter username" >
						<input class="input100" required="required" type="text" name="hobby" placeholder="Enter your hobby(use lower letter)">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


					  <div class="wrap-input100 validate-input" data-validate = "Enter username" >
						<input class="input100" required="required" type="text" name="colour" placeholder="Enter favourite colour(use lower letter)">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                         
                          <div class="wrap-input100 validate-input" data-validate = "Enter username" >
						<input class="input100" required="required" type="text#" name="password" placeholder="Enter new password">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>



                            <input type="hidden" name="_token" value="{{csrf_token()}}">
					       
					       


					<div class="container-login100-form-btn">
						<button type="submit" name="button" class="login100-form-btn">
							Submit
						</button>
                         

					</div>

				</form>

           <br>

				

                

				 <div>
                      	
                      	<a href="/" class="btn btn-sm btn-info mb-2">Home </a>
                           </div>




			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/public/js/main.js"></script>

</body>
</html>