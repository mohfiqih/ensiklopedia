<div class="content-page"><br />
     <div class="content">

          <!-- Start Content-->
          <div class="container-fluid">
               

                    <div class="row push">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" data-mdb-perfect-scrollbar="true" style="height: 490px;overflow: auto;">
                         
                        <a href="<?php echo url(2) .'tambah'; ?>" data-mdb-toggle="tooltip" title="Tambah File">
                            <button type="button" class="btn btn-success"><i class=" fas fa-plus"></i>
                                Tambah
                            </button>
                            <br>
                        </a>
                         <!-- <div class="card-body" style="overflow: auto;height: 1010px;"> -->
                         <table id="example" class="table table-hover mb-0">
                              <thead>
                                   <br />
                                   <tr>
                                        <th class="align-middle" scope="col" style="width: 3px;">
                                             No
                                        </th>
                                        <th class="align-middle" scope="col">
                                             Foto
                                        </th>
                                        <th class="align-middle" scope="col">Audio</th>
                                        <th class="align-middle" scope="col" style="text-align: center">
                                             Action</th>
                                   </tr>

                              </thead>
                              <?php
                                        $no=0+1;
								if ($data){
								foreach ($data as $d){ 
								?>
                              <tr class="fw-normal">
                                   <th class="align-middle">
                                        <?php echo $no++; ?>
                                   </th>
                                   <th class="align-middle">
                                        
                                        <img width="210" height="210"
                                                  src="<?php echo base_url().'assets/images/'.$d->foto;?>" /><br />
                                   </th>
                                   <td class="align-middle">
                                    
                                        <audio controls>
                                            <source src="<?php echo base_url().'assets/audio/'.$d->audio;?>" type="audio/mpeg">
                                            
                                        </audio>
                                   </td>
                                   <td class="align-middle" style="text-align: center">
                                        <a href="<?php echo url(2) .'edit/'. enkrip($d->id); ?>"
                                             data-mdb-toggle="tooltip" title="Edit"><i
                                                  class="fas fa-edit text-warning me-3"></i></a>

                                        <a href="<?php echo url(1) .'/hapus/'. enkrip($d->id); ?>"
                                             data-mdb-toggle="tooltip" title="Hapus"
                                             onclick="return confirm('Yakin hapus data?')"><i
                                                  class="fas fa-trash-alt text-danger"></i></a>
                                   </td>
                              </tr>
                              <?php }} else { ?>
                              <td class="text-center" colspan="11">Tidak ada data</td>
                              <?php } ?>
                              </tbody>
                         </table><br />

                    </div>






                                   
                              </div>
                         </div>
                    </div>
          </div>
     </div>
</div>


