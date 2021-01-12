<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="padding-bottom:30px;">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h3><span>Contact Us</span></h3>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bx bx-map"></i>
          <h3>Reach Us</h3>
          <p><b>Parmanand Sharma (Director)</b><br>
            Shree Balaji Enterprises, Magarpatta,<br>
            Hadapsar, Pune - 411028,<br>
             Maharashtra, India</p>
        </div>
      </div>
<!--
      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-envelope"></i>
          <h3>Email Us</h3>
          <p>contact@example.com</p>
        </div>
      </div> -->

      <div class="col-lg-6 col-md-6">
        <div class="info-box  mb-4" >
          <i class="bx bx-phone-call"></i>
          <h3>Call Us</h3>
          <a target="_blank" href="tel:+918041947127"><p>+91 8041947127</p></a>
        </div>
      </div>

    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-6 ">
        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.500219355077!2d73.9236586147045!3d18.506284087417296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1338f6b8ba3%3A0xcc064fe9a3fcf92f!2sShree%20Balaji%20Enterprises!5e0!3m2!1sen!2sin!4v1609662230207!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
      </div>

      <div class="col-lg-6">
        <form action="Admin/contact_script.php" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button  class="btn btn-outline-primary"type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
            <div class="social-links mt-3">
                <a target="_blank" onclick="_gaq.push(['b._trackEvent','Bottom','twitter','d0055'])" href="https://twitter.com/share?url=https://www.shreebalajienterprises.org/&amp;text=Shree Balaji Enterprises" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a  target="_blank" onclick="_gaq.push(['b._trackEvent','Bottom','facebook','d0055'])" href="https://www.facebook.com/sharer.php?u=https://www.shreebalajienterprises.org/"  class="facebook"><i class="bx bxl-facebook"></i></a>
                <a  target="_blank" onclick="_gaq.push(['b._trackEvent','Bottom','googleplus','d0055'])" href="https://plus.google.com/share?url=https://www.shreebalajienterprises.org/"  class="google-plus"><i class="bx bxl-google-plus-circle"></i></a>
                <a target="_blank" onclick="_gaq.push(['b._trackEvent','Bottom','linkedin','d0055'])" href="https://www.linkedin.com/cws/share?url=https://www.shreebalajienterprises.org/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->



<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
<div class="container">
  <div class="copyright">
    <span>Copyright &copy; <?php echo date("Y"); ?>. All Rights Reserved |  Designed & Developed by <a href="https://www.hspmsolutions.com/" style="color:#000;"><b>HSPM Solutions</b></a></span>
  </div>
</div>
</div>
</footer>
<!-- End Footer-->

<div id="preloader"></div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.contact-btn {
  display: flex;
  height: 4rem;
  width: 4rem;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  border: 1px solid white;
  background: dodgerblue;
  /*background-image: linear-gradient(to left, #24145c, #9d0707);*/
  color: whitesmoke;
  font-size: 3rem;
  padding: 0.25rem;
  text-align: center;
  -webkit-box-shadow: 0.1rem 0.3rem 0.3rem rgba(0, 0, 0, 0.5);
          box-shadow: 0.1rem 0.3rem 0.3rem rgba(0, 0, 0, 0.5);
  position: fixed;
  right: 1rem;
  bottom: 2rem;
  cursor: pointer;
  z-index: 999;
  -webkit-transition: 0.5s ease-in-out all;
  transition: 0.5s ease-in-out all;
}

.contact-btn:hover {
  -webkit-box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
          box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
}


.contact-btn .contact-logo {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 3.5rem;
  width: 3.5rem;
  font-size: 2.25rem;
  border-radius: 50%;
  color: whitesmoke;
  text-align: center;
  margin: 0.5rem auto;
  -webkit-transition: 0.5s ease-in-out all;
  transition: 0.5s ease-in-out all;
  -webkit-box-shadow: 0.1rem 0.3rem 0.3rem rgba(0, 0, 0, 0.5), -0.1rem -0.3rem 0.3rem rgba(0, 0, 0, 0.5);
          box-shadow: 0.1rem 0.3rem 0.3rem rgba(0, 0, 0, 0.5), -0.1rem -0.3rem 0.3rem rgba(0, 0, 0, 0.5);
}

.contact-btn .contact-logo a {
  display: block;
  color: whitesmoke;
  text-decoration: none;
}


.contact-btn .contact-logo:nth-of-type(2) {
  background: dodgerblue;
}

.contact-btn .contact-logo:nth-of-type(2):hover {
  -webkit-box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
          box-shadow: 0.1rem 0.1rem 0.1rem rgba(0, 0, 0, 0.7), -0.1rem -0.1rem 0.1rem rgba(0, 0, 0, 0.7);
}


</style>
<div class="contact-btn" id="contact-btn">
    <div class="contact-logo">
      <a target="_blank" href="tel:08041947127"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
</div>
<script>
const contactBtn = document.querySelector('#contact-btn');
const allBtns = document.querySelector('#all-btns');
const closeBtn = document.querySelector('#close-btn');

contactBtn.addEventListener('click', () => {
    allBtns.style.display = "flex";
    contactBtn.style.display = "none";
});

closeBtn.addEventListener('click', () => {
    allBtns.style.display = "none";
    contactBtn.style.display = "flex";
});
</script>
