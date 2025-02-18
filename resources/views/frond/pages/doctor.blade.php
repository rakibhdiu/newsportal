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
 <div class="doctors_section layout_padding">
    <div class="container-fluid">
       <div class="row">
          <div class="col-sm-12">
             <div class="taital_main">
                <div class="taital_left">
                   <div class="play_icon"><img src="images/play-icon.png"></div>
                </div>
                <div class="taital_right">
                   <h1 class="doctor_taital">What doctors say..</h1>
                   <p class="doctor_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                   <div class="readmore_bt"><a href="#">Read More</a></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection