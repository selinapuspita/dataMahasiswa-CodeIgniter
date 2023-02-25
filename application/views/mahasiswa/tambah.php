<div class="container">
    <div class="row mt-3">
        <div class="col -md-6">


        <div class="card">
            <div class="card-header">
                Tambah Data Mahasiswa
            </div>
                <div class="card-body">
                <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
                </div>    
                <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group"> 
                            <label for="jurusan" >Pilih Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Biologi">Biologi</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Statitiska">Statitiska</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah Data</button>
                    </form>  
            </div>
        </div>
        
        
        </div>
    </div>
</div>