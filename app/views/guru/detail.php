  <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-bold">
          Detail Guru
        </h4>
      <a href="<?= BASEURL; ?>/guru" class="card-link">Kembali</a>  
    </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Komli</th>
            <th>Tanggal Berdiri</th>
            <th>Nama</th>
            <th>Jumlah Siswa</th>
            <th>Akreditasi</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td><?= $data['gur']['komli']; ?></td>
              <td><?= $data['gur']['tgl_berdiri']; ?></td>
              <td><?= $data['gur']['nama']; ?></td>
              <td><?= $data['gur']['jum_siswa']; ?></td>
              <td><?= $data['gur']['akreditasi']; ?></td>
                <!-- <td class="btn-col">
                  <a class="btn btn-primary btn-edit" id="" href="#" role="button">
                    Edit &nbsp;<i class="fas fa-pen"></i>
                  </a>
                  <a class="btn btn-danger btn-delete" onclick="" href="#" role="button">
                    Delete &nbsp;<i class="fas fa-trash"></i>
                  </a>
                </td> -->
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>


