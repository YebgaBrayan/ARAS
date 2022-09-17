<?php
    use App\Models\User;
    use App\Models\Publication;
    use Illuminate\Support\Facades\Route;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aras-Mure</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="css/style.css">
  <link rel = "preconnect" href = "https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<style>


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
    background-image: url("./images/Mure - Copie.jpg");
}

.banniere .contenu{
    max-width: 70%;
    text-align: center;
}
.banniere .contenu h2{
    color: blue;
    font-size: 4em;
    text-transform: capitalize;
}
.contenu p:nth-child(2){
    color: #ffd700;
    font-size: 2.2em;
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
    font-size: 2em;
    color: #fff;
    background: gold;
    padding: 5px 10px;
    transition: 0.5s;
    margin-left: 10px;
    width: 1rem;

}
.btn2:hover{

    font-size: 2em;
    color: #fff;
    background: blue;
    padding: 5px 10px;
    transition: 0.5s;
    margin-left: 10px;
    width: 2rem;

}

.btn1:hover{
letter-spacing: 4px;
}
#main{
    padding: 100px;
    /* background-image: url(./images/Mure2.jpg);
    background-size: cover; */
    background-color: black;

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
    border-top: 2px solid rgba(0,0,0, 0.1);
    margin-bottom:-12px;
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
        font-size: 3em;
        color: rgb(0 0 255);
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
/* body{

   overflow-y: hidden;
   overflow-x: hidden;

} */

.filters a {
position: relative;
display: inline-block;
padding: 15px 30px;
color: #2196f3;
letter-spacing: 4px;
text-transform: uppercase;
text-decoration: none;
font-size: 24px;
overflow: hidden;
transition: 00.2s
}
/* .filters a:hover {
color: #255784;
background: #2196f3;
box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
transition-delay: 1s;
} */
section div div div a span:nth-child(1){
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent , #2196f3);
}
section div div div a:hover span:nth-child(1){
    left: 100%;
    transition-delay: 0.5s;
    transition: 1s;
}

section div div div a span:nth-child(2){
    top: -100%;
    right:0;
    width: 2px;
    height: 100px;
    background: linear-gradient(180deg,transparent , #2196f3);
}
section div div div a:hover span:nth-child(2){
    left: 100%;
    transition-delay: 0.25s;
    transition: 1s;
}
section div div div a span:nth-child(3){
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent , #2196f3);
}
section div div div a:hover span:nth-child(3){
    right: 100%;
    transition: 1s;
}
.item {
  border: none;
  margin-bottom: 30px;
}
.item .item-wrap {
  display: block;
  position: relative;
  overflow: hidden;
}
.item .item-wrap:after {
  z-index: 2;
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.4);
  visibility: hidden;
  opacity: 0;
  transition: 0.3s all ease-in-out;
}
.item .item-wrap img {
  transition: 0.3s transform ease;
  transform: scale(1);
}
.item .item-wrap > .work-info {
  position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
  z-index: 3;
  transform: translateY(-50%);
  color: #fff;
  opacity: 0;
  visibility: hidden;
  margin-top: 20px;
  transition: 0.3s all ease;
}
.item .item-wrap > .work-info h3 {
  font-size: 20px;
  margin-bottom: 0;
}
.item .item-wrap > .work-info span {
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
}
.item .item-wrap:hover {
  text-decoration: none;
}
.item .item-wrap:hover img {
  transform: scale(1.05);
}
.item .item-wrap:hover:after {
  opacity: 1;
  visibility: visible;
}
.item .item-wrap:hover .work-info {
  margin-top: 0px;
  opacity: 1;
  visibility: visible;
}

.testimonial-wrap {
  padding: 50px 50px 80px 50px;
  background: #eceff2;
}
.testimonial-wrap .testimonial {
  text-align: center;
  max-width: 500px;
  margin: 0 auto;
}
.testimonial-wrap .testimonial img {
  border-radius: 50%;
  width: 120px;
  margin: 0 auto 30px auto;
}
.testimonial-wrap .testimonial blockquote p {
  font-size: 20px;
}

.h3 {
  font-size: 20px;
}

.h4 {
  font-size: 16px;
}

.heading {
  font-size: 28px;
}

.readmore {
  display: inline-block;
  border: 1px solid #000;
  padding: 10px 15px;
  font-size: 12px;
  text-transform: uppercase;
  color: #000;
  transition: 0.2s all ease;
  font-weight: 700;
}
.readmore:active, .readmore:focus, .readmore:hover {
  outline: none;
}
.readmore:hover {
  color: #fff;
  text-decoration: none;
  background: #000;
}

