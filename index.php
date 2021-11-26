<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Portfolio</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="user">
        <img src="img/pic.jpg" alt="" />
        <h3 class="name">Dasep Depiyawan</h3>
        <p class="post">Web Programmer</p>
      </div>

      <nav class="navbar">
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#education">Pendidikan</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <!-- end of header -->

    <div id="menu" class="fas fa-bars"></div>

    <!-- home section starts -->
    <section class="home" id="home">
      <h3>HI THERE !</h3>
      <h1>I'M<span> dasep depiyawan</span></h1>
      <p>
        Saya seorang Web Programmer yang bisa bekerja dengan bahasa pemrograman
        PHP dan Java di PHP saya bisa menggunakan PHP Native & PHP Framework
        (CodeIgniter 3 & Laravel 8)
      </p>
      <a href="#about"
        ><button class="btn">About me <i class="fa fa-user"></i></button
      ></a>
    </section>
    <!-- end of home -->

    <!-- about section start -->
    <section class="about" id="about">
      <h1 class="heading"><span>about</span> me</h1>
      <div class="row">
        <!-- info -->
        <div class="info">
          <h3><span>name :</span> dasep depiyawan</h3>
          <h3><span>age :</span> 22</h3>
          <h3><span>post :</span> Web Programmer dan Desktop Programmer</h3>
          <h3><span>language :</span> indonesia</h3>
          <a href="#">
            <button class="btn">
              download CV <i class="fa fa-download"></i>
            </button>
          </a>
        </div>
        <!-- end info -->

        <!-- counter -->
        <div class="counter">
          <div class="box">
            <span>2+</span>
            <h3>years experience</h3>
          </div>

          <div class="box">
            <span>6</span>
            <h3>projects completed</h3>
          </div>

          <div class="box">
            <span>8+</span>
            <h3>happy clients</h3>
          </div>
        </div>
        <!-- end counter -->
      </div>
    </section>
    <!-- end about -->

    <!-- education  -->

    <section class="education" id="education">
      <h1 class="heading"><span>my </span>education</h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <span>Angkatan 2010</span>
          <h3>SDN SUKAMANAH</h3>
          <p>dari tahun 2005 - 2010</p>
        </div>

        <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <span>Angkatan 2013</span>
          <h3>SMP YAS SINDANGKERTA</h3>
          <p>dari tahun 2010-2013</p>
        </div>

        <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <span>Angkatan 2017</span>
          <h3>SMK DWI PUTRA</h3>
          <p>Jurusan Teknik Komputer & Jaringan dari tahun 2013-2017</p>
        </div>

        <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <span>2019</span>
          <h3>web programmer</h3>
          <p>
            Belajar secara informal dan otodidak dari tahun 2019 - sekarang
            <br />
            - PHP - Laravel - CodeIgniter
          </p>
        </div>

        <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <span>2021</span>
          <h3>Java Programmer</h3>
          <p>Belajar secara informal dan otodidak dari tahun 2021 - sekarang</p>
        </div>

        <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <span>2021</span>
          <h3>front end development</h3>
          <p>Sedang Belajar Front End Development</p>
        </div>
      </div>
    </section>
    <!-- end of education -->

    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
      <h1 class="heading"><span>my </span>portfolio</h1>

      <div class="box-container">
        <div class="box">
          <img src="img/apotkkl.jpg" alt="" />
        </div>
        <div class="box">
          <img src="img/sewakamera.jpg" alt="" />
        </div>
        <div class="box">
          <img src="img/simas.jpg" alt="" />
        </div>
        <div class="box">
          <img src="img/e-perpus.jpg" alt="" />
        </div>
      </div>
    </section>
    <!-- end of portfolio -->

    <!-- contact -->
    <section class="contact" id="contact">
      <h1 class="heading"><span>my </span>contact</h1>
      <div class="row">
        <div class="content">
          <h3 class="title">contact info</h3>
          <div class="info">
            <h3><i class="fas fa-envelope"></i> depiyawandasep13@gmail.com</h3>
            <h3><i class="fas fa-phone"></i> +6283 821 619 460</h3>
            <h3><i class="fas fa-map-marker-alt"></i> Jakarta ,14430</h3>
          </div>
        </div>

        <form action="">
          <input type="text" placeholder="name" class="box" />
          <input type="email" placeholder="email" class="box" />
          <input type="text" placeholder="projects" class="box" />
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="message"
            class="box message"
          ></textarea>

          <button class="btn" type="submit">
            send <i class="fas fa-paper-plane"></i>
          </button>
        </form>
      </div>
    </section>
    <!-- end of contact -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
  </body>
</html>
