<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="image/logo01.png">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="css.css" />
</head>

<body>
  <header>
    <a href="" class="logo"><i class="fa fa-home" aria-hidden="true"></i> iMovies</a>
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Adults</a></li>
      <li><a href="#">Kids</a></li>
      <li><a href="#">Trend</a></li>
      <li><a href="#">My List</a></li>
    </ul>
    <div class="search">
      <p class="login">Đăng nhập</p>
      <!-- <img width="35" height="35" src="image/person.webp" alt=""> -->
      <input type="text" placeholder="Search..." />
      <i class="fa fa-search"></i>
    </div>
  </header>
  <div class="box-acount active">
    <div class="form-acount" id="container">
      <div class="form-container sign-up-container">
        <form action="#">
          <h1>Create Account</h1>
          <div class="click">
            <div class="input">
              <input class="form-input" type="email" placeholder=" " />
              <label for="">Email</label>
            </div>
            <div class="input">
              <input class="form-input" type="text" placeholder=" " />
              <label for="">Username</label>
            </div>
            <div class="input">
              <input class="form-input" type="password" placeholder=" " /><label for="">Password</label>
            </div>
            <div class="input">
              <input class="form-input" type="password" placeholder=" " />
              <label for="">Enter-Pass</label>
            </div>
          </div>

          <button>Sign Up</button>
        </form>
      </div>

      <div class="form-container sign-in-container">
        <form action="#">
          <h1>Sign in</h1>
          <div class="click">
            <div class="input">
              <input class="form-input" type="email" placeholder=" " />
              <label for="">Email</label>
            </div>
            <div class="input">
              <input class="form-input" type="password" placeholder=" " /><label for="">Password</label>
            </div>
          </div>
          <div class="check-box">
            <div class="left">
              <input type="checkbox" /> <span>Lưu mật khẩu</span>
            </div>
            <div class="right"><a href="#">Quên mật khẩu?</a></div>
          </div>

          <button>Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Chào mừng trở lại!</h1>
            <p>
              Để giữ kết nối với chúng tôi, vui lòng đăng nhập bằng thông tin cá
              nhân của bạn
            </p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Chào bạn!</h1>
            <p>
              Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi
            </p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <img class="close" src="image/close.png" alt=""/>
  </div>