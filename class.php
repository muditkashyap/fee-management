<?php
    include('database/genuine_checker.php'); 
?>

<!DOCTYPE html>
 <html>
     <head>

         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta name="description" content="FEE SOLUTIONS Is a Fee Management System- Developed by Mudit Kashyap" />
         <meta name="author" content="Mudit Kashyaps" />
         <link rel="shortcut icon" href="assets/images/logo.png" />
         <title>FEE MANAGEMENT SYSTEM- FEE SOLUTIONS </title>

         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
         <script src="assets/js/modernizr.min.js"></script>

         <!-- FONT AWSOME CDN -->
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

     </head>


     <body class="fixed-left">

         <!-- Begin page -->
         <div id="wrapper">

             <!-- Top Bar Start -->
                <?php require 'top-bar.php' ?>
             <!-- Top Bar End -->


             <!-- ========== Left Sidebar Start ========== -->
                    <?php require 'left-bar.php' ?>
             <!-- Left Sidebar End -->



             <!-- ============================================================== -->
             <!-- Start right Content here -->
             <!-- ============================================================== -->
             <div class="content-page">
                 <!-- Start content -->
                 <div class="content">
                     <div class="container-fluid">

                         <!-- Page-Title -->
                      

                       <div class="row">
                             <div class="col-sm-12">
                                 

                                 <h4 class="page-title">Class </h4>
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                     <li class="breadcrumb-item"><a href="#">Class </a></li>
                                     <li class="breadcrumb-item active">Create / Edit / Delete </li>

                                 </ol>
                                 <p><b>For Add New Class-</b> Type in last row of table, <b>For Edit A Class-</b> Click on cell and update new details</p>
                                 
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-12">
                                 <div class="card-box">

                                    <span id="result"></span>
                                     <div class="table-rep-plugin" id="live_data">
                                        

                                     </div>

                                 </div>
                             </div>
                         </div>
                         <!-- end row -->




                     </div>  <!-- container -->

                 </div>  <!-- content -->
<!-- FOOTER START -->
<?php require 'footer.php' ?>
<!-- FOOTER END -->

             </div>


             <!-- ============================================================== -->
             <!-- End Right content here -->
             <!-- ============================================================== -->

         </div>
         <!-- END wrapper -->



         <!-- jQuery  -->
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="assets/js/detect.js"></script>
         <script src="assets/js/fastclick.js"></script>
         <script src="assets/js/jquery.slimscroll.js"></script>
         <script src="assets/js/jquery.blockUI.js"></script>
         <script src="assets/js/waves.js"></script>
         <script src="assets/js/wow.min.js"></script>
         <script src="assets/js/jquery.nicescroll.js"></script>
         <script src="assets/js/jquery.scrollTo.min.js"></script>

         

         <!-- jQuery  -->
        
         <script src="assets/pages/jquery.dashboard.js"></script>
         <script src="assets/js/jquery.core.js"></script>
         <script src="assets/js/jquery.app.js"></script>
         <script src="assets/js/main.js"></script>

         
     </body>
 </html>