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
                                    <h1 class="title text-shadow" data-anijs="if: scroll, on: window, do: rotateIn animated, before: $scrollReveal">We are now Open!<br></h1>
					<h2 class="subhead text-shadow">Taking new patients now, come by and visit us.</h2>
                                        <hr class="primary small">
                </div>            
                <div class="col-lg-3 col-lg-offset-3 col-xs-12">
                                    <img src="img/Ellen-with-dog.jpg" class="img-responsive">
				</div>
                <div class="col-lg-6 col-lg-offset-0 col-xs-12">
					<h2 class="drellen text-shadow">Dr. Ellen Kinzl</h2>
					<p><a href="mailto:info@libertyvillageanimalhospital.com" class="email-mobile"><strong>info@libertyvillageanimalhospital.com</strong></a></p>
                                        <p style="color: #fff"><i class="fa fa-phone fa-fw"></i><a href="tel:16479253878"><strong> 647.925.3878</strong></a><br>
                                        <strong><i class="fa fa-fax fa-fw"></i> 416.532.4679</strong></p>
					<p class="address"><strong>171 East Liberty St.<br>Unit #120, Toronto, ON M6K 3P6</strong></p>
                                        <br>
							    
                    
		    <form class="form-inline signup" role="form" method="POST" name="contactform" action="contact-form-handler.php">
					  <div class="form-group">
							   
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
						    
					  </div>
					  <button type="submit" class="btn btn-theme">Join Our Mailing List!</button>                      
					</form>
					<script language="JavaScript">
					// Code for validating the form
					// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
					// for details
					var frmvalidator  = new Validator("contactform");
					 
					frmvalidator.addValidation("email","req","Please provide your email"); 
					frmvalidator.addValidation("email","email","Please enter a valid email address"); 
					</script>
                   
				</div>
				
			</div>

		</div>
    </header>

    <!-- About -->
    <section id="" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Your community family veterinarian contributing to your dog and cat's health and well being.</h2>
                
		</div>
				<div class="col-md-6">
		    <p>Welcome to Liberty Village Animal Hospital owned and operated by Dr. Ellen Kinzl. We are a brand new clinic which just opened in March 2016 and are thrilled to be joining this wonderful neighbourhood.</p>  
		</div>
		<div class="col-md-6">
		    <p>LVAH is a full service family animal hospital offering all your pet needs to live a long and healthy life. We want to work alongside you to help contribute to your beloved furry friend's well-being.</p>
		</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<div id="services" class="container-fluid">
		    <div class="row facility-header text-center">
					    <h1 class="text-shadow" data-anijs="if: scroll, on: window, do: slideInRight animated, before: $scrollReveal">Our Facility &amp; Services</h1>
					    <hr class="small">
		    </div>
</div>
    
    <section id="" class="services bg-primary">
        <div class="container-fluid">
		 
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
					<img src="img/our-facility.jpg" class="img-responsive" data-anijs="if: scroll, on: window, do: rollIn animated, before: $scrollReveal repeat">
                        </div>
                        <div class="col-md-6 col-sm-6 text-left">
					 <h3 class="text-center">Our Facility</h3>
                                <p>We are so proud of our clinic. It's a beautiful, spacious and sunny environment where your dog has plenty of space to walk around while in our waiting room. Additionally, we have a separate cat exam room to make some of our timid feline patients feel more comfortable.
Our hospital allows our team to work efficiently while providing the very best level of care and comfort for your pet.</p>
                                <p>As we are a brand new clinic we have the latest equipment and technology needed to keep your pet as healthy as possible.
