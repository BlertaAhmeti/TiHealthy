<?php include_once "inc/header.php";
   include_once "functions.php";
 ?>







   <div class="row mt-5 pt-5">


     <div class="container">

  <h3 class="text-success mt-3 pt-3">Shto Klient</h3>
  
       <div class="col-sm-3 col-md-6 col-lg-9 col-xl-12">

           <form class="form-group mt-5 pt-5" method="post">
<?php 

if(isset($_POST['shtoKlient'])){
  $emri=$_POST['emri'];
  $mbiemri=$_POST['mbiemri'];
  $telefoni=$_POST['telefoni'];
   $emaili=$_POST['emaili'];
  $adresa=$_POST['adresa'];
  

      if(empty($emri) || is_numeric($emri))
        {
          $emriError="Emri duhet plotesuar";
          $errors = true;
        }else{
          $errors = false;
        }


      if(empty($mbiemri) || is_numeric($mbiemri))
        {
          $mbiemriError="Mbiemri duhet plotesuar";
          $errors = true;
        }else{
          $errors = false;
        }
     

      if(empty($telefoni)  || !is_numeric($telefoni))
        {
          $telefoniError="telefoni duhet plotesuar";
          $errors = true;
        }else{
          $errors = false;
        }


      if(empty($emaili))
        {
          $emailiError="Emaili duhet plotesuar";
          $errors = true;
        }else{
          $errors = false;
        }

       
      if(empty($adresa))
        {
          $adresaError="Adresa duhet plotesuar";
          $errors = true;
        }else{
          $errors = false;
        }
 
shtoKlient($emri, $mbiemri, $telefoni, $emaili, $adresa);   

}

 if(isset($_GET['klientiID'])){
  $klientet= merrKlientByID($_GET['klientiID']);
  $klienti =mysqli_fetch_assoc($klientet);
  $emri= $klienti['emri'];
  $mbiemri= $klienti['mbiemri'];
  $telefoni= $klienti['telefoni'];
  $emaili= $klienti['emaili'];
  $adresa= $klienti['adresa'];
 }




if(isset($_POST['modifikoKlient'])){
  $klientiID=$_GET['klientiID'];
  $emri=$_POST['emri'];
  $mbiemri=$_POST['mbiemri'];
  $telefoni=$_POST['telefoni'];
   $emaili=$_POST['emaili'];
  $adresa=$_POST['adresa'];
  
 
modifikoKlient($klientiID,$emri, $mbiemri, $telefoni, $emaili, $adresa);   

}
?>
            <div class="col">
                <div class="col">
                   <label for="name" class="my-1">Emri</label>
                <input class="form-control" type="text" id="Emri" name="emri" value="<?php if(isset($emri)){ echo $emri ;} ?>" >
                <p class="text-danger" style="font-style: italic; font-size: 12px;"><?php if(!empty($emriError)){echo $emriError;}  ?></p>
                </div>
                <div class="col">
                  <label for="name" class="my-1">Mbiemri</label>
                <input class="form-control" type="text" id="mbiemri" name="mbiemri" value="<?php if(isset($mbiemri)) {echo $mbiemri;} ?>" >
                <p class="text-danger" style="font-style: italic; font-size: 12px;"><?php if(!empty($mbiemriError)){echo $mbiemriError;}  ?></p>
                </div>
                <div class="col">
                    <label for="name" class="my-1">Telefoni</label>
                <input class="form-control" type="text" name="telefoni" value="<?php if(isset($telefoni)) {echo$telefoni;} ?>"  >
                <p class="text-danger" style="font-style: italic; font-size: 12px;"><?php if(!empty($telefoniError)){echo $telefoniError;}  ?></p>
                </div>
                <div class="col">
                  <label for="name" class="my-1">Emaili</label>
                <input class="form-control" type="email" name="emaili" value="<?php if(isset($emaili)){ echo $emaili ;} ?>" >
                <p class="text-danger" style="font-style: italic; font-size: 12px;"><?php if(!empty($emailiError)){echo $emailiError;}  ?></p>
                </div>
                <div class="col">
                  <label for="name" class="my-1">Adresa</label>
                <input class="form-control" type="text" name="adresa" value="<?php if(isset($adresa)) {echo $adresa;} ?>">
                <p class="text-danger" style="font-style: italic; font-size: 12px;"><?php if(!empty($adresaError)){echo $adresaError;}  ?></p>
                </div>
                 
                 <?php if(isset($_GET['klientiID'])) { ?>

                     <input type="submit" name="modifikoKlient" value="Modifiko" class="btn btn-success">

                 <?php
                  } else { ?>
                  <input type="submit" name="shtoKlient" value="Shto" class="btn btn-success">
                  <?php } ?>
            </div>
        </form>

    
       </div>
     </div>
   </div>

    <div style="clear: both;">


 <?php include_once "inc/footer.php"  ?>