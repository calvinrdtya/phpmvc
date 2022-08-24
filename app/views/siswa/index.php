<div class="row">
  <div class="col-lg-6">
      <?php Flasher::flash(); ?>
  </div>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-bold">
        Daftar Siswa
          </h4>
            <button class="btn btn-primary mt-3 btn-add-role" 
              role="button" data-bs-toggle="modal" data-bs-target="#formModal">Add Data Siswa<i class="fas fa-plus-circle"></i>
            </button>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dtNoSort" width="100%" cellspacing="0">
                  <?php foreach( $data['ssa'] as $ssa ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?= $ssa['nama']; ?>
                        <div class="btn-col">
                    <a class="btn btn-info btn-access" href="<?= BASEURL; ?>/siswa/detail/<?= $ssa['nis']; ?>" role="button">
                    Detail<i class="fas fa-key"></i>
                      </a>
                    <!-- <a class="btn btn-primary btn-edit" data-bs-toggle="modal" data-bs-target="#formModal" role="button">
                    Edit<i class="fas fa-pen"></i>
                      </a> -->
                    <a class="btn btn-primary btn-edit" href="<?= BASEURL; ?>/siswa/ubah/<?= $ssa['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModalTambah" role="button">
                    Edit<i class="fas fa-pen"></i>
                      </a>
                    <a href=" <?= BASEURL; ?>/siswa/hapus/<?= $ssa['id']; ?>" class="btn btn-danger btn-delete" onclick="return confirm('yakin?');">
                    Delete<i class="fas fa-trash"></i>
                      </a>
                    </li>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

      <!-- Modal Tambah-->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="Judul Modal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="Judul Modal">Tambah Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            <div class="modal-body">
          <form action="<?= BASEURL; ?>/siswa/tambah" method="post"><form>
            <div class="mb-3">
              <label for="email">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                    <div class="mb-3">
                  <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
                  </div>
                <div class="mb-3">
                  <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                      </div>
                    <div class="form-group">
                      <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                          <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                          <option value="Tata Boga">Tata Boga</option>
                          <option value="Akuntansi Keuangan dan Lembaga">Akuntansi Keuangan dan Lembaga</option>
                          <option value="Desain Permodelan dan Informasi Bangunan">Desain Permodelan dan Informasi Bangunan</option>
                          <option value="Konstruksi Gedung Sanitasi dan Perawatan">Konstruksi Gedung Sanitasi dan Perawatan</option>  
                          <option value="Tekhnik Pengelasan">Tekhnik Pengelasan</option>     
                        </select>
                      </div>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

      <!-- Modal Ubah-->
        <div class="modal fade" id="formModalTambah" tabindex="-1" aria-labelledby="Judul Modal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="Judul Modal">Tambah Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            <div class="modal-body">
          <form action="<?= BASEURL; ?>/siswa/tambah" method="post"><form>
            <div class="mb-3">
              <label for="email">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                    <div class="mb-3">
                  <label for="nrp">NRP</label>
                <input type="number" class="form-control" id="nrp" name="nrp">
                  </div>
                <div class="mb-3">
                  <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                      </div>
                    <div class="form-group">
                      <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                          <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                          <option value="Tata Boga">Tata Boga</option>
                          <option value="Akuntansi Keuangan dan Lembaga">Akuntansi Keuangan dan Lembaga</option>
                          <option value="Desain Permodelan dan Informasi Bangunan">Desain Permodelan dan Informasi Bangunan</option>
                          <option value="Konstruksi Gedung Sanitasi dan Perawatan">Konstruksi Gedung Sanitasi dan Perawatan</option>  
                          <option value="Tekhnik Pengelasan">Tekhnik Pengelasan</option>     
                        </select>
                      </div>
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

