@extends('layouts.main') 
@section('title', 'Investor')
@section('content')
<div class="investor">
  <div class="jumbotron">
    <div class="container">    
      <h1>INVESTOR</h1><br>
    </div>
  </div>
  <div class="pilihan-card">
    <div class="container">
      <button type="button" class="btn btn-info">
        Announcement <br>
        <img src="{{asset('assets/icon/pengumuman.png')}}">
      </button>
      <button type="button" class="btn btn-info">
        Meeting Agenda<br>
        <img src="{{asset('assets/icon/meeting.png')}}">
      </button>
      <button type="button" class="btn btn-info">
        Result<br>
        <img src="{{asset('assets/icon/result.png')}}">
      </button>
      <button type="button" class="btn btn-info">
        Policy<br>
        <img src="{{asset('assets/icon/policy.png')}}">
      </button>
      <button type="button" class="btn btn-info">
        Anuual Report<br>
        <img src="{{asset('assets/icon/report.png')}}">
      </button>
      <button type="button" class="btn btn-info">
        Shareholders<br>
        <img src="{{asset('assets/icon/share.png')}}">
      </button>
    </div>
  </div>
@endsection