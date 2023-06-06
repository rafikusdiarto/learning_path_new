<div class="container my-5">
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 text-gray-800">Score Questions</h1>
			<p class="mb-4">Your results from <b> <i> <?php echo $quizes->title; ?></i></b> Learning Path<br>

		</div>
		
		<div class="p-5">
			<a href="<?= base_url('user/dashboard')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
				Back</a>
			</div>
		</div>
		<!-- <?php echo var_dump($questions); ?>
		
		<?php echo var_dump($selected_answer); ?> -->

	<div>
		<div class="card">
			<div class="card-body">
				<div>
					<h2>Your Score : <?php echo $correct_answers; ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>
