<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aras-About</title>

    <!-- LIen css-->
    <link rel="stylesheet" href="css/style.css">

    <!--- BOxicons icon-->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

:root {
  --Color-primay: #000000;
  --color-secondary: #191919;
  --card-bg-color: #333333;

  --Color-three: #0000ff;
  --Color-hover-btn: #0000ff;
  --color-white: #fff;

  --email-color: #999999;

  --transition: all 400ms ease;
}

* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  list-style: none;
}

html,
body {
  scroll-behavior: smooth;
  color: var(--color-white);
}

.header_container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background: var(--Color-primay);
  width: 100vw;
  height: 10vh;
  box-shadow: 2px 0 3rem var(--card-bg-color);
  position: fixed;
  z-index: 20000;
}

.header_container a {
  color: var(--color-white);
}

.header_container .logo span {
  color: gold;
}

.header_container .btn-download {
  background: gold;
  padding: 10px;
  border-radius: 15px;
  transition: var(--transition);
}

.header_container .btn-download:hover {
  background: var(--Color-hover-btn);
}

.header_container .menu {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 4rem;
}
.header_container .menu a {
  transition: var(--transition);
}
.header_container .menu a:hover {
  border-bottom: 2px solid var(--Color-three);
}

.button_menu {
  background: transparent;
  border: none;
  cursor: pointer;
  display: none;
}
.button_menu img {
  width: 40px;
}

/*------------------ HOME ---------------------- */

.container_section {
  max-width: 100%;
  max-height: 90vh;
  background: var(--color-secondary);
  position: relative;
}

.container_section .container_home {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 7rem;
  padding-top: 5rem;
}

.container_home .left {
  display: block;
  text-align: center;
  max-width: 500px;
}

.container_home .left h1 {
  font-size: 3.5rem;
  color: var(--color-white);
  letter-spacing: 5px;
  padding-bottom: 10px;
}

.container_home .left span {
  color: gold;
}

.container_home .left p {
  color: var(--color-white);
  padding-bottom: 10px;
  font-size: 1rem;
}

.container_home .left form input {
  width: 80%;
  height: 7vh;
  border-radius: 15px;
  padding: 10px;
  outline: none;
}

.container_home .left form input::placeholder {
  letter-spacing: 2px;
  color: var(--color-secondary);
}

.container_home .left form button {
  padding: 10px;
  border-radius: 15px;
  background: gold;
  border: none;
  color: var(--color-white);
  margin-left: -95px;
  cursor: pointer;
  transition: var(--transition);
}

.container_home .left form button:hover {
  border: 2px solid var(--Color-three);
  background: transparent;
  color: var(--Color-three);
}

.container_home .right img {
  width: 400px;
  border-radius: 10%;
  margin-bottom: 12%;
  margin-top: 7%;
}

/*------------------ About ---------------------- */

.container_about {
  max-width: 100%;
  max-height: 100vh;
  background: var(--Color-primay);
  position: relative;
  margin-top: -30px;
  text-align: center;
}

.container_about .info {
  padding-top: 4rem;
  padding-bottom: 2rem;
}
.container_about .info h1 span {
  color: gold;
}
.container_about .info h1 {
  font-size: 3rem;
}

.container_about .container__ME {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: 1rem;
  margin: 0 5rem;
}

.container__ME .left img {
  width: 450px;
}

.container__ME .right {
  display: block;
  /* text-align: center;*/
  max-width: 500px;
}

.container__ME .right h1 {
  font-size: 2.5rem;
}

.container__ME .right h1 span {
  color: gold;
}

.container__ME .right p {
  font-size: 14px;
  padding: 1rem 2.5rem;
}

.container__ME .right button {
  padding: 10px;
  border-radius: 15px;
  background: gold;
  border: none;
  color: var(--color-white);
  cursor: pointer;
  transition: var(--transition);
  float: left;
  margin-left: 2rem;
}

.container__ME .right button:hover {
  border: 2px solid var(--color-white);
  background: transparent;
  color: var(--color-white);
}

/*--------------------- SERVICES---------------------*/

.container_services {
  max-width: 100%;
  max-height: 100vh;
  background: var(--color-secondary);
  position: relative;
  margin-top: -30px;
  text-align: center;
  padding-bottom: 40px;
}

.container_services .info {
  padding-top: 7rem;
  padding-bottom: 2rem;
}

.container_services .info h1 {
  font-size: 2.5rem;
}

.container_services .info span {
  color: gold;
}

.container_services .services {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 4rem;
  margin: 2rem 7rem;
}

.container_services .services .service {
  background: var(--card-bg-color);
  max-height: 50vh;
  padding: 10px;
  border-radius: 20px;
  box-shadow: 2px 0 3rem var(--Color-primay);
  transition: var(--transition);
  transform: translateX(-400%);
}

.container_services .services .service.show {
  transform: translateX(0);
}

.container_services .services .service:hover {
  box-shadow: none;
}

.container_services .services .service h2 {
  padding-top: 20px;
  font-size: 1.3rem;
}
.container_services .services .service h2 span {
  color: gold;
}

.container_services .services .service p {
  font-size: 14px;
  margin: 1rem;
}

.container_services .services .service button {
  padding: 10px;
  border-radius: 15px;
  background: gold;
  border: none;
  color: var(--color-white);
  cursor: pointer;
  transition: var(--transition);
}

.container_services .services .service button:hover {
  border: 2px solid var(--color-white);
  background: transparent;
  color: var(--color-white);
}

/* --------------- GALLERY ------------------- */
#gallery {
  max-width: 100%;
  max-height: 150vh;
  background: var(--card-bg-color);
  position: relative;
  text-align: center;
}

#gallery .info {
  padding-top: 5rem;
  padding-bottom: 2rem;
}

#gallery .info h1 {
  font-size: 2.5rem;
}

#gallery .info h1 span {
  color: gold;
}

#gallery .info p {
  color: var(--email-color);
}

#gallery .gallery__templates {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  row-gap: 2rem;
  margin: 2rem 5rem;
  margin-bottom: 0;
  padding-bottom: 40px;
  text-align: center;
  place-items: center;
  position: relative;
}

.gallery__templates .gal {
  transition: var(--transition);
  transform: translateY(20%);
  opacity: 0.7;
}
.gallery__templates .gal.show {
  transform: rotate(0);
  opacity: 1;
}

#gallery .gallery__templates img {
  display: block;
  width: 430px;
  object-fit: contain;
  margin: 0;
  border-radius: 20px;
  box-shadow: 2px 0 3rem var(--Color-primay);
  cursor: pointer;
  transition: var(--transition);
}

#gallery .gallery__templates img:hover {
  box-shadow: none;
}

