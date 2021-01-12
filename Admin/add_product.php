
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="img/favicon.ico" rel="icon">

  <title>Add Product</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php
        include 'sidebar.php';
    ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Add New Product</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Product</li>
              <li><i class="fa fa-files-o"></i>Add Product</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Product Details
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action='add_Product_script.php' enctype="multipart/form-data">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action='add_product_script.php' enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Product Title<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="title" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2"> Product Summary <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="summary" required />
                        <input class="form-control" id="cname" name="pname"  type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Product Description<span class="required">*</span></label>
                      <div class="col-lg-10">
<<<<<<< HEAD:Admin/add_products.php
                          <textarea class="form-control ckeditor" name="product" rows="6"></textarea>
=======
                        <textarea class="form-control" id="cname" name="pdes"  type="text" required></textarea>
>>>>>>> 16eb664dbb461c11cd47a7d00af18ee64d8e1214:Admin/add_product.php
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="image" class="control-label col-lg-2">Product Image</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="image" type="file" name="image" accept="image/*"  required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit" value="submit">Save</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">


        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
