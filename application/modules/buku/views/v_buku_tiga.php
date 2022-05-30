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
                                style="font-size: 60px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                <?php echo $d->nama_buah ;?>
                            </h1></br>
                            <h1 class="title"
                                style="color: white;font-size: 30px;margin-right: 50px;margin-bottom: 100px;">
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
                            <p style="color: black">Play untuk suara</p>
                            <audio controls data-seq class="title">
                                <source src="horse.ogg" type="audio/ogg">
                                <source src="<?php echo base_url('assets'); ?>/audio/melon.mp3" type="audio/mpeg">
                                Your browser does not support the audio tag.
                            </audio>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;"
                                src="<?php echo base_url('assets'); ?>/buku/images/melon.png" class="image astronaut">
                        </div>
                        <!-- <audio controls data-seq class="title">
                            <source src="horse.ogg" type="audio/ogg">
                            <source src="<?php echo base_url('assets'); ?>/audio/melon.mp3" type="audio/mpeg">
                            Your browser does not support the audio tag.
                        </audio>
                        <p data-seq class="title" style="color: black">Play untuk suara</p> -->
                    </div>
                </div>
                <div class="slider__item slide-astronaut">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Pisang<br />(Banana)</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku adalah pisang<br />Berbentuk panjang<br />Berwarna kuning<br />Sumber karbohidrat
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/pisang.png" class="image astronaut">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-burger">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Kelapa</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku adalah kelapa<br />Berbentuk bulat<br />Berwarna putih</h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/kelapa.png" class="image burger">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-burger">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Jeruk</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku adalah jeruk<br />Berbentuk bulat<br />Aku berwarna hijau atau oranye<br />Aku
                                mengandung vitamin C</h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/jeruk.png" class="image burger">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-astronaut">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Anggur</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku adalah anggur<br />Berbentuk bulat<br />Kulitku berwarna hijau atau
                                ungu<br />Aku mengandung vitamin C</h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/anggur.png" class="image astronaut">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-coffee">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Apel</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku adalah apel<br />Berbentuk bulat dengan sedikit lekukan<br />Aku kaya akan serat
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/apel.png" class="image cup">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-burger">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Belimbing</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku berbentuk mirip dengan bintang<br />Kulitku berwarna hijau atau kuning<br />Aku
                                mengandung vitamin C
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/belimbing.png" class="image burger">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-astronaut">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Melon</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku berbentuk bulat<br />Kulitku berwarna hijau<br />Aku mengandung vitamin K
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/melon.png" class="image astronaut">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-coffee">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Durian</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku adalah durian<br />Berbentuk bulat<br />Kulitku menyerupai duri<br />Aku kaya akan
                                akan serat
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/durian.png" class="image cup">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-burger">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Mangga</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku adalah mangga<br />Berbentuk bulat atau oval<br />Aku berwarna hijau, kekuningan
                                atau kemerahan<br />Aku mengandung vitamin C
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/mangga.png" class="image burger">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-astronaut">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Pepaya</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku berbentuk lonjong<br />Kulitku berwarna hijau atau kuning<br />Aku mengandung
                                vitamin c
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/pepaya.png" class="image astronaut">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-coffee">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Manggis</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku berbentuk bulat<br />Kulitku berwarna ungu<br />Aku mengandung vitamin C
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/manggis.png" class="image cup">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-burger">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Salak</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku berbentuk lonjong<br />Kulitku berwarna coklat dan tajam<br />Aku mengandung vitamin
                                A
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/salak.png" class="image burger">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-astronaut">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Alpukat</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku adalah alpukat<br />Berbentuk bulat sedikit lonjong<br />Aku berwarna hijau
                                pekat<br />Aku mengandung vitamin A
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/alpukat.png" class="image astronaut">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-coffee">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Semangka</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku berbentuk bulat<br />Kulitku berwarna hijau<br />Aku mengandung vitamin C
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/semangka.png" class="image cup">
                        </div>
                    </div>
                </div>
                <div class="slider__item slide-burger">
                    <div class="slider__content grid">
                        <div class="column">
                            <h1 class="title"
                                style="font-size: 80px;color: black;margin-right: 50px;margin-bottom: 10px;">
                                Nanas</h1>
                            <h1 class="title"
                                style="color: white;font-size: 25px;margin-right: 50px;margin-bottom: 100px;">
                                Aku berbentuk lonjong<br />Kulitku berwarna kuning<br />Aku mengandung vitamin C
                            </h1>
                        </div>
                        <div class="column"><img width="350" height="350" style="margin-bottom: 100px;" ;
                                src="<?php echo base_url('assets'); ?>/buku/images/nanas.png" class="image burger">
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
    <script type="text/javascript" href="<?php echo base_url('assets'); ?>/buku/js/script.js" rel="stylesheet"></script>

</body>

</html>