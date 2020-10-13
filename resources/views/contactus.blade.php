@extends('home')

@section('center')
<!DOCTYPE html>
<html>
<head>
	<title>Book Appointment | Face Facial | Hair Straightening | Full Body Massage 
</title>


<meta charset="UTF-8">
	<meta name="description" content="Contact us to get best salon spa services in Sangvi,Pune.We specialize in facial care,bridal make up, hair treatment, hair color,full body massage & hair spa.
">
	<meta name="keywords" content="Hair Spa,hair treatment,full body massage,Sweet salon spa
">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<section class="contact-section spad" style="background-color: #000000;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-content">
					<h2 class="contact-title">Sweet Salon Spa</h2>
					<p>We make you look your best and feel sensational!.<br>
						We create styles for the way you look and the way you live!<br>
						Look good, Feel good, Be good.
					</p>
					<div class="ci-item">
						<div class="">
							<img src="img/" alt="" width="150px" >
						</div>
						<div class="ca-text"><br>Sweet Salon Spa <br>
											 Sri Niwa, B Wing Flat No. B-2, IST Floor, Sangavi, <br>Pune - 411027, Above Sai Mandir, Sai Chowk (Map),<br>
											 Pune.</div>
					</div>
					<div class="ci-item">
						<div class="ca-icon">
							<img src="img/icons/phone.png" alt="">
						</div>
						<div class="ca-text"> +91 7768049489</div>
					</div>
				</div>
				<div class="col-lg-6">
					<h2 class="contact-title">Get in Touch</h2>
					<form class="contact-form" method="POST" action="intouch">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Your Name" name="nam">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Your E-mail" name="mail">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="Subject"  name="sub">
								<textarea placeholder="Your Message" name="msg"></textarea>
								<button class="site-btn" name="send">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="map" id="map-canvas">
						<figure><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.8881192666554!2d73.81375401420505!3d18.579082072232733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b90f81bf4d4b%3A0xc6f8c94203ea7544!2sSweet%20Salon%20%26%20Spa!5e0!3m2!1sen!2sin!4v1602240328270!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</figure>

			</div>
		</div>
	</section>
	<!-- Contact section end -->

</body>
</html>

@endsection