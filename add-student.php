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
                               

                                 <h4 class="page-title">Register New Student </h4>
                                 <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                     <li class="breadcrumb-item"><a href="#">Student </a></li>
                                     <li class="breadcrumb-item active">Add Student </li>
                                 </ol>

                             </div>
                         </div>
                             <!-- Form row -->
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="card-box">
                                     <h4 class="m-t-0 header-title">Register New Student</h4>
                                     <p class="text-muted m-b-30 font-13">
                                        Fill Complete Details
                                     </p>

                                     <form method="post" enctype="multipart/form-data">

                                                <?php
                                                if(isset($errMSG)){
                                                        ?>
                                                        <div class="alert alert-danger">
                                                            <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                                                        </div>
                                                        <?php
                                                }
                                                else if(isset($successMSG)){
                                                    ?>
                                                    <div class="alert alert-success">
                                                          <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
                                                    </div>
                                                    <?php
                                                }          ?>  
                                         <div class="form-row">

                                      
                                             <div class="form-group col-md-6">
                                               
                                                 <label for="inputEmail4" class="col-form-label">Name </label>
                                                 <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="inputEmail4" placeholder="Full Name"  onkeypress="return alphaOnly(event)" />
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Father's Name </label>
                                                 <input type="text" name="f_name" value="<?php echo $f_name ?>" class="form-control" id="inputPassword4" placeholder="Father's Name" onkeypress="return alphaOnly(event)"  />
                                             </div>
                                         </div>

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputEmail4" class="col-form-label">Class </label>
                                                 
                                                 <select name="class" class="form-control">
                                                     <option value="">Class</option>
                                                   <?php
                                                    require 'database/dbconfig.php';
                                                $stmt = $DB_con->prepare('SELECT * FROM class ORDER BY class_id DESC');
                                                $stmt->execute();
                                                
                                                if($stmt->rowCount() > 0)
                                                {
                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                                    {
                                                        extract($row);
                                                        ?>
                                                    <option value="<?php echo $name ?>"><?php echo $name ?></option>
                                                
                                                <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <div class="col-xs-12">
                                                            <div class="alert alert-warning">
                                                                <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    
                                                ?>
                                                 </select>

                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Email</label>
                                                 <input type="email" name="email" value="<?php echo $email ?>"  class="form-control" id="inputPassword4" placeholder="E-Mail" />
                                             </div>
                                         </div>

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputEmail4" class="col-form-label">Mobile </label>
                                                 <input type="text" name="mob" value="<?php echo $mob ?>" class="form-control" id="inputEmail4" placeholder="Mobile Number"  onkeypress="return isNumber(event)" />
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Date Of Registration </label>
                                                 <input type="text" name="doj"  class="form-control" id="inputPassword4" placeholder="Password" value="<?php echo date("d/m/y") ?>" readonly />
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputAddress" class="col-form-label">Address </label>
                                             <input type="text" name="address"value="<?php echo $address ?>"  class="form-control" id="inputAddress" placeholder="1234, Shikohabad" />
                                         </div>
                                         <div class="form-group">
                                             <label for="inputAddress2" class="col-form-label">Address 2 </label>
                                             <input type="text" name="address2" value="<?php echo $address2 ?>" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" />
                                         </div>
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputCity" class="col-form-label">City </label>
                                                 <input type="text"  name="city"value="<?php echo $city ?>" class="form-control" id="inputCity" placeholder="City" />
                                             </div>
                                             <div class="form-group col-md-4">
                                                      <label for="inputZip" class="col-form-label">State</label>
                                              
                                                 <input type="text" name="state" value="<?php echo $state ?>"  placeholder="State" class="form-control">
                                             </div>
                                             <div class="form-group col-md-2">
                                                 <label for="inputZip" class="col-form-label">Pincode</label>
                                                 <input type="text" class="form-control" value="<?php echo $pincode ?>" id="inputZip" name="pincode"  onkeypress="return isNumber(event)" />
                                             </div>
                                         </div>

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputEmail4" class="col-form-label">Total Fee </label>
                                                 <input type="text" name="t_fee"  value="<?php echo $t_fee ?>"class="form-control" id="inputEmail4" placeholder="Total Fee"  onkeypress="return isNumber(event)" />
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Discount </label>
                                                           <input type="text" name="discount" value="<?php echo $discount ?>" class="form-control" id="inputEmail4" placeholder="Discount"  onkeypress="return isNumber(event)" />
                                             </div>
                                         </div>
                                          <div class="form-row">
                                             
                                             <div class="form-group col-md-12">
                                                 <textarea name="remark" class="form-control"  placeholder="REMARK / About Student"><?php echo $remark ?></textarea>
                                             </div>
                                         </div>
                                         
                                        <button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Register
        </button>
                                     </form>
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