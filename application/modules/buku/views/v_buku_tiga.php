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
    <!-- partial:index.partial.html -->
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
                            <h5 class="title" style="font-size: 20px!important;"><?php echo $d->deskripsi;?></h5>
                            <!-- <h1 class="title">Burguer</h1> -->
                        </div>
                        <div class="column"><img width="300px" height="300px" style="margin-left: 100px;"
                                src="<?php echo base_url(); ?>assets/images/<?php echo $d->foto; ?>"
                                class="image burger"></div>
                    </div>
                </div>
                <?php }} else { ?>
                <td class="text-center" colspan="6">Tidak ada data</td>
                <?php } ?>
                <!-- <div class="slider__item slide-astronaut">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title">lost</h1>
                            <h1 class="title">in space</h1>
                        </div>
                        <div class="column"><img
                                src="https://mverissimo.github.io/tweenslideshow/dist/assets/images/astronaut.png"
                                class="image astronaut"></div>
                    </div>
                </div> -->
                <!-- <div class="slider__item slide-coffee">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title">I Love</h1>
                            <h1 class="title">Coffee</h1>
                        </div>
                        <div class="column"><img
                                src="https://mverissimo.github.io/tweenslideshow/dist/assets/images/cup-2.png"
                                class="image cup"></div>
                    </div>
                </div> -->
            </div>

        </div>

    </section>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
    <script src='https://mverissimo.github.io/tweenslideshow/dist/assets/javascript/script.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>