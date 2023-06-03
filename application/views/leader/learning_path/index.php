
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 text-gray-800">Available Learning Path</h1>
			<p class="mb-4">This is our new program to educate our members with some questions about our product and <br>
			<b>How To Become A Success Enterpreneur</b> </p>

		</div>

		<div class="p-5">
			<a href="<?= base_url('leader/learning-path/add')?>" class="btn btn-success">
				<i class="fa fa-plus"></i>	
			Tambah Learning Path</a>
		</div>

		<?php if ($this->session->flashdata('success')) : ?>
        	<div style="color: green;"><?php echo $this->session->flashdata('success'); ?></div>
    	<?php endif; ?>
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
							<th>Deskripsi</th>
							<!-- <th>Total Step</th>
							<th>Leader Name</th> -->
							<th>Thumbnail</th>
							<th>Link Youtube</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php $no = 1; ?>
					<tbody>
						<?php foreach ($learning_path as $info) :?> 
						<tr?>
							<td><?php echo $no++; ?></td>
							<td><?php echo $info->title; ?></td>
							<td><?php echo $info->description; ?></td>
							<!-- <td>61</td>
							<td>Mail</td> -->
							<td>
								<img src="<?php echo base_url('./uploads/'.$info->thumbnail); ?>" width="100">
							</td>
							<td> 
								<a href="<?php echo $info->link_youtube ?>"><?php echo $info->link_youtube ?></a>
							</td>
							<td>
								<div>
									<a href="<?= base_url('leader/learning-path/edit')?>" class="btn btn-info">Edit</a>
									<a href="" class="btn btn-danger">Delete</a>
								</div>
							</td>
						</tr>
						<?php endforeach?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
