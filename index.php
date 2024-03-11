<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Solution</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section style="background-image: url(images/banner.jpg); height:auto; width: 100%;" class="banner-img">
        <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">GP<span>.</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link">Contact</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Get Started</button>
                  </form>
                </div>
              </nav>
        </div>
    </header> 
    <div class="overlay">
      <div class="container">
        <h1 class="banner-header">Powerful Digital<br>Solutions With Gp<span>.</span>
        <p>We are team of talented digital marketers</p></h1>
        <div class="row">
          <div class="col-xl-2 col-md-4 icon-box py-5">
            <i class="fa-solid fa-font-awesome"></i>
            <h4>Lorem Ipsum</h4>
          </div>
          <div class="col-xl-2 col-md-4 icon-box py-5">
            <i class="fa-solid fa-font-awesome"></i>
            <h4>Lorem Ipsum</h4>
          </div>
          <div class="col-xl-2 col-md-4 icon-box py-5">
            <i class="fa-solid fa-font-awesome"></i>
            <h4>Lorem Ipsum</h4>
          </div>
          <div class="col-xl-2 col-md-4 icon-box py-5">
            <i class="fa-solid fa-font-awesome"></i>
            <h4>Lorem Ipsum</h4>
          </div>
          <div class="col-xl-2 col-md-4 icon-box py-5 ">
            <i class="fa-solid fa-font-awesome"></i>
            <h4>Lorem Ipsum</h4>
          </div>
        </div>
      </div>
    </div> 
  </section>

    <!-- Banner completed -->

  <section style="background-color: rgb(255, 255, 255); height:auto;" class="about_section">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-2" onscroll="about()" id="about">
          <h1 class="about-head">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h1>
          <p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></i>
          <P class="icon-text"><i class="fa-solid fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</P>
          <P class="icon-text"><i class="fa-solid fa-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</P>
          <P class="icon-text"><i class="fa-solid fa-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</P>
          <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-3">
          <div class="image_bg">
            <img src="images/about.jpg">
          </div>
        </div>
      </div>
    </div>
  </section>
     
    <!-- About section completed -->

    <section style="width: 100%; height: auto; background-color: rgb(255, 255, 255);">
          <div class="container" id="client_logo">
            <div class="logo-slide">
              <img src="images/client-1.png">
              <img src="images/client-2.png">
              <img src="images/client-3.png">
              <img src="images/client-4.png">
              <img src="images/client-5.png">
              <img src="images/client-6.png">
              <img src="images/client-7.png">
              <img src="images/client-8.png">
            </div>
            <div class="logo-slide">
              <img src="images/client-1.png">
              <img src="images/client-2.png">
              <img src="images/client-3.png">
              <img src="images/client-4.png">
              <img src="images/client-5.png">
              <img src="images/client-6.png">
              <img src="images/client-7.png">
              <img src="images/client-8.png">
            </div>
          </div>
    </section>

    <!-- Client logo finished -->

    <section style="background-color: rgb(255, 255, 255); height:auto;">
      <div class="container">
         <div class="row mt-0">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 com-table">
            <img src="images/features.jpg">
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ">
                <div class="row  mt-2 ">
                  <div class="col-2 i-sec">
                    <i class="fa-solid fa-file-invoice"></i>
                  </div>
                  <div class="col-10 c-sec" onscroll="slideContent()">
                    <h4 id="text">Est labore ad</h4>
                    <p id="text">Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="row  mt-2">
                  <div class="col-2  i-sec">
                    <i class="fa-solid fa-cube"></i>
                  </div>
                  <div class="col-10 c-sec ">
                    <h4>Harum esse qui</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="row  mt-2">
                  <div class="col-2 i-sec">
                    <i class="fa-regular fa-image"></i>
                  </div>
                  <div class="col-10 c-sec">
                    <h4>Aut occaecati</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
                <div class="row  mt-2">
                  <div class="col-2 i-sec">
                    <i class="fa-regular fa-eye"></i>
                  </div>
                  <div class="col-10 c-sec">
                    <h4>Beatae veritatis</h4>
                    <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- this section completed here -->

    <section style="background-color: rgb(255, 255, 255); height:auto" id="services">
      <div class="container">
        <p class="services-text">SERVICES</p> 
        <h1 class="services-head">CHECK OUR SERVICES</h1>
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 flex-box py-3">
            <div class="box">
              <i class="fa-solid fa-basketball"></i>
              <h4>Lorem Ipsum</h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas </p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 flex-box py-3">
            <div class="box">
              <i class="fa-solid fa-book"></i>
              <h4>Sed perspiciatis</h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit  </p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 flex-box  py-3">
            <div class="box">
              <i class="fa-regular fa-clock"></i>
              <h4>Magni Dolores</h4>
              <p>Excepteur sint occaecat cupidatat non proident,sunt in culpa </p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 flex-box  py-3 ">
            <div class="box">
              <i class="fa-solid fa-earth-americas"></i>
              <h4>Nemo Enim</h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus </p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 flex-box  py-3">
            <div class="box">
              <i class="fa-solid fa-laptop-code"></i>
              <h4>Dele cardo</h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor </p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 flex-box  py-3">
            <div class="box">
              <i class="fa-solid fa-torii-gate"></i>
              <h4>Divera don</h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
   <!-- Service section finished -->

   <section style="background-image: url(images/cta-bg.jpg);" class="call_to_action">
          <div class="container" id="cta">
              <h1>Call To Action</h1>
              <P>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
                 <button>Call To Action</button>
          </div>
   </section>


   <section style="height:auto; background-color: rgb(255, 255, 255);" id="portfolio">
        <div class="container">
          <p class="services-text">PORTFOLIO</p> 
          <h1 class="services-head">CHECK OUR PORTFOLIO</h1>
          <div class="row no-gutters">
            <div class="filtering col-sm-12 text-center">
                <span data-filter="*" class="active">All</span>
                <span data-filter=".architecture" class="">App</span>
                <span data-filter=".decor" class="">Card</span>
                <span data-filter=".interior" class="">Web</span>
            </div>
            <div class="col-12 text-center w-100">
                <div class="grid form-row gallery text-center">
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item interior">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-1.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web 1</h4>
                                    <a href=""><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item decor interior">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-2.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web-2</h4>
                                    <a href="file:///E:/Kavita/Gp%20project%202/portfolio_web.html"><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item architecture">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-3.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web-3</h4>
                                    <a href=""><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item interior">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-4.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web-4</h4>
                                    <a href="file:///E:/Kavita/Gp%20project%202/portfolio_web.html"><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item architecture">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-5.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web-5</h4>
                                    <a href="file:///E:/Kavita/Gp%20project%202/portfolio_web.html"><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 grid-item decor">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-6.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web-6</h4>
                                    <a href="file:///E:/Kavita/Gp%20project%202/portfolio_web.html"><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 mb-lg-0 grid-item interior">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-7.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web-7</h4>
                                    <a href="file:///E:/Kavita/Gp%20project%202/portfolio_web.html"><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-2 mb-sm-0 grid-item decor">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-8.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web-8</h4>
                                    <a href="file:///E:/Kavita/Gp%20project%202/portfolio_web.html"><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 grid-item architecture">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-image">
                                <img src="images/portfolio-9.jpg" alt="..." />
                            </div>
                            <div class="portfolio-overlay">
                                <div class="portfolio-content">
                                    <!-- <a class="popimg ml-0" href="#">
                                        <i class="ti-zoom-in display-24 display-md-23 display-lg-22 display-xl-20"></i>
                                    </a> -->
                                    <h4>Web-9</h4>
                                    <a href="file:///E:/Kavita/Gp%20project%202/portfolio_web.html"><i class="fa-solid fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
      </div>
   </section>

   <!-- Portfolio finished -->

   <section style="background-color: rgb(255, 255, 255); height:auto; width: 100%;">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
           <div class="counter-image">
            <img src="images/counter-img.jpg">
           </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="counter-section">
             <h2>Voluptatem dignissimos provident quasi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
              labore et dolore magna aliqua.</p> 
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-0">
                    <div class="counter-box">
                      <div class="icon-sec-2">
                        <i class="fa-regular fa-face-smile"></i>
                      </div>
                      <div class="con-sec-2">
                        <h1 class="num" data-val="65">00</h1>
                        <p>Happy Clients consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                      </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-0">
                  <div class="counter-box">
                    <div class="icon-sec-2">
                      <i class="fa-regular fa-file-word"></i>
                    </div>
                    <div class="con-sec-2">
                      <h1 class="num" data-val="20">00</h1>
                      <p>Happy Clients consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-0">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="counter-box">
                      <div class="icon-sec-2">
                        <i class="fa-regular fa-clock"></i>
                      </div>
                      <div class="con-sec-2">
                        <h1 class="num" data-val="85">00</h1>
                        <p>Happy Clients consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                      </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                  <div class="counter-box">
                    <div class="icon-sec-2">
                      <i class="fa-solid fa-award"></i>
                    </div>
                    <div class="con-sec-2">
                      <h1 class="num" data-val="35">00</h1>
                      <p>Happy Clients consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </section>

   <!-- Counter Section completed -->


