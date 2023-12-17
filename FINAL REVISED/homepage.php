<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="tes1.css">
</head>
<body>

<!-- NavBar -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="homepage.php">SoulShare</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team">Our Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactinfo">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#FAQ">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-white"><b><a href="dashboard.php" class="btn btn-dark">Share Your Voice</a></b></button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Carousel-->

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slide 1.jpg" class="d-block w-100">
        <div class="carousel-caption">
          <h5>Your Goal</h5>
          <p>Whether you're seeking inspiration, coping strategies, or simply a reminder to pause and reflect, our platform is here for you. Embrace the conversation about mental health, and discover the strength that comes from understanding and nurturing your mind.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="slide 2.jpeg" class="d-block w-100">
        <div class="carousel-caption">
          <h5>Quote of the Day</h5>
          <p>"One small crack does not mean that you are broken, it means that you were put to the test and you didn't fall apart." - Linda Poindexter</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="slide 3.jpeg" class="d-block w-100" style="max-width: 100%; height: auto;">
        <div class="carousel-caption">
          <h5>Start a Dialogue</h5>
          <p>Your thoughts matter. Start a conversation, spark discussions, and invite others to share their insights. SoulShare provides a safe heaven for everyone to contribute their comments and remarks, revealing the  realization that our differences are not as vast as they may initially seem.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!--Services-->

<section id="services" class="services section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2>Services</h2>
            <p>We showcase an array of services, some that may assist you in your time of need.<br> Feel free to explore the options below, designed to enhance your well-being.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-white text-center bg-dark pb-2" style="width: 100%; height: 100%;">
          <div class="card-body">
            <i class="bi bi-send"></i>
            <h3 class="card-title">Post a Story</h3>
            <p class="lead">Our website allows the user to choose a topic of their choice, and is then given an area to layout their thoughts to be published to the general public.</p>
          </div>
        </div>
      </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2" style="width: 100%; height: 100%;">
            <div class="card-body">
              <i class="bi bi-chat-heart"></i>
              <h3 class="card-title">Comments</h3>
              <p class="lead">We provide a comment action for a more broad spectrum in opinions, we believe that this may help in developing a strong community.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2" style="width: 100%; height: 100%;">
            <div class="card-body">
              <i class="bi bi-person-raised-hand"></i>
              <h3 class="card-title">Donation</h3>
              <p class="lead">Together, we can make a meaningful impact by supporting national alliances dedicated to the treatment of common mental illnesses.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<!--Our Team-->
<section id="team" class="team section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h3 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">LE MINERALE</h3>
        </div>
      </div>
    </div>
    
    <div class="row" style="width: 100%;">
      <div class="col-md-4">
        <div class="card text-center" style="width: 100%; height: 100%;">
          <img src="efraim.jpg" class="card-img-top img-fluid">
          <div class="card-body">
            <h3 class="card-title py-2" style="font-family: 'Courier New', Courier, monospace;">Joshua Efraim</h3>
            <p class="socials">
                <a href="https://www.instagram.com/joshua_efraim/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100012554299324" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center" style="width: 100%; height: 100%;">
          <img src="edward.jpg" class="card-img-top img-fluid">
          <div class="card-body">
            <h3 class="card-title py-2" style="font-family: 'Courier New', Courier, monospace;">Edward Raphael</h3>
            <p class="socials">
                <a href="https://www.instagram.com/kowanda_36/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61550575661499" target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center" style="width: 100%; height: 100%;">
          <img src="edko.jpg" class="card-img-top img-fluid">
          <div class="card-body" style="width: 100%;">
            <h3 class="card-title py-2" style="font-family: 'Courier New', Courier, monospace;">Edward Kowanda</h3>
            <p class="socials">
              <a href="https://www.instagram.com/edward_raphael_/" target="_blank"><i class="bi bi-instagram text-dark mx-1"></i></a>
              <a href="https://www.facebook.com/edward.kowanda.5"  target="_blank"><i class="bi bi-facebook text-dark mx-1"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Contact-->

<section id="contactinfo" class="contactinfo">
  <h2>Contact Us</h2>
  <p>Email: efraimlikesedko@gmail.com</p>
  <p>Phone: +62 123456789</p>
  <p>Address: Jl. Binus FX Senayan, Indonesia</p>
</section>

<section id="FAQ" class="FAQ">
  <h2>Frequently Asked Questions</h2>
  <div class="question" onclick="toggleAnswer('answer1')">Q: How to Comment?</div>
        <div class="answer" id="answer1" style="display: none;">A: You can comment by first pressing the 'view comments' from the post that you would like to comment on and there will be a text area for you to type in your comment, once you are done you can press the reply button.</div>
  <div class="question" onclick="toggleAnswer('answer2')">Q: How to write a story</div>
        <div class="answer" id="answer2" style="display: none;">A: You can write your story by first clicking on "Share Your Voice" and then clicking on "Write Story".</div>
  <div class="question" onclick="toggleAnswer('answer3')">Q: How can I donate?</div>
        <div class="answer" id="answer3" style="display: none;">A: You can donate to this BCA account 7403087205.</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
  function toggleAnswer(answerId){
  var answer = document.getElementById(answerId);
            if (answer.style.display === "none") {
                answer.style.display = "block";
            } else {
                answer.style.display = "none";
            }
          }
</script>
</body>
</html>
