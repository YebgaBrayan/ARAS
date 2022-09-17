<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assetsadmin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="asset/css/style.css" rel="stylesheet">
<style>

.alert {
  padding: 15px;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: .25rem;
}

.alert > p,
.alert > ul {
  margin-bottom: 0;
}

.alert > p + p {
  margin-top: 5px;
}

.alert-heading {
  margin-top: 0;
  color: inherit;
}

.alert-link {
  font-weight: bold;
}

.alert-dismissible {
  padding-right: 35px;
}

.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}

.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d0e9c6;
}

.alert-success hr {
  border-top-color: #c1e2b3;
}

.alert-success .alert-link {
  color: #2b542c;
}

.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bcdff1;
}

.alert-info hr {
  border-top-color: #a6d5ec;
}

.alert-info .alert-link {
  color: #245269;
}

.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faf2cc;
}

.alert-warning hr {
  border-top-color: #f7ecb5;
}

.alert-warning .alert-link {
  color: #66512c;
}

.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebcccc;
}

.alert-danger hr {
  border-top-color: #e4b9b9;
}

.alert-danger .alert-link {
  color: #843534;
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    scroll-behavior: smooth;
}

p{
    font-weight: 300;
    color: #111;
}


header{
    position: fixed;
    top: 0%;
    left: 0%;
    padding: 20px 10px;
    width: 100%;
    z-index: 1;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    transition: 0.5s;
}

.logo{
    color: #fff;
    font-weight: bold;
    font-size: 2em;
    text-decoration: none;
}
.logo span{
    color: BLUE;
}

.navbar{
    display: flex;
    position: relative;
}
.navbar li{
    list-style: none;
}
.navbar a{
    color: #fff;
    text-decoration: none;
    margin-left: 30px;
    font-weight: 700;
}

.btn-reserve{
    padding: 10px 20px;
    background: BLUE;
    margin-top: -10px;
    text-transform:
    uppercase;
}

.btn-reserve:hover{
    background: hsl(51, 100%, 50%);
    transition: ease-out;
}

header .navbar li a:hover{
    color: hsl(51, 100%, 50%);
    border-bottom: 2px solid hsl(51, 100%, 50%);
}

.banniere{
    position: relative;
    width: 100%;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover;
    animation: slide 25s infinite;
}
@keyframes slide {
    0%{
        background-image: url(./images/R.jpg);
        }
    45%{
        background-image: url(./images/img-fond1.jpg);

    }
    75%{
        background-image: url(./images/bg2.jpg);

    }

    100%{
        background-image: url(./images/R.jpg);

    }

}

.banniere .contenu{
    max-width: 70%;
    text-align: center;
}
.banniere .contenu h2{
    color: #fff;
    font-size: 3em;
    text-transform: capitalize;
}
.contenu p:nth-child(2){
    color: #ffff;
    font-size: 1.2em;
}

.btn1{
    font-size: 1em;
    color: #fff;
    background: BLUE;
    padding: 10px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-left: 10px;
}
.btn2{
    font-size: 1em;
    color: #fff;
    background: gold;
    padding: 10px 20px;
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: 0.5s;
    margin-left: 10px;
}

.btn1:hover{
letter-spacing: 4px;
}
section{
    padding: 100px;
}
.row{
    position: relative;
    width: 100%;
    display: flex;
    justify-content: space-between;
}

.row .col50{
    position: relative;
    width: 48%;
    justify-content: center;
    align-items: center;

}

.row .col50 h2{
    margin-bottom: 20px;
}

.titre-texte{
    color: #000;
    font-size: 2em;
    font-weight: 300px;
    text-transform: capitalize;
}

.titre-texte span{
    color: hsl(51, 100%, 50%);
    font-size: 1.5em;
    font-weight: 700px;
}

.row .col50 img{
    height: 450px;
    width: 600px;
    position: relative;
}

