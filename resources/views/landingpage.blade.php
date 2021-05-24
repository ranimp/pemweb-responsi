@extends('layouts.main') 
@section('title', 'Selamat Datang')
@section('content')
<div class="selamatdatang">
  <div class="jumbotron">
    <div class="container">    
      <h1>SELAMAT DATANG</h1><br>
      <p>PT. Tirta Mahakam Resources Tbk (Perusahaan / TMR) didirikan pada tahun 1981 dengan nama PT. Tirta Mahakam Plywood Industry (TMPI). Perusahaan terdaftar di Bursa Efek Jakarta di bulan Desember 1999.<br> Kami adalah Produsen Kayu Indonesia yang terintegrasi, yang memproduksi Floorbase, General Pywood, Laminated/Multi Plywood, Concrete Panel, Blockboard, Moulding, Polyester Plywood dan Polyester Blockboard.</p>
    </div>
  </div>
  <div class="offer" style="margin-top:-5%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3" style="margin-top:50px;">  
          <h1>What We Offer...</h1>
          <img src="{{asset('assets/img/1.png')}}" width="250px">
        </div>
        <div class="col-lg-3" style="margin-top:20%; margin-bottom:5%;">
          <img src="{{asset('assets/img/2.png')}}" width="250px">
        </div>
        <div class="col-lg-6">
          <h3 style="margin-top:40%;">General Plywood</h3>
          <p>Besides Floor Base product our company also produces type of plywood that can be used for housing material product, wall paneling, door material, roof etc. This type of plywood is known as General Panel, and we are able to produce various sizes ranging from 3mm – 30mm thickness with a visually and technically good quality standard.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection