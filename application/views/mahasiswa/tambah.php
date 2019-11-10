<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Data Tambah Mahasiswa
                </div>
                <div class="card-body">
                    <!-- <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif; ?> -->

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="teks" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="teks" class="form-control" id="nrp" name="nrp">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="teks" class="form-control" id="email" name="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="Teknik Informatika">Laki-Laki</option>
                                <option value="Teknik Sipil">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat</label>
                            <input type="teks" class="form-control" id="alamat" name="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Nomor Hp</label>
                            <input type="teks" class="form-control" id="nomor_hp" name="nomor_hp">
                            <small class="form-text text-danger"><?= form_error('nomor_hp'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>