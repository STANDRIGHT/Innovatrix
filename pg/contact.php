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
            <img src="assets/img/icons/call.png" alt="" />
          </div>
          <div class="contact-box-content">
            <p class="font-f-3">CALL US</p>
            <a href="tel:<?= $Company["phone2"] ?>"><?= $Company["phone2"] ?></a>
          </div>              
        </div>
      </div>


      <div class="col-lg-6">
        <div class="single-contact-box">
          <div class="contact-box-icon">
            <img src="assets/img/icons/whatapp.png" alt="" />
          </div>          
          <div class="contact-box-content">
            <p class="font-f-3">WHATSAPP US</p>
            <a href="https://wa.me/<?= $Company["phone"]?>?text=Hello, <?= $Company["name"]?>%20I%20need%20a%20professional%20looking%20website%20for%20my%20Business%20Thanks,"><?= $Company["phone"] ?></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="single-contact-box">
          <div class="contact-box-icon">
            <img src="assets/img/icons/mall.png" alt="" />
          </div>
          <div class="contact-box-content">
            <p class="font-f-3">EMAIL US</p>
            <a href="mailto:<?= $Company["email"] ?>"><?= $Company["email"] ?></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="single-contact-box" >
          <div class="contact-box-icon">
            <img src="assets/img/icons/address.png" alt="address.png" />
          </div>
          <div class="contact-box-content">
            <p class="font-f-3">HEADQUARTERS</p>
            <a href="https://goo.gl/maps/ZSYzcw7ot98TRnJ49"><?= $Company["address"] ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====Contact Boxes End=======-->








<!--=====Contact Form Start=======-->
<div class="main-contact-form section-padding" id="return">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="heading2 mr50">
          <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg" alt="" />We Are Here to provide solutions</small>
          <h2>Let’s Work Together</h2>
          <p>We assist companies all around the world in utilizing full-cycle software development services to differentiate themselves from the competition.</p>
        </div>
      </div>
      <div class="col-lg-8 " >
        <div class="main-form">
          <form action="processor/pcontact.php" method="POST">
            <!-- <div id="add_err"></div> -->
              <a href="#drop"></a>

            <?php if(isset($_SESSION["msg"])){  echo $_SESSION["msg"]; session_unset(); } ?>
            <div class="row">
              <div class="col-lg-6">
                <input type="text" name="fname" id="name" placeholder="First Name" />
              </div>
              <div class="col-lg-6">
                <input type="text" name="lname" id="lname" placeholder="Last Name" />
              </div>
              <div class="col-12" id="#top">
                <input type="email" name="email" id="email" placeholder="Email Address" />
              </div>
              <div class="col-lg-6">
                <input type="text" name="service" id="service" placeholder="Service Interested In" />
              </div>
              <div class="col-lg-6">
                <input type="text" name="subject" id="subject" placeholder="Subject" />
              </div>
              <div class="col-12">
                <textarea name="message" id="message" cols="30" rows="5" placeholder="Tell Us About Your Projects"></textarea>
              </div>
              <div class="col-12">
                <!-- <a href="pcontact.php" name="submit" id="submit" class="theme-btn-11">Submit</a> -->
                <button type="submit" name="submit" id="submit" class="full-btn theme-btn-11">Submit</button>
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
          <h3> How long does software development take?
          </h3>
          <p>We cannot possibly answer this question precisely because there are projects finished in 2 to 3 weeks, but there are also tasks that take several years to complete. </p>

          <p>To provide you with a precise answer, we have to evaluate the project complexity and the work scope. Knowing this information, we can provide you with the estimated time frame.
          </p>
        </div>

        <div class="single-faq2">
          <h3>How do you guarantee the product quality?</h3>
          <p>We work in a short iteration mode and regularly test the work results, taking into account all customer preferences and the target audience reaction. This approach allows us to provide our customers with high-quality products, observing the specified deadlines. Quality is our top priority.</p>
        </div>

        <div class="single-faq2">
          <h3>Should I be familiar with the technical details to work with you?</h3>
          <p>There is absolutely no need for this. After all, you do not have to know medical nuances when seeking a dentist’s services. You do not have to be an expert in software development because, actually, we are. We are ready to explain to you all unclear moments and the essence of all stages while working on the project.</p>

          <p>On your part, all you need is a clear vision of what objectives you want to achieve using the desired software product. Therefore, you just have to focus on your needs, and we will help you make them a reality.</p>
        </div>

        <div class="single-faq2">
          <h3> What information do you need from me to start work?
            ?</h3>
          <p>Share the details of your project – like scope, timeframes, or business challenges you’d like to solve.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="single-faq2">
          <h3>I need an app for iOS and Android. Which platform is better to start with?</h3>
          <p>Which platform you should choose depends solely on the future application idea as well as its target audience. Each platform has its own monetization model. Apple users spend more money on paid apps and in-app purchases. </p>

          <p>If the goal is direct monetization, then iOS should be chosen. There are more Android users; however, they are less likely to pay for app installation and prefer free applications. The more downloads, the more expensive the advertising is in the application. Android should be chosen if the goal is managing user attention.</p>

            <p>We highly recommend starting with only one platform or building a cross-platform application. This will speed up launching the project, and help to assess its weaknesses and make any necessary changes. This will save you money and time.</p>
        </div>

        <div class="single-faq2">
          <h3>What methodologies do you use in your work?</h3>
          <p>The main methodology we use in our work is Agile, although the choice may depend on a particular project. An iterative approach to the work on the project provides us with the opportunity to regularly improve the product quality, and also constant customer feedback.</p>
        </div>

        <div class="single-faq2">
          <h3>Can you make changes to a product which other developers have already started?</h3>
          <p>Yes, we can. Our software engineers are well versed in various technologies and will practically always be able to continue the product started by some other team.</p>
        </div>

        <div class="single-faq2">
          <h3>How does the project work process take place?</h3>
          <p>Each project is unique and requires a customized approach, but most of the development stages are relevant to all of them. However, the very process of their implementation may differ somewhat. We recommend you read more about our work processes on our website.</p>
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