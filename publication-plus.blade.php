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

  <title>Disparue-Détails</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('asset/img/favicon.png')}}" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('asset/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

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
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  @foreach ($publication as $yeb )

  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">

        <img src="{{ asset('storage') . '/' . $yeb->path }}" alt="Profil" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">{{ $yeb->nom }}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">

      <h1>Je suis, {{ User::find($yeb->user_id)->name }}  {{ User::find($yeb->user_id)->surname }}</h1>
      <p> <span class="typed" data-typed-items="Bonjour à vous , S'il vous plait Aidez moi à retrouver , Mon {{ $yeb->Lien }}, Disparue "></span></p>
    </div>
  </section><!-- End Hero -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

       <div class="row">
          <div class="col-lg-4" data-aos="fade-right">

            <img src="{{ asset('storage') . '/' . $yeb->path }}"  class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Vous êtes sur Aras publication +.</h3>
            <p class="fst-italic">
                Ici vous avez accés à l'ensemble des informations sur un individu signalé disparue renségné par un de ces proches et l'ensemble des commentaires postés sur ce dernier.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $yeb->date_de_naissance }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $yeb->age }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Taille:</strong> <span>{{ $yeb->taille }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Lieu de naissance:</strong> <span>{{ $yeb->lieu_de_naissance }}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Quelque mot sur le ou la disparues:</strong> <span></span></li>
</ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Disparition Suite:</strong> <span>{{ $yeb->Condition_perte }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Sexe:</strong> <span>{{ $yeb->Sexe }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Lieu de naissance:</strong> <span>{{ $yeb->lieu_de_naissance }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Publier le :</strong> <span><time datetime="{{ explode(' ', $yeb->created_at)[0]}}">{{ date_format(date_create($yeb->created_at),'d F, 20y') }}
                </time></span></li>
                </ul>
              </div>
            </div>
            <p>
                {{ $yeb->commentaire }}</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

       <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <h4>Name & Prenom:</h4>
                <p>{{ User::find($yeb->user_id)->name }} {{ User::find($yeb->user_id)->surname }}</</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>email:</h4>
                <p> {{ User::find($yeb->user_id)->email }}</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ User::find($yeb->user_id)->number }}</</p>
              </div>

                <img width="320" height="240" class="card-img" src="{{ asset('storage') . '/' .User::find($yeb->user_id)->path }}" alt="Profil">
                </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            @if ($message = Session::get('success'))
            <div class=".alert alert-success">
                <P>{{$message }}</P>
            </div>
            @endif
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>YMB-Production/span></strong>
      </div>
      <div class="credits">
        Designed by  <a href="mailto:yebgabrayan@gmail.com">ARAS 1.0</a>
      </div>
    </div>
  </footer><!-- End  Footer -->@endforeach

  <footer id="footer">
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('asset/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset('asset/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('asset/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('asset/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('asset/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{ asset('asset/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('asset/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('asset/js/main.js')}}"></script>

</body>

</html>
