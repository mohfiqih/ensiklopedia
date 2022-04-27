<!--<!DOCTYPE html>
<html lang="en">
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Form Input</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Tambah Data
                    </div>
                    <div class="card-body">
                        <div class="input mb-3">
                            <h5>Nama Buah</h5>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Buah" name="nama_buah"
                                aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input mb-3">
                            <h5>Deskripsi Buah</h5>
                            <input type="text" class="form-control" placeholder="Masukkan Deskripsi Buah"
                                name="deskripsi_buah" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        <label class="form-label" for="customFile">Foto Buah</label>
                        <input type="file" name="gambar" class="form-control" id="customFile" /><br />
                        <button type="submit" class="btn bg-success text-white">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-3"><?php echo (uri(2) == 'edit') ? 'Edit' : 'Tambah'; ?> Buah
                            </h4>

                            <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                method="POST">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="user_id"
                                    value="<?php echo uri(2) == "edit" ? enkrip($edit->user_id) : ""; ?>">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="nama"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_nama : ""; ?>"
                                        placeholder="Nama Buah" autocomplete="off" required>
                                    <label>Nama Buah</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="deskripsi"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_password : ""; ?>"
                                        placeholder="Deskripsi" autocomplete="off" required>
                                    <label>Deskripsi</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control" name="gambar"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_namalengkap : ""; ?>"
                                        autocomplete="off" required>
                                    <label>Gambar Buah</label><br />
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="file" class="form-control" name="audio"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_namalengkap : ""; ?>"
                                        autocomplete="off" required>
                                    <label>Audio Buah</label><br />
                                </div>
                                <!--<div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="user_namalengkap"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_namalengkap : ""; ?>"
                                        placeholder="Nama Lengkap" autocomplete="off" required>
                                    <label>Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="user_level"
                                        aria-label="Floating label select example" required>
                                        <option value="">Pilih Level</option>
                                        <option value="1"
                                            <?php if (uri(2) == "edit") echo $edit->user_level == 1 ? "selected" : ""; ?>>
                                            Super
                                            Admin</option>
                                        <option value="2"
                                            <?php if (uri(2) == "edit") echo $edit->user_level == 2 ? "selected" : ""; ?>>
                                            Admin
                                        </option>
                                        <option value="3"
                                            <?php if (uri(2) == "edit") echo $edit->user_level == 3 ? "selected" : ""; ?>>
                                            User
                                        </option>
                                    </select>
                                    <label for="example-select-floating">Level</label>
                                </div>-->

                                <div class="text-left">
                                    <button type="submit"
                                        class="btn btn-primary"><?php echo (uri(2) == 'edit') ? 'Update' : 'Tambah'; ?></button>

                                    <?php if (uri(2) == "edit"){ ?>
                                    <button type="button" class="btn btn-outline-danger"
                                        onclick="window.location='<?php echo base_url(uri(1)); ?>'">Batal</button>
                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>