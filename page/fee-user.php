<?php
    require'../database/dbconfig.php';
    $roll = $_POST['student_id'];
    $stmt = $DB_con->prepare("SELECT * FROM student WHERE student_id='$roll'");
    $stmt->execute();
    
    if($stmt->rowCount() > 0)
    {
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
          <div class="form-row">
  <div class="form-group col-md-6">
                                               
                                                 <label for="inputEmail4" class="col-form-label">Name </label>
                                                 <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="inputEmail4" placeholder="Full Name"  onkeypress="return alphaOnly(event)" readonly/>
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Father's Name </label>
                                                 <input type="text" name="f_name" value="<?php echo $f_name ?>" class="form-control" id="inputPassword4" placeholder="Father's Name" onkeypress="return alphaOnly(event)" readonly  />
                                             </div>
                                         </div>

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputEmail4" class="col-form-label">Class </label>
                                                 
                                                 <input type="text" name="class" value="<?php echo $class ?>" placeholder="" class="form-control" readonly>

                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Email</label>
                                                 <input type="email" name="email" value="<?php echo $email ?>"  class="form-control" id="inputPassword4" placeholder="E-Mail"  readonly />
                                             </div>
                                         </div>

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputEmail4" class="col-form-label">Mobile </label>
                                                 <input type="text" name="mob" value="<?php echo $mob ?>" class="form-control" id="inputEmail4" placeholder="Mobile Number"  onkeypress="return isNumber(event)" readonly/>
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Date Of Registration </label>
                                                 <input type="text" name="doj"  class="form-control" id="inputPassword4" placeholder="Password" value="<?php echo date("d/m/y") ?>" readonly />
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <label for="inputAddress" class="col-form-label">Address </label>
                                             <input type="text" name="address"value="<?php echo $address ?>"  class="form-control" id="inputAddress" placeholder="1234, Shikohabad"  readonly/>
                                         </div>
                                         <div class="form-group">
                                             <label for="inputAddress2" class="col-form-label">Address 2 </label>
                                             <input type="text" name="address2" value="<?php echo $address2 ?>" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" readonly />
                                         </div>
                                         <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputCity" class="col-form-label">City </label>
                                                 <input type="text"  name="city"value="<?php echo $city ?>" class="form-control" id="inputCity" placeholder="City" readonly />
                                             </div>
                                             <div class="form-group col-md-4">
                                                      <label for="inputZip" class="col-form-label">State</label>
                                              
                                                 <input type="text" name="state" value="<?php echo $state ?>"  placeholder="State" class="form-control" readonly>
                                             </div>
                                             <div class="form-group col-md-2">
                                                 <label for="inputZip" class="col-form-label">Pincode</label>
                                                 <input type="text" class="form-control" value="<?php echo $pincode ?>" id="inputZip" name="pincode"  onkeypress="return isNumber(event)"  readonly />
                                             </div>
                                         </div>

                                        <div class="form-row">
                                             <div class="form-group col-md-6">
                                                 <label for="inputEmail4" class="col-form-label">Total Fee </label>
                                                 <input type="text" name="t_fee"  value="<?php echo $t_fee ?>"class="form-control" id="inputEmail4" placeholder="Total Fee"  onkeypress="return isNumber(event)" readonly />
                                             </div>
                                             <div class="form-group col-md-6">
                                                 <label for="inputPassword4" class="col-form-label">Discount </label>
                                                           <input type="text" name="discount" value="<?php echo $discount ?>" class="form-control" id="inputEmail4" placeholder="Discount"  onkeypress="return isNumber(event)" readonly />
                                             </div>
                                         </div>
                                          <div class="form-row">
                                             
                                             <div class="form-group col-md-12">
                                                 <textarea name="remark" class="form-control"  placeholder="REMARK / About Student" disabled="true"><?php echo $remark ?></textarea>
                                             </div>
                                         </div>

                                         
                                        <button type="submit" name="btnsave" class="btn btn-default">
        <span class="glyphicon glyphicon-save"></span> &nbsp; Pay Fee
        </button>
            </div><?php
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

 <div class="form-row">
                                             
                                             <div class="form-group col-md-12">
                                                    <label for="inputPassword4" class="col-form-label"> </label>
                                                           <input type="text" name="discount" value="<?php echo $discount ?>" class="form-control" id="inputEmail4" placeholder="Discount"  onkeypress="return isNumber(event)" readonly />
                                             </div>
                                         </div>