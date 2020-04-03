        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table Data Pekerjaan</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">KELOLA DATA PEKERJAAN</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <?php echo $this->session->flashdata('message'); ?>
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="tablePekerjaan">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Posisi Pekerjaan</th>
                                                <th>Jenis Pekerjaan</th>
                                                <th>Lokasi Perusahaan</th>
                                                <th>Gaji</th>
                                                <th colspan="3">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pekerjaan as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $value->id_pekerjaan; ?></td>
                                                <td><?php echo $value->posisi_pekerjaan; ?></td>
                                                <td><?php echo $value->jenis_pekerjaan; ?></td>
                                                <td><?php echo $value->lokasi_pekerjaan; ?></td>
                                                <td><?php echo $value->gaji_bulanan; ?></td>
                                                <!-- <td><button data-toggle="modal" data-target="#detail" type="button" class="btn waves-effect waves-light btn-primary">Detail</button></td> -->
                                                <td><a type="button" href="<?php echo base_url(); ?>perusahaan/editPekerjaan/<?php echo $value->id_pekerjaan ?>" class="btn waves-effect waves-light btn-info">Edit</a></td>
                                                <td><a href="<?php echo base_url(); ?>perusahaan/hapusPekerjaan/<?php echo $value->id_pekerjaan ?>" type="button" class="btn waves-effect waves-light btn-danger">Hapus</a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="#" type="button" class="btn btn-success" data-toggle="modal" data-target="#bs-exAdminWrap-modal-lg">Tambah Pekerjaan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Adminwrap by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <div class="modal fade" id="bs-exAdminWrap-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('perusahaan/tambahPekerjaan') ?>" method="post">
                    <div class="form-group">
                        <label>Posisi Pekerjaan</label>
                        <input class="form-control" type="text" name="posisi_pekerjaan" required="true" placeholder="Manager">
                    </div>
                    <div class="form-group">
                        <label>Jenis Pekerjaan</label>
                        <input class="form-control" type="text" name="jenis_pekerjaan" required="true" placeholder="Kontrak">
                    </div>
                    <div class="form-group">
                        <label>Tingkat Jabatan</label>
                        <input class="form-control" type="text" name="tingkat_jabatan" required="true" placeholder="Manager/Asisten Manajer">
                    </div>
                    <div class="form-group">
                        <label>Spesifikasi Pekerjaan</label>
                        <input class="form-control" type="text" name="spesifikasi_pekerjaan" required="true" placeholder="E-commerse">
                    </div>
                    <div class="form-group">
                        <label>Tugas Pekerjaan</label>
                        <input class="form-control" type="text" name="tugas_pekerjaan" required="true" placeholder="Eksekutif Marketing">
                    </div>
                    <div class="form-group">
                        <label>Lokasi Pekerjaan</label><br>
                        <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="indonesia" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">Indonesia</label>
                        <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="india" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">India</label>
                        <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="malaysia" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">Malaysia</label>
                        <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="singapore" id="defaultCheck4">
                        <label class="form-check-label" for="defaultCheck4">Singapore</label>
                        <input class="form-check-input" name="lokasi_pekerjaan" type="checkbox" value="thailand" id="defaultCheck5">
                        <label class="form-check-label" for="defaultCheck5">Thailand</label>
                    </div>
                    <div class="form-group">
                        <label>Gaji Bulanan</label>
                        <input class="form-control" type="number" name="gaji_bulanan" required="true" placeholder="3000000">
                    </div>
                    <div class="form-group">
                        <label>Tingkat Pendidikan</label>
                        <input class="form-control" type="text" name="tingkat_pendidikan" required="true" placeholder="Diploma">
                    </div>
                    <div class="form-group">
                        <label>Lama Pengalaman</label>
                        <input class="form-control" type="number" name="lama_pengalaman" required="true" placeholder="Diploma">
                    </div>
                    <div class="form-group">
                        <label>Keahlian</label>
                        <input class="form-control" type="text" name="keahlian" required="true" placeholder="Masukan Ketrampilan">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                  <tbody>
                        <tr>
                            <td>id pekerjaan</td>
                            <td><?php echo $id_pekerjaan; ?></td>
                        </tr>
                        <tr>
                            <td>posisi pekerjaan</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>jenis_pekerjaan</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>tingkat_jabatan</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>spesifikasi_pekerjaan</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>tugas_pekerjaan</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>lokasi_pekerjaan</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>gaji_bulanan</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>tingkat_pendidikan</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>lama_pengalaman</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <td>keahlian</td>
                            <td>Otto</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <script src="<?php echo base_url(); ?>asset/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/datatables.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>asset/styles/bootstrap4/popper.js"></script>
    <script src="<?php echo base_url(); ?>asset/styles/bootstrap4/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="assets/node_modules/peity/jquery.peity.init.js"></script>
</body>