<section class="testimonial-section mt-5">
  <div class="testimonial-opacity">
    <div class="container-xl">
      <div class="row">
        <div class="col-lg-8 mx-auto py-5">
          <!-- <h2>Testimonials</h2> -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>   
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="img-box"><img src="images/testimonials-1.jpg" alt=""></div>
                <p class="overview"><b>Saul Goodman</b><br>CEO & Founder</p>
                <p class="testimonial">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet."</p>
              </div>
              <div class="carousel-item">
                <div class="img-box"><img src="images/testimonials-2.jpg" alt=""></div>
                <p class="overview"><b>Sara Willson</b><br> Designer</p>
                <p class="testimonial">"Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio."</p>
              </div>
              <div class="carousel-item">
                <div class="img-box"><img src="images/testimonials-3.jpg" alt=""></div>
                <p class="overview"><b>Jena Carlis</b><br>Store Owner</p>
                <p class="testimonial">"Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum."</p>
              </div>
              <div class="carousel-item">
                <div class="img-box"><img src="images/testimonials-4.jpg" alt=""></div>
                <p class="overview"><b>Matt Brandon</b><br>Freelancer</p>
                <p class="testimonial">"Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum."</p>
              </div>
              <div class="carousel-item">
                <div class="img-box"><img src="images/testimonials-5.jpg" alt=""></div>
                <p class="overview"><b>John Larson</b><br>Enterprenure</p>
                <p class="testimonial">"Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum."</p>
              </div>
            </div>
            <!-- Carousel controls -->
            <!-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- testimonial section completed -->


