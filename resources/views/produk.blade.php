@extends('layouts.main') 
@section('title', 'Produk')
@section('content')
<div class="produk">
  <div class="jumbotron">
    <div class="container">    
      <h1>OUR PRODUCT</h1>
    </div>
  </div>
  <div class="offer" style="margin-top:-5%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">  
            <img src="{{asset('assets/img/p1.png')}}" width="250px">
            <img src="{{asset('assets/img/p2.png')}}" width="250px">
            <img src="{{asset('assets/img/1.png')}}" width="250px">
        </div>
        <div class="col-lg-3">
          <h3 style="margin-top:20%;">Structure Panel</h3>
          <p>Products of plywood, which is used to obtain a load that is used for construction. TIRTA MAHAKAM ensure the bending strength of products in accordance with the standards of construction.</p>
          <h3 style="margin-top:35%;">Floorbase</h3>
          <p>Product which categorized as plywood is a wooden product that origin from round logs and it has been trough process such as cutting, peeling, drying, composing, gluing, pressing, puttying, trimming, sanding and at the end it will create high quality plywood. We makes the best plywood mainly used for raw material of flooring product, which known as Floor Base Plywood.</p>
          <h3 style="margin-top:15%;">General Plywood</h3>
          <p style="margin-bottom:20%;">Besides Floor Base product our company also produces type of plywood that can be used for housing material product, wall paneling, door material, roof etc. This type of plywood is known as General Panel, and we are able to produce various sizes ranging from 3mm – 30mm thickness with a visually and technically good quality standard.</p>
        </div>
        <div class="col-lg-3">
          <img src="{{asset('assets/img/pr2.png')}}" width="250px">
          <img src="{{asset('assets/img/pr3.png')}}" width="250px">
          <img src="{{asset('assets/img/pr4.png')}}" width="250px">
        </div>
        <div class="col-lg-3">
          <h3 style="margin-top:20%;">Blackboard Polyster</h3>
          <p>Besides block board as the panel for general use, our company also have the secondary process to them, we call blockboard Polyester. Poly ester blockboard is a product made from advanced process blockboard with treatmen lay up by polyester resin on the 2 side face.</p>
          <h3 style="margin-top:15%;">Blockboard</h3>
          <p>Product which categorized as block board is left over from logs peeling process such as centre of logs and cut down into small pieces, composes, glued and pressed together forming one pieces of board. Next process is layered with veneer on face and back so it becomes thick panel.</p>
          <h3 style="margin-top:25%;">Polyster Plywood</h3>
          <p>Product which categorized as block board is left over from logs peeling process such as centre of logs and cut down into small pieces, composes, glued and pressed together forming one pieces of board. Next process is layered with veneer on face and back so it becomes thick panel.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection