<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Update_Data</title>
      <link rel="stylesheet" href="./css/style.css" />
   </head>
   <body>
      <div class="wrapper">
         <h3 class="title">Update Borrower Data</h3>
         <form action="" method="post" target="_self">
            <div class="form">
               <div class="inputfield">
                  <label>ID</label>
                  <input type="text" name="id" class="input" />
               </div>
               <div class="inputfield">
                  <label>Address</label>
                  <textarea name ="address"class="textarea"></textarea>
               </div>
               <div class="inputfield">
                  <input type="submit" name="submit" value="Submit" class="btn" />
               </div>
            </div>
         </form>
         <div class="second-container">
            <a href="admin.html" class="home-btn">Back</a>
         </div>
 
         <div>
          <?php

         if(isset($_POST['submit']))
		    {
			     $id = $_POST['id'];
			     $address = $_POST['address'];
              $con = new mysqli("localhost","root","","library");
              $sql = "update borrower_data set address ='".$address."'where id='".$id."'";	
				  $result=  mysqli_query($con,$sql);

			if(!$result)
			    {
				   echo"<br>Sorry!!No Record For ID $id";
			    }
			else
            { 
				  echo'<br>Data Successfully Updated ';
			   }	
		   }   	

          ?>
        </div>

      </div>
   </body>
</html>