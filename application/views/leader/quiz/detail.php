<div class="d-flex justify-content-between">
	<div>
		<h1 class="h3 mb-2 mt-5 text-gray-800">Detail Quiz</h1>
	</div>

	<div class="p-5">
		<a href="<?= base_url('leader/quiz/')?>" class="btn btn-success">
			<i class="fa fa-arrow-left"></i>	
		Back</a>
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<label for="choiceA">Questions</label>
				<h6 class="m-0 font-weight-bold text-lg text-primary"><?php echo $detail_quiz->questions_text; ?></h6>
			</div>
			<div class="card-body">
				<div class="mb-3">
					<label for="choiceA">Choice A</label>
					<input class="form-control" id="choiceA" name="choiceA" value="<?php echo $detail_quiz->choiceA; ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="choiceB">Choice B</label>
					<input class="form-control" id="choiceB" name="choiceB" value="<?php echo $detail_quiz->choiceB; ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="choiceC">Choice C</label>
					<input class="form-control" id="choiceC" name="choiceC" value="<?php echo $detail_quiz->choiceC; ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="choiceD">Choice D</label>
					<input class="form-control" id="choiceD" name="choiceD" value="<?php echo $detail_quiz->choiceD; ?>" readonly>
				</div>
				<div class="mb-3 alert alert-success">
					<span>Answer Key : <?php echo $detail_quiz->answer_key; ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
