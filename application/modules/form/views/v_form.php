<head>
    <title>Form Input</title>
</head>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"><br />
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3">
                                Form Input Buah
                            </h4>

                            <form action="<?php echo base_url('form/tambah'); ?>" method="POST"
                                enctype="multipart/form-data">

                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="nama_buah" placeholder="Nama Buah"
                                        autocomplete="off" required>
                                    <label>Nama Buah</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                                        autocomplete="off" required>
                                             </textarea>
                                    <label>Deskripsi</label>
                                </div>

                                <div class="form-control" style="height: 200px;">
                                    <input type="file" name="file_foto" multiple required>
                                    <center>
                                        <div class="dz-message needsclick">
                                            <i class="h1 text-muted dripicons-cloud-upload"></i>
                                            <h3>Pilih Gambar Buah</h3>
                                            <span class="text-muted font-13">(Type gambar jpg,jpeg,png)
                                        </div>
                                    </center>
                                </div><br />
                                <!-- <div class="form-control" style="height: 200px;">
                                             <input type="file" name="file_foto" multiple required>
                                             <center>
                                                  <div class="dz-message needsclick">
                                                       <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                       <h3>Pilih Background Buah</h3>
                                                       <span class="text-muted font-13">(Type gambar jpg,jpeg,png)
                                                  </div>
                                             </center>
                                        </div> -->
                                <br />
                                <!-- <div class="form-control" style="height: 200px;">
                                             <input type="file" name="foto" multiple required>

                                             <center>
                                                  <div class="dz-message needsclick">
                                                       <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                       <h3>Pilih Audio Buah</h3>
                                                       <span class="text-muted font-13">(Type mp3)
                                                  </div>
                                             </center>
                                        </div> -->
                                <div class="text-left">
                                    <div class="text-center"><br />
                                        <button type="submit" class="btn btn-success third">Tambah</button>
                                        <a href="<?php echo base_url("form"); ?>">
                                            <button type="button" class="btn btn-danger">Batal</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>