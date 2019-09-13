
<?php

    error_reporting( ~E_NOTICE ); // avoid notice
    
    require_once 'database/dbconfig.php';
    
    if(isset($_POST['name']))
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
            $stmt = $DB_con->prepare('INSERT INTO student(name,f_name,class,email,mob,doj,address,adress2,city,state,pincode,t_fee,discount,remark) VALUES(:name, :f_name, :class, :email, :mob, :doj, :address, :address2, :city, :state, :pincode, :t_fee, :discount, :remark)');
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
    else{
        echo "Nothing work";
    }
?>
                      

                       <div class="row">
                             <div class="col-sm-12">
                                 <div class="btn-group pull-right m-t-15">
                                     <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings </button>
                                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                         <a class="dropdown-item" href="#">Dropdown One </a>
                                         <a class="dropdown-item" href="#">Dropdown Two </a>
                                         <a class="dropdown-item" href="#">Dropdown Three </a>
                                         <a class="dropdown-item" href="#">Dropdown Four </a>
                                     </div>
                                 </div>

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

                                               
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
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
                                                }
                                                ?>  
                                                 <label for="inputEmail4" class="col-form-label">Name </label>
                                                 <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Full Name"  onkeypress="return alphaOnly(event)" />
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Father's Name </label>
                                                 <input type="text" name="f_name" class="form-control" id="inputPassword4" placeholder="Father's Name" onkeypress="return alphaOnly(event)"  />
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
                                                 <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="E-Mail" />
                                             </div>
                                         </div>

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputEmail4" class="col-form-label">Mobile </label>
                                                 <input type="text" name="mob" class="form-control" id="inputEmail4" placeholder="Mobile Number"  onkeypress="return isNumber(event)" />
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Date Of Registration </label>
                                                 <input type="text" name="doj" class="form-control" id="inputPassword4" placeholder="Password" value="<?php echo date("d/m/y") ?>" readonly />
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputAddress" class="col-form-label">Address </label>
                                             <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234, Shikohabad" />
                                         </div>
                                         <div class="form-group">
                                             <label for="inputAddress2" class="col-form-label">Address 2 </label>
                                             <input type="text" name="address2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" />
                                         </div>
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputCity" class="col-form-label">City </label>
                                                 <input type="text"  name="city" class="form-control" id="inputCity" placeholder="City" />
                                             </div>
                                             <div class="form-group col-md-4">
                                                      <label for="inputZip" class="col-form-label">State</label>
                                                 <input type="text" name="state" placeholder="State" class="form-control">
                                             </div>
                                             <div class="form-group col-md-2">
                                                 <label for="inputZip" class="col-form-label">Pincode</label>
                                                 <input type="text" class="form-control" id="inputZip" name="pincode"  onkeypress="return isNumber(event)" />
                                             </div>
                                         </div>

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputEmail4" class="col-form-label">Total Fee </label>
                                                 <input type="text" name="t_fee" class="form-control" id="inputEmail4" placeholder="Total Fee"  onkeypress="return isNumber(event)" />
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Discount </label>
                                                           <input type="text" name="discount" class="form-control" id="inputEmail4" placeholder="Discount"  onkeypress="return isNumber(event)" />
                                             </div>
                                         </div>
                                          <div class="form-row">
                                             
                                             <div class="form-group col-md-12">
                                                 <textarea name="remark" class="form-control" placeholder="REMARK / About Student"></textarea>
                                             </div>
                                         </div>
                                         
                                        <button type="submit" name="btnsave" value="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; save
        </button>
                                     </form>
                                 </div>
                             </div>
                         </div>
                         <!-- end row -->    
              
