
<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 text-gray-800">Available Learning Path</h1>
			<p class="mb-4">This is our new program to educate our members with some questions about our product and <br>
			<b>How To Become A Success Enterpreneur</b> </p>

		</div>

		<div class="p-5">
			<a href="<?= base_url('admin/learning-path/add')?>" class="btn btn-success">
				<i class="fa fa-plus"></i>	
			Tambah Learning Path</a>
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
							<th>Learning Path Title</th>
							<th>Total Step</th>
							<th>Leader Name</th>
							<th>Thumbnail</th>
							<th>Link Youtube</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>System Architect</td>
							<td>61</td>
							<td>Mail</td>
							<td>-</td>
							<td>https://youtu.be/MMrCXMpL8cA</td>
							<td>
								<div>
									<a href="<?= base_url('admin/learning-path/edit')?>" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger">Delete</a>
								</div>
							</td>
					</tbody>
				</table>
			</div>
		</div>
	</div>
