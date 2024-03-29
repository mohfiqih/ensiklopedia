<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Baca Buku - EPIN PHB</title>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
     <link rel='stylesheet'
          href='https://mverissimo.github.io/tweenslideshow/dist/assets/stylesheet/application.min.css'>

     <!-- <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/epin-mini.png'); ?>">
    <link type="text/css" href="<?php echo base_url('assets'); ?>/buku/css/font.css">
    <link type="text/css" href="<?php echo base_url('assets'); ?>/buku/css/reset.min.css">
    <link type="text/css" href="<?php echo base_url('assets'); ?>/buku/css/application.min.css"> -->
     <link type="text/css" href="<?php echo base_url('assets'); ?>/buku/css/new.css" rel="stylesheet">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/frontend/images/epin-mini.png'); ?>">


</head>

<body>
     <section id="slider" class="section">
          <div class="slider">
               <div class="slider__container">
                    <div class="slider__item slide-burger">
                         <div class="slider__content grid">
                              <div class="column">

                                   <div>
                                        <h1 class="title"
                                             style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                             Pisang<br />(Banana)
                                        </h1></br>
                                        <h1 class="title"
                                             style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 10px;">
                                             Aku adalah pisang<br />Berbentuk panjang<br />Berwarna kuning<br />Sumber
                                             karbohidrat<br />
                                        </h1>
                                        <div style="margin-right: 40px;">
                                             <audio style="margin-right: 10px!important;margin-bottom: 20px;" controls>
                                                  <source src="horse.ogg" type="audio/ogg">
                                                  <source src="<?php echo base_url('assets');?>/audio/pisang.mp3"
                                                       type="audio/mpeg">
                                             </audio>
                                        </div>
                                   </div>
                              </div>
                              <div class="column"><img width="350" height="350" style="margin-bottom: 100px;"
                                        src="<?php echo base_url('assets'); ?>/buku/images/pisang.png"
                                        class="image burger">
                              </div>

                         </div>

                    </div>

                    <div class="slider__item slide-astronaut">
                         <div class="slider__content grid">
                              <div class="column">
                                   <h1 class="title"
                                        style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                        Kelapa<br />(Coconut)
                                   </h1></br>
                                   <h1 class="title"
                                        style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 10px;">
                                        Aku adalah kelapa<br />Berbentuk bulat<br />Berwarna putih<br />
                                   </h1>
                                   <div style="margin-right: 40px;">
                                        <audio style="margin-right: 10px!important;margin-bottom: 20px;" controls>
                                             <source src="horse.ogg" type="audio/ogg">
                                             <source src="<?php echo base_url('assets');?>/audio/kelapa.mp3"
                                                  type="audio/mpeg">
                                        </audio>
                                   </div>
                              </div>
                              <div class="column"><img width="350" height="350" style="margin-bottom: 100px;"
                                        src="<?php echo base_url('assets'); ?>/buku/images/kelapa.png"
                                        class="image astronaut">
                              </div>
                         </div>
                    </div>

                    <?php
                        if ($data_buah){
                        foreach ($data_buah as $d){ 
					?>

                    <!-- <div class="slider-controls">
                         <a class="next"
                              href="<?php echo base_url('buku/buah/') . $d->id_buah . '/'. $d->nama_buah; ?>"><button
                                   type="button"></button></a>
                         <button type="button" class="previous"></button>
                    </div> -->

                    <div class="slider__item slide-astronaut">
                         <div class="slider__content grid">
                              <div class="column" style="padding-bottom: 20px;">
                                   <h1 class="title"
                                        style="font-size: 60px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                        <?php echo $d->nama_buah ;?>
                                   </h1></br>
                                   <h1 class="title" style="color: white;font-size: 30px;margin-right: 50px;;">
                                        <?php echo $d->deskripsi ;?>
                                   </h1><br />
                                   <div style="margin-right: 40px;">
                                        <audio style="margin-right: 10px!important;" controls>
                                             <source src="<?php echo base_url().'assets/audio/'.$d->audio;?>"
                                                  type="audio/mpeg">
                                        </audio>
                                   </div>
                              </div>
                              <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                        src="<?php echo base_url(); ?>assets/images/<?php echo $d->foto; ?>"
                                        class="image burger"></div>

                         </div>
                    </div>
                    <?php }} else { ?>
                    <td class="text-center" colspan="6">Tidak ada data</td>
                    <?php } ?>
               </div>
          </div>
          </div>
     </section>
     <!-- partial -->
     <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
     <script src='https://mverissimo.github.io/tweenslideshow/dist/assets/javascript/script.min.js'></script>

     <script src="./script.js"></script>
     <!-- <script type="text/javascript" href="<?php echo base_url('assets'); ?>/buku/js/tweenmax.min.js" rel="stylesheet">
    </script>
    <script type="text/javascript" href="<?php echo base_url('assets'); ?>/buku/js/script.min.js" rel="stylesheet">
    </script> -->
     <script type="text/javascript" href="<?php echo base_url('assets'); ?>/buku/js/script.js" rel="stylesheet">
     </script>
</body>

</html>