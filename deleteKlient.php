<?php 
   include_once "functions.php";

   function fshiejKlientin(){
      global $dbcon;
  dbconnection();
  $klientiID= $_POST['klientiID'];
  $query="DELETE  from klientet where klientiID=$klientiID";
  $result= mysqli_query($dbcon, $query);

  if($result){
    header("Location: klientet.php");}
   }


   fshiejKlientin();
 ?>




