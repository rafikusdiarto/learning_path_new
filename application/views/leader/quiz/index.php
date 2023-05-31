
<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 mt-5 text-gray-800">Add Questions For Learning Path</h1>
		</div>

		<div class="p-5">
			<a href="<?= base_url('leader/learningpath/add_quiz')?>" class="btn btn-success">
				<i class="fa fa-plus"></i>	
			Tambah Quiz</a>
		</div>
	</div>
                    <!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Questions Table</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Leader</th>
							<th>Learning Path</th>
							<th>Questions</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Mail</td>
							<td>Improve Your Skills</td>
							<td>apa itu laravel??</td>
							<td>
								<div>
									<a href="<?= base_url('leader/quiz/detail')?>" class="btn btn-primary">Detail</a>
									<a href="<?= base_url('leader/quiz/edit')?>" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger">Delete</a>
								</div>
							</td>
					</tbody>
				</table>
			</div>
		</div>
	</div>
