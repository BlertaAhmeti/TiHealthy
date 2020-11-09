<?php 
   include_once "functions.php";

   function fshiejPorosine(){
      global $dbcon;
  dbconnection();
  $porosiaID= $_POST['porosiaID'];
  $query="DELETE  from porosite where porosiaID=$porosiaID";
  $result= mysqli_query($dbcon, $query);

  if($result){
    header("Location: porosite.php");}
   }


   fshiejPorosine();
 ?>



