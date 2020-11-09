<?php include_once "inc/header.php";
   include_once "functions.php";
 ?>







   <div class="row mt-5 pt-5">


     <div class="container">

  <h3 class="text-success mt-3 pt-3">Shto Porosi</h3>
  <p><a href="shto_modifikoKlient.php">Regjistrohuni fillimisht si klient</a></p>
       <div class="col-sm-3 col-md-6 col-lg-9 col-xl-12">

           <form class="form-group mt-5 pt-5" method="post">
             <?php 
//shto porosi
if(isset($_POST['shtoPorosi'])){
  $klientiID=$_POST['klientiID'];
  $menuID=$_POST['menu'];
  $sasia=$_POST['sasia'];
   $preferenca=$_POST['preferenca'];
  $data=$_POST['data'];
  
 
shtoPorosi($klientiID, $menuID, $sasia, $preferenca, $data);   

}

if(isset($_GET['porosiaID'])){
  $porosite=merrPorosiByID($_GET['porosiaID']);
  $porosia=mysqli_fetch_assoc($porosite);
  $klientiID=$porosia['klientiID'];
  $menuID=$porosia['menuID'];
  $sasia=$porosia['sasia'];
  $preferenca=$porosia['preferenca'];
  $data=$porosia['data'];
}

//vlerat e modifikuara ruj ne db
if(isset($_POST['modifikoPorosi'])){
   $klientiID=$_POST['klientiID'];
  $menuID=$_POST['menu'];
  $sasia=$_POST['sasia'];
   $preferenca=$_POST['preferenca'];
  $data=$_POST['data'];
  $porosiaID=$_GET['porosiaID'];

  modifikoPorosi($porosiaID, $klientiID, $menuID, $sasia, $preferenca, $data);  

}

?>
            <div class="col">
                <div class="col">
                   <label for="name" class="my-1">KlientiID</label>
                <input class="form-control" type="text" name="klientiID" value="<?php if(isset($klientiID)) {echo $klientiID;}   ?>" >
              
                </div>
                <div class="col">
                  <label for="name" class="my-3">Menu</label>
                  <select name="menu" id="" class="">
                    <?php
                    $menuja=merrMenu();

                    while ($menu= mysqli_fetch_array($menuja)) {?>
                    <option value="<?php echo $menu['menuID']; ?>" <?php  if(isset($menuID)){ if($menuID==$menu['menuID']){echo "selected";}}     ?>><?php  echo $menu['artikulli']; ?> </option>

                  <?php  
                    }
                    ?>
                  </select>

                
                </div>
                <div class="col">
                  <label for="name" class="my-1">Sasia</label>
                <input class="form-control" type="text" name="sasia" value="<?php if(isset($sasia)) {echo $sasia;}   ?>"  >
                

                <div class="col">
                    <label for="name" class="my-1 ml-0">Preferenca</label>
                <textarea name="preferenca" class="form-control" id="" cols="30" rows="10"  ><?php if(isset($preferenca)) {echo $preferenca;}   ?></textarea>

                </div>
                <div class="col">
                  <label for="name" class="my-3">Data</label>
                <input class="form-control" type="text" name="data"  value="<?php if(isset($data)) {echo $data;}   ?>" >
               
                </div>


                   <?php if(isset($_GET['porosiaID'])) { ?>

                     <input type="submit" name="modifikoPorosi" value="Modifiko" class="btn btn-success">

                 <?php
                  } else { ?>
                  <input type="submit" name="shtoPorosi" value="Shto" onclick="alert('Porosia u shtua me sukses')" class="btn btn-success">
                  <?php } ?>
           
            </div>
        </form>

    
       </div>
     </div>
   </div>

    <div style="clear: both;">

<div class="clearfix"></div>