.testimonials-slider .swiper-pagination {
  margin-top: -60px;
  position: relative;
}
.testimonials-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(13, 30, 45, 0.3);
  opacity: 1;
}
.testimonials-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: rgba(13, 30, 45, 0.6);
}

.sticky-content {
  position: sticky;
  position: -webkit-sticky;
  top: 0;
  /* required */
}

.list-line li {
  margin-bottom: 10px;
  position: relative;
  padding-left: 30px;
}
.list-line li:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0.7rem;
  width: 10px;
  height: 2px;
  background: #000;
}

.form-control {
  border-radius: 0;
  background: #f8f9fa;
  border: 1px solid transparent;
  padding-top: 10px !important;
  padding-bottom: 10px !important;
}
.form-control:active, .form-control:focus {
  background: #eff1f4;
  outline: none;
  box-shadow: none;
  border: 1px solid transparent;
}

.custom-progress {
  height: 7px;
  border-radius: 0;
}
.custom-progress .progress-bar {
  background: #000;
}

/* Services */
.services i {
  font-size: 40px;
}
.services h4 {
  padding-top: 10px;
}

/* Contact Form */
.php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}
.php-email-form .error-message br + br {
  margin-top: 25px;
}
.php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}
.php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}
.php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
/* Custom Navmenu */
.custom-navmenu {
  background: #0d1e2d;
}
.custom-navmenu .custom-menu, .custom-navmenu .custom-menu li {
  padding: 0;
  margin: 0;
  list-style: none;
}
.custom-navmenu .custom-menu li {
  margin-bottom: 0;
  font-size: 20px;
}
.custom-navmenu .custom-menu li a {
  color: #fff;
  padding: 10px 0 !important;
}
.custom-navmenu .custom-menu li a:hover {
  text-decoration: none;
}
.custom-navmenu .custom-menu li.active a {
  text-decoration: underline;
}
.custom-navmenu h3 {
  font-size: 20px;
  color: #fff;
}
.custom-navmenu p {
  color: rgba(255, 255, 255, 0.6);
}
.custom-navmenu a {
  color: rgba(255, 255, 255, 0.7);
}
.custom-navmenu a:hover {
  color: #fff;
}

/* Custom Navbar */
.custom-navbar {
  padding-top: 50px;
  width: 100%;
}
@media (max-width: 780px) {
  .custom-navbar > .container {
    padding-right: 0;
    padding-left: 0;
  }
}
.custom-navbar .navbar-brand {
  font-size: 1.7rem;
}

/* Burger */
.burger {
  width: 28px;
  height: 32px;
  cursor: pointer;
  position: relative;
}

.burger:before, .burger span, .burger:after {
  width: 100%;
  height: 2px;
  display: block;
  background: #000;
  border-radius: 2px;
  position: absolute;
  opacity: 1;
}

.burger:before, .burger:after {
  transition: top 0.35s cubic-bezier(0.23, 1, 0.32, 1), transform 0.35s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.35s cubic-bezier(0.23, 1, 0.32, 1), background-color 1.15s cubic-bezier(0.86, 0, 0.07, 1);
  -webkit-transition: top 0.35s cubic-bezier(0.23, 1, 0.32, 1), -webkit-transform 0.35s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.35s cubic-bezier(0.23, 1, 0.32, 1), background-color 1.15s cubic-bezier(0.86, 0, 0.07, 1);
  content: "";
}

.burger:before {
  top: 4px;
}

.burger span {
  top: 15px;
}

.burger:after {
  top: 26px;
}

/* Hover */
.burger:hover:before {
  top: 7px;
}

.burger:hover:after {
  top: 23px;
}

/* Click */
.burger.active span {
  opacity: 0;
}

.burger.active:before, .burger.active:after {
  top: 40%;
}

.burger.active:before {
  transform: rotate(45deg);
}

.burger.active:after {
  transform: rotate(-45deg);
}

.burger:focus {
  outline: none;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  /* padding: 0 0 1rem 0; */
}
.footer a {
  color: #000;
}
.social a {
  display: inline-block;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #f8f9fa;
  position: relative;
  text-align: center;
  color: #0d1e2d;
}
.social a span {
  display: inline-block;
  left: 50%;
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
}
.social a:hover {
  color: #000;
}
/* body{
    background-image: url("./images/Mures2.jpg")
} */

