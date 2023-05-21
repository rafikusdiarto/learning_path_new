<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('dashboard')?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<!-- <img src="<?=base_url()?>assets/dist/img/foto_profil.jpg" width="0" height="10"> -->
		</div>
		<div class="sidebar-brand-text mx-3">
			<p><?=$user->username?></p>
			<small><?=$user->email?></small>

		</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">
	<?php 
	$page = $this->uri->segment(1);
	$master = ["jurusan", "kelas", "matkul", "dosen", "mahasiswa"];
	$relasi = ["kelasdosen", "jurusanmatkul"];
	$users = ["users"];
	?>
	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link <?= $page === 'dashboard' ? "active" : "" ?>" href="<?=base_url('dashboard')?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Main Menu
	</div>
	<?php if($this->ion_auth->is_admin()) : ?>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item <?= in_array($page, $master)  ? "active menu-open" : ""  ?>">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Master Data</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item <?=$page==='jurusan'?"active":""?>" href="<?=base_url('jurusan')?>">Department</a>
				<a class="collapse-item <?=$page==='kelas'?"active":""?>" href="<?=base_url('kelas')?>">Class</a>
				<a class="collapse-item <?=$page==='matkul'?"active":""?>" href="<?=base_url('matkul')?>">Learning Path</a>
				<a class="collapse-item <?=$page==='dosen'?"active":""?>" href="<?=base_url('dosen')?>">Leader</a>
				<a class="collapse-item <?=$page==='mahasiswa'?"active":""?>" href="<?=base_url('mahasiswa')?>">Members</a>
			</div>
		</div>
	</li>
	<?php endif; ?>


	<?php if( $this->ion_auth->is_admin() || $this->ion_auth->in_group('Lecturer') ) : ?>

	<li class="nav-item <?=$page==='soal'?"active":""?>">
		<a class="nav-link" href="<?=base_url('soal')?>">
			<i class="fas fa-fw fa-chart-area"></i>
			<span>Question Bank</span></a>
	</li>
	<?php endif; ?>



	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<?php if( !$this->ion_auth->in_group('Student') ) : ?>
	<div class="sidebar-heading">
		Reports
	</div>

	<li class="nav-item <?=$page==='hasilujian'?"active":""?>">
		<a class="nav-link" href="<?=base_url('hasilujian')?>">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Exam Results</span>
		</a>
	</li>
	<?php endif; ?>

	<hr class="sidebar-divider">

	<!-- Heading -->
	<?php if($this->ion_auth->is_admin()) : ?>
	<div class="sidebar-heading">
		Administrator
	</div>
	<li class="nav-item <?=$page==='users'?"active":""?>">
		<a class="nav-link" href="<?=base_url('users')?>">
			<i class="fas fa-fw fa-wrench"></i>
			<span>User Management</span>
		</a>
	</li>
	<li class="nav-item <?=$page==='settings'?"active":""?>">
		<a class="nav-link" href="<?=base_url('settings')?>">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Settings</span>
		</a>
	</li>
	<?php endif; ?>			
</ul>