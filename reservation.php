<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reservation Form</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form action="connect.php" method="POST">
								<div class="form-group">
                                    <label for="firstName">Your Name</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="firstName"
                                      name="firstName"
                                    >
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">

                                            <label for="date">Check In</label>
                                            <input
                                              class="form-control"
                                              type="date"
                                              data="date"
																							name="date"
                                            >
                                            
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="date1">Check out</label>
                                            <input
                                              class="form-control"
                                              type="date"
                                              data1="date1"
																							name="date1"
                                            >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">

											<span class="form-label">Rooms</span><br>
                                            <input type="radio" id="male" name="gender" gender="1">
                                            <label for="male">1</label><br>
                                            <input type="radio" id="female" name="gender" gender="2">
                                            <label for="female">2</label><br>
                                            <input type="radio" id="other" name="gender" gender="3">
                                            <label for="other">3</label>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span><br>
                                            <input type="radio" id="male" name="gender1" gender1="1">
                                            <label for="male">1</label><br>
                                            <input type="radio" id="female" name="gender1" gender1="2">
                                            <label for="female">2</label><br>
                                            <input type="radio" id="other" name="gender1" gender1="3">
                                            <label for="other">3</label>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span></br>
                                            <input type="radio" id="male" name="gender2" gender2="1">
                                            <label for="other">0</label></br>
                                            <input type="radio" id="other" name="gender2" gender2="0" >
                                            <label for="male">1</label><br>
                                            <input type="radio" id="female" name="gender2" gender2="2">
                                            <label for="female">2</label><br>
                                            <input type="radio" id="other" name="gender2" gender2="3">
                                            <label for="other">3</label>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Book</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>