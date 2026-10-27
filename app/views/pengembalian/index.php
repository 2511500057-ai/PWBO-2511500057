    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Pengembalian       
                </button>
                <br><br>
                <h3>Daftar Pengembalian</h3>
                <ul class="list-group">
                    <?php foreach($data['pgln'] as $pgln) : ?>
                        <li class="list-group-item">
                            <?php echo $pgln['NmMhs057']; ?>
                            <a href="<?php echo BASEURL; ?>/pengembalian/hapus/<?php echo $pgln['Kd_Kembali057']; ?>"class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin');">
                                hapus</a>
                            <a href="<?php echo BASEURL; ?>/pengembalian/detail/<?php echo $pgln['Kd_Kembali057']; ?>"class="badge badge-primary float-right ml-1">
                                detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pengembalian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/pengembalian/tambah" method="post">  
            <div class="form-group">
                <label for="Kd_Kembali057">Kd Kembali</label>
                <input type="text" class="form-control" id="Kd_Kembali057" name="Kd_Kembali057">
            </div>
            <div class="form-group">
                <label for="NimMhs057">NIM Mahasiswa</label>
                <input type="text" class="form-control" id="NimMhs057" name="NimMhs057">
            </div>
            <div class="form-group">
                <label for="NmMhs057">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="NmMhs057" name="NmMhs057">
            </div>
            <div class="form-group">
                <label for="NmBuku057">Nama Buku</label>
                <input type="text" class="form-control" id="NmBuku057" name="NmBuku057">
            </div>
            <div class="form-group">
                <label for="JumBuku057">Jumlah Buku</label>
                <input type="text" class="form-control" id="JumBuku057" name="JumBuku057">
            </div>
            <div class="form-group">
                <label for="TglKembali057">Tanggal Kembali</label>
                <input type="date" class="form-control" id="TglKembali057" name="TglKembali057">
            </div>
            <div class="form-group">
                <label for="Denda057">Denda</label>
                <input type="text" class="form-control" id="Denda057" name="Denda057">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        </div>
        </div>
    </div>
    </div>