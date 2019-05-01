                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- profile -->
                        <!-- ============================================================== -->
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- card profile -->
                            <!-- ============================================================== -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="user-avatar text-center d-block">
                                        <img src="<?php echo base_url(); ?>images/<?= $dataKaryawan[0]->image_name; ?>" alt="<?= $dataKaryawan[0]->name; ?>" class="rounded user-avatar-xxl">
                                    </div>
                                    <div class="text-center">
                                        <h2 class="font-24 mb-0"><?= $dataKaryawan[0]->name; ?></h2>
                                        <p><?= $dataKaryawan[0]->position; ?><br><?= $dataKaryawan[0]->nik; ?></p>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <h3 class="font-16">Contact Information</h3>
                                    <div class="">
                                        <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?= $dataKaryawan[0]->email; ?></li>
                                        <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><?= $dataKaryawan[0]->handphone; ?></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end card profile -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end profile -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- campaign data -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                            <!-- ============================================================== -->
                            <!-- campaign tab one -->
                            <!-- ============================================================== -->
                            <div class="influence-profile-content pills-regular">
                                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-tentang-tab" data-toggle="pill" href="#pills-tentang" role="tab" aria-controls="pills-tentang" aria-selected="true">Info Karyawan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-riwayatabsensi-tab" data-toggle="pill" href="#pills-riwayatabsensi" role="tab" aria-controls="pills-riwayatabsensi" aria-selected="false">Riwayat Absensi</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-tentang" role="tabpanel" aria-labelledby="pills-tentang-tab">
                                        <div class="card">
                                            <h5 class="card-header">Info Karyawan <?= $dataKaryawan[0]->name; ?></h5>
                                            <div class="card-body">
                                                <div class="tentang-block">
                                                    <p class="tentang-text m-0">Mulai Absen: <?= $settingAbsensi[0]->mulai_absen; ?><br>Selesai Absen: <?= $settingAbsensi[0]->selesai_absen; ?><br>
                                                    Karyawan wajib absen satu hari sekali, jika tidak maka akan di anggap tidak hadir.</p><hr>
                                                    <span class="text-dark font-weight-bold"><?= $absensiKaryawan[0]->absen ? "Sudah melakukan absen." : "Belum melakukan absen." ;?><br>Total Absensi<br>Hadir: <?= $absensiKaryawan[0]->hadir; ?><br>Tidak Hadir: <?= $absensiKaryawan[0]->tidak_hadir; ?><br>Izin: <?= $absensiKaryawan[0]->izin; ?><br><br>
                                                    <a href="<?= base_url(); ?>user/absenKaryawan" class="btn btn-primary float-left"><font color="WHITE">Absen</font></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-riwayatabsensi" role="tabpanel" aria-labelledby="pills-riwayatabsensi-tab">
                                        <div class="card">
                                            <h5 class="card-header">Riwayat Absensi Karyawan <?= $dataKaryawan[0]->name; ?></h5>
                                            <?php foreach($alasanKaryawan as $rows) { ?>
                                            <div class="card-body border-top">
                                                <div class="riwayatabsensi-block">
                                                    <p class="riwayatabsensi-text m-0"><?= $rows->tanggal; ?></p>
                                                    <span class="text-dark font-weight-bold"><?= $rows->alasan; ?>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end campaign tab one -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- end campaign data -->
                        <!-- ============================================================== -->
                    </div>
                </div>
            </div>