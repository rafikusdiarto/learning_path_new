<h1 class="h3 mb-2 text-gray-800">All Users</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
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
                                        </tr>
                                    </thead>
									<?php $no= 1;?>
                                    <tbody>
										<?php foreach ($user as $info): ?>
											<tr>
												<td><?php echo $no++ ;?></td>
												<td class="text-uppercase"><?php echo $info->username; ?></td>
												<td><?php echo $info->email; ?></td>
											</tr>
										<?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">All Leaders Bigenmi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Join At</th>
                                       </tr>
                                    </thead>
									<?php $no = 1;?>
                                    <tbody>
										<?php foreach ($leader as $info): ?>
											<tr>
												<td><?php echo $no++; ?></td>
												<td class="text-uppercase"><?php echo $info->username;?></td>
												<td><?php echo $info->email;?></td>
												<td><?php echo $info->join_at;?></td>
											</tr>

										<?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
