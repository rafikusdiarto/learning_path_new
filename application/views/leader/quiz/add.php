<div>
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 text-gray-800">Add Questions</h1>
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
				<div class="mb-3">
					<select class="form-control" aria-label="Default select example" class="form-control" name="learning_path">
						<option selected >Choose Learning Path</option>
						<option value="1">One</option>
						<option value="2">Two</option>
						<option value="3">Three</option>
					</select>		
				</div>
				<div class="mb-3">
					<label for="nama" class="form-label">Questions</label>
					<textarea name="questions" id="questions" class="form-control">
					</textarea>
				</div>
				<div class="mb-3">
					<label for="choiceA" class="form-label">Choice A</label>
					<input type="text" class="form-control" id="choiceA" name="choiceA" placeholder="input choice A">
				</div>
				<div class="mb-3">
					<label for="choiceB" class="form-label">Choice B</label>
					<input type="text" class="form-control" id="choiceB" name="choiceB" placeholder="input choice B">
				</div>
				<div class="mb-3">
					<label for="choiceC" class="form-label">Choice C</label>
					<input type="text" class="form-control" id="choiceC" name="choiceC" placeholder="input choice C">
				</div>
				<div class="mb-3">
					<label for="choiceD" class="form-label">Choice D</label>
					<input type="text" class="form-control" id="choiceD" name="choiceD" placeholder="input choice D">
				</div>
				<div class="mb-3">
					<select class="form-control" aria-label="Default select example" class="form-control" name="answer_key">
						<option selected >Choose Answer Key</option>
						<option value="a">A</option>
						<option value="b">B</option>
						<option value="c">C</option>
						<option value="d">D</option>
					</select>		
				</div>
				<div class="mb-3">
					<label for="questions_score" class="form-label">Questions Score</label>
					<input type="text" class="form-control" id="questions_score" name="questions_score">
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
</div>
