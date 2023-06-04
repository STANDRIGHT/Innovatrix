<!--=====Inner hero Start=======-->
<div class="inner-1 bg-13" id="home">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="inner-title text-center">
          <!-- <p>Contact</p> -->
          <h2>Get in Touch</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="space80"></div>
</div>
<!--=====Inner hero end=======-->

<!--=====Contact Boxes Start=======-->
<div class="contact-boxes">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="single-contact-box">
          <div class="contact-box-icon">
            <img src="assets/img/icons/contact-1.svg" alt="" />
          </div>
          <div class="contact-box-content">
            <p class="font-f-3">CALL US</p>
            <a href="tel:<?= $Company["phone"] ?>">Nigeria:<br><?= $Company["phone"] ?></a>


          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="single-contact-box">
          <div class="contact-box-icon">
            <img src="assets/img/icons/contact-2.svg" alt="" />
          </div>
          <div class="contact-box-content">
            <p class="font-f-3">EMAIL US</p>
            <a href="mailto:<?= $Company["email"] ?>"><?= $Company["email"] ?></a>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="single-contact-box">
          <div class="contact-box-icon">
            <img src="assets/img/icons/contact-3.svg" alt="" />
          </div>
          <div class="contact-box-content">
            <p class="font-f-3">HEADQUARTERS</p>
            <a href=""><?= $Company["address"] ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====Contact Boxes End=======-->

<!--=====Contact Form Start=======-->
<div class="main-contact-form section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="heading2 mr50">
          <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg" alt="" />We Are Here to provide solutions</small>
          <h2>Let’s Work Together</h2>
          <p>We assist companies all around the world in utilizing full-cycle software development services to differentiate themselves from the competition.</p>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="main-form">
          <form action="pcontact.php" method="post">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" name="fname" placeholder="First Name" />
              </div>
              <div class="col-lg-6">
                <input type="text" name="lname" placeholder="Last Name" />
              </div>
              <div class="col-12" id="#top">
                <input type="email" name="email" placeholder="Email Address" />
              </div>
              <div class="col-lg-6">
                <input type="text" name="service" placeholder="Service Interested In" />
              </div>
              <div class="col-lg-6">
                <input type="text" name="subject" placeholder="Subject" />
              </div>
              <div class="col-12">
                <textarea name="message" id="" cols="30" rows="5" placeholder="Tell Us About Your Projects"></textarea>
              </div>
              <div class="col-12">
                <a href="#top" name="submit" id="" class="theme-btn-11">Submit</a>
                <!-- <button type="submit" name="submit" class="full-btn theme-btn-11">Submit</button> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====Contact Form End=======-->




<!--=====Google mapd=======-->
<div class="container">
  <div class="col-12">
    <div class="row align-items-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.696407660378!2d7.465393973923238!3d9.000057689443542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e877db1e8279b%3A0x1061a1ce3b4f2d1!2sJamasoft%20Concept%20Ltd!5e0!3m2!1sen!2sng!4v1685647543453!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
<!--=====Google map end=======-->




<!--=====Faq start=======-->
<div class="faq2 section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="heading2 text-center">
          <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg" alt="" />FAQ</small>
          <h2>Frequently Asked Questions</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="single-faq2">
          <h3>What should entrepreneurs never do?</h3>
          <p>
            I'm a serial entrepreneur and have started/ran/sold
            approximately 20 businesses over the past 45 years.Some of my
            businesses made millions, some of them broke even. But - I never
            lost a dime on a single one.
          </p>
        </div>

        <div class="single-faq2">
          <h3>Are you too poor to start a business?</h3>
          <p>
            I'm a serial entrepreneur and have started/ran/sold
            approximately 20 businesses over the past 45 years.Some of my
            businesses made millions, some of them broke even. But - I never
            lost a dime on a single one.
          </p>
        </div>

        <div class="single-faq2">
          <h3>Do developers really code from scratch in a hackathon?</h3>
          <p>
            I'm a serial entrepreneur and have started/ran/sold
            approximately 20 businesses over the past 45 years.Some of my
            businesses made millions, some of them broke even. But - I never
            lost a dime on a single one.
          </p>
        </div>

        <div class="single-faq2">
          <h3>What pieces do museums not want the public to see?</h3>
          <p>
            I'm a serial entrepreneur and have started/ran/sold
            approximately 20 businesses over the past 45 years.Some of my
            businesses made millions, some of them broke even. But - I never
            lost a dime on a single one.
          </p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="single-faq2">
          <h3>What should entrepreneurs never do?</h3>
          <p>
            I'm a serial entrepreneur and have started/ran/sold
            approximately 20 businesses over the past 45 years.Some of my
            businesses made millions, some of them broke even. But - I never
            lost a dime on a single one.
          </p>
        </div>

        <div class="single-faq2">
          <h3>Are you too poor to start a business?</h3>
          <p>
            I'm a serial entrepreneur and have started/ran/sold
            approximately 20 businesses over the past 45 years.Some of my
            businesses made millions, some of them broke even. But - I never
            lost a dime on a single one.
          </p>
        </div>

        <div class="single-faq2">
          <h3>Do developers really code from scratch in a hackathon?</h3>
          <p>
            I'm a serial entrepreneur and have started/ran/sold
            approximately 20 businesses over the past 45 years.Some of my
            businesses made millions, some of them broke even. But - I never
            lost a dime on a single one.
          </p>
        </div>

        <div class="single-faq2">
          <h3>What pieces do museums not want the public to see?</h3>
          <p>
            I'm a serial entrepreneur and have started/ran/sold
            approximately 20 businesses over the past 45 years.Some of my
            businesses made millions, some of them broke even. But - I never
            lost a dime on a single one.
          </p>
        </div>
      </div>
    </div>
    <div class="space30"></div>
    <div class="price-notice">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="heading4 inner-heading no-margin-heading">
            <h4 class="font-f-3 weight-700">Have more questions?</h4>
            <p>If you have additional questions, please contact us for a thorough discussion and clarification.</p>
          </div>
        </div>
        <div class="col-md-6 text-md-right">
          <a href="#top" id="" class="theme-btn-11">Get In Touch</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====Faq end=======-->

<!--=====Subscribe start=======-->
<div class="subscribe-4 bg12 padding-90 inner-font-1 inner-subscribe">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="heading4 white-heading inner-heading no-margin-heading">
          <h2>Want to connect with us?</h2>
          <p> We are always looking forward to have connect with our team of experts.</p>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 offset-lg-1">
        <div class="sunscribe-form">
          <div class="subscribe-from-wrap">
            <form action="Subscribe" method="post">
              <input type="email" name="email" placeholder="Email Address" />
              <button type="submit" name="submit">
                Subscribe Now
                <img src="assets/img/icons/arrow-up-right.svg" alt="" />
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====Subscribe end=======-->