.cretate {
  max-width: 100%;
  max-height: 40vh;
  background: var(--Color-primay);
  position: relative;
  text-align: center;
  padding-bottom: 40px;
}

.cretate h1 {
  font-size: 2rem;
  padding-top: 5rem;
  padding-bottom: 2rem;
}

.cretate h1 span {
  color: gold;
}

.cretate button {
  padding: 10px;
  border-radius: 15px;
  background: gold;
  border: 2px solid gold;
  color: var(--color-white);
  cursor: pointer;
  transition: var(--transition);
}

.cretate button:hover {
  border: 2px solid var(--color-white);
  background: transparent;
  color: var(--color-white);
}

/*---------------- CONTACT ------------*/
#contact {
  max-width: 100%;
  max-height: 40vh;
  background: var(--color-secondary);
  position: relative;
}

#contact .row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 4rem;
  padding-top: 3rem;
  margin: 0 7rem;
}

#contact .row .clos1 {
  display: block;
  text-align: left;
}

.row .clos1 h1 {
  font-size: 1.2rem;
}

.row .clos1 h1 span {
  color: gold;
}

.row .clos1 p {
  font-size: 13px;
  line-height: 20px;
}

.row .clos2 h1 {
  font-size: 1.2rem;
}

.row .clos2 span {
  color: gold;
}

.row .clos2 ul {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.row .clos2 ul li {
  font-size: 13px;
}

.row .clos2 ul a {
  color: var(--color-white);
  transition: var(--transition);
}

.row .clos2 ul a:hover {
  border-bottom: 1px solid var(--color-white);
}

.row .clos3 h1 {
  font-size: 1.2rem;
}

.row .clos3 h1 span {
  color: gold;
}

.row .clos3 ul {
  display: flex;
  flex-direction: column;
  gap: 0.4rem;
}

.row .clos3 ul a {
  font-size: 13px;
  color: var(--color-white);
  transition: var(--transition);
}
.row .clos3 ul a:hover {
  border-bottom: 1px solid var(--color-white);
}

.row .clos4 h1 {
  font-size: 1.2rem;
}

.row .clos4 span {
  color: gold;
}
.row .clos4 form {
  display: flex;
}
.row .clos4 form input {
  background: transparent;
  border: none;
  border-bottom: 2px solid var(--color-white);
  outline: none;
  padding-left: 2px;
  color: var(--color-white);
}

.row .clos4 form input::placeholder {
  color: var(--color-white);
}

.row .clos4 form button {
  color: var(--color-white);
  background: transparent;
  margin-bottom: 5px;
  margin-left: -65px;
  padding: 6px 8px;
  cursor: pointer;
}

/*------------FOOTER -------------*/

footer {
  max-width: 100%;
  max-height: 10vh;
  background: var(--color-secondary);
  text-align: center;
  padding-bottom: 10px;
}

footer p {
  font-size: 14px;
  letter-spacing: 5px;
  border-top: 2px solid var(--color-white);
  margin: 0 7rem;
  padding-top: 1.5rem;
}

footer p a {
  color: gold;
  font-weight: 800;
}

footer p a:hover {
  color: var(--color-white);
}

/*------------------- RESPONIVE ------------------------*/

@media screen and (max-width: 1140px) {
  .container_section {
    max-height: fit-content;
    padding-bottom: 50px;
  }

  .container_section .container_home {
    flex-direction: column-reverse;
    padding-top: 120px;
  }

  .container_services .services,
  #contact .row {
    gap: 2rem;
  }
  .container_about {
    max-height: fit-content;
    padding-bottom: 50px;
  }
  .container_about .container__ME {
    flex-direction: column-reverse;
  }

  .container__ME .right button {
    float: none;
    margin-left: 0;
  }
}

@media screen and (max-width: 1010px) {

  .header_container .menu {
    position: absolute;
    flex-direction: column;
    display: flex;
    top: 10vh;
    right: 103px;
    background: var(--Color-primay);
    width: 150px;
    padding: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 2px 0 3rem var(--card-bg-color);
    opacity: 0;
  }

  .button_menu {
    display: block;
  }

  .menu_close {
    display: none;
  }

  #gallery .gallery__templates img {
    width: 340px;
  }

  .container_services .services {
    margin: 2rem 4rem;
  }

  #contact .row {
    margin: 0 4rem;
  }

  footer {
    padding-top: 15px;
  }
}

@media screen and (max-width: 900px) {
  .container_services {
    max-height: fit-content;
  }
  .container_services .services {
    grid-template-columns: 1fr;
  }
  #gallery {
    max-height: fit-content;
  }
  #gallery .gallery__templates {
    grid-template-columns: 1fr;
  }

  #gallery .gallery__templates img {
    width: 400px;
  }

  #contact .row {
    grid-template-columns: repeat(3, 1fr);
  }

  footer p {
    margin: 0 2rem;
  }
}

@media screen and (max-width: 672px) {
  .header_container .menu {
    right: 50px;
    box-shadow: 2px 0 3rem var(--card-bg-color);
  }

  #contact .row {
    grid-template-columns: repeat(2, 1fr);
  }

  .row .clos3 ul {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }
}
@media screen and (max-width: 530px) {
    .container_home .right svg {
    width: 70%;
  }

}
@media screen and (max-width: 536px) {
  .logo h2{
    font-size: 1.2rem;
  }
  .container_home .right svg {
    width: 110%;
  }

  .container_home .left h1 {
    font-size: 3rem;
  }

  .container_section .container_home {
    margin: 0 4rem;
  }

  .container_about .container__ME {
    margin: 0 3rem;
  }

  .container__ME .right h1 {
    font-size: 2rem;
  }
  #gallery .info p {
    font-size: 14px;
  }
  #gallery {
    padding-bottom: 10px;
  }

  #gallery .gallery__templates {
    margin: 2rem 4rem;
  }
  #contact {
    max-height: fit-content;
  }
  #contact .row {
    grid-template-columns: 1fr;
  }
  #gallery .gallery__templates img {
    width: 300px;
  }
  .cretate h1{
    font-size: 1.5rem;
  }
}

    </style>
</head>

<body>

    <header class="header_container">
        <div class="logo" style="font-size: 150%">
            @if (Route::has('login'))
            @auth

            <a href="/accueil" class="logo" ><span>A</span>RAS</a>

            @else

            <a href="/" class="logo"><span>A</span>RAS</a>

            @endauth
        @endif
        </div>

        <ul class="menu" style="font-size: 110%">

            <li><a href="/">About</a></li>
            <li><a href="/News">News</a></li>
            <li><a href="/app-download">Dowload-App</a></li>

        </ul>
        <li><a href="{{ route('login') }}" style="font-size: 100%" class="btn-download">Connectez-Vous</a></li>
        <button class="button_menu"><img src="./images/Vector.png"></button>
        <button class="button_menu menu_close"><img src="./images/close.svg"></button>
    </header>

    <section id="home" class="container_section">
        <div class="container_home">
            <div class="left">
                <h1>ARAS<span>APP</span> </h1>
                <p>Si vous vous posez des questions sur une personne signaler disparue, ARAS est là pour répondre à vos questions. Que ce soit du nord au sud de l’est à l’ouest par tout dans monde grâce à ses nombreux services ARAS vous offre à tous un services prémium et tout cela gratuitement. ARAS est disponible sur ordinateur, mobile et tablette</p>
                <form action="">
                    <button style="margin-left:1%; color:#fff;"><a href="/app-download" class="btn-download">Dowload-App</a></button>
                </form>
            </div>
            <div class="right">