Additionally, we offer in-house diagnostics such as blood analyzers so we can quickly determine the cause of your pet's ailments when ill.</p>
</div>
		    </div>
		    <div class="row">
			
			<div class="col-md-6">	
		                <h3 class="text-center">The services we offer include:</h3>
		    
                                <ul class="text-left">
				<li>Nutritional counselling</li>
				<li>In house blood chemistry analyzers and CBC</li>
				<li>A strong relationship with our external laboratory for more extensive blood, urine and fecal testing</li>
				<li>Digital radiology for whole body</li>
				<li>Dentistry and digital dental radiology</li>
				<li>Full service pharmacy as well as an array of supplements to aid in preventive care</li>
				<li>Surgical care including spays, neuters and specific soft tissue and abdominal surgeries</li>	
				<li>Extensive patient monitoring including ECG, bloop pressure, capnograph and pulse oximetry during any anesthetic procedures</li>
				</ul>
                                <!--<a href="#" class="btn btn-dark">Learn More</a>-->
                          <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-stethoscope fa-stack-1x text-primary"></i>
					</span>
		            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-heartbeat fa-stack-1x text-primary"></i>
                            </span>
					<span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-medkit fa-stack-1x text-primary"></i>
                            </span> 
			</div>
                    </div>
                    <!-- /.row (nested) -->
		    <div class="col-md-6">	
					<img src="img/our-facility-2.jpg" class="img-responsive" data-anijs="if: scroll, on: window, do: rollIn animated, before: $scrollReveal repeat">
			</div>
                </div>
		    
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1 class="text-shadow" data-anijs="if: scroll, on: window, do: slideInLeft animated, before: $scrollReveal">Your local Liberty Village Veterinarian</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="about" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1 class="text-center">ABOUT US</h1>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                           <p>We firmly believe in the importance in working as a team to ensure all aspects of your pet's life is as healthy as it can be.</p>
                           <p> 
                                I've come from an extensive background working in emergency medicine for most of my career. Occasionally, I have worked as a relief vet in traditional family style hospitals and this is where my desire to work with clients and their pets on a regular basis was born. 
                           </p><p>What sets us apart is our small family style team in which each member carries an extensive amount of experience working in emergency medicine and in specialty practices alongside several board certified specialists in veterinary medicine. </p>
			   <p>Our focus lies in preventive medicine to keep your pet healthy as well as assessment and disease diagnostics when your pet falls
ill. While we pride ourselves in our strong background in veterinary medicine we also recognize that we are very fortunate to have so many specialists in veterinary medicine situated in Toronto. That being said, at times we may choose to refer your pet to one of these excellent facilities for ongoing care for your furry friend.</p>
			   <p>We consider these facilities our partners who also provides exceptional specialty and emergency care to your pets and terrific service to you. We love drop in visits so please feel free to drop by anytime with your pet to say hello and snag a coffee and treat :)</p>
                        </div>
                        <div class="col-md-6">
					<img src="img/about-us-team.jpg" class="img-responsive">
			</div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    
   <aside id="team" class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>OUR TEAM</h1>
		      <hr class="small">
                </div>
                <div class="col-lg-6 text-left">
		    <div class="col-md-6">
                    <img src="img/Dr.Ellen-Kinzel.jpg" class="img-responsive center-block img-rounded" data-anijs="if: scroll, on: window, do: rollIn animated, before: $scrollReveal repeat">
		    </div>
                    <h2>Dr. Ellen Kinzl</h2>
		    <p>My name is Ellen Kinzl and I'm so happy to be fortunate enough to open my first animal hospital
here in Liberty Village.</p><p>
For most of my career since graduating from the Ontario Veterinary College in 2006 I have
worked in emergency medicine in referral hospitals in the GTA as well as in Sydney, Australia
alongside an extensive amount of board certified specialists.</p><p>This has been a wonderful time of
my life as I have gained a tremendous amount of important experience in veterinary medicine.
It has been challenging and fast paced, but what I found to be lacking was a close relationship
with pet owners and having a consistent presence with clients and their pets.</p>
<p>That being said, I am so very much looking forward to be part of you and your pet's life helping
to keep them as healthy as possible. I love chatting and encourage you to drop in any time to
say hello and meet my team and I :)</p><p>I love my work as a veterinarian but I also love my free time. I'm a self proclaimed travel addict
and have been so lucky to have been able to see so many wonderful and exotic places in the
world. Several whitewater rafting trips have lead me to these places including South America,
Nepal, India and Africa. I could literally talk about traveling for hours! If you're ever in the
neighbourhood and have some free time and are like-minded stop by to share experiences!</p>
                </div>
                 <div class="col-lg-6 text-left">
		    <div class="col-md-6">
                    <img src="img/Karen.jpg" class="img-responsive center-block img-rounded" data-anijs="if: scroll, on: window, do: rollIn animated, before: $scrollReveal repeat">
		    </div>
                    <h2>Karen</h2>
		    <p>My name is Karen. I've been a Registered Veterinary Technician since 2001 and
