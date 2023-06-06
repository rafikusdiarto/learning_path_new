
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col col-md-12 pr-md-5 pl-md-5">
                <div class="bd-example bd-example-tabs">
                    <ul class="nav nav-pills  flex-column justify-content-center flex-sm-row mb-3" id="pills-tab" role="tablist">
						<span class="nav-link pt-md-3 pb-md-3 pr-md-5 pl-md-5 bg-primary text-white" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-laptop fa-lg text-white" aria-hidden="false"></i><?php echo $learning_path_detail->title; ?></span>

						<div class="container-fluid mt-5">
							<div class="row align-items-center justify-content-between">
								<div class="col-12 col-md-5  text-left">
									<h2><?php echo $learning_path_detail->title; ?></h2>
									<p class=" mt-4">
										<?php echo $learning_path_detail->description; ?>
									</p>
									<p class="mt-3">Learn more with to do quiz !!</p>

									<a href="<?= base_url('member/learning-path/quiz/'. $learning_path_detail->id) ?>" class="btn btn-primary  btn-rounded shadow py-3 px-5 mt-md-3 mt-2">Start Quiz</a>
								</div>
								<div class="col-12 col-md-5 mb-4 ml-md-auto">
								<iframe width="560" height="315" src="<?php echo base_url('member/learning-path/video'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								<!-- <iframe width="560" height="315" src="<?php echo $learning_path_detail->link_youtube; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
								</div>
							</div>
						</div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="p-5 mb-5">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="testi">See What <b>Our Members</b> Say About Us</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<?php foreach ($reviews as $info):?>
								<div class="col-sm-6">
									<div class="testimonial-wrapper">
										<div class="testimonial"><?php echo $info->review_description; ?></div>
										<div class="media">
											<img src="https://img.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg?w=740&t=st=1685676317~exp=1685676917~hmac=41645e17cc11c44f1c1dff6368846c6a89c46369d853bead3d8e1f74ceb2ae8f" class="mr-3" alt="">
											<div class="media-body">
												<div class="overview">
													<div class="name"><b><?php echo $info->name; ?></b></div>
													<div class="details"><?php echo $info->position; ?></div>
													<div class="star-rating">
														<ul class="list-inline">
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
															<li class="list-inline-item"><i class="fa fa-star"></i></li>
															<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
												</div>										
											</div>
										</div>
									</div>								
								</div>
								<?php endforeach?>
							</div>			
						</div>
					<!-- <div class="carousel-item">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.</div>
									<div class="media">
										<img src="https://img.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg?w=740&t=st=1685676317~exp=1685676917~hmac=41645e17cc11c44f1c1dff6368846c6a89c46369d853bead3d8e1f74ceb2ae8f" class="mr-3" alt="">
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Michael Holz</b></div>
												<div class="details">Web Developer / DevCorp</div>											
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>								
							</div>
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus, metus id mi gravida.</div>
									<div class="media">
										<img src="https://img.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg?w=740&t=st=1685676317~exp=1685676917~hmac=41645e17cc11c44f1c1dff6368846c6a89c46369d853bead3d8e1f74ceb2ae8f" class="mr-3" alt="">
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Mary Saveley</b></div>
												<div class="details">Graphic Designer / MarsMedia</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>
						</div>			
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante, commodo iacul viverra.</div>
									<div class="media">
										<img src="https://img.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg?w=740&t=st=1685676317~exp=1685676917~hmac=41645e17cc11c44f1c1dff6368846c6a89c46369d853bead3d8e1f74ceb2ae8f" class="mr-3" alt="">
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>Martin Sommer</b></div>
												<div class="details">SEO Analyst / RealSearch</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>
							<div class="col-sm-6">
								<div class="testimonial-wrapper">
									<div class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat faucibus, metus id mi gravida.</div>
									<div class="media">
										<img src="https://img.freepik.com/free-vector/man-shows-gesture-great-idea_10045-637.jpg?w=740&t=st=1685676317~exp=1685676917~hmac=41645e17cc11c44f1c1dff6368846c6a89c46369d853bead3d8e1f74ceb2ae8f" class="mr-3" alt="">
										<div class="media-body">
											<div class="overview">
												<div class="name"><b>John Williams</b></div>
												<div class="details">Web Designer / UniqueDesign</div>
												<div class="star-rating">
													<ul class="list-inline">
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star"></i></li>
														<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													</ul>
												</div>
											</div>										
										</div>
									</div>
								</div>								
							</div>
						</div>			
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card bg-primary">
	<div class="container my-5">
		<h3 class="testi mt-5">Tell me your experience about learning path !!</h3>
		<?php if ($this->session->flashdata('success')) { ?>
			<div class="alert alert-success">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
    	<?php } ?>
		<form method="POST" action="<?php echo site_url('member/learning-path/review/store'); ?>">
			<input type="text" name="name" class="form-control" placeholder="Your name">
			<input type="text" name="position" class="form-control my-2" placeholder="Position">
			<textarea type="text" name="review_description" class="form-control mb-2" placeholder="Reviews"></textarea>
			<input class="btn btn-info mb-2" value="Add Reviews" type="submit"></input>
		</form>
	</div>
</div>
