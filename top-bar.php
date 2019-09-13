     <div class="topbar">

                 <!-- LOGO -->
                 <div class="topbar-left">
                     <div class="text-center">
                         <!-- <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub <i class="md md-album"></i>ld </span></a> -->
                         <!-- Image Logo here -->
                         <!--<a href="index.html" class="logo">-->
                             <i class="icon-c-logo"> <img src="assets/images/logo2.png" height="70"/> </i>
                             <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                         <!--</a>-->
                     </div>
                 </div>

                 <!-- Button mobile view to collapse sidebar menu -->
                 <nav class="navbar-custom">

                     <ul class="list-inline float-right mb-0">
                      
                      

                         <li class="list-inline-item dropdown notification-list">
                             <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                 <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle" />
                             </a>
                             <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                 <!-- item-->
                                 <div class="dropdown-item noti-title">
                                     <h5 class="text-overflow"><small>       
                                        <?php
                                                include('database/db_con.php'); 
                                                $oper_id=$_SESSION['ID']; //convertion of $_SESSION['ID'] to $oper_id
                                                $result = mysql_query("SELECT * FROM staff where userid='$oper_id'"); //this part tackles on querying, needed is your mysql ideas
                                                                while($row = mysql_fetch_array($result)) // start of fetching results
                                                                    {
                                                                    echo ""."". $row['owner']; //echo means to shoutout result
                                                                    $user_category= $row['category'];
                                                                    $user_email= $row['username'];
                                                                    ?>
                                                                    
                                                                    <?php          
                                                                    
                                                                    }
                                        ?>
         </small>  </h5>
                                 </div>

                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                     <i class="md md-account-circle"></i>  <span>Profile </span>
                                 </a>

                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                     <i class="md md-settings"></i>  <span>Settings </span>
                                 </a>


                                 <!-- item-->
                                 <a href="out.php" class="dropdown-item notify-item">
                                     <i class="md md-settings-power"></i>  <span>Logout </span>
                                 </a>

                             </div>
                         </li>

                     </ul>

                     <ul class="list-inline menu-left mb-0">
                         <li class="float-left">
                             <button class="button-menu-mobile open-left waves-light waves-effect">
                                 <i class="dripicons-menu"></i>
                             </button>
                         </li>
                         
                     </ul>

                 </nav>

             </div>