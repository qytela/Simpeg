                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Tambah Karyawan</h5>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url(); ?>karyawan/tambahKaryawan" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Name</label>
                                                <input id="name" name="name" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="position" class="col-form-label">Position</label>
                                                <input id="position" name="position" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="age" class="col-form-label">Age</label>
                                                <input id="age" name="age" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="start_date" class="col-form-label">Start date (dd/mm/yyyy)</label>
                                                <input id="start_date" name="start_date" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="salary" class="col-form-label">Salary (*Just number)</label>
                                                <input id="salary" name="salary" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input id="email" name="email" type="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="handphone" class="col-form-label">Handphone</label>
                                                <input id="handphone" name="handphone" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nik" class="col-form-label">NIK</label>
                                                <input id="nik" name="nik" type="number" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-form-label">Password</label>
                                                <input id="password" name="password" type="text" class="form-control">
                                            </div>
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="uploadImage" name="upload_image">
                                                <label class="custom-file-label" for="uploadImage">Upload Image</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="tentangKaryawan">Tentang Karyawan (*Use < br > no space, for new line)</label>
                                                <textarea class="form-control" id="tentangKaryawan" name="tentang" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>