<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Learning Path</title>
	<link rel="icon" href="<?=base_url()?>assets/img/favicon/cropped-favicon-180x180.png">

    <!-- Custom fonts for this template-->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link href="<?=base_url()?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link  rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/fontawesome-free/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<style>
		/* quiz */
		@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
		/* * {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Roboto", sans-serif;
		}
		.container-quiz {
		margin: 30px auto;
		background: white;
		padding: 20px 15px;
		}
		label.box {
		display: flex;
		margin-top: 10px;
		padding: 10px 12px;
		border-radius: 5px;
		cursor: pointer;
		border: 1px solid #ddd;
		}
		#one:checked ~ label.first,
		#two:checked ~ label.second,
		#three:checked ~ label.third,
		#four:checked ~ label.forth,
		#five:checked ~ label.fifth,
		#six:checked ~ label.sixth,
		#seven:checked ~ label.seveth,
		#eight:checked ~ label.eighth {
		border-color: #8e498e;
		}
		#one:checked ~ label.first .circle,
		#two:checked ~ label.second .circle,
		#three:checked ~ label.third .circle,
		#four:checked ~ label.forth .circle,
		#five:checked ~ label.fifth .circle,
		#six:checked ~ label.sixth .circle,
		#seven:checked ~ label.seveth .circle,
		#eight:checked ~ label.eighth .circle {
		border: 6px solid #8e498e;
		background-color: #fff;
		}
		label.box:hover {
		background: #d5bbf7;
		}
		label.box .course {
		display: flex;
		align-items: center;
		width: 100%;
		}
		label.box .circle {
		height: 22px;
		width: 22px;
		border-radius: 50%;
		margin-right: 15px;
		border: 2px solid #ddd;
		display: inline-block;
		}
		input[type="radio"] {
		display: none;
		}
		@media (max-width: 450px) {
		.subject {
			font-size: 12px;
		}
		} */

		
		/* testimonial */
		body {
		font-family: "Open Sans", sans-serif;
		}
		.testi {
			color: #000;
			font-size: 26px;
			font-weight: 300;
			text-align: center;
			position: relative;
			margin: 30px 0 60px;
		}
		.testi::after {
			content: "";
			width: 100px;
			position: absolute;
			margin: 0 auto;
			height: 4px;
			border-radius: 1px;
			background: #1abc9c;
			left: 0;
			right: 0;
			bottom: -20px;
		}
		.carousel .carousel-item {
			color: #999;
			overflow: hidden;
			min-height: 120px;
			font-size: 13px;
		}
		.carousel .media {
			position: relative;
			padding: 0 0 0 20px;
		}
		.carousel .media img {
			width: 75px;
			height: 75px;
			display: block;
			border-radius: 50%;
		}
		.carousel .testimonial-wrapper {
			padding: 0 10px;
		}
		.carousel .testimonial {
			color: #808080;
			position: relative;
			padding: 15px;
			background: #f1f1f1;
			border: 1px solid #efefef;
			border-radius: 3px;
			margin-bottom: 15px;
		}
		.carousel .testimonial::after {
			content: "";
			width: 15px;
			height: 15px;
			display: block;
			background: #f1f1f1;
			border: 1px solid #efefef;
			border-width: 0 0 1px 1px;
			position: absolute;
			bottom: -8px;
			left: 46px;
			transform: rotateZ(-46deg);
		}
		.carousel .star-rating li {
			padding: 0 2px;
		}
		.carousel .star-rating i {
			font-size: 16px;
			color: #ffdc12;
		}
		.carousel .overview {
			padding: 3px 0 0 15px;
		}
		.carousel .overview .details {
			padding: 5px 0 8px;
		}
		.carousel .overview b {
			text-transform: uppercase;
			color: #1abc9c;
		}
		.carousel .carousel-indicators {
			bottom: -70px;
		}
		.carousel-indicators li, .carousel-indicators li.active {
			width: 20px;
			height: 20px;
			border-radius: 50%;
			margin: 1px 2px;
			box-sizing: border-box;
		}
		.carousel-indicators li {	
			background: #e2e2e2;
			border: 4px solid #fff;
		}
		.carousel-indicators li.active {
			color: #fff;
			background: #1abc9c;
			border: 5px double;    
		}

		/* hero */
		h1, h2, h3, h4, h5, h6 { color: #25292a; margin: 0px 0px 10px 0px; font-family: 'Overpass', sans-serif; font-weight: 700; letter-spacing: -1px; line-height: 1; }
		a { text-decoration: none; color: #8d8f90; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
		a:focus, a:hover { text-decoration: none; color: #f85759; }

		.page-header { background: url(https://easetemplate.com/free-website-templates/hike/images/pageheader.jpg)no-repeat; position: relative; background-size: cover; }
		.page-caption { padding-top: 170px; padding-bottom: 174px; }
		.page-title { font-size: 46px; line-height: 1; color: #fff; font-weight: 600; text-align: center; }

		.card-section { position: relative; bottom: 60px; }
		.card-block { padding: 80px; }
		.section-title { margin-bottom: 60px; }
		
		/* card */
		/* .section_our_solution .row {
		align-items: center;
		margin-top:100px;
		}

		.our_solution_category {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		}
		.solution_cards_box {
		display: flex;
		} */
		.solution_cards_box .solution_card {
		flex: 0 50%;
		background: #fff;
		box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
			0 5px 15px 0 rgba(37, 44, 97, 0.15);
		border-radius: 15px;
		margin: 8px;
		padding: 10px 15px;
		position: relative;
		z-index: 1;
		overflow: hidden;
		min-height: 265px;
		transition: 0.7s;
		}

		.solution_cards_box .solution_card:hover {
		background: #309df0;
		color: #fff;
		transform: scale(1.1);
		z-index: 9;
		}

		.solution_cards_box .solution_card:hover::before {
		background: rgb(85 108 214 / 10%);
		}

		.solution_cards_box .solution_card:hover .solu_title h3,
		.solution_cards_box .solution_card:hover .solu_description p {
		color: #fff;
		}

		.solution_cards_box .solution_card:before {
		content: "";
		position: absolute;
		background: rgb(85 108 214 / 5%);
		width: 170px;
		height: 400px;
		z-index: -1;
		transform: rotate(42deg);
		right: -56px;
		top: -23px;
		border-radius: 35px;
		}

		.solution_cards_box .solution_card:hover .solu_description button {
		background: #fff !important;
		color: #309df0;
		}

		.solution_card .so_top_icon {
		}

		.solution_card .solu_title h3 {
		color: #212121;
		font-size: 1.3rem;
		margin-top: 13px;
		margin-bottom: 13px;
		}

		.solution_card .solu_description p {
		font-size: 15px;
		margin-bottom: 15px;
		}

		.solution_card .solu_description button {
		border: 0;
		border-radius: 15px;
		background: linear-gradient(
			140deg,
			#42c3ca 0%,
			#42c3ca 50%,
			#42c3cac7 75%
		) !important;
		color: #fff;
		font-weight: 500;
		font-size: 1rem;
		padding: 5px 16px;
		}

		.our_solution_content h1 {
		text-transform: capitalize;
		margin-bottom: 1rem;
		font-size: 2.5rem;
		}
		.our_solution_content p {
		}

		.hover_color_bubble {
		position: absolute;
		background: rgb(54 81 207 / 15%);
		width: 100rem;
		height: 100rem;
		left: 0;
		right: 0;
		z-index: -1;
		top: 16rem;
		border-radius: 50%;
		transform: rotate(-36deg);
		left: -18rem;
		transition: 0.7s;
		}

		.solution_cards_box .solution_card:hover .hover_color_bubble {
		top: 0rem;
		}

		.solution_cards_box .solution_card .so_top_icon {
		width: 60px;
		height: 60px;
		border-radius: 50%;
		background: #fff;
		overflow: hidden;
		display: flex;
		align-items: center;
		justify-content: center;
		}

		.solution_cards_box .solution_card .so_top_icon img {
		width: 40px;
		height: 50px;
		object-fit: contain;
		}

		/*start media query*/
		@media screen and (min-width: 320px) {
		.sol_card_top_3 {
			position: relative;
			top: 0;
		}

		.our_solution_category {
			width: 100%;
			margin: 0 auto;
		}

		.our_solution_category .solution_cards_box {
			flex: auto;
		}
		}
		@media only screen and (min-width: 768px) {
		.our_solution_category .solution_cards_box {
			flex: 1;
		}
		}
		@media only screen and (min-width: 1024px) {
		.sol_card_top_3 {
			position: relative;
			top: -3rem;
		}
		.our_solution_category {
			/* width: 50%; */
			margin: 0 auto;
		}
		}

	</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php echo $navbar; ?>
                <!-- End of Topbar -->
				<!-- /.container-fluid -->
				<div class="">
					<?php $this->load->view($content_view); ?>
				</div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php echo $footer; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo site_url('user/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
	<script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url()?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url()?>assets/js/demo/chart-pie-demo.js"></script>

	<script src="<?=base_url()?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>assets/js/demo/datatables-demo.js"></script>

	


</body>

</html>
