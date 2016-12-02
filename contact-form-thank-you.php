<!DOCTYPE html>
<html lang="en">

<?php include "includes/meta.php"; ?>

<body>

<?php include "includes/navigation.php"; ?>

    <!-- Header -->
    <header id="top" class="header">
        		<div class="container background-col">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="2s">
                                <h1><img class="img-responsive img-shadow" src="img/Logol_Liberty-Village-white.png"></h1>
                            </div>
                        </div>
                            
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                    <h1 class="title text-shadow" data-anijs="if: scroll, on: window, do: rotateIn animated, before: $scrollReveal">Thank you!<br></h1>
					<h3 class="subhead text-shadow">Thank you for submitting your email address. We will contact you soon!</h3>
                                        <hr class="primary small">
                </div>            
                <div class="col-lg-3 col-lg-offset-3 col-xs-12">
                                    <img src="img/Ellen-with-dog.jpg" class="img-responsive">
				</div>
                <div class="col-lg-6 col-lg-offset-0 col-xs-12">
					<h2 class="drellen text-shadow">Dr. Ellen Kinzl</h2>
					<p><a href="mailto:info@libertyvillageanimalhospital.com" class="email-mobile"><strong>info@libertyvillageanimalhospital.com</strong></a></p>
                                        <p style="color: #fff"><i class="fa fa-phone fa-fw"></i><a href="tel:+16479253878"><strong> 647.925.3878</strong></a><br>
                                        <strong><i class="fa fa-fax fa-fw"></i> 416.532.4679</strong></p>
					<p class="address"><strong>171 East Liberty St.<br>Unit #120, Toronto, ON M6K 3P6</strong></p>
                                        <br>
							    
                    
		    
                   
				</div>
				
			</div>

		</div>
    </header>
        <!-- Map -->
    <section id="contact" class="map">
<div class="google-api maps">
            	<iframe id"api" src="lvah-map/index.html?nocache=<?php echo time();?>" 
                	width="100%" height="620" frameborder="0" style="border:0"></iframe>
</div>
</section>
    
<?php include "includes/footer.php"; ?>

</body>
</html>