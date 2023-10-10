<!DOCTYPE html>
<html>

<head>
  <title>Peta Wisata</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    html,
    body,
    #map {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <div id="map"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  {{-- <script src="{{ url('') }}/js/mapWisata.js"></script> --}}


  {{-- MENAMPILKAN PETA LOKASI PER TITIK WISATA SECARA MANUAL --}}
  <script>
  // Inisialisasi peta
var map = L.map('map').setView([-7.79730496830874, 110.16600779279906], 11)
map.setZoom(12)
// Tambahkan layer peta dari OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '© OpenStreetMap contributors'
}).addTo(map)

// Tambahkan penanda lokasi wisata
// var marker1 = L.marker([-7.645234464650813, 110.14219997462669]).addTo(map)
// marker1.bindPopup(
//   "<b><a href='https://goo.gl/maps/whUc5F1yyKCBSiE99' target='_blank'>Gunung Jaran Nglinggo</a></b><br>Nglinggo, Samigaluh, Kulon Progo<br>"
// )

var popupContent1 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipOMy52CJVaisKOV2RwXtFRVCH9BgUofdSFkhpzI=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gunung Jaran Nglinggo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/whUc5F1yyKCBSiE99" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker1 = L.marker([-7.645234464650813, 110.14219997462669]).addTo(map)
marker1.bindPopup(popupContent1)

// var marker2 = L.marker([-7.64704560848646, 110.14146989634132]).addTo(map)
// marker2.bindPopup(
//   "<b><a href='https://goo.gl/maps/68hXCm2eMNQLQEHj9' target='_blank'>Kebun Teh Nglinggo</a></b><br>Pagerharjo, Samigaluh, Kulon Progo<br>"
// )

var popupContent2 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipMyJspgFhnWRb5vivdL_zeFjYweI8PAK1mkk77Y=w408-h261-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kebun Teh Nglinggo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/68hXCm2eMNQLQEHj9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker2 = L.marker([-7.64704560848646, 110.14146989634132]).addTo(map)
marker2.bindPopup(popupContent2)

// var marker3 = L.marker([-7.64766766311964, 110.1418775921116]).addTo(map)
// marker3.bindPopup(
//   "<b><a href='https://goo.gl/maps/qN5ftHVdrzGtt7dH9' target='_blank'>Desa Wisata Nglinggo</a></b><br>Pagerharjo, Samigaluh, Kulon Progo<br>"
// )

var popupContent3 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipN8Y28ber54O2_8yLJJz_tFWT04_ICf9zmemM7Y=w408-h272-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Desa Wisata Nglinggo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/qN5ftHVdrzGtt7dH9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker3 = L.marker([-7.64766766311964, 110.1418775921116]).addTo(map)
marker3.bindPopup(popupContent3)

// var marker4 = L.marker([-7.6583108962018045, 110.14881364996069]).addTo(map)
// marker4.bindPopup(
//   "<b><a href='https://goo.gl/maps/K38Kx2EPh1EyA4vx5' target='_blank'>Puncak Widosari</a></b><br>Ngargosari, Samigaluh, Kulon Progo<br>"
// )

var popupContent4 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipPr0XNWDPDDEMXUdDEUjLt70CNj0CFtJQbtKqU_=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Puncak Widosari</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/K38Kx2EPh1EyA4vx5" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker4 = L.marker([-7.6583108962018045, 110.14881364996069]).addTo(map)
marker4.bindPopup(popupContent4)

// var marker5 = L.marker([-7.646323589179038, 110.18106189753912]).addTo(map)
// marker5.bindPopup(
//   "<b><a href='https://goo.gl/maps/iYww1WF63Z9g1z8i7' target='_blank'>Puncak Suroloyo</a></b><br>Keceme, Gerbosari, Kec. Samigaluh, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55673<br>"
// )

var popupContent5 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipPWHtF__SAbo0LfW3A1njEFKOpKtg8QGa_-u17H=w408-h272-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Puncak Suroloyo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/iYww1WF63Z9g1z8i7" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker5 = L.marker([-7.646323589179038, 110.18106189753912]).addTo(map)
marker5.bindPopup(popupContent5)

// var marker6 = L.marker([-7.669856270781379, 110.20190820005575]).addTo(map)
// marker6.bindPopup(
//   "<b><a href='https://goo.gl/maps/eo5kL5MV7ddnZQa69' target='_blank'>Air Terjun Sidoharjo</a></b><br>Sumoroto, Sidoharjo, Kec. Samigaluh, Kabupaten Kulon Progo<br>"
// )

