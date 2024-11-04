<?php
include('includes/header.php');
?>



<!-- contact section -->
<section class="contact_section layout_padding">
  <div class="container">
    <h2 class="font-weight-bold">
      Contact Us
    </h2>
    <div class="row">
      <div class="col-md-8 mr-auto">
        <form action="contact-action.php" method="POST">
          <div class="contact_form-container">
            <div>
              <input type="text" name="name" placeholder="Name" required>
            </div>
            <div>
              <input type="text" name="phone" placeholder="Phone Number" required>
            </div>
            <div>
              <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="mt-5">
              <textarea name="message" placeholder="Message" required></textarea>
            </div>
            <div class="mt-5">
              <button type="submit">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->


<section class="info_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5>
          Fruits
        </h5>
        <ul>
          <li>
            randomised
          </li>
          <li>
            words which
          </li>
          <li>
            don't look even
          </li>
          <li>
            slightly
          </li>
          <li>
            believable. If you
          </li>
          <li>
            are going to use
          </li>
          <li>
            a passage of
          </li>
          <li>
            Lorem Ipsum,
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>
          Services
        </h5>
        <ul>
          <li>
            randomised
          </li>
          <li>
            words which
          </li>
          <li>
            don't look even
          </li>
          <li>
            slightly
          </li>
          <li>
            believable. If you
          </li>
          <li>
            are going to use
          </li>
          <li>
            a passage of
          </li>
          <li>
            Lorem Ipsum,
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5>
          List
        </h5>
        <ul>
          <li>
            randomised
          </li>
          <li>
            words which
          </li>
          <li>
            don't look even
          </li>
          <li>
            slightly
          </li>
          <li>
            believable. If you
          </li>
          <li>
            are going to use
          </li>
          <li>
            a passage of
          </li>
          <li>
            Lorem Ipsum,
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <div class="social_container">
          <h5>
            Follow Us
          </h5>
          <div class="social-box">
            <a href="">
              <img src="images/fb.png" alt="">
            </a>

            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="images/instagram.png" alt="">
            </a>
          </div>
        </div>
        <div class="subscribe_container">
          <h5>
            Subscribe Now
          </h5>
          <div class="form_container">
            <form action="">
              <input type="email">
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include('includes/footer.php');
?>