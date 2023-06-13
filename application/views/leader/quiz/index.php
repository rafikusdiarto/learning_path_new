
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 mt-5 text-gray-800">Add Questions For Learning Path</h1>
		</div>

		<div class="p-5">
			<a href="<?= base_url('leader/quiz/add')?>" class="btn btn-success">
				<i class="fa fa-plus"></i>	
			Tambah Quiz</a>
		</div>
	</div>

	<?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } ?>
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
							<th>Learning Path</th>
							<th>Questions</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php $no = 1; ?>
					<tbody>
						<?php foreach ($quiz as $info):?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $info->learning_path_name; ?></td>
								<td><?php echo $info->questions_text; ?></td>
								<td>
									<div>
										<a href="<?= base_url('leader/quiz/detail/'. $info->id); ?>" class="btn btn-primary">Detail</a>
										<a href="<?= base_url('leader/quiz/edit/'. $info->id); ?>" class="btn btn-info">Edit</a>
										<a href="<?= base_url('leadear/quiz/delete/'. $info->id); ?>" onclick="confirm('yakin menghapus quiz ?')" class="btn btn-danger">Delete</a>
									</div>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
