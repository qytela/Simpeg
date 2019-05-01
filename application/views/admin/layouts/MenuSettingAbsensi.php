<div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Pengaturan Absensi</h5>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>karyawan/settingAbsensi">
                                            <div class="form-group">
                                                <label for="start" class="col-form-label">Mulai absen (*Example: 06:00)</label>
                                                <input id="start" name="start" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="end" class="col-form-label">Selesai absen (*Example: 08:00)</label>
                                                <input id="end" name="end" type="text" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                            <hr>
                                            <h5 class="card-title">Reset absen harian (*Semua karyawan)</h5>
                                            <a href="<?= base_url(); ?>karyawan/resetAbsen" class="btn btn-primary"><font color="WHITE">Reset</font></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>