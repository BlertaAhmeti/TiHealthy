
     <footer style="background-color: #000; overflow: hidden;" class="mt-5">
        <p class="text-muted p-3 my-auto ">&copy;Copyright: All rights deserved</p>
         
     </footer>
    <!-- JS, Popper.js, and jQuery -->

   <script   src="https://code.jquery.com/jquery-3.5.1.min.js"   integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="   crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.nav-item').on('click',function(){
              $('.nav-item').removeClass("activeItem");
              $(this).addClass("activeItem");  
            });
        });

     
    function shfaqAlertin(){
      $alert= confirm("A jeni i sigurte qe doni ta fshini kete rresht");
      if($alert)
      {
        return true;
      }
      else{
        return false;
      }
    }



        function kAlert(){
      $alert= confirm("A jeni i regjistruar si klient ? Nese jo, regjistrohuni");
      if($alert)
      {
        return true;
      }
      else{
        return  false;
      }
    }

      
    </script>

</body>

</html>