<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Bootstrap Table Reservation Form Template Design</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="tablestyle.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Table Reservation Form -->
    <form action="book.php" method="post">
    <div class="container">
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">
            <div class="row">
    			<div class="col-md-8 offset-md-2 text-center">
    				<h2 class="text-primary">Book A Table</h2>
    			</div>
    		</div>
              <div class="form-row">
                <div class="col-lg-4 col-md-6 form-group">
                  <label for="name">Enter Your Name:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="email">Enter Your email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="phone">Enter Your Phone Number:</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="date">Enter date for booking:</label>
                    <input type="date" name="date" class="form-control" id="date" placeholder="Date">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                  <label for="time">Enter your preferred time:</label>
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time">
                </div>
                <div class="col-lg-4 col-md-6 form-group">
                  <label for="people">Enter Number of people coming:</label>
                    <input type="number" class="form-control" name="people" id="people" placeholder="No. of people">
                </div>
              </div>
              <button type="submit" class="btn btn-primary float-right mt-3">Book a Table</button>
        </div>
    </section>
  </div>
    <!-- End Table Reservation Form -->
</body>
</html>