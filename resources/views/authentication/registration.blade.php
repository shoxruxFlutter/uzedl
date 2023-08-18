@extends('layouts.base')



@section('content')
<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="mb-0">Register</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
      </div>
    </div>
  </div> 
<div class="custom-breadcrumns border-bottom">
    <div class="container">
        <a href="{{ route('home') }}">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Register</span>
    </div>
</div>

<div class="site-section">
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="username">Ваше имя</label>
                            <input type="text" id="username" name="username" value="" placeholder="Username"
                                class="form-control form-control-lg">
                            @error('username')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="email">Ваш email</label>
                            <input type="text" id="email" name="email" value="" placeholder="Email"
                                class="form-control form-control-lg">
                            @error('email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="password">Пароль</label>
                            <input type="password" id="password" name="password" value="" placeholder="Пароль"
                                class="form-control form-control-lg">
                            @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!-- <div class="col-md-12 form-group">
                            <label for="password2">Пароль</label>
                            <input type="password" id="password2" name="password2" value="" placeholder="Повторите пароль"
                                class="form-control form-control-lg">
                            @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <button type="submit" value="Log In" name="SendMe"
                                class="btn btn-primary btn-lg px-5">Зарегистрироваться</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>
</div>

@endsection