<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Portofolio Laravel</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
          </a>
          <div class="" id="">
            <div class="User_option">
              <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search">
                <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Hi, I'm Malika <br>
                      <span>
                        Maharani Khoerulisa
                      </span>
                    </h1>
                    <p>
                      I'm student at Wikrama Vocational High School
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact
                      </a>
                    </div>
                  </div>
                </div>


    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->
  @yield ('about')

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <h2>
            About Me
          </h2>
        </div>
        <p>
        I am a student at Wikrama Vocational High School, majoring in Software Engineering. I have a high enthusiasm for the field of information technology, especially in terms of software development and programming. I am always eager to learn and explore new things in the IT world.
        </p>
        <div class="btn-box">
          <a href="">
            <span>
              Read More
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- about section -->

  <section class="animal_section layout_padding">
    <div class="container">
      <div class="animal_container">
        <div class="box b1">
          <div class="img-box">
            <img src="https://logodownload.org/wp-content/uploads/2016/10/html5-logo.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              HTML
            </h5>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="https://logodownload.org/wp-content/uploads/2017/04/css-3-logo.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              CSS
            </h5>
          </div>
        </div>
        <div class="box b1">
          <div class="img-box">
            <img src="https://gobrite.io/wp-content/themes/brite/img/icon-technologies-png/icon-javascript@2x.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              JavaScript
            </h5>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="https://ddkits.com/sites/files/php5.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              PHP
            </h5>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <section class="pet_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                ABOUT "PPLG"
              </h2>
            </div>
            <p>
            Jurusan PPLG fokus pada pengelolaan perangkat lunak dan strategi pemasaran. Siswa mempelajari pemrograman, analisis sistem, manajemen proyek, dan pemasaran produk perangkat lunak. Dengan pelatihan ini, lulusan siap bekerja sebagai pengembang perangkat lunak, manajer proyek, atau spesialis pemasaran di industri teknologi informasi.
            </p>
            <div class="btn-box">
              <a href="">
                <span>
                  Read More
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- contact section -->

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <h2>
              send me a message
              </h2>
              <p>
              write your message to me in the space below!
              </p>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="text" placeholder="Phone number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
   <br>
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
              CONTACT INFO
            </h5>
            <div>
              <img src="images/call.png" alt="" />
              <p>
                0899*****
              </p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>
                malikamaharani505@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <div>
            </div>
            <div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>
              social media
            </h5>
            <div class="social_container">
              <div>
                <a href="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form pl-lg-4">
            <h5>
              CONTACT ME
            </h5>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; 2024 |
      <a href="https://html.design/">Malika Maharani Khoerulisa</a>
    </p>
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>

</body>

</html>