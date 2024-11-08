<?php
include('includes/header.php');

$allproduct = $obj->getAll('products');

?>
<!-- slider section -->
<section class=" slider_section position-relative">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="slider_item-box">
          <div class="slider_item-container">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="slider_item-detail">
                    <div>
                      <h1>
                        Welcome to <br />
                        Our Fruits Shop
                      </h1>
                      <p>
                        There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or
                        randomised words which don't look even slightly
                        believable.
                      </p>
                      <div class="d-flex">
                        <a href="fruit.php" class="text-uppercase custom_orange-btn mr-3">
                          Shop Now
                        </a>
                        <a href="contact.php" class="text-uppercase custom_dark-btn">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <div>
                      <img src="images/slide-img.png" alt="" class="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="slider_item-box">
          <div class="slider_item-container">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="slider_item-detail">
                    <div>
                      <h1>
                        Welcome to <br />
                        Our Fruits Shop
                      </h1>
                      <p>
                        There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or
                        randomised words which don't look even slightly
                        believable.
                      </p>
                      <div class="d-flex">
                        <a href="" class="text-uppercase custom_orange-btn mr-3">
                          Shop Now
                        </a>
                        <a href="" class="text-uppercase custom_dark-btn">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <div>
                      <img src="images/image7.png" alt="" class="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="slider_item-box">
          <div class="slider_item-container">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="slider_item-detail">
                    <div>
                      <h1>
                        Welcome to <br />
                        Our Fruits Shop
                      </h1>
                      <p>
                        There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour, or
                        randomised words which don't look even slightly
                        believable.
                      </p>
                      <div class="d-flex">
                        <a href="" class="text-uppercase custom_orange-btn mr-3">
                          Shop Now
                        </a>
                        <a href="" class="text-uppercase custom_dark-btn">
                          Contact Us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <div>
                      <img src="images/image6.png" alt="" class="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="custom_carousel-control">
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<!-- end slider section -->
</div>

<!-- service section -->

<section class="service_section layout_padding ">
  <div class="container">
    <h2 class="custom_heading">Our Services</h2>
    <p class="custom_heading-text">
      There are many variations of passages of Lorem Ipsum available, but
      the majority have
    </p>
    <div class=" layout_padding2">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="images/card-item-1.png" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title">Orange</h5>
            <p class="card-text">
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomised words which don't look
              even slightly believable.
            </p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/card-item-2.png" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title">Grapes</h5>
            <p class="card-text">
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomised words which don't look
              even slightly believable.
            </p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="images/card-item-3.png" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title">Gauva</h5>
            <p class="card-text">
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomised words which don't look
              even slightly believable.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="" class="custom_dark-btn">
        Read More
      </a>
    </div>
  </div>
</section>

<!-- end service section -->

<!-- fruits section -->

<section class="fruit_section">
  <div class="container">
    <h2 class="custom_heading">Fresh Fruits</h2>
    <p class="custom_heading-text">
      There are many variations of passages of Lorem Ipsum available, but
      the majority have
    </p>
    <?php
    foreach ($allproduct as $item) {
    ?>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
              <?= $item['name'] ?>
            </h3>
            <p class="mt-4 mb-5">
              <?= $item['description'] ?>
            </p>
            <div class="d-flex">
              <p style="text-decoration: line-through; color: red;">Rs. <?= $item['cost_price'] ?></p>
              <p style="color: green; margin-left: 10px;">Rs. <?= $item['sale_price'] ?></p>
              <strong class="ml-5">InStock:</strong>
              <p class="ml-5"><?= $item['qty'] ?> kgs</p>
            </div>
            <br>
            <div class="d-flex">
              <div class="ml-5">
                <button class="qty-btn btn-dark" onclick="changeQty('minus', <?= $item['id'] ?>)">-</button>
                <input type="text" id="qty-<?= $item['id'] ?>" value="1" style="width: 40px; text-align: center;" readonly>
                <button class="qty-btn btn-dark" onclick="changeQty('plus', <?= $item['id'] ?>)">+</button>
              </div>
              <!-- Add the select dropdown for kg and g -->
              <select id="unit-<?= $item['id'] ?>" class="ml-2">
                <option value="kg">kg</option>
                <option value="g">g</option>
              </select>
            </div>
            <br>
            <div class="d-flex">
              <a onclick="addToCart(<?= $item['id'] ?>)" class="text-uppercase custom_orange-btn mr-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="admin/<?= $item['image'] ?>" alt="" class="" width="150px" />
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>

<!-- end fruits section -->

<!-- tasty section -->
<section class="tasty_section">
  <div class="container_fluid">
    <h2>
      Very tasty fruits
    </h2>
  </div>
</section>

<!-- end tasty section -->

<!-- client section -->

<section class="client_section layout_padding">
  <div class="container">
    <h2 class="custom_heading">Testimonial</h2>
    <p class="custom_heading-text">
      There are many variations of passages of Lorem Ipsum available, but
      the majority have
    </p>
    <div>
      <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="client_detail">
                <h3>
                  Johnhex
                </h3>
                <p class="custom_heading-text">
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have suffered alteration in
                  some form, by injected humour, or randomised words which
                  don't look even slightly believable. If you are <br />
                  going to use a passage of Lorem Ipsum, you need to be sure
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="client_detail">
                <h3>
                  Johnhex
                </h3>
                <p class="custom_heading-text">
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have suffered alteration in
                  some form, by injected humour, or randomised words which
                  don't look even slightly believable. If you are <br />
                  going to use a passage of Lorem Ipsum, you need to be sure
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_img-box">
                <img src="images/client.png" alt="" />
              </div>
              <div class="client_detail">
                <h3>
                  Johnhex
                </h3>
                <p class="custom_heading-text">
                  There are many variations of passages of Lorem Ipsum
                  available, but the majority have suffered alteration in
                  some form, by injected humour, or randomised words which
                  don't look even slightly believable. If you are <br />
                  going to use a passage of Lorem Ipsum, you need to be sure
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
            <span class="" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
            <span class="" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- end client section -->

<!-- contact section -->
<section class="contact_section layout_padding">
  <div class="container">
    <h2 class="font-weight-bold">
      Contact Us
    </h2>
    <div class="row">
      <div class="col-md-8 mr-auto">
        <form action="">
          <div class="contact_form-container">
            <div>
              <div>
                <input type="text" placeholder="Name">
              </div>
              <div>
                <input type="text" placeholder="Phone Number">
              </div>
              <div>
                <input type="email" placeholder="Email">
              </div>

              <div class="mt-5">
                <input type="text" placeholder="Message">
              </div>
              <div class="mt-5">
                <button type="submit">
                  send
                </button>
              </div>
            </div>

          </div>

        </form>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->


<!-- map section -->
<section class="map_section">
  <div id="map" class="h-100 w-100 ">
  </div>
</section>

<!-- end map section -->

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

<script>
  function changeQty(action, id) {
    let qtyInput = document.getElementById(`qty-${id}`);
    let currentQty = parseInt(qtyInput.value);

    if (action === 'plus') {
      qtyInput.value = currentQty + 1;
    } else if (action === 'minus' && currentQty > 1) {
      qtyInput.value = currentQty - 1;
    }
  }

  function addToCart(id) {
    let qty = document.getElementById(`qty-${id}`).value;
    let unit = document.getElementById(`unit-${id}`).value;
    window.location.href = `add-to-cart.php?id=${id}&qty=${qty}&unit=${unit}`;
  }
</script>