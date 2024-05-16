<?php
include('./header.php');
?>

<main>
	<section class="full-width_padding">
		<div class="full-width_border border-2" style="border-color: #eee">
			<div class="desk-banner">
				<div class="shop-banner position-relative ">
					<div class="background-img" style="background-color: #eee">
						<img loading="lazy" src="./images/contact-banner.png" alt="Pattern"
							class="slideshow-bg__img " />
					</div>
				</div>
			</div>
			<div class="mob-banner">
				<div class="shop-banner position-relative ">
					<div class="background-img" style="background-color: #eee">
						<img loading="lazy" src="./images/contact-banner2.png" width="1759" height="420" alt="Pattern"
							class="slideshow-bg__img" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="mb-4 pb-lg-3"></div>



	<section class="contact-area section_gap">
		<div class="mw-930">
			<div class="container">
				<div class="row features-inner">
					<div class="col-lg-4 col-md-4 col-sm-12 contact-box">
						<div class="contact-features">
							<p>
							<strong> 📍 Address:</strong><br> Nadeem Colony Near Hina Masjid Idgah Road ,Saharanpur, Uttar Pradesh-247001
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 contact-box">
						<div class="contact-features">
							<p>
							<strong> 📞 Phone:</strong><br>
							<a href="phone:7302649225"></a><span>
								7302649225 </span>
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 contact-box">
						<div class="contact-features">
							<p>
							<strong>  📩 Email:</strong><br>
							<span>
								azwoodartmart081@gmail.com</span>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>


	<section class="contact-us container">
		<div class="mw-930">
			<div class="contact-us__form">
				<form name="contact-us-form" class="needs-validation" novalidate>
					<h3 class="mb-5">Get In Touch</h3>
					<div class="form-floating my-4">
						<input type="text" class="form-control" id="contact_us_name" placeholder="Name *" required>
						<label for="contact_us_name">Name *</label>
					</div>
					<div class="form-floating my-4">
						<input type="phone" class="form-control" id="contact_us_call" placeholder="Phone Number *"
							required>
						<label for="contact_us_name">Phone Number *</label>
					</div>
					<div class="form-floating my-4">
						<input type="email" class="form-control" id="contact_us_email" placeholder="Email address *"
							required>
						<label for="contact_us_name">Email address *</label>
					</div>
					<div class="my-4">
						<textarea class="form-control form-control_gray" placeholder="Your Message" cols="30" rows="8"
							required></textarea>
					</div>
					<div class="my-4">
						<button type="submit" class="button-24">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>

<div class="mb-2 pb-xl-5"></div>

<section class="google-map">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.062992320801!2d77.52509797500777!3d29.977619621734885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390eeb51aadcbd75%3A0x3a6462da09b27268!2sNadeem%20calony!5e0!3m2!1sen!2sin!4v1710396130772!5m2!1sen!2sin"
		width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
		referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<?php
include('./footer.php');
?>