<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="590.72392" height="659.36199" viewBox="0 0 590.72392 659.36199" xmlns:xlink="http://www.w3.org/1999/xlink"><path id="e846ef3a-3b5e-448c-8d47-a4173376229f-150" data-name="Path 461" d="M867.57258,741.80716a22.728,22.728,0,0,1-21.947-3.866c-7.687-6.452-10.1-17.081-12.058-26.924l-5.8-29.112,12.143,8.362c8.733,6.013,17.662,12.219,23.709,20.929s8.686,20.6,3.828,30.024" transform="translate(-304.63804 -120.31901)" fill="#e6e6e6"/><path id="b0167a87-6d3c-4fe1-a02f-2e6974de103a-151" data-name="Path 462" d="M866.53457,777.05314c1.229-8.953,2.493-18.02,1.631-27.069-.766-8.036-3.217-15.885-8.209-22.321a37.13174,37.13174,0,0,0-9.527-8.633c-.953-.6-1.829.909-.881,1.507a35.3,35.3,0,0,1,13.963,16.847c3.04,7.732,3.528,16.161,3,24.374-.317,4.967-.988,9.9-1.665,14.83a.9.9,0,0,0,.61,1.074.878.878,0,0,0,1.074-.61Z" transform="translate(-304.63804 -120.31901)" fill="#f2f2f2"/><path d="M822.52338,628.35311H314.489V120.319H822.52338Z" transform="translate(-304.63804 -120.31901)" fill="#fff"/><path d="M822.52338,628.35311H314.489V120.319H822.52338ZM321.99513,620.847H815.01722V127.82517H321.99513Z" transform="translate(-304.63804 -120.31901)" fill="#e5e5e5"/><rect x="207.88534" y="79.48221" width="220" height="6.85312" fill="#e5e5e5"/><rect x="207.88534" y="97.3003" width="220" height="6.85312" fill="#e5e5e5"/><rect x="207.88534" y="115.11839" width="220" height="6.85312" fill="#e5e5e5"/><rect x="207.88534" y="232.48253" width="220" height="6.85312" fill="#e5e5e5"/><rect x="207.88534" y="250.30062" width="220" height="6.85312" fill="#e5e5e5"/><rect x="207.88534" y="268.11871" width="220" height="6.85312" fill="#e5e5e5"/><rect x="207.88534" y="385.48285" width="220" height="6.85312" fill="#e5e5e5"/><rect x="207.88534" y="403.30094" width="220" height="6.85312" fill="#e5e5e5"/><rect x="207.88534" y="421.11903" width="220" height="6.85312" fill="#e5e5e5"/><path d="M424.452,254.40315a73.48452,73.48452,0,0,0-11.72491-4.93423l-.51555-5.70369-20.91078-2.25289-2.65757,7.29025-7.5044,2.81614a3.65253,3.65253,0,0,0-.76152.39664h-.00814a3.71836,3.71836,0,0,0-1.58656,2.475,3.80137,3.80137,0,0,0,.05578,1.49137l.39664,1.62622c.571.34111,1.15816.66638,1.745.97572l.373.19043c.8568.44423,1.72949.86465,2.62581,1.25335.18243.07935.38075.15866.56319.238.01588.00794.02363.00794.03951.01588.42066.17455.84093.34111,1.26933.49977a41.69109,41.69109,0,0,0,4.29952,1.38031,44.21436,44.21436,0,0,0,11.39954,1.49137c1.40412,0,2.79236-.06348,4.16472-.19832a44.03857,44.03857,0,0,0,9.2339-1.86419c.00775,0,.01588-.00794.02363-.00794a43.34123,43.34123,0,0,0,5.54522-2.19741c.00774-.00794.02363-.00794.03176-.01583.40439-.19043.79328-.39664,1.18992-.595l.19019-.09524c.31723-.16656.63485-.33316.95209-.50766.79328-.43635,1.57068-.89641,2.33994-1.38824.21421-.127.42066-.2618.63486-.40458.30136-.19833.60271-.40459.89632-.61879C426.01457,255.28368,425.2453,254.83151,424.452,254.40315Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56"/><path d="M385.20825,257.91738l-1.30884-5.90995h-3.41909a.81809.81809,0,0,0-.103.00794h-.00814a7.40924,7.40924,0,0,0-3.44271,1.18992,7.62539,7.62539,0,0,0-1.84027,1.65c1.01523.76946,2.07035,1.48343,3.15724,2.16564l.04764.02377c.3091.19043.62673.38081.944.56325.571.34111,1.15816.66638,1.745.97572l.373.19043c.8568.44423,1.72949.86465,2.62581,1.25335.18243.07935.38075.15866.56319.238.01588.00794.02363.00794.03951.01588.42066.17455.84093.34111,1.26933.49977Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56"/><circle cx="96.2975" cy="102.52722" r="15.06012" fill="#ffb8b8"/><path d="M390.8243,215.51076c1.559,1.84494,4.19733,2.36555,6.6311,2.579a62.45441,62.45441,0,0,0,16.96025-1.3849c.34473,3.34141-.59521,6.94426,1.3729,9.69292a44.99776,44.99776,0,0,0,1.5988-10.20084,9.76388,9.76388,0,0,0-.5651-4.369,4.01823,4.01823,0,0,0-3.423-2.52361,8.57906,8.57906,0,0,1,3.82678-1.636l-4.78192-2.4031,1.228-1.26072-8.6574-.52978,2.5075-1.593a54.37251,54.37251,0,0,0-11.39121-.35958,9.77843,9.77843,0,0,0-5.03814,1.40046c-1.42943,1.02218-2.25538,3.05378-1.368,4.55453a6.61308,6.61308,0,0,0-5.03977,3.99885,10.676,10.676,0,0,0-.38256,5.13155,36.375,36.375,0,0,0,1.90723,8.06855Z" transform="translate(-304.63804 -120.31901)" fill="gold"/><path d="M443.28431,206.52068a44.19307,44.19307,0,1,0-76.36917,41.98046c.39664.49977.80916.99954,1.22982,1.48343.03176.03172.05539.06348.08715.09519a42.86334,42.86334,0,0,0,3.292,3.39522c.30174.27768.619.56325.93621.833.60271.53943,1.22169,1.055,1.86429,1.54686.25371.19832.49967.39664.76152.58707,1.01523.76946,2.07035,1.48343,3.15724,2.16564l.04764.02378c.3091.19042.62673.3808.944.56324.571.34111,1.15816.66638,1.745.97572l.373.19043c.8568.44424,1.72949.86465,2.62581,1.25335.18243.07936.38075.15867.56319.238.01588.00794.02363.00794.03951.01589.42066.17454.84093.3411,1.26933.49977a41.69345,41.69345,0,0,0,4.29952,1.3803,44.21436,44.21436,0,0,0,11.39954,1.49137c1.40412,0,2.79236-.06348,4.16472-.19832a44.03857,44.03857,0,0,0,9.2339-1.86419c.00775,0,.01588-.00794.02363-.00794a43.33976,43.33976,0,0,0,5.54522-2.19741c.00774-.00794.02363-.00794.03176-.01583.40439-.19043.79328-.39664,1.18992-.595l.19019-.09524c.31723-.16656.63485-.33316.95209-.50766.79328-.43634,1.57068-.89641,2.33994-1.38824.21421-.12695.42066-.2618.63486-.40458.30136-.19832.60271-.40458.89632-.61879.3885-.26968.7774-.54736,1.15816-.83293.11891-.08725.246-.1745.36487-.26969a44.17746,44.17746,0,0,0,15.00882-49.72289ZM426.816,254.31586c-.26184.20626-.53144.40458-.80141.58706-.26185.19832-.52331.3887-.79329.5632-.23008.16661-.46016.32528-.698.476l-.07127.0476c-.17469.119-.349.23-.52369.3411q-.98772.6187-1.99908,1.18992l-.2142.119c-.30136.16661-.60271.32528-.90407.48394-.03989.02378-.08754.03966-.127.06343l-.04765.02382c-.38076.19832-.76965.3887-1.15816.57114a38.91126,38.91126,0,0,1-4.62489,1.87218c-.20645.07137-.41252.14279-.61858.20621a41.6098,41.6098,0,0,1-8.742,1.777c-1.30108.119-2.618.18244-3.94277.18244a41.21052,41.21052,0,0,1-10.78056-1.41206,39.1725,39.1725,0,0,1-5.29113-1.79278c-.08754-.0397-.18282-.07141-.27-.11107-.0949-.03965-.18244-.07141-.2696-.11107-.09528-.03965-.18244-.07931-.27772-.1269-.74564-.32527-1.48353-.68226-2.20515-1.05508l-.349-.18244c-.88082-.46011-1.74537-.95194-2.5863-1.47554-.246-.15072-.49967-.30934-.73789-.476-.06313-.03965-.11891-.0793-.18244-.119-.56319-.37282-1.12639-.76152-1.67371-1.1661-.37263-.27767-.74564-.5553-1.11052-.84087-.61084-.46012-1.19805-.95195-1.769-1.45966-.30135-.25386-.595-.53149-.88043-.79328a40.306,40.306,0,0,1-3.189-3.3c-.33312-.38081-.65849-.76157-.968-1.15821a3.02208,3.02208,0,0,1-.19832-.24591,41.77344,41.77344,0,1,1,58.00479,7.322Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56"/><path d="M443.28464,359.52105a44.19305,44.19305,0,1,0-76.36916,41.98041c.39664.49977.80916.99954,1.22943,1.48343.03176.03172.05539.06348.08715.09519a42.94478,42.94478,0,0,0,3.29243,3.39527c.30135.27763.61859.5632.93582.83293.60309.53943,1.22168,1.05508,1.86429,1.54691a43.45061,43.45061,0,0,0,3.91876,2.75266l.04764.02382c.88043.54737,1.77675,1.055,2.68933,1.539l.37263.19038c.8568.44424,1.72949.86465,2.6258,1.25335.18244.07936.38076.15867.5632.238.01588.00794.024.00794.0399.01584a42.929,42.929,0,0,0,5.56885,1.88007,44.21134,44.21134,0,0,0,11.39915,1.49137c1.40412,0,2.79236-.06343,4.16472-.19832a44.03355,44.03355,0,0,0,9.2339-1.86419c.00813,0,.01588-.00794.02363-.00794a43.31709,43.31709,0,0,0,5.54522-2.19741c.00774-.00789.024-.00789.03176-.01583.40439-.19038.79328-.39664,1.18992-.595l.19057-.09519c.31724-.1666.63447-.33321.95171-.50771.79328-.43629,1.57068-.89641,2.34033-1.38824.2142-.127.42027-.2618.63447-.40458.698-.46012,1.38824-.952,2.05447-1.45172.11931-.08725.246-.1745.36527-.26969a44.17946,44.17946,0,0,0,15.00881-49.72284Z" transform="translate(-304.63804 -120.31901)" fill="#fff"/><circle id="f2095780-2301-4cc1-9693-3d089d317ca1" data-name="Ellipse 188" cx="111.49544" cy="265.32111" r="6.6231" fill="blue"/><path id="fe36a822-bf42-420c-ba8a-fcca90365ca6-152" data-name="Path 969" d="M417.97869,379.19948a6.6239,6.6239,0,0,1,5.83059,9.76688,6.6215,6.6215,0,1,0-11.0012-7.276,6.60732,6.60732,0,0,1,5.17138-2.49091Z" transform="translate(-304.63804 -120.31901)" fill="blue"/><circle id="e26e4994-e49f-47aa-919e-dc7dee2cb7c3" data-name="Ellipse 189" cx="99.11867" cy="245.85083" r="19.45601" fill="blue"/><path id="ac420ffb-80fa-461b-bc18-228b12874f63-153" data-name="Path 970" d="M388.48684,354.09851a19.45283,19.45283,0,0,1,26.9636-2.04033c-.15866-.1515-.31733-.30383-.48151-.45058a19.456,19.456,0,0,0-25.96422,28.98283q.05542.0496.11117.09882c.165.14676.33476.28557.50374.426a19.45283,19.45283,0,0,1-1.132-27.01677Z" transform="translate(-304.63804 -120.31901)" fill="blue"/><circle id="a12696bc-31d6-40e2-aafc-0c11595f0891" data-name="Ellipse 190" cx="98.95367" cy="252.61117" r="12.53066" fill="#a0616a"/><path d="M426.0149,405.57894v4.20438c-.76965.49183-1.54705.95194-2.34033,1.38824-.31724.1745-.63447.3411-.95171.50771l-.19057.09519c-.39664.19832-.78553.40458-1.18992.595-.00775.00794-.024.00794-.03176.01583a43.31709,43.31709,0,0,1-5.54522,2.19741c-.00775,0-.0155.00794-.02363.00794a44.03355,44.03355,0,0,1-9.2339,1.86419c-1.37236.13489-2.7606.19832-4.16472.19832a44.2114,44.2114,0,0,1-11.39915-1.49137,42.9291,42.9291,0,0,1-5.56885-1.88008c-.01588-.00789-.024-.00789-.0399-.01583-.18244-.07936-.38076-.15866-.5632-.238-.89631-.3887-1.769-.80911-2.6258-1.25335l-.37263-.19038c-.91258-.48394-1.80889-.9916-2.68933-1.539l-.04764-.02382a43.45061,43.45061,0,0,1-3.91876-2.75266c-.64261-.49183-1.26119-1.00748-1.86429-1.54691-.31723-.26973-.63447-.5553-.93582-.83293a42.9465,42.9465,0,0,1-3.29243-3.39527,16.04862,16.04862,0,0,1,.6031-2.43538l.00774-.00794a3.56229,3.56229,0,0,1,.16656-.39664,3.16442,3.16442,0,0,1,.15068-.33316c1.42-2.65747,3.99042-3.31591,7.17942-3.45869,1.80077-.07936,3.79171.00794,5.89422-.01588,1.11051-.00795,2.26054-.0476,3.411-.15073,7.25844-.65839,5.94186-4.94212,6.26684-7.2506.32537-2.237,2.34034-.3014,2.47513-.1745l.00775.00794a25.60037,25.60037,0,0,0,13.16854,2.30843c.7774-.09519,1.5548-.15073,2.3322-.1745,2.04672-.02382,1.60244.5632.8967,1.04714a8.87215,8.87215,0,0,1-1.071.6029s-.32537,1.9832-.65848,4.95006c-.31724,2.83991,5.12456,4.17267,5.57659,4.27575a.04827.04827,0,0,0,.03176.00794,10.92623,10.92623,0,0,1,6.03715.15867h.00775A7.15379,7.15379,0,0,1,426.0149,405.57894Z" transform="translate(-304.63804 -120.31901)" fill="blue"/><path d="M385.45416,410.67973c0,.587-.0155,1.15027-.03951,1.68175-.00775.31733-.02363.62667-.03951.92018-.01588-.00789-.024-.00789-.0399-.01583-.18244-.07936-.38076-.15866-.5632-.238-.89631-.3887-1.769-.80911-2.6258-1.25335l-.37263-.19038c-.91258-.48394-1.80889-.9916-2.68933-1.539.02363-.27767.06353-.5553.103-.833.08715-.61079.15881-1.22958.20645-1.84037a25.53057,25.53057,0,0,0-2.26093-12.50211v-.00794c-.15881-.31734-.25371-.49183-.25371-.49183s2.30819-1.98321,5.60022,0a1.98132,1.98132,0,0,1,.54771.47595C385.01026,397.186,385.54944,405.05535,385.45416,410.67973Z" transform="translate(-304.63804 -120.31901)" fill="blue"/><path d="M421.47716,409.60088c-.03176.88847-.0794,1.81659-.13479,2.7606v.00794c-.00775.00794-.024.00794-.03176.01583a43.31709,43.31709,0,0,1-5.54522,2.19741c-.00775,0-.0155.00794-.02363.00794l-.08715-2.22912-.00814-.29351-.42027-10.85208a1.82075,1.82075,0,0,1,1.81665-1.90389h4.02179c.19832,0,.34125.40458.43654,1.13439v.00794A68.744,68.744,0,0,1,421.47716,409.60088Z" transform="translate(-304.63804 -120.31901)" fill="blue"/><path id="e6a5f050-bb79-4898-9f1b-a16710d0980e-154" data-name="Path 975" d="M392.87448,357.26684v12.53383h2.90183l3.69275-3.95689-.4942,3.95689h12.82733l-.79328-3.95689,1.58656,3.95689h2.04509V357.26684Z" transform="translate(-304.63804 -120.31901)" fill="blue"/><ellipse id="bcc9b546-fa99-40e5-8b80-3cc98cb6450e" data-name="Ellipse 191" cx="86.258" cy="249.97351" rx="0.98922" ry="1.81344" fill="#a0616a"/><ellipse id="aac24dc1-8688-403d-884a-09279027a7ab" data-name="Ellipse 192" cx="111.65013" cy="249.97351" rx="0.98922" ry="1.81344" fill="#a0616a"/><path d="M428.70384,407.927c-.66623.49977-1.35647.9916-2.05447,1.45172-.2142.14278-.42027.27763-.63447.40458-.76965.49183-1.54705.95194-2.34033,1.38824-.31724.1745-.63447.3411-.95171.50771v-8.742s1.26894,1.01542,3.292,2.70507c.25371.2142.51556.43634.79328.67431C427.395,406.80851,428.02987,407.34794,428.70384,407.927Z" transform="translate(-304.63804 -120.31901)" fill="blue"/><path d="M443.28464,359.52105a44.19305,44.19305,0,1,0-76.36916,41.98041c.39664.49977.80916.99954,1.22943,1.48343.03176.03172.05539.06348.08715.09519a42.94478,42.94478,0,0,0,3.29243,3.39527c.30135.27763.61859.5632.93582.83293.60309.53943,1.22168,1.05508,1.86429,1.54691a43.45061,43.45061,0,0,0,3.91876,2.75266l.04764.02382c.88043.54737,1.77675,1.055,2.68933,1.539l.37263.19038c.8568.44424,1.72949.86465,2.6258,1.25335.18244.07936.38076.15867.5632.238.01588.00794.024.00794.0399.01584a42.929,42.929,0,0,0,5.56885,1.88007,44.21134,44.21134,0,0,0,11.39915,1.49137c1.40412,0,2.79236-.06343,4.16472-.19832a44.03355,44.03355,0,0,0,9.2339-1.86419c.00813,0,.01588-.00794.02363-.00794a43.31709,43.31709,0,0,0,5.54522-2.19741c.00774-.00789.024-.00789.03176-.01583.40439-.19038.79328-.39664,1.18992-.595l.19057-.09519c.31724-.1666.63447-.33321.95171-.50771.79328-.43629,1.57068-.89641,2.34033-1.38824.2142-.127.42027-.2618.63447-.40458.698-.46012,1.38824-.952,2.05447-1.45172.11931-.08725.246-.1745.36527-.26969a44.17946,44.17946,0,0,0,15.00881-49.72284Zm-16.46871,47.79518c-.26185.20626-.53144.40458-.801.587-.26184.19832-.52369.3887-.79328.56319-.23008.16661-.46016.32528-.69838.476-.19832.13485-.39664.2618-.595.3887q-.98715.61878-1.9987,1.18992l-.21459.119c-.30135.16656-.6027.32523-.90406.48389-.03989.02378-.08754.03966-.127.06348l-.04764.02377c-.38076.19832-.76927.3887-1.15816.57119a38.89278,38.89278,0,0,1-4.62489,1.87213c-.20607.07137-.41252.14279-.61859.20626a41.612,41.612,0,0,1-8.742,1.77694c-1.30109.119-2.61806.18244-3.94277.18244a41.21276,41.21276,0,0,1-10.78057-1.412,39.18138,39.18138,0,0,1-5.29112-1.79282c-.18244-.07142-.36488-.15073-.53957-.22215-.0949-.03965-.18244-.07931-.27772-.1269-.74564-.32527-1.48314-.68221-2.20515-1.05508l-.349-.18244c-.88043-.46011-1.74537-.95194-2.5863-1.47549-.3091-.19043-.61859-.38875-.91994-.595-.95209-.62672-1.88017-1.301-2.78462-2.007-.61084-.46012-1.19767-.952-1.769-1.45966-.30135-.25381-.595-.53148-.88043-.79328a40.36294,40.36294,0,0,1-3.189-3.3c-.33311-.38076-.65848-.76156-.968-1.1582a3.01537,3.01537,0,0,1-.19832-.24592,41.77342,41.77342,0,1,1,58.00479,7.322Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56"/><circle cx="97.16145" cy="409.27631" r="17.31454" fill="gold"/><ellipse cx="384.48495" cy="516.46015" rx="7.16464" ry="5.37348" transform="translate(-557.21748 302.82059) rotate(-45)" fill="gold"/><ellipse cx="413.25715" cy="511.94687" rx="5.37348" ry="7.16464" transform="translate(-524.51191 570.55853) rotate(-66.86956)" fill="gold"/><path d="M422.51029,563.181l-2.04-3.21a8.00714,8.00714,0,0,0-14.64014,6.49l.58008,2.08.66016,2.36a45.21049,45.21049,0,0,0,7.87988-1.72.034.034,0,0,0,.02-.01,42.14842,42.14842,0,0,0,5.55029-2.2c.00977-.01.01953-.01.02979-.02.3999-.19.79-.39,1.18994-.59a1.735,1.735,0,0,0,.18994-.1c.31982-.16.64014-.33.95019-.5q.47974-.25506.92969-.54Z" transform="translate(-304.63804 -120.31901)" fill="#cacaca"/><circle cx="97.71058" cy="413.40969" r="14.69467" fill="#ffb6b6"/><path d="M423.57035,562.551a31.78536,31.78536,0,0,0-5.97022-7.24,8.72893,8.72893,0,0,0-5.81982-2.22h-20.7002a8.7244,8.7244,0,0,0-8.71,9.28,8.93713,8.93713,0,0,0,.36035,1.98,9.39745,9.39745,0,0,0,.54981,1.36l1.02,2.04c.08007.03.16015.07.23974.1.02.01.03028.01.04.02.41992.17.84033.34,1.27.5a41.34909,41.34909,0,0,0,4.30029,1.38,43.32755,43.32755,0,0,0,7.15967,1.29c1.41016.13,2.82031.2,4.24024.2,1.41015,0,2.79-.07,4.16992-.2.45019-.04.8999-.09,1.3501-.14a45.21049,45.21049,0,0,0,7.87988-1.72.034.034,0,0,0,.02-.01,42.14842,42.14842,0,0,0,5.55029-2.2c.00977-.01.01953-.01.02979-.02.3999-.19.79-.39,1.18994-.59a1.735,1.735,0,0,0,.18994-.1c.31982-.16.64014-.33.95019-.5q.47974-.25506.92969-.54c.32031-.17.62012-.36.93018-.55C424.36038,563.921,423.97025,563.221,423.57035,562.551Z" transform="translate(-304.63804 -120.31901)" fill="#cacaca"/><path d="M394.83011,555.771a8.00082,8.00082,0,0,0-10.61963,3.81995l-1.84033,2.78-.87988,1.33-1.33985,2.02c.27979.15.54981.30005.83008.45l.36963.19c.86035.44,1.73.86,2.63037,1.25.09961.05.21.09.31983.14.08007.03.16015.07.23974.1.02.01.03028.01.04.02.41992.17.84033.34,1.27.5a41.34909,41.34909,0,0,0,4.30029,1.38,43.32755,43.32755,0,0,0,7.15967,1.29l.7002-2.37.68017-2.26A8.01285,8.01285,0,0,0,394.83011,555.771Z" transform="translate(-304.63804 -120.31901)" fill="#cacaca"/><path d="M386.908,524.4858a19.98594,19.98594,0,0,0,11.42181,3.52983,12.24752,12.24752,0,0,1-4.85431,1.9971,40.3,40.3,0,0,0,16.46138.09249,10.65382,10.65382,0,0,0,3.446-1.18356,4.361,4.361,0,0,0,2.127-2.8447c.36116-2.06322-1.24653-3.9377-2.91727-5.201a21.519,21.519,0,0,0-18.08306-3.61349A9.90262,9.90262,0,0,0,389.154,520.289a4.87853,4.87853,0,0,0-.45065,5.79358Z" transform="translate(-304.63804 -120.31901)" fill="gold"/><path d="M443.29007,512.521a44.19385,44.19385,0,1,0-76.36963,41.98c.38965.5.81006,1,1.23,1.48a.82521.82521,0,0,0,.08008.1,42.15388,42.15388,0,0,0,3.29981,3.38995c.2998.28.60986.57.93017.84.59961.54,1.21973,1.05,1.86963,1.54.25.2.5.4.76026.59,1.00976.77,2.06982,1.48,3.1499,2.17a.07523.07523,0,0,1,.0498.02c.31006.19.63037.38.9502.56.2998.18.60986.36.91015.53.27979.15.54981.30005.83008.45l.36963.19c.86035.44,1.73.86,2.63037,1.25.09961.05.21.09.31983.14.08007.03.16015.07.23974.1.02.01.03028.01.04.02.41992.17.84033.34,1.27.5a41.34909,41.34909,0,0,0,4.30029,1.38,43.32755,43.32755,0,0,0,7.15967,1.29c1.41016.13,2.82031.2,4.24024.2,1.41015,0,2.79-.07,4.16992-.2.45019-.04.8999-.09,1.3501-.14a45.21049,45.21049,0,0,0,7.87988-1.72.034.034,0,0,0,.02-.01,42.14842,42.14842,0,0,0,5.55029-2.2c.00977-.01.01953-.01.02979-.02.3999-.19.79-.39,1.18994-.59a1.735,1.735,0,0,0,.18994-.1c.31982-.16.64014-.33.95019-.5q.47974-.25506.92969-.54c.32031-.17.62012-.36.93018-.55q.24023-.15.48-.3c.22021-.13.41992-.26.64013-.41.29981-.19.6001-.4.88965-.61.39014-.27.78028-.55,1.16016-.84a4.34045,4.34045,0,0,0,.37012-.27,44.22136,44.22136,0,0,0,15.00976-49.72Zm-16.46972,47.79c-.26026.21-.53028.41-.79981.59-.27051.2-.53027.39-.80029.57-.23.16-.46.32-.69971.47a.43763.43763,0,0,1-.07031.05c-.16992.12-.3501.23-.52.34-.12012.06994-.23975.15-.35986.22-.3501.22-.7002.43-1.06006.63-.18994.12-.39014.23-.58008.34-.06983.04-.14014.08-.21.12-.31006.17-.60987.32-.91016.48-.03955.03-.08984.04-.11963.07a.07766.07766,0,0,0-.05029.02c-.37988.2-.77.39-1.15967.57a38.6113,38.6113,0,0,1-4.63037,1.87c-.19971.07-.40967.15-.60986.21a41.84782,41.84782,0,0,1-7.83008,1.68c-.29981.04-.60986.07-.91992.1-1.29981.12-2.60987.18-3.93994.18-1.18018,0-2.37012-.05-3.54-.15a41.2311,41.2311,0,0,1-7.23975-1.26,38.302,38.302,0,0,1-5.29-1.8c-.09033-.04-.18017-.07-.27-.11-.1001-.04-.18017-.07-.27-.11-.10009-.04-.18017-.08-.28027-.13-.6499-.28-1.29981-.59-1.92969-.91-.09033-.05-.18017-.09-.27-.14l-.3501-.18c-.21-.11-.41992-.22-.62011-.33-.66992-.36-1.33008-.75-1.96973-1.15-.24023-.15-.5-.31-.74023-.47l-.18018-.12c-.56006-.38-1.11963-.76-1.66992-1.17-.37012-.28-.75-.55-1.10986-.84-.60987-.46-1.2002-.95-1.77-1.46-.3003-.25-.6001-.53-.87989-.79a39.67486,39.67486,0,0,1-3.18994-3.3c-.33008-.37994-.66015-.76-.97021-1.16-.06983-.08-.12989-.16-.2002-.25a41.77848,41.77848,0,1,1,58.01026,7.32Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56"/><path d="M475.48406,296.60823a103.86271,103.86271,0,1,0,5.88861,153.38883l127.40025,107.4997A9.571,9.571,0,0,0,621.13149,542.879l-.01409-.01188L493.71711,435.36737A103.86855,103.86855,0,0,0,475.48406,296.60823Zm-8.213,128.40762a77.81462,77.81462,0,1,1-9.28981-109.65368l0,0A77.81462,77.81462,0,0,1,467.27106,425.01585Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56"/><path d="M357.61735,434.30569A77.81885,77.81885,0,0,1,344.41288,329.6974q-2.23174,2.24755-4.315,4.70769A77.81463,77.81463,0,1,0,459.04139,434.769q2.07849-2.46329,3.91466-5.04544A77.81872,77.81872,0,0,1,357.61735,434.30569Z" transform="translate(-304.63804 -120.31901)" opacity="0.3" style="isolation:isolate"/><path d="M732.32268,561.51575a10.74269,10.74269,0,0,0-3.06875-16.18426l-23.222-95.04913-16.94052,5.40781,25.07572,94.40044a10.8009,10.8009,0,0,0,18.15552,11.42514Z" transform="translate(-304.63804 -120.31901)" fill="#ffb6b6"/><polygon points="415.682 380.399 403.302 391.079 385.982 406.01 378.332 366.87 377.532 362.8 376.902 359.57 394.452 329 409.082 329.839 410.082 329.899 410.102 330.12 410.332 332.17 413.332 359.149 413.402 359.8 415.682 380.399" fill="#3f3d56"/><polygon points="334.763 646.074 322.504 646.073 316.671 598.785 334.766 598.786 334.763 646.074" fill="#ffb6b6"/><path d="M642.5281,778.27684l-39.53077-.00147v-.5a15.38731,15.38731,0,0,1,15.38648-15.38623h.001l24.144.001Z" transform="translate(-304.63804 -120.31901)" fill="gold"/><polygon points="462.763 647.074 450.504 647.073 444.671 599.785 462.766 599.786 462.763 647.074" fill="#ffb6b6"/><path d="M770.5281,779.27684l-39.53077-.00147v-.5a15.38731,15.38731,0,0,1,15.38648-15.38623h.001l24.144.001Z" transform="translate(-304.63804 -120.31901)" fill="gold"/><path d="M777.20009,748.56853l-33,5-48.00977-162.48-50.99023,163.48-37-5,48-190v-15l6.5-22.5-.68018-6.09-4.73-42.59-2.0498-18.47-.13286-1.19314a4.05551,4.05551,0,0,1,3.19291-4.41685h0l15.3999-3.24H698.87l14.8501,4.09,1.02.28.46.13-.23,1.92-3.48,29.18-.18994,1.6-3.36011,28.13-.74,6.17c29,21,30,42,30,42Z" transform="translate(-304.63804 -120.31901)" fill="gold"/><circle cx="378.60536" cy="288.53692" r="24.56103" fill="#ffb6b6"/><rect x="660.70009" y="515.06853" width="49" height="7" transform="matrix(0.99156, -0.12967, 0.12967, 0.99156, -366.09696, -27.08894)" fill="#3f3d56"/><path d="M595.28248,520.3709a10.52714,10.52714,0,0,1,1.31644,1.00712l48.05634-12.25059,3.2784-11.59339,18.14314,2.66086-3.8092,21.08784a8,8,0,0,1-7.03475,6.53393l-56.11128,5.90907a10.4971,10.4971,0,1,1-3.83909-13.35484Z" transform="translate(-304.63804 -120.31901)" fill="#ffb6b6"/><path d="M669.20009,455.56853l-8.5-6.5c-2.29816-.87172-5.44731,1.605-6,4l-12,49,25,18,3.5-5.5Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56"/><g opacity="0.2"><path d="M717.97011,479.46849a67.67916,67.67916,0,0,1-6.48,2.2c-.7.21-1.41992.41-2.12988.6a66.01864,66.01864,0,0,1-14.34034,2.32,45.13975,45.13975,0,0,1-6.25976-.17,35.24268,35.24268,0,0,1-6.58985-1.3c-.07031-.02-.15039-.04-.22021-.06a28.90627,28.90627,0,0,1-11.9502-6.79,23.56071,23.56071,0,0,1-2.10986-2.35,21.23882,21.23882,0,0,1-4.56006-16.53,14.15553,14.15553,0,0,1,.34033-1.57,25.10846,25.10846,0,0,1,1.48975-4.1c.27-.62.57031-1.23.89014-1.82995l11.2998-3.82h21.52l14.8501,4.09,1,.06.02.22.46.13-.23,1.92Z" transform="translate(-304.63804 -120.31901)"/></g><path d="M664.423,388.52194c-4.59329-.563-9.634-.16485-13.21412,2.76739s-4.73557,9.0278-1.34592,12.17828c3.00083,2.7891,7.6933,2.13322,11.71262,2.92632a15.85418,15.85418,0,0,1,12.38363,15.15657c-.05982,10.17413-9.8241,17.87895-11.578,27.90093-1.197,6.83982,1.68772,14.03819,6.675,18.86966s11.84324,7.44255,18.7509,8.1498,13.8926-.373,20.60576-2.14766c6.74127-1.78215,13.3778-4.31055,19.03424-8.388s10.2931-9.82559,12.10927-16.55777.51227-14.45089-4.16774-19.61986c-5.359-5.919-14.27435-7.95446-18.90988-14.45565-5.1964-7.28778-3.27353-17.66625-7.47921-25.5673-2.80791-5.27514-8.12457-8.87315-13.79191-10.76858s-11.719-2.26953-17.69211-2.4531c-3.13957-.09649-6.37528-.12863-9.30036,1.016s-5.49633,3.75316-5.648,6.89055S664.423,388.52194,664.423,388.52194Z" transform="translate(-304.63804 -120.31901)" fill="gold"/><path d="M894.362,779.681h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-304.63804 -120.31901)" fill="#cacaca"/></svg>            </div>
        </div>
    </section>

    <section id="about" class="container_about">

        <div class="info">
            <h1> <span>About</span> ARAS</h1>
        </div>
        <div class="container__ME">
            <div class="left">
                <img src="./images/about-img-5.png" alt="ARAS">
            </div>

            <div class="right">
                <h1>Recherche <span> de </span>disparue</h1>
                <p>L’idée de création de la plateforme ARAS plateforme de recherche de personne disparue