.titre{
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.menu{
    margin-top: -100px;
}

.menu .contenu{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 40px;
}

.menu .contenu .box{
    width: 350px;
    margin: 20px;
    border: 20px solid #fff;
    box-shadow: 20px 15px 35px rgba(0,0,0, 0.8);
}

.menu .contenu .box .imbox{
    position: relative;
    width: 100%;
    height: 300px;
}

.menu .contenu .box .imbox img{
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.menu .contenu .box .text{
    text-align: center;
    font-weight: 300px;
    color: #111;
}

.menu .contenu .box .text h3{
    font-weight: 400;
}

.expert{
    margin-top:-100px;
}

.expert .contenu{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 40px;
}

.expert .contenu .box{
    width: 250px;
    margin: 15px;
}
.expert .contenu .box img{
    position: relative;
    width: 100%;
    height: 300px;
    top: 0;
    left: 0;
    object-fit: cover;
    border-radius:50% !important;

}

.expert .contenu .box h3{
    color: #111;
    font-weight: 400;
    text-align: center;
}

.temoignage{
    background-image: url(./images/bg2.jpg);
    background-size: cover;
}

.temoignage .contenu{
    display: flex;
    margin-top: 40px;
    width: 100%;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
}

.temoignage .contenu .box{
    width: 340px;
    margin: 20px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 15px;
    padding: 40px;
}

.temoignage .contenu .box .imbox{
    width: 80px;
    height: 80px;
    border-radius: 50px;
    position: relative;
    margin-bottom: 20px;
    overflow: hidden;
}

.temoignage .contenu .box .imbox img{
    position: relative;
    width: 100%;
    height: 100%;
    top:0;
    left: 0;
    object-fit: cover;
    justify-content: center;
    align-items: center;
}

.temoignage .contenu .box .text{
    text-align: center;
    color: #666;
    font-style: italic;
}

.temoignage .contenu .box .text h3{
    color: hsl(51, 100%, 50%);
    margin-top: 20px;
    font-size: 1em;
    font-weight: 600;
}

.blanc .titre-texte{
    color: #fff;
}

.blanc .titre-texte,
.blanc p{
    color: #fff;
}

.contact{
    background-image: url(./images/img-form.jpg);
    background-size: cover;
    box-shadow: 2px 2px 12px rgba(0,0,0, 0.8);
    width: 100%;
    background-position: unset;
}

.contactform{
    padding: 75px 50px;
    background: transparent;
    box-shadow: 5px 15px 50px rgba(0,0,0, 0.8);
    max-width: 500px;
    margin-top: 50px;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-left: 32%;
}

.contactform .inputboite{
    position: relative;
    width: 100%;
    margin-bottom: 20px;
    display: flex;
}
.yeb{
    margin-right: 10px;
}

.contactform h3{
    color: #111;
    font-size: 1.2em;
    margin-bottom: 20px;
}

.contactform .inputboite input,
.contactform .inputboite textarea{
    width: 100%;
    border: 1px solid #555;
    padding: 10px;
    color: #111;
    outline: none;
    font-size: 16px;
    font-weight: 300;
    resize: none;
    text-align: center;
}

.contactform .inputboite input[type="submit"]{
    font-size: 1em;
    font-weight: 700;
    color: #ffff;
    background: BLUE;
    display: inline-block;
    cursor: pointer;
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 2px;
    outline: none;
    border: none;
    transition: 0.5s;
    max-width: 120px;
    align-items: center;
    justify-content: center;

}

.copyright{
    padding: 20px 40px;
    border-top: 2px solid rgba(0,0,0, 0.1);
    background: rgba(228,222,222,);
    text-align: center;
}

.copyright p:nth-child(1){
    color: #333;
}

.copyright a {
    color: BLUE;
    text-decoration: none;
    font-weight: 600;
    font-style: italic;
}

.contact .titre-text span{
    color: hwb(51 0% 0%);
    font-size: 2em;
}

header.sticky{
    background: #fff;
    padding: 10px 10px;
    box-shadow: 0px 5px 20px rgba(0,0,0, 0.05);
}

header.sticky .logo{
    color: #000;
}

header.sticky .navbar li a {
    color: #000;
}

header.sticky li a:hover{
    color: #fb911f;
    border-bottom: 2px solid #fb911f;
}

@media (max-width: 991px) {
header,
header.sticky{
    padding: 10px 20px;
}

header .navbar li{
    margin-left: 0px;
}

header .navbar li a {
    text-decoration: none;
    color: #111;
    font-size: 1.6em;
    font-weight: 300;
}

.navbar{
    display: none;
}
section{
    padding: 20px;
}

header .navbar.active{
    width: 100%;
    height: calc(100% -68px);
    position: fixed;
    top: 68px;
    left:0;
    display: flex;
    justify-content: center;
    flex-direction: column;
    background: #ffff;
    align-items: center;
}

.menuToggle{
    position: relative;
    width: 40px;
    height: 40px;
    background-image: url(./images/menu.png);
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    background-size: 30px;
}

.menuToggle.active
{
    background-image: url(./images/close.png);
    background-size: 25px;
    background-repeat: no-repeat;
    background-origin: center;
}

header.sticky .menuToggle{
    filter: invert(1);
}


.banniere .contenu h2{
    font-size: 2em;
}

.row .col50 img{
    margin-left: 18%;
}

.contenu p:nth-child(2){
    font-size: 1.2em;
}
.expert{
    margin-top: 0px;
}

.menu{
    margin-top: 0px;
}

.row{
    display: flex;
    flex-direction: column;
}



.temoignage h2{
    font-size: 2em;
    text-align: center;
}

.temoignage p{
text-align: center;
}

.contactform{
    margin-left: 2%;
}


    .row .col50 {
        position: relative;
        width: 100%;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;

    }

    .row{
        flex-direction: column;
    }

}

@media (max-width: 480px)
{
    .banniere .contenu h2{
        font-size: 2.2em;
        color: #fff;
    }

    .titre-text{
        color: #000;
        font-size: 2rem;
        font-weight: 300;
        text-transform: capitalize;
    }

    .temoignage h2
    {
        font-size: 1.1em;
    }

    .temoignage p{
        text-align: center;
    }
}/* loader */

.loader {
    position: absolute;
    width: 100%;
    height: 100%;
    background: #000;
    display: flex;
    justify-content: center;
    align-items: center;
}
.lettre {
    color: #484848;
    font-size: 40px;
    letter-spacing: 15px;
    margin-bottom: 150px;
    animation: flash 1.2s linear infinite;
}
@keyframes flash {
    0% {
        color: #fff900;
        text-shadow: 0 0 7px #fff900;
    }
    90% {
        color: #484848;
        text-shadow: none;
    }
    100% {
        color: #fff900;
        text-shadow: 0 0 7px #fff900;
    }
}

.lettre:nth-child(1){
    animation-delay: 0.1s;
}
.lettre:nth-child(2){
    animation-delay: 0.2s;
}
.lettre:nth-child(3){
    animation-delay: 0.3s;
}
.lettre:nth-child(4){
    animation-delay: 0.4s;
}
.lettre:nth-child(5){
    animation-delay: 0.5s;
}
.lettre:nth-child(6){
    animation-delay: 0.6s;
}
.lettre:nth-child(7){
    animation-delay: 0.7s;
}
.lettre:nth-child(8){
    animation-delay: 0.8s;
}
.lettre:nth-child(9){
    animation-delay: 0.9s;
}
.lettre:nth-child(10){
    animation-delay: 1s;
}

.fondu-out {
    opacity: 0;
    transition: opacity 0.4s ease-out;
}
#scroll_to_top {
  position: fixed;
  width: 25px;
  height: 25px;
  bottom: 50px;
  right: 30px;
}
#scroll_to_top {
  width: 25px;
  background-color: blue;
}
.back-to-top.active {
    visibility: visible;
    opacity: 1;
}
.back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 99999;
    background: blue;
    width: 40px;
    height: 40px;
    border-radius: 4px;
    transition: all 0.4s;
}
</style>
    <title>Aras</title>
