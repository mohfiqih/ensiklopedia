<head>
    <title>User</title>
</head>
<div class="content-page"><br />
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-header bg-primary text-white">
                                <?php echo (uri(2) == 'edit') ? 'Edit' : 'Tambah'; ?>
                                Pengguna
                            </h4><br />

                            <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "tambah"); ?>"
                                method="POST">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="user_id"
                                    value="<?php echo uri(2) == "edit" ? enkrip($edit->user_id) : ""; ?>">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="user_nama"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_nama : ""; ?>"
                                        placeholder="Nama Pengguna" autocomplete="off" required>
                                    <label>Username</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="user_password"
                                        value="<?php echo uri(2) == "edit" ? $edit->user_password : ""; ?>"
                                        placeholder="Password Pengguna" autocomplete="off" required>
                                    <label>Password</label>
                                </div>
                                <div class="form-floating mb-3">
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
                                            <?php if (uri(2) == 'edit') echo $edit->user_level == 1 ? "selected" : ""; ?>>
                                            Super Admin</option>
                                        <option value="2"
                                            <?php if (uri(2) == 'edit') echo $edit->user_level == 2 ? "selected" : ""; ?>>
                                            Admin
                                        </option>
                                        <option value="3"
                                            <?php if (uri(2) == 'edit') echo $edit->user_level == 3 ? "selected" : ""; ?>>
                                            User
                                        </option>
                                    </select>
                                    <label for="example-select-floating">Level</label>
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="btn btn-success"><?php echo (uri(2) == 'edit') ? 'Update' : 'Tambah'; ?></button>

                                    <a href="<?php echo base_url("dasbor"); ?>">
                                        <button type="button" class="btn btn-danger">Batal</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-header bg-primary text-white">Daftar Pengguna</h4><br />

                            <table class="table table-striped table-hover table-vcenter"
                                style="border-top:2px solid #eee; overflow-x: auto;">
                                <thead>
                                    <tr>
                                        <th style="width:200px">Username</th>
                                        <th>Nama</th>
                                        <th style="width:140px">Level</th>
                                        <th style="width:100px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									if ($data_user){
									foreach ($data_user as $d){
									?>
                                    <tr style="vertical-align:middle">
                                        <td><?php echo $d->user_nama; ?></td>
                                        <td><?php echo $d->user_namalengkap; ?></td>
                                        <td><?php echo level_user($d->user_level); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo url(1) .'/edit/'. enkrip($d->user_id); ?>"
                                                    class="btn btn-xs btn-warning text-white" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit User">
                                                    <i class="ti-pencil menu-icon"></i>
                                                </a>

                                                <?php if ($this->user_nama != $d->user_nama){ ?>
                                                <a href="<?php echo url(1) .'/hapus/'. enkrip($d->user_id); ?>"
                                                    class="btn btn-xs btn-danger text-white"
                                                    onclick="return confirm('Apakah Anda yakin?')"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus User">
                                                    <i class="ti-trash menu-icon"></i>
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php }} else { ?>
                                    <tr>
                                        <td class="text-center" colspan="4">Tidak ada data</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>