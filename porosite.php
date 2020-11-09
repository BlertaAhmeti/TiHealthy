<?php include_once "inc/header.php";
   include_once "functions.php";
 ?>


   <section class="w-100"
        style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url(images/th1.png);height: 80vh;">
        <div class="text-center text-light" style="position: relative; top: 50%;left: 50%;transform: translate(-50%,-50%);">
            <h1 class="display-3">Porosite !</h1>
      
        </div>
    </section>

  <div class="container">
    <h2 class="text-uppercase text-success mt-5 pt-5">Porosite</h2>
        <hr>
    <div class="row">
          <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    
                    <th>Klienti</th>
                    <th>Menu</th>
                    <th>Sasia</th>
                    <th>Prefereca</th>
                    <th>Cmimi Total</th>
                    <th>Data</th>
                    <th>Modifiko</th>
                    <th>Fshiej</th>
                </tr>
            </thead>
            <tbody>

              <?php  
               $porosite=merrPorosite();
               while ($porosia= mysqli_fetch_assoc($porosite)) {
                 $emriKlientit=mysqli_fetch_assoc(merrKlientEmri($porosia['klientiID']));

                 $mbiemriKlientit=mysqli_fetch_assoc(merrKlientMbiemri($porosia['klientiID']));

                 $emriArtikullit=mysqli_fetch_assoc(merrMenuArtikulli($porosia['menuID']));

                  $cmimiM=mysqli_fetch_assoc(merrMenuCmimi($porosia['menuID']));

                 
                  ?>
                   <tr>
                    <th scope="row" ><?php echo $emriKlientit['emri']. " ";  ?><?php echo $mbiemriKlientit['mbiemri'];  ?></th>
                    <th scope="row" ><?php echo $emriArtikullit['artikulli'];  ?></th>
                    <th scope="row" ><?php echo $porosia['sasia'];  ?></th>
                    <th scope="row" ><?php echo $porosia['preferenca'];  ?></th>
                    <th scope="row"><?php echo $cmimiM['cmimi']* $porosia['sasia'];  ?> </th>
                    <th scope="row" ><?php echo $porosia['data'];  ?></th>
                    <th scope="row"> <a href="shto_modifikoPorosi.php?porosiaID= <?php echo $porosia['porosiaID'] ; ?>">Edit</a></th>
                   <th scope="row"> 
                     <form action="deletePorosi.php" method="post">
                       <input type="hidden" name="porosiaID" value="<?php echo $porosia['porosiaID']; ?>">
                       <button type="submit" onclick="return shfaqAlertin()">Delete</button>
                     </form>
                 </th>
                    
                </tr>
               


              <?php
               }
              ?>
            </tbody>

        </table>
           <button class="btn btn-success btn-outline-dark" style="float: right;" onclick="window.location.href='shto_modifikoPorosi.php'">Shto</button>
        <br>

        </table>
    </div>
  </div>


    <div style="clear: both;">


 <?php include_once "inc/footer.php"  ?>