<body>
    <div class="loader">
        <span class="lettre">A</span>
        <span class="lettre">R</span>
        <span class="lettre">A</span>
        <span class="lettre">S</span>
        <span class="lettre">.</span>
        <span class="lettre">S</span>
        <span class="lettre">I</span>
        <span class="lettre">T</span>
        <span class="lettre">E</span>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>
<header>
    @if (Route::has('login'))
    @auth

    <a href="/accueil" class="logo"><span>A</span>RAS</a>

    @else

    <a href="/" class="logo"><span>A</span>RAS</a>

        @if (Route::has('register'))
    <a href="/" class="logo"><span>A</span>RAS</a>
        @endif
    @endauth
@endif    <div class="menuToggle"onclick="toggleMenu();"></div>
    <ul class="navbar">
        @if (Route::has('login'))
        @auth
        <li><a href="/accueil">Home</a></li>
        <li><a href="/Mure" >Mur</a></li>
        <li><a href="/News">News</a></li>
        <li><a href="submit">Publier</a></li>
        <li><a href="/search">Search</a></li>
        <li><a href="/">About</a></li>
        <li><a href="/app-download">Download-app</a></li>
        <a href="/redirects" style="margin-top: -0.6%" class="btn2">Mon Profil</a>

        @else
            <li><a href="/accueil">Home</a></li>
            <li><a href="/Mure" >Mur</a></li>
            <li><a href="/News">News</a></li>
            <li><a href="submit">Publier</a></li>
            <li><a href="/search">Search</a></li>
            <li><a href="/">About</a></li>
            <li><a href="/app-download">Download-app</a></li>
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
@endif
    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Welcome to ARAS </h2>
        <p>We put at your disposal several ways to find missing persons or to be found.</p>
        <a href="search" class="btn1">search now</a>
        <a href="#" class="btn2">Learn more</a>
    </div>
