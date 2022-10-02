<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MANJA.in</title>
  <link rel="stylesheet" href="../css/styleCard.css">
  <style>


  </style>
</head>
<body>
  
<div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href=""><img src="../img/logo.png" alt=""></a></div>
        <ul class="links">
          <li ><a href="{{url('/manjain/tentang')}}">Tentang Kami</a></li>
          <li ><a href="login">Login</a></li>
          <li ><a href="register">Register</a></li>
        </ul>
      </div>
      
    </nav>
    
  </div>
  <br><br><br><br>
  <ul>

 
@foreach($list as $item)
<li class="booking-card" style="background-image: url(../img/{{$item->logo}})">
    <div class="book-container">
      <div class="content">
        <p>{{$item->perusahaan}}</p>
      </div>
    </div>
    <div class="informations-container">
      <h2 class="title">{{$item->judul}}</h2>
      <p class="sub-title">Gaji : </p>
      <p class="price"><svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
</svg>{{$item->gaji}}</p>
      <div class="more-information">
        <div class="info-and-date-container">
          <div class="box info">
            <p>Cara Mendaftar</p><br>
            <p>{{$item->cara}}</p>
          </div>
          <div class="box date">
            <svg class="icon" style="width:24px;height:24px" viewBox="0 0 24 24">
      <path fill="currentColor" d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
  </svg> <p>Jadwal Kerja</p>
            <p>{{$item->jadwal}}</p>
          </div>
        </div>
        <p class="disclaimer">Kategori Pekerjaan : {{$item->kategori}}</p>
        <p class="disclaimer">{{$item->deskripsi}}</p>
        </div>
    </div>
  </li>
@endforeach
  
  
</ul>
  
</body>
</html>
								                            