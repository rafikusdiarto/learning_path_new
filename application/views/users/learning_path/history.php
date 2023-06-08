
	<div class="d-flex container justify-content-between">
		<div>
			<h1 class="h3 mb-2 mt-5 text-gray-800">Your History For Learning Path</h1>
		</div>

		<div class="p-5">
			<a href="<?= base_url('user/dashboard')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
			Back</a>
		</div>

	</div>

	<div class="mx-5 card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">History Quiz</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Learning Path</th>
							<th>Score</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php $no = 1; ?>
					<tbody>
						<?php foreach ($history as $info):?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $info->learning_path_name; ?></td>
								<td><?php echo $info->score; ?></td>
								<td>
									<div>
										<a href="<?= base_url('leader/quiz/detail/'. $info->id)?>" class="btn btn-primary">Detail</a>
									</div>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
