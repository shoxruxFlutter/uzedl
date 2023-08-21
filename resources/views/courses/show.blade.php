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
        <a href="{{ route('courses') }}">Courses</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">{{ $cat[0]->title }}</span>
      </div>
    </div>

    <section class="bod_sec">
    <a class="in_vock" href="A1_cours.html"><div class="block_vock">
        <h1>Vocabulary</h1>
        <p>Darslar soni: 10</p>
    </div></a>
    <div class="block_onn">
    @if(Auth::check())
    <a class="in_click" href="{{ route ('user.writing', $category_id)}}">
            <div class="block_scil">
                <h1>Writing</h1>
                <p>Darslar soni: 10</p>
            </div>
        </a>
            @else
            <a class="in_click" href="{{ route('user.login') }}">
            <div class="block_scil">
                <h1>Writing</h1>
                <p>Darslar soni: 10</p>
            </div>
        </a>
         
            @endif

        
        <a class="in_click" href="{{ route ('user.reading', $category_id)}}">
            <div class="block_scil">
                <h1>Reading</h1>
                <p>Darslar soni: 10</p>
            </div>
        </a>
        <a class="in_click" href="{{ route ('user.speaking', $category_id)}}">
            <div class="block_scil">
                <h1>Speaking</h1>
                <p>Darslar soni: 10</p>
            </div>
        </a>
        <a class="in_click" href="{{ route ('user.listening', $category_id)}}">
            <div class="block_scil">
                <h1>Listening</h1>
                <p>darslar soni: 10</p>
            </div>
        </a>
    </div>
   </section>

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
    