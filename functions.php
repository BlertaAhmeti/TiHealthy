<?php
//db connnection
$dbcon;
function dbconnection(){
   global $dbcon;
   $dbcon=mysqli_connect('localhost', 'root', '', 'ti_healthy');

}

//Klientet

function merrKlientet(){
    global $dbcon;
    dbconnection();
    $query = "SELECT * FROM klientet";
    $result = mysqli_query($dbcon, $query);

    return $result;
}


function merrKlientByID($klientiID){
   global $dbcon;
    dbconnection();
    $query = "SELECT * FROM klientet where klientiID=$klientiID";
    $result = mysqli_query($dbcon, $query);
    return $result;
}

function shtoKlient($emri, $mbiemri, $telefoni, $emaili, $adresa){
  global $dbcon;
    dbconnection();
    $query = "INSERT INTO klientet(emri,mbiemri,telefoni,emaili,adresa) VALUES ('$emri','$mbiemri',$telefoni, '$emaili', '$adresa') ";
    $result = mysqli_query($dbcon, $query);
    
    if($result){
    header("Location: klientet.php");
 }
}



function modifikoKlient($klientiID, $emri, $mbiemri, $telefoni, $emaili, $adresa){
  global $dbcon;
  dbconnection();
  $query="UPDATE klientet SET emri='$emri', mbiemri='$mbiemri', telefoni=$telefoni, emaili='$emaili', adresa='$adresa'  WHERE klientiID=$klientiID";
   $result = mysqli_query($dbcon, $query);

    if($result){
    header("Location: klientet.php");
 }
 

}

 function merrKlientEmri($klientiID){
   global $dbcon;
    dbconnection();
    $query = "SELECT emri  FROM klientet where klientiID=$klientiID";
     $result = mysqli_query($dbcon, $query);
    return $result;
 }

  function merrKlientMbiemri($klientiID){
   global $dbcon;
    dbconnection();
    $query = "SELECT mbiemri  FROM klientet where klientiID=$klientiID";
     $result = mysqli_query($dbcon, $query);
    return $result;
 }
 
 //menu

 function merrMenuArtikulli($menuID){
   global $dbcon;
    dbconnection();
    $query = "SELECT artikulli FROM menu where menuID=$menuID";
     $result = mysqli_query($dbcon, $query);
    return $result;
 }


 function merrMenuCmimi($menuID){
   global $dbcon;
    dbconnection();
    $query = "SELECT cmimi FROM menu where menuID=$menuID";
     $result = mysqli_query($dbcon, $query);
    return $result;

 }


 function merrMenu(){
    global $dbcon;
    dbconnection();
    $query = "SELECT * FROM menu";
    $result = mysqli_query($dbcon, $query);
    return $result;
}



//porosite


function merrPorosite(){
    global $dbcon;
    dbconnection();
    $query = "SELECT * FROM porosite";
    $result = mysqli_query($dbcon, $query);
    return $result;
}

 
 function shtoPorosi($klientiID, $menuID, $sasia, $preferenca, $data){
  global $dbcon;
    dbconnection();
    $query = "INSERT INTO porosite(klientiID,menuID,sasia,preferenca,data) VALUES ($klientiID,$menuID,$sasia, 'preferenca', '$data') ";
    $result = mysqli_query($dbcon, $query);
    
    if($result){
     if(!empty($_SESSION['adm'])) {
    header("Location: porosite.php");}
    else{
       header("Location: menu.php");
    }
 }
}

function merrPorosiByID($porosiaID){
   global $dbcon;
    dbconnection();
    $query = "SELECT * FROM porosite where porosiaID=$porosiaID";
    $result = mysqli_query($dbcon, $query);
    return $result;
}


function modifikoPorosi($porosiaID, $klientiID, $menuID, $sasia, $preferenca, $data){
  global $dbcon;
  dbconnection();
  $query="UPDATE porosite SET klientiID='$klientiID', menuID='$menuID', sasia=$sasia, preferenca='$preferenca', data='$data'  WHERE porosiaID=$porosiaID";
   $result = mysqli_query($dbcon, $query);

    if($result){
    header("Location: porosite.php");
 }

} 


//login


function login($username, $password){
   global $dbcon;
  dbconnection();
  $query="SELECT * from users where username='$username' and password='$password'";
     $result = mysqli_query($dbcon, $query);
      $adm=array();
     if(mysqli_num_rows($result)==1){
      $admini=mysqli_fetch_assoc($result);
      $adm['userID']= $admini['userID'];
      $adm['username']= $admini['username'];
      $_SESSION['adm']=$adm;

    header("Location: porosite.php");
 }

}
?>