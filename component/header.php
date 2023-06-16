<!--=====Mobile header start=======-->
<div class="mobile-header mobile-header-4 d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="index"><img src="assets/img/logo/new.png" alt="" /></a>
        </div>
        <div class="mobile-nav-icon">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mobile-sidebar">
  <div class="menu-close">
    <i class="fa-solid fa-xmark"></i>
  </div>
  <div class="mobile-nav">
    <ul class="mobile-nav-list">
      <li>
        <a href="index">Home</a>
      </li>

      <li>
        <a href="about">About</a>
      </li>

      <li>
        <a href="Service">Service</a>
        <ul class="sub-menu">
          <li><a href="Mobile-app-development-details">Mobile Development</a></li>
          <li><a href="web-application-details">Web Application</a></li>
          <li><a href="ux-ui-strategy-details">UI UX Design</a></li>
          <li><a href="digital-strategy-details">Digital Stategies</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Pages</a>
        <ul class="sub-menu">
          <li><a href="testimonial">Testimonials</a></li>
          <li><a href="working-strategy">Our Working Strategy</a></li>
        </ul>
      </li>


      <li>
        <a href="Contact">Contact</a>
      </li>
    </ul>

    <div class="mobile-contact">
      <div class="single-footer">
        <h3>Get in touch</h3>

        <div class="footer-contact">
          <div class="single-contact">
            <div class="contact-icon">
              <img src="assets/img/icons/contact-phone4.svg" alt="" />
            </div>
            <a href="mailto:<?= $Company["email"] ?>"><?= $Company["email"] ?></a>
            <a href="https://www.innovatrix.ng"><?= $Company["website"] ?></a>
          </div>
        </div>
        <div class="footer-contact">
          <div class="single-contact">
            <div class="contact-icon">
              <img src="assets/img/icons/contact-email4.svg" alt="" />
            </div>
            <a href="mailto:<?= $Company["email"] ?>"><?= $Company["email"] ?></a>
            <a href="https://www.innovatrix.ng"><?= $Company["website"] ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====Mobile header end=======-->




  
  
  
  <!--=====Header start=======-->
  <header id="header" class="header header-2 header-absolute d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-elements">
            <div class="header_menu_area">
              <div class="logo">
                <a href="index"><img src="assets/img/logo/new.png" alt=""></a>
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
                  <!-- <small>Hotline 24/7</small> -->
                  <a href="tel:<?= $Company["phone"] ?>"><?= $Company["phone"] ?></a>
                  <a href="tel:<?= $Company["phone2"] ?>"><?= $Company["phone2"] ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====Header end=======-->