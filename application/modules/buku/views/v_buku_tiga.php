<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Ensiklopedia Pintar Seri Buah</title>
     <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/epin-mini.png'); ?>">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
     <link rel='stylesheet'
          href='https://mverissimo.github.io/tweenslideshow/dist/assets/stylesheet/application.min.css'>
     <link type="text/css" href="<?php echo base_url('assets'); ?>/buku/css/new.css" rel="stylesheet">

</head>

<body>
     <section id="slider" class="section">

          <div class="slider">
               <div class="slider__container">

                    <?php
                        if ($data_buah){
                        foreach ($data_buah as $d){ 
					?>

                    <div class="slider__item slide-burger">
                         <div class="slider__content grid">
                              <div class="column" style="padding-bottom: 20px;">
                                   <h1 class="title"
                                        style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                        <?php echo $d->nama_buah ;?>
                                   </h1></br>
                                   <h1 class="title"
                                        style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                        <?php echo $d->deskripsi ;?>
                                   </h1>
                              </div>
                              <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                        src="<?php echo base_url(); ?>assets/images/<?php echo $d->foto; ?>"
                                        class="image burger"></div>
                         </div>
                    </div>
                    <div class="slider__item slide-astronaut">
                         <div class="slider__content grid">
                              <div class="column">
                                   <h1 class="title"
                                        style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                        Melon
                                   </h1></br>
                                   <h1 class="title"
                                        style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                        Melon berwarna hijau<br />Melon memiliki rasa manis<br />
                                   </h1>
                              </div>
                              <div class="column"><img width="350" height="350" style="margin-bottom: 100px;"
                                        src="<?php echo base_url('assets'); ?>/buku/images/melon.png"
                                        class="image astronaut"></div>
                         </div>
                    </div>
                    <div class="slider__item slide-coffee">
                         <div class="slider__content grid">
                              <div class="column">
                                   <h1 class="title"
                                        style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                        Jeruk</h1>
                                   <h1 class="title"
                                        style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                        Jeruk berwarna oren<br />Jeruk rasanya manis<br />Jeruk mengandung
                                        vitamin C</h1>
                              </div>
                              <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                        src="<?php echo base_url('assets'); ?>/buku/images/jeruk.png" class="image cup">
                              </div>
                         </div>
                    </div>
                    <?php }} else { ?>
                    <td class="text-center" colspan="6">Tidak ada data</td>
                    <?php } ?>
               </div>
          </div>
     </section>
     <!-- partial -->
     <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
     <script src='https://mverissimo.github.io/tweenslideshow/dist/assets/javascript/script.min.js'>
     </script>
     <script src="./script.js"></script>

</body>

</html>