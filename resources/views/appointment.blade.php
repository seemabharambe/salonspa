
@extends('home')



<div class="col-xl-4 col-lg-5 offset-xl-1 offset-lg-0 offset-md-0">
						<div class="footer-widget contact-widget">
	


<h4 class="fw-title"><i class="flaticon-039-make-up"></i>Make an appointment</h4>
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
	