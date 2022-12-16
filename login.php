<!doctype html>
<html lang="en">
  <head>
  	<title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/pic.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h4 class="mb-4">Login</h4>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center" style="text-decoration: none;"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center" style="text-decoration: none;"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<!-- <form class="signin-form"> -->
							<form action="Code.php" method="POST" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label ><h6 style="color: black;"><b>username</b></h6></label>
                   <input type="text" name="Username" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group">
                 <label ><h6 style="color: black;"><b>Password</b></h6></label>
                  <input type="password" name="Password" class="form-control" >
              </div>
		            <div class="form-group">
		            	<button type="submit" name="login_btn" class="form-control btn btn-primary rounded submit px-3  colore" style="background-color: orange !important;">Sign In</button>
		            </div>
		            
		          </form>
		          <!-- </form> -->
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

