@extends('layouts.mainweb')

@section('title')
ICF 2022 - Home
@endsection

@section('content')

<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark">
        <div class="container justify-content-between align-items-center">
          <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
            <div class="navbar-brand"><a href="./index.html">
                <img class="logo-dark" src="./assets/img/logo-purple.png" srcset="./assets/img/logo-purple@2x.png 2x" alt="" />
                <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
              </a></div>
            <div class="navbar-other ms-auto">
              <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item d-lg-none">
                  <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
          </div>
          <!-- /.d-flex -->
          <div class="navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
              <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15">
                <a href="./index.html" class="transition-none d-none d-lg-flex"><img class="logo-dark" src="./assets/img/logo-purple.png" srcset="./assets/img/logo-purple@2x.png 2x" alt="" />
                  <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                <h3 class="text-white fs-30 mb-0 d-lg-none">Sandbox</h3>
                <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="w-100 order-1 order-lg-0 d-lg-flex offcanvas-body">
                <ul class="navbar-nav ms-lg-auto">
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Demos</a>
                    <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                      <li class="mega-menu-content mega-menu-scroll">
                        <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                          <li class="col"><a class="dropdown-item" href="./demo1.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi1.jpg" srcset="./assets/img/demos/mi1@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo I</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo2.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi2.jpg" srcset="./assets/img/demos/mi2@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo II</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo3.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi3.jpg" srcset="./assets/img/demos/mi3@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo III</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo4.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi4.jpg" srcset="./assets/img/demos/mi4@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo IV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo5.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi5.jpg" srcset="./assets/img/demos/mi5@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo V</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo6.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi6.jpg" srcset="./assets/img/demos/mi6@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo VI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo7.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi7.jpg" srcset="./assets/img/demos/mi7@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo VII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo8.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi8.jpg" srcset="./assets/img/demos/mi8@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo VIII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo9.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi9.jpg" srcset="./assets/img/demos/mi9@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo IX</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo10.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi10.jpg" srcset="./assets/img/demos/mi10@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo X</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo11.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi11.jpg" srcset="./assets/img/demos/mi11@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo12.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi12.jpg" srcset="./assets/img/demos/mi12@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo13.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi13.jpg" srcset="./assets/img/demos/mi13@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XIII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo14.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi14.jpg" srcset="./assets/img/demos/mi14@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XIV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo15.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi15.jpg" srcset="./assets/img/demos/mi15@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo16.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi16.jpg" srcset="./assets/img/demos/mi16@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XVI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo17.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi17.jpg" srcset="./assets/img/demos/mi17@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XVII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo18.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi18.jpg" srcset="./assets/img/demos/mi18@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XVIII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo19.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi19.jpg" srcset="./assets/img/demos/mi19@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XIX</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo20.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi20.jpg" srcset="./assets/img/demos/mi20@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XX</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo21.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi21.jpg" srcset="./assets/img/demos/mi21@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo22.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi22.jpg" srcset="./assets/img/demos/mi22@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo23.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi23.jpg" srcset="./assets/img/demos/mi23@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXIII</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo24.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi24.jpg" srcset="./assets/img/demos/mi24@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXIV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo25.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi25.jpg" srcset="./assets/img/demos/mi25@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXV</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo26.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi26.jpg" srcset="./assets/img/demos/mi26@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXVI</span>
                            </a></li>
                          <li class="col"><a class="dropdown-item" href="./demo27.html">
                              <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi27.jpg" srcset="./assets/img/demos/mi27@2x.jpg 2x" alt=""></figure>
                              <span class="d-lg-none">Demo XXVII</span>
                            </a></li>
                        </ul>
                        <!--/.row -->
                        <span class="d-none d-lg-flex"><i class="uil uil-direction"></i><strong>Scroll to view more</strong></span>
                      </li>
                      <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./services.html">Services I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./services2.html">Services II</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./about.html">About I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./about2.html">About II</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./shop.html">Shop I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./shop2.html">Shop II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./shop-product.html">Product Page</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./shop-cart.html">Shopping Cart</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./shop-checkout.html">Checkout</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./contact.html">Contact I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./contact2.html">Contact II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./contact3.html">Contact III</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Career</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./career.html">Job Listing I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./career2.html">Job Listing II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./career-job.html">Job Description</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./404.html">404 Not Found</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./page-loader.html">Page Loader</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./signin.html">Sign In I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./signin2.html">Sign In II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./signup.html">Sign Up I</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./signup2.html">Sign Up II</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./terms.html">Terms</a></li>
                        </ul>
                      </li>
                      <li class="nav-item"><a class="dropdown-item" href="./pricing.html">Pricing</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One Page</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Projects</a>
                    <div class="dropdown-menu dropdown-lg">
                      <div class="dropdown-lg-content">
                        <div>
                          <h6 class="dropdown-header">Project Pages</h6>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="./projects.html">Projects I</a></li>
                            <li><a class="dropdown-item" href="./projects2.html">Projects II</a></li>
                            <li><a class="dropdown-item" href="./projects3.html">Projects III</a></li>
                            <li><a class="dropdown-item" href="./projects4.html">Projects IV</a></li>
                          </ul>
                        </div>
                        <!-- /.column -->
                        <div>
                          <h6 class="dropdown-header">Single Projects</h6>
                          <ul class="list-unstyled">
                            <li><a class="dropdown-item" href="./single-project.html">Single Project I</a></li>
                            <li><a class="dropdown-item" href="./single-project2.html">Single Project II</a></li>
                            <li><a class="dropdown-item" href="./single-project3.html">Single Project III</a></li>
                            <li><a class="dropdown-item" href="./single-project4.html">Single Project IV</a></li>
                          </ul>
                        </div>
                        <!-- /.column -->
                      </div>
                      <!-- /auto-column -->
                    </div>
                  </li>
                </ul>
                <!-- /.navbar-nav -->
              </div>
              <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                <ul class="navbar-nav me-lg-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="./blog.html">Blog without Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Blog with Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Blog with Left Sidebar</a></li>
                      <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Posts</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post.html">Post without Sidebar</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Post with Sidebar</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Post with Left Sidebar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blocks</a>
                    <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                      <li class="mega-menu-content">
                        <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/about.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block1.svg" alt=""></div>
                              <span>About</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/blog.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block2.svg" alt=""></div>
                              <span>Blog</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/call-to-action.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block3.svg" alt=""></div>
                              <span>Call to Action</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/clients.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block4.svg" alt=""></div>
                              <span>Clients</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/contact.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block5.svg" alt=""></div>
                              <span>Contact</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/facts.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block6.svg" alt=""></div>
                              <span>Facts</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/faq.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block7.svg" alt=""></div>
                              <span>FAQ</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/features.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block8.svg" alt=""></div>
                              <span>Features</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/footer.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block9.svg" alt=""></div>
                              <span>Footer</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/hero.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block10.svg" alt=""></div>
                              <span>Hero</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/misc.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block17.svg" alt=""></div>
                              <span>Misc</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/navbar.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block11.svg" alt=""></div>
                              <span>Navbar</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/portfolio.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block12.svg" alt=""></div>
                              <span>Portfolio</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/pricing.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block13.svg" alt=""></div>
                              <span>Pricing</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/process.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block14.svg" alt=""></div>
                              <span>Process</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/team.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block15.svg" alt=""></div>
                              <span>Team</span>
                            </a>
                          </li>
                          <li class="col"><a class="dropdown-item" href="./docs/blocks/testimonials.html">
                              <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block16.svg" alt=""></div>
                              <span>Testimonials</span>
                            </a>
                          </li>
                        </ul>
                        <!--/.row -->
                      </li>
                      <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                  </li>
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Documentation</a>
                    <ul class="dropdown-menu mega-menu">
                      <li class="mega-menu-content">
                        <div class="row gx-0 gx-lg-3">
                          <div class="col-lg-4">
                            <h6 class="dropdown-header">Usage</h6>
                            <ul class="list-unstyled cc-2 pb-lg-1">
                              <li><a class="dropdown-item" href="./docs/index.html">Get Started</a></li>
                              <li><a class="dropdown-item" href="./docs/forms.html">Forms</a></li>
                              <li><a class="dropdown-item" href="./docs/faq.html">FAQ</a></li>
                              <li><a class="dropdown-item" href="./docs/changelog.html">Changelog</a></li>
                              <li><a class="dropdown-item" href="./docs/credits.html">Credits</a></li>
                            </ul>
                            <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                            <ul class="list-unstyled cc-2">
                              <li><a class="dropdown-item" href="./docs/styleguide/colors.html">Colors</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/fonts.html">Fonts</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/icons-svg.html">SVG Icons</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/icons-font.html">Font Icons</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/illustrations.html">Illustrations</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/backgrounds.html">Backgrounds</a></li>
                              <li><a class="dropdown-item" href="./docs/styleguide/misc.html">Misc</a></li>
                            </ul>
                          </div>
                          <!--/column -->
                          <div class="col-lg-8">
                            <h6 class="dropdown-header">Elements</h6>
                            <ul class="list-unstyled cc-3">
                              <li><a class="dropdown-item" href="./docs/elements/accordion.html">Accordion</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/alerts.html">Alerts</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/animations.html">Animations</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/avatars.html">Avatars</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/background.html">Background</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/badges.html">Badges</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/buttons.html">Buttons</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/card.html">Card</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/carousel.html">Carousel</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/dividers.html">Dividers</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/form-elements.html">Form Elements</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/image-hover.html">Image Hover</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/image-mask.html">Image Mask</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/lightbox.html">Lightbox</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/player.html">Media Player</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/modal.html">Modal</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/pagination.html">Pagination</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/progressbar.html">Progressbar</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/shadows.html">Shadows</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/shapes.html">Shapes</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/tables.html">Tables</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/tabs.html">Tabs</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/text-animations.html">Text Animations</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/text-highlight.html">Text Highlight</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/tiles.html">Tiles</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/tooltips-popovers.html">Tooltips & Popovers</a></li>
                              <li><a class="dropdown-item" href="./docs/elements/typography.html">Typography</a></li>
                            </ul>
                          </div>
                          <!--/column -->
                        </div>
                        <!--/.row -->
                      </li>
                      <!--/.mega-menu-content-->
                    </ul>
                    <!--/.dropdown-menu -->
                  </li>
                </ul>
                <!-- /.navbar-nav -->
              </div>
              <div class="offcanvas-body d-lg-none order-4 mt-auto">
                <div class="offcanvas-footer">
                  <div>
                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                    <br /> 00 (123) 456 78 90 <br />
                    <nav class="nav social social-white mt-4">
                      <a href="#"><i class="uil uil-twitter"></i></a>
                      <a href="#"><i class="uil uil-facebook-f"></i></a>
                      <a href="#"><i class="uil uil-dribbble"></i></a>
                      <a href="#"><i class="uil uil-instagram"></i></a>
                      <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                  </div>
                </div>
              </div>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-white" data-image-src="./assets/img/photos/bg2.jpg">
      <div class="container pt-17 pb-19 pt-md-19 pb-md-20 text-center">
        <div class="row mb-11">
          <div class="col-md-9 col-lg-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title" data-interval="-200">
            <h2 class="h6 text-uppercase ls-xl text-white mb-5">Hello! This is Sandbox</h2>
            <h3 class="display-1 text-white mb-7">We bring rapid solutions for your business</h3>
            <a href="./assets/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-12 mt-n20">
            <figure class="rounded"><img src="./assets/img/photos/about5.jpg" srcset="./assets/img/photos/about5@2x.jpg 2x" alt="" /></figure>
            <div class="row" data-cue="slideInUp">
              <div class="col-xl-10 mx-auto">
                <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top" data-image-src="./assets/img/photos/bg2.jpg">
                  <div class="card-body p-9 p-xl-10">
                    <div class="row align-items-center counter-wrapper gy-4 text-center">
                      <div class="col-6 col-lg-3">
                        <h3 class="counter counter-lg text-white">7518</h3>
                        <p>Completed Projects</p>
                      </div>
                      <!--/column -->
                      <div class="col-6 col-lg-3">
                        <h3 class="counter counter-lg text-white">3472</h3>
                        <p>Satisfied Customers</p>
                      </div>
                      <!--/column -->
                      <div class="col-6 col-lg-3">
                        <h3 class="counter counter-lg text-white">2184</h3>
                        <p>Expert Employees</p>
                      </div>
                      <!--/column -->
                      <div class="col-6 col-lg-3">
                        <h3 class="counter counter-lg text-white">4523</h3>
                        <p>Awards Won</p>
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gy-8 mt-5 mt-md-12 mt-lg-0 mb-15 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="row gx-md-5 gy-5" data-cues="fadeIn" data-group="images">
              <div class="col-md-4 offset-md-2 align-self-end">
                <figure class="rounded"><img src="./assets/img/photos/g1.jpg" srcset="./assets/img/photos/g1@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 align-self-end">
                <figure class="rounded"><img src="./assets/img/photos/g2.jpg" srcset="./assets/img/photos/g2@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6 offset-md-1">
                <figure class="rounded"><img src="./assets/img/photos/g3.jpg" srcset="./assets/img/photos/g3@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-4 align-self-start">
                <figure class="rounded"><img src="./assets/img/photos/g4.jpg" srcset="./assets/img/photos/g4@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <h2 class="display-4 mb-3">What We Do?</h2>
            <p class="lead fs-lg mb-8 pe-xxl-2">The full service we are offering is <span class="underline">specifically</span> designed to meet your business needs and projects.</p>
            <div class="row gx-xl-10 gy-6" data-cues="slideInUp" data-group="services">
              <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i class="uil uil-phone-volume"></i> </div>
                  </div>
                  <div>
                    <h4 class="mb-1">24/7 Support</h4>
                    <p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p>
                  </div>
                </div>
              </div>
              <!--/column -->
              <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i class="uil uil-shield-exclamation"></i> </div>
                  </div>
                  <div>
                    <h4 class="mb-1">Secure Payments</h4>
                    <p class="mb-0">Vivamus sagittis lacus augue laoreet vel.</p>
                  </div>
                </div>
              </div>
              <!--/column -->
              <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i class="uil uil-laptop-cloud"></i> </div>
                  </div>
                  <div>
                    <h4 class="mb-1">Daily Updates</h4>
                    <p class="mb-0">Cras mattis consectetur purus sit amet.</p>
                  </div>
                </div>
              </div>
              <!--/column -->
              <div class="col-md-6 col-lg-12 col-xl-6">
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i class="uil uil-chart-line"></i> </div>
                  </div>
                  <div>
                    <h4 class="mb-1">Market Research</h4>
                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.</p>
                  </div>
                </div>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <h2 class="display-4 mb-3">How We Do It?</h2>
        <p class="lead fs-lg mb-8">We make your spending <span class="underline">stress-free</span> for you to have the perfect control.</p>
        <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line" data-cues="slideInUp" data-group="process">
          <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">01</span></span>
            <h4 class="mb-1">Concept</h4>
            <p>Nulla vitae elit libero elit non porta gravida eget metus cras. Aenean eu leo quam. Pellentesque ornare.</p>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4"><span class="number">02</span></span>
            <h4 class="mb-1">Prepare</h4>
            <p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">03</span></span>
            <h4 class="mb-1">Retouch</h4>
            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero.</p>
          </div>
          <!--/column -->
          <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">04</span></span>
            <h4 class="mb-1">Finalize</h4>
            <p>Integer posuere erat, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-white" data-image-src="./assets/img/photos/bg2.jpg">
      <div class="container py-14 py-md-17">
        <h2 class="display-4 mb-5 text-white text-center">Happy Customers</h2>
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto" data-cue="fadeIn">
            <div class="swiper-container dots-light dots-closer text-center mb-6" data-margin="30" data-dots="true">
              <div class="swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <blockquote class="border-0 fs-lg mb-0">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus.”</p>
                      <div class="blockquote-details justify-content-center">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te1.jpg" srcset="./assets/img/avatars/te1@2x.jpg 2x" alt="" />
                        <div class="info">
                          <h6 class="mb-1 text-white">Coriss Ambady</h6>
                          <p class="mb-0">Financial Analyst</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                  <div class="swiper-slide">
                    <blockquote class="border-0 fs-lg mb-0">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus.”</p>
                      <div class="blockquote-details justify-content-center">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te2.jpg" srcset="./assets/img/avatars/te2@2x.jpg 2x" alt="" />
                        <div class="info">
                          <h6 class="mb-1 text-white">Cory Zamora</h6>
                          <p class="mb-0">Marketing Specialist</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                  <div class="swiper-slide">
                    <blockquote class="border-0 fs-lg mb-0">
                      <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus.”</p>
                      <div class="blockquote-details justify-content-center">
                        <img class="rounded-circle w-12" src="./assets/img/avatars/te3.jpg" srcset="./assets/img/avatars/te3@2x.jpg 2x" alt="" />
                        <div class="info">
                          <h6 class="mb-1 text-white">Nikolas Brooten</h6>
                          <p class="mb-0">Sales Manager</p>
                        </div>
                      </div>
                    </blockquote>
                  </div>
                  <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
              </div>
              <!--/.swiper -->
            </div>
            <!-- /.swiper-container -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row align-items-center mb-7">
          <div class="col-md-8 col-lg-8 col-xl-7 col-xxl-6 pe-lg-17">
            <h2 class="display-4 mb-3">Recent Projects</h2>
            <p class="lead fs-lg">We love to turn ideas into <span class="underline">beautiful things</span>.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="projects-tiles">
          <div class="project grid grid-view">
            <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope" data-cue="slideInUp">
              <div class="item col-md-5">
                <figure class="lift rounded mb-6"><a href="./single-project3.html"> <img src="./assets/img/photos/rp1.jpg" srcset="./assets/img/photos/rp1@2x.jpg 2x" alt="" /></a></figure>
                <div class="post-category mb-3 text-purple">Stationary</div>
                <h3 class="post-title">Ipsum Ultricies Cursus</h3>
              </div>
              <!-- /.item -->
              <div class="item col-md-7 mt-md-17">
                <figure class="lift rounded mb-6"><a href="./single-project2.html"> <img src="./assets/img/photos/rp2.jpg" srcset="./assets/img/photos/rp2@2x.jpg 2x" alt="" /></a></figure>
                <div class="post-category mb-3 text-orange">Invitation</div>
                <h3 class="post-title">Mollis Ipsum Mattis</h3>
              </div>
              <!-- /.item -->
              <div class="item col-md-5">
                <figure class="lift rounded mb-6"><a href="./single-project.html"> <img src="./assets/img/photos/rp3.jpg" srcset="./assets/img/photos/rp3@2x.jpg 2x" alt="" /></a></figure>
                <div class="post-category mb-3 text-red">Notebook</div>
                <h3 class="post-title">Magna Tristique Inceptos</h3>
              </div>
              <!-- /.item -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.project -->
        </div>
        <!-- /.projects-tiles -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-10">
          <div class="col-lg-4 mt-lg-2">
            <h3 class="display-4 mb-3 pe-xxl-5">Trusted by over 300+ clients</h3>
            <p class="lead fs-lg mb-0 pe-xxl-5">We <span class="underline">bring solutions</span> to make life easier for our customers.</p>
          </div>
          <!-- /column -->
          <div class="col-lg-8">
            <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12" data-cues="fadeIn" data-group="clients">
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z1.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z2.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z3.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z4.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z5.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z6.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z7.png" alt="" /></figure>
              </div>
              <!--/column -->
              <div class="col">
                <figure class="px-3 px-md-0 px-xxl-2" data-cue="fadeIn"><img src="./assets/img/brands/z8.png" alt="" /></figure>
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
      <div class="container py-14 py-md-16">
        <div class="row gy-6 gy-lg-0 mb-10 mb-md-18">
          <div class="col-lg-4">
            <h2 class="display-4 mt-lg-18 mb-3">Our Pricing</h2>
            <p class="lead fs-lg">We offer <span class="underline">great prices</span>, premium and quality products for your business.</p>
            <p>Enjoy a <a href="#" class="hover">free 30-day trial</a> and experience the full service. No credit card required!</p>
            <a href="#" class="btn btn-primary rounded-pill mt-2">See All Prices</a>
          </div>
          <!--/column -->
          <div class="col-lg-7 offset-lg-1 pricing-wrapper">
            <div class="pricing-switcher-wrapper switcher justify-content-start justify-content-lg-end">
              <p class="mb-0 pe-3">Monthly</p>
              <div class="pricing-switchers">
                <div class="pricing-switcher pricing-switcher-active"></div>
                <div class="pricing-switcher"></div>
                <div class="switcher-button bg-primary"></div>
              </div>
              <p class="mb-0 ps-3">Yearly <span class="text-red">(Save 30%)</span></p>
            </div>
            <div class="row gy-6 mt-5">
              <div class="col-md-6">
                <div class="pricing card">
                  <div class="card-body pb-12">
                    <div class="prices text-dark">
                      <div class="price price-show justify-content-start"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">mo</span></div>
                      <div class="price price-hide price-hidden justify-content-start"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                    </div>
                    <!--/.prices -->
                    <h4 class="card-title mt-2">Premium Plan</h4>
                    <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                      <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                      <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                      <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                      <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                      <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                    </ul>
                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/column -->
              <div class="col-md-6 popular">
                <div class="pricing card">
                  <div class="card-body pb-12">
                    <div class="prices text-dark">
                      <div class="price price-show justify-content-start"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                      <div class="price price-hide price-hidden justify-content-start"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                    </div>
                    <!--/.prices -->
                    <h4 class="card-title mt-2">Corporate Plan</h4>
                    <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                      <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                      <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                      <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                      <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                      <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                    </ul>
                    <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.pricing -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
        <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
          <div class="col-lg-7 position-relative">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-6">
                <figure class="rounded mt-md-10 position-relative" data-cue="fadeIn" data-delay="300"><img src="./assets/img/photos/g5.jpg" srcset="./assets/img/photos/g5@2x.jpg 2x" alt=""></figure>
              </div>
              <!--/column -->
              <div class="col-md-6">
                <div class="row gx-md-5 gy-5">
                  <div class="col-md-12 order-md-2">
                    <figure class="rounded" data-cue="fadeIn" data-delay="1100"><img src="./assets/img/photos/g6.jpg" srcset="./assets/img/photos/g6@2x.jpg 2x" alt=""></figure>
                  </div>
                  <!--/column -->
                  <div class="col-md-10">
                    <div class="card bg-pale-primary text-center" data-cue="fadeIn" data-delay="800">
                      <div class="card-body py-11 counter-wrapper">
                        <h3 class="counter text-nowrap">5000+</h3>
                        <p class="mb-0">Satisfied Customers</p>
                      </div>
                      <!--/.card-body -->
                    </div>
                    <!--/.card -->
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
          </div>
          <!--/column -->
          <div class="col-lg-5">
            <h2 class="display-4 mb-3">Let’s Talk</h2>
            <p class="lead fs-lg">Let’s make something great together. We are <span class="underline">trusted by</span> over 5000+ clients. Join them by using our services and grow your business.</p>
            <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->

@endsection
