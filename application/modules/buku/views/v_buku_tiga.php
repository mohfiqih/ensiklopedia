<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>CodePen - Tweenmax slideshow</title>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
     <link rel='stylesheet'
          href='https://mverissimo.github.io/tweenslideshow/dist/assets/stylesheet/application.min.css'>

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
                              <div class="column">
                                   <h1 class="title"><?php echo $d->nama_buah ;?></h1></br>
                                   <h1 class="title" style="font-size: 20px;"><?php echo $d->deskripsi ;?></h1>
                              </div>
                              <div class="column"><img
                                        src="<?php echo base_url(); ?>assets/images/<?php echo $d->foto; ?>"
                                        class="image burger"></div>
                         </div>
                    </div>
                    <div class="slider__item slide-astronaut">
                         <div class="slider__content grid">
                              <div class="column">
                                   <h1 class="title">lost</h1>
                                   <h1 class="title">in space</h1>
                              </div>
                              <div class="column"><img
                                        src="https://mverissimo.github.io/tweenslideshow/dist/assets/images/astronaut.png"
                                        class="image astronaut"></div>
                         </div>
                    </div>
                    <div class="slider__item slide-coffee">
                         <div class="slider__content grid">
                              <div class="column">
                                   <h1 class="title">I Love</h1>
                                   <h1 class="title">Coffee</h1>
                              </div>
                              <div class="column"><img
                                        src="https://mverissimo.github.io/tweenslideshow/dist/assets/images/cup-2.png"
                                        class="image cup"></div>
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