<header class="header">

<a href="#" class="logo"> <i class="fas fa-school"></i>KUET Pre-cadet Kindergarten School</a>

<nav class="navbar">
    <a href="#home">home</a>
    <a href="#about">about</a>
    <a href="#education">education</a>
    <a href="#teacher">teacher</a>
    <a href="#gallery">gallery</a>
    <a href="#contact">contact</a>
</nav>

<div class="icons">
    <div class="fas fa-user" id="login-btn"></div>
    <div class="fas fa-bars" id="menu-btn"></div>
</div>

<div class="account-form">
    <div id ="close-form" class="fas fa-times"></div>
    <div class="buttons">
    <span class="btn login-btn" style="font-size: 10px;">login</span>
    <span class="btn register-btn" style="font-size: 10px;">register</span>
</div>
<form class="loginform" action="./backend/login.php" method="post">
    <h3>login form</h3>
    <input type ="email" placeholder="Enter your e-mail" name="Email" class="box">
    <input type ="password" placeholder="Enter your password" name="password" class="box">
    <div class ="flex">
        <input type="checkbox" name="" id="remember-me">
        <label for="remember-me" style="font-size: 10px;">remember me</label>
        <a href="#" style="font-size: 10px;">forgot password</a>
        </div>
        <input type="submit" value="login now" class="btn">
</form>
<form class="registerform" action="./backend/register.php" method="post">
    <h3>Registration form</h3>
    <input type ="text" id="name" name="name" placeholder="Enter your name" class="box">
    <input type ="email" name="email" placeholder="Enter your e-mail" class="box">
    <input type ="int" name="phone" placeholder="Enter your phone number" class="box">
    <input type ="password" name="password" placeholder="Enter  password" class="box">
    <input type ="password" name="con_password" placeholder="Confirm password" class="box">
    <div class ="flex">
        </div>
        <input type="submit" value="Register" class="btn">
</form>
    </div>

</header>