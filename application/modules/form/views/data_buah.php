<div class="content-page">
     <div class="content">
          <div class="container-fluid">
               <div class="row">
                    <div class="col-md-12"><br />
                         <div class="card">
                              <div class="card-header bg-success text-white">
                                   Data Buah
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <?php
									if ($data_buah){
									foreach ($data_buah as $d){ 
								?>
                                        <div class="col-md-4">
                                             <div class="card" style="background-color: #E8ECEF;">
                                                  <div class="card-body">
                                                       <img style="width: 250px;height: 250px;"
                                                            src="<?php echo base_url(); ?>assets/images/<?php echo $d->foto; ?>"
                                                            class="card-img-top" alt="..."><br /><br />
                                                       <center>
                                                            <b>
                                                                 <h4><?php echo $d->nama_buah; ?>
                                                                 </h4>
                                                            </b>

                                                            <h5 class="card-text"><?php echo $d->deskripsi; ?>
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