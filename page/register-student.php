
<?php

    error_reporting( ~E_NOTICE ); // avoid notice
    
    require_once '../database/dbconfig.php';
    
   
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
            $stmt->bindParam(':t_fee',$t_Fee);
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