<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aras-submit</title>
    <link rel="stylesheet" href="assets/css/style2.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
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
    }</style>
  <body>
    <div id="video-fond">
        <video  autoplay muted >
          <!-- Source vidéo par défaut -->
          <source type="video/mp4" src="[4K][INTRO OUTRO] Fond Levé de Soleil Planète Terre.mp4" media="(orientation: landscape)">
          <source type="video/webm" src="[4K][INTRO OUTRO] Fond Levé de Soleil Planète Terre.webm" media="(orientation: landscape)">

        </video>
        <!-- Ici les boutons ou les métadonnées -->
      </div>
    <div class="container">

              <div class="progress-bar">
                <div class="step">
          <p>Publier votre disparue</p>
          <div class="bullet">
            <span></span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        @if ($message = Session::get('success'))
        <div class=".alert alert-success">
            <P>{{$message }}</P>
        </div>
        @endif
        <form action="{{ route('publication.create') }}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="page slide-page">
            <div class="field">
              <div class="label">Quel est son nom ?</div>
              <input type="text" name="nom" id="nom" required>
            </div>
            <div class="field">
              <div class="label">Quel est son prenom ?</div>
              <input type="text" name="prenom" id="prenom" required>
            </div>
            <div class="field">
                <div class="label">Quel est approximativement taille ?</div>
                <input type="text" name="taille" id="taille" required>
            </div>
            <div class="field">
                <div class="label">Dans quel condition l'avez vous perdue</div>
                <select name="Condition_perte">
                  <option>Accident Avion-Train-Voiture</option>
                  <option>Catastrophes naturelles</option>
                  <option>Guerre</option>
                  <option>Pandemie</option>
                  <option>Zanted(delit)</option>
                </select>
              </div>
            <div class="field">
              <button class="firstNext next">Next</button>

            </div>
          </div>

          <div class="page">
            <div class="title">Contact Info:</div>
            <div class="field">
              <div class="label">Quel est son age</div>
              <input type="Number" name="age" id="age" required>
            </div>
            <div class="field">
              <div class="label">Quel est son lieu de naissance</div>
              <input type="text" name="lieu_de_naissance" id="lieu_de_naissance" required>
            </div>
            <div class="field">
                <div class="label">Quel est la derniére ville connu</div>
                <input type="text" name="derniere_ville" id="derniere_ville" required>
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Quel est sa date de naissance:</div>
            <div class="field">
              <div class="label">Date</div>
              <input type="date" name="date_de_naissance" id="date_de_naissance" required>
            </div>
            <div class="field">
                <div class="label">Pays</div>
                <input type="Pays" name="Pays" id="Pays" required>
              </div>
            <div class="field">
              <div class="label">Quel est son sexe</div>
              <select name="Sexe">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="field">
                <div class="label">Lien avec ce dernier</div>
                <select name="Lien">
                  <option>Parent</option>
                  <option>Frére/soeur</option>
                  <option>Cousin/soeur</option>

                  <option>Other</option>
                </select>
              </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Détail personnelle 2:</div>
            <div class="field">
              <div class="label">Es ce vous qui êtes perdue ? Oui|Non</div>
              <input type="text" name="perdue" id="perdue" required>
            </div>
            <div class="field">
              <div class="label">Quel est le dernier vêtement connu ?</div>
              <input type="text" name="dernier_vêtement" id="dernier_vêtement" required>
            </div>
            <div class="field">
              <div class="label">Choisir une photo ?</div>
              <input type="file" name="avatar" id="avatar" required>
              @error('image')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
            </div>
            <div class="field">
              <div class="label">Parler un peu de la personne recherché ?</div>
              <input type="text" name="commentaire" id="commentaire" required>
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script>
        const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Your publication is  Successfully ");
  },800);
});

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});

    </script>


  </body>
</html>
