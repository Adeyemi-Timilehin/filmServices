<?php
require "header.php";
?>

<div class="login-area">
    <!-- Button trigger modal -->

    <!-- Modal -->

</div>
<div class="login-area">
    <div class="login-box">
        <a href="#"><i class="icofont icofont-close"></i></a>
        <h2>LOGIN</h2>
        <form action="login.php" method="post">
            <h6> EMAIL ADDRESS</h6>
            <input type="text" class="form-control" name="email" />
            <h6>PASSWORD</h6>
            <input type="text" class="form-control" name="pwd" />
            <div class="login-remember">
                <input type="checkbox" />
                <span>Remember Me</span>
            </div>
            <div class="login-signup">
                <span> <a href="#" class="theme">SIGNUP</a> </span>
            </div>
            <button type="submit" class="btn btn-outline-danger w-100" name="login">LOG IN</button>

        </form>

    </div>
</div>
<div class="modal fade mt-5" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-5 text-dark" id="staticBackdropLabel">REGISTRATION FORM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ml-auto p-2 bg-danger text-light">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form_wrapper">
                        <div class="form_container text-dark">
                            <div class="title_container">
                                <h2>Responsive Registration Form</h2>
                            </div>
                            <div class="row ">
                                <div class="col-12">
                                    <form action="register.php" method="post">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-user"></i></span>
                                            <input type="text" name="fullname" placeholder="Fullname" class="form-control" />
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-phone"></i></span>
                                            <input type="text" name="phone" placeholder="phone Number" class="form-control" />
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-envelope"></i></span>
                                            <input type="email" name="email" placeholder="Email" class="form-control" required />
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-lock"></i></span>
                                            <input type="password" name="password" placeholder="Password" class="form-control" required />
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-lock"></i></span>
                                            <input type="password" name="password" placeholder="Re-type Password" class="form-control"
                                                required  />
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" name="address" class="form-control" placeholder="Location" />
                                        </div>

                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" name="country" class="form-control" placeholder="Country" />
                                        </div>
                                        <div class="input_field"> 
                                            <input type="date" class="text-danger form-control" name="dob" />
                                        </div>
                                        <div class="g-recaptcha"
                                            data-sitekey="6LfTf3UbAAAAABBgyi7gVVGuSmTntWa8JQJ5JyWQ"></div>
                                        <div class="input_field checkbox_option">
                                            <input type="checkbox" id="cb1">
                                            <label for="cb1">I agree with terms and conditions</label>
                                        </div>

                                        <button class="btn btn-danger form-control w-100"
                                            type="submit">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<section class="hero-area" id="home">
			<div class="container">
				<div class="hero-area-slider">
					<div class="row hero-area-slide">
						<div class="col-lg-6 col-md-5">
							<div class="hero-area-content">
								<img src="assets/img/slide2.png" alt="about" />
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
							<div class="hero-area-content pr-50">
								<h2>The Devil Princess</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
								<p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
								<h3>Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast1.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast2.html" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast3.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast4.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast5.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast6.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast7.png" alt="about" />
									</div>
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<h3>Watch Trailer</h3>
									<a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row hero-area-slide">
						<div class="col-lg-6 col-md-5">
							<div class="hero-area-content">
								<img src="assets/img/slide1.png" alt="about" />
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
							<div class="hero-area-content pr-50">
								<h2>Last Avatar</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
								<p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
								<h3>Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast1.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast2.html" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast3.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast4.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast5.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast6.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast7.png" alt="about" />
									</div>
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<h3>Watch Trailer</h3>
									<a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row hero-area-slide">
						<div class="col-lg-6 col-md-5">
							<div class="hero-area-content">
								<img src="assets/img/slide3.png" alt="about" />
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
							<div class="hero-area-content pr-50">
								<h2>The Deer God</h2>
								<div class="review">
									<div class="author-review">
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</div>
									<h4>180k voters</h4>
								</div>
								<p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
								<h3>Cast:</h3>
								<div class="slide-cast">
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast1.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast2.html" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast3.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast4.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast5.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast6.png" alt="about" />
									</div>
									<div class="single-slide-cast">
										<img src="assets/img/cast/cast7.png" alt="about" />
									</div>
									<div class="single-slide-cast text-center">
										5+
									</div>
								</div>
								<div class="slide-trailor">
									<h3>Watch Trailer</h3>
									<a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-area-thumb">
					<div class="thumb-prev">
						<div class="row hero-area-slide">
							<div class="col-lg-6">
								<div class="hero-area-content">
									<img src="assets/img/slide3.png" alt="about" />
								</div>
							</div>
							<div class="col-lg-6">
								<div class="hero-area-content pr-50">
									<h2>Last Avatar</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
									<p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
									<h3>Cast:</h3>
									<div class="slide-cast">
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast1.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast2.html" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast3.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast4.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast5.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast6.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast7.png" alt="about" />
										</div>
										<div class="single-slide-cast text-center">
											5+
										</div>
									</div>
									<div class="slide-trailor">
										<h3>Watch Trailer</h3>
										<a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="thumb-next">
						<div class="row hero-area-slide">
							<div class="col-lg-6">
								<div class="hero-area-content">
									<img src="assets/img/slide1.png" alt="about" />
								</div>
							</div>
							<div class="col-lg-6">
								<div class="hero-area-content pr-50">
									<h2>The Deer God</h2>
									<div class="review">
										<div class="author-review">
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
											<i class="icofont icofont-star"></i>
										</div>
										<h4>180k voters</h4>
									</div>
									<p>She is a devil princess from the demon world. She grew up sheltered by her parents and doesn't really know how to be evil or any of the common actions,   She is unable to cry due to Keita's accidental first wish, despite needed for him to wish...</p>
									<h3>Cast:</h3>
									<div class="slide-cast">
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast1.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast2.html" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast3.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast4.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast5.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast6.png" alt="about" />
										</div>
										<div class="single-slide-cast">
											<img src="assets/img/cast/cast7.png" alt="about" />
										</div>
										<div class="single-slide-cast text-center">
											5+
										</div>
									</div>
									<div class="slide-trailor">
										<h3>Watch Trailer</h3>
										<a class="theme-btn theme-btn2" href="#"><i class="icofont icofont-play"></i> Tickets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


    <?php
require "footer.php"
?>