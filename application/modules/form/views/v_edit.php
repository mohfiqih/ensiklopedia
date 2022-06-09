<div class="content-page"><br />
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <form action="<?php echo base_url('Form/edit_file'); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                    value="<?php echo $this->security->get_csrf_hash(); ?>">

                <div class="row push">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?php echo enkrip($data_edit->id_buah); ?>">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="nama_buah" placeholder="Nama Buah"
                                        autocomplete="off" value="<?php echo $data_edit->nama_buah?>" required>
                                    <label>Nama Buah</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi"
                                        autocomplete="off" value="<?php echo $data_edit->deskripsi?>" required>
                                    </input>
                                    <label>Deskripsi</label>
                                </div>

                                <div class="mb-2"><br />
                                    <label class="form-label">Foto</label>
                                    <center>
                                        <img width="210" height="210"
                                            src="<?php echo base_url().'assets/images/'.$data_edit->foto;?>" /><br />
                                        <input type="file" class="form-control" name="file_foto"
                                            value="<?php echo $data_edit->foto ?>"><br />
                                        <input type="hidden" class="form-control" name="edit_file_foto"
                                            value="<?php echo $data_edit->foto?>"><br />
                                    </center>
                                </div>
                                <div class="mb-2"><br />
                                    <label class="form-label">Audio</label>
                                    <center>
                                        <audio controls>
                                            <source src="<?php echo base_url().'assets/audio/'.$data_edit->audio;?>"
                                                type="audio/mpeg">
                                        </audio>
                                        <input type="file" class="form-control" name="file_audio" value=""><br />
                                        <input type="hidden" class="form-control" name="edit_file_audio"
                                            value="<?php echo $data_edit->audio?>"><br />
                                    </center>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Edit</button>
                                    <a href="<?php echo base_url('Upload'); ?>">
                                        <button type="button" class="btn btn-danger">Kembali</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>