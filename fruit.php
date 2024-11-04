<?php
include('includes/header.php');
$allproduct = $obj->getAll('products');
?>


<!-- fruits section -->


<section class="slider_section position-relative">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="container">
      <div class="row">
        <!-- Fixed text content -->
        <div class="col-md-6">
          <div class="slider_item-detail">
            <div>
              <h1>
                Welcome to <br />
                Our Fruits Section
              </h1>
              <p>
                There are many variations of passages of Lorem
                Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or
                randomised words which don't look even slightly
                believable.
              </p>
            </div>
          </div>
        </div>

        <!-- Carousel images only -->
        <div class="col-md-6">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="slider_img-box">
                <div>
                  <img src="images/image5.png" alt="" class="" />
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="slider_img-box">
                <div>
                  <img src="images/image1.png" alt="" class="" />
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="slider_img-box">
                <div>
                  <img src="images/image2.png" alt="" class="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="fruit_section layout_padding-top">
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
              <strong class="ml-5">Stock</strong>
              <p class="ml-5"><?= $item['qty'] ?> kgs</p>
            </div>
            <br>
            <div class="d-flex">
              <div class="ml-5">
                <button class="qty-btn " onclick="changeQty('minus', <?= $item['id'] ?>)">-</button>
                <input type="text" id="qty-<?= $item['id'] ?>" value="1" style="width: 40px; text-align: center;" readonly>
                <button class="qty-btn " onclick="changeQty('plus', <?= $item['id'] ?>)">+</button>
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
            <img src="admin/<?= $item['image'] ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div>

    <?php
    }
    ?>
  </div>
</section>

<!-- end fruits section -->


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