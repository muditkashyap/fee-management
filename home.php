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
                                
                                 <h4 class="page-title">Dashboard </h4>
                                 <p class="text-muted page-title-alt">Welcome to Fee Solution </p>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6 col-lg-6 col-xl-3">
                                 <div class="widget-bg-color-icon card-box fadeInDown animated">
                                     <div class="bg-icon bg-icon-info pull-left">
                                         <i class="fa fa-users"></i>
                                     </div>
                                     <div class="text-right">
                                         <h3 class="text-dark"><b class="counter">2 </b></h3>
                                         <p class="text-muted mb-0">Total Students </p>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-6 col-xl-3">
                                 <div class="widget-bg-color-icon card-box">
                                     <div class="bg-icon bg-icon-pink pull-left">
                                         <i class="fa fa-book"></i>
                                     </div>
                                     <div class="text-right">
                                         <h3 class="text-dark"><b class="counter">2 </b></h3>
                                         <p class="text-muted mb-0">Register Class </p>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-6 col-xl-3">
                                 <div class="widget-bg-color-icon card-box">
                                     <div class="bg-icon bg-icon-purple pull-left">
                                         <i class="md md-equalizer text-purple"></i>
                                     </div>
                                     <div class="text-right">
                                         <h3 class="text-dark"><b class="counter">2000 </b> </h3>
                                         <p class="text-muted mb-0">Total Paid Fee </p>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-6 col-xl-3">
                                 <div class="widget-bg-color-icon card-box">
                                     <div class="bg-icon bg-icon-success pull-left">
                                         <i class="md md-equalizer text-purple"></i>
                                     </div>
                                     <div class="text-right">
                                         <h3 class="text-dark"><b class="counter">4000 </b></h3>
                                         <p class="text-muted mb-0">Due Fee </p>
                                     </div>
                                     <div class="clearfix"></div>
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


             <!-- Right Sidebar -->
             <div class="side-bar right-bar nicescroll">
                 <h4 class="text-center">Chat </h4>
                 <div class="contact-list nicescroll">
                     <ul class="list-group contacts-list">
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-1.jpg" alt="" />
                                 </div>
                                 <span class="name">Chadengle </span>
                                 <i class="fa fa-circle online"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-2.jpg" alt="" />
                                 </div>
                                 <span class="name">Tomaslau </span>
                                 <i class="fa fa-circle online"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-3.jpg" alt="" />
                                 </div>
                                 <span class="name">Stillnotdavid </span>
                                 <i class="fa fa-circle online"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-4.jpg" alt="" />
                                 </div>
                                 <span class="name">Kurafire </span>
                                 <i class="fa fa-circle online"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-5.jpg" alt="" />
                                 </div>
                                 <span class="name">Shahedk </span>
                                 <i class="fa fa-circle away"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-6.jpg" alt="" />
                                 </div>
                                 <span class="name">Adhamdannaway </span>
                                 <i class="fa fa-circle away"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-7.jpg" alt="" />
                                 </div>
                                 <span class="name">Ok </span>
                                 <i class="fa fa-circle away"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-8.jpg" alt="" />
                                 </div>
                                 <span class="name">Arashasghari </span>
                                 <i class="fa fa-circle offline"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-9.jpg" alt="" />
                                 </div>
                                 <span class="name">Joshaustin </span>
                                 <i class="fa fa-circle offline"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                         <li class="list-group-item">
                             <a href="#">
                                 <div class="avatar">
                                     <img src="assets/images/users/avatar-10.jpg" alt="" />
                                 </div>
                                 <span class="name">Sortino </span>
                                 <i class="fa fa-circle offline"></i>
                             </a>
                             <span class="clearfix"></span>
                         </li>
                     </ul>
                 </div>
             </div>
             <!-- /Right-bar -->

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

         
     </body>
 </html>