<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <p align="left"><i class="fab fa-twitter"></i></p>
  <p align="left"><i class="fab fa-facebook-f"></i></p>
  <p align="left"><i class="fab fa-linkedin-in"></i></p>
  <p align="left"><i class="fab fa-instagram"></i></p>
  <p align="left"><i class="fab fa-youtube"></i></p>
  <p align="middle" style="width:100%;"><img src="{{asset('assets/img/logo.png')}}"></p>
  <p align="right"><img src="{{asset('assets/icon/indonesia.png')}}" width="30px"></i></p>
  <p align="right"><img src="{{asset('assets/icon/united-kingdom.png')}}" width="30px"></i></p>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <ul class="navbar-nav mr-5" style="margin-left:15%;">
    <li class="nav-item active">
      <a class="nav-link" href="{{url('/')}}">Beranda<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/perusahaan')}}">Perusahaan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/produk')}}">Produk</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/investor')}}">Investor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/berita')}}">Berita</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/hubungikami')}}">Hubungi Kami</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>