<section style="background-color: rgb(255, 255, 255); height:auto;">
  <div class="container">
    <p class="services-text">TEAM</p> 
    <h1 class="services-head">CHECK OUR TEAM</h1>
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 team-img-sec">
        <div class="team-img">
          <img src="images/team-1.jpg" class="team-1">
          <!-- <div class="overlay-icon">
            <i class="fa-brands fa-square-twitter"></i>
            <i class="fa-brands fa-square-facebook"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
          </div> -->
        </div>
        <div class="team-name">
          <h5>Walter White</h5>
          <p>Chief Executive Officer</p>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 team-img-sec">
        <div class="team-img">
          <img src="images/team-2.jpg">
          <div class="team-name">
            <h5>Sarah Jhonson</h5>
            <p>Product Manager</p></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 team-img-sec">
        <div class="team-img">
          <img src="images/team-3.jpg">
          <div class="team-name">
            <h5>William Anderson</h5>
            <p>CTO</p></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 team-img-sec">
        <div class="team-img">
          <img src="images/team-4.jpg">
          <div class="team-name">
            <h5>Amanda Jepson</h5>
            <p>Accountant</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Team completed -->

<section style="background-color: rgb(255, 255, 255); height:auto;">
  <div class="container">
    <p class="services-text">TEAM</p> 
    <h1 class="services-head">CHECK OUR TEAM</h1>
    <div class="maps">
      <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="auto" id="gmap_canvas" 
        src="https://maps.google.com/maps?q=636+5th+Ave%2C+New+York&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" 
        scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.analarmclock.com/"></a><br>
        <a href="https://www.onclock.net/"></a><br><style>.mapouter{position: relative;text-align: right;
          height:auto;width:100%;}</style><a href="https://www.ongooglemaps.com">create map in google</a>
          <style>.gmap_canvas{overflow: hidden;background: none !important;height:auto;width:100%;}</style></div></div>
    </div>
  </div>
