<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="materials/logo.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/intro.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style-ipadpro.css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
      integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
      crossorigin=""/>

      <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
    integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>
    <link rel="stylesheet" href="css/iniCSS.css">

    <?php
      $xml = simplexml_load_file('http://data.bmkg.go.id/gempaterkini.xml');
      $gempah = $xml->gempa[0];
      $gempah2 = $xml->gempa[1];
      $gempah3 = $xml->gempa[2];
    ?>

  <title>DiShare</title>
</head>

<body>
  <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light top-navbar">
        <a class="navbar-brand second" id="brand" href="#"><b>DiShare</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="outline: none">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item nav-pd aniscroll">
              <a class="nav-link second" href=".landing-page" id="nav-color">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-pd aniscroll">
              <a class="nav-link second" href=".box2" id="nav-color">Video</a>
            </li>
            <li class="nav-item nav-pd aniscroll">
              <a class="nav-link second" href=".sec3" id="nav-color">Blog</a>
            </li>
            <li class="nav-item nav-pd aniscroll">
              <a class="nav-link second" href=".plentungan" id="nav-color">Stats</a>
            </li>
            <li class="nav-item nav-pd aniscroll">
              <a class="nav-link second donate" href=".sec5" id="nav-color">Donate</a>
            </li>
          </ul>
        </div>
      </nav>

    <div class="landing-page wow fadeInRight">
      <h1 class="lp-st lp-desc wow fadeInRight">GEMPA BUMI</h1>
      <p class="lp-st lp-desc-2 wow fadeInRight">Gempa bumi adalah getaran yang terjadi akibat adanya
        patahan atau ledakan di dalam kerak bumi. Indonesia sangat rawan terjadi gempa bumi. Terdapat kurang
        lebih 360x gempa bumi yang terjadi di Indonesia setiap tahunnya.
      </p>
      <p class="lp-st lp-oleh wow fadeInRight">
        <i>(Kepala BMKG, Dwikorita Karnawati, 2017)</i>
      </p>

      <div class="scroll">
        <a href="#box2"><img class="animated infinite bounce" src="materials/scroll.png" alt="" width="25px" height="25px"></a>
      </div>
    </div>

    <div id="box2" class="box2 ">
      <!-- <p class="sec-tl">Tentang Gempa!</p> -->
      <div class="right2 wow fadeInRight">
        <h5 class="caption od">Bagaimana</h5>
        <h1 class="odd tagline">GEMPA BUMI</h1>
        <h5 class="caption od">terjadi?</h5>
        <h5 class="brdr"></h5>
      </div>
      <div class="left2 wow fadeInLeft">
        <div class="div-vid">
        <iframe class="sec2-vid" src="https://www.youtube.com/embed/wxn6LvN4UA8?controls=0"></iframe>
        </div>
      </div>


      <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: 0 auto">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="sec2-vid" controls>
                  <source src="materials/vid1.mp4" type="video/mp4">
                </video>
              <div>
              </div>
            </div>
            <div class="carousel-item">
              <video class="sec2-vid" controls>
                <source src="materials/vid1.mp4" type="video/mp4">
              </video>
              <div class="">
                <h5 class="caption">Apa saja dampak buruk dari gempa bumi?</h5>
              </div>
            </div>
            <div class="carousel-item">
              <video class="sec2-vid" controls>
                <source src="materials/vid1.mp4" type="video/mp4">
              </video>
              <div class="">
                <h5 class="caption">Apa itu seismograf?</h5>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="false"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>-->
    </div>
    <section class="sec3">
    <p class="sec-tl sec3-tl wow fadeInDown"><b>Harus</b> Tau!</p>
    <div id="carouselExampleIndicators-atas" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="sec3">
            <div class="right wow fadeInRight">
              <img class="sec3-img" src="materials/1.jpg" />
            </div>
            <div class="left wow fadeInLeft">
              <p class="sec3-sub-tl sec3-tl">Apa aja sih yang harus kita antisipasi sebelum terjadi gempa?</p>
              <p class="sec3-desc">Halo SobatDi! Di artikel kali ini kami bakal ngasih
                tips-tips penting tentang apa aja sih yang harus kita lakukan untuk mengantisipasi
                gempa yang mungkin terjadi?
              </p>
              <p class="sec3-btn-p">
                <a href="p.html"><button class="sec3-btn"><i>Read More ...</i></button></a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="sec3">
            <div class="right">
              <img class="sec3-img" src="materials/2.jpg" />
            </div>
            <div class="left">
              <p class="sec3-sub-tl sec3-tl">Jangan Panik, Lakukan Hal Ini Saat Gempa!</p>
              <p class="sec3-desc">Halo SobatDi! Pernahkah kalian merasakan gempa bumi? Bagaimana perasaan  kalian saat itu?
          Tentu saja kalian ketakukan, bukan? Pasti! Namun, bila terjadi gempa bumi lagi, tetap berusaha
          untuk tidak panik, ya Sobat! Panik dapat membuat pikiran kita tidak fokus dan malah membahayakan
          keselamatan
              </p>
              <p class="sec3-btn-p">
                <a href="q.html"><button class="sec3-btn"><i>Read More ...</i></button></a>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="sec3">
            <div class="right">
              <img class="sec3-img" src="materials/3.jpg" />
            </div>
            <div class="left">
              <p class="sec3-sub-tl sec3-tl">Perhatikan Hal-Hal Berikut Ini Setelah Gempa Terjadi</p>
              <p class="sec3-desc">Halo SobatDi! Gimana perasaan kalian ketika baru saja terkena musibah gempa bumi? Hm, Rasa syok akibat gempa yang baru saja
            terjadi tentu masih terasa, tetapi SobatDi harus tetap ingat untuk selalu ...
              </p>
              <p class="sec3-btn-p">
                <a href="r.html"><button class="sec3-btn"><i>Read More ...</i></button></a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators-atas" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators-atas" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators-atas" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators-atas" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators-atas" data-slide-to="2"></li>
      </ol>
    </div>
    </section>

    <div class="plentungan"></div>
    <section class="secgempa">
      <h2 style="color:#885e3b;font-weight: bold; font-family: myFirstFont">Gempa Bumi Terkini (Magnitude > 5,0 SR)</h2>
      <br>
      <div class="bagCard">
        <div class="card">
          <div class="card-img-top" src="..." alt="Card image cap" id="b1map"></div>
            <div class="card-body">
                Magnitude
                <h5 class="card-title"> <span> <?php echo $gempah->Magnitude; ?> </span> </h5>
                  <div class="cb" style="width:100%;">
                    <div class="cb1" style="width:50%;">
                      Kedalaman <br>
                      <h6> <span> <?php echo $gempah->Kedalaman; ?></span></h6>
                    </div>

                    <div class="cb2">
                      Lokasi <br>
                      <h6> <span> <?php echo $gempah->Lintang." - ".$gempah->Bujur; ?></span></h6>
                    </div>
                  </div>
                  <br>
                  Wilayah
                  <h6> <span> <?php echo $gempah->Wilayah; ?></span></h6>
                  <span> <?php echo str_replace("-"," ",$gempah->Tanggal).", ".$gempah->Jam; ?>  </span>
            </div>
      </div>

          <div class="card">
            <div class="card-img-top" src="..." alt="Card image cap" id="b2map"></div>
              <div class="card-body">
                  Magnitude
                  <h5 class="card-title"> <span> <?php echo $gempah2->Magnitude; ?> </span> </h5>
                    <div class="cb" style="width:100%;">
                      <div class="cb1" style="width:50%;">
                        Kedalaman <br>
                        <h6><span><?php echo $gempah2->Kedalaman; ?></span></h6>
                      </div>

                      <div class="cb2">
                        Lokasi <br>
                        <h6><span><?php echo $gempah2->Lintang." - ".$gempah2->Bujur; ?></span></h6>
                      </div>
                    </div>
                    <br>
                    Wilayah
                    <h6><span><?php echo $gempah2->Wilayah; ?></span></h6>
                    <span> <?php echo str_replace("-"," ",$gempah2->Tanggal).", ".$gempah2->Jam; ?>  </span>
              </div>
        </div>
            <div class="card">
              <div class="card-img-top" src="..." alt="Card image cap" id="b3map"></div>
                <div class="card-body">
                    Magnitude
                    <h5 class="card-title"> <span> <?php echo $gempah3->Magnitude; ?> </span> </h5>
                      <div class="cb" style="width:100%;">
                        <div class="cb1" style="width:50%;">
                          Kedalaman <br>
                          <h6><span><?php echo $gempah3->Kedalaman; ?></span></h6>
                        </div>

                        <div class="cb2">
                          Lokasi <br>
                          <h6><span><?php echo $gempah3->Lintang." - ".$gempah3->Bujur; ?></span></h6>
                        </div>
                      </div>
                      <br>
                      Wilayah
                      <h6><span><?php echo $gempah3->Wilayah; ?></span></h6>
                      <span> <?php echo str_replace("-"," ",$gempah3->Tanggal).", ".$gempah3->Jam; ?>  </span>
                </div>
          </div>
          </div>
    </section>

    <section class="secgempa2">
      <h2 style="color:#885e3b;font-weight: bold;" class="h2c">Gempa Bumi Terkini (Magnitude > 5,0 SR)</h2>
      <br>
         <div id="carouselExampleIndicators" class="carousel slide dua"   style="height: 500px;" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item active">
           <div class="card">
           <div class="card-img-top" src="..." alt="Card image cap" id="b1map2"></div>
             <div class="card-body">
                 Magnitude
                 <h5 class="card-title"> <span> <?php echo $gempah->Magnitude; ?> </span> </h5>
                   <div class="cb" style="width:100%;">
                     <div class="cb1" style="width:50%;">
                       Kedalaman <br>
                       <h6> <span> <?php echo $gempah->Kedalaman; ?></span></h6>
                     </div>

                     <div class="cb2">
                       Lokasi <br>
                       <h6> <span> <?php echo $gempah->Lintang." - ".$gempah->Bujur; ?></span></h6>
                     </div>
                   </div>
                   <br>
                   Wilayah
                   <h6> <span> <?php echo $gempah->Wilayah; ?></span></h6>
                   <span> <?php echo str_replace("-"," ",$gempah->Tanggal).", ".$gempah->Jam; ?>  </span>
             </div>
       </div>
         </div>
         <div class="carousel-item active"><div class="card">
           <div class="card-img-top" src="..." alt="Card image cap" id="b2map2"></div>
             <div class="card-body">
                 Magnitude
                 <h5 class="card-title"> <span> <?php echo $gempah2->Magnitude; ?> </span> </h5>
                   <div class="cb" style="width:100%;">
                     <div class="cb1" style="width:50%;">
                       Kedalaman <br>
                       <h6><span><?php echo $gempah2->Kedalaman; ?></span></h6>
                     </div>

                     <div class="cb2">
                       Lokasi <br>
                       <h6><span><?php echo $gempah2->Lintang." - ".$gempah2->Bujur; ?></span></h6>
                     </div>
                   </div>
                   <br>
                   Wilayah
                   <h6><span><?php echo $gempah2->Wilayah; ?></span></h6>
                   <span> <?php echo str_replace("-"," ",$gempah2->Tanggal).", ".$gempah2->Jam; ?>  </span>
             </div>
       </div>
         </div>
         <div class="carousel-item active"><div class="card">
               <div class="card-img-top" src="..." alt="Card image cap" id="b3map2"></div>
                 <div class="card-body">
                     Magnitude
                     <h5 class="card-title"> <span> <?php echo $gempah3->Magnitude; ?> </span> </h5>
                       <div class="cb" style="width:100%;">
                         <div class="cb1" style="width:50%;">
                           Kedalaman <br>
                           <h6><span><?php echo $gempah3->Kedalaman; ?></span></h6>
                         </div>

                         <div class="cb2">
                           Lokasi <br>
                           <h6><span><?php echo $gempah3->Lintang." - ".$gempah3->Bujur; ?></span></h6>
                         </div>
                       </div>
                       <br>
                       Wilayah
                       <h6><span><?php echo $gempah3->Wilayah; ?></span></h6>
                       <span> <?php echo str_replace("-"," ",$gempah3->Tanggal).", ".$gempah3->Jam; ?>  </span>
                 </div>
           </div>
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
</section>

    <div class="sec5">
      <div class="sec5-inner">
        <div class="right3 wow fadeInRight">
          <img src="materials/donate.png" />
        </div>
        <div class="left3 wow fadeInLeft">
          <h5><b>Yuk Kita Bantu Saudara Kita Yang Terkena Bencana!</b></h5>
          <h5 class="brdr3"></h5>
          <br />
          <p>Bantu mereka melalui <b>kitabisa.com</b></p>
          <a href="https://kitabisa.com/search?keyword=tsunami"><button class="button1"><b>Donasi</b></button></a>
        </div>
      </div>
    </div>



      <section class="sec6">
        <h2 style="color:#885e3b;font-weight: bold;" class="h2c">Profil Tim</h2>
          <div id="carouselExampleIndicators-bawah" class="carousel slide tiga" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators-bawah" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators-bawah" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators-bawah" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="intro-card">
                  <img class="intro-img-top" src="materials/fot1.png">
                  <div class="intro-body">
                    <p class="intro-text">
                      "Dengan adanya website ini, diharapkan mampu
                      memberikan pengetahuan dan informasi tentang
                      gempa bumi, yang nantinya dapat mengetahui apa yang harus dilakukan ketika terjadi gempa bumi."
                    </p>
                    <p>Kevin Irzam R - Pelajar</p>

                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="intro-card">
                  <img class="intro-img-top" src="materials/fot2.png">
                  <div class="intro-body">
                    <p class="intro-text">
                      "Saya harap website ini dapat membantu masyarakat untuk lebih mengenal gempa, lebih waspada, dan bisa menjadi salah satu wadah untuk
                      menolong saudara sebangsa yang terkena bencana."</p>
                    <p>Ayu Prihatini - Pelajar</p>

                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="intro-card">
                  <img class="intro-img-top" src="materials/fot3.png">
                  <div class="intro-body">
                    <p class="intro-text">"Some quick example text to build on the card title and make up the bulk of the card's content."</p>
                    <p>Hanavi Alvarel - Pelajar</p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators-bawah" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators-bawah" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </section>






    <div class="footer">
      <p>&copy; Copyright 2018 DiShare</p>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script> -->
