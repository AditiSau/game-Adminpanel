<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link href="vendors/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

*
{
  box-sizing: 0;font-family: arial;
  
}
.first{
  width: 100%;
  height: 620px;
 
 background-image: url("files/future-gaming.gif");
 background-color: darkslategrey;
 background-repeat: no-repeat;
 background-attachment: fixed;
  background-position: center;
  background-size: 100%;
   background-blend-mode: lighten;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: Slategrey;text-decoration: none;
  color:pink; border-radius: 10px;

}

.active {
  background-color: skyblue;color: Slategrey;

}
.active:hover
{
  background-color: Slategrey;
  color:white;text-decoration: none; border-radius: 10px;

}
.contact
{
  background-color: SlateGrey;padding:2% ;
}
.second
{
  text-align: center;
  padding: 18% 23%;
}
</style>
</head>
<body>
<div class="first">
<ul>
  <li><a href="index.html" style="color: gold; font-size: 15px;font-family: arial;">LOTUS</a></li>
  <li><a href="#home">Home</a></li>
 
  <li><a href="#contact">Contact</a></li>
  <li style="float:right "><a class="active" href="login.php">Log In</a></li>
</ul>
<section  style="color: white;" class="d-flex align-items-center">

    <div class="second">
      <div >
        <div >
          <h1 style="font-size: 60px; "> Welcome to Lotus</h1>
          <h3 >“You’re off to great places, today is your day. Your mountain is waiting, so get on
            your way.”</h3>
          <a href="login.php" style="font-size: 20px; "class="btn btn-warning">Get Started</a>
        </div>
      </div>
    </div>

  </section>
</div>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title" >
        <h2 style=" text-align: center;
  padding: 3% 23%;color:white;">CONTACT US<hr></h2>
      </div>

      <div class="row" style="color: white;"data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="fa fa-circle"><h3>Our Address</h3></i>
                
                <p> INDIA</p><hr>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="fa fa-circle"><h3>Email Us</h3></i>
                
                <p>info@lotus.in</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="fa fa-circle"> <h3>Call Us</h3></i>
               
                <p> +91-7976192712 </p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-6">
          <form class="row g-3" method="POST" action="">
            <div class="col-md-6">
              <label for="" class="form-label">Name</label>
              <input type="text" name="a" placeholder="Enter Your Name" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="" class="form-label">Email</label>
              <input type="email" name="b" placeholder="Enter Your Email" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="" class="form-label">Mobile</label>
              <input type="text" name="c" class="form-control" id="inputAddress" placeholder="Enter Your Mobile Number">
            </div>

            <div class="col-12">
              <div class="">
                <textarea class="form-control" name="d" placeholder="Leave a comment here" id="floatingTextarea2"
                  style="height: 200px"></textarea>
                
              </div>
            </div>




           <div class="col-12">
              <a type="submit" name="submit" style="padding:1% 10%;"class="btn btn-info">Sign in</a>
            </div>
          </form>
        </div>

      </div>
  </section><!-- End Contact Section -->
<footer class="footer">
  <hr>
<div class="container-fluid"  >

  <center > <div class="row">
    <div class="col-sm-12"style="color: black; font-size: 12px;">
      Copyright
      @Lotus.
    </div>
<div class="col-sm-12"style="color: black; font-size: 12px;">
     Designed by Indomitech.
    </div>
  </div></center>
   
</div>
<hr>
</footer>

</body>
</html>


