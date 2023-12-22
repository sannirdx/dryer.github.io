<!DOCTYPE html>
<html lang="en" class="homepage">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <?php  require("include/header-link.php");  ?>
</head>

<body class="mainHomepage">

  <?php  require("include/header.php");  ?>


  <section class="topSlider">
    <div class="mainSlider owl-carousel owl-theme">
      <div class="item bg_1">
        <div class="mainSliderIns">
          <h2>Designed To Last
          </h2>
          <p>Your furniture is a part of your identity. Our commitment to delivering the highest-quality furniture is
            second to none. We stand by the durability and functionality of our products that are built to last.</p>
        </div>
      </div>
      <div class="item bg_2">
        <div class="mainSliderIns">
          <h2>Designed To Last
          </h2>
          <p>Your furniture is a part of your identity. Our commitment to delivering the highest-quality furniture is
            second to none. We stand by the durability and functionality of our products that are built to last.</p>
        </div>
      </div>
      <div class="item bg_1">
        <div class="mainSliderIns">
          <h2>Designed To Last
          </h2>
          <p>Your furniture is a part of your identity. Our commitment to delivering the highest-quality furniture is
            second to none. We stand by the durability and functionality of our products that are built to last.</p>
        </div>
      </div>
      <div class="item bg_2">
        <div class="mainSliderIns">
          <h2>Designed To Last
          </h2>
          <p>Your furniture is a part of your identity. Our commitment to delivering the highest-quality furniture is
            second to none. We stand by the durability and functionality of our products that are built to last.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="designedTo">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Common Place</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Crossroads</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Daydream</p>
          </div>
        </div>
        <!--  -->
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Destination</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Drift</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Elegance</p>
          </div>
        </div>
        <!--  -->
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Metro</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Pathway</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Provision</p>
          </div>
        </div>
        <!--  -->
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Rives</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>The Grand</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="insideList">
            <img src="assets/images/white-bg.png" class="img-responsive" alt="">
            <p>Tranquility</p>
          </div>
        </div>
        <!--  -->

      </div>
    </div>
  </section>


  <?php require("include/footer.php");?>

  <!--End Footer -->
  <?php require("include/footer-links.php");?>
  <!--End Footer link-->
  <script>
  function setOpacity() {
    var elements = $('.active');
    let count = 0;

    $(elements).each(function(k, v) {
      if (count == 0 || count == elements.length - 1) {
        $(v).css('opacity', '0.8');
      }
      count++;
    });
  }

  $(document).ready(function() {
    setOpacity();
  });
  </script>
</body>

</html>