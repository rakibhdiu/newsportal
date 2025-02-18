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
             <h2 class="about_tag">Protect Corona Virus</h2>
             <div class="about_menu">
                <ul>
                   <li><a href="index.html">Home</a></li>
                   <li>Protect</li>
                </ul>
             </div>
          </div>
       </div>
    <!-- banner section end -->
 </div>
 <!-- header section end -->
 <!-- protect section start -->
 <div class="protect_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <h1 class="protect_taital">How to Protect Yourself</h1>
             <p class="protect_text">English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</p>
          </div>
       </div>
       <div class="protect_section_2 layout_padding">
          <div class="row">
             <div class="col-md-6">
                <h1 class="hands_text"><a href="#">Wash your <br>hands frequently</a></h1>
                <h1 class="hands_text_2"><a href="#">Maintain social <br>distancing</a></h1>
                <h1 class="hands_text"><a href="#">Avoid touching eyes,<br>nose and mouth</a></h1>
             </div>
             <div class="col-md-6">
                <div class="image_2"><img src="images/img-2.png"></div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection