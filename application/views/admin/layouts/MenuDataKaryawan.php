                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Data Karyawan</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="data_karyawan" class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>NIK</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($getAllDataKaryawan as $rows) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $rows->name; ?></td>
                                                <td><?= $rows->position; ?></td>
                                                <td><?= $rows->age; ?></td>
                                                <td><?= $rows->start_date; ?></td>
                                                <td>Rp. <?= $rows->salary; ?></td>
                                                <td><?= $rows->nik; ?></td>
                                                <td><a href="<?php echo base_url(); ?>karyawan/edit/<?= $rows->id; ?>" class="btn btn-primary btn-space"><i class="icon s7-mail"></i><font color="WHITE"> Edit</font></a><a href="<?php echo base_url(); ?>karyawan/delete/<?= $rows->id; ?>" class="btn btn-secondary btn-space"><i class="icon s7-close"></i><font color="WHITE"> Delete</font></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>NIK</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
            </div>