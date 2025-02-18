@extends('frond.layout.master')
@section('content')

    <!--header section start -->
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
                <h2 class="about_tag">News Corona Virus</h2>
                <div class="about_menu">
                   <ul>
                      <li><a href="index.html">Home</a></li>
                      <li>News</li>
                   </ul>
                </div>
             </div>
          </div>
       <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- news section start -->
    <div class="news_section layout_padding">
       <div class="container">
          <div id="main_slider" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                   <h1 class="news_taital">Latest News</h1>
                   <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                   <div class="news_section_2 layout_padding">
                      <div class="box_main">
                         <div class="image_1"><img src="images/news-img.png"></div>
                         <h2 class="design_text">Coronavirus is Very dangerous</h2>
                         <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                         <div class="read_btn"><a href="#">Read More</a></div>
                      </div>
                   </div>
                </div>
                <div class="carousel-item">
                  <h1 class="news_taital">Latest News</h1>
                   <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                   <div class="news_section_2 layout_padding">
                      <div class="box_main">
                         <div class="image_1"><img src="images/news-img.png"></div>
                         <h2 class="design_text">Coronavirus is Very dangerous</h2>
                         <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                         <div class="read_btn"><a href="#">Read More</a></div>
                      </div>
                   </div>
                </div>
                <div class="carousel-item">
                  <h1 class="news_taital">Latest News</h1>
                   <p class="news_text">when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                   <div class="news_section_2 layout_padding">
                      <div class="box_main">
                         <div class="image_1"><img src="images/news-img.png"></div>
                         <h2 class="design_text">Coronavirus is Very dangerous</h2>
                         <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                         <div class="read_btn"><a href="#">Read More</a></div>
                      </div>
                   </div>      
                </div>
             </div>
             <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
             <i class="fa fa-angle-left"></i>
             </a>
             <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
             <i class="fa fa-angle-right"></i>
             </a>
          </div>
          </div>
       </div>
    </div>
@endsection