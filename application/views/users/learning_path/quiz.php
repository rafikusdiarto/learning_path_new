<?php if (!empty($quizes)): ?>
	<div class="p-5">
		<a href="<?= base_url('member/dashboard')?>" class="btn btn-success">
			<i class="fa fa-arrow-left"></i>	
		Back</a>
	</div>
	<div class="container p-5 mb-5"> 
		<form method="POST" action="<?php echo base_url('member/learning-path/submit-quiz/'.$quizes[0]['learning_path_id']); ?>" enctype="multipart/form-data">
			<div class="row"> 
				<?php $no=1 ?>
				<?php foreach ($quizes as $info): ?>
				<div class="card mb-4">
					<div class="card shadow">
						<div class="card-body">
							<div class="col-12 mb-5"> 
								<p class="font-bold" style="font-weight:bold">
								<?php echo $no++; ?> .
								<?php echo $info['questions_text']; ?></p> 
								<input type="hidden" name="learning_path_id" value="<?php echo $info['learning_path_id']; ?>">
								<div>
									<input type="radio" name="answer_<?php echo $info['id']; ?>" value="A"> <?php echo $info['choiceA']; ?><br>
									<input type="radio" name="answer_<?php echo $info['id']; ?>" value="B"> <?php echo $info['choiceB']; ?><br>
									<input type="radio" name="answer_<?php echo $info['id']; ?>" value="C"> <?php echo $info['choiceC']; ?><br>
									<input type="radio" name="answer_<?php echo $info['id']; ?>" value="D"> <?php echo $info['choiceD']; ?><br>
								</div>
							</div> 
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>
			<div class="col-12"> 
				<div class="d-flex justify-content-center"> 
					<input type="submit" class="btn btn-primary px-4 py-2 fw-bold" value="Submit Quiz"> 
				</div> 
			</div> 
		</form>
	</div>
<?php else: ?>
	<div class="p-5">
		<a href="<?= base_url('member/dashboard')?>" class="btn btn-success">
			<i class="fa fa-arrow-left"></i>	
		Back</a>
	</div>
	<div class="card">
		<div class="card-shadow">
			<h3 class="text-center p-5 my-5 alert alert-info">Belum Ada Quiz Yang Tersedia</h3>
		</div>
	</div>
<?php endif; ?>



	
	
