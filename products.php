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

  <!-- bootstrap scripts -->
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


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
 
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); 
}
</style>
<!--=========== Header ============-->
    <?php include("includes/header.php") ?>



    <section id="hero" class="d-flex align-items-center">
      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1 style="color:#fff;">Automobile <span>Products </span> </h1>
        <h2 style="color:#fff;"> <span>W</span>e are a customer centric & quality conscious organization endeavor to provide qualitative range of Dr Beck Varnish,
          Fg Cable and Fiber Glass Cloth. Our products get immense appreciation from our clients owing to their quality, fine finishing, scratch resistant and environment friendliness.
           </h2>
        <div class="d-flex">
          <a href="#portfolio" class="btn-get-started scrollto">All Products</a>
          </div>
      </div>
    </section><!-- End Hero -->




    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Check our <span>Products</span></h3>
        </div>
        <p>We are a customer centric & quality conscious organization endeavor to provide qualitative range of Dr Beck Varnish, Fg Cable and Fiber Glass Cloth.
           Our products get immense appreciation from our clients owing to their quality, fine finishing, scratch resistant and environment friendliness.</p>

           <div class="row" data-aos="fade-up" data-aos-delay="100">
             <div class="col-lg-12 d-flex justify-content-center">
               <ul id="portfolio-flters">
                 <h4>
                 <li data-filter="*" class="filter-active">All</li>
                 <li id="wire" data-filter=".filter-wire">Wires</li>
                 <li id="cooper-wire" data-filter="filter-copperwire">Copper Wires</li>
                 <li id="cables" data-filter=".filter-cable">Cables</li>
                 <li id="varnish" data-filter=".filter-varnish">Varnish</li>
                 <li id="bearing" data-filter=".filter-bearing">Ball Bearing</li>
                 <li id="grease" data-filter=".filter-grease">SKF Grease</li>
                 <li id="subpaper" data-filter=".filter-paper">Submersible Paper</li>
                 <li id="rubbertube" data-filter=".filter-tube">Omega Rubber Tube</li>
                 <li id="gsleeves" data-filter=".filter-sleeves">Fiber Glass Sleeves</li>
               </h4>
               </ul>
             </div>
           </div>


        <div id="vagalesub" class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
<?php
            while($row=mysqli_fetch_array($display_product)){
?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-wire">

            <div class="portfolio-info">
              
              <img src="Admin/<?php echo $row['pimage'];?>" class="zoom img-fluid" alt="">
              <h4><?php echo $row['pname'] ?></h4>
              <p><?php echo $row['pdes'] ?></p>
            
            <a type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#vagale">
              <p style="color: #0e49b5;">Click to know More </p>
            </a>

            </div>
          </div>

          <?php } ?>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>





  <!-- ================== Testimonials Section =================== -->
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
