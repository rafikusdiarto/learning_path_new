
<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 text-gray-800">Data Member</h1>
			<p class="mb-4">Our Beloved Member List</b> </p>

		</div>

		<div class="p-5">
			<a href="<?= base_url('admin/member/add')?>" class="btn btn-success">
				<i class="fa fa-plus"></i>	
			Tambah Data Member</a>
		</div>
	</div>

	<?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">All Members Bigenmi</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Email</th>
							<th>Actions</th>
						</tr>
					</thead>
					<?php $no = 1;?>
					<tbody>
						<?php foreach ($member as $info): ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td class="text-uppercase"><?php echo $info->username;?></td>
								<td><?php echo $info->email;?></td>
								<td>
									<div>
										<a href="<?php echo base_url('admin/member/delete/'. $info->id); ?>" onclick="confirm('yakin menghapus data ?')" class="btn btn-danger">Delete</a>
									</div>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

