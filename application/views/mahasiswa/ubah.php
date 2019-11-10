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
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="teks" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="teks" class="form-control" id="nrp" name="nrp" value="<?= $mahasiswa['nrp']; ?>">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="teks" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($j == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelammin</label>
                            <input type="teks" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $mahasiswa['jenis_kelamin']; ?>">
                            <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="teks" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp">Nomor Hp</label>
                            <input type="teks" class="form-control" id="nomor_hp" name="nomor_hp" value="<?= $mahasiswa['nomor_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('nomor_hp'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>