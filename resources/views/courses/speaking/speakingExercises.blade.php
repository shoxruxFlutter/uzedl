@extends('layouts.base')


 
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('assets/images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Writing</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
          </div>
        </div>
      </div> 
    

      <div class="custom-breadcrumns border-bottom">
      <div class="container">
      <a href="{{ route('home') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ route('courses') }}">Courses</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <a href="{{ route ('user.coursCat', $category->id) }}">{{ $category->title }}</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current"></span>
        <a href="{{ route('user.speaking', $category->id) }}">{{ $speaking[0]->title }}</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">{{ $lesson->title }}</span>
      </div>
    </div>

    @foreach($speaking as $speak)
    <div class="site-section">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6 mb-4">
                    <p>
                        <img src="images/course_5.jpg" alt="Image" class="img-fluid">
                    </p>
                </div> -->
                <div class="col-lg ml-auto align-self-center">
                        <h2 class="section-title-underline mb-5">
                            <span>    {{$speak->title}}</span>
                        </h2>
                        
                       
                        <p>{{$speak->content}}</p>
               
    
                      

                        <p>
                            <a href="#" class="btn btn-primary rounded-0 btn-lg px-5">Finish</a>
                        </p>
    
                    </div>
            </div>
        </div>
    </div>


    @endforeach

      
      @endsection
    