var popupContent6 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipNns1XKWbJNCSNJcCzBJEtb4cQy2ICsutULymt9=w408-h305-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Air Terjun Sidoharjo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/eo5kL5MV7ddnZQa69" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker6 = L.marker([-7.669856270781379, 110.20190820005575]).addTo(map)
marker6.bindPopup(popupContent6)

// var marker7 = L.marker([-7.667838517842667, 110.22571343158228]).addTo(map)
// marker7.bindPopup(
//   "<b><a href='https://goo.gl/maps/j6SA8mNw7CdbkaR46' target='_blank'>Sendangsono, Dari Transformasi Rohani Sampai dengan Penghargaan Arsitektur</a></b><br>Samagang,Banjaroyo, Kec. Kalibawang, Kabupaten Kulon Progo<br>"
// )

var popupContent7 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipNMv5vvlwIP91gU3IJAikOLEVBvewWakXHEk6ks=w426-h240-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sendangsono</h5>
    <p class="card-text">Dari Transformasi Rohani Sampai dengan Penghargaan Arsitektur</p>
    <a href="https://goo.gl/maps/j6SA8mNw7CdbkaR46" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker7 = L.marker([-7.667838517842667, 110.22571343158228]).addTo(map)
marker7.bindPopup(popupContent7)

// var marker8 = L.marker([-7.658807722570394, 110.23485753251103]).addTo(map)
// marker8.bindPopup(
//   "<b><a href='https://goo.gl/maps/iow3hBPTzTQXNaoB8' target='_blank'>WADUK MINI EMBUNG BANJAROYA</a></b><br>Jl. Kalibawang-Sendang Sono, Tonogoro, Banjaroyo, Kec. Kalibawang, Kabupaten Kulon Progo<br>"
// )

var popupContent8 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipMXAZ5ur0u9Pgz24D2ZMNhcqipAbjc2Zfjm94xm=w408-h272-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Waduk Mini Embung Banjaroyo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/iow3hBPTzTQXNaoB8" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker8 = L.marker([-7.658807722570394, 110.23485753251103]).addTo(map)
marker8.bindPopup(popupContent8)

// var marker9 = L.marker([-7.720219245595465, 110.23059749826389]).addTo(map)
// marker9.bindPopup(
//   "<b><a href='https://goo.gl/maps/oUmu3hXo2p9sV4JF9' target='_blank'>Arus Progo Rafting</a></b><br>Banjararum, Kalibawang, Kabupaten Kulon Progo<br>"
// )

var popupContent9 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipMCvdrudad329rDA8LWHgqxrw4fozPGcHz41-eP=w408-h290-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Arus Progo Rafting</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/oUmu3hXo2p9sV4JF9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker9 = L.marker([-7.720219245595465, 110.23059749826389]).addTo(map)
marker9.bindPopup(popupContent9)

// var marker10 = L.marker([-7.721120405156501, 110.14800348425224]).addTo(map)
// marker10.bindPopup(
//   "<b><a href='https://goo.gl/maps/TnDZ1Ms9JXpPfLef9' target='_blank'>Gua Maria Lawangsih</a></b><br>Patihombo, Purwosari, Kec. Girimulyo, Kabupaten Kulon Progo<br>"
// )

var popupContent10 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipNlb8Rl70mZWOKbR-FP6WHp-ul4X0tLErpFxsBB=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gua Maria Lawangsih</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/TnDZ1Ms9JXpPfLef9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker10 = L.marker([-7.721120405156501, 110.14800348425224]).addTo(map)
marker10.bindPopup(popupContent10)

// var marker11 = L.marker([-7.740284495509217, 110.14558343580595]).addTo(map)
// marker11.bindPopup(
//   "<b><a href='https://goo.gl/maps/hFbqTyUZsXGwxrJt9' target='_blank'>Air Terjun Setawing</a></b><br>Jl. Jonggrangan, Gendu, Jatimulyo, Kec. Girimulyo, Kabupaten Kulon Progo<br>"
// )

var popupContent11 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipMgfjnQ4rsDZ1FgTLiGmCB9Wo7geZlb0ALNS-kL=w300-h225-p-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Air Terjun Setawing</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/hFbqTyUZsXGwxrJt9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker11 = L.marker([-7.740284495509217, 110.14558343580595]).addTo(map)
marker11.bindPopup(popupContent11)

