<div>
	<div class="d-flex justify-content-between">
		<div class="mt-5">
			<h1 class="h3 mb-2 text-gray-800">Add Steps</h1>
			<p class="mb-4">Please input the steps for learning path !!<br>

		</div>

		<div class="p-5">
			<a href="<?= base_url('leader/step')?>" class="btn btn-success">
				<i class="fa fa-arrow-left"></i>	
			Back</a>
		</div>
	</div>

	<div>
		<div class="card">
			<div class="card-body">
				<div class="mb-3">
					<select class="form-control" aria-label="Default select example" class="form-control" id="learning_path_id" name="learning_path_id" required>
						<option selected >Choose Learning Path</option>
						<?php foreach ($learning_path as $info ):?>
							<option  value="<?php echo $info->id;?>"><?php echo $info->title;?></option>
						<?php endforeach?>
					</select>		
				</div>
				<div class="mb-3">
					<label for="step" class="form-label">Jumlah Step : </label>
					<input type="number" class="form-control" id="jumlah_step" name="jumlah_step" placeholder="input step" required>
				</div>
				<button class="btn btn-primary" onclick="generateForm()">Tambah Form</button>
				<form method="POST" action="<?php echo site_url('leader/step/create'); ?>" enctype="multipart/form-data">
					<div id="form_step" class="mt-5">

						<!-- auto  -->

					</div>
					<button id="submit-button" type="submit" class="btn btn-primary mb-5" style="display: none;">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- form generator -->
<script>
		// Mengambil elemen kontainer form
		var formContainer = document.getElementById('form_step');

		// Mengambil elemen input untuk jumlah form
		var jumlahFormInput = document.getElementById('jumlah_step');
		var idLearningPath = document.getElementById('learning_path_id');

		// Fungsi untuk mengenerate form
		var inputStepTitle = 'step[]'; 
		var inputDescription = 'description[]'; 
		var inputLearningPathId = 'learning_path_id[]'; 
		function generateForm() {
			// Menghapus form yang ada sebelumnya
			document.getElementById("submit-button").style.display = "block";
			formContainer.innerHTML = '';

			// Mendapatkan jumlah form yang diinputkan
			var jumlahForm = parseInt(jumlahFormInput.value);
			
			// Membuat form sesuai dengan jumlah yang diinputkan
			for (var i = 0; i < jumlahForm; i++) {
				// Membuat elemen form
				var learning_path_id = parseInt(idLearningPath.value);
				var form = document.createElement('div');
				form.id = 'form-' + (i + 1);
				form.className = 'form';
				form.innerHTML =
						`<h5><b>Add Step `+ (i + 1) +`</b></h5>
						<input type="hidden" class="form-control" value="`+ (learning_path_id) +`" id="learning_path_id" name="`+ inputLearningPathId + `" placeholder="input step" required>
						<div class="mb-3">
							<label for="step" class="form-label">Step</label>
							<input type="text" class="form-control" id="step" name="`+ inputStepTitle +`" placeholder="input step title" required>
						</div>
						<div class="mb-3">
							<label for="description" class="form-label">Description</label>
							<textarea name="`+ inputDescription +`" id="description" class="form-control" required>
							</textarea>
						</div>		`
				;

				// Menambahkan form ke dalam kontainer form
				formContainer.appendChild(form);
			}
			}

		// Memanggil fungsi generateForm saat jumlah form diubah
		jumlahFormInput.addEventListener('change', generateForm);

	</script>
	
