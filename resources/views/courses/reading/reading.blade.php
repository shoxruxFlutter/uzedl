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
        <a href="{{ route ('user.coursCat', $cat->id) }}">{{ $cat->title }}</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">{{ $reading[0]->title }}</span>
      </div>
    </div>

<div class="regular-page-wrap section-padding-100">
       <div class="menu">
        @foreach($lessons as $lessons)
            <div class="block">
                <div class="sartext1">
                     <h1 class="titmen">{{ $lessons->title}}</h1>
                     <h2 class="titmen">Starter unit</h2>
                </div>
                <div class="sartext2">
                    <h3>Bajarilgan vazifalarni yuborish</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                     
                </div>
                <div class="for_btn" >
                    <a class="downlet" href="{{ route('user.rdl', [$cat->id, $lessons->id])}}"> <button class="buttdown">Let's start</button> </a>
                </div>
                <div class="for_btn" >
                    <form action="">
                        <label for="input">
                             <button class="addfile">add your fail...<input type="file"></button>
                        </label>
                    </form>
                <input class="yubkn" type="submit" value="Sumbit">
                </div>
               
            
               
                  
            </div>
            @endforeach
            <!-- <div class="block">
                <div class="sartext1">
                    <h1 class="titmen">Lesson 2</h1>
                    <h2 class="titmen">Starter unit</h2>
               </div>
               <div class="sartext2">
                   <h3>Bajarilgan vazifalarni yuborish</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                    
               </div>
               <div class="for_btn" >
                   <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
               </div>
               <div class="for_btn" >
                   <form action="">
                       <label for="input">
                            <button class="addfile">add your fail...<input type="file"></button>
                       </label>
                   </form>
               <input class="yubkn" type="submit" value="Sumbit">
               </div>
            </div>
            <div class="block">
                <div class="sartext1">
                    <h1 class="titmen">Lesson 3</h1>
                    <h2 class="titmen">Starter unit</h2>
               </div>
               <div class="sartext2">
                   <h3>Bajarilgan vazifalarni yuborish</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                    
               </div>
               <div class="for_btn" >
                   <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
               </div>
               <div class="for_btn" >
                   <form action="">
                       <label for="input">
                            <button class="addfile">add your fail...<input type="file"></button>
                       </label>
                   </form>
               <input class="yubkn" type="submit" value="Sumbit">
               </div>
            </div>
            <div class="block">
                <div class="sartext1">
                    <h1 class="titmen">Lesson 4</h1>
                    <h2 class="titmen">Starter unit</h2>
               </div>
               <div class="sartext2">
                   <h3>Bajarilgan vazifalarni yuborish</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                    
               </div>
               <div class="for_btn" >
                   <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
               </div>
               <div class="for_btn" >
                   <form action="">
                       <label for="input">
                            <button class="addfile">add your fail...<input type="file"></button>
                       </label>
                   </form>
               <input class="yubkn" type="submit" value="Sumbit">
               </div>
            </div>
            <div class="block">
                <div class="sartext1">
                    <h1 class="titmen">Lesson 5</h1>
                    <h2 class="titmen">Starter unit</h2>
               </div>
               <div class="sartext2">
                   <h3>Bajarilgan vazifalarni yuborish</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                    
               </div>
               <div class="for_btn" >
                   <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
               </div>
               <div class="for_btn" >
                   <form action="">
                       <label for="input">
                            <button class="addfile">add your fail...<input type="file"></button>
                       </label>
                   </form>
               <input class="yubkn" type="submit" value="Sumbit">
               </div>
            </div>
            <div class="block">
                <div class="sartext1">
                    <h1 class="titmen">Lesson 6</h1>
                    <h2 class="titmen">Starter unit</h2>
               </div>
               <div class="sartext2">
                   <h3>Bajarilgan vazifalarni yuborish</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                    
               </div>
               <div class="for_btn" >
                   <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
               </div>
               <div class="for_btn" >
                   <form action="">
                       <label for="input">
                            <button class="addfile">add your fail...<input type="file"></button>
                       </label>
                   </form>
               <input class="yubkn" type="submit" value="Sumbit">
               </div>
            </div>
            <div class="block">
                <div class="sartext1">
                    <h1 class="titmen">Lesson 7</h1>
                    <h2 class="titmen">Starter unit</h2>
               </div>
               <div class="sartext2">
                   <h3>Bajarilgan vazifalarni yuborish</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                    
               </div>
               <div class="for_btn" >
                   <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
               </div>
               <div class="for_btn" >
                   <form action="">
                       <label for="input">
                            <button class="addfile">add your fail...<input type="file"></button>
                       </label>
                   </form>
               <input class="yubkn" type="submit" value="Sumbit">
               </div>
            </div>
            <div class="block">
                <div class="sartext1">
                    <h1 class="titmen">Lesson 8</h1>
                    <h2 class="titmen">Starter unit</h2>
               </div>
               <div class="sartext2">
                   <h3>Bajarilgan vazifalarni yuborish</h3>
                   <p>Lorem ipsum dolor sit amet co nsectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                    
               </div>
               <div class="for_btn" >
                   <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
               </div>
               <div class="for_btn" >
                   <form action="">
                       <label for="input">
                            <button class="addfile">add your fail...<input type="file"></button>
                       </label>
                   </form>
               <input class="yubkn" type="submit" value="Sumbit">
               </div>
            </div>
            <div class="block">
                <div class="sartext1">
                    <h1 class="titmen">Lesson 9</h1>
                    <h2 class="titmen">Starter unit</h2>
               </div>
               <div class="sartext2">
                   <h3>Bajarilgan vazifalarni yuborish</h3>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                    
               </div>
               <div class="for_btn" >
                   <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
               </div>
               <div class="for_btn" >
                   <form action="">
                       <label for="input">
                            <button class="addfile">add your fail...<input type="file"></button>
                       </label>
                   </form>
               <input class="yubkn" type="submit" value="Sumbit">
               </div>
            </div>
            <div class="block">
                <div class="sartext1">
                     <h1 class="titmen">Lesson 10</h1>
                     <h2 class="titmen">Starter unit</h2>
                </div>
                <div class="sartext2">
                    <h3>Bajarilgan vazifalarni yuborish</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor eaque quo dolorum quos culpa perferendis, commodi optio perspiciatis odit provident, harum hic quam eos laudantium et temporibus? Assumenda, natus id.</p>
                     
                </div>
                <div class="for_btn" >
                    <a class="downlet" href="#"> <button class="buttdown">DOWNLOAD</button> </a>
                </div>
                <div class="for_btn" >
                    <form action="">
                        <label for="input">
                             <button class="addfile">add your fail...<input type="file"></button>
                        </label>
                    </form>
                <input class="yubkn" type="submit" value="Sumbit">
                </div>
            </div> -->
       </div>
    </div>

      
      @endsection
    