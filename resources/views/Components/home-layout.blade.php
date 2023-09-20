<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Name of company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/Home/css/main.css') }}">
</head>

<body>

      <nav class="navbar navbar-expand-xl fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img claass="w-100" src="img/icon/company-logo.svg" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-card-item">
                <a class="nav-link  active" href="index.html">Home</a>
              </li>
              <li class="nav-card-item">
                <a class="nav-link" href="aboutus.html">About</a>
              </li>
              <li class="nav-card-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-card-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>         
            </ul>
            <ul class="right navbar-nav ms-auto">
              <li class="nav-card-item-right">
                <a class="nav-link" href="#">Sign in</a>
              </li>
              <li class="nav-card-item-right create-account">
                <a class="nav-link" href="#">Create account</a>
              </li>       
            </ul>
          </div>
        </div>
      </nav>
      <main>
        <!-- Intro -->

      
         <!--Search by category-->
         <div class="intro">
          <div class="container">
            {{$error}}
            {{$slot}}


            </div>
        </div>
        
    </main>
      <!-- Footer -->
      <footer>
          <div class="container text-center text-md-start">
            <div class="footer-wrap">
              <div class="about">
                <img src="img/icon/company-logo.svg" alt="">
                <p class="text-muted py-4">
                  Start working with Firmbee which can provide you with all the tools needed to run an effcieint business remotely.
                </p>
                <div class="social-media">
                  <a href="" class="me-2 text-reset"><img src="img/icon/facebook-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/twitter-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/linkedin-icon.svg" alt=""></a>
                  <a href="" class="me-2 text-reset"><img src="img/icon/instagram-icon.svg" alt=""></a>
                </div>
              </div>

              <div class="company">
                <h6 class="fw-bold">Company</h6>
                <p><a href="">About us</a></p>
                <p><a href="">Services</a></p>
                <p><a href="">Team</a></p>
                <p><a href="">Pricing</a></p>
                <p><a href="">Project</a></p>
                <p><a href="">Careers</a></p>
                <p><a href="">Blog</a></p>
                <p><a href="">Login</a></p>
              </div>
              
              <div class="useful-links">
                <h6 class="fw-bold">Useful links</h6>
                <p><a href="">Terms of </a></p>
                <p><a href="">Services</a></p>
                <p><a href="">Privacy Policy</a></p>
                <p><a href="">Documentation</a></p>
                <p><a href="">Changelog</a></p>
                <p><a href="">Components</a></p>
              </div>

              <div class="newsletter">
                <h6 class="fw-bold">Newsletter</h6>
                <p class="text-muted">Sign up and receive the latest tips
                  via email.</p>
                  <form id="subscribe" action="">
                    <label for="email">Youre e-mail:</label>
                    <input type="email" placeholder="e-mail:" name="email" required>
                    <button type="submit" class="main-btn">Subscribe</button>
                  </form>
              </div>
              
            </div>
            <div class="copyright">
              <p>&copy; 2022 YOUR-DOMAIN | Created by <a href="https://firmbee.com/solutions/project-management/" title="Firmbee - Free Project Management System">Firmbee.com</a></p>
              <!--
              This template is licenced under Attribution 3.0 (CC BY 3.0 PL),
              You are free to: Share and Adapt. You must give appropriate credit, you may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
              --> 
            </div>
          </div>
        
      </footer>

    <script src="{{ asset('assets/Home/js/nav-bg.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</body>
</html>