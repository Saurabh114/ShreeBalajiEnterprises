<?php 
require 'Admin/config.php';
    $query="select * from products";
    $display_product=mysqli_query($con,$query);


 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shree Balaji Enterprises - Wholesale Trader of Submersible Wire &amp; Copper Winding Wire from Pune</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <link rel="stylesheet" href="https://unpkg.com/flickity@2.0.11/dist/flickity.min.css">

<!-- Font awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Favicons -->
  <link href="assets/images/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2.2.2/dist/flickity.min.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/carousel.css" rel="stylesheet">
</head>

<body>
  <style type="text/css">
.zoom {
  padding: 50px;
  background-color: transparent;
  transition: transform .2s; /* Animation */
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.8); 
}
</style>
<!--=========== Header ============-->
    <?php include("includes/header.php") ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1 style="color:#fff;">Shree Balaji <span>Enterprises </span> </h1>
      <h2 style="color:#fff;"> Wholesale Trader of Submersible Wire &amp; Copper Winding Wire from Pune</h2>
      <div class="d-flex">
        <a href="products.php#portfolio" class="btn-get-started scrollto">Our Products</a>
        <a href="" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"><b style="color:#fff">Corporate Video</b> <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->
<!-- https://www.youtube.com/watch?v=zwv3_mC4XNs&feature=emb_logo -->




  <main id="main">

    <section id="carousel" class="carousel-section">
      <div class="section-title" style="padding-left: 90px;padding-right: 90px;">
    <h3 style="padding-bottom:15px;">Our <span>Products</span></h3>
    <h5 > <b>Shree Balaji Enterprises </b>is a dependable name in the market as wholesaler and trader of Automobile Products, established in 2012. </h5>
      <hr>
    </div>
    
      <div class="carousel-wrapper">
        <div class="carousel" data-flickity='{ "autoPlay": true }' data-aos="zoom-in" data-aos-delay="10">
          <?php
            while($row=mysqli_fetch_array($display_product)){
?>
          <div class="carousel-cell active">
            <h6><?php echo $row['pname'] ?></h6>
            <img class="zoom" src="Admin/<?php echo $row['pimage'];?>" alt="">
            <span class="more"><a class="btn btn-outline-primary btn-sm" href="products.php#vagalesub" role="button">Explore More</a></span>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3 style="margin-top:40px;">About<span> Us</span></h3>
          <br />
          <h5>We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
             Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h5>
<hr>
          </div>

        <div class="row">
          <div class="col-lg-4 col-md-3  pt-2 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul>
              <li>
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <div>
                  <h5>Nature Of Business</h5>
                  <p>Wholesale Traders</p>
                </div>
              </li>
              <li>
                <i class="fa fa-gavel" aria-hidden="true"></i>
                <div>
                  <h5>Legal Status Of Firm</h5>
                  <p>Individual Proprietor</p>
                </div>
              </li>

            </ul>
              </div>
          <div class="col-lg-4 col-md-3 pt-2 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">

            <ul>
              <li>
                <i class="fa fa-users" aria-hidden="true"></i>
                <div>
                  <h5>Total Number Of Employees</h5>
                  <p>26 To 50 People</p>
                </div>
              </li>
              <li>
                <i class="fa fa-money" aria-hidden="true"></i>
                <div>
                  <h5>Annual Turnover</h5>
                  <p>Rs. 25 to 50 Crore</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-3 pt-2 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul>
              <li>
                <i class="fa fa-building-o" aria-hidden="true"></i>
                <div>
                  <h5>Year Of Estabilishment</h5>
                  <p>2012</p>
                </div>
              </li>
              <li>
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                <div>
                  <h5>GST No.</h5>
                  <p>27CIEPS5499B3ZT</p>
                </div>
              </li>
            </ul>

          </div>
          <div class="col-lg-3 col-md-2" >
          </div>
          <div class="col-lg-3 col-md-2" >
          </div>
          <div class="col-lg-3 col-md-2" >
          </div>
          <div class="col-lg-3 col-md-2" style="padding-bottom:5px;">
            <a class="btn btn-outline-primary" href="about.php#about-details" role="button">Know More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->





    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="section-title">
          <h3 style="color:#fff;"><span>Tell Us</span> What Your Looking For <span>?</span></h3>
          <br>
          </div>

        <form >
          <div class="row">
          <div class="col-lg-2"> </div>
          <div class="form-group col-lg-8">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Describe Your Requiremnets in details:"></textarea>
          </div>
          <div class="col-lg-2"></div>
        </div>

        <div class="row">
          <div class="col-lg-2"></div>
          <div class="form-group col-lg-4">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Contct Number">
          </div>

          <div class="form-group col-lg-4">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
          </div>
          <div class="col-lg-2"></div>
        </div>
        </form>
        <div style="text-align:center; padding-top: 10px;">
          <button type="button" href="#" class="btn btn-primary">Submit Query</button>
        </div>
      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3><span>Ratings</span><span style="color: #40b4db"> & </span> Reviews</h3>
        </div>
        <hr>

        <div class="row skills-content">
          <div class="col-lg-2">

          </div>
          <div class="col-lg-4">
            <div class="ratings">
              <h4><b>Shree Balaji Enterprises</b></h4>
              <h3><span >3.6<span style="font-size:18px;">/5</span></span></h3>
              <div class="star">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star-half-o checked"></span>
              <span class="fa fa-star-o checked"></span>
              </div>
              <h6>Rated By 26 Users</h6>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="progress ">
                <span  class="skill "><i  class="fa fa-star checked"></i> 5<i class="val">14</i></span>
              <div class="progress-bar-wrap" style="background: #ebfff5;">
                <div class="progress-bar" style="background-color: #258219;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span  class="skill "> <i  class="fa fa-star checked"></i> 4<i class="val">1</i></span>
              <div class="progress-bar-wrap" style="background: #ebfff9;">
                <div class="progress-bar" style="background-color: #4beb98;" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
                <span  class="skill "> <i  class="fa fa-star checked"></i> 3<i class="val">4</i></span>
              <div class="progress-bar-wrap" style="background: #fffeeb;">
                <div class="progress-bar" style="background-color: yellow;" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
                <span  class="skill "> <i  class="fa fa-star checked"></i> 2<i class="val">0</i></span>
              <div class="progress-bar-wrap" style="background: #fffbeb;">
                <div class="progress-bar" style="background-color: orange;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
                <span  class="skill "> <i  class="fa fa-star checked"></i> 1<i class="val">7</i></span>
              <div class="progress-bar-wrap" style="background: #ffebeb;">
                <div class="progress-bar" style="background-color: #de1b1b;" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-2">

          </div>
        </div>
        <hr>
      </div>
    </section>
    <!-- End Skills Section -->


  <!--============ Footer ===============-->

    <?php include("includes/footer.php") ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://unpkg.com/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>


</body>

</html>
