<!DOCTYPE html>
<html>
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.twbsPagination.js"></script>
  <script src="../icheck.js"></script>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <link href="../skins/square/pink.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/css/ujian.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
   queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page 
   via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
   html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
   respond.min.js"></script>
   <![endif]-->
   <!-- 145138785 -->

   <script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =
        h + ":" + m + ":" + s ;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    </script>
<head>
  <title>Ujian</title>
</head>
<body onload="startTime()">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="min-height: 10px; background-color: #FFFFFF;">
  <div class="container">
      <p class="navbar-text navbar-right" style="margin-bottom: 2px; margin-top: 5px;"><button onclick="sync_jawaban();" style="color: #A77A94; margin-right: 20px; font-size: 20px;">sync</button><button onclick="save_jawaban_button();" style="color: #A77A94; margin-right: 20px; font-size: 20px;">save</button><button onclick="logout();" style="color: #A77A94; font-size: 20px;">log out</button></p>
      <p class="text-center" id="info" style="margin-bottom: 2px; margin-top: 2px; color: rgb(197, 194, 194); position: absolute; left: 47%; top: 5px;"><span id="clock" style="color: #A77A94; font-size: 20px;"></span></p>
       <ul id="pagination-demo" class="pagination-sm" style="margin-bottom: 2px; margin-top: 6px;"></ul>
  </div>
</nav>
<div class="container" style="max-width:900px">
  <br>
  <div class="text-center" style="margin-top:60px;">
    <h2>Kompetisi Kimia 2015</h2>
    <hr>
    <div class="row">
      <div class="col-md-3 col-md-offset-3">
        <table border="0" style="text-align: left;">
          <tr>
            <td>Waktu mulai</td>
            <td>: <?php //echo date('H:i', $waktu); //date('Y-m-d H:i:s') ?> WIB</td>
          </tr>
          <tr>
            <td>Waktu berakhir</td>
            <td>: <?php //echo date('H:i', $waktu_berakhir);  ?> WIB</td>
          </tr>
          <tr>
            <td>Masa Ujian</td>
            <td>: 100 Menit</td>
          </tr>
        </table>
      </div>
      <div class="col-md-3">
        <table border="0" style="text-align: left;">
          <tr>
            <td>Jumlah soal</td>
            <td>: 100 butir</td>
          </tr>
          <tr>
            <td>Soal terjawab</td>
            <td id="n_terjawab">: 0 butir</td>
          </tr>
          <tr>
            <td>Belum terjawab</td>
            <td id="n_kosong">: 100 butir</td>
          </tr>
        </table>
      </div>
    </div>
    <hr>
  </div>
  <br>
  <!-- page 1 -->
  <div id="page-1" class="div-soal">
  <h4> SOAL 1-40 LEVEL INTERMEDIATE (Benar +4, Kosong 0, Salah -1)</h4><br>
  <ol start="1">
    <li>
      <h4 id="soal-1"> Atom kobalt memiliki konfigurasi elektron [Ar](4s<sup>2</sup>) (3d<sup>7</sup>).Apabila terbentuk senyawa [Co(NH<sub>3</sub>)<sub>5</sub>Cl]SO<sub>4</sub>, maka orbital hibridisasi dari atom kobalt yang dapat terbentuk sesuai teori ikatan valensi valensi (NH<sub>3</sub> adalah ligan kuat sedangkan Cl adalah ligan lemah) adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-1-1" name="iCheck-1" data-soal="1" data-opsi="a">
          <label for="input-1-1"> sp<sup>3</sup>d<sup>2</sup></1abel>
        </li>
        <li>
          <input type="radio" id="input-1-2" name="iCheck-1" data-soal="1" data-opsi="b">
          <label for="input-1-2"> sp<sup>2</sup>d</label>
        </li>
        <li>
          <input type="radio" id="input-1-3" name="iCheck-1" data-soal="1" data-opsi="c">
          <label for="input-1-3"> d<sup>2</sup>sp<sup>3</sup>.</label>
        </li>
        <li>
          <input type="radio" id="input-1-4" name="iCheck-1" data-soal="1" data-opsi="d">
          <label for="input-1-4"> dsp<sup>2</sup></label>
        </li>
        <li>
          <input type="radio" id="input-1-5" name="iCheck-1" data-soal="1" data-opsi="e">
          <label for="input-1-5">sp<sup>3</sup></label>
        </li>
      </ul>
      <br><br>
    </li>
    <li>
      <h4 id="soal-2"> Dari kelima unsur dibawah ini, yang memiliki energi ionisasi paling kecil adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-2-1" name="iCheck-2" data-soal="2" data-opsi="a">
          <label for="input-2-1"> Ar</1abel>
        </li>
        <li>
          <input type="radio" id="input-2-2" name="iCheck-2" data-soal="2" data-opsi="b">
          <label for="input-2-2"> K </label>
        </li>
        <li>
          <input type="radio" id="input-2-3" name="iCheck-2" data-soal="2" data-opsi="c">
          <label for="input-2-3"> Ca </label>
        </li>
        <li>
          <input type="radio" id="input-2-4" name="iCheck-2" data-soal="2" data-opsi="d">
          <label for="input-2-4"> Sc </label>
        </li>
        <li>
          <input type="radio" id="input-2-5" name="iCheck-2" data-soal="2" data-opsi="e">
          <label for="input-2-5">Ti </label>
        </li>
      </ul>
      <br><br>
    </li>


    <li>
      <h4 id="soal-3"> Banyaknya ikatan kovalen tunggal dan koordinasi pada N<sub>2</sub>O<sub>5</sub> berdasarkan aturan oktet Lewis adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-3-1" name="iCheck-3" data-soal="3" data-opsi="a">
          <label for="input-3-1"> 2 Ikatan kovalen tunggal dan 1 ikatan kovalen koordinasi</1abel>
        </li>
        <li>
          <input type="radio" id="input-3-2" name="iCheck-3" data-soal="3" data-opsi="b">
          <label for="input-3-2"> 2 Ikatan kovalen tunggal dan 2  ikatan kovalen koordinasi </label>
        </li>
        <li>
          <input type="radio" id="input-3-3" name="iCheck-3" data-soal="3" data-opsi="c">
          <label for="input-3-3"> 2 Ikatan kovalen tunggal dan 4  ikatan kovalen koordinasi </label>
        </li>
        <li>
          <input type="radio" id="input-3-4" name="iCheck-3" data-soal="3" data-opsi="d">
          <label for="input-3-4"> 4 Ikatan kovalen tunggal dan 2 ikatan kovalen koordinasi </label>
        </li>
        <li>
          <input type="radio" id="input-3-5" name="iCheck-3" data-soal="3" data-opsi="e">
          <label for="input-3-5"> 4 Ikatan kovalen tunggal dan 1 ikatan kovalen koordinasi </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-4"> Geometri struktur yang tepat untuk molekul dengan jumlah pasangan elektron terikat pada atom pusat (tanpa pasangan elektron bebas) masing-masing 3 pasang, 4 pasang, dan 5 pasang elektron adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-4-1" name="iCheck-4" data-soal="4" data-opsi="a">
          <label for="input-4-1"> Linier, trigonal planar, tetrahedral</1abel>
        </li>
        <li>
          <input type="radio" id="input-4-2" name="iCheck-4" data-soal="4" data-opsi="b">
          <label for="input-4-2"> Trigonal planar, tetrahedral, segitiga bipiramid </label>
        </li>
        <li>
          <input type="radio" id="input-4-3" name="iCheck-4" data-soal="4" data-opsi="c">
          <label for="input-4-3"> Tetrahedral, segitiga bipiramid, oktahedra </label>
        </li>
        <li>
          <input type="radio" id="input-4-4" name="iCheck-4" data-soal="4" data-opsi="d">
          <label for="input-4-4"> Trigonal planar, segitiga bipiramid, oktahedral </label>
        </li>
        <li>
          <input type="radio" id="input-4-5" name="iCheck-4" data-soal="4" data-opsi="e">
          <label for="input-4-5"> Bukan salah satu jawaban diatas </label>
        </li>
      </ul>
      <br><br>
    </li>

  <li>
      <h4 id="soal-5"> Seng akan membentuk larutan tak berwarna didalam air. Salah satu alasan yang tepat melihat dari jumlah elektron seng sebagai penyebab hal tersebut adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-5-1" name="iCheck-5" data-soal="5" data-opsi="a">
          <label for="input-5-1"> Orbital d telah terisi elektron setengah penuh</1abel>
        </li>
        <li>
          <input type="radio" id="input-5-2" name="iCheck-5" data-soal="5" data-opsi="b">
          <label for="input-5-2"> Tidak adanya elektron pasa orbital s </label>
        </li>
        <li>
          <input type="radio" id="input-5-3" name="iCheck-5" data-soal="5" data-opsi="c">
          <label for="input-5-3"> Orbital s telah terisi elektron setengan penuh </label>
        </li>
        <li>
          <input type="radio" id="input-5-4" name="iCheck-5" data-soal="5" data-opsi="d">
          <label for="input-5-4"> Orbital d telah penuh terisi elektron </label>
        </li>
        <li>
          <input type="radio" id="input-5-5" name="iCheck-5" data-soal="5" data-opsi="e">
          <label for="input-5-5"> Tidak adanya elektron pada orbital </label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-6"> Manakah pasangan molekul berikut yang mempunyai bentuk geometri struktur yang sama?</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-6-1" name="iCheck-6" data-soal="6" data-opsi="a">
          <label for="input-6-1"> NF<sub>3</sub> dan ClF<sub>3</sub> </1abel>
        </li>
        <li>
          <input type="radio" id="input-6-2" name="iCheck-6" data-soal="6" data-opsi="b">
          <label for="input-6-2"> PH<sub>3</sub> dan IF<sub>3</sub> </label>
        </li>
        <li>
          <input type="radio" id="input-6-3" name="iCheck-6" data-soal="6" data-opsi="c">
          <label for="input-6-3"> H<sub>2</sub>O dan SnCl<sub>2</sub> </label>
        </li>
        <li>
          <input type="radio" id="input-6-4" name="iCheck-6" data-soal="6" data-opsi="d">
          <label for="input-6-4"> SF<sub>6</sub> dan SeF<sub>6</sub></label>
        </li>
        <li>
          <input type="radio" id="input-6-5" name="iCheck-6" data-soal="6" data-opsi="e">
          <label for="input-6-5"> H<sub>2</sub>O dan BeCl<sub>3</sub> </label>
        </li>
      </ul>
      <br><br>
    </li>



  <li>
      <h4 id="soal-7"> Tabel dibawah menunjukkan tingkat oksidasi yang mungkin dari lima unsur blok-d dalam tabel perodik unsur (unsur diwakili oleh huruf yang bukan simbolnya).</h4>
      <img src="../images/soal7.JPG">
      <h4> Manakah ion berikut yang paling mungkin keberadaannya ? </h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-7-1" name="iCheck-7" data-soal="7" data-opsi="a">
          <label for="input-7-1"> AO<sub>2</sub><sup>+</sup></1abel>
        </li>
        <li>
          <input type="radio" id="input-7-2" name="iCheck-7" data-soal="7" data-opsi="b">
          <label for="input-7-2"> BO<sub>3</sub><sup>-</sup></label>
        </li>
        <li>
          <input type="radio" id="input-7-3" name="iCheck-7" data-soal="7" data-opsi="c">
          <label for="input-7-3"> XO<sub>4</sub><sup>-</sup></label>
        </li>
        <li>
          <input type="radio" id="input-7-4" name="iCheck-7" data-soal="7" data-opsi="d">
          <label for="input-7-4"> YO<sub>2</sub><sup>2+</sup></label>
        </li>
        <li>
          <input type="radio" id="input-7-5" name="iCheck-7" data-soal="7" data-opsi="e">
          <label for="input-7-5"> ZO<sub>2</sub> <sup>+</sup> </label>
        </li>
      </ul>
      <br><br>
    </li>

  <li>
      <h4 id="soal-8"> Jenis-jenis interaksi intramolekular dan intermolekular suatu senyawa antara lain: ikatan peptida, interaksi Van der Waals, ikatan kovalen, interaksi ionik dalam air, ikatan ionik tanpa air, tarikan hidrofobik, dan ikatan hidrogen. Ikatan yang tergolong ikatan kuat adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-8-1" name="iCheck-8" data-soal="8" data-opsi="a">
          <label for="input-8-1"> Ikatan kovaen, ikatan ionik tanpa air</1abel>
        </li>
        <li>
          <input type="radio" id="input-8-2" name="iCheck-8" data-soal="8" data-opsi="b">
          <label for="input-8-2"> Ikatan hidrogen, ikatan ionik tanpa air, dan ikatan kovalen</label>
        </li>
        <li>
          <input type="radio" id="input-8-3" name="iCheck-8" data-soal="8" data-opsi="c">
          <label for="input-8-3"> Ikatan peptida, ikatan kovalen, dan interaksi van der Wals </label>
        </li>
        <li>
          <input type="radio" id="input-8-4" name="iCheck-8" data-soal="8" data-opsi="d">
          <label for="input-8-4"> Ikatan ionik tanpa air, ikatan kovalen, dan tarikan hidrofobik</label>
        </li>
        <li>
          <input type="radio" id="input-8-5" name="iCheck-8" data-soal="8" data-opsi="e">
          <label for="input-8-5"> Ikatan kovalen, ikatan peptida, dan ikatan ionik tanpa air </label>
        </li>
      </ul>
      <br><br>
    </li>



  <li>
      <h4 id="soal-9"> Berikut adalah beberapa ion kompleks :
        <br>(I) [Co(NH<sub>3</sub>)<sub>4</sub>]<sup>2+</sup></br>
        <br>(II) [CoF<sub>6</sub>]<sup>3-</sup></br>
        <br>(III) [Cr(CO)<sub>6</sub>]</br>
        <br>(IV) [FeF<sub>6</sub>]<sup>3-</sup></br>
        <br>Dari senyawa kompleks tersebut yang memiliki hantaran (konduktasi) ekivalen molar tertinggi sesuai muatan total ionnya adalah...</br>
      </h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-9-1" name="iCheck-9" data-soal="9" data-opsi="a">
          <label for="input-9-1"> [CoF<sub>6</sub>]<sup>3-</sup> dan [Cr(CO)<sub>6</sub>] </1abel>
        </li>
        <li>
          <input type="radio" id="input-9-2" name="iCheck-9" data-soal="9" data-opsi="b">
          <label for="input-9-2">  [CoF<sub>6</sub>]<sup>3-</sup> dan [FeF<sub>6</sub>]<sup>3-</sup> </label>
        </li>
        <li>
          <input type="radio" id="input-9-3" name="iCheck-9" data-soal="9" data-opsi="c">
          <label for="input-9-3"> [Co(NH<sub>3</sub>)<sub>4</sub>]<sup>2+</sup> dan [FeF<sub>6</sub>]<sup>3-</sup> </label>
        </li>
        <li>
          <input type="radio" id="input-9-4" name="iCheck-9" data-soal="9" data-opsi="d">
          <label for="input-9-4"> [Cr(CO)<sub>6</sub>] dan [Co(NH<sub>3</sub>)<sub>4</sub>]<sup>2+</sup>  </label>
        </li>
        <li>
          <input type="radio" id="input-9-5" name="iCheck-9" data-soal="9" data-opsi="e">
          <label for="input-9-5"> [Co(NH<sub>3</sub>)<sub>4</sub>]<sup>2+</sup> dan [CoF<sub>6</sub>]<sup>3-</sup> </label>
        </li>
      </ul>
      <br><br>
    </li>

  <li>
      <h4 id="soal-10"> Unsur <img src="../images/soal10_1.JPG"> mengalami peluruhan menjadi unsur<img src="../images/soal10_2.JPG">. Sinar yang diemisikan berisi .......</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-10-1" name="iCheck-10" data-soal="10" data-opsi="a">
          <label for="input-10-1"> 4 proton dan 2 neutron</1abel>
        </li>
        <li>
          <input type="radio" id="input-10-2" name="iCheck-10" data-soal="10" data-opsi="b">
          <label for="input-10-2"> 2 proton dan 2 neutron</label>
        </li>
        <li>
          <input type="radio" id="input-10-3" name="iCheck-10" data-soal="10" data-opsi="c">
          <label for="input-10-3"> 2 elektron saja </label>
        </li>
        <li>
          <input type="radio" id="input-10-4" name="iCheck-10" data-soal="10" data-opsi="d">
          <label for="input-10-4"> 4 elektron saja</label>
        </li>
        <li>
          <input type="radio" id="input-10-5" name="iCheck-10" data-soal="10" data-opsi="e">
          <label for="input-10-5"> 2 elektron dan 4 proton </label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-11"> Secara alamiah Boron mempunyai dua buah isotop yaitu B-10 dan B-11. Jika Ar Boron adalah 10,8 maka kelimpahan isotop B-11 adalah ......</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-11-1" name="iCheck-11" data-soal="11" data-opsi="a">
          <label for="input-11-1"> 10&#37;</1abel>
        </li>
        <li>
          <input type="radio" id="input-11-2" name="iCheck-11" data-soal="11" data-opsi="b">
          <label for="input-11-2"> 20&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-11-3" name="iCheck-11" data-soal="11" data-opsi="c">
          <label for="input-11-3"> 50&#37; </label>
        </li>
        <li>
          <input type="radio" id="input-11-4" name="iCheck-11" data-soal="11" data-opsi="d">
          <label for="input-11-4"> 75&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-11-5" name="iCheck-11" data-soal="11" data-opsi="e">
          <label for="input-11-5"> 80&#37;</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-12"> Unsur Rhenium mempunyai dua buah isotop yaitu <sup>185</sup>Re dan <sup>187</sup>Re dengan perbandingan jumlah atom 2 : 3. Maka nilai setengah dari massa atom relatif Re adalah ....</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-12-1" name="iCheck-12" data-soal="12" data-opsi="a">
          <label for="input-12-1"> 92,60</1abel>
        </li>
        <li>
          <input type="radio" id="input-12-2" name="iCheck-12" data-soal="12" data-opsi="b">
          <label for="input-12-2"> 92,75</label>
        </li>
        <li>
          <input type="radio" id="input-12-3" name="iCheck-12" data-soal="12" data-opsi="c">
          <label for="input-12-3"> 93,00 </label>
        </li>
        <li>
          <input type="radio" id="input-12-4" name="iCheck-12" data-soal="12" data-opsi="d">
          <label for="input-12-4"> 93,10 </label>
        </li>
        <li>
          <input type="radio" id="input-12-5" name="iCheck-12" data-soal="12" data-opsi="e">
          <label for="input-12-5"> 93,25 </label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-13"> Pada pembakaran sempurna suatu hidrokarbon diperlukan 16 g oksigen. Jika pada proses tersebut terbentuk 9 g air, maka rumus hidrokarbon tersebut adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-13-1" name="iCheck-13" data-soal="13" data-opsi="a">
          <label for="input-13-1"> CH<sub>4</sub></1abel>
        </li>
        <li>
          <input type="radio" id="input-13-2" name="iCheck-13" data-soal="13" data-opsi="b">
          <label for="input-13-2"> C<sub>2</sub>H<sub>6</sub></label>
        </li>
        <li>
          <input type="radio" id="input-13-3" name="iCheck-13" data-soal="13" data-opsi="c">
          <label for="input-13-3"> C<sub>3</sub>H<sub>8</sub> </label>
        </li>
        <li>
          <input type="radio" id="input-13-4" name="iCheck-13" data-soal="13" data-opsi="d">
          <label for="input-13-4"> CH<sub>2</sub> </label>
        </li>
        <li>
          <input type="radio" id="input-13-5" name="iCheck-13" data-soal="13" data-opsi="e">
          <label for="input-13-5"> C<sub>2</sub>H<sub>4</sub> </label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-14"> Sejumlah sampel yang mengandung Na<sub>2</sub>CO<sub>3</sub> dilarutkan dalam larutan kation bervalensi dua yang memiliki massa atom relatif 40 g/mol dan dapat menyebabkan terjadinya kesadahan. Garam yang terbentuk dianalisis dengan metode gravimetri dan ternyata massanya adalah 10 g. Jika dalam analisis selanjutnya diketahui bahwa kadar Na<sub>2</sub>CO<sub>3</sub> adalah 88,3&#37, maka massa sampel yang dilarutkan tersebut adalah ......</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-14-1" name="iCheck-14" data-soal="14" data-opsi="a">
          <label for="input-14-1"> 6 g</1abel>
        </li>
        <li>
          <input type="radio" id="input-14-2" name="iCheck-14" data-soal="14" data-opsi="b">
          <label for="input-14-2"> 12 g</label>
        </li>
        <li>
          <input type="radio" id="input-14-3" name="iCheck-14" data-soal="14" data-opsi="c">
          <label for="input-14-3"> 15 g </label>
        </li>
        <li>
          <input type="radio" id="input-14-4" name="iCheck-14" data-soal="14" data-opsi="d">
          <label for="input-14-4"> 18 g </label>
        </li>
        <li>
          <input type="radio" id="input-14-5" name="iCheck-14" data-soal="14" data-opsi="e">
          <label for="input-14-5"> 20 g</label>
        </li>
      </ul>
      <br><br>
    </li>

  <li>
      <h4 id="soal-15"> Sebanyak 10 L campuran metana dan propana memerlukan 32 L oksigen untuk pembakaran sempurna pada suhu dan tekanan tetap. Volume metana dan propana dalam campuran tersebut masing-masing adalah ......</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-15-1" name="iCheck-15" data-soal="15" data-opsi="a">
          <label for="input-15-1"> 4 L dan 6 L</1abel>
        </li>
        <li>
          <input type="radio" id="input-15-2" name="iCheck-15" data-soal="15" data-opsi="b">
          <label for="input-15-2"> 5 L dan 5 L</label>
        </li>
        <li>
          <input type="radio" id="input-15-3" name="iCheck-15" data-soal="15" data-opsi="c">
          <label for="input-15-3"> 6 L dan 4 L</label>
        </li>
        <li>
          <input type="radio" id="input-15-4" name="iCheck-15" data-soal="15" data-opsi="d">
          <label for="input-15-4"> 7 L dan 3 L</label>
        </li>
        <li>
          <input type="radio" id="input-15-5" name="iCheck-15" data-soal="15" data-opsi="e">
          <label for="input-15-5"> 8 L dan 2 L</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-16"> Jika 15 mL larutan AgNO<sub>3</sub> 0,1 M dicampurkan dengan 15 mL larutan FeCl<sub>2</sub> 0,1 M akan terjadi reaksi reduksi terhadap Ag<sup>+</sup> oleh ion Fe<sup>2+</sup>. Ditemukan bahwa dalam keadaan kesetimbangan konsentrasi ion Ag<sup>+</sup> (aq) adalah 0,01 M. Maka konsentrasi ion Fe<sup>3+</sup> (aq) dalam kesetimbangan itu sama dengan ....</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-16-1" name="iCheck-16" data-soal="16" data-opsi="a">
          <label for="input-16-1"> 0,01 M</1abel>
        </li>
        <li>
          <input type="radio" id="input-16-2" name="iCheck-16" data-soal="16" data-opsi="b">
          <label for="input-16-2"> 0,02 M</label>
        </li>
        <li>
          <input type="radio" id="input-16-3" name="iCheck-16" data-soal="16" data-opsi="c">
          <label for="input-16-3"> 0,03 M</label>
        </li>
        <li>
          <input type="radio" id="input-16-4" name="iCheck-16" data-soal="16" data-opsi="d">
          <label for="input-16-4"> 0,04 M</label>
        </li>
        <li>
          <input type="radio" id="input-16-5" name="iCheck-16" data-soal="16" data-opsi="e">
          <label for="input-16-5"> 0,05 M</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-17"> Suatu larutan Fe<sup>2+</sup> 0,1 M akan diendapkan sebagai sulfidanya dengan penambahan larutan jenuh H<sub>2</sub>S 0,1 M. Jika Ksp FeS = 1.10<sup>-19</sup>, maka pH minimal agar FeS mengendap adalah .....</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-17-1" name="iCheck-17" data-soal="17" data-opsi="a">
          <label for="input-17-1"> 2,5</1abel>
        </li>
        <li>
          <input type="radio" id="input-17-2" name="iCheck-17" data-soal="17" data-opsi="b">
          <label for="input-17-2"> 3</label>
        </li>
        <li>
          <input type="radio" id="input-17-3" name="iCheck-17" data-soal="17" data-opsi="c">
          <label for="input-17-3"> 3,5</label>
        </li>
        <li>
          <input type="radio" id="input-17-4" name="iCheck-17" data-soal="17" data-opsi="d">
          <label for="input-17-4"> 4</label>
        </li>
        <li>
          <input type="radio" id="input-17-5" name="iCheck-17" data-soal="17" data-opsi="e">
          <label for="input-17-5"> 4,5</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-18"> Dalam analisis kimia secara kualitatif, ketika suatu senyawa ditambahkan larutan HCl panas ternyata larut. Setelah itu dialirkan gas H<sub>2</sub>S terbentuk endapan berwarna hitam. Selanjutnya endapan dilarutkan dalam HNO<sub>3</sub> encer dan endapan larut kembali. Ditambahkan H<sub>2</sub>SO<sub>4</sub> dan terbentuk endapan putih. Kemungkinan besar kation yang terdapat dalam senyawa tersebut adalah ....</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-18-1" name="iCheck-18" data-soal="18" data-opsi="a">
          <label for="input-18-1"> Hg<sup>+</sup></1abel>
        </li>
        <li>
          <input type="radio" id="input-18-2" name="iCheck-18" data-soal="18" data-opsi="b">
          <label for="input-18-2"> Hg<sup>2+</sup></label>
        </li>
        <li>
          <input type="radio" id="input-18-3" name="iCheck-18" data-soal="18" data-opsi="c">
          <label for="input-18-3"> Pb<sup>2+</sup></label>
        </li>
        <li>
          <input type="radio" id="input-18-4" name="iCheck-18" data-soal="18" data-opsi="d">
          <label for="input-18-4"> Cu<sup>2+</sup></label>
        </li>
        <li>
          <input type="radio" id="input-18-5" name="iCheck-18" data-soal="18" data-opsi="e">
          <label for="input-18-5"> Bi<sup>3+</sup></label>
        </li>
      </ul>
      <br><br>
    </li>



  <li>
      <h4 id="soal-19"> Cara yang paling sederhana dalam analisis ion borat adalah dengan menambahkan beberapa tetes asam sulfat pekat dan metanol/etanol. Ketika dinyalakan sampel tersebut akan memberikan warna .....</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-19-1" name="iCheck-19" data-soal="19" data-opsi="a">
          <label for="input-19-1"> hijau</1abel>
        </li>
        <li>
          <input type="radio" id="input-19-2" name="iCheck-19" data-soal="19" data-opsi="b">
          <label for="input-19-2"> merah krimson</label>
        </li>
        <li>
          <input type="radio" id="input-19-3" name="iCheck-19" data-soal="19" data-opsi="c">
          <label for="input-19-3"> violet</label>
        </li>
        <li>
          <input type="radio" id="input-19-4" name="iCheck-19" data-soal="19" data-opsi="d">
          <label for="input-19-4"> jingga</label>
        </li>
        <li>
          <input type="radio" id="input-19-5" name="iCheck-19" data-soal="19" data-opsi="e">
          <label for="input-19-5"> merah karmin</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-20"> Diketahui massa jenis etanol = 0,8 g/mL. Pada 100 mL etanol ditambahkan 100 mL air. Pernyataan berikut yang benar, kecuali .....</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-20-1" name="iCheck-20" data-soal="20" data-opsi="a">
          <label for="input-20-1"> Rumus molekul etanol C<sub>2</sub>H<sub>6</sub>O</1abel>
        </li>
        <li>
          <input type="radio" id="input-20-2" name="iCheck-20" data-soal="20" data-opsi="b">
          <label for="input-20-2"> fraksi mol etanol 0,24</label>
        </li>
        <li>
          <input type="radio" id="input-20-3" name="iCheck-20" data-soal="20" data-opsi="c">
          <label for="input-20-3"> jika etanol dibakar secara sempurna akan dihasilkan gas CO2 dan uap air</label>
        </li>
        <li>
          <input type="radio" id="input-20-4" name="iCheck-20" data-soal="20" data-opsi="d">
          <label for="input-20-4"> etanol bersifat polar dan hidrofobik</label>
        </li>
        <li>
          <input type="radio" id="input-20-5" name="iCheck-20" data-soal="20" data-opsi="e">
          <label for="input-20-5"> etanol bersifat hidrofil</label>
        </li>
      </ul>
      <br><br>
    </li>
  </ol>
