<?php include ('partials/menu.php'); ?>


       <!---- Main Content Section Starts --->
            <div class ="main-content">
             <div class = "wrapper"> 
               <h2> Manage Admin</h2>
                  <br>
                    <br>
                   <?php 
                      if (isset($_SESSION['add']))
                      {
                        echo $_SESSION['add'];//display session message
                        unset($_SESSION['add']);//Removing Session Message
                      }
                   ?>
                        <br><br>

               <!---Button to add admin ---->
               <a href = "add-admin.php" class="btn-primary"> Add Admin </a>
                   <br/> <br/>
                    

                <table class = "tbl-full">
                    <tr>

                     <th> S.N.</th> 
                     <th> Full Name </th>
                     <th> Username</th>
                     <th> Actions</th>   

                     </tr>

                       <?php
                       
                           // Query to get all Admin 
                           $sql = "SELECT * FROM tbl_admin";
                           //Execute the Query
                           $res = mysqli_query($conn ,$sql);

                           //Check whether the query is Executed of Not
                           if ($res ==TRUE)
                           {
                              // count Rows to Check Whether We have data in database or not 
                              $rows = mysqli_num_rows($res); //function to get all the rows in database 

                              $sn = 1 ; // create a variable and assign the value

                              //check the num of rows 
                              if ($rows > 0)
                              {
                                 //we have data in database
                                 while ($rows = mysqli_fetch_assoc($res))
                                 {
                                    //using while loop to get all the data from database 
                                    //and while loop will run as long as we have data in database

                                    //get individul data 
                                    $id= $rows['id'];
                                    $full_name =$rows['full_name'];
                                    $username =$rows['username'];

                                    //display the values in our table
                                    ?>
                                     <tr> 
                                       <td> <?php echo $sn++;?>.</td>
                                       <td> <?php echo $full_name; ?> </td>
                                       <td> <?php echo $username; ?></td>
                                        <td> 
                                           <a href ="#" class ="btn-secondary">Update Admin<a/>
                                           <a href ="<?php echo SITEURL; ?> admin/delete-admin.php? id=<?php echo $id; ?>" class ="btn-danger">Delete Admin</a> 
                                        </td>
                                     </tr>
                                    <?php
                                 } 
                              }
                              else 
                              {
                                 //we do not data in database 
                              }
                           }
                       
                       
                       
                       ?>

                 </table>

             </div>
              
              </div>
       <!---- Main Content Section End --->

<?php include ('partials/footer.php'); ?>