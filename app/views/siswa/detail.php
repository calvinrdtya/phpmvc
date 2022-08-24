<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h4 class="m-0 font-weight-bold text-bold">
        Detail Guru
      </h6>
    <a href="<?= BASEURL; ?>/siswa" class="card-link">Kembali</a>  
  </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dtNoSort" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jenis kelamin</th>
              <th>Tinggi</th>
              <th>Asal Sekolah</th>
              <th>Komli</th>
              <th>Nilai UN</th>
            </tr>
          </thead>
            <tbody>
              <tr>
                <td><?= $data['ssa']['nama']; ?></td>
                <td><?= $data['ssa']['jns_kel']; ?></td>
                <td><?= $data['ssa']['tinggi']; ?></td>
                <td><?= $data['ssa']['asal_sekolah']; ?></td>
                <td><?= $data['ssa']['komli']; ?></td>
                <td><?= $data['ssa']['nilai_un']; ?></td>
                  <td class="btn-col">
                    <a class="btn btn-primary btn-edit" data-id="<?= $ssa['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal"
                     role="button">
                      Edit &nbsp;<i class="fas fa-pen"></i>
                    </a>
                    <a class="btn btn-danger btn-delete" onclick="" href="#" role="button">
                      Delete &nbsp;<i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
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


