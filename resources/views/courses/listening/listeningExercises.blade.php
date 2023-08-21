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
    <a href="{{ route('user.listening', $category->id) }}">{{ $listening[0]->title }}</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">{{ $lesson->title }}</span>
  </div>
</div>


@foreach($listening as $listen)
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="  align-self-center">
        <h2 class="section-title-underline mb-5">
          <span> Listening</span>
        </h2>
      </div>
      <div class="  align-self-center">
        <p>
          <img src="{{ asset('assets/images/2.jpg') }}" alt="Image" class="img-fluid">
        </p>
      </div>


      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Instructions
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <p>Listen to the teacher giving students a quiz about their study skills and do the exercises to practise and improve your listening skills.
            </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Preparation
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>1. Match the two parts of the question and write a–h next to the numbers 1–8. </p>
              <p>2. Check your understanding: multiple choice</p>
              <p>3. Check your vocabulary: gap fill
                Write the word to fill the gaps.</p>
              

            </div>
          </div>
        </div>

      </div>
      <div class="mb-4 mt-4 align-self-center">
      <audio controls>
        <source src="/storage/{{$listen->audio}}" type="audio/mp3">

      </audio>
      </div>
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              Transcript
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
             <p> Presenter: Welcome to today's show. We're very happy to have Anna Oliveira as our guest today. Anna is the creator and founder of HomeworX – spelled with an 'x' we should note – an app which helps teenagers with their homework. Thanks for coming in, Anna.
            </p>
          <p>    Anna: Thanks for having me.</p>
              
              <p>Presenter: So, tell us about your app. How does it work?</p>
              
           <p>   Anna: Well, teenagers and their parents have numerous challenges when it comes to homework these days. In many families both parents work and don't have much available time to help their kids with their homework. And even if they do have time to help, they may not be able to offer support with the content. What I mean is, they may not know, or at least remember, enough in any given subject to support.</p>
              
         <p>     Presenter: You mean they might not be able to remember complex maths or might have never studied certain subjects, such as biology or economics, themselves?</p>
              
            <p>  Anna: Exactly. So they might want to support their children with their homework, but have neither the time nor the knowledge to do so.</p>
              
           <p>   Presenter: I see. So the app helps solve this problem?</p>
              
          <p>    Anna: Yes, and more. The next issue is that tutors can be expensive, and there may be long waiting lists for specialist tutors in the town or region you live in. Our HomeworX app brings students and tutors together online. Students can search a database of pre-approved tutors and sign up for live online support. They don't need to be in the same town or city.</p>
              
             <p> Presenter: That sounds really great.</p>
              
           <p>   Anna: It is. And this approach also enables us to offer the tutoring services at lower prices because there's no travelling time involved for the tutor to get to the student's home. And tutors who live in remote areas are happy to get access to more students, and be able to work from home, even at lower rates.</p>
              
          <p>    Presenter: This all sounds great. So, how did you come up with the idea?</p>
              
          <p>    Anna: Well, as you might guess, I was one of those parents I described earlier. I really wanted to help my son with his homework, but I was either too busy with work or I didn't actually know anything about the subjects he was having difficulty with. Also, we live in an area where there aren't many tutors and the ones that are there are either very expensive or have long waiting lists.</p>
              
            <p>  Presenter: Yes. I can understand your predicament. Well, it sounds like a very useful app that is clearly meeting a need. And its popularity obviously speaks for itself.</p>
              
            <p>  Anna: Thank you.</p>
              
        <p>      Presenter: So, do you have plans for the future?</p>
              
            <p>  Anna: We've just secured some funding and hope to expand the range of services we offer using the app.</p>
              
          <p>    Presenter: We wish you the best of luck. Thanks again for coming in. That was Anna Oliveira, founder of the tutoring app HomeworX (with an 'x', don't forget!), which is available for both Apple and Android devices. Join us again next week for another business interview. Have a great week, everyone. </p>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Task 1
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="container mt-5">

          
                  <h1 class="mb-4">Matching Exercise</h1>
                  <form id="matchingForm">
                    <div class="row">
                      <div class="col-md-6">
                        <p class="matching-item">1. When do you usually get</p>
                        <p class="matching-item">2. When do you usually do                        </p>
                        <p class="matching-item">3. What is your average mark</p>
                        <p class="matching-item">4. How do you feel before doing</p>
                        <p class="matching-item">5. What kind of relationship do you have
                        </p>
                        <p class="matching-item">6. Where do you usually sit
                        </p>
                        <p class="matching-item">7. How much time do you spend
                        </p>
                        <p class="matching-item">8. What do you want</p>
                      </div>
                      <div class="col-md-6">
                        <p class="matching-item">a. to do when you finish school?</p>
                        <p class="matching-item">b. with the staff at school? </p>
                        <p class="matching-item">c. an exam? </p>
                        <p class="matching-item">d.  to school? </p>
                        <p class="matching-item">e. your homework? </p>
                        <p class="matching-item">f. studying before an exam? </p>
                        <p class="matching-item">g. in tests? 
                        </p>
                        <p class="matching-item">k. in class?</p>
                      </div>
                    </div>
                    
                
                  </form>
          


                <h1 class="mb-4">Multiple Choice Quiz</h1>
                <form id="surveyForm">
          
                  
                  <fieldset class="mb-4">
                    <legend>Question 1: At the beginning the teacher asks the students to think carefully about?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Python" value="Python">
                      <label class="form-check-label" for="q2Python">the questions</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2JavaScript" value="JavaScript">
                      <label class="form-check-label" for="q2JavaScript">their answers</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Java" value="Java">
                      <label class="form-check-label" for="q2Java">where they sit</label>
                    </div>
                  </fieldset>
                  
                  <fieldset class="mb-4">
                    <legend>Question 2: The answers the students choose will be seen by ?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3AI" value="Artificial Intelligence">
                      <label class="form-check-label" for="q3AI">the other students</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3WebDev" value="Web Development">
                      <label class="form-check-label" for="q3WebDev">the teacher</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3Blockchain" value="Blockchain">
                      <label class="form-check-label" for="q3Blockchain">nobody</label>
                    </div>
                  </fieldset>

                  <fieldset class="mb-4">
                    <legend>Question 3: The first question is about the time?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Python" value="Python">
                      <label class="form-check-label" for="q2Python">students arrive at school</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2JavaScript" value="JavaScript">
                      <label class="form-check-label" for="q2JavaScript">students spend at school</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Java" value="Java">
                      <label class="form-check-label" for="q2Java">students leave</label>
                    </div>
                  </fieldset>
                  
                  <fieldset class="mb-4">
                    <legend>Question 4: The teacher asks about ?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3AI" value="Artificial Intelligence">
                      <label class="form-check-label" for="q3AI">where students do their homework</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3WebDev" value="Web Development">
                      <label class="form-check-label" for="q3WebDev">how much time students spend doing their homework</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3Blockchain" value="Blockchain">
                      <label class="form-check-label" for="q3Blockchain">when the students do their homework.                      </label>
                    </div>
                  </fieldset>

                  <fieldset class="mb-4">
                    <legend>Question 5: In question three, students who normally get half marks should answer ?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Python" value="Python">
                      <label class="form-check-label" for="q2Python">A</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2JavaScript" value="JavaScript">
                      <label class="form-check-label" for="q2JavaScript">B</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Java" value="Java">
                      <label class="form-check-label" for="q2Java">C</label>
                    </div>
                  </fieldset>
                  
                  <fieldset class="mb-4">
                    <legend>Question 6: Question four is about the students’ relationship with?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3AI" value="Artificial Intelligence">
                      <label class="form-check-label" for="q3AI">people in their lives outside school</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3WebDev" value="Web Development">
                      <label class="form-check-label" for="q3WebDev">people working at the school</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3Blockchain" value="Blockchain">
                      <label class="form-check-label" for="q3Blockchain">people studying at the school</label>
                    </div>
                  </fieldset>

                  <fieldset class="mb-4">
                    <legend>Question 7: The teacher thinks some students prefer to sit in the middle of the class so that ?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Python" value="Python">
                      <label class="form-check-label" for="q2Python">they can hear the teacher without being right at the front</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2JavaScript" value="JavaScript">
                      <label class="form-check-label" for="q2JavaScript">they can have pleasant thoughts without following the lesson</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Java" value="Java">
                      <label class="form-check-label" for="q2Java">no one will notice them using their phones</label>
                    </div>
                  </fieldset>
                  
                  <fieldset class="mb-4">
                    <legend>Question 8: Question six is about students? </legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3AI" value="Artificial Intelligence">
                      <label class="form-check-label" for="q3AI">exam results</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3WebDev" value="Web Development">
                      <label class="form-check-label" for="q3WebDev">future career</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3Blockchain" value="Blockchain">
                      <label class="form-check-label" for="q3Blockchain">plans for the future.                      </label>
                    </div>
                  </fieldset>


                  <fieldset class="mb-4">
                    <legend>Question 9: Students with mostly As have a good ?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Python" value="Python">
                      <label class="form-check-label" for="q2Python">attitude towards studying</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2JavaScript" value="JavaScript">
                      <label class="form-check-label" for="q2JavaScript">idea about what they want to do in the future</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Java" value="Java">
                      <label class="form-check-label" for="q2Java">network of support at school</label>
                    </div>
                  </fieldset>
                  
                  <fieldset class="mb-4">
                    <legend>Question 10: Students with mostly Bs need to ?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3AI" value="Artificial Intelligence">
                      <label class="form-check-label" for="q3AI">become excellent students</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3WebDev" value="Web Development">
                      <label class="form-check-label" for="q3WebDev">increase the time they spend studying</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3Blockchain" value="Blockchain">
                      <label class="form-check-label" for="q3Blockchain">change some of their habits</label>
                    </div>
                  </fieldset>

                  <fieldset class="mb-4">
                    <legend>Question 11: Students with mostly Cs are probably ?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Python" value="Python">
                      <label class="form-check-label" for="q2Python">wasting a lot of their time</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2JavaScript" value="JavaScript">
                      <label class="form-check-label" for="q2JavaScript">unable to do any better</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q2" id="q2Java" value="Java">
                      <label class="form-check-label" for="q2Java">going to be unemployed in the future.</label>
                    </div>
                  </fieldset>
                  
                  <fieldset class="mb-4">
                    <legend>Question 12: Students with mostly Cs should ?</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3AI" value="Artificial Intelligence">
                      <label class="form-check-label" for="q3AI">join the homework club</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3WebDev" value="Web Development">
                      <label class="form-check-label" for="q3WebDev">try to change as soon as possible</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="q3" id="q3Blockchain" value="Blockchain">
                      <label class="form-check-label" for="q3Blockchain">leave school at the first opportunity</label>
                    </div>
                  </fieldset>
                </form>
                <h1 class="mb-4">Gap Fill Exercise</h1>
                <form id="gapFillForm">
                  <p>The quiz is designed to find out what kind of <input type="text" name="blank1"
                      class="form-control"> you are.</p>
                  <p>The teacher tells the students to pay  <input type="text" name="blank2" class="form-control"> to what he is saying.</p>
                  <p>One question asks about the students’ average  <input type="text" name="blank3" class="form-control"> in tests.</p>
                  <p>Another question asks about students’ relationship with the  <input type="text" name="blank1" class="form-control"> at the school. 
                  </p>
                <p>For some people, what they do after school   <input type="text" name="blank2" class="form-control"> on their exam results. 
                </p>
                <p>Students with mostly A answers have a good  <input type="text" name="blank3" class="form-control"> towards studying. </p>
                <p>Students with mostly B answers can improve and <input type="text" name="blank2" class="form-control"> excellent students. 
                </p>
                <p>If ‘C’ students don’t change, they might leave school without any <input type="text" name="blank3" class="form-control"></p>
                  <button type="submit" class="btn btn-primary">Check Answers</button>
                </form>
              </div>
            </div>
          </div>

    
        </div>
        <!-- <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Task 2
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
              plugin adds the appropriate classes that we use to style each element. These classes control the overall
              appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom
              CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
              <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>


@endforeach


@endsection