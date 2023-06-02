  <!--=====Header start=======-->
  <header id="header" class="header header-2 header-absolute d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-elements">
            <div class="header_menu_area">
              <div class="logo">
                <a href="index.html"><img src="assets/img/logo/site-logo-3.svg" alt=""></a>
              </div>
              <div class="main-menu">
                <div class="menu-wrap">
                  <ul class="menu_list scroll">
                    <li class=""><a href="index">Home</a></li>
                    <li class=""><a href="about">About Us</a></li>
                    
                    <li class="dropdown-parrent"><a href="#">Services</a>
                      <ul class="theme-dropdown">
                        <li><a href="Mobile-app-development-details">Mobile Development</a></li>
                        <li><a href="web-application-details">Web Application</a></li>
                        <li><a href="ux-ui-strategy-details">UI UX Design</a></li>
                        <li><a href="digital-strategy-details">Digital Stategies</a></li>
                      </ul>
                    </li>

                    <li class="dropdown-parrent"><a href="#">Pages</a>
                      <ul class="theme-dropdown">
                      <li><a href="testimonial">Testimonials</a></li>
                        <li><a href="working-strategy">Our Working Strategy</a></li>
                      </ul>
                    </li>


                    <li class=""><a href="contact">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="desktop-info">
              <div class="quick_contact">
                <div class="quick_contact_icon bg-27">
                  <i class="fa-light fa-phone"></i>
                </div>
                <div class="quick_contact_content">
                  <small>Hotline 24/7</small>
                  <a href="tel:<?= $Company["phone"] ?>"><?= $Company["phone"] ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====Header end=======-->