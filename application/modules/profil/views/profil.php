<head>
    <title>Profil</title>
</head>

<div class="content-page"><br />
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <form action="<?php echo base_url('profil/update'); ?>" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                    value="<?php echo $this->security->get_csrf_hash(); ?>">

                <!-- <div class="row push">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $this->session->flashdata('notifikasi'); ?>
                <center>
                    <img style="width: 210px; height: 210px;" type="file" alt="no image"
                        src="<?php echo base_url().'assets/images/'.$edit->user_foto; ?>" /><br />
                </center>

                <div class="mb-2"><br />
                    <label class="form-label">Foto Profil</label>
                    <input type="file" class="form-control" name="file_foto" value=""><br />
                    <p>File Foto harus jpg, png dan jpeg dan ukuran file
                        harus di bawah 2MB</p>
                </div>
        </div>
    </div>
</div> -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap"
                                    value="<?php echo $edit->user_namalengkap; ?>">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Password Saat Ini</label>
                                <input type="password" class="form-control" name="password_sekarang">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Password Baru</label>
                                <input type="password" class="form-control" name="password_baru_1">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Ulangi Password Baru</label>
                                <input type="password" class="form-control" name="password_baru_2">
                            </div>
                            <div class="text-center"><br />
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="<?php echo base_url("dasbor"); ?>">
                                    <button type="button" class="btn btn-danger">Batal</button>
                                </a>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>