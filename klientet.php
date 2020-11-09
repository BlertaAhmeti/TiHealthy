<?php include_once "inc/header.php";
   include_once "functions.php";
 ?>


   <section class="w-100"
        style="background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),url(images/th1.png);height: 80vh;">
        <div class="text-center text-light" style="position: relative; top: 50%;left: 50%;transform: translate(-50%,-50%);">
            <h1 class="display-3">Klientet !</h1>
      
        </div>
    </section>

  <div class="container">
    <h2 class="text-uppercase text-success mt-5 pt-5">Klientet</h2>
        <hr>
    <div class="row">
          <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th>KlientiID</th>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Telefoni</th>
                    <th>Emaili</th>
                    <th>Adresa</th>
                    <th>Modifiko</th>
                    <th>Fshiej</th>
                </tr>
            </thead>
            <tbody>

              <?php  
               $klientet=merrKlientet();
               while ($klienti= mysqli_fetch_assoc($klientet)) {?>
                   <tr>
                     <th scope="row" ><?php echo $klienti['klientiID'];  ?></th>
                    <th scope="row" ><?php echo $klienti['emri'];  ?></th>
                    <th scope="row" ><?php echo $klienti['mbiemri'];  ?></th>
                    <th scope="row" ><?php echo $klienti['telefoni'];  ?></th>
                    <th scope="row" ><?php echo $klienti['emaili'];  ?></th>
                    <th scope="row" ><?php echo $klienti['adresa'];  ?></th>
                    <th scope="row"> <a href="shto_modifikoKlient.php?klientiID= <?php echo $klienti['klientiID'] ; ?>">Edit</a></th>
                   <th scope="row"> 
                     <form action="deleteKlient.php" method="post">
                       <input type="hidden" name="klientiID" value="<?php echo $klienti['klientiID']; ?>">
                       <button type="submit" onclick="return shfaqAlertin()">Delete</button>
                     </form>
                 </th>
                    
                </tr>
               


              <?php
               }
              ?>
            </tbody>

        </table>
           <button class="btn btn-success btn-outline-dark" style="float: right;" onclick="window.location.href='shto_modifikoKlient.php'">Shto</button>
        <br>

        </table>
    </div>
  </div>


    <div style="clear: both;">


 <?php include_once "inc/footer.php"  ?>