</body>

</html>

<script>
  $(document).ready(function () {

    var geo = "<?php echo $gempah->point->coordinates; ?>";
        var geo2 = "<?php echo $gempah2->point->coordinates; ?>";
        var geo3 = "<?php echo $gempah3->point->coordinates; ?>";
        var convert = geo.split(",");
        var convert2 = geo2.split(",");
        var convert3 = geo3.split(",");
        var map = L.map('b1map').setView([convert[1],convert[0]],6);
        var map2 = L.map('b2map').setView([convert2[1],convert2[0]], 6);
        var map3 = L.map('b3map').setView([convert3[1],convert3[0]], 6);


        var map4 = L.map('b1map2').setView([convert[1],convert[0]],6);
        var map5 = L.map('b2map2').setView([convert2[1],convert2[0]], 6);
        var map6 = L.map('b3map2').setView([convert3[1],convert3[0]], 6);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
          maxZoom: 18,
          id: 'mapbox.streets',
          accessToken: 'pk.eyJ1Ijoia2V2aW5pcnphbSIsImEiOiJjanBuejhpOWwwNWcxNDJuc3VqdWdhZG5oIn0.cICGk-RTKHaLnCQETfVs_A'
        }).addTo(map);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1Ijoia2V2aW5pcnphbSIsImEiOiJjanBuejhpOWwwNWcxNDJuc3VqdWdhZG5oIn0.cICGk-RTKHaLnCQETfVs_A'
        }).addTo(map2);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1Ijoia2V2aW5pcnphbSIsImEiOiJjanBuejhpOWwwNWcxNDJuc3VqdWdhZG5oIn0.cICGk-RTKHaLnCQETfVs_A'
        }).addTo(map3);



        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
          maxZoom: 18,
          id: 'mapbox.streets',
          accessToken: 'pk.eyJ1Ijoia2V2aW5pcnphbSIsImEiOiJjanBuejhpOWwwNWcxNDJuc3VqdWdhZG5oIn0.cICGk-RTKHaLnCQETfVs_A'
        }).addTo(map4);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
          maxZoom: 18,
          id: 'mapbox.streets',
          accessToken: 'pk.eyJ1Ijoia2V2aW5pcnphbSIsImEiOiJjanBuejhpOWwwNWcxNDJuc3VqdWdhZG5oIn0.cICGk-RTKHaLnCQETfVs_A'
        }).addTo(map5);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
          maxZoom: 18,
          id: 'mapbox.streets',
          accessToken: 'pk.eyJ1Ijoia2V2aW5pcnphbSIsImEiOiJjanBuejhpOWwwNWcxNDJuc3VqdWdhZG5oIn0.cICGk-RTKHaLnCQETfVs_A'
        }).addTo(map6);

        var circle = L.circle([convert[1],convert[0]], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 40000
        }).addTo(map);

        var circle2 = L.circle([convert2[1],convert2[0]], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 40000
        }).addTo(map2);

        var circle3 = L.circle([convert3[1],convert3[0]], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 40000
        }).addTo(map3);


        var circle = L.circle([convert[1],convert[0]], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 40000
        }).addTo(map4);

        var circle2 = L.circle([convert2[1],convert2[0]], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 40000
        }).addTo(map5);

        var circle2 = L.circle([convert3[1],convert3[0]], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 40000
        }).addTo(map6);
      
    $('#b2map2').parent().parent().removeClass('active');
    $('#b3map2').parent().parent().removeClass('active');

    $('.aniscroll a, .scroll a, .link-tentang').click(function (e) {
      e.preventDefault();
      target = $(this).attr("href");
      $('html, body').animate({
        scrollTop: $(target).offset().top - 60
      }, 700);
      $('.navbar-collapse').removeClass('show')
    });

    $(document).on('scroll', function () {
      if (window.pageYOffset > 50) {
        $('.top-navbar').addClass('navbar-warna');
      }
      else {
        $('.top-navbar').removeClass('navbar-warna');
      }
    });

    $(document).on('click', '.navbar-toggler-icon', function () {
      if (!$('.navbar-collapse').hasClass('show')) {
        $('.navbar').addClass('navbar-warna');
      }
      else {
        $('.navbar').removeClass('navbar-warna');
      }
    });

    $('.navbar-collapse ul li a').click(function () {
      $('.navbar-toggle:visible').click();
    });

    $(document).on('click', '.navbar-collapse.in', function (e) {
      if ($(e.target).is('a') && ($(e.target).attr('class') != 'dropdown-toggle')) {
        $(this).collapse('hide');
      }
    });
  });
</script>
