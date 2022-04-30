<!--<!DOCTYPE html>
<html lang="en">
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="font-weight-bold mb-0">Data Buah</h4>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                            <i class="ti-clipboard btn-icon-prepend"></i>Report
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Data Buah
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img style="width: 250px;height: 250px;"
                                            src="<?php echo base_url('.'); ?>assets/gambar/<?php echo $d->gambar; ?>"
                                            class="card-img-top" alt="..."><br /><br />
                                        <b>
                                            <h4><?php echo $d->nama_buah; ?>
                                            </h4><br />
                                        </b>
                                        <h5 class="card-text"><?php echo $d->deskripsi_buah; ?>
                                        </h5>
                                        <br />
                                        <button class="btn btn-warning text-white">
                                            Edit
                                        </button>
                                        <button class="btn btn-danger text-white">
                                            Hapus
                                        </button>
                                    </div>
                                </div></br>
                            </div>
                        </div>
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
                        <div class="card-header bg-primary text-white">
                            Data Buah
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
								$no=0+1;
								foreach ($queryAllBuah as $d) {
								?>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <img style="width: 250px;height: 250px;"
                                                src="<?php echo base_url(); ?>assets/gambar/<?php echo $d->gambar; ?>"
                                                class="card-img-top" alt="..."><br /><br />
                                            <b>
                                                <h4><?php echo $d->nama_buah; ?>
                                                </h4><br />
                                            </b>
                                            <h5 class="card-text"><?php echo $d->deskripsi_buah; ?>
                                            </h5>
                                            <br />
                                            <button class="btn btn-warning text-white">
                                                Edit
                                            </button>
                                            <a href="<?php echo base_url('.') ?>/<?php echo $d->id_buah ?>"
                                                class="btn btn-danger text-white"
                                                onclick="return confirm('Menghapus data?')">
                                                Hapus
                                            </a>
                                        </div>
                                    </div></br>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!--<div class="card-header bg-primary text-white">
                                Data Buah
                            </div>
                        <h4 class="header-title mb-3">Data Buah</h4>-->
                        <!-- <table class="table table-striped table-hover table-vcenter"
                                style="border-top:2px solid #eee">
                                <thead>
                                    <tr>
                                        <th style="width:200px">Nama Buah</th>
                                        <th>Deskripsi</th>
                                        <th style="width:140px">Gambar Buah</th>
                                        <th style="width:100px"></th>
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
                                                    class="btn btn-xs btn-info" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit User">
                                                    <i class="fa fa-user-edit"></i>
                                                </a>

                                                <?php if ($this->user_nama != $d->user_nama){ ?>
                                                <a href="<?php echo url(1) .'/hapus/'. enkrip($d->user_id); ?>"
                                                    class="btn btn-xs btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin?')"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus User">
                                                    <i class="fa fa-user-times"></i>
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
                            </table> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>