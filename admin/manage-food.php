<?php include ('partials/menu.php'); ?>


        <div class ="main-content">
             <div class = "wrapper"> 
                <h2> Manage Food</h2>
                  <br> 
                <!---Button to add admin ---->
                 <a href = "Add-admin.php" class="btn-primary"> Add Food </a>
                   <br/> <br/>

               <table class = "tbl-full">
                    <tr>

                     <th> S.N.</th> 
                     <th> Full Name </th>
                     <th> Username</th>
                     <th> Actions</th>   

                     </tr>

                     <tr>
                        <td> 1.</td>
                        <td> Damith Buddika</td>
                        <td> Damith11</td>
                        <td> 
                           <a href ="#" class ="btn-secondary">Update Admin<a/>
                           <a href ="#" class ="btn-danger">Delete Admin</a> 
                        </td>
                     </tr>

                     <tr>
                        <td> 2.</td>
                        <td> Chamod Buddishana</td>
                        <td> Chamod20</td>
                        <td> 
                          <a href ="#" class ="btn-secondary">Update Admin<a/>
                          <a href ="#" class ="btn-danger">Delete Admin</a>  
                        </td>
                     </tr>

                     <tr>
                        <td> 3.</td>
                        <td> Kalpani Herath</td>
                        <td> kalpani05</td>
                        <td> 
                          <a href ="#" class ="btn-secondary">Update Admin<a/>
                          <a href ="#" class ="btn-danger">Delete Admin</a>  
                        </td>
                     </tr>

                 </table>
             </div>
              
        </div>






<?php include ('partials/footer.php'); ?>