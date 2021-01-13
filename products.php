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

<!--=========== Header ============-->
    <?php include("includes/header.php") ?>


<style>
.filterDiv {
 
 float: left;
  display: none;
}

.show {
  display: inline-block; ;
}



/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;

  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}


</style>






<script>
window.onload = function(){
filterSelection("all");
};
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>




    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" style="padding-top:150px;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Check our <span>Products</span></h3>
        </div>
        <p>      <span style="font-size:20px;">We</span> are a customer centric & quality conscious organization endeavor to provide qualitative range of Dr Beck Varnish,
          Fg Cable and Fiber Glass Cloth. Our products get immense appreciation from our clients owing to their quality, fine finishing, scratch resistant and environment friendliness.
          </p>

           <div id="product-filter" class="row" data-aos="fade-up" data-aos-delay="100">
             <div class="col-lg-12 d-flex justify-content-center">
               <ul id="portfolio-flters">
                <div id="myBtnContainer"  >
                 <h4 >
              <li class="btn filter-active"  onclick="filterSelection('all')" >All</li>   
              <li class="btn" onclick="filterSelection('Wires')" >Wires</li>
              <li class="btn" onclick="filterSelection('Copper Wires')" >Copper Wires</li>
              <li class="btn" onclick="filterSelection('Cables')" >Cables</li>
              <li class="btn" onclick="filterSelection('Varnish')" >Varnish</li>
              <li class="btn" onclick="filterSelection('Ball Bearing')"  >Ball Bearing</li>
              <li class="btn" onclick="filterSelection('SKF Grease')" >SKF Grease</li>
              <li class="btn" onclick="filterSelection('Submersible Paper')"  >Submersible Paper</li>
              <li class="btn" onclick="filterSelection('Omega Rubber Tube')"  >Omega Rubber Tube</li>
              <li class="btn" onclick="filterSelection('Fiber Glass Sleeves')" >Fiber Glass Sleeves</li>
               </h4>
               </div>
               </ul>
             </div>
           </div>


        <div  id="vagalesub" class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
