    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-lg-offset-1 text-center">
                    <img src="img/footer-logo_lvah.png" class="img-responsive">
                    
                    
                </div>
                
                <div class="col-lg-6 col-lg-offset-1 text-center">
                    <h4><strong>Liberty Village Animal Hospital</strong>
                    </h4>
                    <p class="drellen">Dr. Ellen Kinzl</p>
              
                    <p>171 East Liberty St.<br>Unit #120, Toronto, ON M6K 3P6</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i><a href="tel:16479253878"> 647.925.3878</a></li>
                        <li><i class="fa fa-fax fa-fw"></i><a href="tel:16479253878"> 416.532.4679</a></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="info@libertyvillageanimalhospital.com">info@libertyvillageanimalhospital.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/Liberty-Village-Animal-Hospital-1558789244435692/timeline"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                       <!-- <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>-->
                        <li>
                            <a href="https://www.instagram.com/libertyvillageanimalhospital/"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                   	<p class="copyright">Copyright Liberty Village Animal Hospital&copy; 2016. All rights reserved.</p>
                    <p class="copyright">Site design by <a href="http://www.coreywebersdesign.com">coreywebersdesign.com</a></p>

                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
  <script src="../js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>  
    
 <!-- AniJS core library -->
  <script src="js/anijs-min.js"></script> 
  <!-- Include to use $addClass, $toggleClass or $removeClass -->
  <script src="http://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>

  <!-- The scrollreveal helper -->
  <script src="http://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