après un sinistre qui permet aux individus de rechercher une personnesignalée disparue partout
 dans le monde. ARAS est conçue pour redonner du sourire à des personnes séparées après une guerre,
réunir des personnes d’une même famille placer dans différent camps de réfugier de retrouver leurs
proches et permet à des personnes de savoir si un de leurs proches a perdu la vie dans un accident
quelconque. Ce dernier apparait donc ici comme un outil d’aide à l’action gouvernemental.  </p>
                <button>Let’s Start</button>
            </div>
        </div>
    </section>


    <section id="services" class="container_services">
        <div class="info">
            <h1> Our <span>Services</span></h1>
        </div>
        <div class="services">
            <div class="service">
                <h2>ARAS<span> Search</span> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                <button>Read More</button>
            </div>
            <div class="service">
                <h2>ARAS <span>Post disparition</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                <button>Read More</button>
            </div>
            <div class="service">
                <h2>ARAS <span>Evénements</span> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                <button>Read More</button>
            </div>
			            <div class="service">
                <h2>ARAS <span>Posts</span> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                <button>Read More</button>
            </div>
				<div class="service">
                <h2>ARAS <span>News</span> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                <button>Read More</button>
            </div>
					<div class="service">
                <h2>Télécharger <span>La version mobile</span> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
                <button>Read More</button>
            </div>
        </div>
    </section>


    <section id="gallery">
        <div class="info">
            <h1> Gal<span>lery</span></h1>
            <p>Quelque extrait de la plateforme.</p>
        </div>
        <div class="gallery__templates">

            <img class="gal" src="./images/gallery1.png" alt="gallery1">

            <img class="gal" src="./images/gallery2.webp" alt="gallery2">


            <img class="gal" src="./images/gallery3.png" alt="gallery3">

            <img class="gal" src="./images/Gallery4.webp" alt="Gallery4">

            <img class="gal" src="./images/Gallery5.webp" alt="Gallery5">

            <img class="gal" src="./images/Gallery6.webp" alt="Gallery6">
        </div>
    </section>
    <section id="contact">
        <div class="row">
            <div class="clos1">
                <h1>YEBGA <span>Brayan</span> </h1>
                <p>La communauté d'ARAS vous accompagnes de bout en bout pour vous permettre de retrouver vos proches.</p>
            </div>
            <div class="clos2">
                <h1> <span>CONTACT</span>  US</h1>
                <ul>
                    <li>YEBGA MIYOGOG Brayan</li>
                    <li>Eleve Ingenieur</li>
                    <li> <a href="mailto:yebgabrayan@gmail.com">yebgabrayan@gmail.com</a> </li>
                    <li><a href="tel:+237 690026297">+237 690026297</a></li>
                </ul>
            </div>
            <div class="clos3">
                <h1>LIN<span>KS</span> </h1>
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="/News">News</a></li>
                    <li><a href="/app-download">Dowload-App</a></li>
                </ul>
            </div>

            <div class="clos4">
                <h1><span>NEWS</span>LETTER</h1>
                <form action="">
                    <input type="mail" placeholder="Enter your mail" required="">
                    <button>submit</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright © <a href="mailto:yebgabrayan@gmail.com" target="_blank">ARAS 1.0</a> -All Rights Reserved</p>
    </footer>








    <!--- Link JS -->
    <script>
        const boxes = document.querySelectorAll(".service");
