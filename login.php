<?php include_once "inc/header.php";
   include_once "functions.php";
 ?>

   <div class="row mt-5 pt-5">


     <div class="container">

  <h3 class="text-success mt-3 pt-3">Admin</h3>

       <div class="col-sm-3 col-md-6 col-lg-9 col-xl-12">

           <form class="form-group mt-5 pt-5" method="POST">
             <?php 

if(isset($_POST['login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];

 
login($username, $password);   

}



?>
            <div class="col">
                <div class="col">
                   <label for="username" class="my-1">Username</label>
                <input class="form-control" type="text" name="username"  >
              
                </div>
              
                
                </div>
                <div class="col">
                  <label for="password" class="my-1">Password</label>
                <input class="form-control" type="password" name="password"  >
                
             <input type="submit" name="login" value="login" class="btn btn-success">

         
           
            </div>
        </form>

    
       </div>
     </div>
   </div>

    <div style="clear: both;">

<div class="clearfix"></div>