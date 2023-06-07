<div>
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mt-5 text-gray-800">Add Data Member</h1>
		</div>

		<div class="p-5">
			<a href="<?= base_url('admin/member')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
			Back</a>
		</div>
	</div>
	
	<div>
		<div class="card">
			<div class="card-body">
				<form action="<?php echo site_url('admin/member/create'); ?>" method="post">
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" class="form-control" placeholder="username" id="username" name="username">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" placeholder="email" id="email" name="email">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" placeholder="add password" id="password" name="password">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

