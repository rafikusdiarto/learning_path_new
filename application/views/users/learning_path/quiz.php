<div class="container-quiz mb-5"> 
	<div class="row"> 
		<?php foreach ($quizes as $info): ?>
			<div class="col-12"> 
				<p class="fw-bold"><?php echo $info['questions_text']; ?></p> 
				<div> 
					<input type="radio" name="box" id="one"> 
					<input type="radio" name="box" id="two"> 
					<input type="radio" name="box" id="three"> 
					<input type="radio" name="box" id="four"> 
					<label for="one" class="box first"> 
						<div class="course"> 
							<span class="circle"></span> 
							<span class="subject"> <?php echo $info['choiceA'] ?></span> 
						</div> 
					</label> 
					<label for="two" class="box second"> 
						<div class="course"> 
							<span class="circle"></span> 
							<span class="subject"> <?php echo $info['choiceB'] ?> </span> 
						</div> 
					</label> 
					<label for="three" class="box third"> 
						<div class="course"> 
							<span class="circle"></span> 
							<span class="subject"> <?php echo $info['choiceC'] ?> </span> 
						</div> 
					</label> 
					<label for="four" class="box forth"> 
						<div class="course"> 
							<span class="circle"></span> 
							<span class="subject"> <?php echo $info['choiceD'] ?> </span> 
						</div> 
					</label> 
				</div> 
			</div> 

		<?php endforeach ?>
		<!-- <div class="col-12"> 
			<p class="fw-bold mt-5">2. Complete the following sentences:Alice couldn't _______ the humilation any longer and stormed out of the room red as a bed</p> 
			<div> 
				<div class="row"> 
					<div class="col-md-6"> 
						<input type="radio" name="box" id="five"> 
						<label for="five" class="box fifth w-100"> 
							<div class="course"> 
								<span class="circle"></span> 
								<span class="subject">is</span> 
							</div> 
						</label> 
					</div> 
					<div class="col-md-6"> 
						<input type="radio" name="box" id="six"> 
						<label for="six" class="box sixth w-100"> 
							<div class="course"> 
								<span class="circle"></span> 
								<span class="subject"> was </span> 
							</div> 
						</label> 
					</div> 
					<div class="col-md-6"> 
						<input type="radio" name="box" id="seven"> 
						<label for="seven" class="box seveth w-100"> 
							<div class="course"> 
								<span class="circle"></span> 
								<span class="subject"> will </span> 
							</div> 
						</label> 
					</div> 
					<div class="col-md-6"> 
						<input type="radio" name="box" id="eight"> 
						<label for="eight" class="box eighth w-100"> 
							<div class="course">
								<span class="circle"></span> 
								<span class="subject"> None of the above </span> 
							</div> 
						</label> 
					</div> 
				</div> 
			</div> 
		</div> 	 -->
		<div class="col-12"> 
			<div class="d-flex justify-content-center"> 
				<button class="btn btn-primary px-4 py-2 fw-bold"> continue</button> 
			</div> 
		</div> 
	</div>
</div>