// var marker12 = L.marker([-7.747104502125084, 110.13101508096155]).addTo(map)
// marker12.bindPopup(
//   "<b><a href='https://goo.gl/maps/vqkrq6ba6XmNvddH8' target='_blank'>Goa Kiskendo</a></b><br>Jl. Raya Kaligesing, Sokomoyo, Jatimulyo, Kec. Girimulyo, Kabupaten Kulon Progo<br>"
// )

var popupContent12 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipOV_3PwoLKXY-Il3zfjszjOBG8gx1r1-CRSInBb=w359-h269-p-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Goa Kiskendo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/vqkrq6ba6XmNvddH8" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker12 = L.marker([-7.747104502125084, 110.13101508096155]).addTo(map)
marker12.bindPopup(popupContent12)

// var marker13 = L.marker([-7.7519626275928495, 110.13582373224058]).addTo(map)
// marker13.bindPopup(
//   "<b><a href='https://goo.gl/maps/uDMupSAUwyFaUg3t9' target='_blank'>Air Terjun Grojogan Sewu Jatimulyo</a></b><br>Beteng, Jatimulyo, Kec. Girimulyo, Kabupaten Kulon Progo<br>"
// )

var popupContent13 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipOaTW0QOFwpeJUqQymC6Wui7p7kQQur0DifCNXA=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Air Terjun Grojogan Sewu Jatimulyo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/uDMupSAUwyFaUg3t9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker13 = L.marker([-7.7519626275928495, 110.13582373224058]).addTo(map)
marker13.bindPopup(popupContent13)

// var marker14 = L.marker([-7.766423763439383, 110.11756082419045]).addTo(map)
// marker14.bindPopup(
//   "<b><a href='https://goo.gl/maps/rqEqyHY6kZYBEpVCA' target='_blank'>Air Terjun Kembang Soka</a></b><br>Jl. Raya Kaligesing, Banyunganti, Jatimulyo, Kec. Girimulyo, Kabupaten Kulon Progo<br>"
// )

var popupContent14 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipMZfMu7UfRPxCUqw9Re7685cXnP_tIEhXV7BKfE=w408-h305-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Air Terjun Kembang Soka</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/rqEqyHY6kZYBEpVCA" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker14 = L.marker([-7.766423763439383, 110.11756082419045]).addTo(map)
marker14.bindPopup(popupContent14)

// var marker15 = L.marker([-7.769984277311342, 110.12106702457784]).addTo(map)
// marker15.bindPopup(
//   "<b><a href='https://goo.gl/maps/My7vt84f1cui4o8T7' target='_blank'>KEDUNG PEDUT</a></b><br>Jl. Kutogiri Gunung Kelir, Kembang, Jatimulyo, Kec. Girimulyo, Kabupaten Kulon Progo<br>"
// )

var popupContent15 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipMu7qFSHyps84KO83MLA9OYm3DI-_k8Akd_HluE=w408-h272-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Kedung Pedut</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/My7vt84f1cui4o8T7" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker15 = L.marker([-7.769984277311342, 110.12106702457784]).addTo(map)
marker15.bindPopup(popupContent15)

// var marker16 = L.marker([-7.7778020543006665, 110.16345672029072]).addTo(map)
// marker16.bindPopup(
//   "<b><a href='https://goo.gl/maps/Mh8cKw9puEDg6KQW8' target='_blank'>Embung Kleco</a></b><br>Ngesong, Giripurwo, Kec. Girimulyo, Kabupaten Kulon Progo<br>"
// )

var popupContent16 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipPGgkY41KNUW3ntJQl3CjMNlNcBQ8fOhA7JSW3T=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Embung Kleco</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/Mh8cKw9puEDg6KQW8" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker16 = L.marker([-7.7778020543006665, 110.16345672029072]).addTo(map)
marker16.bindPopup(popupContent16)

// var marker17 = L.marker([-7.799945087837185, 110.12376852460068]).addTo(map)
// marker17.bindPopup(
//   "<b><a href='https://goo.gl/maps/LD7FddvsKrMU7akh9' target='_blank'>Bukit Wisata Pulepayung</a></b><br>Soropati RT.007/RW.003, Clapar 2, Hargotirto, Kec. Kokap, Kabupaten Kulon Progo<br>"
// )

var popupContent17 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipNX7vz9yh16-c7F1B2umDFfoPzRxhCMK2dS4zGd=w426-h240-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bukit Wisata Pulepayung</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/LD7FddvsKrMU7akh9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker17 = L.marker([-7.799945087837185, 110.12376852460068]).addTo(map)
marker17.bindPopup(popupContent17)

