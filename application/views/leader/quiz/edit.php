<div>
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 text-gray-800">Edit Questions</h1>
			<p class="mb-4">Please input the questions and answer key !!<br>

		</div>

		<div class="p-5">
			<a href="<?= base_url('leader/quiz/')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
			Back</a>
		</div>
	</div>

	<div>
		<div class="card">
			<div class="card-body">
				<form method="POST" action="<?php echo site_url('leader/quiz/update/'. $quiz->id); ?>" enctype="multipart/form-data">
					<div class="mb-3">
						<input type="hidden" class="form-control" id="learning_path_id" name="learning_path_id" placeholder="input step title" value="<?php echo $quiz->learning_path_id; ?>" required>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Questions</label>
						<textarea name="questions_text" id="questions" class="form-control" value="" required><?php echo $quiz->questions_text; ?>
						</textarea>
					</div>
					<div class="mb-3">
						<label for="choiceA" class="form-label">Choice A</label>
						<input type="text" class="form-control" id="choiceA" name="choiceA" placeholder="input choice A" value="<?php echo $quiz->choiceA; ?>" required>
					</div>
					<div class="mb-3">
						<label for="choiceB" class="form-label">Choice B</label>
						<input type="text" class="form-control" id="choiceB" name="choiceB" placeholder="input choice B" value="<?php echo $quiz->choiceB; ?>" required>
					</div>
					<div class="mb-3">
						<label for="choiceC" class="form-label">Choice C</label>
						<input type="text" class="form-control" id="choiceC" name="choiceC" placeholder="input choice C" value="<?php echo $quiz->choiceC; ?> " required>
					</div>
					<div class="mb-3">
						<label for="choiceD" class="form-label">Choice D</label>
						<input type="text" class="form-control" id="choiceD" name="choiceD" placeholder="input choice D" value="<?php echo $quiz->choiceD; ?>" required>
					</div>
					<div class="mb-3">
						<label for="answer_key" class="form-label">Answey Key</label>
						<select class="form-control" aria-label="Default select example" class="form-control" name="answer_key" required>
							<option selected><?php echo $quiz->answer_key; ?></option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
						</select>		
					</div>
					<div class="mb-3 mt-5">
						<label for="questions_score" class="form-label">Questions Score</label>
						<input type="number" class="form-control" id="questions_score" name="questions_score" value="<?php echo $quiz->questions_score; ?>" required>
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan"></input>
				</form>
			</div>
		</div>
	</div>
</div>
