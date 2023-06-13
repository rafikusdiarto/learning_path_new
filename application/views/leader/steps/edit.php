<div>
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 mt-4 text-gray-800">Edit Steps</h1>
			<p class="mb-4">Please input the steps for learning path !!<br>

		</div>

		<div class="p-5">
			<a href="<?= base_url('leader/step')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
			Back</a>
		</div>
	</div>

	<div>
		<div class="card">
			<div class="card-body">
				<form method="POST" action="<?php echo site_url('leader/step/update/'.$step->id); ?>" enctype="multipart/form-data">
					<!-- <div class="mb-3">
						<select class="form-control" aria-label="Default select example" disabled class="form-control" name="learning_path_id" readonly>
							<?php foreach ($step as $info ):?>
								<option readonly selected><?php echo $info->learning_path_id;?></option>
							<?php endforeach?>
						</select>		
					</div> -->
					<div class="mb-3">
						<input type="hidden" class="form-control" id="learning_path_id" name="learning_path_id" placeholder="input step title" value="<?php echo $step->learning_path_id; ?>" required>
					</div>
					<div class="mb-3">
						<label for="choiceA" class="form-label">Step Title</label>
						<input type="text" class="form-control" id="step" name="step" placeholder="input step title" value="<?php echo $step->step; ?>" required>
					</div>
					<div class="mb-3">
						<label for="choiceA" class="form-label">Description</label>
						<input type="text" class="form-control" id="description" name="description" placeholder="input description" value="<?php echo $step->description; ?>" required>
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan"></input>
				</form>
			</div>
		</div>
	</div>
</div>
