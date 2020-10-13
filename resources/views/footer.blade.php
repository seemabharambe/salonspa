
	<!-- Footer section -->
	<footer class="footer-section set-bg" style="background-color: #000000;">
		<div class="footer-warp">
			<div class="footer-widgets">
				<div class="row">
					<div class="col-xl-7 col-lg-7">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-md-6">
								<div class="footer-widget about-widget">
									<img src="img/Inkedlogosweetapple_LI.jpg" alt="" width="350px">
									 <h2 >Heart of Perfect Beauty</h2>
										<p style="color:white;">Sweet Salon Spa providing all services of beauty care,skin treatment,
									hair treatment and Spa .</p>
									<div class="fw-social">
										
										<a href=""><i class="fa fa-facebook"></i></a>
										<a href=""><i class="fa fa-twitter"></i></a>
										
										<a href=""><i class="fa fa-linkedin"></i></a>
									</div>
								</div> 
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 offset-xl-2 offset-lg-1 offset-md-0">
								<div class="footer-widget list-widget">
									<h2 class="fw-title"><i class="flaticon-009-makeup-5"></i>Our Services</h2>
									<ul style="color:white;">
										<li ><a href="pedicure">Manicure</a></li>
										<li><a href="pedicure">Pedicure</a></li>
										<li><a href="spa">Massage</a></li>
										<li><a href="hairservices">Hair Dressing</a></li>
										<li><a href="spa">Spa</a></li>
										
										<li><a href="Skin">Beauty treatments </a></li>
									
									
										<li><a href="hairservices">Wedding Hair</a></li>
									<li><a href="hairservices">Botox</a></li>
										
									</ul>
								</div> 
							</div>
						</div>	
					</div>
					<div class="col-xl-4 col-lg-5 offset-xl-1 offset-lg-0 offset-md-0">
						<div class="footer-widget contact-widget">
							<h2 class="fw-title"><i class="flaticon-039-make-up"></i>Make an appointment</h2>
							<form class="fw-contact-form" method="POST" action="insertrecord">
								@csrf
								<div class="cf-inputs">
									<div class="cf-input">
										<input type="text" placeholder="Your Name" name="name" required>
									</div>
									<div class="cf-input">
										<input type="text" class="cf-input" placeholder="Your E-mail"  name="email" required>
									</div>

											<div class="cf-input">
										<input type="text" class="cf-input" placeholder="Mobile Number" name="phone" required>
									</div>

									<div class="cf-input">
										<input type="text" class="cf-input" placeholder="Service you need" name="chooseservice" required>
									</div>
									<div class="cf-input">
										<input type="text" class="cf-input datepicker" placeholder="Date" name="date" required>
									</div>
								</div>
								<textarea style="color:red;" placeholder="Your Message" name="message"></textarea>
								<button class="site-btn" name="send" required>Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-nav">
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="">About us</a></li>
						<li><a href="">Services</a></li>
						<li><a href="">News</a></li>
						<li><a href="">Contact</a></li>
					</ul>
				</div>
				<div class="copyright">
					<p>Sweet Salon Spa <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> | Website Template Designed by Seema Bharambe</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

    </body>
</html>