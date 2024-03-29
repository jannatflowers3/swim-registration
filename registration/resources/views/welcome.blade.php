<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Triathlon Dreamers </title>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/templatemo-training-studio.css') }}">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Triathlon  <em> Dreamers</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>

                            <li class="scroll-to-section"><a href="#call-to-action">Featurs</a></li>
                            {{-- <li class="scroll-to-section"><a href="#contact-us">Contact</a></li> --}}
                            <li class="main-button"><a href="{{url('/registration')}}" class="text-white">Registration</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        {{-- <video autoplay muted loop id="bg-video">
            <source src="{{ asset('frontend/assets/images/gym-video.mp4') }}" type="video/mp4" />
        </video> --}}
        <div class="div" id="bg-video">
            <img src="{{ asset('frontend/assets/images/event1.jpg') }}" alt="">
        </div>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>work harder, get stronger</h6>
                <h2>Brace Yourself with our <em>Triathlon Dreamers</em></h2>
                <div class="main-button scroll-to-section">
                    <a href="{{url('/registration')}}" class="text-white">Registration</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  col-md-8">
                    <div class="section-heading">
                        <h4>About Us</h4>
                        <img src="{{ asset('frontend/assets/images/line-dec.png') }}" alt="waves">

                        <h6 class="p-4">Triathlon Dremers is a platform for all aspiring triathlete in Bangladesh.</h6>
                        <p> This time we will see free hand Swimming in an adventures way at one of the largest river in Bangladesh.
                Meghna 5K welcomes all the swimmers around Bangladesh for a amazing experience of swimming in meghna river.</p>

                    </div>
                </div>
                <div class="col-lg-6 mb-4">

                    <img src="{{ asset('frontend/assets/images/sw1.JPG') }}" alt="Triathlon Dremers" class="img-fluid">
                  </div>
                  <div class="col-lg-6 mb-4">

                    <img src="{{ asset('frontend/assets/images/sw2.JPG') }}" alt="Triathlon Dremers" class="img-fluid">
                  </div>
                  {{-- <div class="col-lg-">

                    <img src="{{ asset('frontend/assets/images/sw3.JPG') }}" alt="Triathlon Dremers" class="img-fluid">
                  </div> --}}
                <div class="col-lg-6">

                  <img src="{{ asset('frontend/assets/images/about1.jpg') }}" alt="Triathlon Dremers" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/images/about12.jpg') }}" alt="Triathlon Dremers" class="img-fluid">
                </div>
                <div class="col-lg-6 mt-4">

                    <img src="{{ asset('frontend/assets/images/about3.jpg') }}" alt="Triathlon Dremers" class="img-fluid">
                  </div>
                  <div class="col-lg-6 mt-4">
                      <img src="{{ asset('frontend/assets/images/about14.jpg') }}" alt="Triathlon Dremers" class="img-fluid">
                  </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="bgoverlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Your SKY  <em>Your LIMIT</em>, Now <em> chase the DREAM</em>!</h2>
                        <p>"Never, ever, let anyone tell you what you can and can't do. Prove the cynics wrong. Pity them for they have no imagination. The sky's the limit. </p>
                        <div class="main-button scroll-to-section">
                            <a href="https://www.facebook.com/imjahidbd" target="_blank">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->



    {{-- <section class="section mt-5 pt-5" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Fan Edition <em>T-Shirt</em></h2>
                        <img src="{{ asset('frontend/assets/images/line-dec.png') }}" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="day-time">ম্যাগি স্লিভ টি-শার্ট:</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">10:00AM - 11:30AM</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">2:00PM - 3:30PM</td>
                                    <td>William G. Stewart</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Muscle Training</td>
                                    <td class="friday ts-item" data-tsmeta="friday">10:00AM - 11:30AM</td>
                                    <td class="thursday friday ts-item" data-tsmeta="thursday" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Paul D. Newman</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Body Building</td>
                                    <td class="tuesday ts-item" data-tsmeta="tuesday">10:00AM - 11:30AM</td>
                                    <td class="monday ts-item show" data-tsmeta="monday">2:00PM - 3:30PM</td>
                                    <td>Boyd C. Harris</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Yoga Training Class</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">10:00AM - 11:30AM</td>
                                    <td class="friday ts-item" data-tsmeta="friday">2:00PM - 3:30PM</td>
                                    <td>Hector T. Daigle</td>
                                </tr>
                                <tr>
                                    <td class="day-time">Advanced Training</td>
                                    <td class="thursday ts-item" data-tsmeta="thursday">10:00AM - 11:30AM</td>
                                    <td class="wednesday ts-item" data-tsmeta="wednesday">2:00PM - 3:30PM</td>
                                    <td>Bret D. Bowers</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <!-- ***** Contact Us Area Starts ***** -->
    {{-- <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2024

                    - Designed by
                <a rel="nofollow" href="https://expresssolutionltd.com/" target="_blank" class="tm-text-link" target="_blank">Express Solution LTD</a>

                </p>

                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('frontend/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/accordions.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

  </body>
</html>