</section>

<section class="menu" id="menu">
    <div class="titre">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/c1.jpg" alt="">
            </div>
            <div class="text">
                <h3>Afrique</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c2.jpg" alt="">
            </div>
            <div class="text">
                <h3>Europe</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c3.jpg" alt="">
            </div>
            <div class="text">
                <h3>Antarctique</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c4.jpg" alt="">
            </div>
            <div class="text">
                <h3>Asie</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c5.jpg" alt="">
            </div>
            <div class="text">
                <h3>North America</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c6.jpg" alt="">
            </div>
            <div class="text">
                <h3>South America</h3>
            </div>
        </div>

 <div class="titre">
    <a href="#" class="btn1">See more</a>
 </div>
</section>
<section class="expert" id="expert">
    <div class="titre">
        <h2 class="titre-texte">Our <span>E</span>xperts</h2>
        <p>These people who work night and day to find your loved ones as quickly as possible. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe1.webp" alt="">
            </div>
            <div class="text">
                <h3>YEBGA Brayan</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe2.jpg" alt="">
            </div>
            <div class="text">
                <h3>YEBGA Brayan</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe3.jpg" alt="">
            </div>
            <div class="text">
                <h3>YEBGA Brayan</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe4.jpg" alt="">
            </div>
            <div class="text">
                <h3>YEBGA Brayan</h3>
            </div>
        </div>
    </div>
 </div>
</section>
 <section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">What our  <span>C</span>ustomers say</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/t1.jpeg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>YEBGA Brayan</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/t2.jpg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>YEBGA Brayan</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/t3.jpg" alt="">
            </div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <h3>YEBGA Brayan</h3>
            </div>
        </div>
    </div>
 </section>

 <form action="{{ route('send.note') }}" method="POST">
    @csrf
 <section class="contact" id="contact">

     <div class="titre noir">
         <h2 class="titre-text"><span>C</span>ontact</h2>
         <p>Parceque votre avis compte, laissez votre avis.</p>
     </div>
     <div class="contactform">
        @if ($message = Session::get('success'))
        <div class=".alert alert-success">
            <P>{{$message }}</P>
        </div>
        @endif
         <h3>Send a message</h3>
         <div class="inputboite">
            <textarea name='content' id="content" placeholder="Enter your message"></textarea>
         </div>
         {{-- {!! NoCaptcha::display() !!} --}}

         <div class="inputboite">
             <input type="submit" value="submit">
         </div>
     </div>
 </section>
</form>
 <div class="copyright">
     <p>copyright 2022 <a href="mailto:yebgabrayan@gmail.com">YEBGA Brayan</a> Aras itech. Tous droits reservé</p>
 </div>
 <script>     if($t==1)
    alert('Success');</script>
 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
         const loader = document.querySelector('.loader');

window.addEventListener('load', () => {

    loader.classList.add('fondu-out');

})
     }
 </script>
  {{-- {!! NoCaptcha::renderJs() !!} --}}

</body>
</html>