// var marker18 = L.marker([-7.800319974991011, 110.12812197030233]).addTo(map)
// marker18.bindPopup(
//   "<b><a href='https://goo.gl/maps/MW6EFL8AHvQWeA366' target='_blank'>Canting Mas Puncak Dipowono</a></b><br>Jl. Clereng Tamanan KM. 6, Desa Hargowilis, Kokap, Clapar 2, Hargowilis, Kec. Kokap, Kabupaten Kulon Progo<br>"
// )

var popupContent18 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipOL61kX0rF414YmDmk7L1WWZiZ9Y1peZSxkCmrt=w408-h244-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Canting Mas Puncak Dipowono</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/MW6EFL8AHvQWeA366" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker18 = L.marker([-7.800319974991011, 110.12812197030233]).addTo(map)
marker18.bindPopup(popupContent18)

// var marker19 = L.marker([-7.80742189220232, 110.12926819474333]).addTo(map)
// marker19.bindPopup(
//   "<b><a href='https://goo.gl/maps/FQfKy3vkyMwY4Rs79' target='_blank'>Wisata Alam Kalibiru</a></b><br>Jalan Waduk Sermo, Kalibiru, Hargowilis, Kec. Kokap, Kabupaten Kulon Progo<br>"
// )

var popupContent19 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipMB_wqU_nif6LAfX6LvM1s2AaYifjQKs7r-LYwH=w408-h251-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wisata Alam Kalibiru</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/FQfKy3vkyMwY4Rs79" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker19 = L.marker([-7.80742189220232, 110.12926819474333]).addTo(map)
marker19.bindPopup(popupContent19)

// var marker20 = L.marker([-7.817648521314486, 110.11281556590808]).addTo(map)
// marker20.bindPopup(
//   "<b><a href='https://goo.gl/maps/QTfrsJTjT2S2rC7r8' target='_blank'>Camping Ground Bukit Pethu</a></b><br>Tegalrejo, Hargowilis, Kec. Kokap, Kabupaten Kulon Progo<br>"
// )

var popupContent20 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipPHCXs3zcql-1c4uvXW7ZoQ3XroFgcWT23lKgRe=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Camping Ground Bukit Pethu</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/QTfrsJTjT2S2rC7r8" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker20 = L.marker([-7.817648521314486, 110.11281556590808]).addTo(map)
marker20.bindPopup(popupContent20)

// var marker21 = L.marker([-7.821231249446544, 110.11508469474356]).addTo(map)
// marker21.bindPopup(
//   "<b><a href='https://goo.gl/maps/NhPUn8ZdTWas3Ly3A' target='_blank'>Taman Bambu Air Waduk Sermo</a></b><br>Tegiri 1, Hargowilis, Kec. Kokap, Kabupaten Kulon Progo<br>"
// )

var popupContent21 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipM7Axitd43GvHBWxgdWKqwo81RZ6xyHzLeVvA0=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Taman Bambu Air Waduk Sermo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/NhPUn8ZdTWas3Ly3A" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker21 = L.marker([-7.821231249446544, 110.11508469474356]).addTo(map)
marker21.bindPopup(popupContent21)

// var marker22 = L.marker([-7.824803194305779, 110.12364443472691]).addTo(map)
// marker22.bindPopup(
//   "<b><a href='https://goo.gl/maps/H5xEHzrn6g89o3rz9' target='_blank'>Waduk Sermo</a></b><br>Jl. Lkr. Sermo, Sremo Lor, Hargowilis, Kec. Kokap, Kabupaten Kulon Progo<br>"
// )

var popupContent22 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipN5akYuc3f2TUI9Ui49XZ0Uikzi463CGrM_-x-s=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Waduk Sermo</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/H5xEHzrn6g89o3rz9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker22 = L.marker([-7.824803194305779, 110.12364443472691]).addTo(map)
marker22.bindPopup(popupContent22)

// var marker23 = L.marker([-7.827562534629639, 110.1807285126336]).addTo(map)
// marker23.bindPopup(
//   "<b><a href='https://goo.gl/maps/CKZhyUqknDJ3JvuW9' target='_blank'>Wisata Edukasi Wild life Rescue Center Jogja</a></b><br>Jl. Pengasih - Nanggulan, Derwolo, Sendangsari, Kec. Pengasih, Kabupaten Kulon Progo<br>"
// )

