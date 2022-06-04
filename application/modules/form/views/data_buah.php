<head>
     <title>Data Buah</title>
</head>

<div class="content-page">
     <div class="content">
          <div class="container-fluid">
               <div class="row">
                    <div class="col-md-12"><br />
                         <div class="card">
                              <div class="card-header bg-primary text-white">
                                   Data Buah
                              </div>
                              <div class="card-body">
                                   <p>Link Buku :<a target="_blank" href="<?php echo base_url('buku') ?>">
                                             <span>Klik Link</span>
                                        </a></p>

                                   <!-- <a target="_blank"
                                        href="<?php echo base_url('kuesioner/index/') . enkrip($d->id_paket); ?>">Link
                                        Kuesioner
                                        <input hidden id="copyText"
                                             value="<?php echo base_url('kuesioner/index/') . enkrip($d->id_paket); ?>">
                                   </a> -->
                                   <div class="row">
                                        <?php
									if ($data_buah){
									foreach ($data_buah as $d){ 
								    ?>
                                        <div class="col-md-4">
                                             <div class="card" style="background-color: #E8ECEF;">
                                                  <div class="card-body">
                                                       <center>
                                                            <img style="width: 250px;height: 250px;"
                                                                 src="<?php echo base_url(); ?>assets/images/<?php echo $d->foto; ?>"
                                                                 class="card-img-top" alt="..."><br /><br />
                                                            <b>
                                                                 <h4><?php echo $d->nama_buah; ?>
                                                                 </h4>
                                                            </b>
                                                            <h5 class="card-text"><?php echo $d->deskripsi; ?>
                                                            </h5>
                                                            <br />
                                                            <div style="margin-right: 90px;">
                                                                 <audio controls>
                                                                      <source
                                                                           src="<?php echo base_url().'assets/audio/'.$d->audio;?>"
                                                                           type="audio/mpeg">
                                                                 </audio>
                                                            </div>
                                                            <a href="<?php echo url(1) .'/hapus/'. enkrip($d->id_buah); ?>"
                                                                 class="btn btn-danger text-white"
                                                                 onclick="return confirm('Apakah Anda yakin?')"
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Hapus Data">
                                                                 Hapus
                                                            </a>
                                                            <a href="<?php echo url(1) .'/edit/'. enkrip($d->id_buah); ?>"
                                                                 class="btn btn-warning text-white"
                                                                 onclick="return confirm('Apakah Anda yakin?')"
                                                                 data-bs-toggle="tooltip" data-bs-placement="top"
                                                                 title="Hapus Data">
                                                                 Edit
                                                            </a>
                                                       </center>
                                                  </div>
                                             </div>
                                        </div>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="6">Tidak ada data</td>
                                        <?php } ?>
                                   </div>
                              </div>

                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>