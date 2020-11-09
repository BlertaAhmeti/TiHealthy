<?php include_once "inc/header.php" ?>
 <style>
   h1:hover{
     
      margin-top: -10px;
   }
 </style>

    <div id="carouselId" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="images/th1.png" class="img-fluid" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Mir&euml; se vini!</h3>
                    <p>Veni ma i mir&euml; n'Gjilan po ju pret.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/th2.png" class="img-fluid" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Title</h3>
                    <p>Description</p>
                </div>
            </div>
          </div>
        <a class="carousel-control-prev " href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

 <!-- Rreth neshe ---->
 <section id="about" class="py-5">
        <div class="container py-5 text-center">
            <h1 class="display-4 w-25 mx-auto border-bottom pb-3">Rreth nesh!</h1>
            <div class="row pt-5">
                <div class="col-sm-12 col-md-6">
                    <p class="lead text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis
                        tempore dolorem, officiis labore officia inventore ut esse natus praesentium earum eos a sit
                        maiores enim nisi. Nesciunt totam sit, placeat quae saepe perspiciatis culpa accusamus
                        voluptatem harum asperiores excepturi fugiat aut ipsa facilis tenetur recusandae repellat neque
                        modi incidunt debitis iste! Blanditiis in tempore nisi, dignissimos accusantium voluptas at quos
                        odit impedit dolorem, sint dicta provident expedita enim architecto
                    </p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img src="images/th1.png" alt="" class="img-fluid" style="box-shadow: 1px 1px 10px black;">
                </div>
            </div>
        </div>
    </section>

     <section id="about2" class="py-2">
        <div class="container py-5 text-center">
            <div class="row pt-5">
                <div class="col-sm-12 col-md-6 ">
                    <img src="images/th2.png" alt="" class="img-fluid pr-5" style="box-shadow: 1px 1px 10px black;"> 
                </div>
                <div class="col-sm-12 col-md-6 bg-dark">
                   <p class="lead text-justify text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas excepturi laudantium vitae, similique asperiores sapiente earum eligendi dolores aliquid facere repellat et expedita pariatur delectus dicta harum! Quo corporis adipisci, ullam esse dicta accusantium dignissimos ipsum aspernatur voluptatem, ipsa perspiciatis, similique debitis dolorem itaque veritatis modi at. Impedit, consectetur, esse?</p>
                </div>
            </div>
        </div>
    </section>
     
<!--- sherbimet --->
   <section id="services" class="py-5 bg-light">
     <div class="container py-5 text-center">
       <h1 class="display-4 w-25 mx-auto border-bottom pb-3">Sh&euml;rbimet</h1>
        <div class="row pt-5">
          <div class="col-sm-12 col-md-4">
            <h1 class="text-success mb-3 hdr">Food</h1>
            <img src="images/wrap1.jpg" alt="" class="w-100">
          </div>
          <div class="col-sm-12 col-md-4">
            <h1 class="text-success mb-3">Drinks</h1>
           <img src="images/smoothie1.jpg" alt="" class="w-100">
        </div>
         <div class="col-sm-12 col-md-4">
            <h1 class="text-success mb-3">Snacks</h1>
           <img src="images/snack1.jpg" alt="" class="w-100">
        </div>
        
     </div>
   </section>




<div class="clearfix"></div>

<?php include_once "inc/footer.php"  ?>