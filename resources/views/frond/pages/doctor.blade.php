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
             <h2 class="about_tag">Doctors Corona Virus</h2>
             <div class="about_menu">
                <ul>
                   <li><a href="index.html">Home</a></li>
                   <li>Doctors</li>
                </ul>
             </div>
          </div>
       </div>
    <!-- banner section end -->
 </div>
 <!-- header section end -->
 <!-- doctor section start -->
 @foreach ($doctor as $doc)
 <div class="doctors_section layout_padding" style="background-image: url(<img src={{asset("upload/images/" .$doc->image)}}">">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="taital_main">
                <div class="taital_left">
                   <div class="play_icon"><img src="images/play-icon.png"></div>
                </div>
                <div class="taital_right">
                   <h1 class="doctor_taital">{{$doc->title}}</h1>
                   <p class="doctor_text">{{$doc->description}}</p>
                   <div class="readmore_bt"><a href="#">Read More</a></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 @endforeach
@endsection