</div>
<!-- page 2 -->
<div id="page-2" class="div-soal">
  <h4> SOAL 1-40 LEVEL INTERMEDIATE (Benar +4, Kosong 0, Salah -1)</h4><br>
  <ol start="21">
    <li>
      <h4 id="soal-21"> Efavirenz, merupakan antiretroviral HIV yang telah diproduksi dalam negeri. Berikut diberikan struktur dari Efavirenz</h4>
      <img src="../images/soal21.JPG">
      <h4>Hibridisasi atom - atom yang telah diberi nomor (secara urut) adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-21-1" name="iCheck-21" data-soal="21" data-opsi="a">
          <label for="input-21-1"> sp<sup>2</sup>, sp, sp<sup>3</sup>, sp<sup>2</sup>, sp, sp<sup>3</sup></1abel>
        </li>
        <li>
          <input type="radio" id="input-21-2" name="iCheck-21" data-soal="21" data-opsi="b">
          <label for="input-21-2"> sp<sup>2</sup>, sp<sup>3</sup>, sp<sup>2</sup>, sp, sp<sup>3</sup>, sp<sup>3</sup></label>
        </li>
        <li>
          <input type="radio" id="input-21-3" name="iCheck-21" data-soal="21" data-opsi="c">
          <label for="input-21-3"> sp, sp<sup>3</sup>, sp<sup>2</sup>, sp, sp<sup>3</sup>, sp</label>
        </li>
        <li>
          <input type="radio" id="input-21-4" name="iCheck-21" data-soal="21" data-opsi="d">
          <label for="input-21-4"> sp<sup>3</sup>, sp, sp<sup>2</sup>, sp, sp<sup>3</sup>, sp<sup>3</sup></label>
        </li>
        <li>
          <input type="radio" id="input-21-5" name="iCheck-21" data-soal="21" data-opsi="e">
          <label for="input-21-5"> sp, sp<sup>3</sup>, sp<sup>2</sup>, sp, sp<sup>3</sup>, sp<sup>3</sup></label>
        </li>
      </ul>
      <br><br>
    </li>



  <li>
      <h4 id="soal-22"> Glutation merupakan antioksidan dari golongan tripeptida yang secara alami diproduksi oleh tubuh. Hidrolisis total dari senyawa ini akan menghasilkan asam amino dan hidrolisis parsial menghasilkan dipeptida. Berikut adalah struktur Glutation:</h4>
      <img src="../images/soal22.JPG">
      <h4>Yang bukan produk hidrolisis total dan parsial dari senyawa Glutation adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-22-1" name="iCheck-22" data-soal="22" data-opsi="a">
          <label for="input-22-1"> <img src="../images/soal22_a.JPG"></1abel>
        </li>
        <li>
          <input type="radio" id="input-22-2" name="iCheck-22" data-soal="22" data-opsi="b">
          <label for="input-22-2"> <img src="../images/soal22_b.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-22-3" name="iCheck-22" data-soal="22" data-opsi="c">
          <label for="input-22-3"><img src="../images/soal22_c.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-22-4" name="iCheck-22" data-soal="22" data-opsi="d">
          <label for="input-22-4"><img src="../images/soal22_d.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-22-5" name="iCheck-22" data-soal="22" data-opsi="e">
          <label for="input-22-5"> <img src="../images/soal22_e.JPG"></label>
        </li>
      </ul>
      <br><br>
    </li>



  <li>
      <h4 id="soal-23"> Berikut ini adalah struktur beberapa senyawa siklis.</h4>
      <img src="../images/soal23.JPG">
      <h4>Pernyataan dibawah yang benar adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-23-1" name="iCheck-23" data-soal="23" data-opsi="a">
          <label for="input-23-1"> Senyawa A dan C merupakan senyawa aromatik, B dan F merupakan senyawa antiaromatik, serta A dan E merupakan senyawa non-aromatik.</1abel>
        </li>
        <li>
          <input type="radio" id="input-23-2" name="iCheck-23" data-soal="23" data-opsi="b">
          <label for="input-23-2"> Senyawa C dan E merupakan senyawa aromatik, A dan F merupakan senyawa antiaromatik, serta B dan D merupakan senyawa non-aromatik.</label>
        </li>
        <li>
          <input type="radio" id="input-23-3" name="iCheck-23" data-soal="23" data-opsi="c">
          <label for="input-23-3"> Senyawa A dan C merupakan senyawa aromatik, B dan F merupakan senyawa antiaromatik, serta A dan E merupakan senyawa non-aromatik</label>
        </li>
        <li>
          <input type="radio" id="input-23-4" name="iCheck-23" data-soal="23" data-opsi="d">
          <label for="input-23-4"> Senyawa A dan D merupakan senyawa aromatik, B dan C merupakan senyawa antiaromatik, serta E dan F merupakan senyawa non-aromatik.</label>
        </li>
        <li>
          <input type="radio" id="input-23-5" name="iCheck-23" data-soal="23" data-opsi="e">
          <label for="input-23-5"> Senyawa A dan F merupakan senyawa aromatik, B dan C merupakan senyawa antiaromatik, serta D dan E merupakan senyawa non-aromatik.</label>
        </li>
      </ul>
      <br><br>
    </li>

  <li>
      <h4 id="soal-24"> Reaksi dibawah yang susah untuk terjadi (kurang spontan) adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-24-1" name="iCheck-24" data-soal="24" data-opsi="a">
          <label for="input-24-1"><img src="../images/soal24_a.JPG"></1abel>
        </li>
        <li>
          <input type="radio" id="input-24-2" name="iCheck-24" data-soal="24" data-opsi="b">
          <label for="input-24-2"> <img src="../images/soal24_b.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-24-3" name="iCheck-24" data-soal="24" data-opsi="c">
          <label for="input-24-3"> <img src="../images/soal24_c.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-24-4" name="iCheck-24" data-soal="24" data-opsi="d">
          <label for="input-24-4"> <img src="../images/soal24_d.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-24-5" name="iCheck-24" data-soal="24" data-opsi="e">
          <label for="input-24-5"> <img src="../images/soal24_e.JPG"></label>
        </li>
      </ul>
      <br><br>
    </li>

  <li>
      <h4 id="soal-25"> Senyawa dibawah ini yang dapat menghijaukan reagen Brodwell-Wellman (larutan K<sub>2</sub>Cr<sub>2</sub>O<sub>7</sub> dalam suasana asam) adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-25-1" name="iCheck-25" data-soal="25" data-opsi="a">
          <label for="input-25-1"> Metanol, 2-metil-2-propanol, dan 1-butanol.</1abel>
        </li>
        <li>
          <input type="radio" id="input-25-2" name="iCheck-25" data-soal="25" data-opsi="b">
          <label for="input-25-2"> Sikloheksanon, Dietil eter dan Etanal.</label>
        </li>
        <li>
          <input type="radio" id="input-25-3" name="iCheck-25" data-soal="25" data-opsi="c">
          <label for="input-25-3"> Asam asetat, 2-propanon, dan asam propanoat.</label>
        </li>
        <li>
          <input type="radio" id="input-25-4" name="iCheck-25" data-soal="25" data-opsi="d">
          <label for="input-25-4"> Glukosa, Etanol dan Formaldehida.</label>
        </li>
        <li>
          <input type="radio" id="input-25-5" name="iCheck-25" data-soal="25" data-opsi="e">
          <label for="input-25-5"> n-heksana, kloroform, dan siklopentanol.</label>
        </li>
      </ul>
      <br><br>
    </li>

  <li>
      <h4 id="soal-26"> MTC-4 adalah salah satu senyawa turunan Calkon yang memiliki aktivitas biologis menghambat interaksi Feredoksin-NADP<sup>+</sup> oksidoreduktase pada reaksi respirasi Plasmodium falciparum, mikroorganisme penyebab penyakit malaria.</h4>
      <img src="../images/soal26.JPG">
      <h4> Gugus fungsi yang ada pada molekul MTC-4 tersebut adalah.... </h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-26-1" name="iCheck-26" data-soal="26" data-opsi="a">
          <label for="input-26-1"> Alkohol, Eter, Amida dan Alkena.</1abel>
        </li>
        <li>
          <input type="radio" id="input-26-2" name="iCheck-26" data-soal="26" data-opsi="b">
          <label for="input-26-2"> Eter, Amina, Alkena, dan Alkohol.</label>
        </li>
        <li>
          <input type="radio" id="input-26-3" name="iCheck-26" data-soal="26" data-opsi="c">
          <label for="input-26-3"> Amina, Keton, Eter dan Aldehida.</label>
        </li>
        <li>
          <input type="radio" id="input-26-4" name="iCheck-26" data-soal="26" data-opsi="d">
          <label for="input-26-4"> Alkena, Keton, Eter dan Amina.</label>
        </li>
        <li>
          <input type="radio" id="input-26-5" name="iCheck-26" data-soal="26" data-opsi="e">
          <label for="input-26-5"> Keton, Alkena, Ester dan Amina.</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-27"> Sintesis eter Williamson merupakan salah satu reaksi S<sub>N</sub>2 antara alkil halida dan garam alkoksida yang menghasilkan senyawa eter. Reaksi sintesis eter Williamson dibawah yang dapat menghasilkan persentase produk (rendemen) tertinggi adalah...</h4>
      <img src="../images/soal26.JPG">
      <h4> Gugus fungsi yang ada pada molekul MTC-4 tersebut adalah.... </h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-27-1" name="iCheck-27" data-soal="27" data-opsi="a">
          <label for="input-27-1"> (CH<sub>3</sub>)<sub>3</sub>CONa + CH<sub>3</sub>I &#8594; (CH<sub>3</sub>)<sub>3</sub>COCH<sub>3</sub> + NaI</1abel>
        </li>
        <li>
          <input type="radio" id="input-27-2" name="iCheck-27" data-soal="27" data-opsi="b">
          <label for="input-27-2"> (CH<sub>3</sub>)<sub>2</sub>CHONa + (CH<sub>3</sub>)<sub>2</sub>CHBr &#8594; ((CH<sub>3</sub>)<sub>2</sub>CH)<sub>2</sub>O + NaBr</label>
        </li>
        <li>
          <input type="radio" id="input-27-3" name="iCheck-27" data-soal="27" data-opsi="c">
          <label for="input-27-3"> CH<sub>3</sub>ONa + (CH<sub>3</sub>)<sub>3</sub>CBr &#8594; (CH<sub>3</sub>)<sub>3</sub>COCH<sub>3</sub> + NaBr</label>
        </li>
        <li>
          <input type="radio" id="input-27-4" name="iCheck-27" data-soal="27" data-opsi="d">
          <label for="input-27-4"> PhCl + NaOC<sub>2</sub>H<sub>5</sub> &#8594; PhOC<sub>2</sub>H<sub>5</sub></label>
        </li>
        <li>
          <input type="radio" id="input-27-5" name="iCheck-27" data-soal="27" data-opsi="e">
          <label for="input-27-5"> (CH<sub>3</sub>)<sub>3</sub>CONa + (CH<sub>3</sub>)<sub>3</sub>CBr &#8594; NaBr + ((CH<sub>3</sub>)<sub>3</sub>C)<sub>2</sub>O</label>
        </li>
      </ul>
      <br><br>
    </li>

  <li>
      <h4 id="soal-28"> Efedrin memiliki aktivitas biologis sebagai antitusif (pereda batuk). Berikut ini struktur dari Efedrin:</h4>
      <img src="../images/soal28.JPG">
      <h4> Berikut ini pernyataan yang benar mengenai efedrin adalah... </h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-28-1" name="iCheck-28" data-soal="28" data-opsi="a">
          <label for="input-28-1"> Dalam suasana asam, efedrin memiliki kelarutan yang sangat rendah dalam air.</1abel>
        </li>
        <li>
          <input type="radio" id="input-28-2" name="iCheck-28" data-soal="28" data-opsi="b">
          <label for="input-28-2"> Dalam suasana basa, efedrin mengemban muatan positif.</label>
        </li>
        <li>
          <input type="radio" id="input-28-3" name="iCheck-28" data-soal="28" data-opsi="c">
          <label for="input-28-3"> Efedrin sangat larut dalam kloroform setelah diasamkan.</label>
        </li>
        <li>
          <input type="radio" id="input-28-4" name="iCheck-28" data-soal="28" data-opsi="d">
          <label for="input-28-4"> Efedrin memiliki kelarutan yang sangat tinggi dalam air pada suasana basa.</label>
        </li>
        <li>
          <input type="radio" id="input-28-5" name="iCheck-28" data-soal="28" data-opsi="e">
          <label for="input-28-5"> Efedrin mengemban muatan positif dalam suasana asam.</label>
        </li>
      </ul>
      <br><br>
    </li>

      <li>
      <h4 id="soal-29"> Suatu botol tak berlabel berisi suatu alkohol dengan jumlah atom karbon sebanyak 5. Beberapa mililiter alkohol tersebut dipipet, dimasukkan kedalam tabung reaksi dan direaksikan dengan pereaksi Lucas A (HCl), tak lama kemudian campuran tersebut terpisah menjadi 2 lapisan. Maka dapat dipastikan bahwa alkohol tersebut adalah...</h4>
      
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-29-1" name="iCheck-29" data-soal="29" data-opsi="a">
          <label for="input-29-1"> 1-Pentanol </1abel>
        </li>
        <li>
          <input type="radio" id="input-29-2" name="iCheck-29" data-soal="29" data-opsi="b">
          <label for="input-29-2">2,2-dimetil-1-propanol</label>
        </li>
        <li>
          <input type="radio" id="input-29-3" name="iCheck-29" data-soal="29" data-opsi="c">
          <label for="input-29-3"> 2-metil-1-butanol</label>
        </li>
        <li>
          <input type="radio" id="input-29-4" name="iCheck-29" data-soal="29" data-opsi="d">
          <label for="input-29-4"> 2-metil-2-butanol</label>
        </li>
        <li>
          <input type="radio" id="input-29-5" name="iCheck-29" data-soal="29" data-opsi="e">
          <label for="input-29-5"> 3-metil-2-butanol</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-30"> Senyawa vanillin dapat disintesis dengan satu tahapan reaksi saja dari o-metoksifenol dengan reaksi formilasi Reimer-Tiemann. Berikut ini reaksinya.</h4>
      <img src="../images/soal30.JPG">
      <h4> Berikut ini adalah pernyataan yang salah mengenai reaksi tersebut. </h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-30-1" name="iCheck-30" data-soal="30" data-opsi="a">
          <label for="input-30-1">Diklorokarbena merupakan intermediet reaktif dalam reaksi Reimer-Tiemann.</1abel>
        </li>
        <li>
          <input type="radio" id="input-30-2" name="iCheck-30" data-soal="30" data-opsi="b">
          <label for="input-30-2"> KOH merupakan basa yang mengambil proton pada kloroform.</label>
        </li>
        <li>
          <input type="radio" id="input-30-3" name="iCheck-30" data-soal="30" data-opsi="c">
          <label for="input-30-3"> Terjadi eliminasi &#945; pada kloroform sehingga terbentuk diklorokarbena.</label>
        </li>
        <li>
          <input type="radio" id="input-30-4" name="iCheck-30" data-soal="30" data-opsi="d">
          <label for="input-30-4"> Reaksi tersebut merupakan substitusi nukleofilik aromatik.</label>
        </li>
        <li>
          <input type="radio" id="input-30-5" name="iCheck-30" data-soal="30" data-opsi="e">
          <label for="input-30-5"> Reaksi juga dapat terjadi apabila KOH digantikan dengan Kalium ters-butoksida (KOC(CH<sub>3</sub>)<sub>3</sub>).</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-31"> Diketahui suatu reaksi kesetimbangan sebagai berikut</h4>
      <img src="../images/soal31_1.JPG">
      <h4>Reaksi diatas memiliki data termokimia sebagai berikut: </h4>
      <img src="../images/soal31_2.JPG">
      <h4>Reaksi diatas memiliki nilai perubahan entropi (&#916;S) sebesar 412,5 J mol<sup>-1</sup> K<sup>-1</sup> pada suhu 113<sup>0</sup>C. Pernyataan dibawah berikut yang paling tepat adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-31-1" name="iCheck-31" data-soal="31" data-opsi="a">
          <label for="input-31-1"> Reaksi diatas tidak spontan untuk terjadi dilihat dari sudut pandang termodinamika.</1abel>
        </li>
        <li>
          <input type="radio" id="input-31-2" name="iCheck-31" data-soal="31" data-opsi="b">
          <label for="input-31-2"> Reaksi diatas sangat mudah untuk terjadi </label>
        </li>
        <li>
          <input type="radio" id="input-31-3" name="iCheck-31" data-soal="31" data-opsi="c">
          <label for="input-31-3"> Pembentukan reaktan lebih dominan dalam berjalannya reaksi.</label>
        </li>
        <li>
          <input type="radio" id="input-31-4" name="iCheck-31" data-soal="31" data-opsi="d">
          <label for="input-31-4"> Tetapan kesetimbangan dari reaksi tersebut dapat diprediksi dengan tepat.</label>
        </li>
        <li>
          <input type="radio" id="input-31-5" name="iCheck-31" data-soal="31" data-opsi="e">
          <label for="input-31-5"> Jika suhu ditingkatkan, frekuensi tumbukan antar partikel menjadi berkurang.</label>
        </li>
      </ul>
      <br><br>
    </li>


  <li>
      <h4 id="soal-32"> Telah terjadi reaksi sikloadisi [2+2] dari etena dan prop-2-enal sebagai berikut:</h4>
      <img src="../images/soal32_1.JPG">
      <h4>Reaksi tersebut dilakukan dalam kondisi yang telah dikuantisasi sedemikian rupa sehingga didapatkan data percobaan sebagai berikut: </h4>
      <img src="../images/soal32_2.JPG">
      <h4>Berdasarkan data yang telah disajikan, nilai tetapan laju reaksi sikloadisi tersebut adalah (asumsi reaksi berlangsung pada orde satu)...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-32-1" name="iCheck-32" data-soal="32" data-opsi="a">
          <label for="input-32-1"> 0,9690 s<sup>-1</sup> </1abel>
        </li>
        <li>
          <input type="radio" id="input-32-2" name="iCheck-32" data-soal="32" data-opsi="b">
          <label for="input-32-2"> 0,0054 s<sup>-1</sup> </label>
        </li>
        <li>
          <input type="radio" id="input-32-3" name="iCheck-32" data-soal="32" data-opsi="c">
          <label for="input-32-3"> 212,80 s<sup>-1</sup> </label>
        </li>
        <li>
          <input type="radio" id="input-32-4" name="iCheck-32" data-soal="32" data-opsi="d">
          <label for="input-32-4"> 1,1500 s<sup>-1</sup></label>
        </li>
        <li>
          <input type="radio" id="input-32-5" name="iCheck-32" data-soal="32" data-opsi="e">
          <label for="input-32-5"> 0,0102 s<sup>-1</sup> </label>
        </li>
      </ul>
      <br><br>
    </li>


    <li>
      <h4 id="soal-33">Diketahui suatu reaksi pembentukan zat D sebagai berikut:</h4>
      <img src="../images/soal33.jpg">
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-33-1" name="iCheck-33" data-soal="33" data-opsi="a">
          <label for="input-33-1"> Reaksi diatas tidak berjalan sesuai dengan prinsip Le Chatelier </label>
        </li>
        <li>
          <input type="radio" id="input-33-2" name="iCheck-33" data-soal="33" data-opsi="b">
          <label for="input-33-2"> Peningkatan volume sistem tidak akan mempengaruhi arah kesetimbangan. </label>
        </li>
        <li>
          <input type="radio" id="input-33-3" name="iCheck-33" data-soal="33" data-opsi="c">
          <label for="input-33-3"> Perubahan nilai entropi dari reaksi diatas akan meningkat. </label>
        </li>
        <li>
          <input type="radio" id="input-33-4" name="iCheck-33" data-soal="33" data-opsi="d">
          <label for="input-33-4"> Perubahan Energi Gibbs dari reaksi diatas bernilai positif. </label>
        </li>
        <li>
          <input type="radio" id="input-33-5" name="iCheck-33" data-soal="33" data-opsi="e">
          <label for="input-33-5"> Pembentukan produk terjadi lebih spontan. </label>
        </li>
      </ul>
      <br><br>
    </li>
  
    <li>
        <h4 id="soal-34">Seorang peneliti di tahun 2053 bereksperimen di permukaan Venus untuk mengetahui massa uap asam sulfat (H<sub>2</sub>SO<sub>4</sub>) pada wadah yang diisolir dengan volume sebesar 0,25 m<sup>3</sup>. Temperatur wadah tersebut telah diatur secara konstan pada 23<sup>o</sup> C dan diketahui tekanan parsial gas H<sub>2</sub>SO<sub>4</sub> pada wadah yang mengandung udara bebas Venus tersebut adalah sebesar 53% dari tekanan total 1,2 atm. Berdasarkan data yang ada, dapat disimpulkan bahwa massa uap sulfat yang ada sebesar...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-34-1" name="iCheck-34" data-soal="34" data-opsi="a">
          <label for="input-34-1"> 0,642 kg </label>
        </li>
        <li>
          <input type="radio" id="input-34-2" name="iCheck-34" data-soal="34" data-opsi="b">
          <label for="input-34-2"> 1,211 kg </label>
        </li>
        <li>
          <input type="radio" id="input-34-3" name="iCheck-34" data-soal="34" data-opsi="c">
          <label for="input-34-3"> 1,284 kg</label>
        </li>
        <li>
          <input type="radio" id="input-34-4" name="iCheck-34" data-soal="34" data-opsi="d">
          <label for="input-34-4"> 1,926 kg</label>
        </li>
        <li>
          <input type="radio" id="input-34-5" name="iCheck-34" data-soal="34" data-opsi="e">
          <label for="input-34-5"> 2,133 kg</label>
        </li>
      </ul>
      <br><br>
    </li>
    
    <li>
      <h4 id="soal-35">Pada suhu 315 K, tekanan uap gas dari zat B yang dilarutkan dalam cairan A menghasilkan data berikut:</h4>
      
<table border="1" style="width:100%">
  <tr>
    <td>X<sub>B</sub></td>
    <td>0,020</td> 
    <td>0,040</td>
    <td>0,060</td>
  </tr>
  <tr>
    <td>P<sub>B</sub>(KPa)</td>
    <td>82,00</td> 
    <td>122,5</td>
    <td>166,1</td>
  </tr>
</table>
<h4 >Pernyataan yang benar mengenai data diatas adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-35-1" name="iCheck-35" data-soal="35" data-opsi="a">
          <label for="input-35-1"> Nilai tetapan Henry gas B adalah sama untuk setiap kondisi diatas. </label>
        </li>
        <li>
          <input type="radio" id="input-35-2" name="iCheck-35" data-soal="35" data-opsi="b">
          <label for="input-35-2"> Fraksi mol gas B tidak mempengaruhi besar tetapan Henry. </label>
        </li>
        <li>
          <input type="radio" id="input-35-3" name="iCheck-35" data-soal="35" data-opsi="c">
          <label for="input-35-3"> Gas B tidak mematuhi hukum Henry</label>
        </li>
        <li>
          <input type="radio" id="input-35-4" name="iCheck-35" data-soal="35" data-opsi="d">
          <label for="input-35-4">Perubahan temparatur tidak mempengaruhi besar tetapan Henry</label>
        </li>
        <li>
          <input type="radio" id="input-35-5" name="iCheck-35" data-soal="35" data-opsi="e">
          <label for="input-35-5">Semakin tinggi tetapan Henry gas B semakin tinggi konsentrasi B yang terlarut dalam air.</label>
        </li>
      </ul>
      <br><br>
    </li>

<li>
    <h4 id="soal-36">Faktor Van't Hoff (i) dari larutan glukosa 0,1 m adalah (Kb = 0,52 <sup>o</sup>C m<sup>-1</sup>)...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-36-1" name="iCheck-36" data-soal="36" data-opsi="a">
          <label for="input-36-1"> 0,00 </label>
        </li>
        <li>
          <input type="radio" id="input-36-2" name="iCheck-36" data-soal="36" data-opsi="b">
          <label for="input-36-2"> 1,00 </label>
        </li>
        <li>
          <input type="radio" id="input-36-3" name="iCheck-36" data-soal="36" data-opsi="c">
          <label for="input-36-3"> 2,00</label>
        </li>
        <li>
          <input type="radio" id="input-36-4" name="iCheck-36" data-soal="36" data-opsi="d">
          <label for="input-36-4"> 0,52 </label>
        </li>
        <li>
          <input type="radio" id="input-36-5" name="iCheck-36" data-soal="36" data-opsi="e">
          <label for="input-36-5"> 0,98</label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-37">Nilai pH dari larutan H<sub>2</sub>SO<sub>4</sub> dengan konsentrasi sebesar 8,1 x 10<sup>-10</sup> M  pada suhu 25<sup>o</sup> C adalah ... (Asumsikan koefisien aktivitas larutan = 1 dan H<sub>2</sub>SO<sub>4</sub> terionisasi secara sempurna)</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-37-1" name="iCheck-37" data-soal="37" data-opsi="a">
          <label for="input-37-1"> 4,908 </label>
        </li>
        <li>
          <input type="radio" id="input-37-2" name="iCheck-37" data-soal="37" data-opsi="b">
          <label for="input-37-2"> 8,790 </label>
        </li>
        <li>
          <input type="radio" id="input-37-3" name="iCheck-37" data-soal="37" data-opsi="c">
          <label for="input-37-3"> 9,092 </label>
        </li>
        <li>
          <input type="radio" id="input-37-4" name="iCheck-37" data-soal="37" data-opsi="d">
          <label for="input-37-4">6,996 </label>
        </li>
        <li>
          <input type="radio" id="input-37-5" name="iCheck-37" data-soal="37" data-opsi="e">
          <label for="input-37-5"> 9,816 </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-38">Diketahui delapan data energi ionisasi (dalam kJ mol<sup>-1</sup>) dari suatu atom X yang terletak pada golongan utama tabel periodik sebagai berikut:</h4>
        <table border="0" style="width:100%">
  <tr>
    <td>200</td>
    <td>400</td> 
    <td>550</td>
    <td>621</td>
    <td>2123</td>
    <td>2500</td>
    <td>2712</td>
    <td>3114</td>
  </tr></table>
        <h4>Jika X berikatan secara elektrovalen dengan Y<sup>2-</sup> maka rumus empiris senyawa yang terbentuk adalah ...</h4>
     
        <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-38-1" name="iCheck-38" data-soal="38" data-opsi="a">
          <label for="input-38-1"> XY </label>
        </li>
        <li>
          <input type="radio" id="input-38-2" name="iCheck-38" data-soal="38" data-opsi="b">
          <label for="input-38-2"> X<sub>2</sub>Y </label>
        </li>
        <li>
          <input type="radio" id="input-38-3" name="iCheck-38" data-soal="38" data-opsi="c">
          <label for="input-38-3">  X<sub>2</sub>Y<sub>3</sub></label>
        </li>
        <li>
          <input type="radio" id="input-38-4" name="iCheck-38" data-soal="38" data-opsi="d">
          <label for="input-38-4">XY<sub>2</sub></label>
        </li>
        <li>
          <input type="radio" id="input-38-5" name="iCheck-38" data-soal="38" data-opsi="e">
          <label for="input-38-5"> XY<sub>4</sub></label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-39">Dalam suatu tabung dengan volume 1,5 L yang murni mengandung 32,12 gram gas Etena bersuhu 30<sup>o</sup>C  akan memiliki tekanan gas nyata sebesar (konstanta Van der Waals a = 4,552 atm dm<sup>6</sup> mol<sup>-2</sup> dan b = 5,82 x 10<sup> -2</sup> dm<sup>3</sup> mol<sup>-1</sup>)...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-39-1" name="iCheck-39" data-soal="39" data-opsi="a">
          <label for="input-39-1"> 8,000 atm </label>
        </li>
        <li>
          <input type="radio" id="input-39-2" name="iCheck-39" data-soal="39" data-opsi="b">
          <label for="input-39-2"> 8,522 atm </label>
        </li>
        <li>
          <input type="radio" id="input-39-3" name="iCheck-39" data-soal="39" data-opsi="c">
          <label for="input-39-3"> 8,612 atm </label>
        </li>
        <li>
          <input type="radio" id="input-39-4" name="iCheck-39" data-soal="39" data-opsi="d">
          <label for="input-39-4"> 14,65 atm </label>
        </li>
        <li>
          <input type="radio" id="input-39-5" name="iCheck-39" data-soal="39" data-opsi="e">
          <label for="input-39-5"> 17,22 atm </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-40">Dalam sebuah percobaan penciptaan mutan tikus, seorang ilmuwan biokimia nyentrik mencoba untuk mengisi sebuah wadah berukuran 5,0 L yang dihuni oleh Mus musculus berumur 2,1 bulan dengan beberapa gas berikut: Gas A dengan Mr 127,32; Gas B dengan Mr 212,33; Gas C dengan Mr 57,23; dan Gas D dengan Mr 93,11. 10 Menit setelah percobaan, tiba - tiba ilmuwan tersebut jatuh pingsan karena terjadi kebocoran wadah. Konsentrasi gas yang paling banyak terhirup oleh ilmuwan tersebut dalam waktu 10 menit adalah ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-40-1" name="iCheck-40" data-soal="40" data-opsi="a">
          <label for="input-40-1"> Gas A </label>
        </li>
        <li>
          <input type="radio" id="input-40-2" name="iCheck-40" data-soal="40" data-opsi="b">
          <label for="input-40-2"> Gas B </label>
        </li>
        <li>
          <input type="radio" id="input-40-3" name="iCheck-40" data-soal="40" data-opsi="c">
          <label for="input-40-3"> Gas C </label>
        </li>
        <li>
          <input type="radio" id="input-40-4" name="iCheck-40" data-soal="40" data-opsi="d">
          <label for="input-40-4"> Gas D </label>
        </li>
        <li>
          <input type="radio" id="input-40-5" name="iCheck-40" data-soal="40" data-opsi="e">
          <label for="input-40-5"> Semua gas terhirup dalam kondisi yang sama besar </label>
        </li>
      </ul>
      <br><br>
    </li>
  </ol>
</div>
<!-- page 3 -->
<div id="page-3" class="div-soal">
  <h4> SOAL 41-80 LEVEL ADVANCE (Benar +5, Kosong -1, Salah -2)</h4><br>
  <ol start="41">
    <li>
      <h4 id="soal-41">Perak oksida terurai secara sempurna pada suhu tinggi menghasilkan logam perak dan gas oksigen. 150 g perak oksida tak murni menghasilkan 6,4 g gas oksigen tersebut. Jika perak oksida adalah satu-satunya sumber oksigen pada reaksi tersebut maka kadar perak oksida adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-41-1" name="iCheck-41" data-soal="41" data-opsi="a">
          <label for="input-41-1"> 43,5 % </label>
        </li>
        <li>
          <input type="radio" id="input-41-2" name="iCheck-41" data-soal="41" data-opsi="b">
          <label for="input-41-2"> 50,0 % </label>
        </li>
        <li>
          <input type="radio" id="input-41-3" name="iCheck-41" data-soal="41" data-opsi="c">
          <label for="input-41-3"> 61,9 % </label>
        </li>
        <li>
          <input type="radio" id="input-41-4" name="iCheck-41" data-soal="41" data-opsi="d">
          <label for="input-41-4"> 30,9 % </label>
        </li>
        <li>
          <input type="radio" id="input-41-5" name="iCheck-41" data-soal="41" data-opsi="e">
          <label for="input-41-5"> 87,0 % </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-42">The relative molecule mass of Hemoglobin is 68.000 g/mol. Hemoglobin is consisted of 0,33% w/w Iron, the total Fe atoms which is contained in a hemoglobin molecule is ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-42-1" name="iCheck-42" data-soal="42" data-opsi="a">
          <label for="input-42-1"> 4 </label>
        </li>
        <li>
          <input type="radio" id="input-42-2" name="iCheck-42" data-soal="42" data-opsi="b">
          <label for="input-42-2"> 5 </label>
        </li>
        <li>
          <input type="radio" id="input-42-3" name="iCheck-42" data-soal="42" data-opsi="c">
          <label for="input-42-3"> 6 </label>
        </li>
        <li>
          <input type="radio" id="input-42-4" name="iCheck-42" data-soal="42" data-opsi="d">
          <label for="input-42-4"> 7 </label>
        </li>
        <li>
          <input type="radio" id="input-42-5" name="iCheck-42" data-soal="42" data-opsi="e">
          <label for="input-42-5"> 8 </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-43">Massa jenis asam asetat 30 % (b/b) adalah 1,04 g/mL. Untuk memperoleh 200 mL asam asetat 0,12 M melalui pengenceran  diperlukan asam asetat tersebut sebanyak...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-43-1" name="iCheck-43" data-soal="43" data-opsi="a">
          <label for="input-43-1"> 4,50 mL </label>
        </li>
        <li>
          <input type="radio" id="input-43-2" name="iCheck-43" data-soal="43" data-opsi="b">
          <label for="input-43-2"> 4,62 mL </label>
        </li>
        <li>
          <input type="radio" id="input-43-3" name="iCheck-43" data-soal="43" data-opsi="c">
          <label for="input-43-3"> 4,72 mL </label>
        </li>
        <li>
          <input type="radio" id="input-43-4" name="iCheck-43" data-soal="43" data-opsi="d">
          <label for="input-43-4"> 4,80 mL </label>
        </li>
        <li>
          <input type="radio" id="input-43-5" name="iCheck-43" data-soal="43" data-opsi="e">
          <label for="input-43-5"> 4,90 mL </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-44">A buffer solution which is consisted of 0.01 M HOAc (Ka =1x10<sup>-5</sup>) and 0.10 M NaOAc, has a pH value of 6. The ratio of volume of HOAc and NaOAc is ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-44-1" name="iCheck-44" data-soal="44" data-opsi="a">
          <label for="input-44-1"> 1:1 </label>
        </li>
        <li>
          <input type="radio" id="input-44-2" name="iCheck-44" data-soal="44" data-opsi="b">
          <label for="input-44-2"> 1:2 </label>
        </li>
        <li>
          <input type="radio" id="input-44-3" name="iCheck-44" data-soal="44" data-opsi="c">
          <label for="input-44-3"> 2:1 </label>
        </li>
        <li>
          <input type="radio" id="input-44-4" name="iCheck-44" data-soal="44" data-opsi="d">
          <label for="input-44-4">  1:10 </label>
        </li>
        <li>
          <input type="radio" id="input-44-5" name="iCheck-44" data-soal="44" data-opsi="e">
          <label for="input-44-5"> 10:1 </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-45">Campuran sebanyak 14,42 g terdiri atas glukosa (Mr = 180) dan sukrosa (Mr = 342) yang dilarutkan dalam 100 gram air. Campuran tersebut mendidih pada suhu 100,312<sup>o</sup>C dengan kenaikan titik didih molal air = 0,52<sup>o</sup>C/m. Maka massa glukosa dan fruktosa masing-masing adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-45-1" name="iCheck-45" data-soal="45" data-opsi="a">
          <label for="input-45-1"> 6,78 g dan 7,64 g </label>
        </li>
        <li>
          <input type="radio" id="input-45-2" name="iCheck-45" data-soal="45" data-opsi="b">
          <label for="input-45-2"> 7,64 g dan 6,78 g </label>
        </li>
        <li>
          <input type="radio" id="input-45-3" name="iCheck-45" data-soal="45" data-opsi="c">
          <label for="input-45-3"> 3,39 g dan 11,03 g </label>
        </li>
        <li>
          <input type="radio" id="input-45-4" name="iCheck-45" data-soal="45" data-opsi="d">
          <label for="input-45-4">  11,03 g dan 3,39 g </label>
        </li>
        <li>
          <input type="radio" id="input-45-5" name="iCheck-45" data-soal="45" data-opsi="e">
          <label for="input-45-5"> 3,82 g dan 10,6 g </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-46">An electrolysis process in AgNO<sub>3</sub> solution with Platinum electrode produces 1.62 g of silver precipitation. The volume of gas produced in anode which is calculated when 1 L of NO gas has the mass of 1 g is ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-46-1" name="iCheck-46" data-soal="46" data-opsi="a">
          <label for="input-46-1"> 0,0750 L </label>
        </li>
        <li>
          <input type="radio" id="input-46-2" name="iCheck-46" data-soal="46" data-opsi="b">
          <label for="input-46-2"> 0,1125 L </label>
        </li>
        <li>
          <input type="radio" id="input-46-3" name="iCheck-46" data-soal="46" data-opsi="c">
          <label for="input-46-3"> 0,0125 L </label>
        </li>
        <li>
          <input type="radio" id="input-46-4" name="iCheck-46" data-soal="46" data-opsi="d">
          <label for="input-46-4"> 0,1500 L </label>
        </li>
        <li>
          <input type="radio" id="input-46-5" name="iCheck-46" data-soal="46" data-opsi="e">
          <label for="input-46-5">  0,0850 L </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-47">Akan dilakukan penentuan kadar NaCl dalam garam dapur konsumsi. Sebanyak 2,0 g sampel garam dilarutkan dalam air sampai 100,0 mL. 10,0 mL larutan dipipet dan dititrasi dengan larutan baku AgNO<sub>3</sub> 0,1100 N menggunakan metode Mohr, ternyata memerlukan pentiter sebanyak 8,50 mL. Dengan demikian, kadar NaCl dalam garam konsumsi tersebut adalah ... </h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-47-1" name="iCheck-47" data-soal="47" data-opsi="a">
          <label for="input-47-1"> 20,0 % </label>
        </li>
        <li>
          <input type="radio" id="input-47-2" name="iCheck-47" data-soal="47" data-opsi="b">
          <label for="input-47-2"> 25,0 % </label>
        </li>
        <li>
          <input type="radio" id="input-47-3" name="iCheck-47" data-soal="47" data-opsi="c">
          <label for="input-47-3"> 27,3 % </label>
        </li>
        <li>
          <input type="radio" id="input-47-4" name="iCheck-47" data-soal="47" data-opsi="d">
          <label for="input-47-4"> 28,5 % </label>
        </li>
        <li>
          <input type="radio" id="input-47-5" name="iCheck-47" data-soal="47" data-opsi="e">
          <label for="input-47-5"> 30,0 % </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-48">A sample containing sulfate ions is precipitated into PbSO<sub>4</sub> by the addition of excess of Pb<sup>2+</sup>. The excess of Pb<sup>2+</sup> is then analyzed by titration. 0.4500 g of sample is being reacted with 25 mL of 0.0325 M PbCl<sub>2</sub>. PbSO<sub>4</sub> which is formed is filtrated, the rest is titrated by 25.0 mL of 0.0175 M EDTA. Concentration of SO<sub>4</sub><sup>2-</sup> in the sample is...(w/w)</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-48-1" name="iCheck-48" data-soal="48" data-opsi="a">
          <label for="input-48-1"> 7.0 % </label>
        </li>
        <li>
          <input type="radio" id="input-48-2" name="iCheck-48" data-soal="48" data-opsi="b">
          <label for="input-48-2"> 7.5 % </label>
        </li>
        <li>
          <input type="radio" id="input-48-3" name="iCheck-48" data-soal="48" data-opsi="c">
          <label for="input-48-3"> 8.0 % </label>
        </li>
        <li>
          <input type="radio" id="input-48-4" name="iCheck-48" data-soal="48" data-opsi="d">
          <label for="input-48-4"> 8.5 % </label>
        </li>
        <li>
          <input type="radio" id="input-48-5" name="iCheck-48" data-soal="48" data-opsi="e">
          <label for="input-48-5"> 10.0 % </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-49">Untuk menghasilkan garam yang mengandung klorida dari dari KCl dan BaCl<sub>2</sub> sebanyak 40 %, maka persebtase berat dari garam KCl dan <sub>2</sub> yang harus dilarutkan adalah ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-49-1" name="iCheck-49" data-soal="49" data-opsi="a">
          <label for="input-49-1"> 61 % dan 39 % </label>
        </li>
        <li>
          <input type="radio" id="input-49-2" name="iCheck-49" data-soal="49" data-opsi="b">
          <label for="input-49-2"> 40 % dan 60 % </label>
        </li>
        <li>
          <input type="radio" id="input-49-3" name="iCheck-49" data-soal="49" data-opsi="c">
          <label for="input-49-3"> 60 % dan 40 % </label>
        </li>
        <li>
          <input type="radio" id="input-49-4" name="iCheck-49" data-soal="49" data-opsi="d">
          <label for="input-49-4"> 39 % dan 61 % </label>
        </li>
        <li>
          <input type="radio" id="input-49-5" name="iCheck-49" data-soal="49" data-opsi="e">
          <label for="input-49-5">  45 % dan 55 % </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-50">Excess of KI solution is mixed with potassium dichromate solution, free iodine formed then is titrated by 40.0 mL of 0.1050 N sodium thiosulfate to gain the equivalent point. The mass of potassium dichromate is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-50-1" name="iCheck-50" data-soal="50" data-opsi="a">
          <label for="input-50-1"> 195.7 mg </label>
        </li>
        <li>
          <input type="radio" id="input-50-2" name="iCheck-50" data-soal="50" data-opsi="b">
          <label for="input-50-2"> 198.5 mg </label>
        </li>
        <li>
          <input type="radio" id="input-50-3" name="iCheck-50" data-soal="50" data-opsi="c">
          <label for="input-50-3"> 200.0 mg </label>
        </li>
        <li>
          <input type="radio" id="input-50-4" name="iCheck-50" data-soal="50" data-opsi="d">
          <label for="input-50-4"> 200.5 mg </label>
        </li>
        <li>
          <input type="radio" id="input-50-5" name="iCheck-50" data-soal="50" data-opsi="e">
          <label for="input-50-5"> 205.8 mg </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-51">Nama dari senyawa kompleks [Ni(tn)<sub>2</sub>(ONO)]BPh<sub>4</sub> adalah ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-51-1" name="iCheck-51" data-soal="51" data-opsi="a">
          <label for="input-51-1"> Nitrito-bis(1,3-propanadiamin) nikel (II) tetrafenilborat </label>
        </li>
        <li>
          <input type="radio" id="input-51-2" name="iCheck-51" data-soal="51" data-opsi="b">
          <label for="input-51-2"> Nitrito-di(1,3-propanadiamin) nikel (II) tetrafenilborat </label>
        </li>
        <li>
          <input type="radio" id="input-51-3" name="iCheck-51" data-soal="51" data-opsi="c">
          <label for="input-51-3"> Nitrito-bis(1,3-propanadiamin) nikel (III) tetrafenilboron </label>
        </li>
        <li>
          <input type="radio" id="input-51-4" name="iCheck-51" data-soal="51" data-opsi="d">
          <label for="input-51-4"> Nitrito-di(1,3-propanadiamin) nikel (III) tetrafenilboron </label>
        </li>
        <li>
          <input type="radio" id="input-51-5" name="iCheck-51" data-soal="51" data-opsi="e">
          <label for="input-51-5"> Nitrito-bis(1,3-propanadiamin) N-nikel (II) tetrafenilborat </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-52"> Crystal Field Stabilization Energy (CFSE) of [Fe(CO)<sub>6</sub>]<sup>2+</sup> is ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-52-1" name="iCheck-52" data-soal="52" data-opsi="a">
          <label for="input-52-1"> -2,4 Dq + P </label>
        </li>
        <li>
          <input type="radio" id="input-52-2" name="iCheck-52" data-soal="52" data-opsi="b">
          <label for="input-52-2"> -0,4 &#916;<sub>o</sub> + P </label>
        </li>
        <li>
          <input type="radio" id="input-52-3" name="iCheck-52" data-soal="52" data-opsi="c">
          <label for="input-52-3"> -2,4 &#916;<sub>o</sub> + 3P </label>
        </li>
        <li>
          <input type="radio" id="input-52-4" name="iCheck-52" data-soal="52" data-opsi="d">
          <label for="input-52-4">  -2,4 Dq + 3P </label>
        </li>
        <li>
          <input type="radio" id="input-52-5" name="iCheck-52" data-soal="52" data-opsi="e">
          <label for="input-52-5">  -0,24 &#916;<sub>o</sub> </label>
        </li>
      </ul>
      <br><br>
    </li>
    
    <li>
      <h4 id="soal-53">Salah satu pendekatan perhitungan hubungan antara komposisi orbital hibridisasi dengan sudut ikatannya dapat dinyatakan dalam persamaan berikut: </h4>
      
      <img src="../images/soal53.jpg">
      
      <h4>Dimana &#920; adalah sudut ikatan, s adalah karakter orbital s, dan p adalah karakter orbital p. Karakter orbital s dan p berturut-turut pada molekul H<sub>2</sub>O yang memiliki &#920;=104,5 adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-53-1" name="iCheck-53" data-soal="53" data-opsi="a">
          <label for="input-53-1"> 0,80 & 0,20 </label>
        </li>
        <li>
          <input type="radio" id="input-53-2" name="iCheck-53" data-soal="53" data-opsi="b">
          <label for="input-53-2"> 0,20 & 0,80 </label>
        </li>
        <li>
          <input type="radio" id="input-53-3" name="iCheck-53" data-soal="53" data-opsi="c">
          <label for="input-53-3"> 0,25 & 0,75 </label>
        </li>
        <li>
          <input type="radio" id="input-53-4" name="iCheck-53" data-soal="53" data-opsi="d">
          <label for="input-53-4"> 0,75 & 0,25 </label>
        </li>
        <li>
          <input type="radio" id="input-53-5" name="iCheck-53" data-soal="53" data-opsi="e">
          <label for="input-53-5"> 0,33 & 0,67 </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-54"> Isolation of noble gases from the air can be done based on the scheme as follows:</h4>
     <img src="../images/soal54.jpg">
      <h4>Assume the air is only containing the noble gases, oxygen, nitrogen, carbon dioxide, and water vapor which is entered the system. The correct statement is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-54-1" name="iCheck-54" data-soal="54" data-opsi="a">
          <label for="input-54-1"> Oxygen will react with copper to form its oxide compound. </label>
        </li>
        <li>
          <input type="radio" id="input-54-2" name="iCheck-54" data-soal="54" data-opsi="b">
          <label for="input-54-2"> Nitrogen will react with magnesium to form Mg<sub>3</sub>N<sub>2</sub>. </label>
        </li>
        <li>
          <input type="radio" id="input-54-3" name="iCheck-54" data-soal="54" data-opsi="c">
          <label for="input-54-3"> Carbon dioxide is precipitated into its carbonate form. </label>
        </li>
        <li>
          <input type="radio" id="input-54-4" name="iCheck-54" data-soal="54" data-opsi="d">
          <label for="input-54-4"> Water vapor will be absorbed by CaCl<sub>2</sub>. </label>
        </li>
        <li>
          <input type="radio" id="input-54-5" name="iCheck-54" data-soal="54" data-opsi="e">
          <label for="input-54-5"> All the answers above are true. </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-55">Effective Atomic Number (EAN) adalah jumlah elektron di sekitar ion pusat dalam senyawa kompleks dimana elektron yang ada berasal dari ion atau logam pusat dan ligan sehingga cenderung memenuhi konfigurasi elektron gas mulia. Pada umumnya senyawa kompleks akan stabil apabila mengikuti EAN dari gas mulia. Pada kenyataannya [Ag(NH<sub>3</sub>)<sub>2</sub>]<sup>+</sup> lebih stabil daripada [Ag(NH<sub>3</sub>)<sub>4</sub>]<sup>+</sup>. Nilai EAN dari senyawa [Ag(NH<sub>3</sub>)<sub>2</sub>]<sup>+</sup> adalah</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-55-1" name="iCheck-55" data-soal="55" data-opsi="a">
          <label for="input-55-1"> 52 </label>
        </li>
        <li>
          <input type="radio" id="input-55-2" name="iCheck-55" data-soal="55" data-opsi="b">
          <label for="input-55-2"> 51 </label>
        </li>
        <li>
          <input type="radio" id="input-55-3" name="iCheck-55" data-soal="55" data-opsi="c">
          <label for="input-55-3"> 50 </label>
        </li>
        <li>
          <input type="radio" id="input-55-4" name="iCheck-55" data-soal="55" data-opsi="d">
          <label for="input-55-4"> 55 </label>
        </li>
        <li>
          <input type="radio" id="input-55-5" name="iCheck-55" data-soal="55" data-opsi="e">
          <label for="input-55-5"> 56 </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-56">Interhalogen reaction as follows which can be done spontaneously is ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-56-1" name="iCheck-56" data-soal="56" data-opsi="a">
          <label for="input-56-1"> F<sub>2</sub> + 2Cl<sup>-</sup>  </label>
        </li>
        <li>
          <input type="radio" id="input-56-2" name="iCheck-56" data-soal="56" data-opsi="b">
          <label for="input-56-2"> Br<sub>2</sub> + 2Cl<sup>-</sup> </label>
        </li>
        <li>
          <input type="radio" id="input-56-3" name="iCheck-56" data-soal="56" data-opsi="c">
          <label for="input-56-3"> Cu + Zn<sup>2+</sup> </label>
        </li>
        <li>
          <input type="radio" id="input-56-4" name="iCheck-56" data-soal="56" data-opsi="d">
          <label for="input-56-4"> Cu + Pb<sup>2+</sup> </label>
        </li>
        <li>
          <input type="radio" id="input-56-5" name="iCheck-56" data-soal="56" data-opsi="e">
          <label for="input-56-5"> Hg + Pb<sup>2+</sup> </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-57">Seorang pasien diberi radioisotop sebesar 5 ng. setelah 1 minggu sisa radioisotop dalam tubuhnya sebanyak 9,034 x 10<sup>-7</sup> ng. Tentukan waktu paruh radioisotop tersebut ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-57-1" name="iCheck-57" data-soal="57" data-opsi="a">
          <label for="input-57-1"> 1008,10 menit  </label>
        </li>
        <li>
          <input type="radio" id="input-57-2" name="iCheck-57" data-soal="57" data-opsi="b">
          <label for="input-57-2"> 449,99 menit </label>
        </li>
        <li>
          <input type="radio" id="input-57-3" name="iCheck-57" data-soal="57" data-opsi="c">
          <label for="input-57-3"> 64,28 menit </label>
        </li>
        <li>
          <input type="radio" id="input-57-4" name="iCheck-57" data-soal="57" data-opsi="d">
          <label for="input-57-4"> 22,45 menit </label>
        </li>
        <li>
          <input type="radio" id="input-57-5" name="iCheck-57" data-soal="57" data-opsi="e">
          <label for="input-57-5"> 549,21 menit </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-58">In chemistry of surface, conductivity and valence band are the nearest band to the <i>Fermi Level (Ef)</i> (total chemical potential of electron) which is the determiner of electric conductivity of a solid state matter. Valence band is the highest energy area of occupied electrons while conductivity band is the lowest energy area of unoccupied electrons in energy level of a material.</h4>
      
        <img src="../images/soal58.jpg">
        <h4>The correct statement which is appropriate with the property and condition of energy gap between valence and conductivity band for energy material scheme which is shown as follows is ...</h4>
        <i>clue : In molecular orbital theory, valence band is similar to HOMO while conductivity band is similar to LUMO.</i>
        <br><br>
        <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-58-1" name="iCheck-58" data-soal="58" data-opsi="a">
          <label for="input-58-1"> A conductor with a = conductivity band and b = valence band </label>
        </li>
        <li>
          <input type="radio" id="input-58-2" name="iCheck-58" data-soal="58" data-opsi="b">
          <label for="input-58-2"> A conductor with a = valence band and b = conductivity band </label>
        </li>
        <li>
          <input type="radio" id="input-58-3" name="iCheck-58" data-soal="58" data-opsi="c">
          <label for="input-58-3"> An isolator with a = valence band and b = conductivity band </label>
        </li>
        <li>
          <input type="radio" id="input-58-4" name="iCheck-58" data-soal="58" data-opsi="d">
          <label for="input-58-4"> An isolator with a = conductivity band and b = valence band </label>
        </li>
        <li>
          <input type="radio" id="input-58-5" name="iCheck-58" data-soal="58" data-opsi="e">
          <label for="input-58-5"> A semionductor with a = valence band and b = conductivity band </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-59">Gugus ligan pada senyawa kompleks terkadang bereaksi serupa dengan reaksi pada senyawa organik. Perbedaan menarik yang ada pada reaksi senyawa kompleks adalah dengan adanya perubahan bilangan oksidasi ion atau logam pusat senyawa. Diberikan reaksi antara tetrakarbonilferrum(0) dengan iodin membentuk cis-diiodotetrakarbonilferrat(II) sebagai berikut:</h4>
      <h4>Fe(CO)<sub>4</sub> + I<sub>2</sub>  &#8594; <i>cis</i>-I<sub>2</sub>Fe(CO)<sub>4</sub></h4>
      <h4>Tipe reaksi yang terjadi pada pembentukan senyawa diatas adalah ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-59-1" name="iCheck-59" data-soal="59" data-opsi="a">
          <label for="input-59-1"> Disosiasi CO </label>
        </li>
        <li>
          <input type="radio" id="input-59-2" name="iCheck-59" data-soal="59" data-opsi="b">
          <label for="input-59-2"> Substitusi CO </label>
        </li>
        <li>
          <input type="radio" id="input-59-3" name="iCheck-59" data-soal="59" data-opsi="c">
          <label for="input-59-3"> Eliminasi Reduktif </label>
        </li>
        <li>
          <input type="radio" id="input-59-4" name="iCheck-59" data-soal="59" data-opsi="d">
          <label for="input-59-4"> Adisi Oksidatif </label>
        </li>
        <li>
          <input type="radio" id="input-59-5" name="iCheck-59" data-soal="59" data-opsi="e">
          <label for="input-59-5"> Pengusiran nukleofilik </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-60">The crystal lattice of NaCl based on the picture shown is included into the lattice system classification of ...</h4>
        <img src="../images/soal60.jpg">
        <br><br>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-60-1" name="iCheck-60" data-soal="60" data-opsi="a">
          <label for="input-60-1"> Monocline </label>
        </li>
        <li>
          <input type="radio" id="input-60-2" name="iCheck-60" data-soal="60" data-opsi="b">
          <label for="input-60-2"> Orthorombic </label>
        </li>
        <li>
          <input type="radio" id="input-60-3" name="iCheck-60" data-soal="60" data-opsi="c">
          <label for="input-60-3"> Hexagonal </label>
        </li>
        <li>
          <input type="radio" id="input-60-4" name="iCheck-60" data-soal="60" data-opsi="d">
          <label for="input-60-4"> Tetragonal</label>
        </li>
        <li>
          <input type="radio" id="input-60-5" name="iCheck-60" data-soal="60" data-opsi="e">
          <label for="input-60-5"> Cubic </label>
        </li>
      </ul>
      <br><br>
    </li>
  </ol>
</div>
<!-- page 4 -->
<div id="page-4" class="div-soal">
  <h4> SOAL 41-80 LEVEL ADVANCE (Benar +5, Kosong -1, Salah -2)</h4><br>
  <ol start="61">
    <li>
        <h4 id="soal-61">Diagram dibawah menunjukkan distribusi Boltzmaan udara pada dua suhu yang berbeda. Garis tebal menunjukkan distribusi pada -34 <sup>o</sup>C dan garis putus-putus menunjukkan distribusi pada -5 <sup>o</sup>C. Diagram yang paling benar adalah ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-61-1" name="iCheck-61" data-soal="61" data-opsi="a">
          <label for="input-61-1"> <img src="../images/soal61a.jpg"> </label>
        </li>
        <li>
          <input type="radio" id="input-61-2" name="iCheck-61" data-soal="61" data-opsi="b">
          <label for="input-61-2"> <img src="../images/soal61b.jpg"> </label>
        </li>
        <li>
          <input type="radio" id="input-61-3" name="iCheck-61" data-soal="61" data-opsi="c">
          <label for="input-61-3"> <img src="../images/soal61c.jpg"> </label>
        </li>
        <li>
          <input type="radio" id="input-61-4" name="iCheck-61" data-soal="61" data-opsi="d">
          <label for="input-61-4"> <img src="../images/soal61d.jpg"> </label>
        </li>
        <li>
          <input type="radio" id="input-61-5" name="iCheck-61" data-soal="61" data-opsi="e">
          <label for="input-61-5"> <img src="../images/soal61e.jpg"> </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-62">Strontium can be produced by electrolysis of molten strontium bromide with the set of apparatus as follows.</h4>
      <img src="../images/soal62.jpg">
      <h4>The correct statement why the atmosphere of Argon is used around the cathode is ...</h4>
      
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-62-1" name="iCheck-62" data-soal="62" data-opsi="a">
          <label for="input-62-1">Thin layer of strontium-argon compound will be formed at the surface of cathode to prevent the formation of other metal in its surface. </label>
        </li>
        <li>
          <input type="radio" id="input-62-2" name="iCheck-62" data-soal="62" data-opsi="b">
          <label for="input-62-2">Argon will give an active atmosphere for electrolysis of SrBr<sub>2</sub>. </label>
        </li>
        <li>
          <input type="radio" id="input-62-3" name="iCheck-62" data-soal="62" data-opsi="c">
          <label for="input-62-3">Argon keeps strontium metal is in its liquid phase. </label>
        </li>
        <li>
          <input type="radio" id="input-62-4" name="iCheck-62" data-soal="62" data-opsi="d">
          <label for="input-62-4"> Argon stops molten Strontium to raise too high inside the tube. </label>
        </li>
        <li>
          <input type="radio" id="input-62-5" name="iCheck-62" data-soal="62" data-opsi="e">
          <label for="input-62-5"> Without argon, strontium oxide will be formed in the air. </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-63">Setengah reaksi berikut muncul ketika kalium iodat(V) didalam larutan asam klorida mengoksidasi iodin untuk membentuk ICl<sub>2</sub><sup>-</sup>.</h4>
      <img src="../images/soal63.jpg">
      <h4>Jika terdapat 0,1020 N KIO<sub>3</sub> direaksikan dalam 1 L larutan berair, konsentrasi ICl<sub>2</sub><sup>-</sup> yang diproduksi dalam reaksi berikut adalah sebesar</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-63-1" name="iCheck-63" data-soal="63" data-opsi="a">
          <label for="input-63-1"> 0,0510 M </label>
        </li>
        <li>
          <input type="radio" id="input-63-2" name="iCheck-63" data-soal="63" data-opsi="b">
          <label for="input-63-2"> 0,1020 M </label>
        </li>
        <li>
          <input type="radio" id="input-63-3" name="iCheck-63" data-soal="63" data-opsi="c">
          <label for="input-63-3"> 0,1530 M </label>
        </li>
        <li>
          <input type="radio" id="input-63-4" name="iCheck-63" data-soal="63" data-opsi="d">
          <label for="input-63-4"> 0,2040 M  </label>
        </li>
        <li>
          <input type="radio" id="input-63-5" name="iCheck-63" data-soal="63" data-opsi="e">
          <label for="input-63-5"> 0,3060 M </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-64">The products which will be probably formed the most by the electrolysis of molten Na<sub>2</sub>SO<sub>4</sub> are ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-64-1" name="iCheck-64" data-soal="64" data-opsi="a">
          <label for="input-64-1"> H<sub>2</sub> dan O<sub>2</sub> </label>
        </li>
        <li>
          <input type="radio" id="input-64-2" name="iCheck-64" data-soal="64" data-opsi="b">
          <label for="input-64-2"> Na dan O<sub>2</sub> </label>
        </li>
        <li>
          <input type="radio" id="input-64-3" name="iCheck-64" data-soal="64" data-opsi="c">
          <label for="input-64-3"> Na dan SO<sub>3</sub> </label>
        </li>
        <li>
          <input type="radio" id="input-64-4" name="iCheck-64" data-soal="64" data-opsi="d">
          <label for="input-64-4">  Na dan S </label>
        </li>
        <li>
          <input type="radio" id="input-64-5" name="iCheck-64" data-soal="64" data-opsi="e">
          <label for="input-64-5"> Na dan H<sub>2</sub> </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
        <h4 id="soal-65">Serangkaian sel elektrolisis yang disusun secara seri dioperasikan selama 2 jam oleh arus 2,12 A. Sel - sel tersebut diisi berturut - turut dari anoda hingga katoda: NaCl<i>(aq)</i>, KBr<i>(aq)</i>, dan CuSO<sub>4</sub><i>(aq)</i>. Pernyataan dibawah ini yang benar adalah ...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-65-1" name="iCheck-65" data-soal="65" data-opsi="a">
          <label for="input-65-1"> H<sub>2</sub>, O<sub>2</sub>, dan Cu dihasilkan pada sel CuSO<sub>4</sub> </label>
        </li>
        <li>
          <input type="radio" id="input-65-2" name="iCheck-65" data-soal="65" data-opsi="b">
          <label for="input-65-2"> pH dari sel CuSO<sub>4</sub> akan meningkat </label>
        </li>
        <li>
          <input type="radio" id="input-65-3" name="iCheck-65" data-soal="65" data-opsi="c">
          <label for="input-65-3"> Hukum Faraday II tidak berlaku pada sel-sel diatas </label>
        </li>
        <li>
          <input type="radio" id="input-65-4" name="iCheck-65" data-soal="65" data-opsi="d">
          <label for="input-65-4"> Konsentrasi Br<sup>-</sup> akan bertambah seiring waktu </label>
        </li>
        <li>
          <input type="radio" id="input-65-5" name="iCheck-65" data-soal="65" data-opsi="e">
          <label for="input-65-5"> Jumlah mol elektron yang terlibat dalam sel ini adalah 7,513 kmol </label>
        </li>
      </ul>
      <br><br>
    </li>

    <li>
      <h4 id="soal-66">&#946;-karoten is an isoprenoid compound which is contained the most in carrot and  acts as reddish-orange pigment within the carrot ...</h4>
      <img src="../images/soal66.jpg">
      <h4>It is known that the absorption of sunlight will be emitted its color in a complementary form, the emission energy of one mole of this compound energi emisi is 196.2 kJ. The maximum wavelength which can be emitted by &#946;-karoten is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-66-1" name="iCheck-66" data-soal="66" data-opsi="a">
          <label for="input-66-1"> 610 nm </label>
        </li>
        <li>
          <input type="radio" id="input-66-2" name="iCheck-66" data-soal="66" data-opsi="b">
          <label for="input-66-2"> 450 nm </label>
        </li>
        <li>
          <input type="radio" id="input-66-3" name="iCheck-66" data-soal="66" data-opsi="c">
          <label for="input-66-3"> 300 nm </label>
        </li>
        <li>
          <input type="radio" id="input-66-4" name="iCheck-66" data-soal="66" data-opsi="d">
          <label for="input-66-4"> 235 nm </label>
        </li>
        <li>
          <input type="radio" id="input-66-5" name="iCheck-66" data-soal="66" data-opsi="e">
          <label for="input-66-5"> 200 nm </label>
        </li>
      </ul>
      <br><br>
    </li>

        <li>
      <h4 id="soal-67">Terdapat senyawaan [X(NH<sub>3</sub>)<sub>2</sub>Cl<sub>2</sub>] yang tersedia dalam beberapa bentuk isomer sebagai berikut:</h4>
      <img src="../images/soal67.JPG">
      <h4>Berdasarkan struktur senyawa diatas, pernyataan dibawah yang benar adalah:</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-67-1" name="iCheck-67" data-soal="67" data-opsi="a">
          <label for="input-67-1"> Kedua senyawa bersifat polar.<1abel>
        </li>
        <li>
          <input type="radio" id="input-67-2" name="iCheck-67" data-soal="67" data-opsi="b">
          <label for="input-67-2"> Senyawa A lebih polar dibandingkan senyawa B</label>
        </li>
        <li>
          <input type="radio" id="input-67-3" name="iCheck-67" data-soal="67" data-opsi="c">
          <label for="input-67-3"> Momen dipol X-Cl sama dengan momen dipol X-NH<sub>3</sub>.</label>
        </li>
        <li>
          <input type="radio" id="input-67-4" name="iCheck-67" data-soal="67" data-opsi="d">
          <label for="input-67-4"> Energi penstabilan medan kristal kedua senyawa tersebut berbeda.</label>
        </li>
        <li>
          <input type="radio" id="input-67-5" name="iCheck-67" data-soal="67" data-opsi="e">
          <label for="input-67-5"> E. Tidak ada pengaruh sifat fisis yang dapat ditimbulkan dari perbedaan stereokimia kedua senyawa diatas.</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-68">One mole of photons is known as one Einstein of radiation. According to Stark-Einstein law of photochemical equivalence, one mole of reactants absorbs one Einstein of energy. For a photochemical reaction, a term called "Quantum Yield" is defined as:</h4>
      <img src="../images/soal68.JPG">
      <h4>In the photochemical reaction of H<sub>2</sub> and Cl<sub>2</sub>, Cl<sub>2</sub> absorbs at wavelength of 488 nm. When the Cl<sub>2</sub> gas is irradiated with a 60 Watt lamp that emits radiation with 80&#37; efficiency, 4.1 mmol of HCl were formed in 10 s. The quantum yield for the reaction is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-68-1" name="iCheck-68" data-soal="68" data-opsi="a">
          <label for="input-68-1"> 1,05</label>
        </li>
        <li>
          <input type="radio" id="input-68-2" name="iCheck-68" data-soal="68" data-opsi="b">
          <label for="input-68-2"> 1,25</label>
        </li>
        <li>
          <input type="radio" id="input-68-3" name="iCheck-68" data-soal="68" data-opsi="c">
          <label for="input-68-3"> 4,01</label>
        </li>
        <li>
          <input type="radio" id="input-68-4" name="iCheck-68" data-soal="68" data-opsi="d">
          <label for="input-68-4"> 5,25</label>
        </li>
        <li>
          <input type="radio" id="input-68-5" name="iCheck-68" data-soal="68" data-opsi="e">
          <label for="input-68-5"> 6,05</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-69">Nilai perubahan entalpi dari suatu proses isobarik dapat dihitung melalui persamaan berikut:</h4>
      <img src="../images/soal69_1.JPG">
      <h4>Dimana T<sub>0</sub> adalah temperatur awal reaksi, T<sub>f</sub> adalah temperatur akhir reaksi,  dan C<sub>p</sub> adalah Tetapan Kalorimeter pada tekanan konstan. Diketahui suatu sistem reaksi berisikan 2,0 mol gas Ne dipanaskan secara isobarik pada suhu 100 K hingga 200 K dan memiliki nilai Cp berdasarkan fungsi suhu sebagai berikut:</h4>
      <img src="../images/soal69_2.JPG">
      <h4>Nilai &#916;H total yang didapat Ne dari pemanasan tersebut adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-69-1" name="iCheck-69" data-soal="69" data-opsi="a">
          <label for="input-69-1"> -150,2 J</label>
        </li>
        <li>
          <input type="radio" id="input-69-2" name="iCheck-69" data-soal="69" data-opsi="b">
          <label for="input-69-2"> -180,4 J</label>
        </li>
        <li>
          <input type="radio" id="input-69-3" name="iCheck-69" data-soal="69" data-opsi="c">
          <label for="input-69-3"> -360,8 J</label>
        </li>
        <li>
          <input type="radio" id="input-69-4" name="iCheck-69" data-soal="69" data-opsi="d">
          <label for="input-69-4"> -721,6 J</label>
        </li>
        <li>
          <input type="radio" id="input-69-5" name="iCheck-69" data-soal="69" data-opsi="e">
          <label for="input-69-5"> -811,8 J</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-70">1.25 M of Na<sub>2</sub>Cr<sub>2</sub>O<sub>7(aq)</sub> is reacted with 1.000 M of FeSO<sub>4</sub>(aq) at 25 <sup>o</sup>C to form 2.50 M of Cr<sup>3+</sup><sub>(aq)</sub> and Fe<sup>3+</sup><sub>(aq)</sub> in an acidic solution with the pH value of 4.75. The standard reduction potential of Cr<sub>2</sub>O<sub>7</sub><sup>2-</sup> | Cr<sup>3+</sup> is +1.33 V and Fe<sup>3+</sup> | Fe<sup>2+</sup> is + 0.77 V. The Eocell of that reaction is (assume the Eored of Fe<sup>3+</sup> | Fe<sup>2+</sup> is not affected by the number of its activity)...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-70-1" name="iCheck-70" data-soal="70" data-opsi="a">
          <label for="input-70-1"> 2.100 V</label>
        </li>
        <li>
          <input type="radio" id="input-70-2" name="iCheck-70" data-soal="70" data-opsi="b">
          <label for="input-70-2"> 1.437 V</label>
        </li>
        <li>
          <input type="radio" id="input-70-3" name="iCheck-70" data-soal="70" data-opsi="c">
          <label for="input-70-3"> 1.251 V</label>
        </li>
        <li>
          <input type="radio" id="input-70-4" name="iCheck-70" data-soal="70" data-opsi="d">
          <label for="input-70-4"> 1.188 V</label>
        </li>
        <li>
          <input type="radio" id="input-70-5" name="iCheck-70" data-soal="70" data-opsi="e">
          <label for="input-70-5"> 1.000 V</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-71">Eugenol merupakan senyawa fenilpropanoid yang ada didalam minyak cengkeh. Eugenol dapat diubah menjadi isomernya, yakni isoeugenol dengan pemanasan.</h4>
      <img src="../images/soal71.JPG">
      <h4>Isoeugenol tersebut dapat diubah menjadi vanilin dengan pereaksi</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-71-1" name="iCheck-71" data-soal="71" data-opsi="a">
          <label for="input-71-1"> O<sub>3</sub>, Zn, CH<sub>3</sub>COOH</label>
        </li>
        <li>
          <input type="radio" id="input-71-2" name="iCheck-71" data-soal="71" data-opsi="b">
          <label for="input-71-2"> O<sub>3</sub>, H<sub>2</sub>O<sub>2</sub></label>
        </li>
        <li>
          <input type="radio" id="input-71-3" name="iCheck-71" data-soal="71" data-opsi="c">
          <label for="input-71-3"> KMnO<sub>4</sub>, KOH</label>
        </li>
        <li>
          <input type="radio" id="input-71-4" name="iCheck-71" data-soal="71" data-opsi="d">
          <label for="input-71-4"> H<sub>2</sub>O<sub>2</sub>, NaOH</label>
        </li>
        <li>
          <input type="radio" id="input-71-5" name="iCheck-71" data-soal="71" data-opsi="e">
          <label for="input-71-5"> HBr</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-72">Psylocin is an hallucinogen compound which is contained in Psilocybe cubensis mushroom that usually grows in cow's feces.</h4>
      <img src="../images/soal72.JPG">
      <h4>If Psylocin is reacted with methyl iodide then is heated with the addition of potassium hydroxide, the major product which will be formed is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-72-1" name="iCheck-72" data-soal="72" data-opsi="a">
          <label for="input-72-1"> <img src="../images/soal72_a.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-72-2" name="iCheck-72" data-soal="72" data-opsi="b">
          <label for="input-72-2"> <img src="../images/soal72_b.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-72-3" name="iCheck-72" data-soal="72" data-opsi="c">
          <label for="input-72-3"> <img src="../images/soal72_c.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-72-4" name="iCheck-72" data-soal="72" data-opsi="d">
          <label for="input-72-4"> <img src="../images/soal72_d.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-72-5" name="iCheck-72" data-soal="72" data-opsi="e">
          <label for="input-72-5"> <img src="../images/soal72_e.JPG"></label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-73">Saat ini Pertamina sedang melakukan rencana upgrade bahan bakar minyak jenis RON88 (Premium, nilai oktan = 88) ke jenis RON92 (Pertamax, nilai oktan = 92). Salah satu cara meng-upgrade adalah menambahkan anti-knocking agent bebas timbal, yakni MTBE (Metil ters-butil eter). Pada skala industri, MTBE dihasilkan dari reaksi antara isobutilena dengan metanol dalam katalis asam. Reaksinya adalah sebagai berikut:</h4>
      <img src="../images/soal73.JPG">
      <h4>Pernyataan yang salah pada reaksi ini adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-73-1" name="iCheck-73" data-soal="73" data-opsi="a">
          <label for="input-73-1"> Asam merupakan katalis yang bersifat elektrofil.</label>
        </li>
        <li>
          <input type="radio" id="input-73-2" name="iCheck-73" data-soal="73" data-opsi="b">
          <label for="input-73-2"> Reaksi yang terjadi merupakan reaksi adisi yang mengikuti aturan Markovnikov.</label>
        </li>
        <li>
          <input type="radio" id="input-73-3" name="iCheck-73" data-soal="73" data-opsi="c">
          <label for="input-73-3"> Terbentuk karbokation sebagai zat antara/intermediet</label>
        </li>
        <li>
          <input type="radio" id="input-73-4" name="iCheck-73" data-soal="73" data-opsi="d">
          <label for="input-73-4"> Karbokation yang terbentuk merupakan karbokation sekunder yang stabil.</label>
        </li>
        <li>
          <input type="radio" id="input-73-5" name="iCheck-73" data-soal="73" data-opsi="e">
          <label for="input-73-5"> Metanol bertindak sebagai nukleofil.</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-74">The correct sequence of the acidity of phenolic compounds below is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-74-1" name="iCheck-74" data-soal="74" data-opsi="a">
          <label for="input-74-1"> p-Methylphenol > p-Aminophenol > p-Nitrophenol > p-chlorophenol</label>
        </li>
        <li>
          <input type="radio" id="input-74-2" name="iCheck-74" data-soal="74" data-opsi="b">
          <label for="input-74-2"> p-Nitrophenol < p-Methylphenol < p-Aminophenol < p-Chlorophenol</label>
        </li>
        <li>
          <input type="radio" id="input-74-3" name="iCheck-74" data-soal="74" data-opsi="c">
          <label for="input-74-3"> p-Chlorophenol > p-Aminophenol > p-Nitrophenol > p-Methylphenol</label>
        </li>
        <li>
          <input type="radio" id="input-74-4" name="iCheck-74" data-soal="74" data-opsi="d">
          <label for="input-74-4"> p-Bromophenol > p-Nitrophenol > p-Methylphenol > p-Aminophenol</label>
        </li>
        <li>
          <input type="radio" id="input-74-5" name="iCheck-74" data-soal="74" data-opsi="e">
          <label for="input-74-5"> p-Aminophenol < p-Methylphenol < p-Bromophenol < p-Nitrophenol</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-75">Sinamaldehida merupakan senyawa fenilpropanoid yang ada pada kayu manis (Cinamommum burmanii). Berikut ini strukturnya.</h4>
      <img src="../images/soal75.JPG">
      <h4>Manakah pernyataan berikut ini yang salah mengenai Sinamaldehida?</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-75-1" name="iCheck-75" data-soal="75" data-opsi="a">
          <label for="input-75-1"> Dapat disintesis langsung dari benzaldehida dan etanal melalui reaksi aldol silang (Claisen-Schmidt) dalam suasana basa.</label>
        </li>
        <li>
          <input type="radio" id="input-75-2" name="iCheck-75" data-soal="75" data-opsi="b">
          <label for="input-75-2"> Brominasi Sinamaldehida menghasilkan 2,3-dibromo-3-fenilpropanal</label>
        </li>
        <li>
          <input type="radio" id="input-75-3" name="iCheck-75" data-soal="75" data-opsi="c">
          <label for="input-75-3"> Ozonolisis reduktif Sinamaldehida menghasilkan senyawa asam benzoat dan asam glioksilat (asam 2-oksoasetat).</label>
        </li>
        <li>
          <input type="radio" id="input-75-4" name="iCheck-75" data-soal="75" data-opsi="d">
          <label for="input-75-4"> Bereaksi dengan n-butilmagnesium bromida menghasilkan 1-fenil-hept-1-en-3-ol</label>
        </li>
        <li>
          <input type="radio" id="input-75-5" name="iCheck-75" data-soal="75" data-opsi="e">
          <label for="input-75-5"> Reduksi dengan LiAlH<sub>4</sub> dalam eter menghasilkan 3-fenil-2-prop-2-en-1-ol</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-76">Tartaric acid is a kind of acid which is contained the most in grapefruit. Tartaric acid can be transformed to pyruvic acid with the heating in acidic environment. The reaction is described as follows:</h4>
      <img src="../images/soal76.JPG">
      <h4>The correct statement below is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-76-1" name="iCheck-76" data-soal="76" data-opsi="a">
          <label for="input-76-1"> Oxaloacetic acid (2-oxo-1,4-buthadioate acid) is an intermediate in the reaction above.</label>
        </li>
        <li>
          <input type="radio" id="input-76-2" name="iCheck-76" data-soal="76" data-opsi="b">
          <label for="input-76-2"> The reaction is initiated by pinacol rearrangement reaction, followed by decarboxylation reaction.</label>
        </li>
        <li>
          <input type="radio" id="input-76-3" name="iCheck-76" data-soal="76" data-opsi="c">
          <label for="input-76-3"> Oxaloacetic acid is easy to be decarboxylated.</label>
        </li>
        <li>
          <input type="radio" id="input-76-4" name="iCheck-76" data-soal="76" data-opsi="d">
          <label for="input-76-4"> Decarboxylation reaction forms carbon dioxide gas.</label>
        </li>
        <li>
          <input type="radio" id="input-76-5" name="iCheck-76" data-soal="76" data-opsi="e">
          <label for="input-76-5"> Pinacol rearrangement reaction in the reaction above is spontaneously happened in acidic or basic environment.</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-77">Reaksi Diels-Alder merupakan salah satu reaksi sikloadisi [4+2]. Reaksi ini sangat populer dalam dunia sintesis, dan merupakan metode yang sering dipakai untuk membentuk cincin 6. Reaksinya dapat dapat ditulis sebagai berikut.</h4>
      <img src="../images/soal77.JPG">
      <h4>Reaksi Diels-Alder tidak akan berjalan dengan baik apabila...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-77-1" name="iCheck-77" data-soal="77" data-opsi="a">
          <label for="input-77-1"> X adalah gugus pendorong elektron dan Y adalah gugus penarik elektron.</label>
        </li>
        <li>
          <input type="radio" id="input-77-2" name="iCheck-77" data-soal="77" data-opsi="b">
          <label for="input-77-2"> X adalah gugus penarik elektron dan Y adalah gugus pendorong elektron.</label>
        </li>
        <li>
          <input type="radio" id="input-77-3" name="iCheck-77" data-soal="77" data-opsi="c">
          <label for="input-77-3"> Diinduksi dengan sinar Ultraviolet.</label>
        </li>
        <li>
          <input type="radio" id="input-77-4" name="iCheck-77" data-soal="77" data-opsi="d">
          <label for="input-77-4"> Dikatalisis dengan katalis asam Lewis, seperti Cu(BF4)2, SnCl4, dan sebagainya.</label>
        </li>
        <li>
          <input type="radio" id="input-77-5" name="iCheck-77" data-soal="77" data-opsi="e">
          <label for="input-77-5"> Diinduksi dengan Panas.</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-78">Hydrocarbon gas has the density of 1.461 mg/L at 25 <sup>o</sup>C and 1 atm. The reaction between hydrocarbon gas and Br<sub>2</sub> will form...</h4>      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-78-1" name="iCheck-78" data-soal="78" data-opsi="a">
          <label for="input-78-1"> Vinyl bromide</label>
        </li>
        <li>
          <input type="radio" id="input-78-2" name="iCheck-78" data-soal="78" data-opsi="b">
          <label for="input-78-2"> 1,2-dibromoethene</label>
        </li>
        <li>
          <input type="radio" id="input-78-3" name="iCheck-78" data-soal="78" data-opsi="c">
          <label for="input-78-3"> 1,2-dibromoethane</label>
        </li>
        <li>
          <input type="radio" id="input-78-4" name="iCheck-78" data-soal="78" data-opsi="d">
          <label for="input-78-4"> Ethyl bromide</label>
        </li>
        <li>
          <input type="radio" id="input-78-5" name="iCheck-78" data-soal="78" data-opsi="e">
          <label for="input-78-5"> 1,1,2,2-tetrabromoethane</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-79">Etanol dapat dipanjangkan strukturnya menjadi n-butanol dengan reaksi</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-79-1" name="iCheck-79" data-soal="79" data-opsi="a">
          <label for="input-79-1"> Direaksikan dengan HCl, etil klorida yang terbentuk direaksikan dengan logam Mg dalam eter, lalu ditambahkan etilenoksida, diikuti dengan hidrolisis.</label>
        </li>
        <li>
          <input type="radio" id="input-79-2" name="iCheck-79" data-soal="79" data-opsi="b">
          <label for="input-79-2"> Direaksikan dengan HCl, etil klorida yang terbentuk direaksikan dengan logam Mg dalam eter, lalu ditambahkan etanal, diikuti dengan hidrolisis.</label>
        </li>
        <li>
          <input type="radio" id="input-79-3" name="iCheck-79" data-soal="79" data-opsi="c">
          <label for="input-79-3"> Dioksidasi dengan CrO3+piridin dalam CH2Cl2 (Reagen Collins), etanal yang terbentuk direaksikan dalam suasana basa (self aldol), produk yang terbentuk direaksikan dengan LiAlH<sub>4</sub> dalam eter diikuti dengan hidrolisis.</label>
        </li>
        <li>
          <input type="radio" id="input-79-4" name="iCheck-79" data-soal="79" data-opsi="d">
          <label for="input-79-4"> Dioksidasi dengan Reagen Collins, etanal yang terbentuk direaksikan dengan natrium metoksida kemudian ditambahkan metil iodida, produk yang terbentuk kemudian direduksi dengan LiAlH<sub>4</sub> dalam eter diikuti dengan hidrolisis.</label>
        </li>
        <li>
          <input type="radio" id="input-79-5" name="iCheck-79" data-soal="79" data-opsi="e">
          <label for="input-79-5"> Dioksidasi dengan Reagen Collins, etanal yang terbentuk direaksikan dengan natrium metoksida kemudian ditambahkan etilenoksida, produk yang terbentuk kemudian direduksi dengan LiAlH<sub>4</sub> dalam eter diikuti dengan hidrolisis.</label>
        </li>
      </ul>
      <br><br>
    </li>
  
        <li>
      <h4 id="soal-80">Glutamate acid is a proteogenic amino acid which is used the most as flavoring agent and is often known as umami taste. Known the structure of glutamate acid and its titration curve.</h4>
      <img src="../images/soal80.JPG">
      <h4>The correct statement of glutamate acid is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-80-1" name="iCheck-80" data-soal="80" data-opsi="a">
          <label for="input-80-1"> Glutamate acid is a basic amino acid.</label>
        </li>
        <li>
          <input type="radio" id="input-80-2" name="iCheck-80" data-soal="80" data-opsi="b">
          <label for="input-80-2"> At pH > 9.67, glutamate acid is in positive ion form.</label>
        </li>
        <li>
          <input type="radio" id="input-80-3" name="iCheck-80" data-soal="80" data-opsi="c">
          <label for="input-80-3"> Glutamate acid does not have dipole moment (net dipole moment is equal to 0) at pH=2.19.</label>
        </li>
        <li>
          <input type="radio" id="input-80-4" name="iCheck-80" data-soal="80" data-opsi="d">
          <label for="input-80-4"> Glutamate acid will hard to dissolve at pH = 3.22.</label>
        </li>
        <li>
          <input type="radio" id="input-80-5" name="iCheck-80" data-soal="80" data-opsi="e">
          <label for="input-80-5"> Isoelectric pH of glutamate acid is 4.25.</label>
        </li>
      </ul>
      <br><br>
    </li>
  </ol>
</div>
<!-- page 5 -->
<div id="page-5" class="div-soal">
  <h4> SOAL 81-100 LEVEL EXPERT (Benar +6, Kosong 0, Salah -5)</h4><br>
  <ol start="81">
    <h4><strong>Number 81 - 85
    <br>"Supersaturated" Self-Assembled Charge-Selective Interfacial Layers for Organic Solar Cells</strong>
    <br>Song, Kiseok Charles et al., 2014. Journal of American Chemical Society
    <br>
    <br>Self-assembled monolayers (SAMs) have been used in organic electronics applications such as organic photovoltaics, thin-film transistors, and organic/polymer light - emitting diodes. SAM precursor molecules typically consist of three parts: the head, tail, and anchor groups.</h4>
    <img src="../images/soal81.JPG">
        <li>
      <h4 id="soal-81">Which molecule has the biggest London Force?</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-81-1" name="iCheck-81" data-soal="81" data-opsi="a">
          <label for="input-81-1"> C<sub>3</sub>F<sub>4</sub>PAPTSI</label>
        </li>
        <li>
          <input type="radio" id="input-81-2" name="iCheck-81" data-soal="81" data-opsi="b">
          <label for="input-81-2"> C<sub>6</sub>F<sub>4</sub>PAPTSI</label>
        </li>
        <li>
          <input type="radio" id="input-81-3" name="iCheck-81" data-soal="81" data-opsi="c">
          <label for="input-81-3"> C<sub>10</sub>F<sub>4</sub>PAPTSI</label>
        </li>
        <li>
          <input type="radio" id="input-81-4" name="iCheck-81" data-soal="81" data-opsi="d">
          <label for="input-81-4"> C<sub>3</sub>F<sub>4</sub>PAPTSI</label>
        </li>
        <li>
          <input type="radio" id="input-81-5" name="iCheck-81" data-soal="81" data-opsi="e">
          <label for="input-81-5"> None of above</label>
        </li>
      </ul>
      <br><br>
    </li>
    <h4>See the figure as follow:</h4>
    <img src="../images/soal82.JPG">
        <li>
      <h4 id="soal-82">The use of Hexane in the first reaction is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-82-1" name="iCheck-82" data-soal="82" data-opsi="a">
          <label for="input-82-1"> The catalyst</label>
        </li>
        <li>
          <input type="radio" id="input-82-2" name="iCheck-82" data-soal="82" data-opsi="b">
          <label for="input-82-2"> As a non polar solvent</label>
        </li>
        <li>
          <input type="radio" id="input-82-3" name="iCheck-82" data-soal="82" data-opsi="c">
          <label for="input-82-3"> As a reductor</label>
        </li>
        <li>
          <input type="radio" id="input-82-4" name="iCheck-82" data-soal="82" data-opsi="d">
          <label for="input-82-4"> As a medium for a coupling reaction</label>
        </li>
        <li>
          <input type="radio" id="input-82-5" name="iCheck-82" data-soal="82" data-opsi="e">
          <label for="input-82-5"> To ionize the amine group</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-83">The correct statement is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-83-1" name="iCheck-83" data-soal="83" data-opsi="a">
          <label for="input-83-1"> C<sub>3</sub>F<sub>4</sub>PAPTSI has the biggest boiling temperature among the other compound.</label>
        </li>
        <li>
          <input type="radio" id="input-83-2" name="iCheck-83" data-soal="83" data-opsi="b">
          <label for="input-83-2"> Pd<sub>2</sub>(dba)<sub>3</sub> is a homogenous catalyst.</label>
        </li>
        <li>
          <input type="radio" id="input-83-3" name="iCheck-83" data-soal="83" data-opsi="c">
          <label for="input-83-3"> The alkyl group will be coupled to the head part completely in a more acidic environment.</label>
        </li>
        <li>
          <input type="radio" id="input-83-4" name="iCheck-83" data-soal="83" data-opsi="d">
          <label for="input-83-4"> There are six different energy states in each pi electrons of the benzene part.</label>
        </li>
        <li>
          <input type="radio" id="input-83-5" name="iCheck-83" data-soal="83" data-opsi="e">
          <label for="input-83-5"> C<sub>18</sub>F<sub>4</sub>PAPTSI is slightly soluble in water.</label>
        </li>
      </ul>
      <br><br>
    </li>
    <h4>The total surface energy, consisting of both dispersive and polar components, was determined from the measured contact angles (CAs). The dispersive and polar energy components were calculated from the CAs measured for two liquids: Water and Diiodomethane.</h4>
    <img src="../images/soal84.JPG">
        <li>
      <h4 id="soal-84">What can be concluded from the figure above?</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-84-1" name="iCheck-84" data-soal="84" data-opsi="a">
          <label for="input-84-1"> ITO/SAM Type with 3:1 molar ratio has the highest surface energy</label>
        </li>
        <li>
          <input type="radio" id="input-84-2" name="iCheck-84" data-soal="84" data-opsi="b">
          <label for="input-84-2"> The higher the concentration of C<sub>3</sub>F<sub>4</sub>PAPTSI in the mixture, the higher the surface energy obtained.</label>
        </li>
        <li>
          <input type="radio" id="input-84-3" name="iCheck-84" data-soal="84" data-opsi="c">
          <label for="input-84-3"> A long dispersive component always give a big amount of the surface energy of its polar component.</label>
        </li>
        <li>
          <input type="radio" id="input-84-4" name="iCheck-84" data-soal="84" data-opsi="d">
          <label for="input-84-4"> As a medium for a coupling reaction</label>
        </li>
        <li>
          <input type="radio" id="input-84-5" name="iCheck-84" data-soal="84" data-opsi="e">
          <label for="input-84-5"> -SiCl<sub>3</sub> group makes a more non-polar side of its compound.</label>
        </li>
      </ul>
      <br><br>
    </li>
    <h4>Owens-Wendt-Kaelble equation is written as follow:</h4>
    <img src="../images/soal85.JPG">
    <h4>Where &#947;<sub>L</sub> denotes the total surface energy measured by the pendant drop method, &#920; denotes the contact angles, superscript P and D denote the polar and dispersion components, and the subscripts S and L denote the solid and probe liquid.</h4>
        <li>
      <h4 id="soal-85">The correct statement is...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-85-1" name="iCheck-85" data-soal="85" data-opsi="a">
          <label for="input-85-1"> Polar components will denote the same amount of surface energy as the dispersion components.</label>
        </li>
        <li>
          <input type="radio" id="input-85-2" name="iCheck-85" data-soal="85" data-opsi="b">
          <label for="input-85-2"> The bigger the number of &#947;<sup>S</sup><sub>P</sub>, the smaller the number of the surface energy.</label>
        </li>
        <li>
          <input type="radio" id="input-85-3" name="iCheck-85" data-soal="85" data-opsi="c">
          <label for="input-85-3"> Total surface energy is affected by the polarity of the compound</label>
        </li>
        <li>
          <input type="radio" id="input-85-4" name="iCheck-85" data-soal="85" data-opsi="d">
          <label for="input-85-4"> Total surface energy is affected by the polarity of the compound</label>
        </li>
        <li>
          <input type="radio" id="input-85-5" name="iCheck-85" data-soal="85" data-opsi="e">
          <label for="input-85-5"> The contact angle is a negligible value in the equation above.</label>
        </li>
      </ul>
      <br><br>
    </li>
    <h4><strong>Soal 86 - 90 
    <br>Ion Kompleks Heksatiosianatoferat(III)</strong>
    <br>Heksatiosianatoferat(III) dengan rumus molekul Fe(NCS)<sub>6</sub><sup>3-</sup> memiliki struktur geometri oktahedral sebagai berikut:</h4>
    <img src="../images/soal86_1.JPG">
    <h4>Senyawa ini dalam larutan airnya membentuk kesetimbangan sebagai berikut:</h4>
    <img src="../images/soal86_2.JPG">
    <h4>Beberapa penelitian menggunakan ion ini antara lain: Charge-Transfer Spectra yang dilakukan oleh Walker et al. pada 1983 dan penelitian mengenai sintesis [K(Db18C6)(THF)]<sub>3</sub>[Fe(NCS)<sub>6</sub>] yang dilakukan oleh Chekhlov pada tahun 2008.</h4>
        <li>
      <h4 id="soal-86">Konsep asam-basa yang digunakan dalam pembentukan senyawa kompleks adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-86-1" name="iCheck-86" data-soal="86" data-opsi="a">
          <label for="input-86-1"> Arhenius</label>
        </li>
        <li>
          <input type="radio" id="input-86-2" name="iCheck-86" data-soal="86" data-opsi="b">
          <label for="input-86-2"> Bronsted-Lowry</label>
        </li>
        <li>
          <input type="radio" id="input-86-3" name="iCheck-86" data-soal="86" data-opsi="c">
          <label for="input-86-3"> Lewis</label>
        </li>
        <li>
          <input type="radio" id="input-86-4" name="iCheck-86" data-soal="86" data-opsi="d">
          <label for="input-86-4"> Teori atom Bohr</label>
        </li>
        <li>
          <input type="radio" id="input-86-5" name="iCheck-86" data-soal="86" data-opsi="e">
          <label for="input-86-5"> Arhenius dan Lewis</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-87">Pernyataan yang benar dari senyawa kompleks tersebut </h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-87-1" name="iCheck-87" data-soal="87" data-opsi="a">
          <label for="input-87-1"> Atom pusat Fe bertindak sebagai basa</label>
        </li>
        <li>
          <input type="radio" id="input-87-2" name="iCheck-87" data-soal="87" data-opsi="b">
          <label for="input-87-2"> Senyawa kompleks tersebut tidak berwarna</label>
        </li>
        <li>
          <input type="radio" id="input-87-3" name="iCheck-87" data-soal="87" data-opsi="c">
          <label for="input-87-3"> Bilangan koordinasi senyawa kompleks tersebut adalah 6</label>
        </li>
        <li>
          <input type="radio" id="input-87-4" name="iCheck-87" data-soal="87" data-opsi="d">
          <label for="input-87-4"> CNS merupakan asam lunak</label>
        </li>
        <li>
          <input type="radio" id="input-87-5" name="iCheck-87" data-soal="87" data-opsi="e">
          <label for="input-87-5"> Nilai CFSE adalah -20Dq</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-88">Nilai momen magnet senyawa kompleks tersebut adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-88-1" name="iCheck-88" data-soal="88" data-opsi="a">
          <label for="input-88-1"> 0</label>
        </li>
        <li>
          <input type="radio" id="input-88-2" name="iCheck-88" data-soal="88" data-opsi="b">
          <label for="input-88-2"> &#177; 1,73</label>
        </li>
        <li>
          <input type="radio" id="input-88-3" name="iCheck-88" data-soal="88" data-opsi="c">
          <label for="input-88-3"> &#177; 5,92</label>
        </li>
        <li>
          <input type="radio" id="input-88-4" name="iCheck-88" data-soal="88" data-opsi="d">
          <label for="input-88-4"> &#177; 3,87</label>
        </li>
        <li>
          <input type="radio" id="input-88-5" name="iCheck-88" data-soal="88" data-opsi="e">
          <label for="input-88-5"> &#177; 4,9</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-89" style="color: red;">[SOAL DI ANULIR / BONUS] Bilangan oksidasi yang tidak mungkin untuk atom Fe adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-89-1" name="iCheck-89" data-soal="89" data-opsi="a">
          <label for="input-89-1"> +2</label>
        </li>
        <li>
          <input type="radio" id="input-89-2" name="iCheck-89" data-soal="89" data-opsi="b">
          <label for="input-89-2"> +3</label>
        </li>
        <li>
          <input type="radio" id="input-89-3" name="iCheck-89" data-soal="89" data-opsi="c">
          <label for="input-89-3"> +4</label>
        </li>
        <li>
          <input type="radio" id="input-89-4" name="iCheck-89" data-soal="89" data-opsi="d">
          <label for="input-89-4"> +5</label>
        </li>
        <li>
          <input type="radio" id="input-89-5" name="iCheck-89" data-soal="89" data-opsi="e">
          <label for="input-89-5"> +6</label>
        </li>
      </ul>
      <br><br>
    </li>
        <li>
      <h4 id="soal-90">Pernyataan yang benar tentang spliting orbital d pada sistem oktahedal,kecuali...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-90-1" name="iCheck-90" data-soal="90" data-opsi="a">
          <label for="input-90-1"> Energi e<sub>g</sub> lebih tinggi daripada t<sub>2</sub>g</label>
        </li>
        <li>
          <input type="radio" id="input-90-2" name="iCheck-90" data-soal="90" data-opsi="b">
          <label for="input-90-2"> Ligan-ligan masuk ke sistem tepat pada sumbu x,y,dan z</label>
        </li>
        <li>
          <input type="radio" id="input-90-3" name="iCheck-90" data-soal="90" data-opsi="c">
          <label for="input-90-3"> Besarnya pemecahan (spliting) sebesar 10 Dq</label>
        </li>
        <li>
          <input type="radio" id="input-90-4" name="iCheck-90" data-soal="90" data-opsi="d">
          <label for="input-90-4"> Perbedaan energi antara orbital e<sub>g</sub> dan t<sub>2</sub>g dikenal dengan Crystal Field Stabilization Energy</label>
        </li>
        <li>
          <input type="radio" id="input-90-5" name="iCheck-90" data-soal="90" data-opsi="e">
          <label for="input-90-5"> Orbital dz<sup>2</sup>  berada lebih rendah dari orbital dxz</label>
        </li>
      </ul>
      <br><br>
    </li>
      <li>
      <h4 id="soal-91">Sebuah sampel CaCO<sub>3</sub> murni yang mempunyai berat 0,5000 gram dilarutkan dalam asam klorida 1:1, dan larutan ini diencerkan dalam 500 mL labu volumetric. 50 mL alikuot diambil dengan pipet dan ditempatkan dalam labu Erlenmeyer. Larutan ini dititrasi dengan 40,34 mL EDTA dengan indicator Eriochrome Black T (EBT). Maka konsentrasi dari larutan EDTA adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-91-1" name="iCheck-91" data-soal="91" data-opsi="a">
          <label for="input-91-1"> 0,01239 M</label>
        </li>
        <li>
          <input type="radio" id="input-91-2" name="iCheck-91" data-soal="91" data-opsi="b">
          <label for="input-91-2"> 0,00028 M</label>
        </li>
        <li>
          <input type="radio" id="input-91-3" name="iCheck-91" data-soal="91" data-opsi="c">
          <label for="input-91-3"> 1,25000 M</label>
        </li>
        <li>
          <input type="radio" id="input-91-4" name="iCheck-91" data-soal="91" data-opsi="d">
          <label for="input-91-4"> 0,00005 M</label>
        </li>
        <li>
          <input type="radio" id="input-91-5" name="iCheck-91" data-soal="91" data-opsi="e">
          <label for="input-91-5"> 0,00006 M</label>
        </li>
      </ul>
      <br><br>
    </li>
      <li>
      <h4 id="soal-92">Sampel bijih besi yang mempunyai berat 0,6900 g dilarutkan dalam asam, besi direduksi dan larutan ini dititrasi dengan 36,30 mL larutan 0,01000 M K<sub>2</sub>Cr<sub>2</sub>O<sub>7</sub>. Maka persentase besi sebagai besi(III) Oksida adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-92-1" name="iCheck-92" data-soal="92" data-opsi="a">
          <label for="input-92-1"> 25,00&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-92-2" name="iCheck-92" data-soal="92" data-opsi="b">
          <label for="input-92-2"> 25,15&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-92-3" name="iCheck-92" data-soal="92" data-opsi="c">
          <label for="input-92-3"> 25,20&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-92-4" name="iCheck-92" data-soal="92" data-opsi="d">
          <label for="input-92-4"> 25,25&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-92-5" name="iCheck-92" data-soal="92" data-opsi="e">
          <label for="input-92-5"> 25,30&#37;</label>
        </li>
      </ul>
      <br><br>
    </li>
      <li>
      <h4 id="soal-93">Dalam penetapan gravimetri belerang, endapan BaSO<sub>4</sub> yang terbakar kadang-kadang tereduksi secara parsial menjadi BaS. Jika suatu sampel mengandung 32,3&#37; SO<sub>3</sub> dianalisis dan 20,0&#37; dari endapan akhir adalah BaS, maka persentase SO<sub>3</sub> yang terhitung jika diasumsikan bahwa seluruh endapan adalah BaSO<sub>4</sub> yaitu...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-93-1" name="iCheck-93" data-soal="93" data-opsi="a">
          <label for="input-93-1"> 30,0&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-93-2" name="iCheck-93" data-soal="93" data-opsi="b">
          <label for="input-93-2"> 32,3&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-93-3" name="iCheck-93" data-soal="93" data-opsi="c">
          <label for="input-93-3"> 35,0&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-93-4" name="iCheck-93" data-soal="93" data-opsi="d">
          <label for="input-93-4"> 36,5&#37;</label>
        </li>
        <li>
          <input type="radio" id="input-93-5" name="iCheck-93" data-soal="93" data-opsi="e">
          <label for="input-93-5"> 32,0&#37;</label>
        </li>
      </ul>
      <br><br>
    </li>
      <li>
      <h4 id="soal-94">Suatu zat ketika ditambah dengan HCl maka ia mengendap putih, ketika endapan tersebut dipanaskan maka ia larut. Setelah itu ditambahkan kalium kromat dan ternyata ia mengendap kuning. Kation dari zat tersebut adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-94-1" name="iCheck-94" data-soal="94" data-opsi="a">
          <label for="input-94-1"> K<sup>+</sup></label>
        </li>
        <li>
          <input type="radio" id="input-94-2" name="iCheck-94" data-soal="94" data-opsi="b">
          <label for="input-94-2"> Na<sup>+</sup></label>
        </li>
        <li>
          <input type="radio" id="input-94-3" name="iCheck-94" data-soal="94" data-opsi="c">
          <label for="input-94-3"> Ba<sup>2+</sup></label>
        </li>
        <li>
          <input type="radio" id="input-94-4" name="iCheck-94" data-soal="94" data-opsi="d">
          <label for="input-94-4"> Pb<sup>2+</sup></label>
        </li>
        <li>
          <input type="radio" id="input-94-5" name="iCheck-94" data-soal="94" data-opsi="e">
          <label for="input-94-5"> Hg<sub>2</sub><sup>2+</sup></label>
        </li>
      </ul>
      <br><br>
    </li>
      <li>
      <h4 id="soal-95">Jika air minum mengandung 2,5 ppm NaF, maka banyaknya air yang dapat difluorisasi dengan 1,0 lb (454 g) NaF adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-95-1" name="iCheck-95" data-soal="95" data-opsi="a">
          <label for="input-95-1"> 1,8. 10<sup>5</sup> L</label>
        </li>
        <li>
          <input type="radio" id="input-95-2" name="iCheck-95" data-soal="95" data-opsi="b">
          <label for="input-95-2"> 2,0. 10<sup>5</sup> L</label>
        </li>
        <li>
          <input type="radio" id="input-95-3" name="iCheck-95" data-soal="95" data-opsi="c">
          <label for="input-95-3"> 2,5.. 10<sup>5</sup> L</label>
        </li>
        <li>
          <input type="radio" id="input-95-4" name="iCheck-95" data-soal="95" data-opsi="d">
          <label for="input-95-4"> 3,0. 10<sup>5</sup> L</label>
        </li>
        <li>
          <input type="radio" id="input-95-5" name="iCheck-95" data-soal="95" data-opsi="e">
          <label for="input-95-5"> 3,5. 10<sup>5</sup> L</label>
        </li>
      </ul>
      <br><br>
    </li>
         <li>
      <h4 id="soal-96">DuPont Kevlar merupakan suatu polimer yang biasa digunakan untuk rompi anti-peluru. Berikut ini adalah reaksi pembentukan Kevlar.</h4>
      <img src="../images/soal96.JPG">
      <h4>Manakah pertanyaan berikut ini yang salah mengenai Kevlar?</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-96-1" name="iCheck-96" data-soal="96" data-opsi="a">
          <label for="input-96-1"> Gugus fungsi yang menghubungkan antar monomernya adalah gugus amida.</label>
        </li>
        <li>
          <input type="radio" id="input-96-2" name="iCheck-96" data-soal="96" data-opsi="b">
          <label for="input-96-2"> Rantai polimer Kevlar dapat saling berinteraksi dengan ikatan hidrogen.</label>
        </li>
        <li>
          <input type="radio" id="input-96-3" name="iCheck-96" data-soal="96" data-opsi="c">
          <label for="input-96-3"> Rantai polimer Kevlar dapat saling berinteraksi dengan tumpukan cincin aromatik.</label>
        </li>
        <li>
          <input type="radio" id="input-96-4" name="iCheck-96" data-soal="96" data-opsi="d">
          <label for="input-96-4"> Reaksi polimerisasi Kevlar merupakan reaksi polimerisasi yang berlangsung secara radikal.</label>
        </li>
        <li>
          <input type="radio" id="input-96-5" name="iCheck-96" data-soal="96" data-opsi="e">
          <label for="input-96-5"> Kevlar dapar terhidrolisis menghasilkan asam 1,4-benzenadioat dan 1,4-fenilenadiamina.</label>
        </li>
      </ul>
      <br><br>
    </li>
         <li>
      <h4 id="soal-97">Getah sundi (Payena leerii) merupakan salah satu tumbuhan asli nusantara selain tumbuhan Getah perca (Palaquium sp.) yang getahnya banyak mengandung polimer trans-poliisoprena. Berikut ini struktur dari poliisoprena.</h4>
      <img src="../images/soal97.JPG">
      <h4>Bagaimanakah struktur dari monomer trans-poliisoprena.</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-97-1" name="iCheck-97" data-soal="97" data-opsi="a">
          <label for="input-97-1"> <img src="../images/soal97_a.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-97-2" name="iCheck-97" data-soal="97" data-opsi="b">
          <label for="input-97-2"> <img src="../images/soal97_b.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-97-3" name="iCheck-97" data-soal="97" data-opsi="c">
          <label for="input-97-3"> <img src="../images/soal97_c.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-97-4" name="iCheck-97" data-soal="97" data-opsi="d">
          <label for="input-97-4"> <img src="../images/soal97_d.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-97-5" name="iCheck-97" data-soal="97" data-opsi="e">
          <label for="input-97-5"> <img src="../images/soal97_e.JPG"></label>
        </li>
      </ul>
      <br><br>
    </li>
         <li>
      <h4 id="soal-98">Aspirin merupakan suatu obat antiinflamasi non-steroid yang paling banyak diproduksi. Bayer telah mempatenkan metode sintesis aspirin skala industri. Metodenya adalah mereaksikan asam salisilat dengan asetat anhidrida. Berikut ini reaksinya</h4>
      <img src="../images/soal98.JPG">
      <h4>Langkah terbaik lainnya untuk mensintesis aspirin adalah...</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-98-1" name="iCheck-98" data-soal="98" data-opsi="a">
          <label for="input-98-1"> Mereaksikan asam asetat dengan asam salisilat dengan katalis asam.</label>
        </li>
        <li>
          <input type="radio" id="input-98-2" name="iCheck-98" data-soal="98" data-opsi="b">
          <label for="input-98-2"> Mereaksikan etanamida dengan asam salisilat.</label>
        </li>
        <li>
          <input type="radio" id="input-98-3" name="iCheck-98" data-soal="98" data-opsi="c">
          <label for="input-98-3"> Mereaksikan etanoil klorida dengan asam salisilat.</label>
        </li>
        <li>
          <input type="radio" id="input-98-4" name="iCheck-98" data-soal="98" data-opsi="d">
          <label for="input-98-4"> Mereaksikan o-klorobenzoat dengan garam Natrium asetat.</label>
        </li>
        <li>
          <input type="radio" id="input-98-5" name="iCheck-98" data-soal="98" data-opsi="e">
          <label for="input-98-5"> Mereaksikan etiletanoat dengan asam salisilat.</label>
        </li>
      </ul>
      <br><br>
    </li>
    <h4><strong>Untuk No. 99 - 100</strong>
    <br>Capsaicin merupakan senyawa yang terkandung dalam cabai. Capsaicin ini yang memberikan sensasi rasa pedas pada cabai. Berikut ini strukturnya.</h4>
    <img src="../images/soal99.JPG">
         <li>
      <h4 id="soal-99">Bagaimana struktur produk aromatik yang didapatkan dari hidrolisis Capsaicin dalam suasana basa?</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-99-1" name="iCheck-99" data-soal="99" data-opsi="a">
          <label for="input-99-1"> <img src="../images/soal99_a.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-99-2" name="iCheck-99" data-soal="99" data-opsi="b">
          <label for="input-99-2"> <img src="../images/soal99_b.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-99-3" name="iCheck-99" data-soal="99" data-opsi="c">
          <label for="input-99-3"> <img src="../images/soal99_c.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-99-4" name="iCheck-99" data-soal="99" data-opsi="d">
          <label for="input-99-4"> <img src="../images/soal99_d.JPG"></label>
        </li>
        <li>
          <input type="radio" id="input-99-5" name="iCheck-99" data-soal="99" data-opsi="e">
          <label for="input-99-5"> <img src="../images/soal99_e.JPG"></label>
        </li>
      </ul>
      <br><br>
    </li>
         <li>
      <h4 id="soal-100">Capsaicin tersebut memiliki kelarutan paling tinggi pada pelarut?</h4>
      <ul class="list-unstyled">
        <li>
          <input type="radio" id="input-100-1" name="iCheck-100" data-soal="100" data-opsi="a">
          <label for="input-100-1"> Metanol</label>
        </li>
        <li>
          <input type="radio" id="input-100-2" name="iCheck-100" data-soal="100" data-opsi="b">
          <label for="input-100-2"> Etanol</label>
        </li>
        <li>
          <input type="radio" id="input-100-3" name="iCheck-100" data-soal="100" data-opsi="c">
          <label for="input-100-3"> Air</label>
        </li>
        <li>
          <input type="radio" id="input-100-4" name="iCheck-100" data-soal="100" data-opsi="d">
          <label for="input-100-4"> Diklorometana</label>
        </li>
        <li>
          <input type="radio" id="input-100-5" name="iCheck-100" data-soal="100" data-opsi="e">
          <label for="input-100-5"> Gliserol</label>
        </li>
      </ul>
      <br><br>
    </li>
  </ol>
      <div class="endofpage"></div>
    </div>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
 <!-- Include all compiled plugins (below), or include individual files 
 as needed -->
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68080729-1', 'auto');
  ga('send', 'pageview');

</script>
 <script src="../js/bootstrap.min.js"></script>
<script>
//untuk page
  $(document).ready(function(){
    $('.div-soal').hide();
    $('#page-1').show();
    sync_jawaban();
    cek_waktu();
  });

  $('#pagination-demo').twbsPagination({
      totalPages: 5,
      visiblePages: 5,
      onPageClick: function (event, page) {
          $('.div-soal').hide();
          var pg = "#page-" + page;
          $(pg).show();
      }
  });
//end of page

  $(document).ready(function(){
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-pink',
      radioClass: 'iradio_square-pink',
      increaseArea: '20%' // optional
    });
  });

  var jawaban = "";
  $('input').on('ifClicked', function(event){
    if ($(this).is(':checked')) {
      $(this).iCheck('uncheck');
    };
  });

  $('input').on('ifChecked', function(event){
    jawaban = jawaban + $(this).attr( "data-soal" ) + $(this).attr( "data-opsi" ) + "-" ;
  });

  var temp="";
  // setInterval(function () {
  //   var formData2 = {uip:<?php echo $id_peserta_ujian; ?>};
  //   $.ajax(
  //   {
  //     url : "functions/get_jawaban.php",
  //     type: "POST",
  //     data : formData2,
  //     dataType : "json",
  //     success: function(data, textStatus, jqXHR)
  //     {
  //       if (temp!=data) {
  //         var arr = data.split('-');
  //         var p = ""
  //         for (var i = 0; i < (arr.length-1); i++) {
  //           var str = arr[i];
  //           var opsi = str.slice(-1);
  //           var soal = str.replace(opsi,"");
  //           $('input[data-soal='+soal+'][data-opsi='+opsi+']').iCheck('check');
  //           jawaban = jawaban.replace(soal+opsi+'-', "");
  //         };
  //         temp = data;
  //       };
  //         // $('#info').html(data + " "+p);
  //     },
  //     error: function(jqXHR, textStatus, errorThrown)
  //     {
  //       $('#info').html("DISSCONNECT-2");
  //     }
  //   });
  // }, 18000);  

  // setInterval(function () {
  //   var formData = {uip:<?php echo $id_peserta_ujian; ?>, jawaban:jawaban, times:<?php echo $waktu; ?>};
  //   $.ajax(
  //   {
  //     url : "functions/save_jawaban.php",
  //     type: "POST",
  //     data : formData,
  //     dataType : "json",
  //     success: function(data, textStatus, jqXHR)
  //     {
  //       // $('#info').html(data);
  //       // $('#info').html("saving ..");
  //       if (data=='1') {
  //         location.replace("<?php echo $base_url_before; ?>?msg=selesai");
  //         // alert("Waktu Anda telah habis");
  //       } else {
          
  //       }
  //     },
  //     error: function(jqXHR, textStatus, errorThrown)
  //     {
  //       $('#info').html("DISSCONNECT-1");
  //     }
  //   });
  //   jawaban = "";
  //   // location.replace("http://www.w3schools.com");
  // }, 20000);  

  // setInterval(function () {
  //   var formData3 = {times:<?php echo $waktu; ?>};
  //   $.ajax(
  //   {
  //     url : "functions/clock.php",
  //     type: "POST",
  //     data : formData3,
  //     dataType : "json",
  //     success: function(data, textStatus, jqXHR)
  //     {
  //       if (data=='1') {
  //         location.replace("<?php echo $base_url_before; ?>?msg=selesai");
  //         // alert("Waktu Anda telah habis");
  //       } else {
          
  //       }
  //       // $('#info').html(data);
  //     },
  //     error: function(jqXHR, textStatus, errorThrown)
  //     {
  //       $('#info').html("DISSCONNECT - 0");
  //     }
  //   });
  // }, 6000); 
  
  setInterval(function () {
    cek_waktu();
  }, 6000); 

  function cek_waktu(){
    var formData3 = {times:<?php echo $waktu; ?>};
    $.ajax(
    {
      url : "../functions/clock.php",
      type: "POST",
      data : formData3,
      dataType : "json",
      success: function(data, textStatus, jqXHR)
      {
        if (data=='1') {
          save_jawaban_button();
          location.replace("<?php echo $base_url; ?>dashboard/?msg=selesai");
        } else {
          
        }
        // $('#info').html(data);
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        // $('#info').html("DISSCONNECT - 0");
      }
    });
  }

  function logout(){
    save_jawaban_button();
    location.replace("<?php echo $base_url; ?>dashboard/?msg=selesai");
  }

  function save_jawaban_button() {
    var formData = {uip:<?php echo $id_peserta_ujian; ?>, jawaban:jawaban, times:<?php echo $waktu; ?>};
    $.ajax(
    {
      url : "../functions/save_jawaban.php",
      type: "POST",
      data : formData,
      dataType : "json",
      success: function(data, textStatus, jqXHR)
      {
        // $('#info').html(data);
        // $('#info').html("saving ..");
        if (data=='1') {
          location.replace("<?php echo $base_url_before; ?>?msg=selesai");
          // alert("Waktu Anda telah habis");
        } else {
          sync_jawaban();
          alert("Data tersimpan");
        }
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        $('#info').html("DISSCONNECT (1) - Please refresh!");
      }
    });
    jawaban = "";
  }

  // untuk sync
  var jawaban_soal = new Array();
  function sync_jawaban(){
    $.ajax(
    {
      url : "../functions/get_jawaban.php",
      dataType : "json",
      success: function(data, textStatus, jqXHR)
      {
        if (temp!=data) {
          var arr = data.split('-');
          var p = "";
          jawaban_soal = new Array();
          for (var i = 0; i < (arr.length-1); i++) {
            var str = arr[i];
            var opsi = str.slice(-1);
            var soal = str.replace(opsi,"");
            if (jawaban_soal.indexOf(soal)==-1) {
              jawaban_soal.push(soal);
            };
            $('input[data-soal='+soal+'][data-opsi='+opsi+']').iCheck('check');
            jawaban = jawaban.replace(soal+opsi+'-', "");
          };
          temp = data;
          document.getElementById('n_terjawab').innerHTML = ": "+jawaban_soal.length+" butir";
          document.getElementById('n_kosong').innerHTML = ": "+(100-jawaban_soal.length)+" butir"; 
        };
          // $('#info').html(data + " "+p);
      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        $('#info').html("DISSCONNECT (2) - Please refresh!");
      }
    });
  }
</script>
</html>