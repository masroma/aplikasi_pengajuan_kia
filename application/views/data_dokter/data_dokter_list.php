
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Dokter</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Dokter</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?php echo anchor(site_url('data_dokter/create'),'Create', 'class="btn btn-primary"'); ?></h3>
               <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>No</th>
		<th>Nama Dokter</th>
		<th>Nip Dokter</th>
		<th>Jenis Kelamin</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Action</th>
            </tr>
                </thead>
                <tbody>
                <?php
            foreach ($data_dokter_data as $data_dokter)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $data_dokter->nama_dokter ?></td>
			<td><?php echo $data_dokter->nip_dokter ?></td>
			<td><?php echo $data_dokter->jenis_kelamin ?></td>
			<td><?php echo $data_dokter->tanggal_lahir ?></td>
			<td><?php echo $data_dokter->alamat ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('data_dokter/read/'.$data_dokter->id_dokter),'Read','class="btn btn-primary btn-sm"'); 
				echo ' | '; 
				echo anchor(site_url('data_dokter/update/'.$data_dokter->id_dokter),'Update', 'class="btn btn-success btn-sm"'); 
				echo ' | '; 
				echo anchor(site_url('data_dokter/delete/'.$data_dokter->id_dokter),'Delete', 'class="btn btn-danger btn-sm"','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
		<th>Nama Dokter</th>
		<th>Nip Dokter</th>
		<th>Jenis Kelamin</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>Action</th>
            </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper