 <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table  table-striped">
                                                 <thead>
                                                     <tr>
                                                         <th width="10%">Sr. No. </th>
                                                         <th width="30%" >Name</th>
                                                         <th width="30%">Fatheer's Name </th>
                                                         <th width="30%">E-mail Id</th>
                                                         <th width="30%">Mob</th>
                                                         <th width="30%">Class</th>
                                                     </tr>
                                                       </thead>
                                                     <tbody>
                                        <?php
                                            require 'database/dbconfig.php';
                                            $stmt = $DB_con->prepare('SELECT * FROM student ORDER BY student_id ASC');
                                            $stmt->execute();
                                            
                                            if($stmt->rowCount() > 0)
                                            {
                                                $sr="1";
                                                while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                                {
                                                    extract($row);
                                                    ?>
                                                    <tr>  
                                                         <td><?php echo $sr++ ?></td>  
                                                         <td><?php echo $name ?></td>
                                                         <td><?php echo $f_name ?></td>
                                                         <td><?php echo $email ?></td>
                                                         <td><?php echo $mob ?></td>
                                                         <td><?php echo $class ?></td>
                                                         
                                                    </tr>

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
                                                    </tbody>
                                                </table>
                                            </div>  