</section>

<!-- Map completed  -->

<section style="background-color: rgb(255, 255, 255); height:auto;">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="icons py-2">
            <div class="contact-icons">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="location-content">
              <h5>Location:</h5>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>
          <div class="icons py-2">
            <div class="contact-icons">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="location-content">
              <h5>Email:</h5>
              <p>info@example.com</p>
            </div>
          </div>
          <div class="icons py-2">
            <div class="contact-icons">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="location-content">
              <h5>Call:</h5>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mt-0">
            <form action="form.php" method="post">
              <div class="row mt-0">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 py-2">
                  <input type="text" placeholder="Your Name" class="form-sec" name="name">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 py-2">
                  <input type="email" placeholder="Your Email" class="form-sec" name="email">
                </div>
                <div class="col-12 py-2">
                  <input type="text" placeholder="Subject" class="form-sec" name="subject">
                </div>
                <div class="col-12 py-2">
                  <textarea placeholder="Message" name="msg"></textarea>
                </div>
                <div class="col-12 py-2">
                  <button class="send-msg-btn">Send Message</button>
                </div>
                <?php
                    if(isset($_SESSION['status'])){
                ?>
                <div class="alert alert-success" role="alert">
                  <p><?php echo $_SESSION['status'];  ?></p>
                </div>              
                <?php
                }
                unset($_SESSION['status']);
                ?>
              </div>
            </form>
        </div>
      </div>
    </div>
</section>
<!-- Form Completed  -->

<footer style="background-color: rgb(0, 0, 0); height:auto;">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 py-5">
            <h3 class="footer_logo">GP<span>.</span></h3>
            <p class="text-white ournews">A108 Adam Street<br>
              NY 535022, USA</p>
             <p class="text-white ournews"><b>Phone:</b> +1 5589 55488 55<br><b>Email:</b> info@example.com</p> 
             <div class="footer-social-icon">
              <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              <a href="#"><i class="fa-brands fa-skype"></i></a>
             </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 py-5 ">
          <h5 class="text-white">Useful Links</h5>
          <div class="links">
            <li><a href="#home"><span>></span> Home</a><br></li>
            <li><a href="#about"><span>></span> About us</a><br></li>
            <li><a href="#services"><span>></span> Services</a><br></li>
            <li><a href="#t&c"><span>></span> Terms of service</a><br></li>
            <li><a href="#p&p"><span>></span> Privacy policy</a><br></li>
          </div>  
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 py-5">
          <h5 class="text-white">Our Services</h5>
          <div class="links">
            <li><a href="#home"><span>></span> Web Design</a><br></li>
            <li><a href="#about"><span>></span> Web Development</a><br></li>
            <li><a href="#services"><span>></span> Product Management</a><br></li>
            <li><a href="#t&c"><span>></span>Marketting</a><br></li>
            <li><a href="#p&p"><span>></span>Graphic Design</a><br></li>
          </div> 
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 py-5">
          <h5 class="text-white">Our Newsletter</h5>
          <p class="text-white ournews">Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form>
            <div class="subscribe"><input type="text" class="subs-cribe"><button class="subscribe_btn">Subscribe</button></div>
          </form>
        </div>
      </div>
    </div>
</footer>

<!-- Footer Completed  -->










   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89D"></script>
    <script src="@@path/vendor/countup.js/dist/countUp.umd.js"></script>
    
    <script>
       $(function(){
        $(".grid").masonry({ itemSelector: ".grid-item" });
        
        $(".filtering").on("click", "span", function () {
            var a = $(".gallery").isotope({});
            var e = $(this).attr("data-filter");
            a.isotope({ filter: e });
        });
        $(".filtering").on("click", "span", function () {
            $(this).addClass("active").siblings().removeClass("active");
        });
        }) 
    </script>
  
        <script src="script.js"></script>
</body>
</html>