have spent the last 11 years working in a emergency and referral hospital.</p><p>
I have worked extensively in surgery and anesthesia alongside board certified surgeons
and anesthesiologists which has allowed me to have a great deal of experience
in advanced anesthesia and pain management.</p>
		    
		    <p>I am very excited to be at Liberty Village Animal Hospital to focus my experience
on pets' wellness care and look forward to be part of your petÕs health care team.
I continue to work occasionally at an emergency hospital and do anesthesia on
an emergency basis.</p>
<p>When I'm not working, I'm a bit of a foodie and I love cooking and trying out new
and fabulous restaurants. I have three great kids, a crazy dog and two lovely cats
all of whom keep me very busy, as does puttering around my little garden and
house.</p>
                </div>
            </div>
        </div>
    </aside>
   
   <section id="partners" class="">
        <div class="container">
            <div class="row">
		    <div class="col-lg-10 text-center col-md-offset-1 text-white" data-anijs="if: scroll, on: window, do: slideInRight animated, before: $scrollReveal">
		    <h1 class="text-shadow">OUR PARTNERS</h1>
		    <hr class="small">
		    <p class="text-shadow">Recognizing that maintaining your pet's health requires a full team effort, we have several partners we take pride in having a close relationship with to be able to extend their services to you.</p>
		    </div>
	    </div>
	<div class="row col-md-offset-1">
                <div class="col-lg-2 text-center">
                    <a href="http://vectoronto.com/"><img src="img/VEC-Toronto-logo.jpg" class="img-responsive center-block img-rounded partners-links"></a>
                    <a href="http://vectoronto.com/" class="btn btn-lg btn-primary partners-links">Veterinary<br>Emergency Clinic</a>
                </div>
                <div class="col-lg-2 text-center">
                    <a href="http://www.veterinaryemergencyhospitalofwesttoronto.com/"><img src="img/veterinaryemergencyhospitalofwesttoronto-logo.jpg" class="img-responsive center-block img-rounded partners-links"></a>
                    <a href="http://www.veterinaryemergencyhospitalofwesttoronto.com/" class="btn btn-lg btn-primary partners-links">Veterinary<br>Emergency Clinic<br>of West Toronto</a>
                </div>
		    <div class="col-lg-2 text-center">
                    <a href="http://www.torontodogrehab.com/"><img src="img/toronto-dog-rehab-logo.jpg" class="img-responsive center-block img-rounded partners-links"></a>
                    <a href="http://www.torontodogrehab.com/" class="btn btn-lg btn-primary partners-links">Animal<br>Rehabilitation<br>Centre</a>
                </div>
		    <div class="col-lg-2 text-center">
                    <a href="http://www.wetnosesphotography.ca/"><img src="img/wet-noses-logo.jpg" class="img-responsive center-block img-rounded partners-links"></a>
                    <a href="http://www.wetnosesphotography.ca/" class="btn btn-lg btn-primary partners-links">Wet Noses<br>Pet Photography</a>
                </div>
		    <div class="col-lg-2 text-center">
                    <a href="https://www.facebook.com/ghvetsurgery/"><img src="img/Golden-Horseshoe-Veterinary-Surgery-logo.jpg" class="img-responsive center-block img-rounded partners-links"></a>
                    <a href="https://www.facebook.com/ghvetsurgery/" class="btn btn-lg btn-primary partners-links">Golden Horseshoe<br>Veterinary Surgery</a>
                </div>		    
	</div>	    
	</div>
   </section>


    <!-- Call to Action -->
    <aside id="afterhoursec" class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>After Hours Emergency Clinics</h1>
		      <hr class="small">
                </div>
                <div class="col-lg-6 text-center">
                    <a href="http://vectoronto.com/"><img src="img/VEC-Toronto-logo.jpg" class="img-responsive center-block img-rounded"></a>
                    <a href="tel:14169202002" class="btn btn-lg btn-emergency img-rounded"><i class="fa fa-phone fa-fw"></i><strong> CALL NOW</strong><br>Veterinary<br>Emergency Clinic</a>
                </div>
                <div class="col-lg-6 text-center">
                    <a href="http://www.veterinaryemergencyhospitalofwesttoronto.com/"><img src="img/veterinaryemergencyhospitalofwesttoronto-logo.jpg" class="img-responsive center-block img-rounded"></a>
                    <a href="tel:14162393453" class="btn btn-lg btn-emergency img-rounded"><i class="fa fa-phone fa-fw"></i><strong> CALL NOW</strong><br>Veterinary Emergency<br>Clinic of West Toronto</a>
                </div>
            </div>
        </div>
    </aside>
    <!-- Call to Action -->
    <aside id="wellness-plans" class="call-to-action wellness">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>WELLNESS PLANS</h1>
		      <hr class="small">
                </div>
                <div class="col-md-4 col-md-offset-1">
		    
		    <img src="img/wellness-plans-Ellen.jpg" class="img-responsive" data-anijs="if: scroll, on: window, do: rollIn animated, before: $scrollReveal repeat">
		</div>
		
		<div class="col-lg-6" data-anijs="if: scroll, on: window, do: slideInRight animated, before: $scrollReveal repeat">
                    <p>We are pleased to be able to offer to our clients and patients wellness plan packages for puppies and kittens as well as adult dogs and cats.</p>

