<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SMT | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="{{asset('public/assets/plugins/socicon/socicon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/bootstrap-social/bootstrap-social.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/animate/animate.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="{{asset('public/assets/plugins/revo-slider/css/settings.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/revo-slider/css/layers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/revo-slider/css/navigation.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/fancybox/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/plugins/slider-for-bootstrap/css/slider.css')}}" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="{{asset('public/assets/plugins/ilightbox/css/ilightbox.css')}}" rel="stylesheet" type="text/css" />
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{asset('public/assets/demos/index/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/demos/index/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/assets/demos/index/css/themes/default.css')}}" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="{{asset('public/assets/demos/index/css/custom.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="{{asset('public/img/favicon.png')}}" />
</head>

<body class="c-layout-header-mobile-fixed c-layout-quick-sidebar-shown c-layout-header-fixed">
  @yield('modal')
  <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
  <!-- BEGIN: HEADER -->
  <header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
      <div class="c-navbar">
          <div class="container">
              <!-- BEGIN: BRAND -->
              <div class="c-navbar-wrapper clearfix">
                  <div class="c-brand c-pull-left">
                      <a href="index.html" class="c-logo">
                          <img src="{{asset('public/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-desktop-logo">
                          <img src="{{asset('public/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-desktop-logo-inverse">
                          <img src="{{asset('public/assets/base/img/layout/logos/logo-3.png')}}" alt="JANGO" class="c-mobile-logo"> </a>
                      <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                          <span class="c-line"></span>
                          <span class="c-line"></span>
                          <span class="c-line"></span>
                      </button>
                      <button class="c-topbar-toggler" type="button">
                          <i class="fa fa-ellipsis-v"></i>
                      </button>
                      <button class="c-search-toggler" type="button">
                          <i class="fa fa-search"></i>
                      </button>
                      <button class="c-cart-toggler" type="button">
                          <i class="icon-handbag"></i>
                          <span class="c-cart-number c-theme-bg">2</span>
                      </button>
                  </div>
                  <!-- END: BRAND -->
                  <!-- BEGIN: QUICK SEARCH -->
                  <form class="c-quick-search" action="#">
                      <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                      <span class="c-theme-link">&times;</span>
                  </form>
                  <!-- END: QUICK SEARCH -->
                  <!-- BEGIN: HOR NAV -->
                  <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                  <!-- BEGIN: MEGA MENU -->
                  <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                  <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                      <ul class="nav navbar-nav c-theme-nav">
                          <li>
                              <a href="{{url('/')}}" class="c-link dropdown-toggle">Home</a>
                          </li>
                          <li class="c-menu-type-classic">
                              <a href="javascript:;" class="c-link dropdown-toggle">Features
                                  <span class="c-arrow c-toggler"></span>
                              </a>
                              <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                  <li class="dropdown-submenu">
                                      <a href="javascript:;">Headers
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <ul class="dropdown-menu c-pull-right">
                                          <li>
                                              <a href="demos/default/home-header-1.html">Home Header v1</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-1-ext.html">Home Header v1 - Extended</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-2.html">Home Header v2</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-2-ext.html">Home Header v2 - Extended</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-3.html">Home Header v3</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-4.html">Home Header v4</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-4-ext.html">Home Header v4 - Extended</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-5.html">Home Header v5</a>
                                          </li>
                                          <li>
                                              <a href="?p=home-header-5-ext">Home Header v5 - Extended</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-6.html">Home Header v6</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-6-ext.html">Home Header v6 - Extended</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-7.html">Home Header v7</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/home-header-8.html">Home Header v8</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/inner-header-1.html">Inner Header v1</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/inner-header-1-ext.html">Inner Header v1 - Extended</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/inner-header-2.html">Inner Header v2</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/inner-header-2-ext.html">Inner Header v2 - Extended</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/inner-header-3.html">Inner Header v3</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/inner-header-4.html">Inner Header v4</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/inner-header-5.html">Inner Header v5</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="dropdown-submenu">
                                      <a href="#">Sidebar Menu
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <ul class="dropdown-menu c-pull-right">
                                          <li>
                                              <a href="demos/default/sidebar-menu-1.html">Sidebar Menu v1</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/sidebar-menu-2.html">Sidebar Menu v2</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/sidebar-menu-static.html">Expanded Static Sidebar Menu</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/sidebar-menu-right.html">Right Sidebar Menu</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/sidebar-menu-fluid.html">Sidebar Menu In Fluid Layout</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="dropdown-submenu">
                                      <a href="javascript:;">Footers
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <ul class="dropdown-menu c-pull-right">
                                          <li>
                                              <a href="?p=footer-1#footer&d=default">Footer 1</a>
                                          </li>
                                          <li>
                                              <a href="?p=footer-2#footer&d=default">Footer 2</a>
                                          </li>
                                          <li>
                                              <a href="?p=footer-3#footer&d=default">Footer 3</a>
                                          </li>
                                          <li>
                                              <a href="?p=footer-4#footer&d=default">Footer 4</a>
                                          </li>
                                          <li>
                                              <a href="?p=footer-5#footer&d=default">Footer 5</a>
                                          </li>
                                          <li>
                                              <a href="?p=footer-6#footer&d=default">Footer 6</a>
                                          </li>
                                          <li>
                                              <a href="?p=footer-7#footer&d=default">Footer 7</a>
                                          </li>
                                          <li>
                                              <a href="?p=footer-8#footer&d=default">Footer 8</a>
                                          </li>
                                          <li>
                                              <a href="?p=footer-9#footer&d=default">Footer 9</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="dropdown-submenu">
                                      <a href="#">Breadcrumbs
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <ul class="dropdown-menu c-pull-right">
                                          <li>
                                              <a href="demos/default/breadcrumbs-default.html">Breadcrumbs - Default</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-subtitle.html">Breadcrumbs - Sub Title</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-1.html">Breadcrumbs - Bg Image V1</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-2.html">Breadcrumbs - Bg Image V2</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-3.html">Breadcrumbs - Bg Image V3</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-4.html">Breadcrumbs - Bg Image V4</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-5.html">Breadcrumbs - Bg Image V5</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-6.html">Breadcrumbs - Bg Image V6</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-7.html">Breadcrumbs - Bg Image V7</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-8.html">Breadcrumbs - Bg Image V8</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-9.html">Breadcrumbs - Bg Image V9</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/breadcrumbs-bgimage-10.html">Breadcrumbs - Bg Image V10</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="dropdown-submenu">
                                      <a href="javascript:;">Cookies Notification Bar
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <ul class="dropdown-menu c-pull-right">
                                          <li>
                                              <a href="demos/default/component-cookies-1.html">Full Width - Top</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/component-cookies-2.html">Full Width - Bottom</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/component-cookies-3.html">Boxed - Dark Square</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/component-cookies-4.html">Boxed - Theme Color Rounded</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/component-cookies-5.html">Boxed - Aligned Top Left</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/component-cookies-6.html">Boxed - Aligned Top Right</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/component-cookies-7.html">Boxed - Aligned Bottom Left</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/component-cookies-8.html">Boxed - Aligned Bottom Right</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li>
                                      <a href="demos/default/component-smooth-scroll.html">Smooth Scroll Links</a>
                                  </li>
                                  <li class="dropdown-submenu">
                                      <a href="#">Mega Menu
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <ul class="dropdown-menu c-pull-right">
                                          <li>
                                              <a href="demos/default/megamenu-light.html">Mega Menu - Light</a>
                                          </li>
                                          <li>
                                              <a href="demos/default/megamenu-dark.html">Mega Menu - Dark</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="dropdown-submenu">
                                      <a href="?p=page-extended-portfolio">Multi Level Menu
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <ul class="dropdown-menu c-pull-right">
                                          <li>
                                              <a href="#">Example Link</a>
                                          </li>
                                          <li>
                                              <a href="#">Example Link</a>
                                          </li>
                                          <li>
                                              <a href="#">Example Link</a>
                                          </li>
                                          <li class="dropdown-submenu">
                                              <a href="#">Example Sub Menu
                                                  <span class="c-arrow c-toggler"></span>
                                              </a>
                                              <ul class="dropdown-menu c-pull-left">
                                                  <li>
                                                      <a href="#">Example Link</a>
                                                  </li>
                                                  <li>
                                                      <a href="#">Example Link</a>
                                                  </li>
                                                  <li>
                                                      <a href="#">Example Link</a>
                                                  </li>
                                                  <li class="dropdown-submenu">
                                                      <a href="#">Example Sub Menu
                                                          <span class="c-arrow c-toggler"></span>
                                                      </a>
                                                      <ul class="dropdown-menu c-pull-left">
                                                          <li>
                                                              <a href="#">Example Link</a>
                                                          </li>
                                                          <li>
                                                              <a href="#">Example Link</a>
                                                          </li>
                                                          <li>
                                                              <a href="#">Example Link</a>
                                                          </li>
                                                          <li>
                                                              <a href="#">Example Link</a>
                                                          </li>
                                                      </ul>
                                                  </li>
                                                  <li>
                                                      <a href="#">Example Link</a>
                                                  </li>
                                              </ul>
                                          </li>
                                          <li>
                                              <a href="#">Example Link</a>
                                          </li>
                                          <li>
                                              <a href="#">Example Link</a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a href="javascript:;" class="c-link dropdown-toggle">Components
                                  <span class="c-arrow c-toggler"></span>
                              </a>
                              <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                              <div class="dropdown-menu c-menu-type-mega c-visible-desktop c-pull-right c-menu-type-fullwidth" style="min-width: auto">
                                  <ul class="nav nav-tabs c-theme-nav">
                                      <li class="active">
                                          <a href="#megamenu_jango_components" data-toggle="tab">Jango Components</a>
                                      </li>
                                      <li>
                                          <a href="#megamenu_base_components" data-toggle="tab">Base Components</a>
                                      </li>
                                  </ul>
                                  <div class="tab-content">
                                      <div class="tab-pane active" id="megamenu_jango_components">
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-tabbed-contents.html">Tabbed Contents</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-parallax-1.html">Parallax Blocks 1</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-parallax-2.html">Parallax Blocks 2</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-parallax-3.html">Parallax Blocks 3</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-features.html">Feature Blocks</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-features-2.html">Feature Blocks 2</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-features-3.html">Feature Blocks 3</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-latest-works.html">Latest Works</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-latest-items.html">Latest Items</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-tiles.html">Tiles</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-services.html">Services</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-blog-elements.html">Blog Elements</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-counters.html">Counters</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-bars.html">Engage Bars</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-isotope.html">Isotope Gallery</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-isotope-grid.html">Isotope Grid</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-pricing-tables-1.html">Pricing Tables 1</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-pricing-tables-2.html">Pricing Tables 2</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-testimonials.html">Testimonials</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-testimonials-2.html">Testimonials 2</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-clients.html">Clients</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-abouts.html">About Blocks</a>
                                                      </li>
                                                      <li>
                                                          <a href="?p=component-dividers">Dividers</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-steps.html">Steps</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-app-showcase.html">App Showcase</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-team.html">Team</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-headings.html">Headings</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-accordions.html">Accordion Contents</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-progress-bars-2.html">Animated Progress Bars</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane" id="megamenu_base_components">
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-lists.html">Lists</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-blockquotes.html">Blockquotes</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-navs.html">Navigations</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-fontawesome-icons.html">Fontawesome Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-simpleline-icons.html">Simple Line Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-glyphicons-icons.html">Glyphicons Icons</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-custom-icons.html">Custom Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-business-custom-icons.html">Custom Business Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-social-icons.html">Social Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-media-embeds.html">Media Embeds</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-labels-badges.html">Labels & Badges</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-colors.html">UI Colors</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-buttons.html">Buttons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-form-controls.html">Form Controls</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-tables.html">Tables</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-modals.html">Modals</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-tabs.html">Tabs</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-paginations.html">Paginations</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-panels.html">Panels</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-progress-bars.html">Progress Bars</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-alerts.html">Alerts</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                              <!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
                              <ul class="dropdown-menu c-menu-type-mega c-visible-mobile">
                                  <li class="dropdown-submenu">
                                      <a href="javascript:;">Jango Components
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <div class="dropdown-menu">
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-tabbed-contents.html">Tabbed Contents</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-parallax-1.html">Parallax Blocks 1</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-parallax-2.html">Parallax Blocks 2</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-parallax-3.html">Parallax Blocks 3</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-features.html">Feature Blocks</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-features-2.html">Feature Blocks 2</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-features-3.html">Feature Blocks 3</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-latest-works.html">Latest Works</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-latest-items.html">Latest Items</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-tiles.html">Tiles</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-services.html">Services</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-blog-elements.html">Blog Elements</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-counters.html">Counters</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-bars.html">Engage Bars</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-isotope.html">Isotope Gallery</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-isotope-grid.html">Isotope Grid</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-pricing-tables-1.html">Pricing Tables 1</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-pricing-tables-2.html">Pricing Tables 2</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-testimonials.html">Testimonials</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-testimonials-2.html">Testimonials 2</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-clients.html">Clients</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-abouts.html">About Blocks</a>
                                                      </li>
                                                      <li>
                                                          <a href="?p=component-dividers">Dividers</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-steps.html">Steps</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-app-showcase.html">App Showcase</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-team.html">Team</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-headings.html">Headings</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-accordions.html">Accordion Contents</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-progress-bars-2.html">Animated Progress Bars</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="dropdown-submenu">
                                      <a href="javascript:;">Base Components
                                          <span class="c-arrow c-toggler"></span>
                                      </a>
                                      <div class="dropdown-menu">
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-lists.html">Lists</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-blockquotes.html">Blockquotes</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-navs.html">Navigations</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-fontawesome-icons.html">Fontawesome Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-simpleline-icons.html">Simple Line Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-glyphicons-icons.html">Glyphicons Icons</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-custom-icons.html">Custom Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-business-custom-icons.html">Custom Business Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-social-icons.html">Social Icons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-media-embeds.html">Media Embeds</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-labels-badges.html">Labels & Badges</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-colors.html">UI Colors</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-buttons.html">Buttons</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-form-controls.html">Form Controls</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-tables.html">Tables</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-modals.html">Modals</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                              <div class="col-md-3">
                                                  <ul class="dropdown-menu c-menu-type-inline">
                                                      <li>
                                                          <a href="demos/default/component-tabs.html">Tabs</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-paginations.html">Paginations</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-panels.html">Panels</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-progress-bars.html">Progress Bars</a>
                                                      </li>
                                                      <li>
                                                          <a href="demos/default/component-alerts.html">Alerts</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                              <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
                          </li>
                          <li class="c-search-toggler-wrapper">
                              <a href="#" class="c-btn-icon c-search-toggler">
                                  <i class="fa fa-search"></i>
                              </a>
                          </li>
                          <li class="c-cart-toggler-wrapper">
                              <a href="#" class="c-btn-icon c-cart-toggler">
                                  <i class="icon-handbag c-cart-icon"></i>
                                  <span class="c-cart-number c-theme-bg">2</span>
                              </a>
                          </li>
                          <li class="c-quick-sidebar-toggler-wrapper">
                            <a href="{{url('/login')}}" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i> Login</a>
                          </li>
                      </ul>
                  </nav>
                  <!-- END: MEGA MENU -->
                  <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                  <!-- END: HOR NAV -->
              </div>
              <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
              <!-- BEGIN: CART MENU -->
              <div class="c-cart-menu" style="z-index: 1;">
                  <div class="c-cart-menu-title">
                      <p class="c-cart-menu-float-l c-font-sbold">2 item(s)</p>
                      <p class="c-cart-menu-float-r c-theme-font c-font-sbold">$79.00</p>
                  </div>
                  <ul class="c-cart-menu-items">
                      <li>
                          <div class="c-cart-menu-close">
                              <a href="#" class="c-theme-link">×</a>
                          </div>
                          <img src="{{asset('public/assets/base/img/content/shop2/24.jpg')}}" />
                          <div class="c-cart-menu-content">
                              <p>1 x
                                  <span class="c-item-price c-theme-font">$30</span>
                              </p>
                              <a href="?p=shop-product-details-2" class="c-item-name c-font-sbold">Winter Coat</a>
                          </div>
                      </li>
                      <li>
                          <div class="c-cart-menu-close">
                              <a href="#" class="c-theme-link">×</a>
                          </div>
                          <img src="{{asset('public/assets/base/img/content/shop2/12.jpg')}}" />
                          <div class="c-cart-menu-content">
                              <p>1 x
                                  <span class="c-item-price c-theme-font">$30</span>
                              </p>
                              <a href="?p=shop-product-details" class="c-item-name c-font-sbold">Sports Wear</a>
                          </div>
                      </li>
                  </ul>
                  <div class="c-cart-menu-footer">
                      <a href="?p=shop-cart" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
                      <a href="?p=shop-checkout" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
                  </div>
              </div>
              <!-- END: CART MENU -->
              <!-- END: LAYOUT/HEADERS/QUICK-CART -->
          </div>
      </div>
  </header>
  <!-- END: HEADER -->
  <!-- END: LAYOUT/HEADERS/HEADER-1 -->
  <!-- BEGIN: PAGE CONTAINER -->
  <div class="c-layout-page">
  <!-- BEGIN: PAGE CONTENT -->
  @yield('content')
  <!-- END: PAGE CONTENT -->
  <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
  </div>
  <!-- END: PAGE CONTAINER -->
  <a name="footer"></a>
  <footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
      <div class="container">
          <div class="c-prefooter c-bg-white">
              <div class="c-head">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="c-left">
                              <div class="socicon">
                                  <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                  <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips" data-original-title="Twitter" data-container="body"></a>
                                  <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips" data-original-title="Youtube" data-container="body"></a>
                                  <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips" data-original-title="Tumblr" data-container="body"></a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="c-right">
                              <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>
                              <div class="c-icons">
                                  <a href="#" class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips" data-original-title="Android" data-container="body"></a>
                                  <a href="#" class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips" data-original-title="Apple" data-container="body"></a>
                                  <a href="#" class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips" data-original-title="Windows" data-container="body"></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="c-line"></div>
              <div class="c-body">
                  <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <ul class="c-links c-theme-ul">
                              <li>
                                  <a href="#">About Jango</a>
                              </li>
                              <li>
                                  <a href="#">Privacy Policy</a>
                              </li>
                              <li>
                                  <a href="#">Terms & Conditions</a>
                              </li>
                              <li>
                                  <a href="#">Delivery</a>
                              </li>
                              <li>
                                  <a href="#">Promotions</a>
                              </li>
                              <li>
                                  <a href="#">News</a>
                              </li>
                          </ul>
                          <ul class="c-links c-theme-ul">
                              <li>
                                  <a href="#">Blogs</a>
                              </li>
                              <li>
                                  <a href="#">Projects</a>
                              </li>
                              <li>
                                  <a href="#">Clients</a>
                              </li>
                              <li>
                                  <a href="#">Services</a>
                              </li>
                              <li>
                                  <a href="#">Features</a>
                              </li>
                              <li>
                                  <a href="#">Stats</a>
                              </li>
                          </ul>
                      </div>
                      <div class="col-md-5 col-sm-12 col-xs-12">
                          <div class="c-content-title-1 c-title-md">
                              <h3 class="c-title c-font-uppercase c-font-bold">Contact Us</h3>
                              <div class="c-line-left hide"></div>
                          </div>
                          <p class="c-address c-font-16"> 25, Lorem Lis Street, Orange
                              <br/> California, US
                              <br/> Phone: 800 123 3456
                              <br/> Fax: 800 123 3456
                              <br/> Email:
                              <a href="mailto:info@jango.com">
                                  <span class="c-theme-color">info@jango.com</span>
                              </a>
                          </p>
                      </div>
                  </div>
              </div>
              <div class="c-line"></div>
              <div class="c-foot">
                  <div class="row">
                      <div class="col-md-8">
                          <div class="c-content-title-1 c-title-md">
                              <h3 class="c-font-uppercase c-font-bold">About
                                  <span class="c-theme-font">JANGO</span>
                              </h3>
                              <div class="c-line-left hide"></div>
                          </div>
                          <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est alter buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est rusticus repressor? Lixa grandis clabulare est. Eposs tolerare.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="c-postfooter c-bg-dark-2">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-sm-12 c-col">
                      <p class="c-copyright c-font-grey">2015 &copy; JANGO
                          <span class="c-font-grey-3">All Rights Reserved.</span>
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
  <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
  <div class="c-layout-go2top">
      <i class="icon-arrow-up"></i>
  </div>
  <!-- END: LAYOUT/FOOTERS/GO2TOP -->
  
  <script src="{{asset('public/assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/jquery.easing.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/reveal-animate/wow.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/demos/index/js/scripts/reveal-animate/reveal-animate.js')}}" type="text/javascript"></script>
  <!-- END: CORE PLUGINS -->
  <!-- BEGIN: LAYOUT PLUGINS -->
  <script src="{{asset('public/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/smooth-scroll/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/typed/typed.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/js-cookie/js.cookie.js')}}" type="text/javascript"></script>
  <!-- END: LAYOUT PLUGINS -->
  <!-- BEGIN: THEME SCRIPTS -->
  <script src="{{asset('public/assets/base/js/components.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/base/js/components-shop.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/base/js/app.js')}}" type="text/javascript"></script>
  <script>
      $(document).ready(function()
      {
          App.init(); // init core    
      });
  </script>
  <!-- END: THEME SCRIPTS -->
  <!-- BEGIN: PAGE SCRIPTS -->
  <script src="{{asset('public/assets/demos/default/js/scripts/revo-slider/slider-4.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/isotope/isotope.pkgd.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/isotope/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/isotope/packery-mode.pkgd.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/ilightbox/js/jquery.requestAnimationFrame.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/ilightbox/js/jquery.mousewheel.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/ilightbox/js/ilightbox.packed.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/demos/default/js/scripts/pages/isotope-gallery.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/plugins/zoom-master/jquery.zoom.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('public/assets/demos/index/js/custom.js')}}" type="text/javascript"></script>
  <!-- END: PAGE SCRIPTS -->
  <!-- END: LAYOUT/BASE/BOTTOM -->
  @yield('script')
</body>

</html>