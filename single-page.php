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

  <!--  <section class="breadTxt">
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
  </section> -->

  <section class="progressBar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="stepPage">
            <div class="active removeLine">
              <img src="assets/images/p1.png" alt="">
              <span>Choose Model</span>
            </div>
            <div class="active">
              <img src="assets/images/p2.png" alt="">
              <span>Choose Fabric
                And Finishes</span>
            </div>
            <div>
              <img src="assets/images/p3.png" alt="">
              <span>Select
                Option</span>
            </div>
            <div>
              <img src="assets/images/p4.png" alt="">
              <span>See
                Summary</span>
            </div>
          </div>

          <div class="sectionPart">
            <h3>Choose Finishes & Fabrics</h3>
            <p>Please select specific finishes below.</p>
            <p>For multiple finish selections, prices are shown for the highest grade selected.</p>
          </div>

          <div class="showProduts">
            <div class="row">
              <div class="col-md-3">
                <div class="filterLeft">
                  <div class="searchBox">
                    <div class="form-group has-feedback has-search">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="filterBox">
                    <div class="grade_1">
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <img src="assets/images/membrane.png" alt="" /> Fabric Name
                            </h4>
                          </div>
                          <div id="filter1" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <div class="filter-setting">
                                <form action="" mathod="GET">
                                  <a class="collapsed-icon-toggle" href="#coll-1" data-toggle="collapse">
                                    <span class="glyphicon glyphicon-minus on-closed"></span>
                                    <span class="glyphicon glyphicon-plus on-opened"></span>
                                    Grade 1
                                  </a>


                                  <div id="coll-1" class="collapse">
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bangle</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bobby</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Fuse</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Graph</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Grid</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Guild</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                  </div>

                                  <a class="collapsed-icon-toggle" href="#coll-2" data-toggle="collapse">
                                    <span class="glyphicon glyphicon-minus on-opened"></span>
                                    <span class="glyphicon glyphicon-plus on-closed"></span>
                                    Grade 2
                                  </a>

                                  <div id="coll-2" class="collapse in">
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bangle</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bobby</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Fuse</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Graph</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Grid</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Guild</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>

                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="filterBox">
                    <div class="grade_1">
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <img src="assets/images/membrane.png" alt="" /> Fabric Name
                            </h4>
                          </div>
                          <div id="filter2" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <div class="filter-setting">
                                <form action="" mathod="GET">
                                  <a class="collapsed-icon-toggle" href="#coll-1a" data-toggle="collapse">
                                    <span class="glyphicon glyphicon-minus on-closed"></span>
                                    <span class="glyphicon glyphicon-plus on-opened"></span>
                                    Grade 3
                                  </a>


                                  <div id="coll-1a" class="collapse">
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bangle</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bobby</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Fuse</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Graph</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Grid</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Guild</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                  </div>

                                  <a class="collapsed-icon-toggle" href="#coll-2a" data-toggle="collapse">
                                    <span class="glyphicon glyphicon-minus on-opened"></span>
                                    <span class="glyphicon glyphicon-plus on-closed"></span>
                                    Grade 4
                                  </a>

                                  <div id="coll-2a" class="collapse">
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bangle</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bobby</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Fuse</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Graph</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Grid</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Guild</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>

                                  </div>

                                  <a class="collapsed-icon-toggle" href="#coll-3a" data-toggle="collapse">
                                    <span class="glyphicon glyphicon-minus on-opened"></span>
                                    <span class="glyphicon glyphicon-plus on-closed"></span>
                                    Grade 5
                                  </a>

                                  <div id="coll-3a" class="collapse in">
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bangle</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bobby</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Fuse</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Graph</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Grid</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Guild</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>

                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--  -->

                  <div class="filterBox">
                    <div class="grade_1">
                      <div class="panel-group">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <img src="assets/images/membrane.png" alt="" /> Fabric Name
                            </h4>
                          </div>
                          <div id="filter3" class="panel-collapse collapse in">
                            <div class="panel-body">
                              <div class="filter-setting">
                                <form action="" mathod="GET">
                                  <a class="collapsed-icon-toggle" href="#coll-1b" data-toggle="collapse">
                                    <span class="glyphicon glyphicon-minus on-closed"></span>
                                    <span class="glyphicon glyphicon-plus on-opened"></span>
                                    Grade 1
                                  </a>


                                  <div id="coll-1b" class="collapse">
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bangle</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bobby</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Fuse</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Graph</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Grid</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Guild</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                  </div>

                                  <a class="collapsed-icon-toggle" href="#coll-2b" data-toggle="collapse">
                                    <span class="glyphicon glyphicon-minus on-opened"></span>
                                    <span class="glyphicon glyphicon-plus on-closed"></span>
                                    Grade 2
                                  </a>

                                  <div id="coll-2b" class="collapse in">
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bangle</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Bobby</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Fuse</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Graph</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Grid</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>
                                    <div class="padding-v-xs" data-toggle="buttons">
                                      <span>Guild</span>
                                      <label class="btn btn-default btn-xs ico">
                                        <input type="checkbox" name="" value="" autocomplete="off" />
                                        <span class="icon glyphicon glyphicon-ok"></span>
                                      </label>
                                    </div>

                                  </div>


                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                </div>
              </div>
              <div class="col-md-9">
                <div class="listOfProducts">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="topHeads">
                        <h3>Grade 2 <span>| Bangle</span></h3>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="showingRes">
                        <p>Showing 1–12 of 16 results</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="productBox">
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
                    <div class="col-md-4">
                      <div class="productBox">
                        <div class="insideList">
                          <img src="assets/images/prod2.png" class="img-responsive" alt="">
                          <p>Autumn Glow</p>
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
                    <div class="col-md-4">
                      <div class="productBox">
                        <div class="insideList">
                          <img src="assets/images/prod3.png" class="img-responsive" alt="">
                          <p>Brazilian Walnut</p>
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
                    <!--  -->
                    <div class="col-md-4">
                      <div class="productBox">
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
                    <div class="col-md-4">
                      <div class="productBox">
                        <div class="insideList">
                          <img src="assets/images/prod2.png" class="img-responsive" alt="">
                          <p>Autumn Glow</p>
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
                    <div class="col-md-4">
                      <div class="productBox">
                        <div class="insideList">
                          <img src="assets/images/prod3.png" class="img-responsive" alt="">
                          <p>Brazilian Walnut</p>
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
                    <!--  -->

                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="topHeads">
                            <h3>Grade 2 <span>| Bobby</span></h3>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="productBox">
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
                        <div class="col-md-4">
                          <div class="productBox">
                            <div class="insideList">
                              <img src="assets/images/prod2.png" class="img-responsive" alt="">
                              <p>Autumn Glow</p>
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
                        <div class="col-md-4">
                          <div class="productBox">
                            <div class="insideList">
                              <img src="assets/images/prod3.png" class="img-responsive" alt="">
                              <p>Brazilian Walnut</p>
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
                        <!--  -->
                      </div>
                    </div>
                    <!--  -->
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="topHeads">
                            <h3>Grade 2 <span>| Bobby</span></h3>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="productBox">
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
                        <div class="col-md-4">
                          <div class="productBox">
                            <div class="insideList">
                              <img src="assets/images/prod2.png" class="img-responsive" alt="">
                              <p>Autumn Glow</p>
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
                        <div class="col-md-4">
                          <div class="productBox">
                            <div class="insideList">
                              <img src="assets/images/prod3.png" class="img-responsive" alt="">
                              <p>Brazilian Walnut</p>
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
                        <!--  -->
                      </div>
                    </div>
                    <!--  -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="bottomAdd">
                    <div class="insideBtm">
                      <a href="javascript:void(0);" type="button">Back</a>
                      <a href="javascript:void(0);" type="button">Select Option</a>
                    </div>
                  </div>
                </div>
              </div>
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