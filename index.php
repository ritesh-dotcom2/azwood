<?php
include ('./header.php');
?>

<main>
	<section class="swiper-container js-swiper-slider swiper-number-pagination slideshow" data-settings='{
				"autoplay": {
					"delay": 5000
				},
				"slidesPerView": 1,
				"effect": "fade",
				"loop": true
			}'>
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<img loading="lazy" src="./images/02.png">
			</div>

			<div class="swiper-slide">
				<img loading="lazy" src="./images/04.png">
			</div>

			<div class="swiper-slide">
				<img loading="lazy" src="./images/05.png">
			</div>
		</div>

		<!-- <div class="container">
				<div
					class="slideshow-pagination slideshow-number-pagination d-flex align-items-center position-absolute bottom-0 mb-5">
				</div>
				
			</div> -->
	</section>

	<div class="container mw-1620  bg-white border-radius-10">

		<div class="mb-3 pt-1 pb-4"></div>

		<section class="category-carousel  container">
			<h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">Wide Range of Products</h2>

			<div class="position-relative">
				<div class="swiper-container js-swiper-slider" data-settings='{
			  "autoplay": {
				"delay": 5000
			  },
			  "slidesPerView": 8,
			  "slidesPerGroup": 1,
			  "effect": "none",
			  "loop": true,
			  "navigation": {
				"nextEl": ".products-carousel__next-1",
				"prevEl": ".products-carousel__prev-1"
			  },
			  "breakpoints": {
				"320": {
				  "slidesPerView": 2,
				  "slidesPerGroup": 2,
				  "spaceBetween": 15
				},
				"768": {
				  "slidesPerView": 4,
				  "slidesPerGroup": 4,
				  "spaceBetween": 30
				},
				"992": {
				  "slidesPerView": 5,
				  "slidesPerGroup": 1,
				  "spaceBetween": 45,
				  "pagination": false
				},
				"1200": {
				  "slidesPerView": 5,
				  "slidesPerGroup": 1,
				  "spaceBetween": 60,
				  "pagination": false
				}
			  }
			}'>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img loading="lazy" class=" mb-3" src="./images/dining.png" alt="" />

						</div>
						<div class="swiper-slide">
							<img loading="lazy" class=" h-auto mb-3" src="./images/chair.png" alt="" />

						</div>
						<div class="swiper-slide">
							<img loading="lazy" class=" h-auto mb-3" src="./images/table.png" alt="" />

						</div>
						<div class="swiper-slide">
							<img loading="lazy" class=" h-auto mb-3" src="./images/frame.png" alt="" />

						</div>
						<div class="swiper-slide">
							<img loading="lazy" class=" h-auto mb-3" src="./images/mirror.png" alt="" />

						</div>
					</div>
				</div>

				<div
					class="products-carousel__prev products-carousel__prev-1 position-absolute top-50 d-flex align-items-center justify-content-center">
					<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
						<use href="#icon_prev_md" />
					</svg>
				</div>
				<div
					class="products-carousel__next products-carousel__next-1 position-absolute top-50 d-flex align-items-center justify-content-center">
					<svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
						<use href="#icon_next_md" />
					</svg>
				</div>
			</div>
		</section>

		<div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

		<div class="overflow-hidden space" id="about-sec">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 mb-40 mb-xl-0">
						<div class="img-box5">
							<div class="img1">
								<img src="./images/about-img.png" alt="About">
							</div>
						</div>
					</div>
					<div class="col-xl-6 text-center text-xl-start">
						<div class="title-area mb-32">
							<h2 class="sec-title">🪑 About Us</h2>
							<p class="sec-text">AZ Wood Art Mart is a renowned furniture manufacturing company
								established in 2004. With over two decades of expertise, we specialize in crafting
								high-quality furniture pieces including chairs, tables, dining sets, mirrors,
								frames, and more. Our commitment to excellence and passion for woodworking have
								earned us a reputable position in the industry.</p>
						</div>
						<div class="checklist list-two-column mb-40">
							<ul>
								<li>🏢 Established Legacy</li>
								<li>🛋️ Wide Range of Products</li>
								<li>👌 Quality Craftsmanship</li>
								<li>🎨 Customization Options</li>
								<li>⏳ Timeless Designs</li>
								<li>🌱 Sustainable Practices</li>
								<li>💼 Enduring Value</li>
							</ul>
							<br>
						</div>
						<div>
							<a href="about.php" class="button-24 th-btn mt-4">Discover More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

	<section class="hot-deals container">
		<h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">Best Deals</h2>
		<div class="row">
			<div
				class="col-md-6 col-lg-4 col-xl-20per d-flex align-items-center flex-column justify-content-center py-4 align-items-md-start">
				<h2>Transform Your Space</h2>
				<h2 class="fw-bold">Transform Your Life</h2>
				<a href="shop.php" class="btn-link default-underline text-uppercase fw-medium mt-3">View All</a>
			</div>
			<div class="col-md-6 col-lg-8 col-xl-80per">
				<div class="position-relative">
					<div class="swiper-container js-swiper-slider" data-settings='{
						"autoplay": {
							"delay": 5000
							},
							"slidesPerView": 4,
							"slidesPerGroup": 4,
							"effect": "none",
							"loop": false,
							"breakpoints": {
							"320": {
								"slidesPerView": 2,
								"slidesPerGroup": 2,
								"spaceBetween": 14
							},
							"768": {
								"slidesPerView": 2,
								"slidesPerGroup": 3,
								"spaceBetween": 24
							},
							"992": {
							"slidesPerView": 3,
							"slidesPerGroup": 1,
							"spaceBetween": 30,
							"pagination": false
							},
							"1200": {
							"slidesPerView": 4,
							"slidesPerGroup": 1,
							"spaceBetween": 30,
							"pagination": false
							}
							}
						}'>
						<div class="swiper-wrapper">
							<div class="swiper-slide product-card product-card_style3">
								<div class="pc__img-wrapper">

									<img loading="lazy" src="./images/product/product1.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img">
									<img loading="lazy" src="./images/product/product2.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
									</a>
								</div>

								<div class="pc__info position-relative">
									<h6 class="pc__title">Mirror
									</h6>
									<div class="product-card__price d-flex">
										<span class="money price text-secondary">₹900</span>
									</div>

									<div
										class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
										<button class="btn-link btn-link_lg me-4 text-uppercase fw-medium"
											data-aside="cartDrawer" title="Add To Cart"><a
												href="contact.php">Enquiry</a></button>
									</div>
								</div>
							</div>
							<div class="swiper-slide product-card product-card_style3">
								<div class="pc__img-wrapper">
									<img loading="lazy" src="./images/product/product3.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img">
									<img loading="lazy" src="./images/product/product4.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
									</a>
								</div>

								<div class="pc__info position-relative">
									<h6 class="pc__title">Table</h6>
									<div class="product-card__price d-flex">
										<span class="money price text-secondary">₹620</span>
									</div>

									<div
										class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
										<button class="btn-link btn-link_lg me-4 text-uppercase fw-medium"
											data-aside="cartDrawer" title="Add To Cart"><a
												href="contact.php">Enquiry</a></button>
									</div>
								</div>
							</div>
							<div class="swiper-slide product-card product-card_style3">
								<div class="pc__img-wrapper">

									<img loading="lazy" src="./images/product/product5.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img">
									<img loading="lazy" src="./images/product/product6.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
									</a>
								</div>

								<div class="pc__info position-relative">
									<h6 class="pc__title">Table</h6>
									<div class="product-card__price d-flex">
										<span class="money price text-secondary">₹620</span>
									</div>

									<div
										class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
										<button class="btn-link btn-link_lg me-4 text-uppercase fw-medium"
											data-aside="cartDrawer" title="Add To Cart"><a
												href="contact.php">Enquiry</a></button>
									</div>
								</div>
							</div>
							<div class="swiper-slide product-card product-card_style3">
								<div class="pc__img-wrapper">

									<img loading="lazy" src="./images/product/product7.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img">
									<img loading="lazy" src="./images/product/product8.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
									</a>
								</div>

								<div class="pc__info position-relative">
									<h6 class="pc__title">Chair
									</h6>
									<div class="product-card__price d-flex align-items-center">
										<span class="money price-old">₹1200</span>
										<span class="money price text-secondary">₹999</span>
									</div>

									<div
										class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
										<button class="btn-link btn-link_lg me-4 text-uppercase fw-medium"
											data-aside="cartDrawer" title="Add To Cart"><a
												href="contact.php">Enquiry</a></button>
									</div>
								</div>
							</div>
							<div class="swiper-slide product-card product-card_style3">
								<div class="pc__img-wrapper">

									<img loading="lazy" src="./images/product/product9.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img">
									<img loading="lazy" src="./images/product/product10.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
									</a>
								</div>

								<div class="pc__info position-relative">
									<h6 class="pc__title">Mirror</h6>
									<div class="product-card__price d-flex">
										<span class="money price text-secondary">₹920</span>
									</div>

									<div
										class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
										<button class="btn-link btn-link_lg me-4 text-uppercase fw-medium"
											data-aside="cartDrawer" title="Add To Cart"><a
												href="contact.php">Enquiry</a></button>
									</div>
								</div>
							</div>
							<div class="swiper-slide product-card product-card_style3">
								<div class="pc__img-wrapper">

									<img loading="lazy" src="./images/product/product11.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img">
									<img loading="lazy" src="./images/product/product12.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
									</a>
								</div>

								<div class="pc__info position-relative">
									<h6 class="pc__title">Chair</h6>
									<div class="product-card__price d-flex">
										<span class="money price text-secondary">₹1200</span>
									</div>

									<div
										class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
										<button class="btn-link btn-link_lg me-4 text-uppercase fw-medium"
											data-aside="cartDrawer" title="Add To Cart"><a
												href="contact.php">Enquiry</a></button>
									</div>
								</div>
							</div>
							<div class="swiper-slide product-card product-card_style3">
								<div class="pc__img-wrapper">

									<img loading="lazy" src="./images/product/product13.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img">
									<img loading="lazy" src="./images/product/product14.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
									</a>
								</div>

								<div class="pc__info position-relative">
									<h6 class="pc__title">Chair</h6>
									<div class="product-card__price d-flex">
										<span class="money price text-secondary">₹1200</span>
									</div>

									<div
										class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
										<button class="btn-link btn-link_lg me-4 text-uppercase fw-medium"
											data-aside="cartDrawer" title="Add To Cart"><a
												href="contact.php">Enquiry</a></button>
									</div>
								</div>
							</div>
							<div class="swiper-slide product-card product-card_style3">
								<div class="pc__img-wrapper">

									<img loading="lazy" src="./images/product/product15.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img">
									<img loading="lazy" src="./images/product/product16.jpg" width="258" height="313"
										alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
									</a>
								</div>

								<div class="pc__info position-relative">
									<h6 class="pc__title">Mirror
									</h6>
									<div class="product-card__price d-flex align-items-center">
										<span class="money price-old">₹129</span>
										<span class="money price text-secondary">₹990</span>
									</div>

									<div
										class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
										<button class="btn-link btn-link_lg me-4 text-uppercase fw-medium"
											data-aside="cartDrawer" title="Add To Cart"><a
												href="contact.php">Enquiry</a></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

	<section class="why-sec3 space">
		<div class="container why-c">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-8">
					<div class="title-area text-center">
						<h2 class="sec-title text-white">Discover the AZ Wood Art Mart Difference</h2>
						<p>Why settle for ordinary when you can experience the extraordinary with AZ Wood Art Mart?
							Here's why we're not just your average furniture manufacturer:</p>
					</div>
				</div>
			</div>
			<div class="row gx-0 justify-content-between">
				<div class="col-lg-4 col-sm-auto">
					<div class="why-feature-left mt-4">
						<div class="why-feature">
							<div class="media-body">
								<div class="box-title">Craftsmanship That Tells a Story</div>
								<p class="box-text">We don't just create furniture; we craft stories.</p>
							</div>
						</div>
						<div class="why-feature">
							<div class="media-body">
								<div class="box-title">Unique Designs for Unique Spaces</div>
								<p class="box-text">Whatever your taste, we have the perfect piece to complement
									your unique vision.</p>
							</div>
						</div>
						<div class="why-feature">
							<div class="media-body">
								<div class="box-title">Sustainability is Our Style</div>
								<p class="box-text"> We are committed to sustainable practices, using responsibly
									sourced materials and eco-friendly production.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4  d-lg-block">
					<div class="img-box4  mb-4">
						<img src="./images/why-c.png" alt="Why" width="100%">
					</div>
				</div>
				<div class="col-lg-4 col-sm-auto">
					<div class="why-feature-right mt-4">
						<div class="why-feature">
							<div class="media-body">
								<div class="box-title">Customization Without Compromise</div>
								<p class="box-text">Our customizable options allow you to tailor each piece to your
									exact specifications.</p>
							</div>
						</div>
						<div class="why-feature">
							<div class="media-body">
								<div class="box-title">Service That Goes Above and Beyond</div>
								<p class="box-text">We're here to provide personalized assistance and support every
									step of the way.</p>
							</div>
						</div>
						<div class="why-feature">
							<div class="media-body">
								<div class="box-title">Transform Your Space, Transform Your Life</div>
								<p class="box-text">You can transform your space into a haven of comfort, style, and
									serenity.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<div class="col-lg-3 col-md-6 col-sm-6 feature-box">
					<div class="single-features">
						<div class="f-icon">
							<img src="./images/del.png" alt="">
						</div>
						<h6>Free Shipping for Orders Over 3k</h6>
						<p>Spend 3k or more and shipping is on us.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 feature-box">
					<div class="single-features">
						<div class="f-icon">
							<img src="./images/ret.png" alt="">
						</div>
						<h6>Simple Returns Policy</h6>
						<p>Defective product? No problem. We've got your back.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 feature-box">
					<div class="single-features">
						<div class="f-icon">
							<img src="./images/cust.png" alt="">
						</div>
						<h6>Round-the-Clock Support</h6>
						<p>Need assistance? We're here 24/7 to help.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 feature-box">
					<div class="single-features">
						<div class="f-icon">
							<img src="./images/pay.png" alt="">
						</div>
						<h6>Secure Transactions, Guaranteed</h6>
						<p>Your payments are secure with us.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<hr class="mt-2 text-secondary" />

<?php
include ('./footer.php');
?>