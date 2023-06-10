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

	<div>
		<div class="card">
			<div class="card-body">
				<div class="alert alert-success p-3">
					<h4>Correct Answer : <?php echo $correct_answers; ?> of <?php echo $total_questions; ?> questions</h4>
					<p>Your Score : <?php echo $score; ?></p>
					<p>Jawaban dipilih :</p>
				</div>
			</div>
		</div>
	</div>
</div>
