<div>
	<div class="d-flex justify-content-between">
		<div>
			<h1 class="h3 mb-2 mt-5 text-gray-800">Edit Learning Path</h1>
		</div>

		<div class="p-5">
			<a href="<?= base_url('leader/learning-path/')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
			Back</a>
		</div>
	</div>

	<div>
		<div class="card">
			<div class="card-body">
				<form method="POST" action="<?php echo base_url('leader/learning-path/update/'. $learning_path->id); ?>" enctype="multipart/form-data">
					<!-- <input type="hidden" value="<?php echo $learning_path->id; ?>"> -->
					<div class="mb-3">
						<label for="nama" class="form-label">Learning Path Title</label>
						<input type="text" class="form-control" id="title" name="title" value="<?php echo $learning_path->title; ?>">
					</div>
					<!-- <div class="mb-3">
						<label for="no_rek" class="form-label">Total Step</label>
						<input type="text" class="form-control" id="step" name="step">
					</div> -->
					<div class="mb-3">
						<label for="nama" class="form-label">Link Youtube</label>
						<input type="text" class="form-control" id="link_youtube" name="link_youtube" value="<?php echo $learning_path->link_youtube; ?>">
					</div>
					<div class="mb-3">
						<label for="nama" class="form-label">Deskripsi</label>
						<textarea type="text" class="form-control" id="description" name="description" value="<?php echo $learning_path->description?>"><?php echo $learning_path->description?></textarea>
					</div>
					<div class="mb-3">
						<label for="no_rek" class="form-label">Thumbnail</label>
						<img id="image-preview"  src="<?php echo base_url('./uploads/'.$learning_path->thumbnail); ?>" width="300px" class="mb-2">
						<input class="form-control" type="file" accept="image/png, image/jpeg, image/jpg, image/gif" id="image-input" name="thumbnail" onchange="previewImage()" required>
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
