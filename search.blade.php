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
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="../fonts.googleapis.com/css2ab8c.css?family=Inter:wght@300;400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/glightbox-master/dist/css/glightbox.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/dropzone/dist/dropzone.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/flatpickr/dist/flatpickr.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/plyr/plyr.css">
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
    background-image: url(./images/img-form.jpg);
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

.copyright{
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
    font-size: 80px;
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
h1{
    margin: 0 0 10px;
    padding: 0;
    color: #fff;
    font-size:24px;
    margin-left: 14px;
}
.box{
    position:absolute;
    top:50%;
    left:50%;
    width: 500px;
    transform:translate(-50%, -50%)
}
input{
    position: relative;
    display: inline-block;
    font-size: 20px;
    box-sizing: :border-box;
    transition: .5s;
}
input[type="text"]{
    background: #fff;
    width: 340px;
    height: 50px;
    border:none;
    border: none;
    outline: none;
    border-radius: 25px 0 0 25px;
}
input[type="submit"]{
    position: relative;
    border-radius: 0 25px 25px 0;
    width: 150px;
    height: 50px;
    border: none;
    outline: none;
    cursor: pointer;
    background:#ffc107;
    color:#fff;
    margin-left: -20px;
}
input[type="submit"]:hover{

    background:#ff5722;
}
.wrapper,
.wrapper .img-area,
.social-icons a,
.buttons button{
  background: rgba(0, 0, 0, 0.74);
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #181822;
}
.wrapper{
  position: relative;
  width: 350px;
  padding: 30px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.wrapper .icon{
  font-size: 17px;
  color: #31344b;
  position: absolute;
  cursor: pointer;
  opacity: 0.7;
  top: 15px;
  height: 35px;
  width: 35px;
  text-align: center;
  line-height: 35px;
  border-radius: 50%;
  font-size: 16px;
}
.wrapper .icon i{
  position: relative;
  z-index: 9;
}
.wrapper .icon.arrow{
  left: 15px;
}
.wrapper .icon.dots{
  right: 15px;
}
.wrapper .img-area{
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.img-area .inner-area{
  height: calc(100% - 25px);
  width: calc(100% - 25px);
  border-radius: 50%;
}
.inner-area img{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
}
.wrapper .name{
  font-size: 23px;
  font-weight: 500;
  color: #31344b;
  margin: 10px 0 5px 0;
}
.wrapper .about{
  color: #44476a;
  font-weight: 400;
  font-size: 16px;
}
.wrapper .social-icons{
  margin: 15px 0 25px 0;
}
.social-icons a{
  position: relative;
  height: 40px;
  width: 40px;
  margin: 0 5px;
  display: inline-flex;
  text-decoration: none;
  border-radius: 50%;
}
.social-icons a:hover::before,
.wrapper .icon:hover::before,
.buttons button:hover:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  background: #ecf0f3;
  box-shadow: inset -3px -3px 7px #ffffff,
              inset 3px 3px 5px #ceced1;
}
.buttons button:hover:before{
  z-index: -1;
  border-radius: 5px;
}
.social-icons a i{
  position: relative;
  z-index: 3;
  text-align: center;
  width: 100%;
  height: 100%;
  line-height: 40px;
}
.social-icons a.fb i{
  color: #4267B2;
}
.social-icons a.twitter i{
  color: #1DA1F2;
}
.social-icons a.insta i{
  color: #E1306C;
}
.social-icons a.yt i{
  color: #ff0000;
}
.wrapper .buttons{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttons button{
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 12px 0;
  color: #31344b;
  font-size: 17px;
  font-weight: 400;
  border-radius: 5px;
  cursor: pointer;
  z-index: 4;
}
.buttons button:first-child{
  margin-right: 10px;
}
.buttons button:last-child{
  margin-left: 10px;
}
.wrapper .social-share{
  display: flex;
  width: 100%;
  margin-top: 30px;
  padding: 0 5px;
  justify-content: space-between;
}
.social-share .row{
  color: #31344b;
  font-size: 17px;
  cursor: pointer;
  position: relative;
}
.social-share .row::before{
  position: absolute;
  content: "";
  height: 100%;
  width: 2px;
  background: #e0e6eb;
  margin-left: -25px;
}
.row:first-child::before{
  background: none;
}
.social-share .row i.icon-2{
  position: absolute;
  left: 0;
  top: 50%;
  color: #31344b;
  transform: translateY(-50%);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
}
.row:nth-child(1):hover i.fa-heart,
.row:nth-child(2):hover i.fa-comment{
  opacity: 1;
  pointer-events: auto;
}
.hans{
    background-color: rgba(8, 1, 1, 0.603);
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
    background-color: #323102
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
    margin-left: 25%;
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
        color: rgb(194, 15, 15);
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
}
</style>
    <title>Aras</title>
<body>
    <div class="loader">

    </div>
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
    @endif        <div class="menuToggle"onclick="toggleMenu();"></div>
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
                <li><a href="/search2">Recherche-Détailée</a></li>
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
<section class="banniere" id="banniere"></section>
    <div class="box">

    <form>

        <h1>Search</h1>
        {{-- <input  type="text" name="" class="form-control typeahead" placeholder="...."> --}}
        <input type="text"class="form-control typeahead" placeholder="...." name="" value="Search">
    </form>
</div>

</section>

 <div class="copyright">
     <p>copyright 2022 <a href="mailto:yebgabrayan@gmail.com">YEBGA Brayan</a> propharma itech. Tous droits reservé</p>
 </div>
 <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
      <script>
        var path = "{{route('autocomplete')}}";
        $('input.typeahead').typeahead({
            source: function(terms,process){
                return $.get(path,{terms:terms},function(data){
                    return process(data);
                });
            }
        });
      </script>
</body>
</html>
