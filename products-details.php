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
<!--=========== Header ============-->
    <?php include("includes/header.php") ?>



    <!-- ======= blog oopening Section ======= -->
    <section id="blog" class="blog" style="padding-top: 100px;">
      <div class="container">
        <?php
            while($row=mysqli_fetch_array($display_product)){
        ?>
        <div class="section-title">
          <h3><?php echo $row['pname'] ?></h3>
        </div>
        <div class="row content">
          <div class="col-lg-6 pt-4 pt-lg-0 order-1 order-lg-1 content aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
            <div id="blog-img" class="blog-img">
              <img class="" src="admin/<?php echo $row['pimage'];?>" alt="First slide">
            </div>
          </div>
          <div class="col-lg-6 order-2 order-lg-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="150">
              <p><?php echo $row['pdes'] ?></p>
            <h6><b>To Buy Products  <a href="#contact">Click Me</b></a></h6>
            <p>
              <br>
              <table class="table table-bordered">
                <thead>
                  <h5>Product Details:</h5>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Minimum Order Quentity</th>
                    <td>200 Kilogram</td>
                  </tr>
                  <tr>
                    <th scope="row">Product Type</th>
                    <td>Submersible winding copper wire</td>
                  </tr>
                  <tr>
                    <th scope="row">Conductor Type</th>
                    <td>	Solid</td>
                  </tr>
                  <tr>
                    <th scope="row">Insulation</th>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <th scope="row">Wire Type</th>
                    <td>Submersible</td>
                  </tr>
                  <tr>
                    <th scope="row">Condition</th>
                    <td>	New</td>
                  </tr>
                  <tr>
                    <th scope="row">Swg</th>
                    <td>	.5 to 2.2</td>
                  </tr>
                  <tr>
                    <th scope="row">Diameter</th>
                    <td>	3-5 mm, 0.02 - 1 mm, 1-3 mm</td>
                  </tr>
                  <tr>
                    <th scope="row">Material</th>
                    <td>	Copper</td>
                  </tr>
                </tbody>
              </table>
              <h6>  We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
                 Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h6>

            </p>
        </div>
      </div>
    <?php } ?>
      </div>
    </section>

    <!-- End blog opening Section -->









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
