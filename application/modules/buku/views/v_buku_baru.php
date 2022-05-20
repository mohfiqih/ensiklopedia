<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Bootstrap Carousel FadeIn &amp; Fadeout</title>
    <link type="text/css" href="<?php echo base_url('assets'); ?>/buku/css/styles.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./style.css"> -->
</head>

<body>
    <!-- partial:index.partial.html -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- <div style='text-align:center;'>
        <h3
            style='text-align: center;margin: 55px 0px;border-bottom: 2px solid #666; display:inline-block;padding-bottom:10px'>
            Bootstrap Carousel Fade In & FadeOut</h3>
    </div> -->
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="carousel-caption">
                    <h2 data-seq class="title">Pisang / Banana</h2></br>
                    <div class="col-sm-4">
                        <img data-seq class="feature" src="<?php echo base_url('assets'); ?>/buku/images/pisang.png"
                            alt="A cartoon illustration of half a banana" style="width: 230px;height: 220px;" />
                    </div><br />
                </div>
                <!-- <div class="vcenter">
                    <h3 data-seq class="title" style="color: black;">Aku adalah pisang</h3>
                    <h3 data-seq class="title" style="color: black;">Berbentuk panjang</h3>
                    <h3 data-seq class="title" style="color: black;">Berwarna kuning</h3>
                    <br /><br /><br />
                    <audio controls data-seq class="title">
                        <source src="horse.ogg" type="audio/ogg">
                        <source src="<?php echo base_url('assets'); ?>/audio/pisang.mp3" type="audio/mpeg">
                        Your browser does not support the audio tag.
                    </audio>
                    <p data-seq class="title" style="color: black">Play untuk suara</p>
                </div> -->
                <div class="carousel-caption">
                    <!-- <h3>First slide label</h3> -->
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <h3>Second slide label</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="item">
                <div class="carousel-caption">
                    <h3>Third slide label</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselFade" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselFade" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- partial -->
    <script src="./script.js"></script>

</body>

</html>