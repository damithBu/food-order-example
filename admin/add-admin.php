<?php include('partials/menu.php'); ?>

<div class =  "main-content">
    <div class ="wrapper">
       <h1> Add Admin </h1>
       <br> <br>
      
                 <?php 
                      if (isset($_SESSION['add'])) //Checking Whether the Session is set of not
                      {
                        echo $_SESSION['add'];//display session message
                        unset($_SESSION['add']);//Removing Session Message
                      }
                   ?>


       <form action ="" method = "POST">
           <table class = "tbl-30">
                <tr>
                     <td> Full Name </td>
                     <td> <input type = "text" name ="full_name" placeholder="Enter Your Name"> </td>
                 </tr>
            
               <tr>
                      <td> User Name </td>
                      <td> <input type = "text" name ="username" placeholder="Your User Name"> </td>
                 </tr>

              <tr>
                      <td> Password </td>
                      <td> <input type = "password" name ="password" placeholder="Your Password"> </td>
                 </tr>

              <tr>
                   <td colspan ="2">
                   <input type = "submit" name ="submit" value ="Add Admin" class ="btn-AddAdmin"> </td>
                 </tr>

             </table>

          </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>


<?php
  //process the value from form and save it in database
  //Check whether the submit button is clicked or not

     if (isset($_POST['submit']))
         {
              //Button clicked
             //echo"Button clicked";

            //1.Get the data from form
               $full_name = $_POST['full_name'];
               $username  = $_POST ['username'];
               $password  = md5($_POST['password']);//password encryption with MDS

            //2. SQL Query to save the data into database 
               $sql = "INSERT INTO tbl_admin SET
                          full_name ='$full_name',
                          username = '$username',
                          password = '$password'
                       ";
           
             //3. Executing query and saving data into Database

                 $res = mysqli_query ($conn , $sql) or die (mysqli_error());


            //4. Check Whether the (query is Executed) data is inserted or not and display appropriate message

               if ($res == TRUE)
               {
                    //Data Inserted 
                  // echo "Data Inserted";

                  // Create a Session Variable to Display Message
                  $_SESSION['add'] = "Admin Added Successfully";
                  // Redirect page TO Manage Admin
                  header('location:'.SITEURL.'admin/manage-admin.php');
               }

               else
               {
                    //Failed to Inserted Data
                 //   echo "Faile to Inserted Data";

                 // Create a Session Variable to Display Message
                 $_SESSION['add'] = "Fail to Admin Added ";
                 // Redirect page TO Add Admin
                 header('location:'.SITEURL.'admin/manage-admin.php');
               }






          }
     //else
     //{
       //Button not clicked
      // echo"Button not clicked"; 
     //}







?>