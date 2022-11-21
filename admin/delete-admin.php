<?php


        // Include constants .php file here
          include('.../config/constants.php');

          // 1.get the id of admin to be deleted

          $id = $_GET ['id'];

          //2. create sql query to delete admin 

          $sql = "DELETE FROM tbl_admin WHERE id = $id";

          // Execute the Query

          $res = mysqli_query($conn,$sql);

           
          // check whether the query executed  Successfully or not 
          if ($res == TRUE)



          //3. Redirect to manage Admin page with message (success/error)




?>