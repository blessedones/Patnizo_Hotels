<!-- /*
* Template Name: PatnizoHotels
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="images/logos.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/aos.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>PatnizoHotels</title>
  </head>
  <body>

    <div id="untree_co--overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <nav class="untree_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>


    <div class="untree_co--site-wrap">

      <nav class="untree_co--site-nav js-sticky-nav">
        <div class="container d-flex align-items-center">
          <div class="logo-wrap">
            <a href="{{url('/')}}" class="untree_co--site-logo">PatnizoHotels</a>
          </div>
          <div class="site-nav-ul-wrap text-center d-none d-lg-block">
            <ul class="site-nav-ul js-clone-nav">
           
              </li>
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/amenities')}}">Amenities</a></li>
              <li><a href="{{url('/gallery')}}">Gallery</a></li>
              <li><a href="{{url('/aboutus')}}">About Us</a></li>
              <li><a href="{{url('/contact')}}">Contacts</a></li>
              <li><a href=""><button type="button" class="btn btn-outline-warning">Book Now</button></a></li>
              <li><a href="{{url('/login')}}"><button type="button" class="btn btn-outline-warning">Login</button></a></li>
            </ul>
          </div>
          <div class="icons-wrap text-md-right">

            <ul class="icons-top d-none d-lg-block">
              <li class="mr-4">
                <a href="#" class="js-search-toggle"><span class="icon-search2"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
            </ul>

            <!-- Mobile Toggle -->
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </nav>

      <div class="untree_co--site-main">
        

        <div class="owl-carousel owl-hero">

          <div class="untree_co--site-hero overlay" style="background-image: url('images/slider_2.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                  <div class="site-hero-contents text-center" data-aos="fade-up">
                    <h1 class="hero-heading">PatnizoHotels</h1>
                    <div class="sub-text">
                      <p>Welcome to PatnizoHotels, a better place for Hotelisation, Adventure and Exploration!! we offer the best Service...   <a href="{{url('/contact')}}" target="_blank" class="text-white font-weight-bold">ContactUs</a> &nbsp; now  for more usage details.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="untree_co--site-hero overlay"  style="background-image: url('images/slider_1.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                  <div class="site-hero-contents text-center" data-aos="fade-up">
                    <h1 class="hero-heading">Enjoy Your Stay</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="untree_co--site-hero overlay" style="background-image: url('images/room_1_a.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                  <div class="site-hero-contents text-center" data-aos="fade-up">
                    <h1 class="hero-heading">This is your Home</h1>
                    <div class="sub-text">
                      <p>Day dreaming is what you do when you are far away from home,</p>
                      <p>You dream of the day,when you are at Home</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="untree_co--site-section float-left pb-0 featured-rooms">

          <div class="container pt-0 pb-5">
            <div class="row justify-content-center text-center">  
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Featured Rooms</h3>
              </div>
            </div>
          </div>

          <div class="container-fluid pt-5">
            <div class="suite-wrap overlap-image-1">

              <div class="suite">
                <div class="image-stack">
                  <div class="image-stack-item image-stack-item-top" data-jarallax-element="-50">
                    <div class="overlay"></div>
                    <img src="images/room_1_a.jpg" alt="Image" class="img-fluid pic1">
                  </div>
                  <div class="image-stack-item image-stack-item-bottom">
                    <div class="overlay"></div>
                    <img src="images/room_1_b.jpg" alt="Image" class="img-fluid pic2">
                  </div>
                </div>
              </div> <!-- .suite -->

              <div class="suite-contents" data-jarallax-element="50">
                <h2 class="suite-title">King Bedroom</h2>
                <div class="suite-excerpt">
                  <p> King Beedrom is a beautiful small room suite with the ability to accomodate less than 3 people </p>
                  <p><a href="#" class="readmore">Room Details</a></p>
                </div>
              </div>
            </div>

            <div class="suite-wrap overlap-image-2">

              <div class="suite">
                <div class="image-stack">
                  <div class="image-stack-item image-stack-item-top">
                    <div class="overlay"></div>
                    <img src="images/room_2_a.jpg" alt="Image" class="img-fluid pic1">
                  </div>
                  <div class="image-stack-item image-stack-item-bottom" data-jarallax-element="-50">
                    <div class="overlay"></div>
                    <img src="images/room_2_b.jpg" alt="Image" class="img-fluid pic2">
                  </div>
                </div>
              </div>

              <div class="suite-contents" data-jarallax-element="50">
                <h2 class="suite-title">Queen &amp; Double Bedroom</h2>
                <div class="suite-excerpt pr-5">
                  <p>Queen and Double Bedroom is a large suite Beedrom, with the ability to accomodate up to 6 people. </p>
                  <p><a href="#" class="readmore">Room Details</a></p>
                </div>
              </div>

            </div>

          </div>
        </div>

        <div class="untree_co--site-section">
          <div class="container">
            <div class="container pt-0 pb-5">
            <div class="row justify-content-center text-center">  
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Hotel Amenities</h3>
              </div>
            </div>
          </div>
            <div class="row custom-row-02192 align-items-stretch">
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/parking.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Free Self-Parking</h3>
                  <p>PatnizoHotels provides , free vehicles parking for our clients.</p>
                  <p><p><a href="#" class="readmore reverse">Read More</a></p></p>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/internet.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>High speed Internet access</h3>
                  <p>Free and Extreme High speed internet access is provided for our clients, Risiding in the Hotel</p>
                  <p><p><a href="#" class="readmore reverse">Read More</a></p></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/wifi.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Complimentary WiFi in public areas</h3>
                  <p>For our clients,outside but living near our hotel they can still have access to the internet </p>
                  <p><p><a href="#" class="readmore reverse">Read More</a></p></p>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/elevator.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Elevators</h3>
                  <p>PatnizoHotels have Elevators all over the place where there is a need for using it</p>
                  <p><p><a href="#" class="readmore reverse">Read More</a></p></p>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/partners.svg" alt="Image" class="img-fluid">
                  </div>

                  <h3>Meeting rooms</h3>
                  <p>PatnizoHotels is also a home for big and small Events. </p>
                  <p><p><a href="#" class="readmore reverse">Read More</a></p></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/washing-machine.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Laundry and Valet service</h3>
                  <p>For clients Residing for a long period of time, PatnizoHotels provides paid Laundry and Valet service</p>
                  <p><p><a href="#" class="readmore reverse">Read More</a></p></p>
                </div>
              </div>

            </div>
          </div>
        </div>
        

        
        

        <div class="untree_co--site-section">
          <div class="container">
            <div class="row">
              <div class="col-md-4 section-heading" data-aos="fade-up">
                <h3 class="text-left">News &amp; Events</h3>
                <div class="w-75">
                  <p>What's going on at PatnizoHotels</p>
                  </div>
                <p><a href="#" class="readmore">All Posts</a></p>
              </div>
              <div class="col-md-4">
                <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                  <a href="#" class="thumb"><img src="images/img_p.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-entry-contents">
                    <h3><a href="#">There is no Place Like Home</a></h3>
                    <div class="date">November 5, 2022 &bullet; by <a href="#">Aimee Patience </a></div>
                    <p>life is all about security and meditation , the most secure place is our home!!at PatnizoHotels, we offer that same experince. </p>
                    <p><a href="#" class="readmore">Read more</a></p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
                  <a href="#" class="thumb"><img src="images/img_t.jpg" alt="Image" class="img-fluid"></a>
                  <div class="post-entry-contents">
                    <h3><a href="#">Adventure is a part of our lives</a></h3>
                    <div class="date">November 5, 2022 &bullet; by <a href="#">Thierry Niyogisubizo</a></div>
                    <p> life is all about having a good time, it is something God intended from the creation of the earth.</p>
                    <p><a href="#" class="readmore">Read more</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    
        <div class="untree_co--site-section py-5 bg-body-darker cta">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h3 class="m-0 p-0">If you have any special requests, please feel free to call us. <a href="tel://+250786802046">+25.078.680.204.6</a></h3>
              </div>
            </div>
          </div>
        </div>


      </div>
      <footer class="untree_co--site-footer">

        <div class="container">
          <div class="row">
            <div class="col-md-4 pr-md-5">
              <h3>About Us</h3>
              <p>We are one of the most successful Hotels in Rwanda , When you meet us you dont just leave as a customer you leave as a fried.
                "PatnizoHotels"</p>
              <p><a href="#" class="readmore">Read more</a></p>
            </div>
            <div class="col-md-8 ml-auto">
              <div class="row">
                <div class="col-md-3">
                  <h3>Navigation</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Amenities</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                <div class="col-md-9 ml-auto">
                  <div class="row mb-3">
                    
                    <div class="col-md-6">
                      <h3>Telephone</h3>
                      <p>
                        <a href="#">0786802046</a> <br>
                        <a href="#">0786802046</a>
                      </p>
                    </div>
                  </div>

                 
                </div>
                
              </div>
            </div>
          </div>
          <div class="row mt-5 pt-5 align-items-center">
           
            <div class="col-md-6 text-md-right">
              <ul class="icons-top icons-dark">
              <li>
                <a href="#"><span class="icon-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-twitter"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-instagram"></span></a>
              </li>
              <li>
                <a href="#"><span class="icon-tripadvisor"></span></a>
              </li>
            </ul>

            </div>
          </div>
        </div>
        
      </footer>
    </div>

    <!-- Search -->
    <div class="search-wrap">
      <a href="#" class="close-search js-search-toggle">
        <span>Close</span>
      </a>
      <div class="container">
        <div class="row justify-content-center align-items-center text-center">
          <div class="col-md-12">
            <form action="#">
              <input type="search" name="s" id="s" placeholder="Type a keyword and hit enter..."  autocomplete="false">
            </form>    
          </div>
        </div>
      </div>
    </div>

    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/vendor/owl.carousel.min.js"></script>
    
    <script src="js/vendor/jarallax.min.js"></script>
    <script src="js/vendor/jarallax-element.min.js"></script>
    <script sr c="js/vendor/ofi.min.js"></script>

    <script src="js/vendor/aos.js"></script>

    <script src="js/vendor/jquery.lettering.js"></script>
    <script src="js/vendor/jquery.sticky.js"></script>

    <script src="js/vendor/TweenMax.min.js"></script>
    <script src="js/vendor/ScrollMagic.min.js"></script>
    <script src="js/vendor/scrollmagic.animation.gsap.min.js"></script>
    <script src="js/vendor/debug.addIndicators.min.js"></script>


    <script src="js/main.js"></script>
  </body>
</html>