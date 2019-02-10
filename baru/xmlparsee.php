
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
        integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
        crossorigin=""/>

        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
      integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
      crossorigin=""></script>
      <link rel="stylesheet" href="iniCSS.css">

      <?php
        $xml = simplexml_load_file('http://data.bmkg.go.id/gempaterkini.xml');
        $gempah = $xml->gempa[0];
        $gempah2 = $xml->gempa[1];
        $gempah3 = $xml->gempa[2];
      ?>

  </head>
  <body>
    <div id="backs">

    </div>
    <section class="secgempa">
      <h2 style="color:#885e3b;font-weight: bold;">Gempa Bumi Terkini (Magnitude > 5,0 SR)</h2>
      <br>
      <div class="bagCard">
        <div class="card" style="width: 22rem;">
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


          <div class="card" style="width: 22rem;">
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
            <div class="card" style="width: 22rem;">
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
     <br>

     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item active"><div class="card" style="width: 22rem;">
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
         </div>
         <div class="carousel-item"><div class="card" style="width: 22rem;">
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
         </div>
         <div class="carousel-item">
             <div class="card" style="width: 22rem;">
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

     <!-- This is Script for access Map of Earthquake !-->
          <script type="text/javascript">
                                var geo = "<?php echo $gempah->point->coordinates; ?>";
                                var geo2 = "<?php echo $gempah2->point->coordinates; ?>";
                                var geo3 = "<?php echo $gempah3->point->coordinates; ?>";
                                var convert = geo.split(",");
                                var convert2 = geo2.split(",");
                                var convert3 = geo3.split(",");
                                var map = L.map('b1map').setView([convert[1],convert[0]],6);
                                var map2 = L.map('b2map').setView([convert2[1],convert2[0]], 6);
                                var map3 = L.map('b3map').setView([convert3[1],convert3[0]], 6);

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

                            var circle2 = L.circle([convert3[1],convert3[0]], {
                            color: 'red',
                            fillColor: '#f03',
                            fillOpacity: 0.5,
                            radius: 40000
                          }).addTo(map3);
      </script>
  </body>
</html>
