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

  <section class="cartInside">
    <div class="container">
      <div class="row">


        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-md-6">
                  <div class="media">
                    <a class="thumbnail pull-left" href="#">
                      <img class="media-object" src="assets/images/prod2.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Ankara Cherry</h4>
                      <p>ACP-DRCPL-02-001</p>
                    </div>
                  </div>
                </td>
                <td class="col-md-1" style="text-align: center">
                  <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                </td>

                <td class="col-md-5">
                  <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-remove"></span> Remove
                  </button>
                  <button type="button" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span> Remove
                  </button>
                </td>
              </tr>
              <tr>
                <td class="col-md-6">
                  <div class="media">
                    <a class="thumbnail pull-left" href="#">
                      <img class="media-object" src="assets/images/prod2.png" alt="" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Ankara Cherry</h4>
                      <p>ACP-DRCPL-02-001</p>
                    </div>
                  </div>
                </td>
                <td class="col-md-1" style="text-align: center">
                  <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                </td>

                <td class="col-md-5">
                  <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-remove"></span> Remove
                  </button>
                  <button type="button" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span> Remove
                  </button>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

      </div>
    </div>
  </section>

  <section class="cheacotMore">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <h3>Checkout More Materials</h3>
        </div>
        <div class="col-md-12">
          <div class="checkoutSlider owl-carousel owl-theme">
            <div class="item">
              <div class="insideList">
                <img src="assets/images/prod1.png" class="img-responsive" alt="">
                <p>Ankara Cherry</p>
                <div class="addWishlist">
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/wishlist-black.png" alt="">
                  </a>
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/addCart.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="insideList">
                <img src="assets/images/prod1.png" class="img-responsive" alt="">
                <p>Ankara Cherry</p>
                <div class="addWishlist">
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/wishlist-black.png" alt="">
                  </a>
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/addCart.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="insideList">
                <img src="assets/images/prod1.png" class="img-responsive" alt="">
                <p>Ankara Cherry</p>
                <div class="addWishlist">
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/wishlist-black.png" alt="">
                  </a>
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/addCart.png" alt="">
                  </a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="insideList">
                <img src="assets/images/prod1.png" class="img-responsive" alt="">
                <p>Ankara Cherry</p>
                <div class="addWishlist">
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/wishlist-black.png" alt="">
                  </a>
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/addCart.png" alt="">
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="insideList">
                <img src="assets/images/prod1.png" class="img-responsive" alt="">
                <p>Ankara Cherry</p>
                <div class="addWishlist">
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/wishlist-black.png" alt="">
                  </a>
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/addCart.png" alt="">
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="insideList">
                <img src="assets/images/prod1.png" class="img-responsive" alt="">
                <p>Ankara Cherry</p>
                <div class="addWishlist">
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/wishlist-black.png" alt="">
                  </a>
                  <a href="javascript:void(0);" type="button">
                    <img src="assets/images/addCart.png" alt="">
                  </a>
                </div>
              </div>
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