var popupContent23 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipO8Q3fMNEpexxsR24Ba9pvMQ_my6enAsqDdSgfI=w408-h270-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wisata Edukasi Wild life Rescue Center Jogja</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/CKZhyUqknDJ3JvuW9" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker23 = L.marker([-7.827562534629639, 110.1807285126336]).addTo(map)
marker23.bindPopup(popupContent23)

// var marker24 = L.marker([-7.89334623781808, 110.01982301444197]).addTo(map)
// marker24.bindPopup(
//   "<b><a href='https://goo.gl/maps/M7yYDzgfZN4kFfKz6' target='_blank'>Wisata Hutan Mangrove Wana Tirta</a></b><br>Pasir Mendit, Jangkaran, Kec. Temon, Kabupaten Kulon Progo<br>"
// )

var popupContent24 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipPNybXR8Mp09-Acs4ZO74eDNgi-ZqIWQRK3s-OY=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Wisata Hutan Mangrove Wana Tirta</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/M7yYDzgfZN4kFfKz6" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker24 = L.marker([-7.89334623781808, 110.01982301444197]).addTo(map)
marker24.bindPopup(popupContent24)

// var marker25 = L.marker([-7.896857419209811, 110.02833806590932]).addTo(map)
// marker25.bindPopup(
//   "<b><a href='https://goo.gl/maps/VLtvcsjYwwGocpfJA' target='_blank'>Pantai Pasir Kadilangu</a></b><br>Pasir Kadilango, Jangkaran, Kec. Temon, Kabupaten Kulon Progo<br>"
// )

var popupContent25 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipNA96CcMShAEAhmlS5RXvuLrDJk50stHUN1iQY=w426-h240-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pantai Pasir Kadilangu</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/VLtvcsjYwwGocpfJA" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker25 = L.marker([-7.896857419209811, 110.02833806590932]).addTo(map)
marker25.bindPopup(popupContent25)

// var marker26 = L.marker([-7.899482303209903, 110.03229164203418]).addTo(map)
// marker26.bindPopup(
//   "<b><a href='https://goo.gl/maps/6VMz5cMbvT4UexmMA' target='_blank'>Pantai Congot, Nuansa Khas Pantai Nelayan</a></b><br>Jl. Pantai Congot, Sangkaran, Palihan, Kec. Temon, Kabupaten Kulon Progo<br>"
// )

var popupContent26 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipOYP3RMfVR9AXRHXhx7LAHZfokKw8kvHxZ5wCim=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pantai Congot</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/fz3q9DrBvy2g8779A" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker26 = L.marker([-7.9000949584084195, 110.0341458533273]).addTo(map)
marker26.bindPopup(popupContent26)

// var marker27 = L.marker([-7.916813674627502, 110.07681224147615]).addTo(map)
// marker27.bindPopup(
//   "<b><a href='https://goo.gl/maps/ksRyJ6fHoSMTXbB97' target='_blank'>Pantai Glagah</a></b><br>Glagah, Kec. Temon, Kabupaten Kulon Progo<br>"
// )

var popupContent27 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipNmHnTuFpU1SUl8AuW8auSNC8jnZMG-NSgDiRwX=w408-h302-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pantai Glagah</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/ksRyJ6fHoSMTXbB97" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`
var marker27 = L.marker([-7.916813674627502, 110.07681224147615]).addTo(map)
marker27.bindPopup(popupContent27)

// var marker28 = L.marker([-7.951266020242737, 110.152788717909]).addTo(map)
// marker28.bindPopup(
//   "<b><a href='https://goo.gl/maps/K8iGnjc6hzNT46sy7' target='_blank'>Pantai Bugel</a></b><br>Gumuk Waru, Bugel, Kec. Panjatan, Kabupaten Kulon Progo<br>"
// )

var popupContent28 = `
<div class="card" style="width: 18rem;">
  <img src="https://lh5.googleusercontent.com/p/AF1QipPFadihl9F6eK2yS58eATam8EH89CIuv3uyyrA=w408-h306-k-no" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pantai Bugel</h5>
    <p class="card-text"></p>
    <a href="https://goo.gl/maps/K8iGnjc6hzNT46sy7" target="_blank" class="btn btn-success" style="color:white">Rute</a>
  </div>
</div>
`

var marker28 = L.marker([-7.951266020242737, 110.152788717909]).addTo(map)
marker28.bindPopup(popupContent28)
</script>

</body>

</html>