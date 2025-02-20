@extends('frond.layout.master')
@section('content')
<div class="header_section header_bg">
    <div class="container-fluid">
          <div class="main">
             <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
             <div class="menu_text">
                <ul>
                   <div class="togle_">
                      <div class="menu_main">
                         <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                         </ul>
                      </div>
                   </div>
                   <div id="myNav" class="overlay">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <div class="overlay-content">
                         <a href="{{route('home')}}">Home</a>
                         <a href="{{route('protect')}}">Protect</a>
                         <a href="{{route('about')}}">About</a>
                         <a href="{{route('doctor')}}">Doctors</a>
                         <a href="{{route('news')}}">News</a>
                      </div>
                   </div>
                   <span class="navbar-toggler-icon"></span>
                   <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                   <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
                </ul>
             </div>
          </div>
       </div>
       <!-- banner section start -->
       <div class="container">
          <div class="about_taital_main">
             <h2 class="about_tag">About Corona Virus</h2>
             <div class="about_menu">
                <ul>
                   <li><a href="index.html">Home</a></li>
                   <li>About</li>
                </ul>
             </div>
          </div>
       </div>
    <!-- banner section end -->
 </div>
 <!-- header section end -->
 <!-- about section start -->
 <div class="about_section layout_padding">
    <div class="container">
      @foreach ($about as $value)
         
       <div class="row">
          <div class="col-md-6">
             <div class="about_img"><img src="{{asset('upload/images/' .$value->image)}}" alt="images"></div>
          </div>
          <div class="col-md-6">
             <h1 class="about_taital">{{ $value->about_title}}</span></h1>
             <p class="about_text">{{$value->about_text}}</p>
             <div class="read_bt"><a href="#">Read More</a></div>
          </div>
       </div>
       @endforeach
    </div>
 </div>
@endsection