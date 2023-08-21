@extends('layouts.base')



@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"
  style="background-image: url('assets/images/bg_1.jpg')">
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
    <a href="{{ route('user.reading', $category->id) }}">{{ $reading[0]->title }}</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">{{ $lesson->title }}</span>
  </div>
</div>

@foreach($reading as $read)
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
          <span> {{$read->title}}</span>
        </h2>


      </div>
      <div class="  align-self-center">
        <p>
          <img src="{{ asset('assets/images/4.jpg') }}" alt="Image" class="img-fluid">
        </p>
      </div>
      <div class="  align-self-center">
        <p>
          {!! $read->content !!}
        </p>
      </div>

      <div class="container mt-5">

        <h1 class="mb-4">Matching Exercise</h1>
        <form id="matchingForm">
          <div class="row">
            <div class="col-md-6">
              <p class="matching-item">1. glance</p>
              <p class="matching-item">2. queue</p>
              <p class="matching-item">3. fortnight</p>
              <p class="matching-item">4. fail</p>
              <p class="matching-item">5. furious</p>
              <p class="matching-item">6. dining hall</p>
              <p class="matching-item">7. nod</p>
              <p class="matching-item">8. hospital</p>
            </div>
            <div class="col-md-6">
              <p class="matching-item">a. two weeks </p>
              <p class="matching-item">b. look quickly </p>
              <p class="matching-item">c. a place people go when they are sick </p>
              <p class="matching-item">d. a place where students go to eat </p>

              <p class="matching-item">a. very angry 
              </p>
              <p class="matching-item">b. move your head up and down  </p>
              <p class="matching-item">c.not pass an exam  </p>
              <p class="matching-item">d. a line of people </p>
            </div>
          </div>
          

        </form>




        <h1 class="mb-4">Check your understanding: ordering
          Write a number (1–10) to put these sentences in order. </h1>
        <form id="orderForm">
          <div class="sentence">
            <input type="number" name="q1" class="" min="1" max="10" required>
            <span class="order-number"></span> Mo can’t remember the difference between a quark and an electron.
          </div>
          
          <div class="sentence">
            <input type="number" name="q2" class="" min="1" max="10" required>
            <span class="order-number"></span> Mo goes to the dining hall to look for Terry. 
          </div>

          <div class="sentence">
            <input type="number" name="q1" class="" min="1" max="10" required>
            <span class="order-number"></span> Mo talks to Mr Reed.

          </div>
          
          <div class="sentence">
            <input type="number" name="q2" class="" min="1" max="10" required>
            <span class="order-number"></span> Mo tries to study in the library 
          </div>

          <div class="sentence">
            <input type="number" name="q1" class="" min="1" max="10" required>
            <span class="order-number"> </span> Terry’s dad has a heart attack. 

          </div>
          
          <div class="sentence">
            <input type="number" name="q2" class="" min="1" max="10" required>
            <span class="order-number"></span> Mr Reed believes Terry.
 
          </div>

          <div class="sentence">
            <input type="number" name="q1" class="" min="1" max="10" required>
            <span class="order-number"> </span> Terry tells Mo about her dad. 

          </div>
          
          <div class="sentence">
            <input type="number" name="q2" class="" min="1" max="10" required>
            <span class="order-number"> </span> Mo tells Nima how she feels about Terry. 

          </div>
          
          <div class="sentence">
            <input type="number" name="q1" class="" min="1" max="10" required>
            <span class="order-number"></span> Mo has no problems with the history exam. 


          </div>
          
          <div class="sentence">
            <input type="number" name="q2" class="" min="1" max="10" required>
            <span class="order-number"> </span> Mo first sees Terry with her phone.


          </div>
          
          <!-- Add more sentences as needed -->
          
         
        </form>

     
          <h1 class="mb-4">Gap Fill Exercise with Word Box</h1>
          <form id="gapFillForm">
            <div class="sentence">
              Mr Reed asked Mo to  <input type="text" name="q1" class="" required> when Terry was cheating
            </div>
            
            <div class="sentence">
              Mo stared at question five for  <input type="text" name="q2" class="" required> 
            </div>
            
            <div class="sentence">
              When Mo rang Terry’s house, her mum told her   <input type="text" name="q1" class="" required> and hung up
            </div>
            
            <div class="sentence">
              Mo couldn’t remember the difference between a quark and <input type="text" name="q2" class="" required> 
            </div>

            <div class="sentence">
              You shouldn’t forget   <input type="text" name="q1" class="" required> 
            </div>
            
            <div class="sentence">
              Terry’s dad had been in hospital for   <input type="text" name="q2" class="" required> 
            </div>
            
            <div class="sentence">
              Mr Reed took Terry’s exam paper and    <input type="text" name="q1" class="" required> 
            </div>
            
            <div class="sentence">
              Terry asked Mo to  <input type="text" name="q2" class="" required> 
            </div>
<br>
            <div class="word-box">
              <p>Word Box: <span class="word"><strong>she was busy</strong></span>, <span class="word"><strong>two weeks</strong></span>, <span class="word"><strong>tell him</strong></span>, <strong><span class="word">forgive her </span></strong>
                <span class="word"><strong>who your friends are</strong></span>, <span class="word"><strong>an electron</strong></span>, <span class="word"><strong>ten minutes</strong></span>, <strong><span class="word">tore it in half  </span></strong>
              </p>
            </div>
            
           <p> <strong>Discussion</strong></p>
<p>What would you do if you knew a friend was cheating in an exam? Would you tell a teacher?</p>

          
          </form>
  
      </div>


      <div class="container mt-5">

      <p>
        <a href="#" class="btn btn-primary rounded-0 btn-lg px-5">Check Answers</a>
    </p>
    </div>
    </div>
  </div>
</div>


@endforeach


@endsection