const checkBoxes = () => {
  const triggerBottom = (window.innerHeight / 5) * 4;
  boxes.forEach((box) => {
    const boxTop = box.getBoundingClientRect().top;
    if (boxTop < triggerBottom) box.classList.add("show");
    else box.classList.remove("show");
  });
};
window.addEventListener("scroll", checkBoxes);
checkBoxes();

const galleryes = document.querySelectorAll(".gal");
const checkGallery = () => {
  const triggerBottom = (window.innerHeight / 5) * 4;
  galleryes.forEach((gal) => {
    const boxTop = gal.getBoundingClientRect().top;
    if (boxTop < triggerBottom) gal.classList.add("show");
    else gal.classList.remove("show");
  });
};
window.addEventListener("scroll", checkGallery);
checkGallery();

/*--------------- CLIC BUTON MENU ---------------*/

const buttonMenu = document.querySelector(".button_menu");
const barMenu = document.querySelector(".menu");
const closeMenu = document.querySelector(".menu_close");

buttonMenu.addEventListener("click", () => {
  barMenu.style.opacity = "1";
  buttonMenu.style.display = "none";
  closeMenu.style.display = "block";
});

closeMenu.addEventListener("click", () => {
  closeMenu.style.display = "none";
  buttonMenu.style.display = "block";
  barMenu.style.opacity = "0";
});

    </script>


</body></html>
