<?php
	session_start ();	
	
	if (empty($_SESSION['user'])) {
		header("Location: index.php");
	} else {
		
		require "CustomerClass.php";
        require "adminClass.php";
        $obj=new Customer;
		$objAdm=new Admin;
		$id = $obj->getDetails($_SESSION['user']);
		
	$out=$objAdm->getMovies();
	}

require "header2.php";
if(isset($_GET['result'])){
    echo "<div class='alert alert-success'>Profile successfully updated.</div>";
}
?>
		          
		<!-- breadcrumb area start -->
		<section class="breadcrumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumb-area-content">
							<h1>Movies Page</h1>
						</div>
					</div>
				</div>
			</div>
            
		</section><!-- breadcrumb area end -->
		
        <!-- Edit customer Profile -->

        <div class="modal fade mt-5" id="staticBackdrop2" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title ml-5 text-dark" id="staticBackdropLabel">UPDATE FORM</h5>
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
                                    <form action="updateprofile.php" method="post">
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-user"></i></span>
                                            <input type="text" name="fullname" value="<?php echo $id['customer_name'] ?>" placeholder="Fullname" class="form-control text-danger " />
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-phone"></i></span>
                                            <input type="text" name="phone" class="form-control mt-1 text-danger " value="<?php echo $id['phone_number']?>" placeholder="phone Number" class="form-control" />
                                        </div>
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-lock"></i></span>
                                            <input type="password" name="password" placeholder="Password" class="form-control mt-1" value="<?php echo $id['pass']?>"  required />
                                        </div>
                                      
                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" name="address" class="form-control mt-1 text-danger "  value="<?php echo $id['customer_address']?>"class="form-control" placeholder="Location" />
                                        </div>

                                        <div class="input_field"> <span><i aria-hidden="true"
                                                    class="fa fa-location-arrow"></i></span>
                                            <input type="text" name="country" class="form-control text-danger  my-1"  value="<?php echo $id['country'] ?>" class="form-control" placeholder="Country" />
                                        </div>
                                        <div class="input_field"> 
                                            <input type="date"   value="<?php echo $id['date_of_birth'] ?>"class="text-danger my-1 form-control" name="dob" />
                                        </div>

                                        <button class="btn btn-danger form-control w-100"
                                            type="submit">Update Profile</button> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <!-- End of Customer Profile Edit -->
		<section class="video ptb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pb-20">
                        <h1><i class="icofont icofont-film"></i> Movies Collection</h1>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <?php
                    foreach($out as $output){
                ?>
                <div class="col-md-10 offset-1">
                    <h2 class="mt-5"><?php echo $output['movie_name'];?></h2>
                    <div class="video-slider ">

                        <div class="video-area">
                            <img src="assets/img/video/video2.png" alt="video"  class="img-fluid"/>
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                            <p>Beast Beauty</p>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video3.png" alt="video" height="100" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video4.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video5.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video3.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video5.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>

                    </div>
                    <h3>Africa Movies</h3>
                    <div class="video-slider">

                        <div class="video-area">

                            <img src="assets/img/video/video2.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                                <p>Beast Beauty</p>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video3.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video4.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video5.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video2.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video5.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>

                    </div>
                    <h3 >Hollywood Movies</h3>
                    <div class="video-slider">

                        <div class="video-area">

                            <img src="assets/img/video/video2.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                                <h5>Beast Beauty</p>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video3.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video4.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video5.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video2.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>
                        <div class="video-area">
                            <img src="assets/img/video/video5.png" alt="video" />
                            <a href="https://www.youtube.com/watch?v=RZXnugbhw_4" class="popup-youtube">
                                <i class="icofont icofont-ui-play"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!-- portfolio section end -->
		<!-- video section start -->
		<!-- footer section start -->
<?php
require "footer.php";
?>