<?php
            while($row=mysqli_fetch_array($display_product)){
?>
          <div class="col-lg-4 col-md-6 portfolio-item filterDiv <?php echo $row['pcategory'] ?>">

<<<<<<< Updated upstream

            <div class="portfolio-info filterDiv <?php echo $row['pcategory'] ?>">
=======
            <div class="portfolio-info ">
>>>>>>> Stashed changes
              
              <img src="Admin/<?php echo $row['pimage'];?>" class="zoom " alt="">
              <h4><?php echo $row['pname'] ?></h4>
              <p><?php echo $row['price'] ?></p>
            

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




<!--Model Popo-up-->

       <div class="modal fade" id="vagale" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>VAGALE Submersible Copper Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 505 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
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
             </div>
             <div style="padding-left:20px;">
             <h6>  We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
                Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h6>
           </div>
             <div class="modal-footer">
               <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Get Latest Price & Buy</a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="windingWire" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Submersible Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 35 / Meter
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>100 Meter</td>
                   </tr>
                   <tr>
                     <th scope="row">Number of Core</th>
                     <td>3</td>
                   </tr>
                   <tr>
                     <th scope="row">Armoured</th>
                     <td>	Yes</td>
                   </tr>
                   <tr>
                     <th scope="row">Brand</th>
                     <td>RR Kabel, Finolex, OCI, Polycab</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6>We are one of the most reliable companies in this domain and are into offering <b>Submersible Pump Winding Wire.</b></h6>
             <h6><b>Features</b></h6>
             <ul>
               <li>Rust proof</li>
               <li>Excellent conductivity</li>
               <li>Withstand high tension</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="enameled" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>RR Shramik Enameled Copper Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 590 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>200 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Wire Gauge</th>
                     <td>15-20</td>
                   </tr>
                   <tr>
                     <th scope="row">Size</th>
                     <td>	15 SWG TO 42 SWG</td>
                   </tr>
                   <tr>
                     <th scope="row">Material</th>
                     <td>COPPER</td>
                   </tr>
                   <tr>
                     <th scope="row">Shape</th>
                     <td>ROUND</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Type</th>
                     <td>Solid</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6>We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
                Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h6>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="drvarnish" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Dr. Varnish</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 190 / Litre
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>15 Litre</td>
                   </tr>
                   <tr>
                     <th scope="row">Brand</th>
                     <td>DR BECK</td>
                   </tr>
                   <tr>
                     <th scope="row">Packaging</th>
                     <td>Bottle</td>
                   </tr>
                   <tr>
                     <th scope="row">QTY</th>
                     <td>	900 ML</td>
                   </tr>
                   <tr>
                     <th scope="row">SHELVES LIFE</th>
                     <td>1 YEAR</td>
                   </tr>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6><b>WINDING VARNISH</b><br>offering Dr. Beck Insulating Varnish, Packaging: 900 ML at Rs 190/LTR</h6>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="skfbearing" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>SKF Bearing</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 196 / Piece
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We are offering <b>SKF Bearing</b> to our clients. Our prestigious vendors make use of superior grade raw material and most
                 advanced engineering science in order to manufacture the finest quality range of wares. Our guests can avail these
                  products in varied specifications from us at almost sensible cost range.</h6>
             </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="skftube" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>SKF Grease Tube</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 55 / Milli liter
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>In order to cater the variegated demands of our clients, we are offering an excellent quality range of <b>SKF Grease Tube.</b>
                  These are well packed and are offered at the best and economical price range.</h6>
                  <h6><b>Features :</b></h6>
                  <ul>
                    <li>Advanced quality</li>
                    <li>Huge applications</li>
                    <li>Reliable</li>
                  </ul>
             </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="paper" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Garware polyster paper</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 160 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>50 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">GSM</th>
                     <td>150 - 200</td>
                   </tr>
                   <tr>
                     <th scope="row">Color</th>
                     <td>White</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6>Being one of the largest companies, we are involved in offering a quality range of <b>Submersible Paper</b> to our
               esteemed clients. These round paper cores have been fabricated using quality raw material and advanced machinery.
                Our paper cores come in customized dimensions, sizes and designs to meet the requirements of our valued clients</h6>
                <h6><b>Features :</b></h6>
                <ul>
                  <li>Premium quality</li>
                  <li>Durable</li>
                  <li>Reliable</li>
                </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="rubberTape" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Omega Rubber tape</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 200 / Unit
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>15 Unit</td>
                   </tr>
                   <tr>
                     <th scope="row">Brand</th>
                     <td>Omega</td>
                   </tr>
                   <tr>
                     <th scope="row">Usage/Feature</th>
                     <td>Double Side Usage</td>
                   </tr>
                   <tr>
                     <th scope="row">Backing Material</th>
                     <td>N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Color</th>
                     <td>N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">MOQ</th>
                     <td>N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Total Thickness</th>
                     <td>N/A</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6>Omega Multipurpose Compound Rubber Used for Cable Jointing ... Home Improvement, Hardware, Tapes, Adhesives & Sealers, Omega Multipurpose Compound Rubber Used ... Use of Compound Rubber:- Submersible Cable Joints.</h6>
                <h6><b>Additional Info:</b></h6>
                <ul>
                  <li><b>Delivery Time:</b> immidiate</li>
                  <li><b>Packaging Details:</b> in 1 cartoons -30 units</li>
                </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="sleeves" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Fiber Sleeves</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 250 / Packet
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>fiber class insulating sleeves</td>
                   </tr>
                   <tr>
                     <th scope="row">Size</th>
                     <td>1 mm to 15 mm</td>
                   </tr>
                   <tr>
                     <th scope="row">Packing Size</th>
                     <td>100</td>
                   </tr>
                   <tr>
                     <th scope="row">Is It Durability</th>
                     <td>Durability</td>
                   </tr>
                   <tr>
                     <th scope="row">Chemical Resistant</th>
                     <td>Yes</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6>We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
               Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h6>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="rrcable" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>R R Cable</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Contact us to get Best Price
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Brand</th>
                     <td>RR Kable</td>
                   </tr>
                   <tr>
                     <th scope="row">color</th>
                     <td>Black</td>
                   </tr>
                   <tr>
                     <th scope="row">Size</th>
                     <td>	1.5,2.5,4,6</td>
                   </tr>
                   <tr>
                     <th scope="row">Number Of Core</th>
                     <td>	N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Stranding</th>
                     <td>	N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Nominal Voltage</th>
                     <td>	N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Max. Bending Radius</th>
                     <td>	N/A</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6><b>R R Cabel </b>Ratnaflex Flexible (Is 694) Cable designed for internal wiring in switch control, relay and instrumentation panels of power
               switchgear and for purposes such as stationary, static appliances, internal connectors in rectifier equipment, motor starters and controllers.</h6>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>


       <div class="modal fade" id="balajiWinding" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Balaji Submersible Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 490 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>50 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Weight</th>
                     <td>10</td>
                   </tr>
                   <tr>
                     <th scope="row">Material</th>
                     <td>	SUBMERSIBLE COPPER WIRE</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Material</th>
                     <td>	Copper</td>
                   </tr>
                   <tr>
                     <th scope="row">Insulation Material</th>
                     <td>Enameled</td>
                   </tr>
                   <tr>
                     <th scope="row">Diameter/Size</th>
                     <td>0.6 TO 1.5</td>
                   </tr>
                   <tr>
                     <th scope="row">Type</th>
                     <td>	Insulated</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Type</th>
                     <td>	Stranded</td>
                   </tr>
                   <tr>
                     <th scope="row">Color</th>
                     <td>	GOLDEN</td>
                   </tr>
                   <tr>
                     <th scope="row">Features</th>
                     <td>	SELF PRODUCTION</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6><b>WE ARE THE MANUFACTURER OF THIS WIRE.SUPPER D WIRE</b></h6>
             <h6><b>Additional Info. :</b></h6>
             <ul>
               <li><b>Item Code:</b> 8544</li>
               <li><b>Packaging Details:</b> THIS WIRE IS SOFT AND LOW RATE,<br>AND SUPPER D WIRE</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="laurel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Laurel Copper Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 545 / Piece
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>1 Piece</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Material</th>
                     <td>	Copper</td>
                   </tr>
                   <tr>
                     <th scope="row">Brand</th>
                     <td>Laurel</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6>We manufacture a wide range of Copper Wires, which is drawn into various thicknesses to cater to different requirements
                 of the world-wide clients. Copper Winding Wire is manufactured by us using the latest machinery and properly finished to improve
                 its endurance and other properties. We can provide Tin Coated Copper Wire and Annealed Copper Wire in bulk and that too at the most competitive
                 rate in the industry. As a result, we are recognized as a Copper Wire Rods Manufacturer and Exporter from India. Each batch of Copper Wire undergoes strict
                 checking to ensure matchless quality on different parameters.</h6>
              <h6>Copper Wire Rods are drawn down to thick (8 - 1 mm), medium (1 - 0.40 mm), Fine and Superfine (0.40 - 0.05 mm) diameters.
                  Wires can be produced as Tin coated, bare, and hard or annealed according to the customer’s demands. Our annealed copper wire,
                  tin coated copper wire, copper winding wire etc are of top quality.</h6>
                  <h6>These Copper wires are available in different forms such as :</h6>
              <ul>
                <li>Fields of Application</li>
                <li>Winding Wire</li>
                <li>Cables</li>
                <li>Transformers</li>
                <li>Telecommunication</li>
                <li>Railways</li>
                <li>Braiding etc.</li>
              </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="drbeck" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Dr Beck Varnish</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 186 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We have in-depth knowledge in the field of offering an extensive range of <b>Dr Beck Varnish</b> is formulated using high grade base material.
                  It is formulated using high grade base material and with the help of current tools and technology under the guidance of talented professionals at our vendors' premises.</h6>
                  <h6><b>Features :</b></h6>
                  <ul>
                    <li>Smooth functioning</li>
                    <li>Easy installation</li>
                    <li>Compact design</li>
                  </ul>
                  <h6><b>Additional Info :</b></h6>
                  <ul>
                    <li><b>Minimum Order Quantity:</b> 100 Kilogram</li>
                  </ul>
             </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="capital" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Capital Submersible Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 510 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>100 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Material</th>
                     <td>	Copper</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6>We are one of the most reliable companies in this domain and are into offering <b>Submersible Pump Winding Wire.</b></h6>
             <h6><b>Features :</b></h6>
             <ul>
                <li>Rust proof</li>
                <li>Excellent conductivity</li>
                <li>Withstand high tension</li>
              </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="rrshram" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>RR Shramik Enameled Copper Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 590 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>200 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Wire Gauge</th>
                     <td>	15-20</td>
                   </tr>
                   <tr>
                     <th scope="row">Size</th>
                     <td>	15 SWG TO 42 SWG</td>
                   </tr>
                   <tr>
                     <th scope="row">Material</th>
                     <td>	COPPER</td>
                   </tr>
                   <tr>
                     <th scope="row">Shape</th>
                     <td>ROUND</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Type</th>
                     <td>	Solid</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
             <h6>We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
               Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h6>
             <h6><b>Features :</b></h6>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="skfgrease" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>RR Shramik Enameled Copper Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 590 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>For valued patrons, we are indulged in providing <b>SKF Grease </b>to the clients. The offered grease is very widely used for the
                 lubrication of ball bearings, spherical bearings, thrust bearings and super precision bearings. Our supplied grease is available at
                 very economic market selling rates.</h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Features :</b></h6>
             <ul>
               <li>Good rust protection</li>
               <li>Effective solid lubricant</li>
               <li>Superior wear protection</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="rrflat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>R R Flat cable</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 35 / Meter
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>100 Meter</td>
                   </tr>
                   <tr>
                     <th scope="row">Size</th>
                     <td>	1.5 square MM.</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
               <h6>We are one of the most reliable companies in this domain and are into offering <b>Submersible Pump Winding Wire.</b></h6>
             <h6><b>Features :</b></h6>
             <ul>
               <li>Rust proof</li>
               <li>Excellent conductivity</li>
               <li>Withstand high tension</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="skfball" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>SKF Ball Bearing</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 196 / Piece
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>In tune with the diverse requirements of our clients, we are offering the best quality<b> SKF Ball Bearing.</b> The offered range of
                  bearings is manufactured at our vendors who manufacture using the modern technology to attain maximum client satisfaction.
                  Available in various designs, shapes and sizes, our offered range is suitable for various construction machinery industries. Moreover, our offered range can be availed by our clients at affordable prices.</h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Features :</b></h6>
             <ul>
               <li>Easy maintenance</li>
               <li>Robust construction</li>
               <li>Temperature resistance</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="swastik" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Swastik Super Enameled Cooper Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 525 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
                 Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Additional Information:</b></h6>
             <ul>
               <li><b>Minimum Order Quantity:</b> 100 Kilogram</li>
               <li>Robust construction</li>
               <li>Temperature resistance</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="polycab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Polycab Submersible Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 575 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We are one of the most reliable companies in this domain and are into offering??<br /><b>Submersible Pump Winding Wire.</b></h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Additional Information:</b></h6>
             <ul>
               <li><b>Material:</b> Copper</li>
               <li>Rust proof</li>
               <li>Excellent conductivity</li>
               <li>Withstand high tension</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="subpump" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Submersible Pump Cable</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 35 / Meter
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Number of Cores</th>
                     <td>1.5 - 6 Sq mm</td>
                   </tr>
                   <tr>
                     <th scope="row">Brand</th>
                     <td>Polycab</td>
                   </tr>
                   <tr>
                     <th scope="row">Size</th>
                     <td>N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Core Material</th>
                     <td>N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Usage/Application</th>
                     <td>N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Part Number</th>
                     <td>N/A</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
               <h6>We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
                  Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h6>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="bearinggrease" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>SKF Bearing Grease</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 209 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We are one of the leading providers of <b>SKF Bearing Grease.</b> This grease is used as an excellent lubricant for ball bearings.
                  This exceptional grease also elongates the life span of a ball bearing.</h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Features:</b></h6>
             <ul>
               <li>Withstand high temperature environment</li>
               <li>Optimal viscosity</li>
               <li>Long lasting lubrication</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="jyoti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Jyoti Varnish</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 175 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We have in-depth knowledge in the field of offering an extensive range of <b>Dr Beck Varnish </b>is formulated using high grade base material.
                 It is formulated using high grade base material and with the help of current tools and technology under the guidance of talented professionals at our vendors' premises. </h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Features:</b></h6>
             <ul>
               <li>Smooth functioning</li>
               <li>Easy installation</li>
               <li>Compact design</li>
             </ul>
             <h6><b>Additional Info.:</b></h6>
             <ul>
               <li><b>Minimum Order Quantity:</b> 100 Kilogram</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="hch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>HCH Bearing</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 175 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
                  Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices. </h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Product Details:</b></h6>
             <ul>
               <li>HCH BEARING :- 35</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="polybest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Polybest Submersible Wires</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 598 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>200 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Usage/Application</th>
                     <td>	Electric</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Material</th>
                     <td>Enamelled Copper</td>
                   </tr>
                   <tr>
                     <th scope="row">Material</th>
                     <td>	Copper</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
               <h6>We are one of the most reliable companies in this domain and are into offering <b>Submersible Pump Winding Wire.</b></h6>
             <h6><b>Features :</b></h6>
             <ul>
               <li>Rust proof</li>
               <li>Excellent conductivity</li>
               <li>Withstand high tension</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="subflat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Submersible Flat Cable</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 598 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Number of Cores</th>
                     <td>1.5 - 6 Sq mm</td>
                   </tr>
                   <tr>
                     <th scope="row">Size</th>
                     <td>	N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Brand</th>
                     <td>Polycab</td>
                   </tr>
                   <tr>
                     <th scope="row">Core Material</th>
                     <td>	N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Usage/Application</th>
                     <td>	N/A</td>
                   </tr>
                   <tr>
                     <th scope="row">Part Number</th>
                     <td>	N/A</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
               <h6>We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
                 Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h6>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="mayur" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Mayur Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 515 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We are one of the most reliable companies in this domain and are into offering <b>Submersible Pump Winding Wire.</b></h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Features:</b></h6>
             <ul>
               <li>Rust proof</li>
               <li>Excellent conductivity</li>
               <li>Withstand high tension</li>
             </ul>
             <h6><b>Additional Info.:</b></h6>
             <ul>
               <li><b>Minimum Order Quantity:</b> 100 Kilogram</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="bic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>BIC Copper Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 592 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>200 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Wire Gauge</th>
                     <td>	15-20, >25, 10-15, 20-25</td>
                   </tr>
                   <tr>
                     <th scope="row">Insulation</th>
                     <td>Yes</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
               <h6>With the support of our dexterous team of professionals, we provide clients a high quality range of <b>BIC Copper Wire.</b>
                  With the help of our sound infrastructure facilities and well trained professionals, we are able to produce the best quality
                  copper wire in industry. Offered range is demanded in electrical, electronics, automotive and other engineering applications,
                   the range of copper wires is broadly used as overhead wires, in subways, electrically powered mine trains and industrial cranes.</h6>
             <h6><b>Features :</b></h6>
             <ul>
               <li>Resistant to heat</li>
               <li>Optimum tensile strength</li>
               <li>Minimum distortion</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="mayursub" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Mayur Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 515 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We are one of the most reliable companies in this domain and are into offering <b>Submersible Pump Winding Wire.</b></h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Features:</b></h6>
             <ul>
               <li>Rust proof</li>
               <li>Excellent conductivity</li>
               <li>Withstand high tension</li>
             </ul>
             <h6><b>Additional Information:</b></h6>
             <ul>
               <li><b>Minimum Order Quantity:</b> 100 Kilogram</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="p81" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>P81 Premier Varnish</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 140 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>Pioneer in the industry, we are engaged in offering an impeccable range of <b>P81 Premier Oils.</b> These primers are in tune with international
                 quality standards and can be used in cold condition. These bituminous primers can be availed from us at customer friendly prices.</h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Features:</b></h6>
             <ul>
               <li>Highly penetrative</li>
               <li>Excellent adhesion to most surfaces</li>
               <li>Easy to apply</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="polysub" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Polytech Submersible Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 505 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>100 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Material</th>
                     <td>Copper</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
               <h6>Our company is a pioneer in distribution of some of the finest quality <b>Polytech Submersible Wire.</b> Keeping in mind their end use
                 these products are specifically designed for underground use at the vendor’s end. Their great strength, functionality, durability,
                 reliability and stability make them widely popular in the industry and among our large score of customers.</h6>
             <h6><b>Features :</b></h6>
             <ul>
               <li>High conductivity</li>
               <li>Corrosion resistance</li>
               <li>Cost effectiveness</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="rrwinding" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>R R Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 525 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>100 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Material</th>
                     <td>	Copper</td>
                   </tr>
                   <tr>
                     <th scope="row">Conductor Type</th>
                     <td>	Insulated</td>
                   </tr>
                 </tbody>
               </table>
               <table class="table table-dark">
                 <thead>
                   <h5>RR Shramik Copper Winding WireProduct Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Conductor Material</th>
                     <td>Aluminum, Copper, Enamelled Copper</td>
                   </tr>
                   <tr>
                     <th scope="row">Diameter/Size</th>
                     <td>	All</td>
                   </tr>
                   <tr>
                     <th scope="row">Insulation Material</th>
                     <td>Enameled</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
               <h6>We offer a superior range of enamelled copper wires<b> RR Shramik Copper Winding Wireaiming</b> to cater the wide variety of applications
                 in the industry ranging from a common motor rewinding to most critical applications like in automobiles.<b> Enamelled copper winding wire</b>
                 is a film insulated copper (or aluminium) electrical conductor used in form of coil windings in motors, transformers, generators and
                 other electromagnetic equipments. When wound into coils, and energized, enamelled winding wire creates an electromagnetic field, which
                 is utilized to generate the required output form of energy – viz electrical to mechanical (or vice versa) electrical to electrical,
                 and electrical to magnetic energy.</h6>
             <h6><b>Super Enamelled Copper wires</b> are mainly used in domestic equipments,pumps, motors, stabilizers, transformers,
                fans,auto electricals,heavy duty domestic appliances, motors,compressors,large motors and generators</h6>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="pumpwimding" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>Submersible Pump Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 490 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <h6>We are one of the most reliable companies in this domain and are into offering<b> Submersible Pump Winding Wire.</b></h6>
             </div>
             <div style="padding-left:20px;">
             <h6><b>Features:</b></h6>
             <ul>
               <li>Rust proof</li>
               <li>Excellent conductivity</li>
               <li>Withstand high tension</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>


       <div class="modal fade" id="rrsub" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content" style="background-image: linear-gradient(to right, #c6ebc9, #fff); color: #222; backdrop-filter: blur(10px);">
             <div class="modal-header" style="text-align:center;">
               <h4 class="modal-title" id="exampleModalLongTitle" ><b>R R Submarsible Winding Wire</b></h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div style="padding-left:20px;">
               <h6>Approx. Price: Rs 535 / Kilogram
                <a href="#contact" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Contact</a>
               </h6>
             </div>
             <div class="modal-body" style="padding-top:4px;">
               <table class="table table-bordered">
                 <thead>
                   <h5>Product Details:</h5>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row">Minimum Order Quantity</th>
                     <td>100 Kilogram</td>
                   </tr>
                   <tr>
                     <th scope="row">Material</th>
                     <td>Copper</td>
                   </tr>
                 </tbody>
               </table>
             </div>
             <div style="padding-left:20px;">
               <h6>We are one of the most reliable companies in this domain and are into offering <b>Submersible Pump Winding Wire.</b></h6>
             <h6><b>Features :</b></h6>
             <ul>
               <li>Rust proof</li>
               <li>Excellent conductivity</li>
               <li>Withstand high tension</li>
             </ul>
           </div>
             <div class="modal-footer">
               <a href="#testimonials" type="button" class="scrollto" data-dismiss="modal" aria-label="Close">Have any Queries <b>Ask Here</b></a>
             </div>
           </div>
         </div>
       </div>
     </div>

   <!-- End Model Popo-up -->



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