/* Google Fonts - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

/* *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #EFEFEF;
} */
.slide-container{
  max-width: 1120px;
  width: 100%;
  padding: 40px 0;
}
.slide-content{
  margin: 0 40px;
  overflow: hidden;
  border-radius: 25px;
}
.card{
  border-radius: 25px;
  background-color: #FFF;
}
.image-content,
.card-content{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px 14px;
}
.image-content{
  position: relative;
  row-gap: 5px;
  padding: 25px 0;
}
.overlay{
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: #4070F4;
  border-radius: 25px 25px 0 25px;
}
.overlay::before,
.overlay::after{
  content: '';
  position: absolute;
  right: 0;
  bottom: -40px;
  height: 40px;
  width: 40px;
  background-color: #4070F4;
}
.overlay::after{
  border-radius: 0 25px 0 0;
  background-color: #FFF;
}
.card-image{
  position: relative;
  height: 150px;
  width: 150px;
  border-radius: 50%;
  background: #FFF;
  padding: 3px;
}
.card-image .card-img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid #4070F4;
}
.name{
  font-size: 18px;
  font-weight: 500;
  color: #333;
}
.description{
  font-size: 14px;
  color: #707070;
  text-align: center;
}
.button{
  border: none;
  font-size: 16px;
  color: #FFF;
  padding: 8px 16px;
  background-color: #4070F4;
  border-radius: 6px;
  margin: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button:hover{
  background: #265DF2;
}

.swiper-navBtn{
  color: #6E93f7;
  transition: color 0.3s ease;
}
.swiper-navBtn:hover{
  color: #4070F4;
}
.swiper-navBtn::before,
.swiper-navBtn::after{
  font-size: 35px;
}.swiper-button-next1{
  right: 0;
}
.swiper-button-prev1{
  left: 0;
}
.swiper-button-next{
  right: 0;
}
.swiper-button-prev{
  left: 0;
}
.swiper-pagination-bullet{
  background-color: #6E93f7;
  opacity: 1;
}
.swiper-pagination-bullet-active{
  background-color: #4070F4;
}

@media screen and (max-width: 768px) {
  .slide-content{
    margin: 0 10px;
  }
  .swiper-navBtn{
    display: none;
  }
}
.heading {
    text-align: center;
    font-size: 2.5rem;
    padding: 1rem;
    color: white;
}
.heading span {
    color: red;
}
</style>

</head>

<body>
    <header>
        @if (Route::has('login'))
        @auth

        <a href="/accueil" class="logo"><span>A</span>RAS</a>

        @else

            @if (Route::has('register'))
        <a href="/" class="logo"><span>A</span>RAS</a>
            @endif
        @endauth
    @endif        <div class="menuToggle"onclick="toggleMenu();"></div>
        <ul class="navbar" style="color: #18d26e">
            @if (Route::has('login'))
            @auth
            <li><a href="/accueil">Home</a></li>
            <li><a href="/Mure" >Mur</a></li>
            <li><a href="/News">News</a></li>
            <li><a href="submit">Publier</a></li>
            <li><a href="/search">Search</a></li>
            <li><a href="/">About</a></li>
            <li><a href="/app-download">Download-app</a></li>
            <li><a href="/redirects"class="btn2" >Mon Profil</a></li>
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
            <h2>Bienvenue sur le Mur </h2>
            <p>Retrouver vos proches disparue.</p>
            <a href="#nathan" class="btn1"><i class="bi bi-arrow-bar-down"></i></a>
        </div>
    </section>

  <main id="main">
    <section class="groupe" id="nathan">
        @if ($message = Session::get('success'))
        <div class=".alert alert-success">
            <P>{{$message }}</P>
        </div>
        @endif
    <h1 class="heading"> Cameroun <span>-</span>publications </h1>
    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                @foreach ($posts as $yeb )

                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="{{ asset('storage') . '/' . $yeb->path }}" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">{{ $yeb->nom }} {{ $yeb->prenom }}</h2>
                        <p class="description"><span style="font-weight: bold;">Dernier vêtement: </span>{{ $yeb->dernier_vêtement }}</p>
                        <input type="hidden" name="id" value="{{ $yeb->id }}">
                        <button class="button"> <a href="{{ route('publication-plus',$yeb->id) }}" style="color:#eee;text-decoration: none;" > Voir +</a></button>
                    </div>
                </div>
                @endforeach

                {{-- </div></div> --}}
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

    <div class="copyright" style="background-color: #eceff2">
        <p>copyright 2022 <a href="mailto:yebgabrayan@gmail.com">YEBGA Brayan</a> YMB itech. Tous droits reservé</p>
    </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script>
var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * burgerMenu
   */
  const burgerMenu = select('.burger')
  on('click', '.burger', function(e) {
    burgerMenu.classList.toggle('active');
  })

  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('#portfolio-grid');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.item',
      });

      let portfolioFilters = select('#filters a', true);

      on('click', '#filters a', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('active');
        });
        this.classList.add('active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()</script>

</body>

</html>
