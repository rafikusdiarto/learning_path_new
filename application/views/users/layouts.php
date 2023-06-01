<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Learning Path</title>

    <!-- Custom fonts for this template-->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<link href="<?=base_url()?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link  rel="stylesheet" type="text/css" href="<?=base_url()?>vendor/fontawesome-free/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
	<style>
.testimonials-clean {
  color:#313437;
  background-color:#eef4f7;
}

.testimonials-clean p {
  color:#7d8285;
}

.testimonials-clean h2 {
  font-weight:bold;
  margin-bottom:40px;
  padding-top:40px;
  color:inherit;
}

@media (max-width:767px) {
  .testimonials-clean h2 {
    margin-bottom:25px;
    padding-top:25px;
    font-size:24px;
  }
}

.testimonials-clean .intro {
  font-size:16px;
  max-width:500px;
  margin:0 auto;
}

.testimonials-clean .intro p {
  margin-bottom:0;
}

.testimonials-clean .people {
  padding:50px 0 20px;
}

.testimonials-clean .item {
  margin-bottom:32px;
}

@media (min-width:768px) {
  .testimonials-clean .item {
    height:220px;
  }
}

.testimonials-clean .item .box {
  padding:30px;
  background-color:#fff;
  position:relative;
}

.testimonials-clean .item .box:after {
  content:'';
  position:absolute;
  left:30px;
  bottom:-24px;
  width:0;
  height:0;
  border:15px solid transparent;
  border-width:12px 15px;
  border-top-color:#fff;
}

.testimonials-clean .item .author {
  margin-top:28px;
  padding-left:25px;
}

.testimonials-clean .item .name {
  font-weight:bold;
  margin-bottom:2px;
  color:inherit;
}

.testimonials-clean .item .title {
  font-size:13px;
  color:#9da9ae;
}

.testimonials-clean .item .description {
  font-size:15px;
  margin-bottom:0;
}

.testimonials-clean .item img {
  max-width:40px;
  float:left;
  margin-right:12px;
  margin-top:-5px;
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
		.section_our_solution .row {
		align-items: center;
		margin-top:100px;
		}

		.our_solution_category {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		}
		.our_solution_category .solution_cards_box {
		display: flex;
		flex-direction: column;
		justify-content: center;
		}
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
