<div class="content-page"><br />
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               <form action="<?php echo base_url('Upload/upload_file'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                         value="<?php echo $this->security->get_csrf_hash(); ?>">

                    <div class="row push">
                         <div class="col-md-12">
                              <div class="card">
                                   <div class="card-body">
                                   <div class="mb-2"><br />
                                        <label class="form-label">Foto</label>
                                        <input type="file" class="form-control" name="file_foto" value=""><br />
                                    </div>
                                    <div class="mb-2"><br />
                                        <label class="form-label">Audio</label>
                                        <input type="file" class="form-control" name="file_audio" value=""><br />
                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success">Upload</button>
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
