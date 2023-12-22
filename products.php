<!DOCTYPE html>
<html lang="en" class="homepage">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products Page</title>
  <?php  require("include/header-link.php");  ?>
</head>

<body>

  <?php  require("include/header.php");  ?>

  <section class="breadTxt">
    <div class="container">
      <div class="col-md-12">
        <div class="row">
          <div class="breadTxtLink">
            <a href="index.php">Home</a> >
            <a href="#">Products</a> >
            <a href="#">Common Place </a> >
            <a href="#" class="active">Nightstand with drawer </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="insideProducts">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="outer">
            <div class="wishList">
              <a href="javascript:(0);" type="button">
                <img src="assets/images/wishlist.png" alt="">
              </a>
            </div>
            <div id="big" class="owl-carousel owl-theme">
              <div class="item">
                <div class="itemImg">
                  <img src="assets/images/cart-img-1.jpg" class="img-responsive" alt="">
                  <div class="imgZoomIn">
                    <a href="#"><img src="assets/images/zoomin.jpg" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="itemImg">
                  <img src="assets/images/cart-img-1.jpg" class="img-responsive" alt="">
                  <div class="imgZoomIn">
                    <a href="#"><img src="assets/images/zoomin.jpg" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="itemImg">
                  <img src="assets/images/cart-img-1.jpg" class="img-responsive" alt="">
                  <div class="imgZoomIn">
                    <a href="#"><img src="assets/images/zoomin.jpg" alt=""></a>
                  </div>
                </div>
              </div>

            </div>
            <div id="thumbs" class="owl-carousel owl-theme">
              <div class="item">
                <div class="thumImg">
                  <img src="assets/images/thum-1.jpg" class="img-responsive" alt="">
                </div>
              </div>
              <div class="item">
                <div class="thumImg">
                  <img src="assets/images/thum-1.jpg" class="img-responsive" alt="">
                </div>
              </div>
              <div class="item">
                <div class="thumImg">
                  <img src="assets/images/thum-1.jpg" class="img-responsive" alt="">
                </div>
              </div>
              <div class="item">
                <div class="thumImg">
                  <img src="assets/images/thum-1.jpg" class="img-responsive" alt="">
                </div>
              </div>
            </div>
          </div>


        </div>
        <div class="col-md-5">
          <div class="rightProudts">
            <div class="productDetails">
              <h3>Nightstand
              With Drawer</h3>
              <p>ACP-DRCPL-02-001</p>
            </div>
            <div class="diffSize">
              <h4>OVERALL DIMENSIONS</h4>
              <p>20"W x 20"D x 24"H</p>
              <p>20"W x 20"D x 24"H</p>
              <p>20"W x 20"D x 24"H</p>
            </div>
            <div class="dowloadsIn">
              <h5>Download</h5>
              <div class="indDwl">
                <div>
                  <img src="assets/images/cut-sheet.jpg" alt="">
                </div>
                <div>
                  <p>Cut Sheet</p>
                </div>
              </div>
              <div class="indDwl">
                <div>
                  <img src="assets/images/high-quality.jpg" alt="">
                </div>
                <div>
                  <p>High-Quality Image</p>
                </div>
              </div>
            </div>
            <div class="addCart">
              <a href="">Get A Quote</a>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="col-md-12">

          <div class="additionalDetails">
            <h3>ADDITIONAL DETAILS</h3>
            <ul>
              <li>- HPL top and TFL case</li>
              <li>- PVC edgebanding to match laminate</li>
              <li>- Tack-in nylon glides</li>
              <li>- Camlock construction</li>
              <li>- Ball-bearing drawer slides (capacity = 100 lbs)</li>
              <li>- Dovetail construction drawer box</li>
              <li>- Pictured with power outlet upgrade</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="trendingProducts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3>Trending Products</h3>
        </div>
        <div class="col-md-3">
          <div class="trendingIns">
           <div class="trendImg">
            <img src="assets/images/trend1.jpg" class="img-responsive" alt="">
          </div>
          <div class="detailsTrend">
            <p>Three Drawer Chest</p>
            <a href="">View Product</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="trendingIns">
         <div class="trendImg">
          <img src="assets/images/trend2.jpg" class="img-responsive" alt="">
        </div>
        <div class="detailsTrend">
          <p>Coffee Table</p>
          <a href="">View Product</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="trendingIns">
       <div class="trendImg">
        <img src="assets/images/trend3.jpg" class="img-responsive" alt="">
      </div>
      <div class="detailsTrend">
        <p>Luggage Bench</p>
        <a href="">View Product</a>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="trendingIns">
      <div class="trendImg">
        <img src="assets/images/trend4.jpg" class="img-responsive" alt="">
      </div>
      <div class="detailsTrend">
        <p>Two-Door Wardrobe</p>
        <a href="">View Product</a>
      </div>
    </div>
  </div>
</div>
</div>
</section>


<?php require("include/footer.php");?>

<!--End Footer -->
<?php require("include/footer-links.php");?>
<!--End Footer link-->
</body>

</html>