<p>By offering these plans it takes some of the financial burden off your shoulders by allowing affordable monthly payments over the year for preventive health care services.</p>
                 <p>The goal of these plans are to help ensure your pet stays as healthy as possible by focusing on vaccines, deworming, wellness blood and urine testing, dental care, nutrition, flea, tick and heart worm prevention and the use of supplements.
Please see below for a more detailed description of the plans we offer.</p>
		</div>
    
            </div>
        </div>
    </aside>
    <aside id="onlinestore" class="call-to-action online-store">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
		    <a href="http://www.myvetstore.ca/libertyvillage"><img src="img/MVS-Logo.png" class="img-responsive center-block img-rounded"></a>
                    <h2>ONLINE STORE</h2>
		      <hr class="small">
		    <a href="http://www.myvetstore.ca/libertyvillage" class="btn btn-lg btn-emergency img-rounded"><i class="fa fa-cart-plus fa-fw fa-2x"></i><strong> SHOP NOW</strong></a>

                </div>
                <div class="col-lg-6">
                    <p>Now you can enjoy the benefits of home delivery of your pet's prescription medications and diets, as well as a wide range of non-prescription items. We trust you will enjoy the ease of buying products and prescriptions for your pets on-line and the convenience of having them delivered right to your home. Our experienced and knowledgeable staff are ready to help you find the best health outcomes for your pet and we are committed to extending this service by delivering high quality, veterinarian-approved products right to your door.</p>

<p>Sign in now to re-order your pet products or to check the status of your order.

If you are a registered user, access your account by using the link provided in your re-order reminder email or by entering your login information into our sign-in box on this web page.</p>
<p>If you are new to our web store, please contact us and we will be happy to sign you up. Or click on this link to let us know that you would like to register for a web store password.</p>
                
<img src="img/dog-on-floor.png" class="img-responsive center-block img-rounded">		
		</div>
		

            </div>
        </div>
    </aside>
    

    <!-- Map -->
    <section id="contact" class="map">
<div class="google-api maps">
            	<iframe id"api" src="lvah-map/index.html?nocache=<?php echo time();?>" 
                	width="100%" height="620" frameborder="0" style="border:0"></iframe>
</div>
</section>
    <div id="footerlink"></div>
<?php include "includes/footer.php"; ?>

</body>

</html>
