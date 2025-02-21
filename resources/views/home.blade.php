@extends('frond.layout.master')
@section('content')
@include('sweetalert::alert')
<!--header section start -->
<div class="header_section">
   <div class="container-fluid">
         <div class="main">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <div class="menu_text">
               <ul>
                  <div class="togle_">
                     <div class="menu_main">
                        <ul>
                           @if(Auth::check())
                               <li>
                                   <a href="{{ route('logout') }}" 
                                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      Logout
                                   </a>
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                               </li>
                           @else
                               <li><a href="{{ route('login') }}">Login</a></li>
                               <li><a href="{{ route('register') }}">Sign up</a></li>
                           @endif
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
                        <a href="{{ auth()->check() && auth()->user()->utype === 'ADM' ? route('admin.dashboard')
                         : route('dashboard') }}">Dashboard</a>

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
<div class="banner_section layout_padding">
   <div class="container">
      <div id="my_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="row">
                  <div class="col-md-6">
                     <div class="container">
                        <h1 class="banner_taital">Get Medical Care early</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <div class="more_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="banner_img"><img src="images/banner-img.png"></div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="row">
                  <div class="col-md-6">
                     <div class="container">
                        <h1 class="banner_taital">Get Medical Care early</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <div class="more_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="banner_img"><img src="images/banner-img.png"></div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="row">
                  <div class="col-md-6">
                     <div class="container">
                        <h1 class="banner_taital">Get Medical Care early</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <div class="more_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="banner_img"><img src="images/banner-img.png"></div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
         <i class="fa fa-angle-left"></i>
         </a>
         <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
         <i class="fa fa-angle-right"></i>
         </a>
      </div>
   </div>            
</div>
<!-- banner section end -->
</div>
<!-- header section end -->
<!-- protect section start -->
<div class="protect_section layout_padding">
   @foreach($protect as $pro)
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <h1 class="protect_taital">{{$pro->protect_title}}</h1>
             <p class="protect_text">{{$pro->short_p}}</p>
          </div>
       </div>
       <div class="protect_section_2 layout_padding">
          <div class="row">
             <div class="col-md-6">
                <h1 class="hands_text"><a href="#">{{$pro->pro_rules1}}</a></h1>
                <h1 class="hands_text_2"><a href="#">{{$pro->pro_rules2}}</a></h1>
                <h1 class="hands_text"><a href="#">{{$pro->pro_rules3}}</a></h1>
             </div>
             <div class="col-md-6">
                <div class="image_2">
                  <img width="500px" src="{{asset('upload/images/' .$pro->image)}}" alt="image">
               </div>
             </div>
          </div>
       </div>
    </div>
    @endforeach
 </div>
<!-- protect section end -->
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

<!-- about section end -->
<!-- doctor section start -->
@foreach ($doctor as $doc)
<div class="doctors_section layout_padding" style="background-image: url('{{ asset('upload/images/' .$doc->image) }}');">

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
<!-- doctor section end -->
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
<!-- news section end -->
<!-- update section start -->
<div class="update_section">
   <div class="container">
      <h1 class="update_taital">Get Every Update.... </h1>
      <form action="{{route('subscription')}}" method="POST">
         @csrf
      <div class="form-group">
             <input type="text" placeholder="Write your Name..." class="update_name"  name="name"><br>
         </div>
         <div class="form-group">
             <textarea  class="update_mail" placeholder="Massage"   name="message"></textarea>
         </div>
      <div class="form-group">
             <input type="date" placeholder="Write the date..." class="update_date"   name="date"><br>
         </div>
         <div class="subscribe_bt">  <button type="submit" class="btn btn-primary">Subscribe Now</button></div>
      </form>
   </div>
</div>
@endsection