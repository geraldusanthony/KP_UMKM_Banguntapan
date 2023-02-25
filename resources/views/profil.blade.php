<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
}

.btn:hover {opacity: 0.6}

.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 750px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.topnav {
  overflow: hidden;
  background: rgb(255,255,255);
  background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(248,210,14,1) 100%);
  
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 40px 25px;
  text-decoration: none;
  font-size: 18px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #FB9B0A;
  color: white;
}

.topnav .search-container {
  float: right;
  padding-top: 25px;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #FB9B0A;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.container:hover .overlay {
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }

  div.img {
    position: absolute;
    width: 875px;
    height: 451px;
    left: 34px;
    top: 224px;
   }
 }

.kegiatan{
  background-color: #FFFFFF;
  width:100%;
  height: 450px;
  margin: auto;
  padding: auto;
}
 
.deskripsi{
  background-color: #F8D20E;
  width:100%;
  height: 600px;
  position: relative;
  margin: auto;
  padding: auto;
}

.keterangan{ 
  background-color: #FFFFFF;
  width:100%;
  height: 500px;
  margin: auto;
  padding: auto;

}

.video{ 
  width:100%;
  height: 500px;
  position: center;
  margin: auto;
  padding: auto;

}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons*/
button {
  background-color: #FFA500;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;

}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.login{
  background-color: white
  background-color: ;
  height: 400px;
  position: center;
  margin: auto;
  padding: auto;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.galeri{ 
  background-color:;
  width:100%;
  position: center;
  margin: auto;
  padding: auto;

}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.mySlides {
  border: 5px solid #F8D20E;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.parent {
  position: relative;
}

.absolute {
  position: absolute;
  top: 10px;
  right: 10px;
  z-index: 1;
}


</style>
</head>
<body>

<div id="home" class="topnav">
<img src="asset\images\logo2.svg" alt="Logo2" style="width: 30%">  
  <a href="#home">Home</a>
  <a href="#login">Login</a>
  <a href="#produk">Produk</a>
  <a href="#keterangan">Tentang</a>
  <a href="#galeri">Galeri</a>
  <a href="#kontak">Kontak</a>
</div>

<!-- The App Section -->
<div  class="w3-padding-64 w3-white">
  <div class="w3-row-padding">
    <div class="w3-col l6 m6">
      <img src="asset\images\berita.jpg" class="w3-image w3-right w3-hide-small" width="6000" height="6000" onclick="onClick(this)">
    </div>
    <div class="w3-col l6 m6">
      <h2 class="w3-jumbo"><b>Kegiatan Kami</b></h2>
      <h4 class="w3-xlarge w3-text-black text-justify">Anggota UMKM Pasar kamis Banguntapan bersama Bapak Panewu ikut merayakan
      Hari Keistimewaan Yogyakarta yang di selenggarakan pada Tanggal 31 Agustus
      2022</h4>
    </div>
  </div>
</div>

<div id="login" class="login">
  <h1 style="text-align: center; padding: 30pt; padding-top:50px;"><span class="w3-xlarge w3-border-teal w3-bottombar ">SILAHKAN UNTUK LOGIN</span></h1>
  <button id="myBtn" class="button"><span>Login </span></button>
<div id="myModal" class="modal">
    <form class="modal-content" action="/admin">
    <div class="imgcontainer">
      <span onclick="document.getElementById('myModal').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="asset\images\logo2.png" alt="Avatar" class="avatar">
    </div>
    
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Masukkan Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password" name="psw" required>
        
      <button href="/admin" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    <div class="modal-content" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('myModal').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
  </div>
 
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!-- About Section -->
<div id="produk" class="deskripsi" style="padding:70px 5px">
  <h3 class="w3-center"><b>PRODUK UMKM PASAR KAMIS BANGUNTAPAN</b></h3>
  <p class="w3-center w3-large">Terdapat beberapa jenis produk yang disediakan oleh UMKM pada Pasar Kamis</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-cutlery w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Makanan</p>
      <p class="text-justify">Pada produk makanan terdapat banyak varian yang disediakan berbagai macam snack seperti roti, 
        onde-onde,keripik dan masih banyak pilihan lain.
        Selain itu juga terdapat makanan berat seperti nasi ayam geprek, mie letek, lele presto dan lain-lain.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-glass w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Minuman</p>
      <p class="text-justify">Pada produk minuman terdapat aneka jenis jus buah, ada juga minuman pengganti ion tubuh yaitu legen kelapa, 
        beberapa minuman herbal, dan masih banyak lagi.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Kerajinan</p>
      <p class="text-justify">Pada produk kerajinan terdapat beberapa pilihan kerajinan seperti tempat tissue, tatakan gelas, botol pewangi atau parfum
        dan masih banyak produk kerajinan lainnya.
      </p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-shopping-bag w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Pakaian</p>
      <p class="text-justify">Pada produk pakaian terdapat beberapa jenis seperti kemeja bemotif batik.</p>
    </div>
  </div>
</div>


<div id="keterangan" class="keterangan">
<h2 style="text-align: center; padding: 10pt; padding-top:50px"><b>PASAR KAMIS BANGUNTAPAN</b></h2>
<h2 style="text-align: center; padding: 10pt; padding-top:0px">Apa saja manfaat bergabung di komunitas Pasar Kamis ini?</h2>
<h5 class="text-justify" style="text-align: center; padding: 10pt; padding-top:0px">
Dengan adanya pasar UMKM ini pada dasarnya bertujuan untuk
memfasilitasi dan mendorong para pedagang untuk tetap memiliki harapan 
kedepannya serta semangat dalam berusaha di tengah situasi pamdemi covid 19.
selain itu, Pasar Kamis Banguntapan Bantul juga bertujuan untuk 
mengenalkan produk para pedagang ke konsumen yang lebih luas. 
tidak hanya masyarakat sekitar kecamatan Banguntapan saja yang
menjadi pengunjung Pasar UMKM ini, tetapi juga masyarakat dari 
wilayah kecamatan lain. </h5>

<video id="keterangan" class="video" controls> 
  <source src="asset\images\umkm.mp4" type="video/mp4">
</video>

<div id="galeri" class="galeri">
  <h1 style="text-align: center; padding: 10pt; padding-top:50px"><span class="w3-xlarge w3-border-teal w3-bottombar">GALERI PRODUK</span></h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="asset\images\produk1.jpg" alt="Lemper Gentho">
      <div class="carousel-caption">
          <h3>Lemper</h3>
          <p>Produk Olahan asli!</p>
          <button class="btn">Pesan Sekarang!</button>
        </div>
    </div>

    <div class="item">
      <img src="asset\images\produk2.jpg" alt="L'GEN BRO">
      <div class="carousel-caption">
          <h3>L'GEN BRO</h3>
          <p>Minuman Air Kelapa dengan Rasa UNIK dan MENYEGARKAN!</p>
          <button class="btn">Pesan Sekarang!</button>
        </div>
    </div>

    <div class="item">
      <img src="asset\images\produk3.jpg" alt="Mocafa">
      <div class="carousel-caption">
          <h3>MOCAFA</h3>
          <p>Kue Cookies Asli Buatan BANGUNTAPAN!</p>
          <button class="btn">Pesan Sekarang!</button>
        </div>
    </div>

    <div class="item">
      <img src="asset\images\produk4.jpg" alt="ondeonde">
      <div class="carousel-caption">
          <h3>ONDE ONDE MINI</h3>
          <p>Onde Onde Mini dengan Rasa Manis dan UENAK!</p>
          <button class="btn">Pesan Sekarang!</button>
        </div>
    </div>

    <div class="item">
      <img src="asset\images\produk5.jpg" alt="kripiktahu">
      <div class="carousel-caption">
          <h3>KRIPIK TAHU</h3>
          <p>ASLI TAHU!</p>
          <button class="btn">Pesan Sekarang!</button>
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- Contact Container -->
<div id="kontak" class="w3-container w3-padding-64 w3-theme-l7">
  <div class="w3-row">
    <div class="w3-col m5" >
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">LOKASI PASAR KAMIS BANGUNTAPAN</span></div>
    <div class="w3-container w3-card-4 w3-padding-16 w3-white w3-col m10">
    <h3>Alamat</h3>
      <p><i class="fa fa-map-marker fa-fw w3-text-red w3-xlarge"></i>  Jl. Karangturi, Karangturi, Baturetno Kec. Banguntapan, Bantul</p>
      <p><i class="fa fa fa-fw w3-text-red w3-xlarge"></i>  D.I Yogyakarta</p>
      <p><i class="fa fa-phone fa-fw w3-text-blue w3-xlarge"></i>  0274-375196  Fax (0274)386947</p>
      <p><i class="fa fa-envelope fa-fw w3-text-yellow w3-xlarge"></i>  kec.banguntapan@bantulkab.go.id</p>
      <p><i class="fa fa-instagram fa-fw w3-text-pink w3-xlarge"></i>  <a href="https://www.instagram.com/pasarkamis_umkmbanguntapan/" target="_blank" class="w3-hover-text-yellow">pasarkamis_umkmbanguntapan</a></p>
      <p><i class="fa fa-facebook fa-fw w3-text-blue w3-xlarge"></i>  <a href="https://www.facebook.com/people/pasarkamis_umkmbanguntapan/100076398445227/?paipv=0&eav=Afae-XohiUq5VJScy_MD1tIy-8Y2PV2iwiyYTtg3t0PzloBzOqWqcTFDt_xLclm0V-s&_rdr" target="_blank" class="w3-hover-text-yellow">pasarkamis_umkmbanguntapan</a></p>
    </div>
      
    </div>


    <div class="w3-col m7">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Kritik & Saran</span></div>
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/kritiksaran" target="" method="POST">
      {{csrf_field()}}
      <div class="w3-section">      
        <label>Nama</label>
        <input class="w3-input" type="text" name="nama">
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="email">
      </div>
      <div class="w3-section">      
        <label>Pesan</label>
        <input class="w3-input" type="text" name="pesan">
      </div>  
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> KIRIM 
        </button>
      </form>
    </div>
  </div>
</div>

<h1 style="text-align: center; padding: 10pt; padding-top:50px"><span class="w3-xlarge w3-border-teal w3-bottombar">LOKASI KAMI</span></h1>
<div class="parent">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15810.530108037372!2d110.4109384!3d-7.8286609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ebbfa
  2f2709c271!2sPasar%20Kamis%20UMKM%20Banguntapan!5e0!3m2!1sid!2sid!4v1673419948909!5m2!1sid!2sid" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
  <div class="absolute">
  </div>
</div>

<footer class="w3-container w3-padding-25 w3-light-yellow w3-center">
  <a href="#" class="w3-button w3-orange w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>Kembali Ke Atas</a>
</footer>


</div>
</body>
</html>
