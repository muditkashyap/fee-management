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
                      
<?php

    error_reporting( ~E_NOTICE ); // avoid notice
    
    require_once 'database/dbconfig.php';
    
    if(isset($_POST['btnsave']))
    {
        $name = $_POST['name'];
        $f_name = $_POST['f_name'];
        $class = $_POST['class'];
        $email = $_POST['email'];
        $mob = $_POST['mob'];
        $doj = $_POST['doj'];
        $address = $_POST['address'];
        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $pincode = $_POST['pincode'];
        $t_fee = $_POST['t_fee'];
        $discount = $_POST['discount'];
        $remark = $_POST['remark'];
    
        
        if(empty($name)){
            $errMSG = "Please Enter Full Name.";
        }
        else if(empty($f_name)){
            $errMSG = "Please Enter Father's Name";
        }
        else if(empty($class)){
            $errMSG = "Please Select Class";
        }
        else if(empty($email)){
            $errMSG = "Please Enter Email-Id";
        }
        else if(empty($mob)){
            $errMSG = "Please Enter Mobile Number";
        }
        else if(empty($address)){
            $errMSG = "Please Enter Address";
        }
        else if(empty($address2)){
            $errMSG = "Please Enter Address";
        }
        else if(empty($city)){
            $errMSG = "Please Enter City";
        }
        else if(empty($state)){
            $errMSG = "Please Enter State";
        }
        else if(empty($pincode)){
            $errMSG = "Please Enter Pincode";
        }
        else if(empty($t_fee)){
            $errMSG = "Please Enter Total Fee";
        }
       
        
        
        
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
            $stmt = $DB_con->prepare('INSERT INTO student(name,f_name,class,email,mob,doj,address,address2,city,state,pincode,t_fee,discount,remark) VALUES(:name, :f_name, :class, :email, :mob, :doj, :address, :address2, :city, :state, :pincode, :t_fee, :discount, :remark)');
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':f_name',$f_name);
            $stmt->bindParam(':class',$class);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':mob',$mob);
            $stmt->bindParam(':doj',$doj);
            $stmt->bindParam(':address',$address);
            $stmt->bindParam(':address2',$address2);
            $stmt->bindParam(':city',$city);
            $stmt->bindParam(':state',$state);
            $stmt->bindParam(':pincode',$pincode);
            $stmt->bindParam(':t_fee',$t_fee);
            $stmt->bindParam(':discount',$discount);
            $stmt->bindParam(':remark',$remark);
            
            if($stmt->execute())
            {
                ?>
                <script>
                alert('Student Registered Successfully');
                window.location.href='add-student';
                </script>
                <?php
            }
            else
            {
                $errMSG = "error while inserting....";
            }
        }
    }
?>
                       <div class="row">
                             <div class="col-sm-12">
                               

                                 <h4 class="page-title">Fee</h4>
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                     <li class="breadcrumb-item"><a href="#">Fee </a></li>
                                     <li class="breadcrumb-item active">Pay </li>
                                 </ol>

                             </div>
                         </div>
                             <!-- Form row -->
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="card-box">
                                     <h4 class="m-t-0 header-title">Fee</h4>
                                     <p class="text-muted m-b-30 font-13">
                                        Enter Roll No.
                                     </p>
                                     <div class="form-group col-md-12">
                                               
                                                 <label for="inputEmail4" class="col-form-label">Name </label>
                                                 <input type="text" name="student_id" id="roll"  class="form-control"  placeholder="Roll No." onkeyup="autochange(this.value)"/>
                                             </div>
                                     <div id="autofill">

                                               
                                      

                                      
                                             
                                             
                                            

                                         <div class="form-row">

                                      
                                           
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