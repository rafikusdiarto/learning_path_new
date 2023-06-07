<div>
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 text-gray-800">Add Learning Path</h1>
			<p class="mb-4">This is our new program to educate our members with some questions about our product and <br>
			<b>How To Become A Success Enterpreneur</b> </p>

		</div>

		<div class="p-5">
			<a href="<?= base_url('admin/learning-path')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
			Back</a>
		</div>
	</div>

	<?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } ?>
	
	<div>
		<div class="card">
			<div class="card-body">
				<form method="POST" action="<?php echo site_url('admin/learning-path/create'); ?>" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="nama" class="form-label">Learning Path Title</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<!-- <div class="mb-3">
						<label for="no_rek" class="form-label">Total Step</label>
						<input type="text" class="form-control" id="step" name="step">
					</div> -->
					<div class="mb-3">
						<label for="nama" class="form-label">Link Youtube</label>
						<input type="text" class="form-control" id="link_youtube" name="link_youtube" required>
					</div>
					<div class="mb-3">
						<label for="no_rek" class="form-label">Thumbnail</label>
						<img id="image-preview" width="300px" class="mb-2">
						<input class="form-control" type="file" id="thumbnail" name="thumbnail" onchange="previewImage()" required>
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Description</label>
						<textarea type="text" class="form-control" id="description" name="description" required></textarea>
					</div>
					<!-- <div class="mb-3">
						<label for="tanggal_bayar" class="form-label">Tanggal Bayar</label>
						<input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar">
					</div>
					<div class="mb-3">
						<label for="expired_date" class="form-label">Expired Date</label>
						<input type="text" class="form-control" id="expired_date" name="expired_date" readonly>
					</div> -->
					<input type="submit" class="btn btn-primary" value="Simpan"></input>
			
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	// Image Preview
	function previewImage() 
	{
		const image_input = document.querySelector("#image-input");
		const image_preview = document.querySelector("#image-preview");
		
		image_preview.style.display = "block";

		const oFReader = new FileReader();
		oFReader.readAsDataURL(image_input.files[0]);

		oFReader.onload = function(oFREvent) {
			image_preview.src = oFREvent.target.result;
		}
	}
</script>
