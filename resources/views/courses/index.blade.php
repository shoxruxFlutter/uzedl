@extends('layouts.base')


 
@section('content')
<div></div>


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Courses</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="{{ route('home') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Courses</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
            @foreach($courses as $cours)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                        @if(Auth::check())
                        <a href="{{ route ('user.coursCat', $cours->id) }}"> <img src="/storage/{{ $cours->img }}" alt="Image" width="430" height="261" class="img-fluid"></a>
                        @else
                        <a href="{{ route('user.login') }}"> <img src="/storage/{{ $cours->img }}" alt="Image" width="430" height="261" class="img-fluid"></a>
                        @endif
                        <!-- <div class="price">$99.00</div> -->
                        <div class="category "><h3>{{ $cours->title }}</h3></div>  
                        </figure>
                        <div class="course-1-content pb-4">
                        <h2>{{$cours->subTitle}}</h2>
                        <div class="rating text-center mb-3">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        <p class="desc mb-4">{{ $cours->content }}</p>
                        @if(Auth::check())
                        <p><a href="{{ route ('user.coursCat', $cours->id) }}" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        @else
                        <p><a href="{{ route('user.login') }}" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                        @endif
                        </div>
                    </div>
                </div>
                @endforeach
           </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('assets/images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Our Philosphy</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Academics Principle</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Key of Success</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div>
      
      @endsection
    