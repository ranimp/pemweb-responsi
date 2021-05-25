@extends('layouts.main') 
@section('title', 'Perusahaan')
@section('content')
<div class="perusahaan">
  <div class="jumbotron">
    <div class="container">    
      <h1>OUR COMPANY</h1><br>
      <p>We are enhancing the quality of our customers’ lives and creating a better world in our future-oriented, innovative, and customer-centered approach.</p>
    </div>
  </div>
  <div class="pilihan">
    <div class="container">
      <table class="table table-borderless">
        <tr>
          <td>PROFILE</td>
          <td>VISION AND MISSION</td>
          <td>COMMISIONERS</td>
          <td>CERTIFICATE</td>
          <td>LOCATION</td>
          <td>ACHIEVEMENT</td>
          <td>AWARDS</td>
        </tr>
      </table>
    </div>
  </div>
  <div class="pilihan-card">
    <div class="container">
      <button type="button" class="btn btn-info">CAREER</button>
      <button type="button" class="btn btn-info">CORPORATE SOCIAL RESPONSIBILITY</button>
      <button type="button" class="btn btn-info">CERTIFICATE</button>
      <button type="button" class="btn btn-info">GOVERNANCE</button>
      <button type="button" class="btn btn-info">BOARD OF DIRECTORS</button>
      <button type="button" class="btn btn-info">INTEGRATED WOOD INDUSTRY</button>
    </div>
  </div>
@endsection