</div>



</main>



<footer class="page-footer font-small green pt-4 mt-1">

    <!--Footer Links-->
    <div class="container-fluid text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 mx-1">
                <h5 class="text-green"> <a> <i class="fa fa-location-arrow fa-3x"> </i> </a> </h5>
                <p> <strong> Head Office :</strong> Plot 856 cassava street wuye district Abuja , Nigeria </p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-3 mx-1">
                <h5 class="text-green"><a href=""><i class="fa fa-envelope fa-3x"> </i> </a> </h5>
                <p>support@aaricintegratedservicesandsolution.com.ng </p>
            </div>
            <div class="col-md-3 mx-1">

              <h5 class="text-green"><a href=""><i class="fa fa-phone-square fa-3x"> </i> </a></h5>
                <p> 
                           +2347069098434</p>  
            </div>


         <!--   <div class="col-md-3 mx-1 ">
                <h5 class="text-green"><a href=""><i class="fa fa-facebook fa-3x "></i> <a href=""><i class="fa fa-instagram fa-3x "></i></a>

<a target="_blank"  href=""><i class="fa fa-twitter  fa-3x "></i></a>
                </h5>
                

            </div> -->
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="/"> aaricintegratedservicesandsolution.com.ng </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

    




<!-- footer ends -->




    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script src="https://maps.google.com/maps/api/js"></script>  


   
   

<script>
   // Regular map
function regular_map() {
    var var_location = new google.maps.LatLng(9.051108, 7.446465);

    var var_mapoptions = {
        center: var_location,
        zoom: 5
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
    });
}

// Initialize maps
google.maps.event.addDomListener(window, 'load', regular_map);
    </script>

<script type="text/JavaScript"
  src="https://maps.google.com/maps/api/js">
</script>

<script >
    $('.carousel').carousel({
        interval:500,
    })
</script>