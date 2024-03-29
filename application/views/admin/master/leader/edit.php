<div>
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 text-gray-800">Edit Data Leader</h1>
		</div>

		<div class="p-5">
			<a href="<?= base_url('admin/leader')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
			Back</a>
		</div>
	</div>

	<div>
		<div class="card">
			<div class="card-body">
				<form action="" method="post">
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" class="form-control" id="username" name="username">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="mb-3">
						<label for="join_at" class="form-label">Join At</label>
						<input type="text" class="form-control" id="join_at" name="join_at">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

