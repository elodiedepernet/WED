{{--
  ressources/views/pages/contact.blade.php
  Desciption : Page de Contact
--}}

@extends ('template.app')
@section('contenu')
  <!--================Blog Area =================-->
  <section class="blog_area section-padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">

                                <div class="d-none d-sm-block mb-5 pb-4">
                                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                                    <script>
                                        function initMap() {
                                            var uluru = {
                                                lat: -25.363,
                                                lng: 131.044
                                            };
                                            var grayStyles = [{
                                                    featureType: "all",
                                                    stylers: [{
                                                            saturation: -90
                                                        },
                                                        {
                                                            lightness: 50
                                                        }
                                                    ]
                                                },
                                                {
                                                    elementType: 'labels.text.fill',
                                                    stylers: [{
                                                        color: '#ccdee9'
                                                    }]
                                                }
                                            ];
                                            var map = new google.maps.Map(document.getElementById('map'), {
                                                center: {
                                                    lat: -31.197,
                                                    lng: 150.744
                                                },
                                                zoom: 9,
                                                styles: grayStyles,
                                                scrollwheel: false
                                            });
                                        }
                                    </script>
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzmlGVrmJwZ0ZX1NbQ50D8KBg8TZgpNn4&amp;callback=initMap">
                                    </script>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="contact-title">Get in Touch</h2>
                                    </div>
                                    <div class="col-12">
                                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <form action="#">
                              <div class="form-group">
                                  <div class="input-group mb-3">
                                      <input type="text" class="form-control" placeholder='Search Keyword'
                                          onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = 'Search Keyword'">
                                      <div class="input-group-append">
                                          <button class="btns" type="button"><i class="ti-search"></i></button>
                                      </div>
                                  </div>
                              </div>
                              <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                  type="submit">Search</button>
                          </form>
                      </aside>

                      <aside class="single_sidebar_widget post_category_widget">
                          <h4 class="widget_title">Category</h4>
                          <ul class="list cat-list">
                              <li>
                                  <a href="#" class="d-flex">
                                      <p>Restaurant food</p>
                                      <p>(37)</p>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="d-flex">
                                      <p>Travel news</p>
                                      <p>(10)</p>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="d-flex">
                                      <p>Modern technology</p>
                                      <p>(03)</p>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="d-flex">
                                      <p>Product</p>
                                      <p>(11)</p>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="d-flex">
                                      <p>Inspiration</p>
                                      <p>21</p>
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="d-flex">
                                      <p>Health Care (21)</p>
                                      <p>09</p>
                                  </a>
                              </li>
                          </ul>
                      </aside>

                      <aside class="single_sidebar_widget tag_cloud_widget">
                          <h4 class="widget_title">Tag Clouds</h4>
                          <ul class="list">
                              <li>
                                  <a href="#">project</a>
                              </li>
                              <li>
                                  <a href="#">love</a>
                              </li>
                              <li>
                                  <a href="#">technology</a>
                              </li>
                              <li>
                                  <a href="#">travel</a>
                              </li>
                              <li>
                                  <a href="#">restaurant</a>
                              </li>
                              <li>
                                  <a href="#">life style</a>
                              </li>
                              <li>
                                  <a href="#">design</a>
                              </li>
                              <li>
                                  <a href="#">illustration</a>
                              </li>
                          </ul>
                      </aside>

                      <aside class="single_sidebar_widget newsletter_widget">
                          <h4 class="widget_title">Newsletter</h4>

                          <form action="#">
                              <div class="form-group">
                                  <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                      onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                              </div>
                              <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                  type="submit">Subscribe</button>
                          </form>
                      </aside>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================Blog Area =================-->
@stop
